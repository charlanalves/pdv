<?php

namespace App\Models;

class PdvVendasHasItens extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_itens_venda;

    /**
     *
     * @var integer
     */
    protected $cd_venda;

    /**
     *
     * @var integer
     */
    protected $cd_produto;

    /**
     *
     * @var integer
     */
    protected $cd_desconto;

    /**
     *
     * @var string
     */
    protected $nome_produto;

    /**
     *
     * @var integer
     */
    protected $preco_unit;

    /**
     *
     * @var integer
     */
    protected $quantidade;

    /**
     *
     * @var integer
     */
    protected $qdt_compra;

    /**
     *
     * @var integer
     */
    protected $qtd_venda;

    /**
     *
     * @var integer
     */
    protected $unidade_compra;

    /**
     *
     * @var integer
     */
    protected $unidade_venda;

    /**
     *
     * @var string
     */
    protected $ncm;

    /**
     * Method to set the value of field cd_itens_venda
     *
     * @param integer $cd_itens_venda
     * @return $this
     */
    public function setCdItensVenda($cd_itens_venda)
    {
        $this->cd_itens_venda = $cd_itens_venda;

        return $this;
    }

    /**
     * Method to set the value of field cd_venda
     *
     * @param integer $cd_venda
     * @return $this
     */
    public function setCdVenda($cd_venda)
    {
        $this->cd_venda = $cd_venda;

        return $this;
    }

    /**
     * Method to set the value of field cd_produto
     *
     * @param integer $cd_produto
     * @return $this
     */
    public function setCdProduto($cd_produto)
    {
        $this->cd_produto = $cd_produto;

        return $this;
    }

    /**
     * Method to set the value of field cd_desconto
     *
     * @param integer $cd_desconto
     * @return $this
     */
    public function setCdDesconto($cd_desconto)
    {
        $this->cd_desconto = $cd_desconto;

        return $this;
    }

    /**
     * Method to set the value of field nome_produto
     *
     * @param string $nome_produto
     * @return $this
     */
    public function setNomeProduto($nome_produto)
    {
        $this->nome_produto = $nome_produto;

        return $this;
    }

    /**
     * Method to set the value of field preco_unit
     *
     * @param integer $preco_unit
     * @return $this
     */
    public function setPrecoUnit($preco_unit)
    {
        $this->preco_unit = $preco_unit;

        return $this;
    }

    /**
     * Method to set the value of field quantidade
     *
     * @param integer $quantidade
     * @return $this
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Method to set the value of field qdt_compra
     *
     * @param integer $qdt_compra
     * @return $this
     */
    public function setQdtCompra($qdt_compra)
    {
        $this->qdt_compra = $qdt_compra;

        return $this;
    }

    /**
     * Method to set the value of field qtd_venda
     *
     * @param integer $qtd_venda
     * @return $this
     */
    public function setQtdVenda($qtd_venda)
    {
        $this->qtd_venda = $qtd_venda;

        return $this;
    }

    /**
     * Method to set the value of field unidade_compra
     *
     * @param integer $unidade_compra
     * @return $this
     */
    public function setUnidadeCompra($unidade_compra)
    {
        $this->unidade_compra = $unidade_compra;

        return $this;
    }

    /**
     * Method to set the value of field unidade_venda
     *
     * @param integer $unidade_venda
     * @return $this
     */
    public function setUnidadeVenda($unidade_venda)
    {
        $this->unidade_venda = $unidade_venda;

        return $this;
    }

    public function setNcm($ncm)
    {
        $this->ncm = $ncm;

        return $this;
    }

    /**
     * Returns the value of field cd_itens_venda
     *
     * @return integer
     */
    public function getCdItensVenda()
    {
        return $this->cd_itens_venda;
    }

    /**
     * Returns the value of field cd_venda
     *
     * @return integer
     */
    public function getCdVenda()
    {
        return $this->cd_venda;
    }

    /**
     * Returns the value of field cd_produto
     *
     * @return integer
     */
    public function getCdProduto()
    {
        return $this->cd_produto;
    }

    /**
     * Returns the value of field cd_desconto
     *
     * @return integer
     */
    public function getCdDesconto()
    {
        return $this->cd_desconto;
    }

    /**
     * Returns the value of field nome_produto
     *
     * @return string
     */
    public function getNomeProduto()
    {
        return $this->nome_produto;
    }

    /**
     * Returns the value of field preco_unit
     *
     * @return integer
     */
    public function getPrecoUnit()
    {
        return $this->preco_unit;
    }

    /**
     * Returns the value of field quantidade
     *
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Returns the value of field qdt_compra
     *
     * @return integer
     */
    public function getQdtCompra()
    {
        return $this->qdt_compra;
    }

    /**
     * Returns the value of field qtd_venda
     *
     * @return integer
     */
    public function getQtdVenda()
    {
        return $this->qtd_venda;
    }

    /**
     * Returns the value of field unidade_compra
     *
     * @return integer
     */
    public function getUnidadeCompra()
    {
        return $this->unidade_compra;
    }

    /**
     * Returns the value of field unidade_venda
     *
     * @return integer
     */
    public function getUnidadeVenda()
    {
        return $this->unidade_venda;
    }

    public function getNcm()
    {
        return $this->ncm;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_desconto', 'App\Models\PdvDescontos', 'cd_desconto', array('alias' => 'PdvDescontos'));
        $this->belongsTo('cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('cd_venda', 'App\Models\PdvVendas', 'cd_venda', array('alias' => 'PdvVendas'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_vendas_has_itens';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvVendasHasItens[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvVendasHasItens
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
            'cd_itens_venda' => 'cd_itens_venda',
            'cd_venda' => 'cd_venda',
            'cd_produto' => 'cd_produto',
            'cd_desconto' => 'cd_desconto',
            'nome_produto' => 'nome_produto',
            'preco_unit' => 'preco_unit',
            'quantidade' => 'quantidade',
            'qdt_compra' => 'qdt_compra',
            'qtd_venda' => 'qtd_venda',
            'unidade_compra' => 'unidade_compra',
            'unidade_venda' => 'unidade_venda',
            'ncm' => 'ncm'
        );
    }
}
