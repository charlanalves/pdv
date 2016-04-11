<?php

namespace App\Models;

class KitsDescontoArea extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $iddesconto_area;

    /**
     *
     * @var integer
     */
    protected $cd_kits_areas;

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
     * Method to set the value of field iddesconto_area
     *
     * @param integer $iddesconto_area
     * @return $this
     */
    public function setIddescontoArea($iddesconto_area)
    {
        $this->iddesconto_area = $iddesconto_area;

        return $this;
    }

    /**
     * Method to set the value of field cd_kits_areas
     *
     * @param integer $cd_kits_areas
     * @return $this
     */
    public function setCdKitsAreas($cd_kits_areas)
    {
        $this->cd_kits_areas = $cd_kits_areas;

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
     * Returns the value of field iddesconto_area
     *
     * @return integer
     */
    public function getIddescontoArea()
    {
        return $this->iddesconto_area;
    }

    /**
     * Returns the value of field cd_kits_areas
     *
     * @return integer
     */
    public function getCdKitsAreas()
    {
        return $this->cd_kits_areas;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_kits_areas', 'App\Models\KitsAreas', 'cd_kits_areas', array('alias' => 'KitsAreas'));
        $this->belongsTo('cond_pagto_idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('alias' => 'CondPagto'));
        $this->belongsTo('cd_kits_areas', 'App\Models\KitsAreas', 'cd_kits_areas', array('foreignKey' => true,'alias' => 'KitsAreas'));
        $this->belongsTo('cond_pagto_idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('foreignKey' => true,'alias' => 'CondPagto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'kits_desconto_area';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return KitsDescontoArea[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return KitsDescontoArea
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
            'iddesconto_area' => 'iddesconto_area',
            'cd_kits_areas' => 'cd_kits_areas',
            'cond_pagto_idcond_pagto' => 'cond_pagto_idcond_pagto',
            'percentual' => 'percentual'
        );
    }

}
