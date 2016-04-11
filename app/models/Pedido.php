<?php

namespace App\Models;

class Pedido extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_pedido;

    /**
     *
     * @var integer
     */
    protected $fabrica;

    /**
     *
     * @var integer
     */
    protected $representante;

    /**
     *
     * @var integer
     */
    protected $vendedor;

    /**
     *
     * @var integer
     */
    protected $ccliente;

    /**
     *
     * @var integer
     */
    protected $tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto;

    /**
     *
     * @var integer
     */
    protected $tipo_pagto_has_cond_pagto_cond_pagto_idcond_pagto;

    /**
     *
     * @var integer
     */
    protected $empresa_franquia;

    /**
     *
     * @var integer
     */
    protected $empresa_cliente;

    /**
     *
     * @var double
     */
    protected $vl_frete;

    /**
     *
     * @var double
     */
    protected $vl_impostos;

    /**
     *
     * @var string
     */
    protected $numero_nf_fornecedor;

    /**
     *
     * @var string
     */
    protected $dt_prev_entrega;

    /**
     *
     * @var string
     */
    protected $dt_entrega;

    /**
     *
     * @var string
     */
    protected $dt_processado;

    /**
     *
     * @var string
     */
    protected $dt_envio;

    /**
     *
     * @var integer
     */
    protected $transportadora;

    /**
     *
     * @var string
     */
    protected $tipofrete;

    /**
     *
     * @var string
     */
    protected $referencia;

    /**
     *
     * @var string
     */
    protected $obs;

    /**
     *
     * @var string
     */
    protected $obs_logistica;

    /**
     *
     * @var integer
     */
    protected $pagto;

    /**
     *
     * @var double
     */
    protected $comissao;

    /**
     *
     * @var integer
     */
    protected $status_pedido;

    /**
     *
     * @var string
     */
    protected $entrega_rua;

    /**
     *
     * @var string
     */
    protected $entrega_bairro;

    /**
     *
     * @var string
     */
    protected $entrega_cidade;

    /**
     *
     * @var string
     */
    protected $entrega_uf;

    /**
     *
     * @var string
     */
    protected $entrega_numero;

    /**
     *
     * @var string
     */
    protected $entrega_complemento;

    /**
     *
     * @var string
     */
    protected $entrega_obs;

    /**
     *
     * @var string
     */
    protected $entrega_cep;

    /**
     *
     * @var string
     */
    protected $entrega_contato;

    /**
     *
     * @var integer
     */
    protected $entrega_cd_pais;

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
     * @var integer
     */
    protected $npedido;

    /**
     *
     * @var integer
     */
    protected $sequencia;

    /**
     *
     * @var string
     */
    protected $dt_faturado;

    /**
     *
     * @var integer
     */
    protected $os_publicidade;

    /**
     *
     * @var integer
     */
    protected $os_royalties;

    /**
     *
     * @var double
     */
    protected $vl_royalties;

    /**
     *
     * @var double
     */
    protected $vl_publicidade;

    /**
     *
     * @var integer
     */
    protected $finalidade_tributacao;

    /**
     *
     * @var integer
     */
    protected $pedido_avulso;

    /**
     *
     * @var integer
     */
    protected $novo_pedido_prog_carga;

    /**
     *
     * @var integer
     */
    protected $pedido_auto_sistema;

    /**
     *
     * @var integer
     */
    protected $liberacao_licenciada;

    /**
     *
     * @var integer
     */
    protected $liberacao_administradora;

    /**
     *
     * @var integer
     */
    protected $emitir_nfe_cliente;

    /**
     *
     * @var integer
     */
    protected $nfe_cliente_cd_cliente;

    /**
     *
     * @var integer
     */
    protected $editado_manual;

    /**
     * Method to set the value of field cd_pedido
     *
     * @param integer $cd_pedido
     * @return $this
     */
    public function setCdPedido($cd_pedido)
    {
        $this->cd_pedido = $cd_pedido;

        return $this;
    }

    /**
     * Method to set the value of field fabrica
     *
     * @param integer $fabrica
     * @return $this
     */
    public function setFabrica($fabrica)
    {
        $this->fabrica = $fabrica;

        return $this;
    }

    /**
     * Method to set the value of field representante
     *
     * @param integer $representante
     * @return $this
     */
    public function setRepresentante($representante)
    {
        $this->representante = $representante;

        return $this;
    }

    /**
     * Method to set the value of field vendedor
     *
     * @param integer $vendedor
     * @return $this
     */
    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;

        return $this;
    }

    /**
     * Method to set the value of field ccliente
     *
     * @param integer $ccliente
     * @return $this
     */
    public function setCcliente($ccliente)
    {
        $this->ccliente = $ccliente;

        return $this;
    }

    /**
     * Method to set the value of field tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto
     *
     * @param integer $tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto
     * @return $this
     */
    public function setTipoPagtoHasCondPagtoTipoPagtoCdPagto($tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto)
    {
        $this->tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto = $tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto;

        return $this;
    }

    /**
     * Method to set the value of field tipo_pagto_has_cond_pagto_cond_pagto_idcond_pagto
     *
     * @param integer $tipo_pagto_has_cond_pagto_cond_pagto_idcond_pagto
     * @return $this
     */
    public function setTipoPagtoHasCondPagtoCondPagtoIdcondPagto($tipo_pagto_has_cond_pagto_cond_pagto_idcond_pagto)
    {
        $this->tipo_pagto_has_cond_pagto_cond_pagto_idcond_pagto = $tipo_pagto_has_cond_pagto_cond_pagto_idcond_pagto;

        return $this;
    }

    /**
     * Method to set the value of field empresa_franquia
     *
     * @param integer $empresa_franquia
     * @return $this
     */
    public function setEmpresaFranquia($empresa_franquia)
    {
        $this->empresa_franquia = $empresa_franquia;

        return $this;
    }

    /**
     * Method to set the value of field empresa_cliente
     *
     * @param integer $empresa_cliente
     * @return $this
     */
    public function setEmpresaCliente($empresa_cliente)
    {
        $this->empresa_cliente = $empresa_cliente;

        return $this;
    }

    /**
     * Method to set the value of field vl_frete
     *
     * @param double $vl_frete
     * @return $this
     */
    public function setVlFrete($vl_frete)
    {
        $this->vl_frete = $vl_frete;

        return $this;
    }

    /**
     * Method to set the value of field vl_impostos
     *
     * @param double $vl_impostos
     * @return $this
     */
    public function setVlImpostos($vl_impostos)
    {
        $this->vl_impostos = $vl_impostos;

        return $this;
    }

    /**
     * Method to set the value of field numero_nf_fornecedor
     *
     * @param string $numero_nf_fornecedor
     * @return $this
     */
    public function setNumeroNfFornecedor($numero_nf_fornecedor)
    {
        $this->numero_nf_fornecedor = $numero_nf_fornecedor;

        return $this;
    }

    /**
     * Method to set the value of field dt_prev_entrega
     *
     * @param string $dt_prev_entrega
     * @return $this
     */
    public function setDtPrevEntrega($dt_prev_entrega)
    {
        $this->dt_prev_entrega = $dt_prev_entrega;

        return $this;
    }

    /**
     * Method to set the value of field dt_entrega
     *
     * @param string $dt_entrega
     * @return $this
     */
    public function setDtEntrega($dt_entrega)
    {
        $this->dt_entrega = $dt_entrega;

        return $this;
    }

    /**
     * Method to set the value of field dt_processado
     *
     * @param string $dt_processado
     * @return $this
     */
    public function setDtProcessado($dt_processado)
    {
        $this->dt_processado = $dt_processado;

        return $this;
    }

    /**
     * Method to set the value of field dt_envio
     *
     * @param string $dt_envio
     * @return $this
     */
    public function setDtEnvio($dt_envio)
    {
        $this->dt_envio = $dt_envio;

        return $this;
    }

    /**
     * Method to set the value of field transportadora
     *
     * @param integer $transportadora
     * @return $this
     */
    public function setTransportadora($transportadora)
    {
        $this->transportadora = $transportadora;

        return $this;
    }

    /**
     * Method to set the value of field tipofrete
     *
     * @param string $tipofrete
     * @return $this
     */
    public function setTipofrete($tipofrete)
    {
        $this->tipofrete = $tipofrete;

        return $this;
    }

    /**
     * Method to set the value of field referencia
     *
     * @param string $referencia
     * @return $this
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

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
     * Method to set the value of field obs_logistica
     *
     * @param string $obs_logistica
     * @return $this
     */
    public function setObsLogistica($obs_logistica)
    {
        $this->obs_logistica = $obs_logistica;

        return $this;
    }

    /**
     * Method to set the value of field pagto
     *
     * @param integer $pagto
     * @return $this
     */
    public function setPagto($pagto)
    {
        $this->pagto = $pagto;

        return $this;
    }

    /**
     * Method to set the value of field comissao
     *
     * @param double $comissao
     * @return $this
     */
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;

        return $this;
    }

    /**
     * Method to set the value of field status_pedido
     *
     * @param integer $status_pedido
     * @return $this
     */
    public function setStatusPedido($status_pedido)
    {
        $this->status_pedido = $status_pedido;

        return $this;
    }

    /**
     * Method to set the value of field entrega_rua
     *
     * @param string $entrega_rua
     * @return $this
     */
    public function setEntregaRua($entrega_rua)
    {
        $this->entrega_rua = $entrega_rua;

        return $this;
    }

    /**
     * Method to set the value of field entrega_bairro
     *
     * @param string $entrega_bairro
     * @return $this
     */
    public function setEntregaBairro($entrega_bairro)
    {
        $this->entrega_bairro = $entrega_bairro;

        return $this;
    }

    /**
     * Method to set the value of field entrega_cidade
     *
     * @param string $entrega_cidade
     * @return $this
     */
    public function setEntregaCidade($entrega_cidade)
    {
        $this->entrega_cidade = $entrega_cidade;

        return $this;
    }

    /**
     * Method to set the value of field entrega_uf
     *
     * @param string $entrega_uf
     * @return $this
     */
    public function setEntregaUf($entrega_uf)
    {
        $this->entrega_uf = $entrega_uf;

        return $this;
    }

    /**
     * Method to set the value of field entrega_numero
     *
     * @param string $entrega_numero
     * @return $this
     */
    public function setEntregaNumero($entrega_numero)
    {
        $this->entrega_numero = $entrega_numero;

        return $this;
    }

    /**
     * Method to set the value of field entrega_complemento
     *
     * @param string $entrega_complemento
     * @return $this
     */
    public function setEntregaComplemento($entrega_complemento)
    {
        $this->entrega_complemento = $entrega_complemento;

        return $this;
    }

    /**
     * Method to set the value of field entrega_obs
     *
     * @param string $entrega_obs
     * @return $this
     */
    public function setEntregaObs($entrega_obs)
    {
        $this->entrega_obs = $entrega_obs;

        return $this;
    }

    /**
     * Method to set the value of field entrega_cep
     *
     * @param string $entrega_cep
     * @return $this
     */
    public function setEntregaCep($entrega_cep)
    {
        $this->entrega_cep = $entrega_cep;

        return $this;
    }

    /**
     * Method to set the value of field entrega_contato
     *
     * @param string $entrega_contato
     * @return $this
     */
    public function setEntregaContato($entrega_contato)
    {
        $this->entrega_contato = $entrega_contato;

        return $this;
    }

    /**
     * Method to set the value of field entrega_cd_pais
     *
     * @param integer $entrega_cd_pais
     * @return $this
     */
    public function setEntregaCdPais($entrega_cd_pais)
    {
        $this->entrega_cd_pais = $entrega_cd_pais;

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
     * Method to set the value of field npedido
     *
     * @param integer $npedido
     * @return $this
     */
    public function setNpedido($npedido)
    {
        $this->npedido = $npedido;

        return $this;
    }

    /**
     * Method to set the value of field sequencia
     *
     * @param integer $sequencia
     * @return $this
     */
    public function setSequencia($sequencia)
    {
        $this->sequencia = $sequencia;

        return $this;
    }

    /**
     * Method to set the value of field dt_faturado
     *
     * @param string $dt_faturado
     * @return $this
     */
    public function setDtFaturado($dt_faturado)
    {
        $this->dt_faturado = $dt_faturado;

        return $this;
    }

    /**
     * Method to set the value of field os_publicidade
     *
     * @param integer $os_publicidade
     * @return $this
     */
    public function setOsPublicidade($os_publicidade)
    {
        $this->os_publicidade = $os_publicidade;

        return $this;
    }

    /**
     * Method to set the value of field os_royalties
     *
     * @param integer $os_royalties
     * @return $this
     */
    public function setOsRoyalties($os_royalties)
    {
        $this->os_royalties = $os_royalties;

        return $this;
    }

    /**
     * Method to set the value of field vl_royalties
     *
     * @param double $vl_royalties
     * @return $this
     */
    public function setVlRoyalties($vl_royalties)
    {
        $this->vl_royalties = $vl_royalties;

        return $this;
    }

    /**
     * Method to set the value of field vl_publicidade
     *
     * @param double $vl_publicidade
     * @return $this
     */
    public function setVlPublicidade($vl_publicidade)
    {
        $this->vl_publicidade = $vl_publicidade;

        return $this;
    }

    /**
     * Method to set the value of field finalidade_tributacao
     *
     * @param integer $finalidade_tributacao
     * @return $this
     */
    public function setFinalidadeTributacao($finalidade_tributacao)
    {
        $this->finalidade_tributacao = $finalidade_tributacao;

        return $this;
    }

    /**
     * Method to set the value of field pedido_avulso
     *
     * @param integer $pedido_avulso
     * @return $this
     */
    public function setPedidoAvulso($pedido_avulso)
    {
        $this->pedido_avulso = $pedido_avulso;

        return $this;
    }

    /**
     * Method to set the value of field novo_pedido_prog_carga
     *
     * @param integer $novo_pedido_prog_carga
     * @return $this
     */
    public function setNovoPedidoProgCarga($novo_pedido_prog_carga)
    {
        $this->novo_pedido_prog_carga = $novo_pedido_prog_carga;

        return $this;
    }

    /**
     * Method to set the value of field pedido_auto_sistema
     *
     * @param integer $pedido_auto_sistema
     * @return $this
     */
    public function setPedidoAutoSistema($pedido_auto_sistema)
    {
        $this->pedido_auto_sistema = $pedido_auto_sistema;

        return $this;
    }

    /**
     * Method to set the value of field liberacao_licenciada
     *
     * @param integer $liberacao_licenciada
     * @return $this
     */
    public function setLiberacaoLicenciada($liberacao_licenciada)
    {
        $this->liberacao_licenciada = $liberacao_licenciada;

        return $this;
    }

    /**
     * Method to set the value of field liberacao_administradora
     *
     * @param integer $liberacao_administradora
     * @return $this
     */
    public function setLiberacaoAdministradora($liberacao_administradora)
    {
        $this->liberacao_administradora = $liberacao_administradora;

        return $this;
    }

    /**
     * Method to set the value of field emitir_nfe_cliente
     *
     * @param integer $emitir_nfe_cliente
     * @return $this
     */
    public function setEmitirNfeCliente($emitir_nfe_cliente)
    {
        $this->emitir_nfe_cliente = $emitir_nfe_cliente;

        return $this;
    }

    /**
     * Method to set the value of field nfe_cliente_cd_cliente
     *
     * @param integer $nfe_cliente_cd_cliente
     * @return $this
     */
    public function setNfeClienteCdCliente($nfe_cliente_cd_cliente)
    {
        $this->nfe_cliente_cd_cliente = $nfe_cliente_cd_cliente;

        return $this;
    }

    /**
     * Method to set the value of field editado_manual
     *
     * @param integer $editado_manual
     * @return $this
     */
    public function setEditadoManual($editado_manual)
    {
        $this->editado_manual = $editado_manual;

        return $this;
    }

    /**
     * Returns the value of field cd_pedido
     *
     * @return integer
     */
    public function getCdPedido()
    {
        return $this->cd_pedido;
    }

    /**
     * Returns the value of field fabrica
     *
     * @return integer
     */
    public function getFabrica()
    {
        return $this->fabrica;
    }

    /**
     * Returns the value of field representante
     *
     * @return integer
     */
    public function getRepresentante()
    {
        return $this->representante;
    }

    /**
     * Returns the value of field vendedor
     *
     * @return integer
     */
    public function getVendedor()
    {
        return $this->vendedor;
    }

    /**
     * Returns the value of field ccliente
     *
     * @return integer
     */
    public function getCcliente()
    {
        return $this->ccliente;
    }

    /**
     * Returns the value of field tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto
     *
     * @return integer
     */
    public function getTipoPagtoHasCondPagtoTipoPagtoCdPagto()
    {
        return $this->tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto;
    }

    /**
     * Returns the value of field tipo_pagto_has_cond_pagto_cond_pagto_idcond_pagto
     *
     * @return integer
     */
    public function getTipoPagtoHasCondPagtoCondPagtoIdcondPagto()
    {
        return $this->tipo_pagto_has_cond_pagto_cond_pagto_idcond_pagto;
    }

    /**
     * Returns the value of field empresa_franquia
     *
     * @return integer
     */
    public function getEmpresaFranquia()
    {
        return $this->empresa_franquia;
    }

    /**
     * Returns the value of field empresa_cliente
     *
     * @return integer
     */
    public function getEmpresaCliente()
    {
        return $this->empresa_cliente;
    }

    /**
     * Returns the value of field vl_frete
     *
     * @return double
     */
    public function getVlFrete()
    {
        return $this->vl_frete;
    }

    /**
     * Returns the value of field vl_impostos
     *
     * @return double
     */
    public function getVlImpostos()
    {
        return $this->vl_impostos;
    }

    /**
     * Returns the value of field numero_nf_fornecedor
     *
     * @return string
     */
    public function getNumeroNfFornecedor()
    {
        return $this->numero_nf_fornecedor;
    }

    /**
     * Returns the value of field dt_prev_entrega
     *
     * @return string
     */
    public function getDtPrevEntrega()
    {
        return $this->dt_prev_entrega;
    }

    /**
     * Returns the value of field dt_entrega
     *
     * @return string
     */
    public function getDtEntrega()
    {
        return $this->dt_entrega;
    }

    /**
     * Returns the value of field dt_processado
     *
     * @return string
     */
    public function getDtProcessado()
    {
        return $this->dt_processado;
    }

    /**
     * Returns the value of field dt_envio
     *
     * @return string
     */
    public function getDtEnvio()
    {
        return $this->dt_envio;
    }

    /**
     * Returns the value of field transportadora
     *
     * @return integer
     */
    public function getTransportadora()
    {
        return $this->transportadora;
    }

    /**
     * Returns the value of field tipofrete
     *
     * @return string
     */
    public function getTipofrete()
    {
        return $this->tipofrete;
    }

    /**
     * Returns the value of field referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
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
     * Returns the value of field obs_logistica
     *
     * @return string
     */
    public function getObsLogistica()
    {
        return $this->obs_logistica;
    }

    /**
     * Returns the value of field pagto
     *
     * @return integer
     */
    public function getPagto()
    {
        return $this->pagto;
    }

    /**
     * Returns the value of field comissao
     *
     * @return double
     */
    public function getComissao()
    {
        return $this->comissao;
    }

    /**
     * Returns the value of field status_pedido
     *
     * @return integer
     */
    public function getStatusPedido()
    {
        return $this->status_pedido;
    }

    /**
     * Returns the value of field entrega_rua
     *
     * @return string
     */
    public function getEntregaRua()
    {
        return $this->entrega_rua;
    }

    /**
     * Returns the value of field entrega_bairro
     *
     * @return string
     */
    public function getEntregaBairro()
    {
        return $this->entrega_bairro;
    }

    /**
     * Returns the value of field entrega_cidade
     *
     * @return string
     */
    public function getEntregaCidade()
    {
        return $this->entrega_cidade;
    }

    /**
     * Returns the value of field entrega_uf
     *
     * @return string
     */
    public function getEntregaUf()
    {
        return $this->entrega_uf;
    }

    /**
     * Returns the value of field entrega_numero
     *
     * @return string
     */
    public function getEntregaNumero()
    {
        return $this->entrega_numero;
    }

    /**
     * Returns the value of field entrega_complemento
     *
     * @return string
     */
    public function getEntregaComplemento()
    {
        return $this->entrega_complemento;
    }

    /**
     * Returns the value of field entrega_obs
     *
     * @return string
     */
    public function getEntregaObs()
    {
        return $this->entrega_obs;
    }

    /**
     * Returns the value of field entrega_cep
     *
     * @return string
     */
    public function getEntregaCep()
    {
        return $this->entrega_cep;
    }

    /**
     * Returns the value of field entrega_contato
     *
     * @return string
     */
    public function getEntregaContato()
    {
        return $this->entrega_contato;
    }

    /**
     * Returns the value of field entrega_cd_pais
     *
     * @return integer
     */
    public function getEntregaCdPais()
    {
        return $this->entrega_cd_pais;
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
     * Returns the value of field npedido
     *
     * @return integer
     */
    public function getNpedido()
    {
        return $this->npedido;
    }

    /**
     * Returns the value of field sequencia
     *
     * @return integer
     */
    public function getSequencia()
    {
        return $this->sequencia;
    }

    /**
     * Returns the value of field dt_faturado
     *
     * @return string
     */
    public function getDtFaturado()
    {
        return $this->dt_faturado;
    }

    /**
     * Returns the value of field os_publicidade
     *
     * @return integer
     */
    public function getOsPublicidade()
    {
        return $this->os_publicidade;
    }

    /**
     * Returns the value of field os_royalties
     *
     * @return integer
     */
    public function getOsRoyalties()
    {
        return $this->os_royalties;
    }

    /**
     * Returns the value of field vl_royalties
     *
     * @return double
     */
    public function getVlRoyalties()
    {
        return $this->vl_royalties;
    }

    /**
     * Returns the value of field vl_publicidade
     *
     * @return double
     */
    public function getVlPublicidade()
    {
        return $this->vl_publicidade;
    }

    /**
     * Returns the value of field finalidade_tributacao
     *
     * @return integer
     */
    public function getFinalidadeTributacao()
    {
        return $this->finalidade_tributacao;
    }

    /**
     * Returns the value of field pedido_avulso
     *
     * @return integer
     */
    public function getPedidoAvulso()
    {
        return $this->pedido_avulso;
    }

    /**
     * Returns the value of field novo_pedido_prog_carga
     *
     * @return integer
     */
    public function getNovoPedidoProgCarga()
    {
        return $this->novo_pedido_prog_carga;
    }

    /**
     * Returns the value of field pedido_auto_sistema
     *
     * @return integer
     */
    public function getPedidoAutoSistema()
    {
        return $this->pedido_auto_sistema;
    }

    /**
     * Returns the value of field liberacao_licenciada
     *
     * @return integer
     */
    public function getLiberacaoLicenciada()
    {
        return $this->liberacao_licenciada;
    }

    /**
     * Returns the value of field liberacao_administradora
     *
     * @return integer
     */
    public function getLiberacaoAdministradora()
    {
        return $this->liberacao_administradora;
    }

    /**
     * Returns the value of field emitir_nfe_cliente
     *
     * @return integer
     */
    public function getEmitirNfeCliente()
    {
        return $this->emitir_nfe_cliente;
    }

    /**
     * Returns the value of field nfe_cliente_cd_cliente
     *
     * @return integer
     */
    public function getNfeClienteCdCliente()
    {
        return $this->nfe_cliente_cd_cliente;
    }

    /**
     * Returns the value of field editado_manual
     *
     * @return integer
     */
    public function getEditadoManual()
    {
        return $this->editado_manual;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_pedido', 'App\Models\CargaHasPedido', 'pedido_cd_pedido', array('alias' => 'CargaHasPedido'));
        $this->hasMany('cd_pedido', 'App\Models\CargaOrdemRota', 'cd_pedido', array('alias' => 'CargaOrdemRota'));
        $this->hasMany('cd_pedido', 'App\Models\Lancamento', 'cd_pedido', array('alias' => 'Lancamento'));
        $this->hasMany('cd_pedido', 'App\Models\LiberacaoPedido', 'cd_pedido', array('alias' => 'LiberacaoPedido'));
        $this->hasMany('cd_pedido', 'App\Models\Op', 'cd_pedido', array('alias' => 'Op'));
        $this->hasMany('cd_pedido', 'App\Models\PedidoHasCertificadoProduto', 'pedido_Cd_pedido', array('alias' => 'PedidoHasCertificadoProduto'));
        $this->hasMany('cd_pedido', 'App\Models\PedidoHasMotivorecusado', 'pedido_cd_pedido', array('alias' => 'PedidoHasMotivorecusado'));
        $this->hasMany('cd_pedido', 'App\Models\PedidoHasProduto', 'pedido_Cd_pedido', array('alias' => 'PedidoHasProduto'));
        $this->hasMany('cd_pedido', 'App\Models\PedidoStatus', 'pedido_cd_pedido', array('alias' => 'PedidoStatus'));
        $this->belongsTo('tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto', 'App\Models\TipoPagtoHasCondPagto', 'tipo_pagto_cd_pagto', array('alias' => 'TipoPagtoHasCondPagto'));
        $this->belongsTo('transportadora', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('empresa_cliente', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('empresa_franquia', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('representante', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('fabrica', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasOne('cd_pedido', 'App\Models\Nfsaida', 'pedido_cd_pedido', array('alias' => 'Pedido'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pedido';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pedido[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pedido
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
            'cd_pedido' => 'cd_pedido',
            'fabrica' => 'fabrica',
            'representante' => 'representante',
            'vendedor' => 'vendedor',
            'ccliente' => 'ccliente',
            'tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto' => 'tipo_pagto_has_cond_pagto_tipo_pagto_cd_pagto',
            'tipo_pagto_has_cond_pagto_cond_pagto_idcond_pagto' => 'tipo_pagto_has_cond_pagto_cond_pagto_idcond_pagto',
            'empresa_franquia' => 'empresa_franquia',
            'empresa_cliente' => 'empresa_cliente',
            'vl_frete' => 'vl_frete',
            'vl_impostos' => 'vl_impostos',
            'numero_nf_fornecedor' => 'numero_nf_fornecedor',
            'dt_prev_entrega' => 'dt_prev_entrega',
            'dt_entrega' => 'dt_entrega',
            'dt_processado' => 'dt_processado',
            'dt_envio' => 'dt_envio',
            'transportadora' => 'transportadora',
            'tipofrete' => 'tipofrete',
            'referencia' => 'referencia',
            'obs' => 'obs',
            'obs_logistica' => 'obs_logistica',
            'pagto' => 'pagto',
            'comissao' => 'comissao',
            'status_pedido' => 'status_pedido',
            'entrega_rua' => 'entrega_rua',
            'entrega_bairro' => 'entrega_bairro',
            'entrega_cidade' => 'entrega_cidade',
            'entrega_uf' => 'entrega_uf',
            'entrega_numero' => 'entrega_numero',
            'entrega_complemento' => 'entrega_complemento',
            'entrega_obs' => 'entrega_obs',
            'entrega_cep' => 'entrega_cep',
            'entrega_contato' => 'entrega_contato',
            'entrega_cd_pais' => 'entrega_cd_pais',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'npedido' => 'npedido',
            'sequencia' => 'sequencia',
            'dt_faturado' => 'dt_faturado',
            'os_publicidade' => 'os_publicidade',
            'os_royalties' => 'os_royalties',
            'vl_royalties' => 'vl_royalties',
            'vl_publicidade' => 'vl_publicidade',
            'finalidade_tributacao' => 'finalidade_tributacao',
            'pedido_avulso' => 'pedido_avulso',
            'novo_pedido_prog_carga' => 'novo_pedido_prog_carga',
            'pedido_auto_sistema' => 'pedido_auto_sistema',
            'liberacao_licenciada' => 'liberacao_licenciada',
            'liberacao_administradora' => 'liberacao_administradora',
            'emitir_nfe_cliente' => 'emitir_nfe_cliente',
            'nfe_cliente_cd_cliente' => 'nfe_cliente_cd_cliente',
            'editado_manual' => 'editado_manual'
        );
    }

}
