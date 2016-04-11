<?php

namespace App\Models;

class FaturamentoServicos extends \Phalcon\Mvc\Model
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
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $cobranca;

    /**
     *
     * @var integer
     */
    protected $cond_pagto;

    /**
     *
     * @var integer
     */
    protected $cd_nfservico;

    /**
     *
     * @var string
     */
    protected $data_faturamento;

    /**
     *
     * @var string
     */
    protected $data_base_vencimento;

    /**
     *
     * @var string
     */
    protected $observacao;

    /**
     *
     * @var string
     */
    protected $referencia_inicial;

    /**
     *
     * @var string
     */
    protected $referencia_final;

    /**
     *
     * @var double
     */
    protected $valor;

    /**
     *
     * @var double
     */
    protected $desconto;

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
     * @var integer
     */
    protected $reter_impostos;

    /**
     *
     * @var double
     */
    protected $pis;

    /**
     *
     * @var double
     */
    protected $cofins;

    /**
     *
     * @var double
     */
    protected $csll;

    /**
     *
     * @var double
     */
    protected $ir;

    /**
     *
     * @var double
     */
    protected $valor_bruto;

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
     * Method to set the value of field cobranca
     *
     * @param integer $cobranca
     * @return $this
     */
    public function setCobranca($cobranca)
    {
        $this->cobranca = $cobranca;

        return $this;
    }

    /**
     * Method to set the value of field cond_pagto
     *
     * @param integer $cond_pagto
     * @return $this
     */
    public function setCondPagto($cond_pagto)
    {
        $this->cond_pagto = $cond_pagto;

        return $this;
    }

    /**
     * Method to set the value of field cd_nfservico
     *
     * @param integer $cd_nfservico
     * @return $this
     */
    public function setCdNfservico($cd_nfservico)
    {
        $this->cd_nfservico = $cd_nfservico;

        return $this;
    }

    /**
     * Method to set the value of field data_faturamento
     *
     * @param string $data_faturamento
     * @return $this
     */
    public function setDataFaturamento($data_faturamento)
    {
        $this->data_faturamento = $data_faturamento;

        return $this;
    }

    /**
     * Method to set the value of field data_base_vencimento
     *
     * @param string $data_base_vencimento
     * @return $this
     */
    public function setDataBaseVencimento($data_base_vencimento)
    {
        $this->data_base_vencimento = $data_base_vencimento;

        return $this;
    }

    /**
     * Method to set the value of field observacao
     *
     * @param string $observacao
     * @return $this
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Method to set the value of field referencia_inicial
     *
     * @param string $referencia_inicial
     * @return $this
     */
    public function setReferenciaInicial($referencia_inicial)
    {
        $this->referencia_inicial = $referencia_inicial;

        return $this;
    }

    /**
     * Method to set the value of field referencia_final
     *
     * @param string $referencia_final
     * @return $this
     */
    public function setReferenciaFinal($referencia_final)
    {
        $this->referencia_final = $referencia_final;

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
     * Method to set the value of field desconto
     *
     * @param double $desconto
     * @return $this
     */
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;

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
     * Method to set the value of field reter_impostos
     *
     * @param integer $reter_impostos
     * @return $this
     */
    public function setReterImpostos($reter_impostos)
    {
        $this->reter_impostos = $reter_impostos;

        return $this;
    }

    /**
     * Method to set the value of field pis
     *
     * @param double $pis
     * @return $this
     */
    public function setPis($pis)
    {
        $this->pis = $pis;

        return $this;
    }

    /**
     * Method to set the value of field cofins
     *
     * @param double $cofins
     * @return $this
     */
    public function setCofins($cofins)
    {
        $this->cofins = $cofins;

        return $this;
    }

    /**
     * Method to set the value of field csll
     *
     * @param double $csll
     * @return $this
     */
    public function setCsll($csll)
    {
        $this->csll = $csll;

        return $this;
    }

    /**
     * Method to set the value of field ir
     *
     * @param double $ir
     * @return $this
     */
    public function setIr($ir)
    {
        $this->ir = $ir;

        return $this;
    }

    /**
     * Method to set the value of field valor_bruto
     *
     * @param double $valor_bruto
     * @return $this
     */
    public function setValorBruto($valor_bruto)
    {
        $this->valor_bruto = $valor_bruto;

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
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdEmpresa()
    {
        return $this->cd_empresa;
    }

    /**
     * Returns the value of field cobranca
     *
     * @return integer
     */
    public function getCobranca()
    {
        return $this->cobranca;
    }

    /**
     * Returns the value of field cond_pagto
     *
     * @return integer
     */
    public function getCondPagto()
    {
        return $this->cond_pagto;
    }

    /**
     * Returns the value of field cd_nfservico
     *
     * @return integer
     */
    public function getCdNfservico()
    {
        return $this->cd_nfservico;
    }

    /**
     * Returns the value of field data_faturamento
     *
     * @return string
     */
    public function getDataFaturamento()
    {
        return $this->data_faturamento;
    }

    /**
     * Returns the value of field data_base_vencimento
     *
     * @return string
     */
    public function getDataBaseVencimento()
    {
        return $this->data_base_vencimento;
    }

    /**
     * Returns the value of field observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Returns the value of field referencia_inicial
     *
     * @return string
     */
    public function getReferenciaInicial()
    {
        return $this->referencia_inicial;
    }

    /**
     * Returns the value of field referencia_final
     *
     * @return string
     */
    public function getReferenciaFinal()
    {
        return $this->referencia_final;
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
     * Returns the value of field desconto
     *
     * @return double
     */
    public function getDesconto()
    {
        return $this->desconto;
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
     * Returns the value of field reter_impostos
     *
     * @return integer
     */
    public function getReterImpostos()
    {
        return $this->reter_impostos;
    }

    /**
     * Returns the value of field pis
     *
     * @return double
     */
    public function getPis()
    {
        return $this->pis;
    }

    /**
     * Returns the value of field cofins
     *
     * @return double
     */
    public function getCofins()
    {
        return $this->cofins;
    }

    /**
     * Returns the value of field csll
     *
     * @return double
     */
    public function getCsll()
    {
        return $this->csll;
    }

    /**
     * Returns the value of field ir
     *
     * @return double
     */
    public function getIr()
    {
        return $this->ir;
    }

    /**
     * Returns the value of field valor_bruto
     *
     * @return double
     */
    public function getValorBruto()
    {
        return $this->valor_bruto;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idfaturamento', 'App\Models\FaturamentoServicosHasLancamento', 'idfaturamento', array('alias' => 'FaturamentoServicosHasLancamento'));
        $this->hasMany('idfaturamento', 'App\Models\OrdemServico', 'idfaturamento', array('alias' => 'OrdemServico'));
        $this->belongsTo('cd_nfservico', 'App\Models\Nfservico', 'cd_nfservico', array('alias' => 'Nfservico'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cobranca', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('alias' => 'CondPagto'));
        $this->hasMany('idfaturamento', 'App\Models\FaturamentoServicosHasLancamento', 'idfaturamento', NULL);
        $this->hasMany('idfaturamento', 'App\Models\OrdemServico', 'idfaturamento', NULL);
        $this->belongsTo('cd_nfservico', 'App\Models\Nfservico', 'cd_nfservico', array('foreignKey' => true,'alias' => 'Nfservico'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cobranca', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('foreignKey' => true,'alias' => 'CondPagto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'faturamento_servicos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return FaturamentoServicos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return FaturamentoServicos
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
            'cd_empresa' => 'cd_empresa',
            'cobranca' => 'cobranca',
            'cond_pagto' => 'cond_pagto',
            'cd_nfservico' => 'cd_nfservico',
            'data_faturamento' => 'data_faturamento',
            'data_base_vencimento' => 'data_base_vencimento',
            'observacao' => 'observacao',
            'referencia_inicial' => 'referencia_inicial',
            'referencia_final' => 'referencia_final',
            'valor' => 'valor',
            'desconto' => 'desconto',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'reter_impostos' => 'reter_impostos',
            'pis' => 'pis',
            'cofins' => 'cofins',
            'csll' => 'csll',
            'ir' => 'ir',
            'valor_bruto' => 'valor_bruto'
        );
    }

}
