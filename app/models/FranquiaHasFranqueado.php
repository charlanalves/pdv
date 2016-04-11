<?php

namespace App\Models;

class FranquiaHasFranqueado extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_franquia_franqueado;

    /**
     *
     * @var integer
     */
    protected $franquia;

    /**
     *
     * @var integer
     */
    protected $franqueado;

    /**
     * Method to set the value of field id_franquia_franqueado
     *
     * @param integer $id_franquia_franqueado
     * @return $this
     */
    public function setIdFranquiaFranqueado($id_franquia_franqueado)
    {
        $this->id_franquia_franqueado = $id_franquia_franqueado;

        return $this;
    }

    /**
     * Method to set the value of field franquia
     *
     * @param integer $franquia
     * @return $this
     */
    public function setFranquia($franquia)
    {
        $this->franquia = $franquia;

        return $this;
    }

    /**
     * Method to set the value of field franqueado
     *
     * @param integer $franqueado
     * @return $this
     */
    public function setFranqueado($franqueado)
    {
        $this->franqueado = $franqueado;

        return $this;
    }

    /**
     * Returns the value of field id_franquia_franqueado
     *
     * @return integer
     */
    public function getIdFranquiaFranqueado()
    {
        return $this->id_franquia_franqueado;
    }

    /**
     * Returns the value of field franquia
     *
     * @return integer
     */
    public function getFranquia()
    {
        return $this->franquia;
    }

    /**
     * Returns the value of field franqueado
     *
     * @return integer
     */
    public function getFranqueado()
    {
        return $this->franqueado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('franquia', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('franqueado', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('franquia', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('franqueado', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'franquia_has_franqueado';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return FranquiaHasFranqueado[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return FranquiaHasFranqueado
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
            'id_franquia_franqueado' => 'id_franquia_franqueado',
            'franquia' => 'franquia',
            'franqueado' => 'franqueado'
        );
    }

}
