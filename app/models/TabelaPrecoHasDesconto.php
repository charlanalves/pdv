<?php

namespace App\Models;

class TabelaPrecoHasDesconto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $iddesconto;

    /**
     *
     * @var integer
     */
    protected $cd_tabela;

    /**
     *
     * @var integer
     */
    protected $cond_pagto_idcond_pagto;

    /**
     *
     * @var double
     */
    protected $percentual;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var integer
     */
    protected $produtoArea_idprodutoArea;

    /**
     *
     * @var integer
     */
    protected $aplicarDescontoCliente;

    /**
     * Method to set the value of field iddesconto
     *
     * @param integer $iddesconto
     * @return $this
     */
    public function setIddesconto($iddesconto)
    {
        $this->iddesconto = $iddesconto;

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
     * Method to set the value of field cond_pagto_idcond_pagto
     *
     * @param integer $cond_pagto_idcond_pagto
     * @return $this
     */
    public function setCondPagtoIdcondPagto($cond_pagto_idcond_pagto)
    {
        $this->cond_pagto_idcond_pagto = $cond_pagto_idcond_pagto;

        return $this;
    }

    /**
     * Method to set the value of field percentual
     *
     * @param double $percentual
     * @return $this
     */
    public function setPercentual($percentual)
    {
        $this->percentual = $percentual;

        return $this;
    }

    /**
     * Method to set the value of field ativo
     *
     * @param integer $ativo
     * @return $this
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Method to set the value of field produtoArea_idprodutoArea
     *
     * @param integer $produtoArea_idprodutoArea
     * @return $this
     */
    public function setProdutoAreaIdprodutoArea($produtoArea_idprodutoArea)
    {
        $this->produtoArea_idprodutoArea = $produtoArea_idprodutoArea;

        return $this;
    }

    /**
     * Method to set the value of field aplicarDescontoCliente
     *
     * @param integer $aplicarDescontoCliente
     * @return $this
     */
    public function setAplicarDescontoCliente($aplicarDescontoCliente)
    {
        $this->aplicarDescontoCliente = $aplicarDescontoCliente;

        return $this;
    }

    /**
     * Returns the value of field iddesconto
     *
     * @return integer
     */
    public function getIddesconto()
    {
        return $this->iddesconto;
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
     * Returns the value of field cond_pagto_idcond_pagto
     *
     * @return integer
     */
    public function getCondPagtoIdcondPagto()
    {
        return $this->cond_pagto_idcond_pagto;
    }

    /**
     * Returns the value of field percentual
     *
     * @return double
     */
    public function getPercentual()
    {
        return $this->percentual;
    }

    /**
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Returns the value of field produtoArea_idprodutoArea
     *
     * @return integer
     */
    public function getProdutoAreaIdprodutoArea()
    {
        return $this->produtoArea_idprodutoArea;
    }

    /**
     * Returns the value of field aplicarDescontoCliente
     *
     * @return integer
     */
    public function getAplicarDescontoCliente()
    {
        return $this->aplicarDescontoCliente;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cond_pagto_idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('alias' => 'CondPagto'));
        $this->belongsTo('cd_tabela', 'App\Models\TabelaPreco', 'cd_tabela', array('alias' => 'TabelaPreco'));
        $this->belongsTo('produtoArea_idprodutoArea', 'App\Models\TabelaPrecosHasProdutoarea', 'idprodutoArea', array('alias' => 'TabelaPrecosHasProdutoarea'));
        $this->belongsTo('cond_pagto_idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('foreignKey' => true,'alias' => 'CondPagto'));
        $this->belongsTo('cd_tabela', 'App\Models\TabelaPreco', 'cd_tabela', array('foreignKey' => true,'alias' => 'TabelaPreco'));
        $this->belongsTo('produtoArea_idprodutoArea', 'App\Models\TabelaPrecosHasProdutoarea', 'idprodutoArea', array('foreignKey' => true,'alias' => 'TabelaPrecosHasProdutoarea'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tabela_preco_has_desconto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TabelaPrecoHasDesconto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TabelaPrecoHasDesconto
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
            'iddesconto' => 'iddesconto',
            'cd_tabela' => 'cd_tabela',
            'cond_pagto_idcond_pagto' => 'cond_pagto_idcond_pagto',
            'percentual' => 'percentual',
            'ativo' => 'ativo',
            'produtoArea_idprodutoArea' => 'produtoArea_idprodutoArea',
            'aplicarDescontoCliente' => 'aplicarDescontoCliente'
        );
    }

}
