<?php

namespace App\Models;

class FaturamentoServicosHasLancamento extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idfaturamento;

    /**
     *
     * @var integer
     */
    protected $cd_lancamento;

    /**
     * Method to set the value of field idfaturamento
     *
     * @param integer $idfaturamento
     * @return $this
     */
    public function setIdfaturamento($idfaturamento)
    {
        $this->idfaturamento = $idfaturamento;

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
     * Returns the value of field idfaturamento
     *
     * @return integer
     */
    public function getIdfaturamento()
    {
        return $this->idfaturamento;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('idfaturamento', 'App\Models\FaturamentoServicos', 'idfaturamento', array('alias' => 'FaturamentoServicos'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
        $this->belongsTo('idfaturamento', 'App\Models\FaturamentoServicos', 'idfaturamento', array('foreignKey' => true,'alias' => 'FaturamentoServicos'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'faturamento_servicos_has_lancamento';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return FaturamentoServicosHasLancamento[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return FaturamentoServicosHasLancamento
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
            'idfaturamento' => 'idfaturamento',
            'cd_lancamento' => 'cd_lancamento'
        );
    }

}
