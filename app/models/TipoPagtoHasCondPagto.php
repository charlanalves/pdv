<?php

namespace App\Models;

class TipoPagtoHasCondPagto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $tipo_pagto_cd_pagto;

    /**
     *
     * @var integer
     */
    protected $cond_pagto_idcond_pagto;

    /**
     * Method to set the value of field tipo_pagto_cd_pagto
     *
     * @param integer $tipo_pagto_cd_pagto
     * @return $this
     */
    public function setTipoPagtoCdPagto($tipo_pagto_cd_pagto)
    {
        $this->tipo_pagto_cd_pagto = $tipo_pagto_cd_pagto;

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
     * Returns the value of field tipo_pagto_cd_pagto
     *
     * @return integer
     */
    public function getTipoPagtoCdPagto()
    {
        return $this->tipo_pagto_cd_pagto;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('tipo_pagto_cd_pagto', 'App\Models\Pedido', 'tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto', array('alias' => 'Pedido'));
        $this->belongsTo('cond_pagto_idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('alias' => 'CondPagto'));
        $this->belongsTo('tipo_pagto_cd_pagto', 'App\Models\TipoPagto', 'cd_pagto', array('alias' => 'TipoPagto'));
        $this->belongsTo('cond_pagto_idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('foreignKey' => true,'alias' => 'CondPagto'));
        $this->belongsTo('tipo_pagto_cd_pagto', 'App\Models\TipoPagto', 'cd_pagto', array('foreignKey' => true,'alias' => 'TipoPagto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tipo_pagto_has_cond_pagto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoPagtoHasCondPagto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoPagtoHasCondPagto
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
            'tipo_pagto_cd_pagto' => 'tipo_pagto_cd_pagto',
            'cond_pagto_idcond_pagto' => 'cond_pagto_idcond_pagto'
        );
    }

}
