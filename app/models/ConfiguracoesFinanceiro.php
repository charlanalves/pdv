<?php

namespace App\Models;

class ConfiguracoesFinanceiro extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $conta_financeira_padrao;

    /**
     *
     * @var integer
     */
    protected $portador_padrao;

    /**
     *
     * @var integer
     */
    protected $conta_jurosCP;

    /**
     *
     * @var integer
     */
    protected $conta_jurosCR;

    /**
     *
     * @var integer
     */
    protected $conta_multaCP;

    /**
     *
     * @var integer
     */
    protected $conta_multaCR;

    /**
     *
     * @var integer
     */
    protected $conta_descontoCP;

    /**
     *
     * @var integer
     */
    protected $conta_descontoCR;

    /**
     *
     * @var integer
     */
    protected $conta_NFE;

    /**
     *
     * @var integer
     */
    protected $conta_transferencia_portador_origem;

    /**
     *
     * @var integer
     */
    protected $conta_transferencia_portador_destino;

    /**
     *
     * @var integer
     */
    protected $conta_cheque_cobranca;

    /**
     *
     * @var integer
     */
    protected $conta_cheque_liquidacao;

    /**
     *
     * @var integer
     */
    protected $portador_multiplo_credito_cliente;

    /**
     *
     * @var integer
     */
    protected $nfsaida_portador_padrao;

    /**
     *
     * @var integer
     */
    protected $nfentrada_portador_padrao;

    /**
     *
     * @var integer
     */
    protected $cpagar_portador_padrao;

    /**
     *
     * @var integer
     */
    protected $nfe_devolucao_portador_padrao;

    /**
     *
     * @var integer
     */
    protected $nfe_devolucao_conta_padrao_credito;

    /**
     *
     * @var integer
     */
    protected $nfe_devolucao_conta_padrao_debito;

    /**
     *
     * @var integer
     */
    protected $nfe_devolucao_centro_de_custo_padrao;

    /**
     *
     * @var integer
     */
    protected $nfe_devolucao_cond_pagto_padrao;

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
     * Method to set the value of field conta_financeira_padrao
     *
     * @param integer $conta_financeira_padrao
     * @return $this
     */
    public function setContaFinanceiraPadrao($conta_financeira_padrao)
    {
        $this->conta_financeira_padrao = $conta_financeira_padrao;

        return $this;
    }

    /**
     * Method to set the value of field portador_padrao
     *
     * @param integer $portador_padrao
     * @return $this
     */
    public function setPortadorPadrao($portador_padrao)
    {
        $this->portador_padrao = $portador_padrao;

        return $this;
    }

    /**
     * Method to set the value of field conta_jurosCP
     *
     * @param integer $conta_jurosCP
     * @return $this
     */
    public function setContaJurosCP($conta_jurosCP)
    {
        $this->conta_jurosCP = $conta_jurosCP;

        return $this;
    }

    /**
     * Method to set the value of field conta_jurosCR
     *
     * @param integer $conta_jurosCR
     * @return $this
     */
    public function setContaJurosCR($conta_jurosCR)
    {
        $this->conta_jurosCR = $conta_jurosCR;

        return $this;
    }

    /**
     * Method to set the value of field conta_multaCP
     *
     * @param integer $conta_multaCP
     * @return $this
     */
    public function setContaMultaCP($conta_multaCP)
    {
        $this->conta_multaCP = $conta_multaCP;

        return $this;
    }

    /**
     * Method to set the value of field conta_multaCR
     *
     * @param integer $conta_multaCR
     * @return $this
     */
    public function setContaMultaCR($conta_multaCR)
    {
        $this->conta_multaCR = $conta_multaCR;

        return $this;
    }

    /**
     * Method to set the value of field conta_descontoCP
     *
     * @param integer $conta_descontoCP
     * @return $this
     */
    public function setContaDescontoCP($conta_descontoCP)
    {
        $this->conta_descontoCP = $conta_descontoCP;

        return $this;
    }

    /**
     * Method to set the value of field conta_descontoCR
     *
     * @param integer $conta_descontoCR
     * @return $this
     */
    public function setContaDescontoCR($conta_descontoCR)
    {
        $this->conta_descontoCR = $conta_descontoCR;

        return $this;
    }

    /**
     * Method to set the value of field conta_NFE
     *
     * @param integer $conta_NFE
     * @return $this
     */
    public function setContaNFE($conta_NFE)
    {
        $this->conta_NFE = $conta_NFE;

        return $this;
    }

    /**
     * Method to set the value of field conta_transferencia_portador_origem
     *
     * @param integer $conta_transferencia_portador_origem
     * @return $this
     */
    public function setContaTransferenciaPortadorOrigem($conta_transferencia_portador_origem)
    {
        $this->conta_transferencia_portador_origem = $conta_transferencia_portador_origem;

        return $this;
    }

    /**
     * Method to set the value of field conta_transferencia_portador_destino
     *
     * @param integer $conta_transferencia_portador_destino
     * @return $this
     */
    public function setContaTransferenciaPortadorDestino($conta_transferencia_portador_destino)
    {
        $this->conta_transferencia_portador_destino = $conta_transferencia_portador_destino;

        return $this;
    }

    /**
     * Method to set the value of field conta_cheque_cobranca
     *
     * @param integer $conta_cheque_cobranca
     * @return $this
     */
    public function setContaChequeCobranca($conta_cheque_cobranca)
    {
        $this->conta_cheque_cobranca = $conta_cheque_cobranca;

        return $this;
    }

    /**
     * Method to set the value of field conta_cheque_liquidacao
     *
     * @param integer $conta_cheque_liquidacao
     * @return $this
     */
    public function setContaChequeLiquidacao($conta_cheque_liquidacao)
    {
        $this->conta_cheque_liquidacao = $conta_cheque_liquidacao;

        return $this;
    }

    /**
     * Method to set the value of field portador_multiplo_credito_cliente
     *
     * @param integer $portador_multiplo_credito_cliente
     * @return $this
     */
    public function setPortadorMultiploCreditoCliente($portador_multiplo_credito_cliente)
    {
        $this->portador_multiplo_credito_cliente = $portador_multiplo_credito_cliente;

        return $this;
    }

    /**
     * Method to set the value of field nfsaida_portador_padrao
     *
     * @param integer $nfsaida_portador_padrao
     * @return $this
     */
    public function setNfsaidaPortadorPadrao($nfsaida_portador_padrao)
    {
        $this->nfsaida_portador_padrao = $nfsaida_portador_padrao;

        return $this;
    }

    /**
     * Method to set the value of field nfentrada_portador_padrao
     *
     * @param integer $nfentrada_portador_padrao
     * @return $this
     */
    public function setNfentradaPortadorPadrao($nfentrada_portador_padrao)
    {
        $this->nfentrada_portador_padrao = $nfentrada_portador_padrao;

        return $this;
    }

    /**
     * Method to set the value of field cpagar_portador_padrao
     *
     * @param integer $cpagar_portador_padrao
     * @return $this
     */
    public function setCpagarPortadorPadrao($cpagar_portador_padrao)
    {
        $this->cpagar_portador_padrao = $cpagar_portador_padrao;

        return $this;
    }

    /**
     * Method to set the value of field nfe_devolucao_portador_padrao
     *
     * @param integer $nfe_devolucao_portador_padrao
     * @return $this
     */
    public function setNfeDevolucaoPortadorPadrao($nfe_devolucao_portador_padrao)
    {
        $this->nfe_devolucao_portador_padrao = $nfe_devolucao_portador_padrao;

        return $this;
    }

    /**
     * Method to set the value of field nfe_devolucao_conta_padrao_credito
     *
     * @param integer $nfe_devolucao_conta_padrao_credito
     * @return $this
     */
    public function setNfeDevolucaoContaPadraoCredito($nfe_devolucao_conta_padrao_credito)
    {
        $this->nfe_devolucao_conta_padrao_credito = $nfe_devolucao_conta_padrao_credito;

        return $this;
    }

    /**
     * Method to set the value of field nfe_devolucao_conta_padrao_debito
     *
     * @param integer $nfe_devolucao_conta_padrao_debito
     * @return $this
     */
    public function setNfeDevolucaoContaPadraoDebito($nfe_devolucao_conta_padrao_debito)
    {
        $this->nfe_devolucao_conta_padrao_debito = $nfe_devolucao_conta_padrao_debito;

        return $this;
    }

    /**
     * Method to set the value of field nfe_devolucao_centro_de_custo_padrao
     *
     * @param integer $nfe_devolucao_centro_de_custo_padrao
     * @return $this
     */
    public function setNfeDevolucaoCentroDeCustoPadrao($nfe_devolucao_centro_de_custo_padrao)
    {
        $this->nfe_devolucao_centro_de_custo_padrao = $nfe_devolucao_centro_de_custo_padrao;

        return $this;
    }

    /**
     * Method to set the value of field nfe_devolucao_cond_pagto_padrao
     *
     * @param integer $nfe_devolucao_cond_pagto_padrao
     * @return $this
     */
    public function setNfeDevolucaoCondPagtoPadrao($nfe_devolucao_cond_pagto_padrao)
    {
        $this->nfe_devolucao_cond_pagto_padrao = $nfe_devolucao_cond_pagto_padrao;

        return $this;
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
     * Returns the value of field conta_financeira_padrao
     *
     * @return integer
     */
    public function getContaFinanceiraPadrao()
    {
        return $this->conta_financeira_padrao;
    }

    /**
     * Returns the value of field portador_padrao
     *
     * @return integer
     */
    public function getPortadorPadrao()
    {
        return $this->portador_padrao;
    }

    /**
     * Returns the value of field conta_jurosCP
     *
     * @return integer
     */
    public function getContaJurosCP()
    {
        return $this->conta_jurosCP;
    }

    /**
     * Returns the value of field conta_jurosCR
     *
     * @return integer
     */
    public function getContaJurosCR()
    {
        return $this->conta_jurosCR;
    }

    /**
     * Returns the value of field conta_multaCP
     *
     * @return integer
     */
    public function getContaMultaCP()
    {
        return $this->conta_multaCP;
    }

    /**
     * Returns the value of field conta_multaCR
     *
     * @return integer
     */
    public function getContaMultaCR()
    {
        return $this->conta_multaCR;
    }

    /**
     * Returns the value of field conta_descontoCP
     *
     * @return integer
     */
    public function getContaDescontoCP()
    {
        return $this->conta_descontoCP;
    }

    /**
     * Returns the value of field conta_descontoCR
     *
     * @return integer
     */
    public function getContaDescontoCR()
    {
        return $this->conta_descontoCR;
    }

    /**
     * Returns the value of field conta_NFE
     *
     * @return integer
     */
    public function getContaNFE()
    {
        return $this->conta_NFE;
    }

    /**
     * Returns the value of field conta_transferencia_portador_origem
     *
     * @return integer
     */
    public function getContaTransferenciaPortadorOrigem()
    {
        return $this->conta_transferencia_portador_origem;
    }

    /**
     * Returns the value of field conta_transferencia_portador_destino
     *
     * @return integer
     */
    public function getContaTransferenciaPortadorDestino()
    {
        return $this->conta_transferencia_portador_destino;
    }

    /**
     * Returns the value of field conta_cheque_cobranca
     *
     * @return integer
     */
    public function getContaChequeCobranca()
    {
        return $this->conta_cheque_cobranca;
    }

    /**
     * Returns the value of field conta_cheque_liquidacao
     *
     * @return integer
     */
    public function getContaChequeLiquidacao()
    {
        return $this->conta_cheque_liquidacao;
    }

    /**
     * Returns the value of field portador_multiplo_credito_cliente
     *
     * @return integer
     */
    public function getPortadorMultiploCreditoCliente()
    {
        return $this->portador_multiplo_credito_cliente;
    }

    /**
     * Returns the value of field nfsaida_portador_padrao
     *
     * @return integer
     */
    public function getNfsaidaPortadorPadrao()
    {
        return $this->nfsaida_portador_padrao;
    }

    /**
     * Returns the value of field nfentrada_portador_padrao
     *
     * @return integer
     */
    public function getNfentradaPortadorPadrao()
    {
        return $this->nfentrada_portador_padrao;
    }

    /**
     * Returns the value of field cpagar_portador_padrao
     *
     * @return integer
     */
    public function getCpagarPortadorPadrao()
    {
        return $this->cpagar_portador_padrao;
    }

    /**
     * Returns the value of field nfe_devolucao_portador_padrao
     *
     * @return integer
     */
    public function getNfeDevolucaoPortadorPadrao()
    {
        return $this->nfe_devolucao_portador_padrao;
    }

    /**
     * Returns the value of field nfe_devolucao_conta_padrao_credito
     *
     * @return integer
     */
    public function getNfeDevolucaoContaPadraoCredito()
    {
        return $this->nfe_devolucao_conta_padrao_credito;
    }

    /**
     * Returns the value of field nfe_devolucao_conta_padrao_debito
     *
     * @return integer
     */
    public function getNfeDevolucaoContaPadraoDebito()
    {
        return $this->nfe_devolucao_conta_padrao_debito;
    }

    /**
     * Returns the value of field nfe_devolucao_centro_de_custo_padrao
     *
     * @return integer
     */
    public function getNfeDevolucaoCentroDeCustoPadrao()
    {
        return $this->nfe_devolucao_centro_de_custo_padrao;
    }

    /**
     * Returns the value of field nfe_devolucao_cond_pagto_padrao
     *
     * @return integer
     */
    public function getNfeDevolucaoCondPagtoPadrao()
    {
        return $this->nfe_devolucao_cond_pagto_padrao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('conta_cheque_cobranca', 'App\Models\ContasFinanceira', 'cd_contas', array('alias' => 'ContasFinanceira'));
        $this->belongsTo('conta_cheque_liquidacao', 'App\Models\ContasFinanceira', 'cd_contas', array('alias' => 'ContasFinanceira'));
        $this->belongsTo('conta_transferencia_portador_destino', 'App\Models\ContasFinanceira', 'cd_contas', array('alias' => 'ContasFinanceira'));
        $this->belongsTo('conta_transferencia_portador_origem', 'App\Models\ContasFinanceira', 'cd_contas', array('alias' => 'ContasFinanceira'));
        $this->belongsTo('cpagar_portador_padrao', 'App\Models\Portador', 'cd_portador', array('alias' => 'Portador'));
        $this->belongsTo('nfentrada_portador_padrao', 'App\Models\Portador', 'cd_portador', array('alias' => 'Portador'));
        $this->belongsTo('nfsaida_portador_padrao', 'App\Models\Portador', 'cd_portador', array('alias' => 'Portador'));
        $this->belongsTo('portador_multiplo_credito_cliente', 'App\Models\Portador', 'cd_portador', array('alias' => 'Portador'));
        $this->belongsTo('conta_cheque_cobranca', 'App\Models\ContasFinanceira', 'cd_contas', array('foreignKey' => true,'alias' => 'ContasFinanceira'));
        $this->belongsTo('conta_cheque_liquidacao', 'App\Models\ContasFinanceira', 'cd_contas', array('foreignKey' => true,'alias' => 'ContasFinanceira'));
        $this->belongsTo('conta_transferencia_portador_destino', 'App\Models\ContasFinanceira', 'cd_contas', array('foreignKey' => true,'alias' => 'ContasFinanceira'));
        $this->belongsTo('conta_transferencia_portador_origem', 'App\Models\ContasFinanceira', 'cd_contas', array('foreignKey' => true,'alias' => 'ContasFinanceira'));
        $this->belongsTo('cpagar_portador_padrao', 'App\Models\Portador', 'cd_portador', array('foreignKey' => true,'alias' => 'Portador'));
        $this->belongsTo('nfentrada_portador_padrao', 'App\Models\Portador', 'cd_portador', array('foreignKey' => true,'alias' => 'Portador'));
        $this->belongsTo('nfsaida_portador_padrao', 'App\Models\Portador', 'cd_portador', array('foreignKey' => true,'alias' => 'Portador'));
        $this->belongsTo('portador_multiplo_credito_cliente', 'App\Models\Portador', 'cd_portador', array('foreignKey' => true,'alias' => 'Portador'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'configuracoes_financeiro';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConfiguracoesFinanceiro[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConfiguracoesFinanceiro
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
            'cd_empresa' => 'cd_empresa',
            'conta_financeira_padrao' => 'conta_financeira_padrao',
            'portador_padrao' => 'portador_padrao',
            'conta_jurosCP' => 'conta_jurosCP',
            'conta_jurosCR' => 'conta_jurosCR',
            'conta_multaCP' => 'conta_multaCP',
            'conta_multaCR' => 'conta_multaCR',
            'conta_descontoCP' => 'conta_descontoCP',
            'conta_descontoCR' => 'conta_descontoCR',
            'conta_NFE' => 'conta_NFE',
            'conta_transferencia_portador_origem' => 'conta_transferencia_portador_origem',
            'conta_transferencia_portador_destino' => 'conta_transferencia_portador_destino',
            'conta_cheque_cobranca' => 'conta_cheque_cobranca',
            'conta_cheque_liquidacao' => 'conta_cheque_liquidacao',
            'portador_multiplo_credito_cliente' => 'portador_multiplo_credito_cliente',
            'nfsaida_portador_padrao' => 'nfsaida_portador_padrao',
            'nfentrada_portador_padrao' => 'nfentrada_portador_padrao',
            'cpagar_portador_padrao' => 'cpagar_portador_padrao',
            'nfe_devolucao_portador_padrao' => 'nfe_devolucao_portador_padrao',
            'nfe_devolucao_conta_padrao_credito' => 'nfe_devolucao_conta_padrao_credito',
            'nfe_devolucao_conta_padrao_debito' => 'nfe_devolucao_conta_padrao_debito',
            'nfe_devolucao_centro_de_custo_padrao' => 'nfe_devolucao_centro_de_custo_padrao',
            'nfe_devolucao_cond_pagto_padrao' => 'nfe_devolucao_cond_pagto_padrao'
        );
    }

}
