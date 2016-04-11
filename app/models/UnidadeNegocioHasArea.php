<?php

namespace App\Models;

class UnidadeNegocioHasArea extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var integer
     */
    protected $area_cd_area;

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
     * Returns the value of field unidade_negocio_cd_unidade
     *
     * @return integer
     */
    public function getUnidadeNegocioCdUnidade()
    {
        return $this->unidade_negocio_cd_unidade;
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
        $this->belongsTo('area_cd_area', 'App\Models\Area', 'cd_area', array('alias' => 'Area'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('area_cd_area', 'App\Models\Area', 'cd_area', array('foreignKey' => true,'alias' => 'Area'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'unidade_negocio_has_area';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UnidadeNegocioHasArea[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UnidadeNegocioHasArea
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
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'area_cd_area' => 'area_cd_area'
        );
    }

}
