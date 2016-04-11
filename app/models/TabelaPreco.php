<?php

namespace App\Models;

class TabelaPreco extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_tabela;

    /**
     *
     * @var integer
     */
    protected $cd_fornecedor;

    /**
     *
     * @var string
     */
    protected $json_csv_produto;

    /**
     *
     * @var string
     */
    protected $json_csv_produto_preco_area;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $data_importacao;

    /**
     *
     * @var string
     */
    protected $data_insercao;

    /**
     *
     * @var integer
     */
    protected $aplicada;

    /**
     *
     * @var integer
     */
    protected $erro;

    /**
     *
     * @var string
     */
    protected $json_csv_descontos;

    /**
     *
     * @var string
     */
    protected $produtos_nao_atualizados;

    /**
     *
     * @var string
     */
    protected $descricao_erro;

    /**
     * Method to set the value of field cd_tabela
     *
     * @param integer $cd_tabela
     * @return $this
     */
    public function setCdTabela($cd_tabela)
    {
        $this->cd_tabela = $cd_tabela;

        return $this;
    }

    /**
     * Method to set the value of field cd_fornecedor
     *
     * @param integer $cd_fornecedor
     * @return $this
     */
    public function setCdFornecedor($cd_fornecedor)
    {
        $this->cd_fornecedor = $cd_fornecedor;

        return $this;
    }

    /**
     * Method to set the value of field json_csv_produto
     *
     * @param string $json_csv_produto
     * @return $this
     */
    public function setJsonCsvProduto($json_csv_produto)
    {
        $this->json_csv_produto = $json_csv_produto;

        return $this;
    }

    /**
     * Method to set the value of field json_csv_produto_preco_area
     *
     * @param string $json_csv_produto_preco_area
     * @return $this
     */
    public function setJsonCsvProdutoPrecoArea($json_csv_produto_preco_area)
    {
        $this->json_csv_produto_preco_area = $json_csv_produto_preco_area;

        return $this;
    }

    /**
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Method to set the value of field data_importacao
     *
     * @param string $data_importacao
     * @return $this
     */
    public function setDataImportacao($data_importacao)
    {
        $this->data_importacao = $data_importacao;

        return $this;
    }

    /**
     * Method to set the value of field data_insercao
     *
     * @param string $data_insercao
     * @return $this
     */
    public function setDataInsercao($data_insercao)
    {
        $this->data_insercao = $data_insercao;

        return $this;
    }

    /**
     * Method to set the value of field aplicada
     *
     * @param integer $aplicada
     * @return $this
     */
    public function setAplicada($aplicada)
    {
        $this->aplicada = $aplicada;

        return $this;
    }

    /**
     * Method to set the value of field erro
     *
     * @param integer $erro
     * @return $this
     */
    public function setErro($erro)
    {
        $this->erro = $erro;

        return $this;
    }

    /**
     * Method to set the value of field json_csv_descontos
     *
     * @param string $json_csv_descontos
     * @return $this
     */
    public function setJsonCsvDescontos($json_csv_descontos)
    {
        $this->json_csv_descontos = $json_csv_descontos;

        return $this;
    }

    /**
     * Method to set the value of field produtos_nao_atualizados
     *
     * @param string $produtos_nao_atualizados
     * @return $this
     */
    public function setProdutosNaoAtualizados($produtos_nao_atualizados)
    {
        $this->produtos_nao_atualizados = $produtos_nao_atualizados;

        return $this;
    }

    /**
     * Method to set the value of field descricao_erro
     *
     * @param string $descricao_erro
     * @return $this
     */
    public function setDescricaoErro($descricao_erro)
    {
        $this->descricao_erro = $descricao_erro;

        return $this;
    }

    /**
     * Returns the value of field cd_tabela
     *
     * @return integer
     */
    public function getCdTabela()
    {
        return $this->cd_tabela;
    }

    /**
     * Returns the value of field cd_fornecedor
     *
     * @return integer
     */
    public function getCdFornecedor()
    {
        return $this->cd_fornecedor;
    }

    /**
     * Returns the value of field json_csv_produto
     *
     * @return string
     */
    public function getJsonCsvProduto()
    {
        return $this->json_csv_produto;
    }

    /**
     * Returns the value of field json_csv_produto_preco_area
     *
     * @return string
     */
    public function getJsonCsvProdutoPrecoArea()
    {
        return $this->json_csv_produto_preco_area;
    }

    /**
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field data_importacao
     *
     * @return string
     */
    public function getDataImportacao()
    {
        return $this->data_importacao;
    }

    /**
     * Returns the value of field data_insercao
     *
     * @return string
     */
    public function getDataInsercao()
    {
        return $this->data_insercao;
    }

    /**
     * Returns the value of field aplicada
     *
     * @return integer
     */
    public function getAplicada()
    {
        return $this->aplicada;
    }

    /**
     * Returns the value of field erro
     *
     * @return integer
     */
    public function getErro()
    {
        return $this->erro;
    }

    /**
     * Returns the value of field json_csv_descontos
     *
     * @return string
     */
    public function getJsonCsvDescontos()
    {
        return $this->json_csv_descontos;
    }

    /**
     * Returns the value of field produtos_nao_atualizados
     *
     * @return string
     */
    public function getProdutosNaoAtualizados()
    {
        return $this->produtos_nao_atualizados;
    }

    /**
     * Returns the value of field descricao_erro
     *
     * @return string
     */
    public function getDescricaoErro()
    {
        return $this->descricao_erro;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_tabela', 'App\Models\TabelaPrecoHasDesconto', 'cd_tabela', array('alias' => 'TabelaPrecoHasDesconto'));
        $this->hasMany('cd_tabela', 'App\Models\TabelaPrecosHasProdutoarea', 'cd_tabela', array('alias' => 'TabelaPrecosHasProdutoarea'));
        $this->hasMany('cd_tabela', 'App\Models\TabelaPrecosHasProdutos', 'cd_tabela', array('alias' => 'TabelaPrecosHasProdutos'));
        $this->hasMany('cd_tabela', 'App\Models\TabelaPrecoHasDesconto', 'cd_tabela', NULL);
        $this->hasMany('cd_tabela', 'App\Models\TabelaPrecosHasProdutoarea', 'cd_tabela', NULL);
        $this->hasMany('cd_tabela', 'App\Models\TabelaPrecosHasProdutos', 'cd_tabela', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tabela_preco';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TabelaPreco[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TabelaPreco
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'cd_tabela' => 'cd_tabela',
            'cd_fornecedor' => 'cd_fornecedor',
            'json_csv_produto' => 'json_csv_produto',
            'json_csv_produto_preco_area' => 'json_csv_produto_preco_area',
            'nome' => 'nome',
            'data_importacao' => 'data_importacao',
            'data_insercao' => 'data_insercao',
            'aplicada' => 'aplicada',
            'erro' => 'erro',
            'json_csv_descontos' => 'json_csv_descontos',
            'produtos_nao_atualizados' => 'produtos_nao_atualizados',
            'descricao_erro' => 'descricao_erro'
        );
    }

}
