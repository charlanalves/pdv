<?php

namespace App\Models;

class Cbo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_ocupacao;

    /**
     *
     * @var integer
     */
    protected $cod_ocupacao;

    /**
     *
     * @var string
     */
    protected $ocupacao;

    /**
     * Method to set the value of field id_ocupacao
     *
     * @param integer $id_ocupacao
     * @return $this
     */
    public function setIdOcupacao($id_ocupacao)
    {
        $this->id_ocupacao = $id_ocupacao;

        return $this;
    }

    /**
     * Method to set the value of field cod_ocupacao
     *
     * @param integer $cod_ocupacao
     * @return $this
     */
    public function setCodOcupacao($cod_ocupacao)
    {
        $this->cod_ocupacao = $cod_ocupacao;

        return $this;
    }

    /**
     * Method to set the value of field ocupacao
     *
     * @param string $ocupacao
     * @return $this
     */
    public function setOcupacao($ocupacao)
    {
        $this->ocupacao = $ocupacao;

        return $this;
    }

    /**
     * Returns the value of field id_ocupacao
     *
     * @return integer
     */
    public function getIdOcupacao()
    {
        return $this->id_ocupacao;
    }

    /**
     * Returns the value of field cod_ocupacao
     *
     * @return integer
     */
    public function getCodOcupacao()
    {
        return $this->cod_ocupacao;
    }

    /**
     * Returns the value of field ocupacao
     *
     * @return string
     */
    public function getOcupacao()
    {
        return $this->ocupacao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_ocupacao', 'App\Models\Cargo', 'id_ocupacao', array('alias' => 'Cargo'));
        $this->hasMany('id_ocupacao', 'App\Models\Empresa', 'id_ocupacao', array('alias' => 'Empresa'));
        $this->hasMany('id_ocupacao', 'App\Models\Cargo', 'id_ocupacao', NULL);
        $this->hasMany('id_ocupacao', 'App\Models\Empresa', 'id_ocupacao', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cbo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cbo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cbo
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
            'id_ocupacao' => 'id_ocupacao',
            'cod_ocupacao' => 'cod_ocupacao',
            'ocupacao' => 'ocupacao'
        );
    }

}
