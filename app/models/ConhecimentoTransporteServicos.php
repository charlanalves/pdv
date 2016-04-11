<?php

namespace App\Models;

class ConhecimentoTransporteServicos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_servico;

    /**
     *
     * @var integer
     */
    protected $cd_conhecimento_transporte;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var double
     */
    protected $valor;

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
     * Method to set the value of field cd_conhecimento_transporte
     *
     * @param integer $cd_conhecimento_transporte
     * @return $this
     */
    public function setCdConhecimentoTransporte($cd_conhecimento_transporte)
    {
        $this->cd_conhecimento_transporte = $cd_conhecimento_transporte;

        return $this;
    }

    /**
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Method to set the value of field valor
     *
     * @param double $valor
     * @return $this
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
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
     * Returns the value of field cd_conhecimento_transporte
     *
     * @return integer
     */
    public function getCdConhecimentoTransporte()
    {
        return $this->cd_conhecimento_transporte;
    }

    /**
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field valor
     *
     * @return double
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporte', 'cd_conhecimento_transporte', array('alias' => 'ConhecimentoTransporte'));
        $this->belongsTo('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporte', 'cd_conhecimento_transporte', array('foreignKey' => true,'alias' => 'ConhecimentoTransporte'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'conhecimento_transporte_servicos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConhecimentoTransporteServicos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConhecimentoTransporteServicos
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
            'cd_servico' => 'cd_servico',
            'cd_conhecimento_transporte' => 'cd_conhecimento_transporte',
            'nome' => 'nome',
            'valor' => 'valor'
        );
    }

}
