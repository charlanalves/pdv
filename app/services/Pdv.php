<?php

namespace App\Services;

ini_set('memory_limit', '-1');
set_time_limit(-1);

use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\User\Component;
use App\Models\Usuario as Usuario;
use App\Models\Op as Op;
use App\Models\Nfsaida as Nfsaida;
use App\Models\Nfentrada as Nfentrada;
use App\Models\MovimentacaoManualEstoque as MovManual;
use App\Models\MovEstoque as MovEstoque;
use App\Models\MovimentacaoNserie as MovimentacaoNserie;

class Pdv extends Component
{

    public function verificarCaixaAberto()
    {
        $auth = new \App\Services\Auth;
        $sessao = $auth->getIdentity();
        $caixa = \App\Models\PdvCaixa::find(array(
            "columns" => "\App\Models\PdvCaixa.cd_caixa, DATE_FORMAT(\App\Models\PdvCaixa.data_abertura, '%Y-%m-%d')",
            "conditions" => 'cd_usuario = :usuario: 
                             AND DATE(data_abertura) = CURDATE() 
                             AND (DATE(data_fechamento) != CURDATE() or data_fechamento is null)
                             AND cd_unidade = :unidade:
                             AND deletado != :deletado:
                             ',
            "bind" => array(
                    "usuario" => $sessao['id'],
                    "unidade" => $sessao['unidade'],
                    "deletado" => 1
                )
            ));
        return $caixa->valid();
    }

    public function buscarCaixaAberto()
    {
        $auth = new \App\Services\Auth;
        $sessao = $auth->getIdentity();
        $caixa = \App\Models\PdvCaixa::find(array(
            "conditions" => 'cd_usuario = :usuario: 
                             AND DATE(data_abertura) = CURDATE() 
                             AND (DATE(data_fechamento) != CURDATE() or data_fechamento is null)
                             AND cd_unidade = :unidade:
                             AND deletado != :deletado:
                             ',
            "bind" => array(
                    "usuario" => $sessao['id'],
                    "unidade" => $sessao['unidade'],
                    "deletado" => 1
                )
            ));
        return $caixa[0]->getCdCaixa();
    }

    public function finalizarVenda(&$erro = '')
    {
        $this->db->begin();
        $venda = new \App\Models\PdvVendas();
        $auth = new \App\Services\Auth;
        $sessao = $auth->getIdentity();
        $caixaAberto = $this->buscarCaixaAberto();
        $venda->setCdEmpresa($sessao['id']);
        if ($this->request->getPost('cdEmpresa')) {
            $venda->setCdCliente($this->request->getPost('cdEmpresa'));
            $venda->setExisteDadosCliente(1);
        } else {
            $venda->setExisteDadosCliente(0);
            $empresa = new \App\Models\Empresa();
            $end = new \App\Models\Endereco();

            $empresa->setNome($this->request->getPost('nome'));
            $empresa->setCpfCnpj($this->request->getPost('cpf'));
            $empresa->setDivisaoCdDivisao(1);
            if ($empresa->save()) {
                $end->setEmpresaCdEmpresa($empresa->getCdEmpresa());
                $end->setCidade($this->request->getPost('cidade'));
                $end->setBairro($this->request->getPost('bairro'));
                $end->setRua($this->request->getPost('rua'));
                $end->setComplemento($this->request->getPost('complemento'));
                $end->setCep($this->request->getPost('cep'));
                $end->setUf($this->request->getPost('uf'));
                $end->setTipo(0);
                $end->setNumero($this->request->getPost('numero'));
                $venda->setCdCliente($empresa->getCdEmpresa());
                if (!$end->save()) {
                    $this->db->rollback();
                    $erro = "Erro ao salvar o cliente";
                    return false;
                }
            } else {
                $this->db->rollback();
                $erro = "Erro ao salvar o endereço";
                return false;
            }
        }
        $postVenda = json_decode($this->request->getPost('venda'), 1);
        $produto = $postVenda['item'];
        $pagtos = $postVenda['pagto'];
        $total = 0;
        foreach ($produto as $key) {
            $total += $key['vlTotal'];
        }
        $venda->setValorTotal($total);
        $venda->setCdCaixa($caixaAberto);
        $venda->setEntregaDomicilio(0);
        if ($venda->save()) {
            foreach ($produto as $key) {
                $item = new \App\Models\PdvVendasHasItens();
                $item->setCdProduto($key['codigo']);
                $prod = \App\Models\Produto::findFirstByCdProduto($key['codigo']);
                $item->setNomeProduto($key['nome']);
                $item->setPrecoUnit($key['precoUn']);
                $item->setQuantidade($key['quantidade']);
                $item->setQdtCompra($prod->getQtdeCompra());
                $item->setQtdVenda($prod->getQtdeVenda());
                $item->setUnidadeVenda($prod->getCdMedidaVenda());
                $item->setCdVenda($venda->getCdVenda());
                if (!$item->save()) {
                    $this->db->rollback();
                    foreach ($item->getMessages() as $message) {
                        echo $message, "\n";
                    }
                    $erro = 'Erro ao salvar o produto '.$key['nome'];
                    return false;
                }
            }
        } else {
            $this->db->rollback();
            foreach ($venda->getMessages() as $message) {
                    echo $message, "\n";
            }
            $erro = 'Erro ao salvar a venda';
            return false;
        }
        foreach ($pagtos as $key) {
            $pagto = new \App\Models\PdvVendasHasFormaPagto();
            $pagto->setCdPdvVenda($venda->getCdVenda());
            $pagto->setCdCondPagto($key['condPagto']);
            $pagto->setValor($key['valor']);
            if (!$pagto->save()) {
                $this->db->rollback();
                $erro = 'Erro ao salvar forma de pagamento';
                return false;
            }
        }
        return true;
        $this->db->commit();
    }
}
