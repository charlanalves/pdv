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

class Estoque extends Component
{

    public function arrumarEstoque()
    {
        $this->gerarMovimentacaoNFentrada();
        $this->gerarMovimentacaoOP();
        $this->gerarMovimentacaoNFsaida();
        $this->gerarMovimentacaoManual();
        $this->ordernarEstoque();
        $this->recalcularEstoque();
        $this->recalcularEstoque();
    }

    public function recalcular()
    {
        $this->recalcularEstoque();
        $this->recalcularEstoque();
    }

    private function gerarMovimentacaoOP()
    {
        $ops = Op::find(array(
                "conditions" => 'cd_empresa = :empresa:',
                "bind" => array('empresa' => 4,
                                )
                    ));
        foreach ($ops as $opsKey) {
            $dados = array();
            $dados['unidade'] = $opsKey->Empresa->UnidadeNegocio->getCdUnidade();

            $dados['op'] = $opsKey->getCdOp();
            foreach ($opsKey->Opetapa as $etapas) {
                if (empty($etapas->getFim())) {
                    continue;
                }
                $data = new \DateTime($etapas->getFim());
                $dados['data'] = $data->format('Y-m-d');
                $dados['hora'] = $data->format('H:i:s');
                foreach ($etapas->Opetapaitem as $item) {
                    $dados['produto'] = $item->getProdutoCdProduto();
                    $dados['quantidade'] = $item->getQtdUtilizada();
                    $dados['etapaOpItem'] = $item->getCdItem();
                    $dados['tipo'] = 'S';
                    $dados['valorUnitario'] = '0.00';
                    $dados['armazenagem'] = $this->buscarCentroArmazenagemPadraoProduto($dados);

                    if ($this->movimentarEstoque($dados) == false) {
                        var_dump('Erro registro:');
                        var_dump($dados);
                    }

                    unset($dados['produto']);
                    unset($dados['quantidade']);
                    unset($dados['valorUnitario']);
                    unset($dados['etapaOpItem']);
                    unset($dados['tipo']);
                    unset($dados['totalEstoque']);
                    unset($dados['saldoEstoque']);
                    unset($dados['custoMedio']);
                }
                unset($dados['data']);
                unset($dados['hora']);
            }
            $dados['tipo'] = 'E';
            $dados['produto'] = $opsKey->getCdProduto();
            $dados['quantidade'] = $opsKey->getQuantidadeFabricado();
            $dados['ld'] = $opsKey->getProdutoLd();
            $dados['obs'] = $opsKey->getObservacao();
            $data = new \DateTime($opsKey->getTermino());
            $dados['data'] = $data->format('Y-m-d');
            $dados['hora'] = $data->format('H:i:s');
            $dados['valorUnitario'] = '0.00';
            if (!empty($opsKey->getNserie())) {
                $dados['nserie'][] = $opsKey->getNserie();
            }
            $dados['armazenagem'] = $opsKey->getCdArmazenagem();
            if ($opsKey->getStatus() == 2) {
                if ($this->movimentarEstoque($dados) == false) {
                    var_dump('Erro registro:');
                    var_dump($dados);
                }
            }
            unset($dados);
        }
        var_dump('FIM OP');
    }

    private function gerarMovimentacaoNFsaida()
    {
        $nfsaida = Nfsaida::find(array(
                "conditions" => 'cancelada != :cancelada:
                                 and pedido_cd_pedido != :null:
                                 and fornecedor_cd_fornecedor = :empresa:',
                "bind" => array('cancelada' => 1,
                                'null' => 'null',
                                'empresa' => 4,
                                )
                    ));
        foreach ($nfsaida as $nfsaidaKey) {
            $dados['nfsaida'] = $nfsaidaKey->getCdNfsaida();
            $dados['unidade'] = $nfsaidaKey->Fornecedor->UnidadeNegocio->getCdUnidade();
            $dados['data'] = $nfsaidaKey->getDataEmissao();
            $dados['hora'] = $nfsaidaKey->getHoraEmissao();
            $dados['tipo'] = 'S';
            $dados['nota'] = $nfsaidaKey->getNumero();

            if (empty($dados['hora'])) {
                $dados['hora'] = '07:00:00';
            }

            foreach ($nfsaidaKey->Pedido->PedidoHasProduto as $pedidoProduto) {
                if ($pedidoProduto->Produto->getMovimentaEstoque() != 'S') {
                    continue;
                }
                $dados['produto'] = $pedidoProduto->getProdutoCdProduto();
                $dados['quantidade'] = $pedidoProduto->getQuantidade();
                $dados['valorUnitario'] = '0.00';

                if ($pedidoProduto->Produto->getUtilizaNSerie()) {
                    $nserie = Op::find(array(
                                    "conditions" => 'Cd_produto = :produto:
                                                     and cd_pedido = :pedido:',
                                    "bind" => array('produto' => $pedidoProduto->getProdutoCdProduto(),
                                                    'pedido' => $pedidoProduto->getPedidoCdPedido(),
                                                    )
                                        ));
                    $i = 0;
                    foreach ($nserie as $nserieKey) {
                        if ($nserieKey->getNserie()) {
                            $dados['nserie'][] = $nserieKey->getNserie();
                        }
                    }
                }

                $dados['armazenagem'] = $this->buscarCentroArmazenagemPadraoProduto($dados);
                if ($this->movimentarEstoque($dados) == false) {
                    var_dump('Erro registro:');
                    var_dump($dados);
                }
                unset($dados['produto']);
                unset($dados['quantidade']);
                unset($dados['valorUnitario']);
                unset($dados['nserie']);
            }
        }
    }

    private function gerarMovimentacaoNFentrada()
    {
        $Nfentrada = Nfentrada::find(array(
                "conditions" => 'tipo_nota = :tipoNotaFiscal:
                                 and cd_empresa = :empresa:',
                "bind" => array('tipoNotaFiscal' => 1,
                                'empresa' => 4,
                                ),
                "order" => 'data_emissao asc'
                ));

        foreach ($Nfentrada as $Nfentradakey) {
            if ($Nfentradakey->getMovimentaEstoque()) {
                $dados['unidade'] = $Nfentradakey->Empresa->UnidadeNegocio->getCdUnidade();
                $dados['nfentrada'] = $Nfentradakey->getCdNfentrada();
                $dados['tipo'] = 'E';
                $dados['data'] = $Nfentradakey->getDataEmissao();
                if ($Nfentradakey->getHoraSaida()) {
                    $dados['hora'] = $Nfentradakey->getHoraSaida();
                } else {
                    $dados['hora'] = '07:00:00';
                }
                $dados['nota'] = $Nfentradakey->getNumero();

                foreach ($Nfentradakey->NfentradaItem as $item) {
                    $estoque = new MovEstoque();
                    $dados['produto'] = $item->getCdProduto();

                    if (!empty($item->getQuantidadeSaida()) && $item->getQuantidadeSaida() != '0.0000') {
                        $dados['quantidade'] = $item->getQuantidadeSaida();
                    } else {
                        $dados['quantidade'] = $item->getQuantidade();
                    }
                    $valorImpostos = 0;
                    $valorImpostos = $item->getVlSeguro();
                    $valorImpostos += $item->getVlOutro();
                    $valorImpostos += $item->getVICMSST();
                    $valorImpostos += $item->getVIPI();
                    $valorImpostos += $item->getVlFrete();
                    $valorImpostos += $item->getFreteConhecimentoTransporte();
                    $valorImpostos -= $item->getVlDesc();

                    $this->calcularEstoqueNfEntrada($item, $estoque, $valorImpostos);
                    if ($estoque->getValorUnitario()) {
                        $dados['valorUnitario'] = $estoque->getValorUnitario();
                    } else {
                        $dados['valorUnitario'] = $item->getVlUnitario();
                    }
                    $dados['saldoEstoque'] = $estoque->getSaldoEstoque();
                    $dados['totalEstoque'] = $estoque->getTotalEstoque();
                    $dados['custoMedio'] = $estoque->getCustoMedio();
                    $dados['armazenagem'] = $item->getCdArmazenagem();
                    if (empty($dados['armazenagem'])) {
                        $dados['armazenagem'] = $this->buscarCentroArmazenagemPadraoProduto($dados);
                    }
                    if ($item->getNserieDevolucao()) {
                        $dados['nserie'][] = $item->getNserieDevolucao();
                    }
                    $this->movimentarEstoque($dados);
                }
            }
        }
        var_dump('NFENTRADA OK');
    }

    private function gerarMovimentacaoManual()
    {
        $MovManual = MovManual::find(array(
                "conditions" => 'cd_unidade = :unidade:',
                "bind" => array('unidade' => 120, )
                ));
        foreach ($MovManual as $MovManualKey) {
                $dados['unidade'] = $MovManualKey->getCdUnidade();
                $dados['movManual'] = $MovManualKey->getIdMov();
                $data = new \DateTime($MovManualKey->getCriado());
                $dados['data'] = $data->format('Y-m-d');
                $dados['hora'] = $data->format('H:i:s');
            switch (mb_strtoupper($MovManualKey->getTipo())) {
                case 'E':
                    $this->gerarDadosMovimentacaoManual($MovManualKey, $dados, 'E');
                    $this->movimentarEstoque($dados);
                    break;
                case 'S':
                    $this->gerarDadosMovimentacaoManual($MovManualKey, $dados, 'S');
                    $this->movimentarEstoque($dados);
                    break;
                case 'T':
                    $this->gerarDadosMovimentacaoManual($MovManualKey, $dados, 'E');
                    $this->movimentarEstoque($dados);
                    $this->gerarDadosMovimentacaoManual($MovManualKey, $dados, 'S');
                    $this->movimentarEstoque($dados);
                    break;
                default:
                    break;
            }
        }
        var_dump('Mov Manual OK');
    }

    private function gerarDadosMovimentacaoManual(&$MovManualKey, &$dados, $tipo)
    {
        $dados['tipo'] = $tipo;
        foreach ($MovManualKey->MovimentacaoManualEstoqueItem as $movManualItem) {
            $dados['produto'] = $movManualItem->getCdProduto();
            $dados['valorUnitario'] = $movManualItem->getValorUnitario();
            $dados['quantidade'] = $movManualItem->getQuantidade();
            if (empty($MovManualKey->getCentroArmazenagemEntrada())) {
                $dados['armazenagem'] = $this->buscarCentroArmazenagemPadraoProduto($dados);
            } else {
                $dados['armazenagem'] = $MovManualKey->getCentroArmazenagemEntrada();
            }
            if ($tipo == 'S') {
                if (empty($MovManualKey->getCentroArmazenagemSaida())) {
                    $dados['armazenagem'] = $this->buscarCentroArmazenagemPadraoProduto($dados);
                } else {
                    $dados['armazenagem'] = $MovManualKey->getCentroArmazenagemSaida();
                }
            }
        }
    }

    /*
    *
    *   @params mixed $dados "associativo"
    *   $dados = array ('unidade',      Obrigatorio
    *                   'produto',      Obrigatorio
    *                   'nfentrada',    *1
    *                   'nfsaida',      *1
    *                   'op',           *1
    *                   'etapaOpItem',  *1
    *                   'movManual',    *1
    *                   'tipo',         Obrigatorio
    *                   'data',         Obrigatorio
    *                   'hora',         Obrigatorio
    *                   'nota',
    *                   'quantidade',   Obrigatorio
    *                   'valorUnitario',Obrigatorio
    *                   'saldoEstoque',
    *                   'custoMedio',
    *                   'totalEstoque',
    *                   'situacao',
    *                   'armazenagem',  Obrigatorio
    *                   'ld',
    *                   'obs',
    *                   'nserie' => mixed Array    Caso informado, será realizado movimentacao de numero de serie
    *                  )
    * *1 Obrigatorio pelo menos um do conjuto citado
    */
    public function movimentarEstoque($dados)
    {
        if ($this->validaMovimentacaoEstoque($dados)) {
            $MovEstoque = new MovEstoque();
            $MovEstoque->setCdUnidade($dados['unidade']);
            $MovEstoque->setProdutoCdProduto($dados['produto']);
            $MovEstoque->setTipo($dados['tipo']);
            $MovEstoque->setData($dados['data']);
            $MovEstoque->setHora($dados['hora']);
            $MovEstoque->setQuantidade($dados['quantidade']);
            $MovEstoque->setValorUnitario($dados['valorUnitario']);
            $MovEstoque->setCdArmazenagem($dados['armazenagem']);
            if (!empty($dados['nfentrada'])) {
                $MovEstoque->setNfentradaCdNfentrada($dados['nfentrada']);
            }
            if (!empty($dados['nfsaida'])) {
                $MovEstoque->setNfsaidaCdNfsaida($dados['nfsaida']);
            }
            if (!empty($dados['op'])) {
                $MovEstoque->setOpCdOp($dados['op']);
            }
            if (!empty($dados['etapaOpItem'])) {
                $MovEstoque->setOpetapaitemCdItem($dados['etapaOpItem']);
            }
            if (!empty($dados['movManual'])) {
                $MovEstoque->setMovimentacaoManualEstoqueIdmov($dados['movManual']);
            }
            if (!empty($dados['nota'])) {
                $MovEstoque->setNota($dados['nota']);
            }
            if (!empty($dados['situacao'])) {
                $MovEstoque->setSituacao($dados['situacao']);
            }
            if (!empty($dados['ld'])) {
                $MovEstoque->setProdutoLd($dados['ld']);
            } else {
                $MovEstoque->setProdutoLd(0);
            }
            if (!empty($dados['obs'])) {
                $MovEstoque->setObservacao($dados['obs']);
            }
            if (!empty($dados['saldoEstoque'])) {
                $MovEstoque->setSaldoEstoque($dados['saldoEstoque']);
            }
            if (!empty($dados['custoMedio'])) {
                $MovEstoque->setCustoMedio($dados['custoMedio']);
            }
            if (!empty($dados['totalEstoque'])) {
                $MovEstoque->setTotalEstoque($dados['totalEstoque']);
            }
            $MovEstoque->setAtivo(1);

            if ($MovEstoque->save()) {
                if (isset($dados['nserie'])) {
                    if (count($dados['nserie']) > 0) {
                        return $this->movimentarNSerie($dados, $MovEstoque->getCdEstoque());
                    }
                }
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    private function validaMovimentacaoEstoque($dados)
    {
        $obrigatorios = array(  'unidade',
                                'produto',
                                'tipo',
                                'data',
                                'hora',
                                'quantidade',
                                'valorUnitario',
                                'armazenagem');

        foreach ($obrigatorios as $key) {
            if (array_key_exists($key, $dados) == false) {
                return false;
            }
        }

        if (isset($dados['nfentrada'])) {
            return true;
        } elseif (isset($dados['nfsaida'])) {
            return true;
        } elseif (isset($dados['op'])) {
            return true;
        } elseif (isset($dados['movManual'])) {
            return true;
        }
        return false;
    }

    private function movimentarNSerie($dados, $MovEstoque)
    {
        $movNSerie = array();
        $totalNSerie = count($dados['nserie']);
        $erro = 0;
        for ($i=0; $i < $totalNSerie; $i++) {
            $movNSerie = new MovimentacaoNserie();
            $movNSerie->setCdUnidade($dados['unidade']);
            $movNSerie->setNserie($dados['nserie'][$i]);
            $movNSerie->setTipo($dados['tipo']);
            $movNSerie->setCriado($dados['data'].' '.$dados['hora']);
            $movNSerie->setCdEstoque($MovEstoque);
            if ($movNSerie->save() == false) {
                $erro = 1;
            }
        }
        if ($erro) {
            return false;
        }
        return true;
    }

    private function buscarCentroArmazenagemPadraoProduto($dados)
    {
        if (sizeof(@$dados['nserie']) > 0) {
            $movNSerie = MovimentacaoNserie::find(array(
                    "conditions" => 'nserie = :nserie:
                                     and cd_unidade = :unidade:',
                    "bind" => array('nserie' => $dados['nserie'][0],
                                    'unidade' => $dados['unidade'],
                                    )
                    ));
            $movNSerie->rewind();
            if ($movNSerie->valid()) {
                $nserie = $movNSerie->current();
                return $nserie->MovEstoque->getCdArmazenagem();
            }
        }

        $movEstoque = MovEstoque::find(array(
                    "conditions" => 'produto_Cd_produto = :produto:
                                     and cd_unidade = :unidade:',
                    "bind" => array('produto' => $dados['produto'],
                                    'unidade' => $dados['unidade'],
                                    ),
                    "order" => 'data desc, hora desc',
                    "limit" => 1
                    ));
        $movEstoque->rewind();
        if ($movEstoque->valid()) {
            $estoque = $movEstoque->current();
            return $estoque->getCdArmazenagem();
        }

        return 4;
    }

    private function calcularEstoqueNfEntrada(&$produto, &$estoque, $valorImpostos)
    {
        if ($produto->Nfentrada->getFinalidadeNota()) {
            $tipo = $produto->Nfentrada->FinalidadeProduto->getFinalidadeEmissaoNfe();
        } else {
            $tipo = 0;
        }
        $conditions = 'produto_Cd_produto = :produto:
                           and cd_unidade = :unidade:';
        $bind['produto'] = $produto->getCdProduto();
        $bind['unidade'] = $produto->Nfentrada->Empresa->UnidadeNegocio->getCdUnidade();

        if (!empty($produto->getCdArmazenagem())) {
            $conditions .=  ' and cd_armazenagem = :armazenagem:';
            $bind['armazenagem'] = $produto->getCdArmazenagem();
        }


        $posicaoEstoque = MovEstoque::find(array(
                "conditions" => $conditions,
                "bind" => $bind,
                "order" => 'data desc, hora desc',
                "limit" => 1
                ));

        if (!empty($produto->getQuantidadeSaida()) && $produto->getQuantidadeSaida() != '0.0000') {
            $quantidadeProduto = $produto->getQuantidadeSaida();
            $VlTotalProduto = $produto->getQuantidade() * $produto->getVlUnitario();
            $VlUnitario = $VlTotalProduto / $produto->getQuantidadeSaida();
            $produto->setVlUnitario($VlUnitario);
        } else {
            $quantidadeProduto = $produto->getQuantidade();
        }
        switch ($tipo) {
            case NFE_TIPO_ENTRADA:
            default:
                $valorEntrada = ($quantidadeProduto * $produto->getVlUnitario()) + $valorImpostos;
                $posicaoEstoque->rewind();
                if ($posicaoEstoque->valid()) {
                    $posicaoEstoque = $posicaoEstoque->current();
                    $totalEstoque = $posicaoEstoque->getTotalEstoque() + $quantidadeProduto;
                    $estoque->setTotalEstoque($totalEstoque);
                    $saldoEstoque = round($posicaoEstoque->getSaldoEstoque() + $valorEntrada, 4);
                    $estoque->setSaldoEstoque($saldoEstoque);
                    if ($estoque->getTotalEstoque() != 0) {
                        $custoMedio = abs(round($estoque->getSaldoEstoque() / $estoque->getTotalEstoque(), 4));
                        $estoque->setCustoMedio($custoMedio);
                    } else {
                        $estoque->setCustoMedio($posicaoEstoque->getCustoMedio());
                    }
                } else {
                    try {
                        $estoque->setTotalEstoque($quantidadeProduto);
                        $estoque->setSaldoEstoque(round($valorEntrada, 4));
                        $custoMedio = abs(round($estoque->getSaldoEstoque() / $estoque->getTotalEstoque(), 4));
                        $estoque->setCustoMedio($custoMedio);
                    } catch (Exception $e) {
                        throw $e;
                    }
                }
                break;
            case NFE_TIPO_DEVOLUCAO:
            case NFE_TIPO_DEVOLUCAOSIMBOLICA:
                $posicaoEstoque->rewind();
                if ($posicaoEstoque->valid() == false) {
                    $estoque->setCustoMedio($produto->getVlUnitario());
                    $estoque->setSaldoEstoque(0);
                    $estoque->setTotalEstoque(0);
                } else {
                    $posicaoEstoque = $posicaoEstoque->current();
                    $estoque->setCustoMedio($posicaoEstoque->getCustoMedio());
                    $estoque->setSaldoEstoque($posicaoEstoque->getSaldoEstoque());
                    $estoque->setTotalEstoque($posicaoEstoque->getTotalEstoque());
                }
                if (is_null($estoque->getCustoMedio())) {
                    $estoque->setCustoMedio(0);
                }

                $valorDevolucao = $quantidadeProduto * $estoque->getCustoMedio();
                $totalEstoque = $estoque->getTotalEstoque() + $quantidadeProduto;
                $estoque->setTotalEstoque($totalEstoque);
                $saldoEstoque = round($estoque->getSaldoEstoque() + abs($valorDevolucao), 4);
                $estoque->setSaldoEstoque($saldoEstoque);
                $estoque->setCustoMedio(abs(round($estoque->getCustoMedio(), 4)));
                $estoque->setValorUnitario($estoque->getCustoMedio());
                break;
        }
    }

    private function calcularMovimentacaoEstoque(&$estoque)
    {

        switch ($estoque->getTipo()) {
            case 'S':
                $conditions = 'produto_Cd_produto = :produto:
                                   and cd_unidade = :unidade:
                                   and sequencia < :sequencia:';
                $bind['produto'] = $estoque->getProdutoCdProduto();
                $bind['unidade'] = $estoque->getCdUnidade();
                $bind['sequencia'] = $estoque->getSequencia();

                $posicaoEstoque = MovEstoque::find(array(
                        "conditions" => $conditions,
                        "bind" => $bind,
                        "order" => 'sequencia desc, data desc, hora desc',
                        "limit" => 1
                        ));



                $posicaoEstoque->rewind();
                if ($posicaoEstoque->valid()) {
                    $posicaoEstoque = $posicaoEstoque->current();
                    $estoque->setCustoMedio(abs(round($posicaoEstoque->getCustoMedio(), 4)));
                    $totalEstoque = $posicaoEstoque->getTotalEstoque() - $estoque->getQuantidade();
                    $estoque->setTotalEstoque($totalEstoque);
                    $valorSaida = $estoque->getQuantidade() * $posicaoEstoque->getCustoMedio();
                    $valorSaida = $valorSaida * -1;
                    $saldoEstoque = round($posicaoEstoque->getSaldoEstoque() + $valorSaida, 4);
                    $estoque->setSaldoEstoque($saldoEstoque);
                    $estoque->setValorUnitario($posicaoEstoque->getCustoMedio());
                } else {
                    $bind = array();
                    $conditions = 'produto_Cd_produto = :produto:
                                       and cd_unidade = :unidade:
                                       and tipo = :entrada:
                                       and custo_medio > :valorZerado:';
                    $bind['produto'] = $estoque->getProdutoCdProduto();
                    $bind['unidade'] = $estoque->getCdUnidade();
                    $bind['entrada'] = 'E';
                    $bind['valorZerado'] = '0';

                    $posicaoEstoque = MovEstoque::find(array(
                            "conditions" => $conditions,
                            "bind" => $bind,
                            "order" => 'sequencia asc, data asc, hora asc',
                            "limit" => 1
                            ));

                    $posicaoEstoque->rewind();
                    if ($posicaoEstoque->valid()) {
                        $posicaoEstoque = $posicaoEstoque->current();
                        $estoque->setTotalEstoque($estoque->getQuantidade()*-1);
                        $estoque->setCustoMedio($posicaoEstoque->getValorUnitario());
                        $estoque->setvalorUnitario($posicaoEstoque->getValorUnitario());
                        $estoque->setSaldoEstoque($estoque->getTotalEstoque() * $estoque->getCustoMedio());
                    } else {
                        $estoque->setTotalEstoque($estoque->getQuantidade()*-1);
                        $estoque->setSaldoEstoque(0);
                        $estoque->setCustoMedio(0);
                        $estoque->setvalorUnitario(0);
                    }
                }
                break;
            case 'E':
                if (!empty($estoque->getOpCdOp())) {
                    $bind = array();
                    $conditions =  'op_cd_op = :op:
                                       and cd_unidade = :unidade:
                                       and tipo = :saida:';
                    $bind['op'] = $estoque->getOpCdOp();
                    $bind['unidade'] = $estoque->getCdUnidade();
                    $bind['saida'] = 'S';

                    $posicaoEstoque = MovEstoque::find(array(
                            "conditions" => $conditions,
                            "bind" => $bind,
                            "order" => 'data asc, hora asc'
                            ));
                    $total = 0;
                    foreach ($posicaoEstoque as $key) {
                        $total += $key->getQuantidade() * $key->getCustoMedio();
                    }

                    if ($estoque->Op->getQuantidadeFabricado() == 0) {
                        $estoque->Op->setQuantidadeFabricado(1);
                    }
                    $quantidade = $estoque->Op->getQuantidadeFabricado();
                    $estoque->setValorUnitario($total / $quantidade);

                    $this->calcularMovimentacaoEntrada($estoque, $quantidade);
                } else {
                    $quantidade = $estoque->getQuantidade();
                    $this->calcularMovimentacaoEntrada($estoque, $quantidade);
                }

                break;
        }
    }

    private function calcularMovimentacaoEntrada(&$estoque, $quantidade)
    {
        $conditions = 'produto_Cd_produto = :produto:
                       and cd_unidade = :unidade:
                       and sequencia < :sequencia:';
        $bind['produto'] = $estoque->getProdutoCdProduto();
        $bind['unidade'] = $estoque->getCdUnidade();
        $bind['sequencia'] = $estoque->getSequencia();

        $posicaoEstoque = MovEstoque::find(array(
                "conditions" => $conditions,
                "bind" => $bind,
                "order" => 'sequencia desc, data desc, hora desc',
                "limit" => 1
                ));


        $posicaoEstoque->rewind();
        if ($posicaoEstoque->valid()) {
            $posicaoEstoque = $posicaoEstoque->current();
            if (empty($posicaoEstoque->getCustoMedio()) || $posicaoEstoque->getCustoMedio() == '0.0000') {
                $posicaoEstoque->setCustoMedio($estoque->getValorUnitario());
            }
            $estoque->setQuantidade($quantidade);
            $totalEstoque = $posicaoEstoque->getTotalEstoque() + $quantidade;
            $estoque->setTotalEstoque($totalEstoque);
            $valorEntrada = $quantidade * $estoque->getValorUnitario();
            $saldoEstoque = round($posicaoEstoque->getSaldoEstoque() + $valorEntrada, 4);
            $estoque->setSaldoEstoque($saldoEstoque);
            if ($totalEstoque != 0) {
                $valorTotalEstoque = $saldoEstoque / $totalEstoque;
                $estoque->setCustoMedio(abs(round($valorTotalEstoque, 4)));
            } else {
                $estoque->setCustoMedio(abs(round($posicaoEstoque->getCustoMedio(), 4)));
            }
        } else {
            $estoque->setTotalEstoque($estoque->getQuantidade());
            $estoque->setCustoMedio($estoque->getValorUnitario());
            $estoque->setSaldoEstoque($estoque->getQuantidade()*$estoque->getCustoMedio());
        }
    }

    private function ordernarEstoque()
    {
        $estoque = MovEstoque::find(array(
                "conditions" => 'cd_unidade = :unidade:',
                "bind" => array('unidade' => 120),
                "order" => 'data asc, hora asc'
                ));

        $i=1;
        foreach ($estoque as $key) {
            $key->setSequencia($i);
            if ($key->save()) {
            } else {
                var_dump('Erro ao ordernar a linha do estoque');
                var_dump($key->toArray());
            }
            $i++;
        }
        var_dump('Estoque Ordenado');
    }

    private function recalcularEstoque()
    {
        $estoque = MovEstoque::find(array(
                "conditions" => 'cd_unidade = :unidade:',
                "bind" => array('unidade' => 120),
                "order" => 'sequencia asc, data asc, hora asc'
                ));

        foreach ($estoque as $key) {
            $this->calcularMovimentacaoEstoque($key);
            $key->save();
        }
        var_dump('Estoque Recalculado');
    }
}
