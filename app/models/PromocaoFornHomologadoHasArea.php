<?php

namespace App\Models;

class PromocaoFornHomologadoHasArea extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_promocao;

    /**
     *
     * @var integer
     */
    protected $cd_area;

    /**
     * Method to set the value of field cd_promocao
     *
     * @param integer $cd_promocao
     * @return $this
     */
    public function setCdPromocao($cd_promocao)
    {
        $this->cd_promocao = $cd_promocao;

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
     * Returns the value of field cd_promocao
     *
     * @return integer
     */
    public function getCdPromocao()
    {
        return $this->cd_promocao;
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
        $this->belongsTo('cd_promocao', 'App\Models\PromocaoFornHomologado', 'cd_promocao', array('alias' => 'PromocaoFornHomologado'));
        $this->belongsTo('cd_area', 'App\Models\Area', 'cd_area', array('foreignKey' => true,'alias' => 'Area'));
        $this->belongsTo('cd_promocao', 'App\Models\PromocaoFornHomologado', 'cd_promocao', array('foreignKey' => true,'alias' => 'PromocaoFornHomologado'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'promocao_forn_homologado_has_area';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PromocaoFornHomologadoHasArea[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PromocaoFornHomologadoHasArea
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
            'cd_promocao' => 'cd_promocao',
            'cd_area' => 'cd_area'
        );
    }

}
