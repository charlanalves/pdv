<?php

namespace App\Models;

class GlobalStatus extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_status;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field cd_status
     *
     * @param integer $cd_status
     * @return $this
     */
    public function setCdStatus($cd_status)
    {
        $this->cd_status = $cd_status;

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
     * Returns the value of field cd_status
     *
     * @return integer
     */
    public function getCdStatus()
    {
        return $this->cd_status;
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
        $this->hasMany('cd_status', 'App\Models\GlobalHistoricoProcessos', 'cd_status', array('alias' => 'GlobalHistoricoProcessos'));
        $this->hasMany('cd_status', 'App\Models\GlobalHistoricoProcessos', 'cd_status', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'global_status';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return GlobalStatus[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return GlobalStatus
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
            'cd_status' => 'cd_status',
            'descricao' => 'descricao'
        );
    }

}
