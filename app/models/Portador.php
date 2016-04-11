<?php

namespace App\Models;

class Portador extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_portador;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $banco;

    /**
     *
     * @var string
     */
    protected $agencia;

    /**
     *
     * @var string
     */
    protected $conta;

    /**
     *
     * @var string
     */
    protected $convenio;

    /**
     *
     * @var string
     */
    protected $compensacao;

    /**
     *
     * @var string
     */
    protected $cedente;

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
    protected $ativo;

    /**
     *
     * @var string
     */
    protected $carteira;

    /**
     *
     * @var string
     */
    protected $contrato;

    /**
     *
     * @var string
     */
    protected $variacao_carteira;

    /**
     *
     * @var string
     */
    protected $formatacao_convenio;

    /**
     *
     * @var string
     */
    protected $formatacao_nosso_numero;

    /**
     *
     * @var double
     */
    protected $saldo_inicial;

    /**
     *
     * @var integer
     */
    protected $padrao;

    /**
     *
     * @var integer
     */
    protected $exibir_no_relatorio_dre;

    /**
     *
     * @var integer
     */
    protected $exibir_previsao_financeira;

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
     * Method to set the value of field unidade_negocio_cd_unidade
     *
     * @param integer $unidade_negocio_cd_unidade
     * @return $this
     */
    public function setUnidadeNegocioCdUnidade($unidade_negocio_cd_unidade)
    {
        $this->unidade_negocio_cd_unidade = $unidade_negocio_cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field descricao
     *
     * @param string $descricao
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Method to set the value of field banco
     *
     * @param string $banco
     * @return $this
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Method to set the value of field agencia
     *
     * @param string $agencia
     * @return $this
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * Method to set the value of field conta
     *
     * @param string $conta
     * @return $this
     */
    public function setConta($conta)
    {
        $this->conta = $conta;

        return $this;
    }

    /**
     * Method to set the value of field convenio
     *
     * @param string $convenio
     * @return $this
     */
    public function setConvenio($convenio)
    {
        $this->convenio = $convenio;

        return $this;
    }

    /**
     * Method to set the value of field compensacao
     *
     * @param string $compensacao
     * @return $this
     */
    public function setCompensacao($compensacao)
    {
        $this->compensacao = $compensacao;

        return $this;
    }

    /**
     * Method to set the value of field cedente
     *
     * @param string $cedente
     * @return $this
     */
    public function setCedente($cedente)
    {
        $this->cedente = $cedente;

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
     * Method to set the value of field carteira
     *
     * @param string $carteira
     * @return $this
     */
    public function setCarteira($carteira)
    {
        $this->carteira = $carteira;

        return $this;
    }

    /**
     * Method to set the value of field contrato
     *
     * @param string $contrato
     * @return $this
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Method to set the value of field variacao_carteira
     *
     * @param string $variacao_carteira
     * @return $this
     */
    public function setVariacaoCarteira($variacao_carteira)
    {
        $this->variacao_carteira = $variacao_carteira;

        return $this;
    }

    /**
     * Method to set the value of field formatacao_convenio
     *
     * @param string $formatacao_convenio
     * @return $this
     */
    public function setFormatacaoConvenio($formatacao_convenio)
    {
        $this->formatacao_convenio = $formatacao_convenio;

        return $this;
    }

    /**
     * Method to set the value of field formatacao_nosso_numero
     *
     * @param string $formatacao_nosso_numero
     * @return $this
     */
    public function setFormatacaoNossoNumero($formatacao_nosso_numero)
    {
        $this->formatacao_nosso_numero = $formatacao_nosso_numero;

        return $this;
    }

    /**
     * Method to set the value of field saldo_inicial
     *
     * @param double $saldo_inicial
     * @return $this
     */
    public function setSaldoInicial($saldo_inicial)
    {
        $this->saldo_inicial = $saldo_inicial;

        return $this;
    }

    /**
     * Method to set the value of field padrao
     *
     * @param integer $padrao
     * @return $this
     */
    public function setPadrao($padrao)
    {
        $this->padrao = $padrao;

        return $this;
    }

    /**
     * Method to set the value of field exibir_no_relatorio_dre
     *
     * @param integer $exibir_no_relatorio_dre
     * @return $this
     */
    public function setExibirNoRelatorioDre($exibir_no_relatorio_dre)
    {
        $this->exibir_no_relatorio_dre = $exibir_no_relatorio_dre;

        return $this;
    }

    /**
     * Method to set the value of field exibir_previsao_financeira
     *
     * @param integer $exibir_previsao_financeira
     * @return $this
     */
    public function setExibirPrevisaoFinanceira($exibir_previsao_financeira)
    {
        $this->exibir_previsao_financeira = $exibir_previsao_financeira;

        return $this;
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
     * Returns the value of field unidade_negocio_cd_unidade
     *
     * @return integer
     */
    public function getUnidadeNegocioCdUnidade()
    {
        return $this->unidade_negocio_cd_unidade;
    }

    /**
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field banco
     *
     * @return string
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Returns the value of field agencia
     *
     * @return string
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Returns the value of field conta
     *
     * @return string
     */
    public function getConta()
    {
        return $this->conta;
    }

    /**
     * Returns the value of field convenio
     *
     * @return string
     */
    public function getConvenio()
    {
        return $this->convenio;
    }

    /**
     * Returns the value of field compensacao
     *
     * @return string
     */
    public function getCompensacao()
    {
        return $this->compensacao;
    }

    /**
     * Returns the value of field cedente
     *
     * @return string
     */
    public function getCedente()
    {
        return $this->cedente;
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
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Returns the value of field carteira
     *
     * @return string
     */
    public function getCarteira()
    {
        return $this->carteira;
    }

    /**
     * Returns the value of field contrato
     *
     * @return string
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Returns the value of field variacao_carteira
     *
     * @return string
     */
    public function getVariacaoCarteira()
    {
        return $this->variacao_carteira;
    }

    /**
     * Returns the value of field formatacao_convenio
     *
     * @return string
     */
    public function getFormatacaoConvenio()
    {
        return $this->formatacao_convenio;
    }

    /**
     * Returns the value of field formatacao_nosso_numero
     *
     * @return string
     */
    public function getFormatacaoNossoNumero()
    {
        return $this->formatacao_nosso_numero;
    }

    /**
     * Returns the value of field saldo_inicial
     *
     * @return double
     */
    public function getSaldoInicial()
    {
        return $this->saldo_inicial;
    }

    /**
     * Returns the value of field padrao
     *
     * @return integer
     */
    public function getPadrao()
    {
        return $this->padrao;
    }

    /**
     * Returns the value of field exibir_no_relatorio_dre
     *
     * @return integer
     */
    public function getExibirNoRelatorioDre()
    {
        return $this->exibir_no_relatorio_dre;
    }

    /**
     * Returns the value of field exibir_previsao_financeira
     *
     * @return integer
     */
    public function getExibirPrevisaoFinanceira()
    {
        return $this->exibir_previsao_financeira;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_portador', 'App\Models\Cheque', 'cd_portador', array('alias' => 'Cheque'));
        $this->hasMany('cd_portador', 'App\Models\ConfiguracoesFinanceiro', 'cpagar_portador_padrao', array('alias' => 'ConfiguracoesFinanceiro'));
        $this->hasMany('cd_portador', 'App\Models\ConfiguracoesFinanceiro', 'nfentrada_portador_padrao', array('alias' => 'ConfiguracoesFinanceiro'));
        $this->hasMany('cd_portador', 'App\Models\ConfiguracoesFinanceiro', 'nfsaida_portador_padrao', array('alias' => 'ConfiguracoesFinanceiro'));
        $this->hasMany('cd_portador', 'App\Models\ConfiguracoesFinanceiro', 'portador_multiplo_credito_cliente', array('alias' => 'ConfiguracoesFinanceiro'));
        $this->hasMany('cd_portador', 'App\Models\FechamentoPeriodo', 'cd_portador', array('alias' => 'FechamentoPeriodo'));
        $this->hasMany('cd_portador', 'App\Models\Lancamento', 'portador', array('alias' => 'Lancamento'));
        $this->hasMany('cd_portador', 'App\Models\Liquidacao', 'cd_portador', array('alias' => 'Liquidacao'));
        $this->hasMany('cd_portador', 'App\Models\LiquidacaoCreditoCliente', 'cd_portador', array('alias' => 'LiquidacaoCreditoCliente'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('cd_portador', 'App\Models\Cheque', 'cd_portador', NULL);
        $this->hasMany('cd_portador', 'App\Models\ConfiguracoesFinanceiro', 'cpagar_portador_padrao', NULL);
        $this->hasMany('cd_portador', 'App\Models\ConfiguracoesFinanceiro', 'nfentrada_portador_padrao', NULL);
        $this->hasMany('cd_portador', 'App\Models\ConfiguracoesFinanceiro', 'nfsaida_portador_padrao', NULL);
        $this->hasMany('cd_portador', 'App\Models\ConfiguracoesFinanceiro', 'portador_multiplo_credito_cliente', NULL);
        $this->hasMany('cd_portador', 'App\Models\FechamentoPeriodo', 'cd_portador', NULL);
        $this->hasMany('cd_portador', 'App\Models\Lancamento', 'portador', NULL);
        $this->hasMany('cd_portador', 'App\Models\Liquidacao', 'cd_portador', NULL);
        $this->hasMany('cd_portador', 'App\Models\LiquidacaoCreditoCliente', 'cd_portador', NULL);
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'portador';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Portador[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Portador
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
            'cd_portador' => 'cd_portador',
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'descricao' => 'descricao',
            'banco' => 'banco',
            'agencia' => 'agencia',
            'conta' => 'conta',
            'convenio' => 'convenio',
            'compensacao' => 'compensacao',
            'cedente' => 'cedente',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'ativo' => 'ativo',
            'carteira' => 'carteira',
            'contrato' => 'contrato',
            'variacao_carteira' => 'variacao_carteira',
            'formatacao_convenio' => 'formatacao_convenio',
            'formatacao_nosso_numero' => 'formatacao_nosso_numero',
            'saldo_inicial' => 'saldo_inicial',
            'padrao' => 'padrao',
            'exibir_no_relatorio_dre' => 'exibir_no_relatorio_dre',
            'exibir_previsao_financeira' => 'exibir_previsao_financeira'
        );
    }

}
