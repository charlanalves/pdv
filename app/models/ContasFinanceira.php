<?php

namespace App\Models;

class ContasFinanceira extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_contas;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var string
     */
    protected $tipoconta;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $nomebalancete;

    /**
     *
     * @var integer
     */
    protected $totalizador;

    /**
     *
     * @var integer
     */
    protected $nivel1;

    /**
     *
     * @var integer
     */
    protected $nivel2;

    /**
     *
     * @var integer
     */
    protected $nivel3;

    /**
     *
     * @var integer
     */
    protected $nivel4;

    /**
     *
     * @var integer
     */
    protected $nivel5;

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
     * @var integer
     */
    protected $status;

    /**
     *
     * @var string
     */
    protected $credito_debito;

    /**
     *
     * @var string
     */
    protected $classificacao;

    /**
     *
     * @var integer
     */
    protected $exibir_cr_cp;

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
     * Method to set the value of field cd_unidade
     *
     * @param integer $cd_unidade
     * @return $this
     */
    public function setCdUnidade($cd_unidade)
    {
        $this->cd_unidade = $cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field tipoconta
     *
     * @param string $tipoconta
     * @return $this
     */
    public function setTipoconta($tipoconta)
    {
        $this->tipoconta = $tipoconta;

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
     * Method to set the value of field nomebalancete
     *
     * @param string $nomebalancete
     * @return $this
     */
    public function setNomebalancete($nomebalancete)
    {
        $this->nomebalancete = $nomebalancete;

        return $this;
    }

    /**
     * Method to set the value of field totalizador
     *
     * @param integer $totalizador
     * @return $this
     */
    public function setTotalizador($totalizador)
    {
        $this->totalizador = $totalizador;

        return $this;
    }

    /**
     * Method to set the value of field nivel1
     *
     * @param integer $nivel1
     * @return $this
     */
    public function setNivel1($nivel1)
    {
        $this->nivel1 = $nivel1;

        return $this;
    }

    /**
     * Method to set the value of field nivel2
     *
     * @param integer $nivel2
     * @return $this
     */
    public function setNivel2($nivel2)
    {
        $this->nivel2 = $nivel2;

        return $this;
    }

    /**
     * Method to set the value of field nivel3
     *
     * @param integer $nivel3
     * @return $this
     */
    public function setNivel3($nivel3)
    {
        $this->nivel3 = $nivel3;

        return $this;
    }

    /**
     * Method to set the value of field nivel4
     *
     * @param integer $nivel4
     * @return $this
     */
    public function setNivel4($nivel4)
    {
        $this->nivel4 = $nivel4;

        return $this;
    }

    /**
     * Method to set the value of field nivel5
     *
     * @param integer $nivel5
     * @return $this
     */
    public function setNivel5($nivel5)
    {
        $this->nivel5 = $nivel5;

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
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field credito_debito
     *
     * @param string $credito_debito
     * @return $this
     */
    public function setCreditoDebito($credito_debito)
    {
        $this->credito_debito = $credito_debito;

        return $this;
    }

    /**
     * Method to set the value of field classificacao
     *
     * @param string $classificacao
     * @return $this
     */
    public function setClassificacao($classificacao)
    {
        $this->classificacao = $classificacao;

        return $this;
    }

    /**
     * Method to set the value of field exibir_cr_cp
     *
     * @param integer $exibir_cr_cp
     * @return $this
     */
    public function setExibirCrCp($exibir_cr_cp)
    {
        $this->exibir_cr_cp = $exibir_cr_cp;

        return $this;
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
     * Returns the value of field cd_unidade
     *
     * @return integer
     */
    public function getCdUnidade()
    {
        return $this->cd_unidade;
    }

    /**
     * Returns the value of field tipoconta
     *
     * @return string
     */
    public function getTipoconta()
    {
        return $this->tipoconta;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field nomebalancete
     *
     * @return string
     */
    public function getNomebalancete()
    {
        return $this->nomebalancete;
    }

    /**
     * Returns the value of field totalizador
     *
     * @return integer
     */
    public function getTotalizador()
    {
        return $this->totalizador;
    }

    /**
     * Returns the value of field nivel1
     *
     * @return integer
     */
    public function getNivel1()
    {
        return $this->nivel1;
    }

    /**
     * Returns the value of field nivel2
     *
     * @return integer
     */
    public function getNivel2()
    {
        return $this->nivel2;
    }

    /**
     * Returns the value of field nivel3
     *
     * @return integer
     */
    public function getNivel3()
    {
        return $this->nivel3;
    }

    /**
     * Returns the value of field nivel4
     *
     * @return integer
     */
    public function getNivel4()
    {
        return $this->nivel4;
    }

    /**
     * Returns the value of field nivel5
     *
     * @return integer
     */
    public function getNivel5()
    {
        return $this->nivel5;
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
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field credito_debito
     *
     * @return string
     */
    public function getCreditoDebito()
    {
        return $this->credito_debito;
    }

    /**
     * Returns the value of field classificacao
     *
     * @return string
     */
    public function getClassificacao()
    {
        return $this->classificacao;
    }

    /**
     * Returns the value of field exibir_cr_cp
     *
     * @return integer
     */
    public function getExibirCrCp()
    {
        return $this->exibir_cr_cp;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_contas', 'App\Models\ConfiguracoesFinanceiro', 'conta_cheque_cobranca', array('alias' => 'ConfiguracoesFinanceiro'));
        $this->hasMany('cd_contas', 'App\Models\ConfiguracoesFinanceiro', 'conta_cheque_liquidacao', array('alias' => 'ConfiguracoesFinanceiro'));
        $this->hasMany('cd_contas', 'App\Models\ConfiguracoesFinanceiro', 'conta_transferencia_portador_destino', array('alias' => 'ConfiguracoesFinanceiro'));
        $this->hasMany('cd_contas', 'App\Models\ConfiguracoesFinanceiro', 'conta_transferencia_portador_origem', array('alias' => 'ConfiguracoesFinanceiro'));
        $this->hasMany('cd_contas', 'App\Models\Lancamento', 'contas_financeira_cd_contas', array('alias' => 'Lancamento'));
        $this->hasMany('cd_contas', 'App\Models\LancamentoHasLiquidacao', 'cd_contas', array('alias' => 'LancamentoHasLiquidacao'));
        $this->hasMany('cd_contas', 'App\Models\LancamentoRateio', 'cd_contas', array('alias' => 'LancamentoRateio'));
        $this->hasMany('cd_contas', 'App\Models\Liquidacao', 'cd_contas', array('alias' => 'Liquidacao'));
        $this->hasMany('cd_contas', 'App\Models\LiquidacaoCreditoCliente', 'cd_contas', array('alias' => 'LiquidacaoCreditoCliente'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('cd_contas', 'App\Models\ConfiguracoesFinanceiro', 'conta_cheque_cobranca', NULL);
        $this->hasMany('cd_contas', 'App\Models\ConfiguracoesFinanceiro', 'conta_cheque_liquidacao', NULL);
        $this->hasMany('cd_contas', 'App\Models\ConfiguracoesFinanceiro', 'conta_transferencia_portador_destino', NULL);
        $this->hasMany('cd_contas', 'App\Models\ConfiguracoesFinanceiro', 'conta_transferencia_portador_origem', NULL);
        $this->hasMany('cd_contas', 'App\Models\Lancamento', 'contas_financeira_cd_contas', NULL);
        $this->hasMany('cd_contas', 'App\Models\LancamentoHasLiquidacao', 'cd_contas', NULL);
        $this->hasMany('cd_contas', 'App\Models\LancamentoRateio', 'cd_contas', NULL);
        $this->hasMany('cd_contas', 'App\Models\Liquidacao', 'cd_contas', NULL);
        $this->hasMany('cd_contas', 'App\Models\LiquidacaoCreditoCliente', 'cd_contas', NULL);
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'contas_financeira';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ContasFinanceira[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ContasFinanceira
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
            'cd_contas' => 'cd_contas',
            'cd_unidade' => 'cd_unidade',
            'tipoconta' => 'tipoconta',
            'nome' => 'nome',
            'descricao' => 'descricao',
            'nomebalancete' => 'nomebalancete',
            'totalizador' => 'totalizador',
            'nivel1' => 'nivel1',
            'nivel2' => 'nivel2',
            'nivel3' => 'nivel3',
            'nivel4' => 'nivel4',
            'nivel5' => 'nivel5',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'ativo' => 'ativo',
            'status' => 'status',
            'credito_debito' => 'credito_debito',
            'classificacao' => 'classificacao',
            'exibir_cr_cp' => 'exibir_cr_cp'
        );
    }

}
