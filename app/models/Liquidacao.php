<?php

namespace App\Models;

class Liquidacao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idliquidacao;

    /**
     *
     * @var integer
     */
    protected $cd_pagto;

    /**
     *
     * @var integer
     */
    protected $cd_indice;

    /**
     *
     * @var integer
     */
    protected $cd_portador;

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
     * @var string
     */
    protected $dataLiquidacao;

    /**
     *
     * @var integer
     */
    protected $consciliacao;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     *
     * @var string
     */
    protected $historico;

    /**
     *
     * @var double
     */
    protected $valor;

    /**
     *
     * @var integer
     */
    protected $idfechamento;

    /**
     *
     * @var integer
     */
    protected $idagrupamento;

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
     * Method to set the value of field cd_pagto
     *
     * @param integer $cd_pagto
     * @return $this
     */
    public function setCdPagto($cd_pagto)
    {
        $this->cd_pagto = $cd_pagto;

        return $this;
    }

    /**
     * Method to set the value of field cd_indice
     *
     * @param integer $cd_indice
     * @return $this
     */
    public function setCdIndice($cd_indice)
    {
        $this->cd_indice = $cd_indice;

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
     * Method to set the value of field dataLiquidacao
     *
     * @param string $dataLiquidacao
     * @return $this
     */
    public function setDataLiquidacao($dataLiquidacao)
    {
        $this->dataLiquidacao = $dataLiquidacao;

        return $this;
    }

    /**
     * Method to set the value of field consciliacao
     *
     * @param integer $consciliacao
     * @return $this
     */
    public function setConsciliacao($consciliacao)
    {
        $this->consciliacao = $consciliacao;

        return $this;
    }

    /**
     * Method to set the value of field ativo
     *
     * @param integer $ativo
     * @return $this
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

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
     * Method to set the value of field modificado
     *
     * @param string $modificado
     * @return $this
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;

        return $this;
    }

    /**
     * Method to set the value of field historico
     *
     * @param string $historico
     * @return $this
     */
    public function setHistorico($historico)
    {
        $this->historico = $historico;

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
     * Method to set the value of field idagrupamento
     *
     * @param integer $idagrupamento
     * @return $this
     */
    public function setIdagrupamento($idagrupamento)
    {
        $this->idagrupamento = $idagrupamento;

        return $this;
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
     * Returns the value of field cd_pagto
     *
     * @return integer
     */
    public function getCdPagto()
    {
        return $this->cd_pagto;
    }

    /**
     * Returns the value of field cd_indice
     *
     * @return integer
     */
    public function getCdIndice()
    {
        return $this->cd_indice;
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
     * Returns the value of field dataLiquidacao
     *
     * @return string
     */
    public function getDataLiquidacao()
    {
        return $this->dataLiquidacao;
    }

    /**
     * Returns the value of field consciliacao
     *
     * @return integer
     */
    public function getConsciliacao()
    {
        return $this->consciliacao;
    }

    /**
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
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
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * Returns the value of field historico
     *
     * @return string
     */
    public function getHistorico()
    {
        return $this->historico;
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
     * Returns the value of field idfechamento
     *
     * @return integer
     */
    public function getIdfechamento()
    {
        return $this->idfechamento;
    }

    /**
     * Returns the value of field idagrupamento
     *
     * @return integer
     */
    public function getIdagrupamento()
    {
        return $this->idagrupamento;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idliquidacao', 'App\Models\Cheque', 'idliquidacao', array('alias' => 'Cheque'));
        $this->hasMany('idliquidacao', 'App\Models\LancamentoHasLiquidacao', 'idliquidacao', array('alias' => 'LancamentoHasLiquidacao'));
        $this->hasMany('idliquidacao', 'App\Models\LiquidacaoHasUpload', 'idliquidacao', array('alias' => 'LiquidacaoHasUpload'));
        $this->belongsTo('idccusto', 'App\Models\Ccusto', 'idccusto', array('alias' => 'Ccusto'));
        $this->belongsTo('idfechamento', 'App\Models\FechamentoPeriodo', 'idfechamento', array('alias' => 'FechamentoPeriodo'));
        $this->belongsTo('cd_contas', 'App\Models\ContasFinanceira', 'cd_contas', array('alias' => 'ContasFinanceira'));
        $this->belongsTo('idagrupamento', 'App\Models\Agruparliquidacoes', 'idagrupamento', array('alias' => 'Agruparliquidacoes'));
        $this->belongsTo('cd_pagto', 'App\Models\TipoPagto', 'cd_pagto', array('alias' => 'TipoPagto'));
        $this->belongsTo('cd_portador', 'App\Models\Portador', 'cd_portador', array('alias' => 'Portador'));
        $this->belongsTo('cd_indice', 'App\Models\Indice', 'cd_indice', array('alias' => 'Indice'));
        $this->hasMany('idliquidacao', 'App\Models\Cheque', 'idliquidacao', NULL);
        $this->hasMany('idliquidacao', 'App\Models\LancamentoHasLiquidacao', 'idliquidacao', NULL);
        $this->hasMany('idliquidacao', 'App\Models\LiquidacaoHasUpload', 'idliquidacao', NULL);
        $this->belongsTo('idccusto', 'App\Models\Ccusto', 'idccusto', array('foreignKey' => true,'alias' => 'Ccusto'));
        $this->belongsTo('idfechamento', 'App\Models\FechamentoPeriodo', 'idfechamento', array('foreignKey' => true,'alias' => 'FechamentoPeriodo'));
        $this->belongsTo('cd_contas', 'App\Models\ContasFinanceira', 'cd_contas', array('foreignKey' => true,'alias' => 'ContasFinanceira'));
        $this->belongsTo('idagrupamento', 'App\Models\Agruparliquidacoes', 'idagrupamento', array('foreignKey' => true,'alias' => 'Agruparliquidacoes'));
        $this->belongsTo('cd_pagto', 'App\Models\TipoPagto', 'cd_pagto', array('foreignKey' => true,'alias' => 'TipoPagto'));
        $this->belongsTo('cd_portador', 'App\Models\Portador', 'cd_portador', array('foreignKey' => true,'alias' => 'Portador'));
        $this->belongsTo('cd_indice', 'App\Models\Indice', 'cd_indice', array('foreignKey' => true,'alias' => 'Indice'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'liquidacao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Liquidacao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Liquidacao
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
            'idliquidacao' => 'idliquidacao',
            'cd_pagto' => 'cd_pagto',
            'cd_indice' => 'cd_indice',
            'cd_portador' => 'cd_portador',
            'cd_contas' => 'cd_contas',
            'idccusto' => 'idccusto',
            'dataLiquidacao' => 'dataLiquidacao',
            'consciliacao' => 'consciliacao',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'historico' => 'historico',
            'valor' => 'valor',
            'idfechamento' => 'idfechamento',
            'idagrupamento' => 'idagrupamento'
        );
    }

}
