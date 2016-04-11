<?php

namespace App\Models;

class OrdemCompra extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_compra;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var integer
     */
    protected $fornecedor;

    /**
     *
     * @var integer
     */
    protected $ncotacao;

    /**
     *
     * @var string
     */
    protected $emissao;

    /**
     *
     * @var string
     */
    protected $dataEntrada;

    /**
     *
     * @var double
     */
    protected $desconto;

    /**
     *
     * @var double
     */
    protected $encargos;

    /**
     *
     * @var double
     */
    protected $despAces;

    /**
     *
     * @var string
     */
    protected $tipoFrete;

    /**
     *
     * @var string
     */
    protected $obs;

    /**
     *
     * @var double
     */
    protected $frete;

    /**
     *
     * @var string
     */
    protected $dataEntrega;

    /**
     *
     * @var string
     */
    protected $transportadora;

    /**
     *
     * @var string
     */
    protected $cond_pagto;

    /**
     *
     * @var string
     */
    protected $forma_pagto;

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
    protected $tipo;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $status_cotacao;

    /**
     * Method to set the value of field cd_compra
     *
     * @param integer $cd_compra
     * @return $this
     */
    public function setCdCompra($cd_compra)
    {
        $this->cd_compra = $cd_compra;

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
     * Method to set the value of field fornecedor
     *
     * @param integer $fornecedor
     * @return $this
     */
    public function setFornecedor($fornecedor)
    {
        $this->fornecedor = $fornecedor;

        return $this;
    }

    /**
     * Method to set the value of field ncotacao
     *
     * @param integer $ncotacao
     * @return $this
     */
    public function setNcotacao($ncotacao)
    {
        $this->ncotacao = $ncotacao;

        return $this;
    }

    /**
     * Method to set the value of field emissao
     *
     * @param string $emissao
     * @return $this
     */
    public function setEmissao($emissao)
    {
        $this->emissao = $emissao;

        return $this;
    }

    /**
     * Method to set the value of field dataEntrada
     *
     * @param string $dataEntrada
     * @return $this
     */
    public function setDataEntrada($dataEntrada)
    {
        $this->dataEntrada = $dataEntrada;

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
     * Method to set the value of field encargos
     *
     * @param double $encargos
     * @return $this
     */
    public function setEncargos($encargos)
    {
        $this->encargos = $encargos;

        return $this;
    }

    /**
     * Method to set the value of field despAces
     *
     * @param double $despAces
     * @return $this
     */
    public function setDespAces($despAces)
    {
        $this->despAces = $despAces;

        return $this;
    }

    /**
     * Method to set the value of field tipoFrete
     *
     * @param string $tipoFrete
     * @return $this
     */
    public function setTipoFrete($tipoFrete)
    {
        $this->tipoFrete = $tipoFrete;

        return $this;
    }

    /**
     * Method to set the value of field obs
     *
     * @param string $obs
     * @return $this
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Method to set the value of field frete
     *
     * @param double $frete
     * @return $this
     */
    public function setFrete($frete)
    {
        $this->frete = $frete;

        return $this;
    }

    /**
     * Method to set the value of field dataEntrega
     *
     * @param string $dataEntrega
     * @return $this
     */
    public function setDataEntrega($dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;

        return $this;
    }

    /**
     * Method to set the value of field transportadora
     *
     * @param string $transportadora
     * @return $this
     */
    public function setTransportadora($transportadora)
    {
        $this->transportadora = $transportadora;

        return $this;
    }

    /**
     * Method to set the value of field cond_pagto
     *
     * @param string $cond_pagto
     * @return $this
     */
    public function setCondPagto($cond_pagto)
    {
        $this->cond_pagto = $cond_pagto;

        return $this;
    }

    /**
     * Method to set the value of field forma_pagto
     *
     * @param string $forma_pagto
     * @return $this
     */
    public function setFormaPagto($forma_pagto)
    {
        $this->forma_pagto = $forma_pagto;

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
     * Method to set the value of field tipo
     *
     * @param integer $tipo
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

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
     * Method to set the value of field status_cotacao
     *
     * @param integer $status_cotacao
     * @return $this
     */
    public function setStatusCotacao($status_cotacao)
    {
        $this->status_cotacao = $status_cotacao;

        return $this;
    }

    /**
     * Returns the value of field cd_compra
     *
     * @return integer
     */
    public function getCdCompra()
    {
        return $this->cd_compra;
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
     * Returns the value of field fornecedor
     *
     * @return integer
     */
    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    /**
     * Returns the value of field ncotacao
     *
     * @return integer
     */
    public function getNcotacao()
    {
        return $this->ncotacao;
    }

    /**
     * Returns the value of field emissao
     *
     * @return string
     */
    public function getEmissao()
    {
        return $this->emissao;
    }

    /**
     * Returns the value of field dataEntrada
     *
     * @return string
     */
    public function getDataEntrada()
    {
        return $this->dataEntrada;
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
     * Returns the value of field encargos
     *
     * @return double
     */
    public function getEncargos()
    {
        return $this->encargos;
    }

    /**
     * Returns the value of field despAces
     *
     * @return double
     */
    public function getDespAces()
    {
        return $this->despAces;
    }

    /**
     * Returns the value of field tipoFrete
     *
     * @return string
     */
    public function getTipoFrete()
    {
        return $this->tipoFrete;
    }

    /**
     * Returns the value of field obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Returns the value of field frete
     *
     * @return double
     */
    public function getFrete()
    {
        return $this->frete;
    }

    /**
     * Returns the value of field dataEntrega
     *
     * @return string
     */
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    /**
     * Returns the value of field transportadora
     *
     * @return string
     */
    public function getTransportadora()
    {
        return $this->transportadora;
    }

    /**
     * Returns the value of field cond_pagto
     *
     * @return string
     */
    public function getCondPagto()
    {
        return $this->cond_pagto;
    }

    /**
     * Returns the value of field forma_pagto
     *
     * @return string
     */
    public function getFormaPagto()
    {
        return $this->forma_pagto;
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
     * Returns the value of field tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
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
     * Returns the value of field status_cotacao
     *
     * @return integer
     */
    public function getStatusCotacao()
    {
        return $this->status_cotacao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_compra', 'App\Models\OrdemCompraItem', 'cd_compra', array('alias' => 'OrdemCompraItem'));
        $this->hasMany('cd_compra', 'App\Models\RequisicaoMat', 'solicitacao_compra', array('alias' => 'RequisicaoMat'));
        $this->belongsTo('fornecedor', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('cd_compra', 'App\Models\OrdemCompraItem', 'cd_compra', NULL);
        $this->hasMany('cd_compra', 'App\Models\RequisicaoMat', 'solicitacao_compra', NULL);
        $this->belongsTo('fornecedor', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ordemCompra';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrdemCompra[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrdemCompra
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
            'cd_compra' => 'cd_compra',
            'cd_unidade' => 'cd_unidade',
            'fornecedor' => 'fornecedor',
            'ncotacao' => 'ncotacao',
            'emissao' => 'emissao',
            'dataEntrada' => 'dataEntrada',
            'desconto' => 'desconto',
            'encargos' => 'encargos',
            'despAces' => 'despAces',
            'tipoFrete' => 'tipoFrete',
            'obs' => 'obs',
            'frete' => 'frete',
            'dataEntrega' => 'dataEntrega',
            'transportadora' => 'transportadora',
            'cond_pagto' => 'cond_pagto',
            'forma_pagto' => 'forma_pagto',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'ativo' => 'ativo',
            'tipo' => 'tipo',
            'status' => 'status',
            'status_cotacao' => 'status_cotacao'
        );
    }

}
