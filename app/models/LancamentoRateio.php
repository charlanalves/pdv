<?php

namespace App\Models;

class LancamentoRateio extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $rateio;

    /**
     *
     * @var integer
     */
    protected $cd_contas;

    /**
     *
     * @var integer
     */
    protected $idccusto;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $cd_lancamento;

    /**
     *
     * @var double
     */
    protected $valor;

    /**
     * Method to set the value of field rateio
     *
     * @param integer $rateio
     * @return $this
     */
    public function setRateio($rateio)
    {
        $this->rateio = $rateio;

        return $this;
    }

    /**
     * Method to set the value of field cd_contas
     *
     * @param integer $cd_contas
     * @return $this
     */
    public function setCdContas($cd_contas)
    {
        $this->cd_contas = $cd_contas;

        return $this;
    }

    /**
     * Method to set the value of field idccusto
     *
     * @param integer $idccusto
     * @return $this
     */
    public function setIdccusto($idccusto)
    {
        $this->idccusto = $idccusto;

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
     * Method to set the value of field cd_lancamento
     *
     * @param integer $cd_lancamento
     * @return $this
     */
    public function setCdLancamento($cd_lancamento)
    {
        $this->cd_lancamento = $cd_lancamento;

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
     * Returns the value of field rateio
     *
     * @return integer
     */
    public function getRateio()
    {
        return $this->rateio;
    }

    /**
     * Returns the value of field cd_contas
     *
     * @return integer
     */
    public function getCdContas()
    {
        return $this->cd_contas;
    }

    /**
     * Returns the value of field idccusto
     *
     * @return integer
     */
    public function getIdccusto()
    {
        return $this->idccusto;
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
     * Returns the value of field cd_lancamento
     *
     * @return integer
     */
    public function getCdLancamento()
    {
        return $this->cd_lancamento;
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
        $this->hasMany('rateio', 'App\Models\LancamentoHasLiquidacao', 'rateio', array('alias' => 'LancamentoHasLiquidacao'));
        $this->belongsTo('idccusto', 'App\Models\Ccusto', 'idccusto', array('alias' => 'Ccusto'));
        $this->belongsTo('cd_contas', 'App\Models\ContasFinanceira', 'cd_contas', array('alias' => 'ContasFinanceira'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->hasMany('rateio', 'App\Models\LancamentoHasLiquidacao', 'rateio', NULL);
        $this->belongsTo('idccusto', 'App\Models\Ccusto', 'idccusto', array('foreignKey' => true,'alias' => 'Ccusto'));
        $this->belongsTo('cd_contas', 'App\Models\ContasFinanceira', 'cd_contas', array('foreignKey' => true,'alias' => 'ContasFinanceira'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'lancamento_rateio';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LancamentoRateio[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LancamentoRateio
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
            'rateio' => 'rateio',
            'cd_contas' => 'cd_contas',
            'idccusto' => 'idccusto',
            'cd_empresa' => 'cd_empresa',
            'cd_lancamento' => 'cd_lancamento',
            'valor' => 'valor'
        );
    }

}
