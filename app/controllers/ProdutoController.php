<?php

namespace App\Controllers;

ini_set('memory_limit', '-1');

use Phalcon\Mvc\View;
//controllers
use App\Controllers\BaseController as BaseController;

//models
use App\Models\Simulated as Simulated;
use App\Models\UserHasSimulated as UserHasSimulated;

use App\Models\Produto as Produto;
use App\Models\UploadHas as UploadHas;

class ProdutoController extends BaseController
{

    public function initialize()
    {
        $this->breadCrumbs[] = array('link'=>'simulated', 'text'=>'Simulado');
    }

    public function buscaAction()
    {
        $sessao = $this->auth->getIdentity();
        $busca = $this->request->getQuery('produto');
        $retorno = produto::find(array(
                "conditions" => 'nome like :produto: and descontinuado != :descontinuado:',
                "bind" => array('produto' => '%'.$busca.'%',
                                'descontinuado' => 1)
            ));
        $i=0;
        foreach ($retorno as $key) {
            $preco = $key->getProdutoArea('area_cd_area = '.$sessao['unidadeArea']);
            if ($preco->valid()) {
                $data[$i]['nome'] = $key->getNome();
                $data[$i]['cdProduto'] = $key->getCdProduto();
                if ($key->getFoto()) {
                    $data[$i]['imagem'] = 'https://www.solinter.com.br/arquivos/visualizar/'.$key->getFoto();
                } else {
                    $data[$i]['imagem'] = 'http://www.folhadosulonline.com.br/images/sem-foto_800.jpg';
                }
                $i++;
            }
        }

        echo json_encode($data);
    }

    public function buscaProdutoPorIdAction()
    {
        $response = new \Phalcon\Http\Response();
        $sessao = $this->auth->getIdentity();

        $produto = $this->request->getQuery('produto');
        if ($produto) {
            $produto = produto::findFirst(array(
                    'conditions' => 'cd_produto = :produto: and descontinuado != :descontinuado:',
                    'bind' => array('descontinuado' => 1,
                                    'produto' => $produto)
                    ));
            if ($produto) {
                $dados['cd_produto'] = $produto->getCdProduto();
                $dados['descricao'] = $produto->getDescricao();
                $dados['nomefiber'] = $produto->getNomeFiber();
                if (empty($dados['nomefiber'])) {
                    $dados['nomefiber'] = $produto->getNome();
                }
                $dados['qtdeVenda'] = $produto->getQtdeVenda();
                $dados['qtdeCompra'] = $produto->getQtdeCompra();
                $produtoArea = $produto->getProdutoArea('area_cd_area = '.$sessao['unidadeArea']);
                $dados['preco'] = $produtoArea[0]->getPrecoBase() + (($produtoArea[0]->getPrecoBase() * $produtoArea[0]->getMarkupMinimo())/100);

                $dados['preco'] = number_format($dados['preco'], 2, ',', '.');
                echo json_encode($dados);

                $response->setStatusCode(200, "OK");
                $response->send();
                exit;
            }
        }
        $response->setStatusCode(404, "Product Not Found");
        $response->setContent("Nenhum produto encontrado!");
        $response->send();
        exit;
    }
}
