<?php

namespace App\Models;

class SacStatus extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cod_status;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field cod_status
     *
     * @param integer $cod_status
     * @return $this
     */
    public function setCodStatus($cod_status)
    {
        $this->cod_status = $cod_status;

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
     * Returns the value of field cod_status
     *
     * @return integer
     */
    public function getCodStatus()
    {
        return $this->cod_status;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cod_status', 'App\Models\SacChamado', 'cod_status', array('alias' => 'SacChamado'));
        $this->hasMany('cod_status', 'App\Models\SacChamadoHasHistorico', 'cod_acao', array('alias' => 'SacChamadoHasHistorico'));
        $this->hasMany('cod_status', 'App\Models\SacChamadoHasProblemas', 'cod_status', array('alias' => 'SacChamadoHasProblemas'));
        $this->hasMany('cod_status', 'App\Models\SacChamado', 'cod_status', NULL);
        $this->hasMany('cod_status', 'App\Models\SacChamadoHasHistorico', 'cod_acao', NULL);
        $this->hasMany('cod_status', 'App\Models\SacChamadoHasProblemas', 'cod_status', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sac_status';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacStatus[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacStatus
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
            'cod_status' => 'cod_status',
            'descricao' => 'descricao'
        );
    }

}
