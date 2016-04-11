<?php

namespace App\Models;

class FechamentoPeriodo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idfechamento;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $cd_portador;

    /**
     *
     * @var string
     */
    protected $dataFechamento;

    /**
     *
     * @var string
     */
    protected $dataInicioPeriodo;

    /**
     *
     * @var string
     */
    protected $dataFimPeriodo;

    /**
     *
     * @var integer
     */
    protected $responsavel;

    /**
     * Method to set the value of field idfechamento
     *
     * @param integer $idfechamento
     * @return $this
     */
    public function setIdfechamento($idfechamento)
    {
        $this->idfechamento = $idfechamento;

        return $this;
    }

    /**
     * Method to set the value of field cd_empresa
     *
     * @param integer $cd_empresa
     * @return $this
     */
    public function setCdEmpresa($cd_empresa)
    {
        $this->cd_empresa = $cd_empresa;

        return $this;
    }

    /**
     * Method to set the value of field cd_portador
     *
     * @param integer $cd_portador
     * @return $this
     */
    public function setCdPortador($cd_portador)
    {
        $this->cd_portador = $cd_portador;

        return $this;
    }

    /**
     * Method to set the value of field dataFechamento
     *
     * @param string $dataFechamento
     * @return $this
     */
    public function setDataFechamento($dataFechamento)
    {
        $this->dataFechamento = $dataFechamento;

        return $this;
    }

    /**
     * Method to set the value of field dataInicioPeriodo
     *
     * @param string $dataInicioPeriodo
     * @return $this
     */
    public function setDataInicioPeriodo($dataInicioPeriodo)
    {
        $this->dataInicioPeriodo = $dataInicioPeriodo;

        return $this;
    }

    /**
     * Method to set the value of field dataFimPeriodo
     *
     * @param string $dataFimPeriodo
     * @return $this
     */
    public function setDataFimPeriodo($dataFimPeriodo)
    {
        $this->dataFimPeriodo = $dataFimPeriodo;

        return $this;
    }

    /**
     * Method to set the value of field responsavel
     *
     * @param integer $responsavel
     * @return $this
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Returns the value of field idfechamento
     *
     * @return integer
     */
    public function getIdfechamento()
    {
        return $this->idfechamento;
    }

    /**
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdEmpresa()
    {
        return $this->cd_empresa;
    }

    /**
     * Returns the value of field cd_portador
     *
     * @return integer
     */
    public function getCdPortador()
    {
        return $this->cd_portador;
    }

    /**
     * Returns the value of field dataFechamento
     *
     * @return string
     */
    public function getDataFechamento()
    {
        return $this->dataFechamento;
    }

    /**
     * Returns the value of field dataInicioPeriodo
     *
     * @return string
     */
    public function getDataInicioPeriodo()
    {
        return $this->dataInicioPeriodo;
    }

    /**
     * Returns the value of field dataFimPeriodo
     *
     * @return string
     */
    public function getDataFimPeriodo()
    {
        return $this->dataFimPeriodo;
    }

    /**
     * Returns the value of field responsavel
     *
     * @return integer
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idfechamento', 'App\Models\Liquidacao', 'idfechamento', array('alias' => 'Liquidacao'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_portador', 'App\Models\Portador', 'cd_portador', array('alias' => 'Portador'));
        $this->belongsTo('responsavel', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->hasMany('idfechamento', 'App\Models\Liquidacao', 'idfechamento', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_portador', 'App\Models\Portador', 'cd_portador', array('foreignKey' => true,'alias' => 'Portador'));
        $this->belongsTo('responsavel', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'fechamento_periodo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return FechamentoPeriodo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return FechamentoPeriodo
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
            'idfechamento' => 'idfechamento',
            'cd_empresa' => 'cd_empresa',
            'cd_portador' => 'cd_portador',
            'dataFechamento' => 'dataFechamento',
            'dataInicioPeriodo' => 'dataInicioPeriodo',
            'dataFimPeriodo' => 'dataFimPeriodo',
            'responsavel' => 'responsavel'
        );
    }

}
