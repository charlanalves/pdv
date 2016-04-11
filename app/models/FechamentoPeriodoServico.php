<?php

namespace App\Models;

class FechamentoPeriodoServico extends \Phalcon\Mvc\Model
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
    protected $cd_servico;

    /**
     *
     * @var string
     */
    protected $periodo_inicial;

    /**
     *
     * @var string
     */
    protected $periodo_final;

    /**
     *
     * @var string
     */
    protected $criado;

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
     * Method to set the value of field cd_servico
     *
     * @param integer $cd_servico
     * @return $this
     */
    public function setCdServico($cd_servico)
    {
        $this->cd_servico = $cd_servico;

        return $this;
    }

    /**
     * Method to set the value of field periodo_inicial
     *
     * @param string $periodo_inicial
     * @return $this
     */
    public function setPeriodoInicial($periodo_inicial)
    {
        $this->periodo_inicial = $periodo_inicial;

        return $this;
    }

    /**
     * Method to set the value of field periodo_final
     *
     * @param string $periodo_final
     * @return $this
     */
    public function setPeriodoFinal($periodo_final)
    {
        $this->periodo_final = $periodo_final;

        return $this;
    }

    /**
     * Method to set the value of field criado
     *
     * @param string $criado
     * @return $this
     */
    public function setCriado($criado)
    {
        $this->criado = $criado;

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
     * Returns the value of field cd_servico
     *
     * @return integer
     */
    public function getCdServico()
    {
        return $this->cd_servico;
    }

    /**
     * Returns the value of field periodo_inicial
     *
     * @return string
     */
    public function getPeriodoInicial()
    {
        return $this->periodo_inicial;
    }

    /**
     * Returns the value of field periodo_final
     *
     * @return string
     */
    public function getPeriodoFinal()
    {
        return $this->periodo_final;
    }

    /**
     * Returns the value of field criado
     *
     * @return string
     */
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_servico', 'App\Models\Servicos', 'cd_servico', array('alias' => 'Servicos'));
        $this->belongsTo('cd_servico', 'App\Models\Servicos', 'cd_servico', array('foreignKey' => true,'alias' => 'Servicos'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'fechamento_periodo_servico';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return FechamentoPeriodoServico[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return FechamentoPeriodoServico
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
            'cd_servico' => 'cd_servico',
            'periodo_inicial' => 'periodo_inicial',
            'periodo_final' => 'periodo_final',
            'criado' => 'criado'
        );
    }

}
