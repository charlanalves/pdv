<?php

namespace App\Models;

class NfeConn extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idnfe_conn;

    /**
     *
     * @var string
     */
    protected $xmlEnviado;

    /**
     *
     * @var string
     */
    protected $xmlRetorno;

    /**
     *
     * @var integer
     */
    protected $operacao;

    /**
     *
     * @var string
     */
    protected $cStat;
    /**
     *
     * @var string
     */
    protected $data_conn;

    /**
     *
     * @var integer
     */
    protected $cancelada;

    /**
     * Method to set the value of field idnfe_conn
     *
     * @param integer $idnfe_conn
     * @return $this
     */
    public function setIdnfeConn($idnfe_conn)
    {
        $this->idnfe_conn = $idnfe_conn;

        return $this;
    }

    /**
     * Method to set the value of field xmlEnviado
     *
     * @param string $xmlEnviado
     * @return $this
     */
    public function setXmlEnviado($xmlEnviado)
    {
        $this->xmlEnviado = $xmlEnviado;

        return $this;
    }

    /**
     * Method to set the value of field xmlRetorno
     *
     * @param string $xmlRetorno
     * @return $this
     */
    public function setXmlRetorno($xmlRetorno)
    {
        $this->xmlRetorno = $xmlRetorno;

        return $this;
    }

    /**
     * Method to set the value of field operacao
     *
     * @param integer $operacao
     * @return $this
     */
    public function setOperacao($operacao)
    {
        $this->operacao = $operacao;

        return $this;
    }

    /**
     * Method to set the value of field cStat
     *
     * @param string $cStat
     * @return $this
     */
    public function setCStat($cStat)
    {
        $this->cStat = $cStat;

        return $this;
    }

    /**
     * Method to set the value of field cancelada
     *
     * @param integer $cancelada
     * @return $this
     */
    public function setCancelada($cancelada)
    {
        $this->cancelada = $cancelada;

        return $this;
    }
    
     /**
     * Method to set the value of field $data_conn
     *
     * @param integer $data_conn
     * @return $this
     */
    public function setDataConn($data_conn) 
    {
        $this->data_conn = $data_conn;
    }

    
    /**
     * Returns the value of field idnfe_conn
     *
     * @return integer
     */
    public function getIdnfeConn()
    {
        return $this->idnfe_conn;
    }

    /**
     * Returns the value of field xmlEnviado
     *
     * @return string
     */
    public function getXmlEnviado()
    {
        return $this->xmlEnviado;
    }

    /**
     * Returns the value of field xmlRetorno
     *
     * @return string
     */
    public function getXmlRetorno()
    {
        return $this->xmlRetorno;
    }

    /**
     * Returns the value of field operacao
     *
     * @return integer
     */
    public function getOperacao()
    {
        return $this->operacao;
    }

    /**
     * Returns the value of field cStat
     *
     * @return string
     */
    public function getCStat()
    {
        return $this->cStat;
    }

    /**
     * Returns the value of field cancelada
     *
     * @return integer
     */
    public function getCancelada()
    {
        return $this->cancelada;
    }
    
    /**
     * Returns the value of field data_conn
     *
     * @return integer
     */
    public function getDataConn() 
    {
        return $this->data_conn;
    }

    
    
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idnfe_conn', 'App\Models\NfeHasConn', 'nfe_conn_idnfe_conn', array('alias' => 'NfeHasConn'));
        $this->hasMany('idnfe_conn', 'App\Models\NfeHasConn', 'nfe_conn_idnfe_conn', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfe_conn';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfeConn[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfeConn
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
            'idnfe_conn' => 'idnfe_conn',
            'xmlEnviado' => 'xmlEnviado',
            'xmlRetorno' => 'xmlRetorno',
            'operacao' => 'operacao',
            'cStat' => 'cStat',
            'cancelada' => 'cancelada',
            'data_conn' => 'data_conn'
        );
    }

}
