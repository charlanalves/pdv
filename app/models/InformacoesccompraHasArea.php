<?php

namespace App\Models;

class InformacoesccompraHasArea extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_informacao;

    /**
     *
     * @var integer
     */
    protected $cd_area;

    /**
     * Method to set the value of field cd_informacao
     *
     * @param integer $cd_informacao
     * @return $this
     */
    public function setCdInformacao($cd_informacao)
    {
        $this->cd_informacao = $cd_informacao;

        return $this;
    }

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
     * Returns the value of field cd_informacao
     *
     * @return integer
     */
    public function getCdInformacao()
    {
        return $this->cd_informacao;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_area', 'App\Models\Area', 'cd_area', array('alias' => 'Area'));
        $this->belongsTo('cd_informacao', 'App\Models\Informacoesccompra', 'cd_informacao', array('alias' => 'Informacoesccompra'));
        $this->belongsTo('cd_area', 'App\Models\Area', 'cd_area', array('foreignKey' => true,'alias' => 'Area'));
        $this->belongsTo('cd_informacao', 'App\Models\Informacoesccompra', 'cd_informacao', array('foreignKey' => true,'alias' => 'Informacoesccompra'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'informacoesccompra_has_area';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return InformacoesccompraHasArea[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return InformacoesccompraHasArea
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
            'cd_informacao' => 'cd_informacao',
            'cd_area' => 'cd_area'
        );
    }

}
