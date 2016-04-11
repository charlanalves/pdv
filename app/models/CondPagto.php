<?php

namespace App\Models;

class CondPagto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idcond_pagto;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $periodicidade;

    /**
     *
     * @var integer
     */
    protected $sinal;

    /**
     *
     * @var integer
     */
    protected $nparcela;

    /**
     *
     * @var integer
     */
    protected $pedido;

    /**
     *
     * @var integer
     */
    protected $mensal;

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
    protected $financeira;

    /**
     *
     * @var integer
     */
    protected $id_financeira;

    /**
     *
     * @var integer
     */
    protected $indPag;

    /**
     *
     * @var integer
     */
    protected $utiliza_credito_cliente;

    /**
     *
     * @var integer
     */
    protected $exibir_orcamento;

    /**
     *
     * @var integer
     */
    protected $has_desconto;

    /**
     *
     * @var double
     */
    protected $percentual_desconto;

    /**
     *
     * @var integer
     */
    protected $imposto_primeira_parcela;

    /**
     *
     * @var string
     */
    protected $forma_pagamento;

    /**
     *
     * @var string
     */
    protected $pdvTipo;

    /**
     * Method to set the value of field idcond_pagto
     *
     * @param integer $idcond_pagto
     * @return $this
     */
    public function setIdcondPagto($idcond_pagto)
    {
        $this->idcond_pagto = $idcond_pagto;

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
     * Method to set the value of field periodicidade
     *
     * @param integer $periodicidade
     * @return $this
     */
    public function setPeriodicidade($periodicidade)
    {
        $this->periodicidade = $periodicidade;

        return $this;
    }

    /**
     * Method to set the value of field sinal
     *
     * @param integer $sinal
     * @return $this
     */
    public function setSinal($sinal)
    {
        $this->sinal = $sinal;

        return $this;
    }

    /**
     * Method to set the value of field nparcela
     *
     * @param integer $nparcela
     * @return $this
     */
    public function setNparcela($nparcela)
    {
        $this->nparcela = $nparcela;

        return $this;
    }

    /**
     * Method to set the value of field pedido
     *
     * @param integer $pedido
     * @return $this
     */
    public function setPedido($pedido)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Method to set the value of field mensal
     *
     * @param integer $mensal
     * @return $this
     */
    public function setMensal($mensal)
    {
        $this->mensal = $mensal;

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
     * Method to set the value of field financeira
     *
     * @param integer $financeira
     * @return $this
     */
    public function setFinanceira($financeira)
    {
        $this->financeira = $financeira;

        return $this;
    }

    /**
     * Method to set the value of field id_financeira
     *
     * @param integer $id_financeira
     * @return $this
     */
    public function setIdFinanceira($id_financeira)
    {
        $this->id_financeira = $id_financeira;

        return $this;
    }

    /**
     * Method to set the value of field indPag
     *
     * @param integer $indPag
     * @return $this
     */
    public function setIndPag($indPag)
    {
        $this->indPag = $indPag;

        return $this;
    }

    /**
     * Method to set the value of field utiliza_credito_cliente
     *
     * @param integer $utiliza_credito_cliente
     * @return $this
     */
    public function setUtilizaCreditoCliente($utiliza_credito_cliente)
    {
        $this->utiliza_credito_cliente = $utiliza_credito_cliente;

        return $this;
    }

    /**
     * Method to set the value of field exibir_orcamento
     *
     * @param integer $exibir_orcamento
     * @return $this
     */
    public function setExibirOrcamento($exibir_orcamento)
    {
        $this->exibir_orcamento = $exibir_orcamento;

        return $this;
    }

    /**
     * Method to set the value of field has_desconto
     *
     * @param integer $has_desconto
     * @return $this
     */
    public function setHasDesconto($has_desconto)
    {
        $this->has_desconto = $has_desconto;

        return $this;
    }

    /**
     * Method to set the value of field percentual_desconto
     *
     * @param double $percentual_desconto
     * @return $this
     */
    public function setPercentualDesconto($percentual_desconto)
    {
        $this->percentual_desconto = $percentual_desconto;

        return $this;
    }

    /**
     * Method to set the value of field imposto_primeira_parcela
     *
     * @param integer $imposto_primeira_parcela
     * @return $this
     */
    public function setImpostoPrimeiraParcela($imposto_primeira_parcela)
    {
        $this->imposto_primeira_parcela = $imposto_primeira_parcela;

        return $this;
    }

    /**
     * Method to set the value of field forma_pagamento
     *
     * @param string $forma_pagamento
     * @return $this
     */
    public function setFormaPagamento($forma_pagamento)
    {
        $this->forma_pagamento = $forma_pagamento;

        return $this;
    }

    /**
     * Method to set the value of field pdvTipo
     *
     * @param string $pdvTipo
     * @return $this
     */
    public function setPdvTipo($pdvTipo)
    {
        $this->pdvTipo = $pdvTipo;

        return $this;
    }

    /**
     * Returns the value of field idcond_pagto
     *
     * @return integer
     */
    public function getIdcondPagto()
    {
        return $this->idcond_pagto;
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
     * Returns the value of field periodicidade
     *
     * @return integer
     */
    public function getPeriodicidade()
    {
        return $this->periodicidade;
    }

    /**
     * Returns the value of field sinal
     *
     * @return integer
     */
    public function getSinal()
    {
        return $this->sinal;
    }

    /**
     * Returns the value of field nparcela
     *
     * @return integer
     */
    public function getNparcela()
    {
        return $this->nparcela;
    }

    /**
     * Returns the value of field pedido
     *
     * @return integer
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * Returns the value of field mensal
     *
     * @return integer
     */
    public function getMensal()
    {
        return $this->mensal;
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
     * Returns the value of field financeira
     *
     * @return integer
     */
    public function getFinanceira()
    {
        return $this->financeira;
    }

    /**
     * Returns the value of field id_financeira
     *
     * @return integer
     */
    public function getIdFinanceira()
    {
        return $this->id_financeira;
    }

    /**
     * Returns the value of field indPag
     *
     * @return integer
     */
    public function getIndPag()
    {
        return $this->indPag;
    }

    /**
     * Returns the value of field utiliza_credito_cliente
     *
     * @return integer
     */
    public function getUtilizaCreditoCliente()
    {
        return $this->utiliza_credito_cliente;
    }

    /**
     * Returns the value of field exibir_orcamento
     *
     * @return integer
     */
    public function getExibirOrcamento()
    {
        return $this->exibir_orcamento;
    }

    /**
     * Returns the value of field has_desconto
     *
     * @return integer
     */
    public function getHasDesconto()
    {
        return $this->has_desconto;
    }

    /**
     * Returns the value of field percentual_desconto
     *
     * @return double
     */
    public function getPercentualDesconto()
    {
        return $this->percentual_desconto;
    }

    /**
     * Returns the value of field imposto_primeira_parcela
     *
     * @return integer
     */
    public function getImpostoPrimeiraParcela()
    {
        return $this->imposto_primeira_parcela;
    }

    /**
     * Returns the value of field forma_pagamento
     *
     * @return string
     */
    public function getFormaPagamento()
    {
        return $this->forma_pagamento;
    }

    /**
     * Returns the value of field pdvTipo
     *
     * @return string
     */
    public function getPdvTipo()
    {
        return $this->pdvTipo;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idcond_pagto', 'App\Models\AreaHasCondPagto', 'idcond_pagto', array('alias' => 'AreaHasCondPagto'));
        $this->hasMany('idcond_pagto', 'App\Models\CondPagtoHasItem', 'idcond_pagto', array('alias' => 'CondPagtoHasItem'));
        $this->hasMany('idcond_pagto', 'App\Models\ConfiguracoesFaturamentoServicos', 'idcond_pagto', array('alias' => 'ConfiguracoesFaturamentoServicos'));
        $this->hasMany('idcond_pagto', 'App\Models\Desconto', 'cond_pagto_idcond_pagto', array('alias' => 'Desconto'));
        $this->hasMany('idcond_pagto', 'App\Models\EmpresaHasCondPagtoForServico', 'idcond_pagto', array('alias' => 'EmpresaHasCondPagtoForServico'));
        $this->hasMany('idcond_pagto', 'App\Models\FaturamentoServicos', 'cond_pagto', array('alias' => 'FaturamentoServicos'));
        $this->hasMany('idcond_pagto', 'App\Models\KitsDescontoArea', 'cond_pagto_idcond_pagto', array('alias' => 'KitsDescontoArea'));
        $this->hasMany('idcond_pagto', 'App\Models\OrcamentoHasCondPagto', 'idcond_pagto', array('alias' => 'OrcamentoHasCondPagto'));
        $this->hasMany('idcond_pagto', 'App\Models\TabelaPrecoHasDesconto', 'cond_pagto_idcond_pagto', array('alias' => 'TabelaPrecoHasDesconto'));
        $this->hasMany('idcond_pagto', 'App\Models\TipoPagtoHasCondPagto', 'cond_pagto_idcond_pagto', array('alias' => 'TipoPagtoHasCondPagto'));
        $this->hasMany('idcond_pagto', 'App\Models\UnidadeHasDesconto', 'cond_pagto', array('alias' => 'UnidadeHasDesconto'));
        $this->hasMany('idcond_pagto', 'App\Models\UnidadeHasPedidoMinimo', 'cond_pagto_idcond_pagto', array('alias' => 'UnidadeHasPedidoMinimo'));
        $this->belongsTo('id_financeira', 'App\Models\Financeira', 'id_financeira', array('alias' => 'Financeira'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cond_pagto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CondPagto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CondPagto
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
            'idcond_pagto' => 'idcond_pagto',
            'descricao' => 'descricao',
            'periodicidade' => 'periodicidade',
            'sinal' => 'sinal',
            'nparcela' => 'nparcela',
            'pedido' => 'pedido',
            'mensal' => 'mensal',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'ativo' => 'ativo',
            'financeira' => 'financeira',
            'id_financeira' => 'id_financeira',
            'indPag' => 'indPag',
            'utiliza_credito_cliente' => 'utiliza_credito_cliente',
            'exibir_orcamento' => 'exibir_orcamento',
            'has_desconto' => 'has_desconto',
            'percentual_desconto' => 'percentual_desconto',
            'imposto_primeira_parcela' => 'imposto_primeira_parcela',
            'forma_pagamento' => 'forma_pagamento',
            'pdvTipo' => 'pdvTipo'
        );
    }
}
