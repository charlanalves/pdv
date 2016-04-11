<?php

namespace App\Models;

class TabelaPrecosHasProdutoarea extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idprodutoArea;

    /**
     *
     * @var integer
     */
    protected $cd_tabela;

    /**
     *
     * @var double
     */
    protected $precoBase;

    /**
     *
     * @var integer
     */
    protected $produto_cd_produto;

    /**
     *
     * @var string
     */
    protected $referencia;

    /**
     *
     * @var integer
     */
    protected $area_cd_area;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var double
     */
    protected $markup_minimo;

    /**
     *
     * @var double
     */
    protected $pedido_minimo;

    /**
     *
     * @var integer
     */
    protected $aplicar_desconto_cliente;

    /**
     *
     * @var string
     */
    protected $observacao;

    /**
     *
     * @var integer
     */
    protected $old_id;

    /**
     * Method to set the value of field idprodutoArea
     *
     * @param integer $idprodutoArea
     * @return $this
     */
    public function setIdprodutoArea($idprodutoArea)
    {
        $this->idprodutoArea = $idprodutoArea;

        return $this;
    }

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
     * Method to set the value of field precoBase
     *
     * @param double $precoBase
     * @return $this
     */
    public function setPrecoBase($precoBase)
    {
        $this->precoBase = $precoBase;

        return $this;
    }

    /**
     * Method to set the value of field produto_cd_produto
     *
     * @param integer $produto_cd_produto
     * @return $this
     */
    public function setProdutoCdProduto($produto_cd_produto)
    {
        $this->produto_cd_produto = $produto_cd_produto;

        return $this;
    }

    /**
     * Method to set the value of field referencia
     *
     * @param string $referencia
     * @return $this
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Method to set the value of field area_cd_area
     *
     * @param integer $area_cd_area
     * @return $this
     */
    public function setAreaCdArea($area_cd_area)
    {
        $this->area_cd_area = $area_cd_area;

        return $this;
    }

    /**
     * Method to set the value of field unidade_negocio_cd_unidade
     *
     * @param integer $unidade_negocio_cd_unidade
     * @return $this
     */
    public function setUnidadeNegocioCdUnidade($unidade_negocio_cd_unidade)
    {
        $this->unidade_negocio_cd_unidade = $unidade_negocio_cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field markup_minimo
     *
     * @param double $markup_minimo
     * @return $this
     */
    public function setMarkupMinimo($markup_minimo)
    {
        $this->markup_minimo = $markup_minimo;

        return $this;
    }

    /**
     * Method to set the value of field pedido_minimo
     *
     * @param double $pedido_minimo
     * @return $this
     */
    public function setPedidoMinimo($pedido_minimo)
    {
        $this->pedido_minimo = $pedido_minimo;

        return $this;
    }

    /**
     * Method to set the value of field aplicar_desconto_cliente
     *
     * @param integer $aplicar_desconto_cliente
     * @return $this
     */
    public function setAplicarDescontoCliente($aplicar_desconto_cliente)
    {
        $this->aplicar_desconto_cliente = $aplicar_desconto_cliente;

        return $this;
    }

    /**
     * Method to set the value of field observacao
     *
     * @param string $observacao
     * @return $this
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Method to set the value of field old_id
     *
     * @param integer $old_id
     * @return $this
     */
    public function setOldId($old_id)
    {
        $this->old_id = $old_id;

        return $this;
    }

    /**
     * Returns the value of field idprodutoArea
     *
     * @return integer
     */
    public function getIdprodutoArea()
    {
        return $this->idprodutoArea;
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
     * Returns the value of field precoBase
     *
     * @return double
     */
    public function getPrecoBase()
    {
        return $this->precoBase;
    }

    /**
     * Returns the value of field produto_cd_produto
     *
     * @return integer
     */
    public function getProdutoCdProduto()
    {
        return $this->produto_cd_produto;
    }

    /**
     * Returns the value of field referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Returns the value of field area_cd_area
     *
     * @return integer
     */
    public function getAreaCdArea()
    {
        return $this->area_cd_area;
    }

    /**
     * Returns the value of field unidade_negocio_cd_unidade
     *
     * @return integer
     */
    public function getUnidadeNegocioCdUnidade()
    {
        return $this->unidade_negocio_cd_unidade;
    }

    /**
     * Returns the value of field markup_minimo
     *
     * @return double
     */
    public function getMarkupMinimo()
    {
        return $this->markup_minimo;
    }

    /**
     * Returns the value of field pedido_minimo
     *
     * @return double
     */
    public function getPedidoMinimo()
    {
        return $this->pedido_minimo;
    }

    /**
     * Returns the value of field aplicar_desconto_cliente
     *
     * @return integer
     */
    public function getAplicarDescontoCliente()
    {
        return $this->aplicar_desconto_cliente;
    }

    /**
     * Returns the value of field observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Returns the value of field old_id
     *
     * @return integer
     */
    public function getOldId()
    {
        return $this->old_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idprodutoArea', 'App\Models\TabelaPrecoHasDesconto', 'produtoArea_idprodutoArea', array('alias' => 'TabelaPrecoHasDesconto'));
        $this->belongsTo('area_cd_area', 'App\Models\Area', 'cd_area', array('alias' => 'Area'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('cd_tabela', 'App\Models\TabelaPreco', 'cd_tabela', array('alias' => 'TabelaPreco'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('idprodutoArea', 'App\Models\TabelaPrecoHasDesconto', 'produtoArea_idprodutoArea', NULL);
        $this->belongsTo('area_cd_area', 'App\Models\Area', 'cd_area', array('foreignKey' => true,'alias' => 'Area'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
        $this->belongsTo('cd_tabela', 'App\Models\TabelaPreco', 'cd_tabela', array('foreignKey' => true,'alias' => 'TabelaPreco'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tabela_precos_has_produtoarea';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TabelaPrecosHasProdutoarea[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TabelaPrecosHasProdutoarea
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
            'idprodutoArea' => 'idprodutoArea',
            'cd_tabela' => 'cd_tabela',
            'precoBase' => 'precoBase',
            'produto_cd_produto' => 'produto_cd_produto',
            'referencia' => 'referencia',
            'area_cd_area' => 'area_cd_area',
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'markup_minimo' => 'markup_minimo',
            'pedido_minimo' => 'pedido_minimo',
            'aplicar_desconto_cliente' => 'aplicar_desconto_cliente',
            'observacao' => 'observacao',
            'old_id' => 'old_id'
        );
    }

}
