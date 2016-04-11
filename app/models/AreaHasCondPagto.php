<?php

namespace App\Models;

class AreaHasCondPagto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_area;

    /**
     *
     * @var integer
     */
    protected $idcond_pagto;

    /**
     * Method to set the value of field cd_area
     *
     * @param integer $cd_area
     * @return $this
     */
    public function setCdArea($cd_area)
    {
        $this->cd_area = $cd_area;

        return $this;
    }

    /**
     * Method to set the value of field idcond_pagto
     *
     * @param integer $idcond_pagto
     * @return $this
     */
    public function setIdcondPagto($idcond_pagto)
    {
        $this->idcond_pagto = $idcond_pagto;

        return $this;
    }

    /**
     * Returns the value of field cd_area
     *
     * @return integer
     */
    public function getCdArea()
    {
        return $this->cd_area;
    }

    /**
     * Returns the value of field idcond_pagto
     *
     * @return integer
     */
    public function getIdcondPagto()
    {
        return $this->idcond_pagto;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_area', 'App\Models\Area', 'cd_area', array('alias' => 'Area'));
        $this->belongsTo('idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('alias' => 'CondPagto'));
        $this->belongsTo('cd_area', 'App\Models\Area', 'cd_area', array('foreignKey' => true,'alias' => 'Area'));
        $this->belongsTo('idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('foreignKey' => true,'alias' => 'CondPagto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'area_has_cond_pagto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AreaHasCondPagto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AreaHasCondPagto
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
            'cd_area' => 'cd_area',
            'idcond_pagto' => 'idcond_pagto'
        );
    }

}
