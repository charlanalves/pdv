<?php

namespace App\Models;

class TipoPagto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_pagto;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $cheque;

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
    protected $pedido;

    /**
     * Method to set the value of field cd_pagto
     *
     * @param integer $cd_pagto
     * @return $this
     */
    public function setCdPagto($cd_pagto)
    {
        $this->cd_pagto = $cd_pagto;

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
     * Method to set the value of field descricao
     *
     * @param string $descricao
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Method to set the value of field cheque
     *
     * @param integer $cheque
     * @return $this
     */
    public function setCheque($cheque)
    {
        $this->cheque = $cheque;

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
     * Method to set the value of field pedido
     *
     * @param integer $pedido
     * @return $this
     */
    public function setPedido($pedido)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Returns the value of field cd_pagto
     *
     * @return integer
     */
    public function getCdPagto()
    {
        return $this->cd_pagto;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field cheque
     *
     * @return integer
     */
    public function getCheque()
    {
        return $this->cheque;
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
     * Returns the value of field pedido
     *
     * @return integer
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_pagto', 'App\Models\Liquidacao', 'cd_pagto', array('alias' => 'Liquidacao'));
        $this->hasMany('cd_pagto', 'App\Models\LiquidacaoCreditoCliente', 'cd_pagto', array('alias' => 'LiquidacaoCreditoCliente'));
        $this->hasMany('cd_pagto', 'App\Models\TipoPagtoHasCondPagto', 'tipo_pagto_cd_pagto', array('alias' => 'TipoPagtoHasCondPagto'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('cd_pagto', 'App\Models\Liquidacao', 'cd_pagto', NULL);
        $this->hasMany('cd_pagto', 'App\Models\LiquidacaoCreditoCliente', 'cd_pagto', NULL);
        $this->hasMany('cd_pagto', 'App\Models\TipoPagtoHasCondPagto', 'tipo_pagto_cd_pagto', NULL);
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tipo_pagto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoPagto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoPagto
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
            'cd_pagto' => 'cd_pagto',
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'descricao' => 'descricao',
            'cheque' => 'cheque',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'ativo' => 'ativo',
            'pedido' => 'pedido'
        );
    }

}
