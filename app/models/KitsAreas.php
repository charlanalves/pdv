<?php

namespace App\Models;

class KitsAreas extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_kits_areas;

    /**
     *
     * @var integer
     */
    protected $kits_idkits;

    /**
     *
     * @var integer
     */
    protected $area_cd_area;

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
     * Method to set the value of field kits_idkits
     *
     * @param integer $kits_idkits
     * @return $this
     */
    public function setKitsIdkits($kits_idkits)
    {
        $this->kits_idkits = $kits_idkits;

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
     * Returns the value of field cd_kits_areas
     *
     * @return integer
     */
    public function getCdKitsAreas()
    {
        return $this->cd_kits_areas;
    }

    /**
     * Returns the value of field kits_idkits
     *
     * @return integer
     */
    public function getKitsIdkits()
    {
        return $this->kits_idkits;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_kits_areas', 'App\Models\KitsDescontoArea', 'cd_kits_areas', array('alias' => 'KitsDescontoArea'));
        $this->belongsTo('area_cd_area', 'App\Models\Area', 'cd_area', array('alias' => 'Area'));
        $this->belongsTo('kits_idkits', 'App\Models\Kits', 'idkits', array('alias' => 'Kits'));
        $this->hasMany('cd_kits_areas', 'App\Models\KitsDescontoArea', 'cd_kits_areas', NULL);
        $this->belongsTo('area_cd_area', 'App\Models\Area', 'cd_area', array('foreignKey' => true,'alias' => 'Area'));
        $this->belongsTo('kits_idkits', 'App\Models\Kits', 'idkits', array('foreignKey' => true,'alias' => 'Kits'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'kits_areas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return KitsAreas[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return KitsAreas
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
            'cd_kits_areas' => 'cd_kits_areas',
            'kits_idkits' => 'kits_idkits',
            'area_cd_area' => 'area_cd_area'
        );
    }

}
