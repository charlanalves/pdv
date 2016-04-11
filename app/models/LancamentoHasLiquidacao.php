<?php

namespace App\Models;

class LancamentoHasLiquidacao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_lancamento;

    /**
     *
     * @var integer
     */
    protected $idliquidacao;

    /**
     *
     * @var integer
     */
    protected $vinculado;

    /**
     *
     * @var integer
     */
    protected $cd_contas;

    /**
     *
     * @var integer
     */
    protected $idcusto;

    /**
     *
     * @var integer
     */
    protected $rateio;

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
     * Method to set the value of field idliquidacao
     *
     * @param integer $idliquidacao
     * @return $this
     */
    public function setIdliquidacao($idliquidacao)
    {
        $this->idliquidacao = $idliquidacao;

        return $this;
    }

    /**
     * Method to set the value of field vinculado
     *
     * @param integer $vinculado
     * @return $this
     */
    public function setVinculado($vinculado)
    {
        $this->vinculado = $vinculado;

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
     * Method to set the value of field idcusto
     *
     * @param integer $idcusto
     * @return $this
     */
    public function setIdcusto($idcusto)
    {
        $this->idcusto = $idcusto;

        return $this;
    }

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
     * Returns the value of field cd_lancamento
     *
     * @return integer
     */
    public function getCdLancamento()
    {
        return $this->cd_lancamento;
    }

    /**
     * Returns the value of field idliquidacao
     *
     * @return integer
     */
    public function getIdliquidacao()
    {
        return $this->idliquidacao;
    }

    /**
     * Returns the value of field vinculado
     *
     * @return integer
     */
    public function getVinculado()
    {
        return $this->vinculado;
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
     * Returns the value of field idcusto
     *
     * @return integer
     */
    public function getIdcusto()
    {
        return $this->idcusto;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_contas', 'App\Models\ContasFinanceira', 'cd_contas', array('alias' => 'ContasFinanceira'));
        $this->belongsTo('idcusto', 'App\Models\Ccusto', 'idccusto', array('alias' => 'Ccusto'));
        $this->belongsTo('rateio', 'App\Models\LancamentoRateio', 'rateio', array('alias' => 'LancamentoRateio'));
        $this->belongsTo('vinculado', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('idliquidacao', 'App\Models\Liquidacao', 'idliquidacao', array('alias' => 'Liquidacao'));
        $this->belongsTo('cd_contas', 'App\Models\ContasFinanceira', 'cd_contas', array('foreignKey' => true,'alias' => 'ContasFinanceira'));
        $this->belongsTo('idcusto', 'App\Models\Ccusto', 'idccusto', array('foreignKey' => true,'alias' => 'Ccusto'));
        $this->belongsTo('rateio', 'App\Models\LancamentoRateio', 'rateio', array('foreignKey' => true,'alias' => 'LancamentoRateio'));
        $this->belongsTo('vinculado', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
        $this->belongsTo('idliquidacao', 'App\Models\Liquidacao', 'idliquidacao', array('foreignKey' => true,'alias' => 'Liquidacao'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'lancamento_has_liquidacao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LancamentoHasLiquidacao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LancamentoHasLiquidacao
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
            'cd_lancamento' => 'cd_lancamento',
            'idliquidacao' => 'idliquidacao',
            'vinculado' => 'vinculado',
            'cd_contas' => 'cd_contas',
            'idcusto' => 'idcusto',
            'rateio' => 'rateio'
        );
    }

}
