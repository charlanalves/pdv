<?php

namespace App\Models;

class UnidadeNegocio extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var integer
     */
    protected $cd_simples;

    /**
     *
     * @var integer
     */
    protected $empresa_cd_empresa;

    /**
     *
     * @var integer
     */
    protected $representante;

    /**
     *
     * @var integer
     */
    protected $area_cd_area;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $opt_simples;

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
    protected $ir;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var integer
     */
    protected $tipo;

    /**
     *
     * @var integer
     */
    protected $cd_servicos_royalties;

    /**
     *
     * @var double
     */
    protected $royalties;

    /**
     *
     * @var integer
     */
    protected $idcond_pagto_royalties;

    /**
     *
     * @var integer
     */
    protected $cd_contas_royalties;

    /**
     *
     * @var integer
     */
    protected $cd_servicos_publicidade;

    /**
     *
     * @var double
     */
    protected $publicidade;

    /**
     *
     * @var integer
     */
    protected $idcond_pagto_publicidade;

    /**
     *
     * @var integer
     */
    protected $cd_contas_publicidade;

    /**
     *
     * @var double
     */
    protected $markup_minimo_sugerido_royalties;

    /**
     *
     * @var integer
     */
    protected $tributacao;

    /**
     *
     * @var integer
     */
    protected $cd_modelo_tributacao;

    /**
     *
     * @var string
     */
    protected $certificado;

    /**
     *
     * @var string
     */
    protected $senha_cert;

    /**
     *
     * @var integer
     */
    protected $prazo_minimo;

    /**
     *
     * @var double
     */
    protected $vl_km_frete;

    /**
     *
     * @var integer
     */
    protected $nfe_lastid;

    /**
     *
     * @var integer
     */
    protected $franqueado_master;

    /**
     *
     * @var double
     */
    protected $royalties_franqueado_master;

    /**
     *
     * @var integer
     */
    protected $presServico;

    /**
     *
     * @var integer
     */
    protected $ind_ativ;

    /**
     *
     * @var string
     */
    protected $perfil_fiscal;

    /**
     *
     * @var integer
     */
    protected $emitente_nf;

    /**
     *
     * @var integer
     */
    protected $modelo_documento_fisical;

    /**
     *
     * @var string
     */
    protected $serie_nf;

    /**
     *
     * @var integer
     */
    protected $id_contador;

    /**
     *
     * @var integer
     */
    protected $emitir_nfe_cliente;

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
     * Method to set the value of field cd_simples
     *
     * @param integer $cd_simples
     * @return $this
     */
    public function setCdSimples($cd_simples)
    {
        $this->cd_simples = $cd_simples;

        return $this;
    }

    /**
     * Method to set the value of field empresa_cd_empresa
     *
     * @param integer $empresa_cd_empresa
     * @return $this
     */
    public function setEmpresaCdEmpresa($empresa_cd_empresa)
    {
        $this->empresa_cd_empresa = $empresa_cd_empresa;

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
     * Method to set the value of field area_cd_area
     *
     * @param integer $area_cd_area
     * @return $this
     */
    public function setAreaCdArea($area_cd_area)
    {
        $this->area_cd_area = $area_cd_area;

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
     * Method to set the value of field opt_simples
     *
     * @param integer $opt_simples
     * @return $this
     */
    public function setOptSimples($opt_simples)
    {
        $this->opt_simples = $opt_simples;

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
     * Method to set the value of field cd_servicos_royalties
     *
     * @param integer $cd_servicos_royalties
     * @return $this
     */
    public function setCdServicosRoyalties($cd_servicos_royalties)
    {
        $this->cd_servicos_royalties = $cd_servicos_royalties;

        return $this;
    }

    /**
     * Method to set the value of field royalties
     *
     * @param double $royalties
     * @return $this
     */
    public function setRoyalties($royalties)
    {
        $this->royalties = $royalties;

        return $this;
    }

    /**
     * Method to set the value of field idcond_pagto_royalties
     *
     * @param integer $idcond_pagto_royalties
     * @return $this
     */
    public function setIdcondPagtoRoyalties($idcond_pagto_royalties)
    {
        $this->idcond_pagto_royalties = $idcond_pagto_royalties;

        return $this;
    }

    /**
     * Method to set the value of field cd_contas_royalties
     *
     * @param integer $cd_contas_royalties
     * @return $this
     */
    public function setCdContasRoyalties($cd_contas_royalties)
    {
        $this->cd_contas_royalties = $cd_contas_royalties;

        return $this;
    }

    /**
     * Method to set the value of field cd_servicos_publicidade
     *
     * @param integer $cd_servicos_publicidade
     * @return $this
     */
    public function setCdServicosPublicidade($cd_servicos_publicidade)
    {
        $this->cd_servicos_publicidade = $cd_servicos_publicidade;

        return $this;
    }

    /**
     * Method to set the value of field publicidade
     *
     * @param double $publicidade
     * @return $this
     */
    public function setPublicidade($publicidade)
    {
        $this->publicidade = $publicidade;

        return $this;
    }

    /**
     * Method to set the value of field idcond_pagto_publicidade
     *
     * @param integer $idcond_pagto_publicidade
     * @return $this
     */
    public function setIdcondPagtoPublicidade($idcond_pagto_publicidade)
    {
        $this->idcond_pagto_publicidade = $idcond_pagto_publicidade;

        return $this;
    }

    /**
     * Method to set the value of field cd_contas_publicidade
     *
     * @param integer $cd_contas_publicidade
     * @return $this
     */
    public function setCdContasPublicidade($cd_contas_publicidade)
    {
        $this->cd_contas_publicidade = $cd_contas_publicidade;

        return $this;
    }

    /**
     * Method to set the value of field markup_minimo_sugerido_royalties
     *
     * @param double $markup_minimo_sugerido_royalties
     * @return $this
     */
    public function setMarkupMinimoSugeridoRoyalties($markup_minimo_sugerido_royalties)
    {
        $this->markup_minimo_sugerido_royalties = $markup_minimo_sugerido_royalties;

        return $this;
    }

    /**
     * Method to set the value of field tributacao
     *
     * @param integer $tributacao
     * @return $this
     */
    public function setTributacao($tributacao)
    {
        $this->tributacao = $tributacao;

        return $this;
    }

    /**
     * Method to set the value of field cd_modelo_tributacao
     *
     * @param integer $cd_modelo_tributacao
     * @return $this
     */
    public function setCdModeloTributacao($cd_modelo_tributacao)
    {
        $this->cd_modelo_tributacao = $cd_modelo_tributacao;

        return $this;
    }

    /**
     * Method to set the value of field certificado
     *
     * @param string $certificado
     * @return $this
     */
    public function setCertificado($certificado)
    {
        $this->certificado = $certificado;

        return $this;
    }

    /**
     * Method to set the value of field senha_cert
     *
     * @param string $senha_cert
     * @return $this
     */
    public function setSenhaCert($senha_cert)
    {
        $this->senha_cert = $senha_cert;

        return $this;
    }

    /**
     * Method to set the value of field prazo_minimo
     *
     * @param integer $prazo_minimo
     * @return $this
     */
    public function setPrazoMinimo($prazo_minimo)
    {
        $this->prazo_minimo = $prazo_minimo;

        return $this;
    }

    /**
     * Method to set the value of field vl_km_frete
     *
     * @param double $vl_km_frete
     * @return $this
     */
    public function setVlKmFrete($vl_km_frete)
    {
        $this->vl_km_frete = $vl_km_frete;

        return $this;
    }

    /**
     * Method to set the value of field nfe_lastid
     *
     * @param integer $nfe_lastid
     * @return $this
     */
    public function setNfeLastid($nfe_lastid)
    {
        $this->nfe_lastid = $nfe_lastid;

        return $this;
    }

    /**
     * Method to set the value of field franqueado_master
     *
     * @param integer $franqueado_master
     * @return $this
     */
    public function setFranqueadoMaster($franqueado_master)
    {
        $this->franqueado_master = $franqueado_master;

        return $this;
    }

    /**
     * Method to set the value of field royalties_franqueado_master
     *
     * @param double $royalties_franqueado_master
     * @return $this
     */
    public function setRoyaltiesFranqueadoMaster($royalties_franqueado_master)
    {
        $this->royalties_franqueado_master = $royalties_franqueado_master;

        return $this;
    }

    /**
     * Method to set the value of field presServico
     *
     * @param integer $presServico
     * @return $this
     */
    public function setPresServico($presServico)
    {
        $this->presServico = $presServico;

        return $this;
    }

    /**
     * Method to set the value of field ind_ativ
     *
     * @param integer $ind_ativ
     * @return $this
     */
    public function setIndAtiv($ind_ativ)
    {
        $this->ind_ativ = $ind_ativ;

        return $this;
    }

    /**
     * Method to set the value of field perfil_fiscal
     *
     * @param string $perfil_fiscal
     * @return $this
     */
    public function setPerfilFiscal($perfil_fiscal)
    {
        $this->perfil_fiscal = $perfil_fiscal;

        return $this;
    }

    /**
     * Method to set the value of field emitente_nf
     *
     * @param integer $emitente_nf
     * @return $this
     */
    public function setEmitenteNf($emitente_nf)
    {
        $this->emitente_nf = $emitente_nf;

        return $this;
    }

    /**
     * Method to set the value of field modelo_documento_fisical
     *
     * @param integer $modelo_documento_fisical
     * @return $this
     */
    public function setModeloDocumentoFisical($modelo_documento_fisical)
    {
        $this->modelo_documento_fisical = $modelo_documento_fisical;

        return $this;
    }

    /**
     * Method to set the value of field serie_nf
     *
     * @param string $serie_nf
     * @return $this
     */
    public function setSerieNf($serie_nf)
    {
        $this->serie_nf = $serie_nf;

        return $this;
    }

    /**
     * Method to set the value of field id_contador
     *
     * @param integer $id_contador
     * @return $this
     */
    public function setIdContador($id_contador)
    {
        $this->id_contador = $id_contador;

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
     * Returns the value of field cd_unidade
     *
     * @return integer
     */
    public function getCdUnidade()
    {
        return $this->cd_unidade;
    }

    /**
     * Returns the value of field cd_simples
     *
     * @return integer
     */
    public function getCdSimples()
    {
        return $this->cd_simples;
    }

    /**
     * Returns the value of field empresa_cd_empresa
     *
     * @return integer
     */
    public function getEmpresaCdEmpresa()
    {
        return $this->empresa_cd_empresa;
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
     * Returns the value of field area_cd_area
     *
     * @return integer
     */
    public function getAreaCdArea()
    {
        return $this->area_cd_area;
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
     * Returns the value of field opt_simples
     *
     * @return integer
     */
    public function getOptSimples()
    {
        return $this->opt_simples;
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
     * Returns the value of field ir
     *
     * @return double
     */
    public function getIr()
    {
        return $this->ir;
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
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
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
     * Returns the value of field tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Returns the value of field cd_servicos_royalties
     *
     * @return integer
     */
    public function getCdServicosRoyalties()
    {
        return $this->cd_servicos_royalties;
    }

    /**
     * Returns the value of field royalties
     *
     * @return double
     */
    public function getRoyalties()
    {
        return $this->royalties;
    }

    /**
     * Returns the value of field idcond_pagto_royalties
     *
     * @return integer
     */
    public function getIdcondPagtoRoyalties()
    {
        return $this->idcond_pagto_royalties;
    }

    /**
     * Returns the value of field cd_contas_royalties
     *
     * @return integer
     */
    public function getCdContasRoyalties()
    {
        return $this->cd_contas_royalties;
    }

    /**
     * Returns the value of field cd_servicos_publicidade
     *
     * @return integer
     */
    public function getCdServicosPublicidade()
    {
        return $this->cd_servicos_publicidade;
    }

    /**
     * Returns the value of field publicidade
     *
     * @return double
     */
    public function getPublicidade()
    {
        return $this->publicidade;
    }

    /**
     * Returns the value of field idcond_pagto_publicidade
     *
     * @return integer
     */
    public function getIdcondPagtoPublicidade()
    {
        return $this->idcond_pagto_publicidade;
    }

    /**
     * Returns the value of field cd_contas_publicidade
     *
     * @return integer
     */
    public function getCdContasPublicidade()
    {
        return $this->cd_contas_publicidade;
    }

    /**
     * Returns the value of field markup_minimo_sugerido_royalties
     *
     * @return double
     */
    public function getMarkupMinimoSugeridoRoyalties()
    {
        return $this->markup_minimo_sugerido_royalties;
    }

    /**
     * Returns the value of field tributacao
     *
     * @return integer
     */
    public function getTributacao()
    {
        return $this->tributacao;
    }

    /**
     * Returns the value of field cd_modelo_tributacao
     *
     * @return integer
     */
    public function getCdModeloTributacao()
    {
        return $this->cd_modelo_tributacao;
    }

    /**
     * Returns the value of field certificado
     *
     * @return string
     */
    public function getCertificado()
    {
        return $this->certificado;
    }

    /**
     * Returns the value of field senha_cert
     *
     * @return string
     */
    public function getSenhaCert()
    {
        return $this->senha_cert;
    }

    /**
     * Returns the value of field prazo_minimo
     *
     * @return integer
     */
    public function getPrazoMinimo()
    {
        return $this->prazo_minimo;
    }

    /**
     * Returns the value of field vl_km_frete
     *
     * @return double
     */
    public function getVlKmFrete()
    {
        return $this->vl_km_frete;
    }

    /**
     * Returns the value of field nfe_lastid
     *
     * @return integer
     */
    public function getNfeLastid()
    {
        return $this->nfe_lastid;
    }

    /**
     * Returns the value of field franqueado_master
     *
     * @return integer
     */
    public function getFranqueadoMaster()
    {
        return $this->franqueado_master;
    }

    /**
     * Returns the value of field royalties_franqueado_master
     *
     * @return double
     */
    public function getRoyaltiesFranqueadoMaster()
    {
        return $this->royalties_franqueado_master;
    }

    /**
     * Returns the value of field presServico
     *
     * @return integer
     */
    public function getPresServico()
    {
        return $this->presServico;
    }

    /**
     * Returns the value of field ind_ativ
     *
     * @return integer
     */
    public function getIndAtiv()
    {
        return $this->ind_ativ;
    }

    /**
     * Returns the value of field perfil_fiscal
     *
     * @return string
     */
    public function getPerfilFiscal()
    {
        return $this->perfil_fiscal;
    }

    /**
     * Returns the value of field emitente_nf
     *
     * @return integer
     */
    public function getEmitenteNf()
    {
        return $this->emitente_nf;
    }

    /**
     * Returns the value of field modelo_documento_fisical
     *
     * @return integer
     */
    public function getModeloDocumentoFisical()
    {
        return $this->modelo_documento_fisical;
    }

    /**
     * Returns the value of field serie_nf
     *
     * @return string
     */
    public function getSerieNf()
    {
        return $this->serie_nf;
    }

    /**
     * Returns the value of field id_contador
     *
     * @return integer
     */
    public function getIdContador()
    {
        return $this->id_contador;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_unidade', 'App\Models\Bloqueio', 'cd_unidade', array('alias' => 'Bloqueio'));
        $this->hasMany('cd_unidade', 'App\Models\Carga', 'cd_unidade', array('alias' => 'Carga'));
        $this->hasMany('cd_unidade', 'App\Models\Ccusto', 'cd_unidade', array('alias' => 'Ccusto'));
        $this->hasMany('cd_unidade', 'App\Models\CentroArmazenagem', 'cd_unidade', array('alias' => 'CentroArmazenagem'));
        $this->hasMany('cd_unidade', 'App\Models\CompartilhamentoUnidade', 'cd_unidade', array('alias' => 'CompartilhamentoUnidade'));
        $this->hasMany('cd_unidade', 'App\Models\ContasFinanceira', 'cd_unidade', array('alias' => 'ContasFinanceira'));
        $this->hasMany('cd_unidade', 'App\Models\Contato', 'unidade_responsavel', array('alias' => 'Contato'));
        $this->hasMany('cd_unidade', 'App\Models\Equipes', 'unidade_negocio_cd_unidade', array('alias' => 'Equipes'));
        $this->hasMany('cd_unidade', 'App\Models\Kits', 'unidade_negocio_cd_unidade', array('alias' => 'Kits'));
        $this->hasMany('cd_unidade', 'App\Models\Lancamento', 'unidade_negocio_cd_unidade', array('alias' => 'Lancamento'));
        $this->hasMany('cd_unidade', 'App\Models\ModeloTributacao', 'cd_unidade', array('alias' => 'ModeloTributacao'));
        $this->hasMany('cd_unidade', 'App\Models\Molde', 'unidade_cd_unidade', array('alias' => 'Molde'));
        $this->hasMany('cd_unidade', 'App\Models\MovEstoque', 'cd_unidade', array('alias' => 'MovEstoque'));
        $this->hasMany('cd_unidade', 'App\Models\MovimentacaoManualEstoque', 'cd_unidade', array('alias' => 'MovimentacaoManualEstoque'));
        $this->hasMany('cd_unidade', 'App\Models\MovimentacaoNserie', 'cd_unidade', array('alias' => 'MovimentacaoNserie'));
        $this->hasMany('cd_unidade', 'App\Models\Nfe', 'unidade_negocio_cd_unidade', array('alias' => 'Nfe'));
        $this->hasMany('cd_unidade', 'App\Models\NfeConfig', 'unidade_negocio_cd_unidade', array('alias' => 'NfeConfig'));
        $this->hasMany('cd_unidade', 'App\Models\ObsPadroes', 'unidade_negocio_cd_unidade', array('alias' => 'ObsPadroes'));
        $this->hasMany('cd_unidade', 'App\Models\OpStatusEncerramento', 'unidade_cd_unidade', array('alias' => 'OpStatusEncerramento'));
        $this->hasMany('cd_unidade', 'App\Models\Orcamento', 'cd_unidade', array('alias' => 'Orcamento'));
        $this->hasMany('cd_unidade', 'App\Models\OrcamentoRodape', 'cd_unidade', array('alias' => 'OrcamentoRodape'));
        $this->hasMany('cd_unidade', 'App\Models\OrdemCompra', 'cd_unidade', array('alias' => 'OrdemCompra'));
        $this->hasMany('cd_unidade', 'App\Models\OrdemServico', 'fornecedor_homologado', array('alias' => 'OrdemServico'));
        $this->hasMany('cd_unidade', 'App\Models\OrdemServico', 'cd_unidade', array('alias' => 'OrdemServico'));
        $this->hasMany('cd_unidade', 'App\Models\Pedido', 'empresa_franquia', array('alias' => 'Pedido'));
        $this->hasMany('cd_unidade', 'App\Models\Pedido', 'fabrica', array('alias' => 'Pedido'));
        $this->hasMany('cd_unidade', 'App\Models\PermissaoMesclagem', 'cd_unidade', array('alias' => 'PermissaoMesclagem'));
        $this->hasMany('cd_unidade', 'App\Models\Portador', 'unidade_negocio_cd_unidade', array('alias' => 'Portador'));
        $this->hasMany('cd_unidade', 'App\Models\Produto', 'cd_unidade_negocio', array('alias' => 'Produto'));
        $this->hasMany('cd_unidade', 'App\Models\Produto', 'cd_unidade', array('alias' => 'Produto'));
        $this->hasMany('cd_unidade', 'App\Models\ProdutoFornecedor', 'unidade_cd_unidade', array('alias' => 'ProdutoFornecedor'));
        $this->hasMany('cd_unidade', 'App\Models\Produtoarea', 'unidade_negocio_cd_unidade', array('alias' => 'Produtoarea'));
        $this->hasMany('cd_unidade', 'App\Models\RegiaoHasUnidadeNegocio', 'unidade_negocio_cd_unidade', array('alias' => 'RegiaoHasUnidadeNegocio'));
        $this->hasMany('cd_unidade', 'App\Models\TabelaPrecosHasProdutoarea', 'unidade_negocio_cd_unidade', array('alias' => 'TabelaPrecosHasProdutoarea'));
        $this->hasMany('cd_unidade', 'App\Models\TipoEngenharia', 'unidade_negocio_cd_unidade', array('alias' => 'TipoEngenharia'));
        $this->hasMany('cd_unidade', 'App\Models\TipoPagto', 'unidade_negocio_cd_unidade', array('alias' => 'TipoPagto'));
        $this->hasMany('cd_unidade', 'App\Models\UnidadeHasDesconto', 'unidade_negocio', array('alias' => 'UnidadeHasDesconto'));
        $this->hasMany('cd_unidade', 'App\Models\UnidadeHasPedidoMinimo', 'unidade_negocio_cd_unidade', array('alias' => 'UnidadeHasPedidoMinimo'));
        $this->hasMany('cd_unidade', 'App\Models\UnidadeNegocioHasArea', 'unidade_negocio_cd_unidade', array('alias' => 'UnidadeNegocioHasArea'));
        $this->hasMany('cd_unidade', 'App\Models\UnidadeNegocioHasUsuario', 'unidade_negocio_cd_unidade', array('alias' => 'UnidadeNegocioHasUsuario'));
        $this->hasMany('cd_unidade', 'App\Models\Upload', 'cd_unidade', array('alias' => 'Upload'));
        $this->hasMany('cd_unidade', 'App\Models\UsuarioHasPerfil', 'cd_unidade', array('alias' => 'UsuarioHasPerfil'));
        $this->belongsTo('area_cd_area', 'App\Models\Area', 'cd_area', array('alias' => 'Area'));
        $this->belongsTo('modelo_documento_fisical', 'App\Models\CodigoModeloFiscal', 'id_codigo', array('alias' => 'CodigoModeloFiscal'));
        $this->belongsTo('id_contador', 'App\Models\Contabilistas', 'id_contador', array('alias' => 'Contabilistas'));
        $this->belongsTo('empresa_cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_simples', 'App\Models\Simples', 'cd_simples', array('alias' => 'Simples'));
        $this->hasOne('cd_unidade', 'App\Models\PdvImpostosUnidadeNegocio', 'cd_unidade', array('alias' => 'PdvImpostosUnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'unidade_negocio';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UnidadeNegocio[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UnidadeNegocio
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
            'cd_unidade' => 'cd_unidade',
            'cd_simples' => 'cd_simples',
            'empresa_cd_empresa' => 'empresa_cd_empresa',
            'representante' => 'representante',
            'area_cd_area' => 'area_cd_area',
            'descricao' => 'descricao',
            'opt_simples' => 'opt_simples',
            'pis' => 'pis',
            'cofins' => 'cofins',
            'ir' => 'ir',
            'ativo' => 'ativo',
            'modificado' => 'modificado',
            'criado' => 'criado',
            'tipo' => 'tipo',
            'cd_servicos_royalties' => 'cd_servicos_royalties',
            'royalties' => 'royalties',
            'idcond_pagto_royalties' => 'idcond_pagto_royalties',
            'cd_contas_royalties' => 'cd_contas_royalties',
            'cd_servicos_publicidade' => 'cd_servicos_publicidade',
            'publicidade' => 'publicidade',
            'idcond_pagto_publicidade' => 'idcond_pagto_publicidade',
            'cd_contas_publicidade' => 'cd_contas_publicidade',
            'markup_minimo_sugerido_royalties' => 'markup_minimo_sugerido_royalties',
            'tributacao' => 'tributacao',
            'cd_modelo_tributacao' => 'cd_modelo_tributacao',
            'certificado' => 'certificado',
            'senha_cert' => 'senha_cert',
            'prazo_minimo' => 'prazo_minimo',
            'vl_km_frete' => 'vl_km_frete',
            'nfe_lastid' => 'nfe_lastid',
            'franqueado_master' => 'franqueado_master',
            'royalties_franqueado_master' => 'royalties_franqueado_master',
            'presServico' => 'presServico',
            'ind_ativ' => 'ind_ativ',
            'perfil_fiscal' => 'perfil_fiscal',
            'emitente_nf' => 'emitente_nf',
            'modelo_documento_fisical' => 'modelo_documento_fisical',
            'serie_nf' => 'serie_nf',
            'id_contador' => 'id_contador',
            'emitir_nfe_cliente' => 'emitir_nfe_cliente'
        );
    }
}
