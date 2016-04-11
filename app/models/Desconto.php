<?php

namespace App\Models;

class Desconto extends \Phalcon\Mvc\Model
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
    protected $cond_pagto_idcond_pagto;

    /**
     *
     * @var double
     */
    protected $percentual;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $modificado;

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
     * Method to set the value of field criado
     *
     * @param string $criado
     * @return $this
     */
    public function setCriado($criado)
    {
        $this->criado = $criado;

        return $this;
    }

    /**
     * Method to set the value of field modificado
     *
     * @param string $modificado
     * @return $this
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;

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
     * Returns the value of field criado
     *
     * @return string
     */
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
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
        $this->belongsTo('produtoArea_idprodutoArea', 'App\Models\Produtoarea', 'idprodutoArea', array('alias' => 'Produtoarea'));
        $this->belongsTo('cond_pagto_idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('alias' => 'CondPagto'));
        $this->belongsTo('produtoArea_idprodutoArea', 'App\Models\Produtoarea', 'idprodutoArea', array('foreignKey' => true,'alias' => 'Produtoarea'));
        $this->belongsTo('cond_pagto_idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('foreignKey' => true,'alias' => 'CondPagto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'desconto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Desconto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Desconto
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
            'cond_pagto_idcond_pagto' => 'cond_pagto_idcond_pagto',
            'percentual' => 'percentual',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'ativo' => 'ativo',
            'produtoArea_idprodutoArea' => 'produtoArea_idprodutoArea',
            'aplicarDescontoCliente' => 'aplicarDescontoCliente'
        );
    }

}
