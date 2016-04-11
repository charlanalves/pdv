<?php

namespace App\Models;

class ConhecimentoTransporte extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_conhecimento_transporte;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $cond_pagto_cobranca;

    /**
     *
     * @var integer
     */
    protected $cod_modelo_fiscal;

    /**
     *
     * @var integer
     */
    protected $cd_situacao_fiscal;

    /**
     *
     * @var string
     */
    protected $ide_cUF;

    /**
     *
     * @var string
     */
    protected $ide_cCT;

    /**
     *
     * @var string
     */
    protected $ide_CFOP;

    /**
     *
     * @var string
     */
    protected $ide_natOp;

    /**
     *
     * @var string
     */
    protected $ide_CFOP_ent;

    /**
     *
     * @var string
     */
    protected $ide_natOp_ent;

    /**
     *
     * @var string
     */
    protected $ide_forPag;

    /**
     *
     * @var string
     */
    protected $ide_mod;

    /**
     *
     * @var string
     */
    protected $ide_serie;

    /**
     *
     * @var string
     */
    protected $ide_nCT;

    /**
     *
     * @var string
     */
    protected $ide_dhEmi;

    /**
     *
     * @var string
     */
    protected $ide_tpImp;

    /**
     *
     * @var string
     */
    protected $ide_tpEmis;

    /**
     *
     * @var string
     */
    protected $ide_cDV;

    /**
     *
     * @var string
     */
    protected $ide_tpAmb;

    /**
     *
     * @var string
     */
    protected $ide_tpCTe;

    /**
     *
     * @var string
     */
    protected $ide_procEmi;

    /**
     *
     * @var string
     */
    protected $ide_verProc;

    /**
     *
     * @var string
     */
    protected $ide_cMunEnv;

    /**
     *
     * @var string
     */
    protected $ide_xMunEnv;

    /**
     *
     * @var string
     */
    protected $ide_UFEnv;

    /**
     *
     * @var string
     */
    protected $ide_modal;

    /**
     *
     * @var string
     */
    protected $ide_tpServ;

    /**
     *
     * @var string
     */
    protected $ide_cMunIni;

    /**
     *
     * @var string
     */
    protected $ide_xMunIni;

    /**
     *
     * @var string
     */
    protected $ide_UFIni;

    /**
     *
     * @var string
     */
    protected $ide_cMunFim;

    /**
     *
     * @var string
     */
    protected $ide_xMunFim;

    /**
     *
     * @var string
     */
    protected $ide_UFFim;

    /**
     *
     * @var string
     */
    protected $ide_retira;

    /**
     *
     * @var string
     */
    protected $ide_toma03_toma;

    /**
     *
     * @var string
     */
    protected $chCTe;

    /**
     *
     * @var string
     */
    protected $compl_xEmi;

    /**
     *
     * @var string
     */
    protected $compl_fluxo_xOrig;

    /**
     *
     * @var string
     */
    protected $compl_fluxo_xDest;

    /**
     *
     * @var string
     */
    protected $compl_Entrega_semData_tpPer;

    /**
     *
     * @var string
     */
    protected $compl_Entrega_semHora_tpHor;

    /**
     *
     * @var string
     */
    protected $compl_origCalc;

    /**
     *
     * @var string
     */
    protected $compl_destCalc;

    /**
     *
     * @var string
     */
    protected $compl_xObs;

    /**
     *
     * @var string
     */
    protected $emit_CNPJ;

    /**
     *
     * @var string
     */
    protected $emit_IE;

    /**
     *
     * @var integer
     */
    protected $emit_xID;

    /**
     *
     * @var string
     */
    protected $emit_xNome;

    /**
     *
     * @var string
     */
    protected $emit_xFant;

    /**
     *
     * @var string
     */
    protected $emit_enderEmit_xLgr;

    /**
     *
     * @var string
     */
    protected $emit_enderEmit_nro;

    /**
     *
     * @var string
     */
    protected $emit_enderEmit_xBairro;

    /**
     *
     * @var string
     */
    protected $emit_enderEmit_cMun;

    /**
     *
     * @var string
     */
    protected $emit_enderEmit_xMun;

    /**
     *
     * @var string
     */
    protected $emit_enderEmit_CEP;

    /**
     *
     * @var string
     */
    protected $emit_enderEmit_UF;

    /**
     *
     * @var string
     */
    protected $rem_CNPJ;

    /**
     *
     * @var string
     */
    protected $rem_IE;

    /**
     *
     * @var string
     */
    protected $rem_xNome;

    /**
     *
     * @var string
     */
    protected $rem_xFant;

    /**
     *
     * @var string
     */
    protected $rem_fone;

    /**
     *
     * @var string
     */
    protected $rem_enderReme_xLgr;

    /**
     *
     * @var string
     */
    protected $rem_enderReme_nro;

    /**
     *
     * @var string
     */
    protected $rem_enderReme_xCpl;

    /**
     *
     * @var string
     */
    protected $rem_enderReme_xBairro;

    /**
     *
     * @var string
     */
    protected $rem_enderReme_cMun;

    /**
     *
     * @var string
     */
    protected $rem_enderReme_xMun;

    /**
     *
     * @var string
     */
    protected $rem_enderReme_CEP;

    /**
     *
     * @var string
     */
    protected $rem_enderReme_UF;

    /**
     *
     * @var string
     */
    protected $rem_enderReme_cPais;

    /**
     *
     * @var string
     */
    protected $rem_enderReme_xPais;

    /**
     *
     * @var string
     */
    protected $dest_CNPJ;

    /**
     *
     * @var string
     */
    protected $dest_IE;

    /**
     *
     * @var string
     */
    protected $dest_xNome;

    /**
     *
     * @var string
     */
    protected $dest_enderDest_xLgr;

    /**
     *
     * @var string
     */
    protected $dest_enderDest_nro;

    /**
     *
     * @var string
     */
    protected $dest_enderDest_xBairro;

    /**
     *
     * @var string
     */
    protected $dest_enderDest_cMun;

    /**
     *
     * @var string
     */
    protected $dest_enderDest_xMun;

    /**
     *
     * @var string
     */
    protected $dest_enderDest_CEP;

    /**
     *
     * @var string
     */
    protected $dest_enderDest_UF;

    /**
     *
     * @var string
     */
    protected $dest_enderDest_xPais;

    /**
     *
     * @var string
     */
    protected $vPrest_vTPrest;

    /**
     *
     * @var string
     */
    protected $vPrest_vRec;

    /**
     *
     * @var string
     */
    protected $vPrest_Comp_0_xNome;

    /**
     *
     * @var string
     */
    protected $vPrest_Comp_0_vComp;

    /**
     *
     * @var string
     */
    protected $vPrest_Comp_1_xNome;

    /**
     *
     * @var string
     */
    protected $vPrest_Comp_1_vComp;

    /**
     *
     * @var string
     */
    protected $vPrest_Comp_2_xNome;

    /**
     *
     * @var string
     */
    protected $vPrest_Comp_2_vComp;

    /**
     *
     * @var string
     */
    protected $imp_CST;

    /**
     *
     * @var string
     */
    protected $imp_infAdFisco;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infCarga_vCarga;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infCarga_proPred;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infCarga_xOutCat;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infCarga_infQ_0_cUnid;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infCarga_infQ_0_tpMed;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infCarga_infQ_0_qCarga;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infCarga_infQ_1_cUnid;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infCarga_infQ_1_tpMed;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infCarga_infQ_1_qCarga;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infDoc_infNFe_chave;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infDoc_infNF_mod;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infDoc_infNF_serie;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infDoc_infNF_nDoc;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infDoc_infNF_dEmi;

    /**
     *
     * @var double
     */
    protected $infCTeNorm_infDoc_infNF_vBC;

    /**
     *
     * @var double
     */
    protected $infCTeNorm_infDoc_infNF_vICMS;

    /**
     *
     * @var double
     */
    protected $infCTeNorm_infDoc_infNF_vBCST;

    /**
     *
     * @var double
     */
    protected $infCTeNorm_infDoc_infNF_vST;

    /**
     *
     * @var double
     */
    protected $infCTeNorm_infDoc_infNF_vProd;

    /**
     *
     * @var double
     */
    protected $infCTeNorm_infDoc_infNF_vNF;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infDoc_infNF_nCFOP;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infDoc_infNF_nPeso;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_seg_respSeg;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_seg_xSeg;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_seg_nApol;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_seg_vCarga;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infModal_rodo_RNTRC;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infModal_rodo_dPrev;

    /**
     *
     * @var string
     */
    protected $infCTeNorm_infModal_rodo_lota;

    /**
     *
     * @var string
     */
    protected $autXML_0_CNPJ;

    /**
     *
     * @var string
     */
    protected $autXML_1_CNPJ;

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
    protected $xml;

    /**
     *
     * @var string
     */
    protected $tipo_importacao_cte;

    /**
     *
     * @var integer
     */
    protected $indTipoPagamento;

    /**
     * Method to set the value of field cd_conhecimento_transporte
     *
     * @param integer $cd_conhecimento_transporte
     * @return $this
     */
    public function setCdConhecimentoTransporte($cd_conhecimento_transporte)
    {
        $this->cd_conhecimento_transporte = $cd_conhecimento_transporte;

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
     * Method to set the value of field cond_pagto_cobranca
     *
     * @param integer $cond_pagto_cobranca
     * @return $this
     */
    public function setCondPagtoCobranca($cond_pagto_cobranca)
    {
        $this->cond_pagto_cobranca = $cond_pagto_cobranca;

        return $this;
    }

    /**
     * Method to set the value of field cod_modelo_fiscal
     *
     * @param integer $cod_modelo_fiscal
     * @return $this
     */
    public function setCodModeloFiscal($cod_modelo_fiscal)
    {
        $this->cod_modelo_fiscal = $cod_modelo_fiscal;

        return $this;
    }

    /**
     * Method to set the value of field cd_situacao_fiscal
     *
     * @param integer $cd_situacao_fiscal
     * @return $this
     */
    public function setCdSituacaoFiscal($cd_situacao_fiscal)
    {
        $this->cd_situacao_fiscal = $cd_situacao_fiscal;

        return $this;
    }

    /**
     * Method to set the value of field ide_cUF
     *
     * @param string $ide_cUF
     * @return $this
     */
    public function setIdeCUF($ide_cUF)
    {
        $this->ide_cUF = $ide_cUF;

        return $this;
    }

    /**
     * Method to set the value of field ide_cCT
     *
     * @param string $ide_cCT
     * @return $this
     */
    public function setIdeCCT($ide_cCT)
    {
        $this->ide_cCT = $ide_cCT;

        return $this;
    }

    /**
     * Method to set the value of field ide_CFOP
     *
     * @param string $ide_CFOP
     * @return $this
     */
    public function setIdeCFOP($ide_CFOP)
    {
        $this->ide_CFOP = $ide_CFOP;

        return $this;
    }

    /**
     * Method to set the value of field ide_natOp
     *
     * @param string $ide_natOp
     * @return $this
     */
    public function setIdeNatOp($ide_natOp)
    {
        $this->ide_natOp = $ide_natOp;

        return $this;
    }

    /**
     * Method to set the value of field ide_CFOP_ent
     *
     * @param string $ide_CFOP_ent
     * @return $this
     */
    public function setIdeCFOPEnt($ide_CFOP_ent)
    {
        $this->ide_CFOP_ent = $ide_CFOP_ent;

        return $this;
    }

    /**
     * Method to set the value of field ide_natOp_ent
     *
     * @param string $ide_natOp_ent
     * @return $this
     */
    public function setIdeNatOpEnt($ide_natOp_ent)
    {
        $this->ide_natOp_ent = $ide_natOp_ent;

        return $this;
    }

    /**
     * Method to set the value of field ide_forPag
     *
     * @param string $ide_forPag
     * @return $this
     */
    public function setIdeForPag($ide_forPag)
    {
        $this->ide_forPag = $ide_forPag;

        return $this;
    }

    /**
     * Method to set the value of field ide_mod
     *
     * @param string $ide_mod
     * @return $this
     */
    public function setIdeMod($ide_mod)
    {
        $this->ide_mod = $ide_mod;

        return $this;
    }

    /**
     * Method to set the value of field ide_serie
     *
     * @param string $ide_serie
     * @return $this
     */
    public function setIdeSerie($ide_serie)
    {
        $this->ide_serie = $ide_serie;

        return $this;
    }

    /**
     * Method to set the value of field ide_nCT
     *
     * @param string $ide_nCT
     * @return $this
     */
    public function setIdeNCT($ide_nCT)
    {
        $this->ide_nCT = $ide_nCT;

        return $this;
    }

    /**
     * Method to set the value of field ide_dhEmi
     *
     * @param string $ide_dhEmi
     * @return $this
     */
    public function setIdeDhEmi($ide_dhEmi)
    {
        $this->ide_dhEmi = $ide_dhEmi;

        return $this;
    }

    /**
     * Method to set the value of field ide_tpImp
     *
     * @param string $ide_tpImp
     * @return $this
     */
    public function setIdeTpImp($ide_tpImp)
    {
        $this->ide_tpImp = $ide_tpImp;

        return $this;
    }

    /**
     * Method to set the value of field ide_tpEmis
     *
     * @param string $ide_tpEmis
     * @return $this
     */
    public function setIdeTpEmis($ide_tpEmis)
    {
        $this->ide_tpEmis = $ide_tpEmis;

        return $this;
    }

    /**
     * Method to set the value of field ide_cDV
     *
     * @param string $ide_cDV
     * @return $this
     */
    public function setIdeCDV($ide_cDV)
    {
        $this->ide_cDV = $ide_cDV;

        return $this;
    }

    /**
     * Method to set the value of field ide_tpAmb
     *
     * @param string $ide_tpAmb
     * @return $this
     */
    public function setIdeTpAmb($ide_tpAmb)
    {
        $this->ide_tpAmb = $ide_tpAmb;

        return $this;
    }

    /**
     * Method to set the value of field ide_tpCTe
     *
     * @param string $ide_tpCTe
     * @return $this
     */
    public function setIdeTpCTe($ide_tpCTe)
    {
        $this->ide_tpCTe = $ide_tpCTe;

        return $this;
    }

    /**
     * Method to set the value of field ide_procEmi
     *
     * @param string $ide_procEmi
     * @return $this
     */
    public function setIdeProcEmi($ide_procEmi)
    {
        $this->ide_procEmi = $ide_procEmi;

        return $this;
    }

    /**
     * Method to set the value of field ide_verProc
     *
     * @param string $ide_verProc
     * @return $this
     */
    public function setIdeVerProc($ide_verProc)
    {
        $this->ide_verProc = $ide_verProc;

        return $this;
    }

    /**
     * Method to set the value of field ide_cMunEnv
     *
     * @param string $ide_cMunEnv
     * @return $this
     */
    public function setIdeCMunEnv($ide_cMunEnv)
    {
        $this->ide_cMunEnv = $ide_cMunEnv;

        return $this;
    }

    /**
     * Method to set the value of field ide_xMunEnv
     *
     * @param string $ide_xMunEnv
     * @return $this
     */
    public function setIdeXMunEnv($ide_xMunEnv)
    {
        $this->ide_xMunEnv = $ide_xMunEnv;

        return $this;
    }

    /**
     * Method to set the value of field ide_UFEnv
     *
     * @param string $ide_UFEnv
     * @return $this
     */
    public function setIdeUFEnv($ide_UFEnv)
    {
        $this->ide_UFEnv = $ide_UFEnv;

        return $this;
    }

    /**
     * Method to set the value of field ide_modal
     *
     * @param string $ide_modal
     * @return $this
     */
    public function setIdeModal($ide_modal)
    {
        $this->ide_modal = $ide_modal;

        return $this;
    }

    /**
     * Method to set the value of field ide_tpServ
     *
     * @param string $ide_tpServ
     * @return $this
     */
    public function setIdeTpServ($ide_tpServ)
    {
        $this->ide_tpServ = $ide_tpServ;

        return $this;
    }

    /**
     * Method to set the value of field ide_cMunIni
     *
     * @param string $ide_cMunIni
     * @return $this
     */
    public function setIdeCMunIni($ide_cMunIni)
    {
        $this->ide_cMunIni = $ide_cMunIni;

        return $this;
    }

    /**
     * Method to set the value of field ide_xMunIni
     *
     * @param string $ide_xMunIni
     * @return $this
     */
    public function setIdeXMunIni($ide_xMunIni)
    {
        $this->ide_xMunIni = $ide_xMunIni;

        return $this;
    }

    /**
     * Method to set the value of field ide_UFIni
     *
     * @param string $ide_UFIni
     * @return $this
     */
    public function setIdeUFIni($ide_UFIni)
    {
        $this->ide_UFIni = $ide_UFIni;

        return $this;
    }

    /**
     * Method to set the value of field ide_cMunFim
     *
     * @param string $ide_cMunFim
     * @return $this
     */
    public function setIdeCMunFim($ide_cMunFim)
    {
        $this->ide_cMunFim = $ide_cMunFim;

        return $this;
    }

    /**
     * Method to set the value of field ide_xMunFim
     *
     * @param string $ide_xMunFim
     * @return $this
     */
    public function setIdeXMunFim($ide_xMunFim)
    {
        $this->ide_xMunFim = $ide_xMunFim;

        return $this;
    }

    /**
     * Method to set the value of field ide_UFFim
     *
     * @param string $ide_UFFim
     * @return $this
     */
    public function setIdeUFFim($ide_UFFim)
    {
        $this->ide_UFFim = $ide_UFFim;

        return $this;
    }

    /**
     * Method to set the value of field ide_retira
     *
     * @param string $ide_retira
     * @return $this
     */
    public function setIdeRetira($ide_retira)
    {
        $this->ide_retira = $ide_retira;

        return $this;
    }

    /**
     * Method to set the value of field ide_toma03_toma
     *
     * @param string $ide_toma03_toma
     * @return $this
     */
    public function setIdeToma03Toma($ide_toma03_toma)
    {
        $this->ide_toma03_toma = $ide_toma03_toma;

        return $this;
    }

    /**
     * Method to set the value of field chCTe
     *
     * @param string $chCTe
     * @return $this
     */
    public function setChCTe($chCTe)
    {
        $this->chCTe = $chCTe;

        return $this;
    }

    /**
     * Method to set the value of field compl_xEmi
     *
     * @param string $compl_xEmi
     * @return $this
     */
    public function setComplXEmi($compl_xEmi)
    {
        $this->compl_xEmi = $compl_xEmi;

        return $this;
    }

    /**
     * Method to set the value of field compl_fluxo_xOrig
     *
     * @param string $compl_fluxo_xOrig
     * @return $this
     */
    public function setComplFluxoXOrig($compl_fluxo_xOrig)
    {
        $this->compl_fluxo_xOrig = $compl_fluxo_xOrig;

        return $this;
    }

    /**
     * Method to set the value of field compl_fluxo_xDest
     *
     * @param string $compl_fluxo_xDest
     * @return $this
     */
    public function setComplFluxoXDest($compl_fluxo_xDest)
    {
        $this->compl_fluxo_xDest = $compl_fluxo_xDest;

        return $this;
    }

    /**
     * Method to set the value of field compl_Entrega_semData_tpPer
     *
     * @param string $compl_Entrega_semData_tpPer
     * @return $this
     */
    public function setComplEntregaSemDataTpPer($compl_Entrega_semData_tpPer)
    {
        $this->compl_Entrega_semData_tpPer = $compl_Entrega_semData_tpPer;

        return $this;
    }

    /**
     * Method to set the value of field compl_Entrega_semHora_tpHor
     *
     * @param string $compl_Entrega_semHora_tpHor
     * @return $this
     */
    public function setComplEntregaSemHoraTpHor($compl_Entrega_semHora_tpHor)
    {
        $this->compl_Entrega_semHora_tpHor = $compl_Entrega_semHora_tpHor;

        return $this;
    }

    /**
     * Method to set the value of field compl_origCalc
     *
     * @param string $compl_origCalc
     * @return $this
     */
    public function setComplOrigCalc($compl_origCalc)
    {
        $this->compl_origCalc = $compl_origCalc;

        return $this;
    }

    /**
     * Method to set the value of field compl_destCalc
     *
     * @param string $compl_destCalc
     * @return $this
     */
    public function setComplDestCalc($compl_destCalc)
    {
        $this->compl_destCalc = $compl_destCalc;

        return $this;
    }

    /**
     * Method to set the value of field compl_xObs
     *
     * @param string $compl_xObs
     * @return $this
     */
    public function setComplXObs($compl_xObs)
    {
        $this->compl_xObs = $compl_xObs;

        return $this;
    }

    /**
     * Method to set the value of field emit_CNPJ
     *
     * @param string $emit_CNPJ
     * @return $this
     */
    public function setEmitCNPJ($emit_CNPJ)
    {
        $this->emit_CNPJ = $emit_CNPJ;

        return $this;
    }

    /**
     * Method to set the value of field emit_IE
     *
     * @param string $emit_IE
     * @return $this
     */
    public function setEmitIE($emit_IE)
    {
        $this->emit_IE = $emit_IE;

        return $this;
    }

    /**
     * Method to set the value of field emit_xID
     *
     * @param integer $emit_xID
     * @return $this
     */
    public function setEmitXID($emit_xID)
    {
        $this->emit_xID = $emit_xID;

        return $this;
    }

    /**
     * Method to set the value of field emit_xNome
     *
     * @param string $emit_xNome
     * @return $this
     */
    public function setEmitXNome($emit_xNome)
    {
        $this->emit_xNome = $emit_xNome;

        return $this;
    }

    /**
     * Method to set the value of field emit_xFant
     *
     * @param string $emit_xFant
     * @return $this
     */
    public function setEmitXFant($emit_xFant)
    {
        $this->emit_xFant = $emit_xFant;

        return $this;
    }

    /**
     * Method to set the value of field emit_enderEmit_xLgr
     *
     * @param string $emit_enderEmit_xLgr
     * @return $this
     */
    public function setEmitEnderEmitXLgr($emit_enderEmit_xLgr)
    {
        $this->emit_enderEmit_xLgr = $emit_enderEmit_xLgr;

        return $this;
    }

    /**
     * Method to set the value of field emit_enderEmit_nro
     *
     * @param string $emit_enderEmit_nro
     * @return $this
     */
    public function setEmitEnderEmitNro($emit_enderEmit_nro)
    {
        $this->emit_enderEmit_nro = $emit_enderEmit_nro;

        return $this;
    }

    /**
     * Method to set the value of field emit_enderEmit_xBairro
     *
     * @param string $emit_enderEmit_xBairro
     * @return $this
     */
    public function setEmitEnderEmitXBairro($emit_enderEmit_xBairro)
    {
        $this->emit_enderEmit_xBairro = $emit_enderEmit_xBairro;

        return $this;
    }

    /**
     * Method to set the value of field emit_enderEmit_cMun
     *
     * @param string $emit_enderEmit_cMun
     * @return $this
     */
    public function setEmitEnderEmitCMun($emit_enderEmit_cMun)
    {
        $this->emit_enderEmit_cMun = $emit_enderEmit_cMun;

        return $this;
    }

    /**
     * Method to set the value of field emit_enderEmit_xMun
     *
     * @param string $emit_enderEmit_xMun
     * @return $this
     */
    public function setEmitEnderEmitXMun($emit_enderEmit_xMun)
    {
        $this->emit_enderEmit_xMun = $emit_enderEmit_xMun;

        return $this;
    }

    /**
     * Method to set the value of field emit_enderEmit_CEP
     *
     * @param string $emit_enderEmit_CEP
     * @return $this
     */
    public function setEmitEnderEmitCEP($emit_enderEmit_CEP)
    {
        $this->emit_enderEmit_CEP = $emit_enderEmit_CEP;

        return $this;
    }

    /**
     * Method to set the value of field emit_enderEmit_UF
     *
     * @param string $emit_enderEmit_UF
     * @return $this
     */
    public function setEmitEnderEmitUF($emit_enderEmit_UF)
    {
        $this->emit_enderEmit_UF = $emit_enderEmit_UF;

        return $this;
    }

    /**
     * Method to set the value of field rem_CNPJ
     *
     * @param string $rem_CNPJ
     * @return $this
     */
    public function setRemCNPJ($rem_CNPJ)
    {
        $this->rem_CNPJ = $rem_CNPJ;

        return $this;
    }

    /**
     * Method to set the value of field rem_IE
     *
     * @param string $rem_IE
     * @return $this
     */
    public function setRemIE($rem_IE)
    {
        $this->rem_IE = $rem_IE;

        return $this;
    }

    /**
     * Method to set the value of field rem_xNome
     *
     * @param string $rem_xNome
     * @return $this
     */
    public function setRemXNome($rem_xNome)
    {
        $this->rem_xNome = $rem_xNome;

        return $this;
    }

    /**
     * Method to set the value of field rem_xFant
     *
     * @param string $rem_xFant
     * @return $this
     */
    public function setRemXFant($rem_xFant)
    {
        $this->rem_xFant = $rem_xFant;

        return $this;
    }

    /**
     * Method to set the value of field rem_fone
     *
     * @param string $rem_fone
     * @return $this
     */
    public function setRemFone($rem_fone)
    {
        $this->rem_fone = $rem_fone;

        return $this;
    }

    /**
     * Method to set the value of field rem_enderReme_xLgr
     *
     * @param string $rem_enderReme_xLgr
     * @return $this
     */
    public function setRemEnderRemeXLgr($rem_enderReme_xLgr)
    {
        $this->rem_enderReme_xLgr = $rem_enderReme_xLgr;

        return $this;
    }

    /**
     * Method to set the value of field rem_enderReme_nro
     *
     * @param string $rem_enderReme_nro
     * @return $this
     */
    public function setRemEnderRemeNro($rem_enderReme_nro)
    {
        $this->rem_enderReme_nro = $rem_enderReme_nro;

        return $this;
    }

    /**
     * Method to set the value of field rem_enderReme_xCpl
     *
     * @param string $rem_enderReme_xCpl
     * @return $this
     */
    public function setRemEnderRemeXCpl($rem_enderReme_xCpl)
    {
        $this->rem_enderReme_xCpl = $rem_enderReme_xCpl;

        return $this;
    }

    /**
     * Method to set the value of field rem_enderReme_xBairro
     *
     * @param string $rem_enderReme_xBairro
     * @return $this
     */
    public function setRemEnderRemeXBairro($rem_enderReme_xBairro)
    {
        $this->rem_enderReme_xBairro = $rem_enderReme_xBairro;

        return $this;
    }

    /**
     * Method to set the value of field rem_enderReme_cMun
     *
     * @param string $rem_enderReme_cMun
     * @return $this
     */
    public function setRemEnderRemeCMun($rem_enderReme_cMun)
    {
        $this->rem_enderReme_cMun = $rem_enderReme_cMun;

        return $this;
    }

    /**
     * Method to set the value of field rem_enderReme_xMun
     *
     * @param string $rem_enderReme_xMun
     * @return $this
     */
    public function setRemEnderRemeXMun($rem_enderReme_xMun)
    {
        $this->rem_enderReme_xMun = $rem_enderReme_xMun;

        return $this;
    }

    /**
     * Method to set the value of field rem_enderReme_CEP
     *
     * @param string $rem_enderReme_CEP
     * @return $this
     */
    public function setRemEnderRemeCEP($rem_enderReme_CEP)
    {
        $this->rem_enderReme_CEP = $rem_enderReme_CEP;

        return $this;
    }

    /**
     * Method to set the value of field rem_enderReme_UF
     *
     * @param string $rem_enderReme_UF
     * @return $this
     */
    public function setRemEnderRemeUF($rem_enderReme_UF)
    {
        $this->rem_enderReme_UF = $rem_enderReme_UF;

        return $this;
    }

    /**
     * Method to set the value of field rem_enderReme_cPais
     *
     * @param string $rem_enderReme_cPais
     * @return $this
     */
    public function setRemEnderRemeCPais($rem_enderReme_cPais)
    {
        $this->rem_enderReme_cPais = $rem_enderReme_cPais;

        return $this;
    }

    /**
     * Method to set the value of field rem_enderReme_xPais
     *
     * @param string $rem_enderReme_xPais
     * @return $this
     */
    public function setRemEnderRemeXPais($rem_enderReme_xPais)
    {
        $this->rem_enderReme_xPais = $rem_enderReme_xPais;

        return $this;
    }

    /**
     * Method to set the value of field dest_CNPJ
     *
     * @param string $dest_CNPJ
     * @return $this
     */
    public function setDestCNPJ($dest_CNPJ)
    {
        $this->dest_CNPJ = $dest_CNPJ;

        return $this;
    }

    /**
     * Method to set the value of field dest_IE
     *
     * @param string $dest_IE
     * @return $this
     */
    public function setDestIE($dest_IE)
    {
        $this->dest_IE = $dest_IE;

        return $this;
    }

    /**
     * Method to set the value of field dest_xNome
     *
     * @param string $dest_xNome
     * @return $this
     */
    public function setDestXNome($dest_xNome)
    {
        $this->dest_xNome = $dest_xNome;

        return $this;
    }

    /**
     * Method to set the value of field dest_enderDest_xLgr
     *
     * @param string $dest_enderDest_xLgr
     * @return $this
     */
    public function setDestEnderDestXLgr($dest_enderDest_xLgr)
    {
        $this->dest_enderDest_xLgr = $dest_enderDest_xLgr;

        return $this;
    }

    /**
     * Method to set the value of field dest_enderDest_nro
     *
     * @param string $dest_enderDest_nro
     * @return $this
     */
    public function setDestEnderDestNro($dest_enderDest_nro)
    {
        $this->dest_enderDest_nro = $dest_enderDest_nro;

        return $this;
    }

    /**
     * Method to set the value of field dest_enderDest_xBairro
     *
     * @param string $dest_enderDest_xBairro
     * @return $this
     */
    public function setDestEnderDestXBairro($dest_enderDest_xBairro)
    {
        $this->dest_enderDest_xBairro = $dest_enderDest_xBairro;

        return $this;
    }

    /**
     * Method to set the value of field dest_enderDest_cMun
     *
     * @param string $dest_enderDest_cMun
     * @return $this
     */
    public function setDestEnderDestCMun($dest_enderDest_cMun)
    {
        $this->dest_enderDest_cMun = $dest_enderDest_cMun;

        return $this;
    }

    /**
     * Method to set the value of field dest_enderDest_xMun
     *
     * @param string $dest_enderDest_xMun
     * @return $this
     */
    public function setDestEnderDestXMun($dest_enderDest_xMun)
    {
        $this->dest_enderDest_xMun = $dest_enderDest_xMun;

        return $this;
    }

    /**
     * Method to set the value of field dest_enderDest_CEP
     *
     * @param string $dest_enderDest_CEP
     * @return $this
     */
    public function setDestEnderDestCEP($dest_enderDest_CEP)
    {
        $this->dest_enderDest_CEP = $dest_enderDest_CEP;

        return $this;
    }

    /**
     * Method to set the value of field dest_enderDest_UF
     *
     * @param string $dest_enderDest_UF
     * @return $this
     */
    public function setDestEnderDestUF($dest_enderDest_UF)
    {
        $this->dest_enderDest_UF = $dest_enderDest_UF;

        return $this;
    }

    /**
     * Method to set the value of field dest_enderDest_xPais
     *
     * @param string $dest_enderDest_xPais
     * @return $this
     */
    public function setDestEnderDestXPais($dest_enderDest_xPais)
    {
        $this->dest_enderDest_xPais = $dest_enderDest_xPais;

        return $this;
    }

    /**
     * Method to set the value of field vPrest_vTPrest
     *
     * @param string $vPrest_vTPrest
     * @return $this
     */
    public function setVPrestVTPrest($vPrest_vTPrest)
    {
        $this->vPrest_vTPrest = $vPrest_vTPrest;

        return $this;
    }

    /**
     * Method to set the value of field vPrest_vRec
     *
     * @param string $vPrest_vRec
     * @return $this
     */
    public function setVPrestVRec($vPrest_vRec)
    {
        $this->vPrest_vRec = $vPrest_vRec;

        return $this;
    }

    /**
     * Method to set the value of field vPrest_Comp_0_xNome
     *
     * @param string $vPrest_Comp_0_xNome
     * @return $this
     */
    public function setVPrestComp0XNome($vPrest_Comp_0_xNome)
    {
        $this->vPrest_Comp_0_xNome = $vPrest_Comp_0_xNome;

        return $this;
    }

    /**
     * Method to set the value of field vPrest_Comp_0_vComp
     *
     * @param string $vPrest_Comp_0_vComp
     * @return $this
     */
    public function setVPrestComp0VComp($vPrest_Comp_0_vComp)
    {
        $this->vPrest_Comp_0_vComp = $vPrest_Comp_0_vComp;

        return $this;
    }

    /**
     * Method to set the value of field vPrest_Comp_1_xNome
     *
     * @param string $vPrest_Comp_1_xNome
     * @return $this
     */
    public function setVPrestComp1XNome($vPrest_Comp_1_xNome)
    {
        $this->vPrest_Comp_1_xNome = $vPrest_Comp_1_xNome;

        return $this;
    }

    /**
     * Method to set the value of field vPrest_Comp_1_vComp
     *
     * @param string $vPrest_Comp_1_vComp
     * @return $this
     */
    public function setVPrestComp1VComp($vPrest_Comp_1_vComp)
    {
        $this->vPrest_Comp_1_vComp = $vPrest_Comp_1_vComp;

        return $this;
    }

    /**
     * Method to set the value of field vPrest_Comp_2_xNome
     *
     * @param string $vPrest_Comp_2_xNome
     * @return $this
     */
    public function setVPrestComp2XNome($vPrest_Comp_2_xNome)
    {
        $this->vPrest_Comp_2_xNome = $vPrest_Comp_2_xNome;

        return $this;
    }

    /**
     * Method to set the value of field vPrest_Comp_2_vComp
     *
     * @param string $vPrest_Comp_2_vComp
     * @return $this
     */
    public function setVPrestComp2VComp($vPrest_Comp_2_vComp)
    {
        $this->vPrest_Comp_2_vComp = $vPrest_Comp_2_vComp;

        return $this;
    }

    /**
     * Method to set the value of field imp_CST
     *
     * @param string $imp_CST
     * @return $this
     */
    public function setImpCST($imp_CST)
    {
        $this->imp_CST = $imp_CST;

        return $this;
    }

    /**
     * Method to set the value of field imp_infAdFisco
     *
     * @param string $imp_infAdFisco
     * @return $this
     */
    public function setImpInfAdFisco($imp_infAdFisco)
    {
        $this->imp_infAdFisco = $imp_infAdFisco;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infCarga_vCarga
     *
     * @param string $infCTeNorm_infCarga_vCarga
     * @return $this
     */
    public function setInfCTeNormInfCargaVCarga($infCTeNorm_infCarga_vCarga)
    {
        $this->infCTeNorm_infCarga_vCarga = $infCTeNorm_infCarga_vCarga;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infCarga_proPred
     *
     * @param string $infCTeNorm_infCarga_proPred
     * @return $this
     */
    public function setInfCTeNormInfCargaProPred($infCTeNorm_infCarga_proPred)
    {
        $this->infCTeNorm_infCarga_proPred = $infCTeNorm_infCarga_proPred;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infCarga_xOutCat
     *
     * @param string $infCTeNorm_infCarga_xOutCat
     * @return $this
     */
    public function setInfCTeNormInfCargaXOutCat($infCTeNorm_infCarga_xOutCat)
    {
        $this->infCTeNorm_infCarga_xOutCat = $infCTeNorm_infCarga_xOutCat;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infCarga_infQ_0_cUnid
     *
     * @param string $infCTeNorm_infCarga_infQ_0_cUnid
     * @return $this
     */
    public function setInfCTeNormInfCargaInfQ0CUnid($infCTeNorm_infCarga_infQ_0_cUnid)
    {
        $this->infCTeNorm_infCarga_infQ_0_cUnid = $infCTeNorm_infCarga_infQ_0_cUnid;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infCarga_infQ_0_tpMed
     *
     * @param string $infCTeNorm_infCarga_infQ_0_tpMed
     * @return $this
     */
    public function setInfCTeNormInfCargaInfQ0TpMed($infCTeNorm_infCarga_infQ_0_tpMed)
    {
        $this->infCTeNorm_infCarga_infQ_0_tpMed = $infCTeNorm_infCarga_infQ_0_tpMed;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infCarga_infQ_0_qCarga
     *
     * @param string $infCTeNorm_infCarga_infQ_0_qCarga
     * @return $this
     */
    public function setInfCTeNormInfCargaInfQ0QCarga($infCTeNorm_infCarga_infQ_0_qCarga)
    {
        $this->infCTeNorm_infCarga_infQ_0_qCarga = $infCTeNorm_infCarga_infQ_0_qCarga;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infCarga_infQ_1_cUnid
     *
     * @param string $infCTeNorm_infCarga_infQ_1_cUnid
     * @return $this
     */
    public function setInfCTeNormInfCargaInfQ1CUnid($infCTeNorm_infCarga_infQ_1_cUnid)
    {
        $this->infCTeNorm_infCarga_infQ_1_cUnid = $infCTeNorm_infCarga_infQ_1_cUnid;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infCarga_infQ_1_tpMed
     *
     * @param string $infCTeNorm_infCarga_infQ_1_tpMed
     * @return $this
     */
    public function setInfCTeNormInfCargaInfQ1TpMed($infCTeNorm_infCarga_infQ_1_tpMed)
    {
        $this->infCTeNorm_infCarga_infQ_1_tpMed = $infCTeNorm_infCarga_infQ_1_tpMed;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infCarga_infQ_1_qCarga
     *
     * @param string $infCTeNorm_infCarga_infQ_1_qCarga
     * @return $this
     */
    public function setInfCTeNormInfCargaInfQ1QCarga($infCTeNorm_infCarga_infQ_1_qCarga)
    {
        $this->infCTeNorm_infCarga_infQ_1_qCarga = $infCTeNorm_infCarga_infQ_1_qCarga;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNFe_chave
     *
     * @param string $infCTeNorm_infDoc_infNFe_chave
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFeChave($infCTeNorm_infDoc_infNFe_chave)
    {
        $this->infCTeNorm_infDoc_infNFe_chave = $infCTeNorm_infDoc_infNFe_chave;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_mod
     *
     * @param string $infCTeNorm_infDoc_infNF_mod
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFMod($infCTeNorm_infDoc_infNF_mod)
    {
        $this->infCTeNorm_infDoc_infNF_mod = $infCTeNorm_infDoc_infNF_mod;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_serie
     *
     * @param string $infCTeNorm_infDoc_infNF_serie
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFSerie($infCTeNorm_infDoc_infNF_serie)
    {
        $this->infCTeNorm_infDoc_infNF_serie = $infCTeNorm_infDoc_infNF_serie;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_nDoc
     *
     * @param string $infCTeNorm_infDoc_infNF_nDoc
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFNDoc($infCTeNorm_infDoc_infNF_nDoc)
    {
        $this->infCTeNorm_infDoc_infNF_nDoc = $infCTeNorm_infDoc_infNF_nDoc;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_dEmi
     *
     * @param string $infCTeNorm_infDoc_infNF_dEmi
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFDEmi($infCTeNorm_infDoc_infNF_dEmi)
    {
        $this->infCTeNorm_infDoc_infNF_dEmi = $infCTeNorm_infDoc_infNF_dEmi;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_vBC
     *
     * @param double $infCTeNorm_infDoc_infNF_vBC
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFVBC($infCTeNorm_infDoc_infNF_vBC)
    {
        $this->infCTeNorm_infDoc_infNF_vBC = $infCTeNorm_infDoc_infNF_vBC;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_vICMS
     *
     * @param double $infCTeNorm_infDoc_infNF_vICMS
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFVICMS($infCTeNorm_infDoc_infNF_vICMS)
    {
        $this->infCTeNorm_infDoc_infNF_vICMS = $infCTeNorm_infDoc_infNF_vICMS;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_vBCST
     *
     * @param double $infCTeNorm_infDoc_infNF_vBCST
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFVBCST($infCTeNorm_infDoc_infNF_vBCST)
    {
        $this->infCTeNorm_infDoc_infNF_vBCST = $infCTeNorm_infDoc_infNF_vBCST;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_vST
     *
     * @param double $infCTeNorm_infDoc_infNF_vST
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFVST($infCTeNorm_infDoc_infNF_vST)
    {
        $this->infCTeNorm_infDoc_infNF_vST = $infCTeNorm_infDoc_infNF_vST;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_vProd
     *
     * @param double $infCTeNorm_infDoc_infNF_vProd
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFVProd($infCTeNorm_infDoc_infNF_vProd)
    {
        $this->infCTeNorm_infDoc_infNF_vProd = $infCTeNorm_infDoc_infNF_vProd;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_vNF
     *
     * @param double $infCTeNorm_infDoc_infNF_vNF
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFVNF($infCTeNorm_infDoc_infNF_vNF)
    {
        $this->infCTeNorm_infDoc_infNF_vNF = $infCTeNorm_infDoc_infNF_vNF;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_nCFOP
     *
     * @param string $infCTeNorm_infDoc_infNF_nCFOP
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFNCFOP($infCTeNorm_infDoc_infNF_nCFOP)
    {
        $this->infCTeNorm_infDoc_infNF_nCFOP = $infCTeNorm_infDoc_infNF_nCFOP;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infDoc_infNF_nPeso
     *
     * @param string $infCTeNorm_infDoc_infNF_nPeso
     * @return $this
     */
    public function setInfCTeNormInfDocInfNFNPeso($infCTeNorm_infDoc_infNF_nPeso)
    {
        $this->infCTeNorm_infDoc_infNF_nPeso = $infCTeNorm_infDoc_infNF_nPeso;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_seg_respSeg
     *
     * @param string $infCTeNorm_seg_respSeg
     * @return $this
     */
    public function setInfCTeNormSegRespSeg($infCTeNorm_seg_respSeg)
    {
        $this->infCTeNorm_seg_respSeg = $infCTeNorm_seg_respSeg;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_seg_xSeg
     *
     * @param string $infCTeNorm_seg_xSeg
     * @return $this
     */
    public function setInfCTeNormSegXSeg($infCTeNorm_seg_xSeg)
    {
        $this->infCTeNorm_seg_xSeg = $infCTeNorm_seg_xSeg;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_seg_nApol
     *
     * @param string $infCTeNorm_seg_nApol
     * @return $this
     */
    public function setInfCTeNormSegNApol($infCTeNorm_seg_nApol)
    {
        $this->infCTeNorm_seg_nApol = $infCTeNorm_seg_nApol;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_seg_vCarga
     *
     * @param string $infCTeNorm_seg_vCarga
     * @return $this
     */
    public function setInfCTeNormSegVCarga($infCTeNorm_seg_vCarga)
    {
        $this->infCTeNorm_seg_vCarga = $infCTeNorm_seg_vCarga;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infModal_rodo_RNTRC
     *
     * @param string $infCTeNorm_infModal_rodo_RNTRC
     * @return $this
     */
    public function setInfCTeNormInfModalRodoRNTRC($infCTeNorm_infModal_rodo_RNTRC)
    {
        $this->infCTeNorm_infModal_rodo_RNTRC = $infCTeNorm_infModal_rodo_RNTRC;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infModal_rodo_dPrev
     *
     * @param string $infCTeNorm_infModal_rodo_dPrev
     * @return $this
     */
    public function setInfCTeNormInfModalRodoDPrev($infCTeNorm_infModal_rodo_dPrev)
    {
        $this->infCTeNorm_infModal_rodo_dPrev = $infCTeNorm_infModal_rodo_dPrev;

        return $this;
    }

    /**
     * Method to set the value of field infCTeNorm_infModal_rodo_lota
     *
     * @param string $infCTeNorm_infModal_rodo_lota
     * @return $this
     */
    public function setInfCTeNormInfModalRodoLota($infCTeNorm_infModal_rodo_lota)
    {
        $this->infCTeNorm_infModal_rodo_lota = $infCTeNorm_infModal_rodo_lota;

        return $this;
    }

    /**
     * Method to set the value of field autXML_0_CNPJ
     *
     * @param string $autXML_0_CNPJ
     * @return $this
     */
    public function setAutXML0CNPJ($autXML_0_CNPJ)
    {
        $this->autXML_0_CNPJ = $autXML_0_CNPJ;

        return $this;
    }

    /**
     * Method to set the value of field autXML_1_CNPJ
     *
     * @param string $autXML_1_CNPJ
     * @return $this
     */
    public function setAutXML1CNPJ($autXML_1_CNPJ)
    {
        $this->autXML_1_CNPJ = $autXML_1_CNPJ;

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
     * Method to set the value of field xml
     *
     * @param string $xml
     * @return $this
     */
    public function setXml($xml)
    {
        $this->xml = $xml;

        return $this;
    }

    /**
     * Method to set the value of field tipo_importacao_cte
     *
     * @param string $tipo_importacao_cte
     * @return $this
     */
    public function setTipoImportacaoCte($tipo_importacao_cte)
    {
        $this->tipo_importacao_cte = $tipo_importacao_cte;

        return $this;
    }

    /**
     * Method to set the value of field indTipoPagamento
     *
     * @param integer $indTipoPagamento
     * @return $this
     */
    public function setIndTipoPagamento($indTipoPagamento)
    {
        $this->indTipoPagamento = $indTipoPagamento;

        return $this;
    }

    /**
     * Returns the value of field cd_conhecimento_transporte
     *
     * @return integer
     */
    public function getCdConhecimentoTransporte()
    {
        return $this->cd_conhecimento_transporte;
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
     * Returns the value of field cond_pagto_cobranca
     *
     * @return integer
     */
    public function getCondPagtoCobranca()
    {
        return $this->cond_pagto_cobranca;
    }

    /**
     * Returns the value of field cod_modelo_fiscal
     *
     * @return integer
     */
    public function getCodModeloFiscal()
    {
        return $this->cod_modelo_fiscal;
    }

    /**
     * Returns the value of field cd_situacao_fiscal
     *
     * @return integer
     */
    public function getCdSituacaoFiscal()
    {
        return $this->cd_situacao_fiscal;
    }

    /**
     * Returns the value of field ide_cUF
     *
     * @return string
     */
    public function getIdeCUF()
    {
        return $this->ide_cUF;
    }

    /**
     * Returns the value of field ide_cCT
     *
     * @return string
     */
    public function getIdeCCT()
    {
        return $this->ide_cCT;
    }

    /**
     * Returns the value of field ide_CFOP
     *
     * @return string
     */
    public function getIdeCFOP()
    {
        return $this->ide_CFOP;
    }

    /**
     * Returns the value of field ide_natOp
     *
     * @return string
     */
    public function getIdeNatOp()
    {
        return $this->ide_natOp;
    }

    /**
     * Returns the value of field ide_CFOP_ent
     *
     * @return string
     */
    public function getIdeCFOPEnt()
    {
        return $this->ide_CFOP_ent;
    }

    /**
     * Returns the value of field ide_natOp_ent
     *
     * @return string
     */
    public function getIdeNatOpEnt()
    {
        return $this->ide_natOp_ent;
    }

    /**
     * Returns the value of field ide_forPag
     *
     * @return string
     */
    public function getIdeForPag()
    {
        return $this->ide_forPag;
    }

    /**
     * Returns the value of field ide_mod
     *
     * @return string
     */
    public function getIdeMod()
    {
        return $this->ide_mod;
    }

    /**
     * Returns the value of field ide_serie
     *
     * @return string
     */
    public function getIdeSerie()
    {
        return $this->ide_serie;
    }

    /**
     * Returns the value of field ide_nCT
     *
     * @return string
     */
    public function getIdeNCT()
    {
        return $this->ide_nCT;
    }

    /**
     * Returns the value of field ide_dhEmi
     *
     * @return string
     */
    public function getIdeDhEmi()
    {
        return $this->ide_dhEmi;
    }

    /**
     * Returns the value of field ide_tpImp
     *
     * @return string
     */
    public function getIdeTpImp()
    {
        return $this->ide_tpImp;
    }

    /**
     * Returns the value of field ide_tpEmis
     *
     * @return string
     */
    public function getIdeTpEmis()
    {
        return $this->ide_tpEmis;
    }

    /**
     * Returns the value of field ide_cDV
     *
     * @return string
     */
    public function getIdeCDV()
    {
        return $this->ide_cDV;
    }

    /**
     * Returns the value of field ide_tpAmb
     *
     * @return string
     */
    public function getIdeTpAmb()
    {
        return $this->ide_tpAmb;
    }

    /**
     * Returns the value of field ide_tpCTe
     *
     * @return string
     */
    public function getIdeTpCTe()
    {
        return $this->ide_tpCTe;
    }

    /**
     * Returns the value of field ide_procEmi
     *
     * @return string
     */
    public function getIdeProcEmi()
    {
        return $this->ide_procEmi;
    }

    /**
     * Returns the value of field ide_verProc
     *
     * @return string
     */
    public function getIdeVerProc()
    {
        return $this->ide_verProc;
    }

    /**
     * Returns the value of field ide_cMunEnv
     *
     * @return string
     */
    public function getIdeCMunEnv()
    {
        return $this->ide_cMunEnv;
    }

    /**
     * Returns the value of field ide_xMunEnv
     *
     * @return string
     */
    public function getIdeXMunEnv()
    {
        return $this->ide_xMunEnv;
    }

    /**
     * Returns the value of field ide_UFEnv
     *
     * @return string
     */
    public function getIdeUFEnv()
    {
        return $this->ide_UFEnv;
    }

    /**
     * Returns the value of field ide_modal
     *
     * @return string
     */
    public function getIdeModal()
    {
        return $this->ide_modal;
    }

    /**
     * Returns the value of field ide_tpServ
     *
     * @return string
     */
    public function getIdeTpServ()
    {
        return $this->ide_tpServ;
    }

    /**
     * Returns the value of field ide_cMunIni
     *
     * @return string
     */
    public function getIdeCMunIni()
    {
        return $this->ide_cMunIni;
    }

    /**
     * Returns the value of field ide_xMunIni
     *
     * @return string
     */
    public function getIdeXMunIni()
    {
        return $this->ide_xMunIni;
    }

    /**
     * Returns the value of field ide_UFIni
     *
     * @return string
     */
    public function getIdeUFIni()
    {
        return $this->ide_UFIni;
    }

    /**
     * Returns the value of field ide_cMunFim
     *
     * @return string
     */
    public function getIdeCMunFim()
    {
        return $this->ide_cMunFim;
    }

    /**
     * Returns the value of field ide_xMunFim
     *
     * @return string
     */
    public function getIdeXMunFim()
    {
        return $this->ide_xMunFim;
    }

    /**
     * Returns the value of field ide_UFFim
     *
     * @return string
     */
    public function getIdeUFFim()
    {
        return $this->ide_UFFim;
    }

    /**
     * Returns the value of field ide_retira
     *
     * @return string
     */
    public function getIdeRetira()
    {
        return $this->ide_retira;
    }

    /**
     * Returns the value of field ide_toma03_toma
     *
     * @return string
     */
    public function getIdeToma03Toma()
    {
        return $this->ide_toma03_toma;
    }

    /**
     * Returns the value of field chCTe
     *
     * @return string
     */
    public function getChCTe()
    {
        return $this->chCTe;
    }

    /**
     * Returns the value of field compl_xEmi
     *
     * @return string
     */
    public function getComplXEmi()
    {
        return $this->compl_xEmi;
    }

    /**
     * Returns the value of field compl_fluxo_xOrig
     *
     * @return string
     */
    public function getComplFluxoXOrig()
    {
        return $this->compl_fluxo_xOrig;
    }

    /**
     * Returns the value of field compl_fluxo_xDest
     *
     * @return string
     */
    public function getComplFluxoXDest()
    {
        return $this->compl_fluxo_xDest;
    }

    /**
     * Returns the value of field compl_Entrega_semData_tpPer
     *
     * @return string
     */
    public function getComplEntregaSemDataTpPer()
    {
        return $this->compl_Entrega_semData_tpPer;
    }

    /**
     * Returns the value of field compl_Entrega_semHora_tpHor
     *
     * @return string
     */
    public function getComplEntregaSemHoraTpHor()
    {
        return $this->compl_Entrega_semHora_tpHor;
    }

    /**
     * Returns the value of field compl_origCalc
     *
     * @return string
     */
    public function getComplOrigCalc()
    {
        return $this->compl_origCalc;
    }

    /**
     * Returns the value of field compl_destCalc
     *
     * @return string
     */
    public function getComplDestCalc()
    {
        return $this->compl_destCalc;
    }

    /**
     * Returns the value of field compl_xObs
     *
     * @return string
     */
    public function getComplXObs()
    {
        return $this->compl_xObs;
    }

    /**
     * Returns the value of field emit_CNPJ
     *
     * @return string
     */
    public function getEmitCNPJ()
    {
        return $this->emit_CNPJ;
    }

    /**
     * Returns the value of field emit_IE
     *
     * @return string
     */
    public function getEmitIE()
    {
        return $this->emit_IE;
    }

    /**
     * Returns the value of field emit_xID
     *
     * @return integer
     */
    public function getEmitXID()
    {
        return $this->emit_xID;
    }

    /**
     * Returns the value of field emit_xNome
     *
     * @return string
     */
    public function getEmitXNome()
    {
        return $this->emit_xNome;
    }

    /**
     * Returns the value of field emit_xFant
     *
     * @return string
     */
    public function getEmitXFant()
    {
        return $this->emit_xFant;
    }

    /**
     * Returns the value of field emit_enderEmit_xLgr
     *
     * @return string
     */
    public function getEmitEnderEmitXLgr()
    {
        return $this->emit_enderEmit_xLgr;
    }

    /**
     * Returns the value of field emit_enderEmit_nro
     *
     * @return string
     */
    public function getEmitEnderEmitNro()
    {
        return $this->emit_enderEmit_nro;
    }

    /**
     * Returns the value of field emit_enderEmit_xBairro
     *
     * @return string
     */
    public function getEmitEnderEmitXBairro()
    {
        return $this->emit_enderEmit_xBairro;
    }

    /**
     * Returns the value of field emit_enderEmit_cMun
     *
     * @return string
     */
    public function getEmitEnderEmitCMun()
    {
        return $this->emit_enderEmit_cMun;
    }

    /**
     * Returns the value of field emit_enderEmit_xMun
     *
     * @return string
     */
    public function getEmitEnderEmitXMun()
    {
        return $this->emit_enderEmit_xMun;
    }

    /**
     * Returns the value of field emit_enderEmit_CEP
     *
     * @return string
     */
    public function getEmitEnderEmitCEP()
    {
        return $this->emit_enderEmit_CEP;
    }

    /**
     * Returns the value of field emit_enderEmit_UF
     *
     * @return string
     */
    public function getEmitEnderEmitUF()
    {
        return $this->emit_enderEmit_UF;
    }

    /**
     * Returns the value of field rem_CNPJ
     *
     * @return string
     */
    public function getRemCNPJ()
    {
        return $this->rem_CNPJ;
    }

    /**
     * Returns the value of field rem_IE
     *
     * @return string
     */
    public function getRemIE()
    {
        return $this->rem_IE;
    }

    /**
     * Returns the value of field rem_xNome
     *
     * @return string
     */
    public function getRemXNome()
    {
        return $this->rem_xNome;
    }

    /**
     * Returns the value of field rem_xFant
     *
     * @return string
     */
    public function getRemXFant()
    {
        return $this->rem_xFant;
    }

    /**
     * Returns the value of field rem_fone
     *
     * @return string
     */
    public function getRemFone()
    {
        return $this->rem_fone;
    }

    /**
     * Returns the value of field rem_enderReme_xLgr
     *
     * @return string
     */
    public function getRemEnderRemeXLgr()
    {
        return $this->rem_enderReme_xLgr;
    }

    /**
     * Returns the value of field rem_enderReme_nro
     *
     * @return string
     */
    public function getRemEnderRemeNro()
    {
        return $this->rem_enderReme_nro;
    }

    /**
     * Returns the value of field rem_enderReme_xCpl
     *
     * @return string
     */
    public function getRemEnderRemeXCpl()
    {
        return $this->rem_enderReme_xCpl;
    }

    /**
     * Returns the value of field rem_enderReme_xBairro
     *
     * @return string
     */
    public function getRemEnderRemeXBairro()
    {
        return $this->rem_enderReme_xBairro;
    }

    /**
     * Returns the value of field rem_enderReme_cMun
     *
     * @return string
     */
    public function getRemEnderRemeCMun()
    {
        return $this->rem_enderReme_cMun;
    }

    /**
     * Returns the value of field rem_enderReme_xMun
     *
     * @return string
     */
    public function getRemEnderRemeXMun()
    {
        return $this->rem_enderReme_xMun;
    }

    /**
     * Returns the value of field rem_enderReme_CEP
     *
     * @return string
     */
    public function getRemEnderRemeCEP()
    {
        return $this->rem_enderReme_CEP;
    }

    /**
     * Returns the value of field rem_enderReme_UF
     *
     * @return string
     */
    public function getRemEnderRemeUF()
    {
        return $this->rem_enderReme_UF;
    }

    /**
     * Returns the value of field rem_enderReme_cPais
     *
     * @return string
     */
    public function getRemEnderRemeCPais()
    {
        return $this->rem_enderReme_cPais;
    }

    /**
     * Returns the value of field rem_enderReme_xPais
     *
     * @return string
     */
    public function getRemEnderRemeXPais()
    {
        return $this->rem_enderReme_xPais;
    }

    /**
     * Returns the value of field dest_CNPJ
     *
     * @return string
     */
    public function getDestCNPJ()
    {
        return $this->dest_CNPJ;
    }

    /**
     * Returns the value of field dest_IE
     *
     * @return string
     */
    public function getDestIE()
    {
        return $this->dest_IE;
    }

    /**
     * Returns the value of field dest_xNome
     *
     * @return string
     */
    public function getDestXNome()
    {
        return $this->dest_xNome;
    }

    /**
     * Returns the value of field dest_enderDest_xLgr
     *
     * @return string
     */
    public function getDestEnderDestXLgr()
    {
        return $this->dest_enderDest_xLgr;
    }

    /**
     * Returns the value of field dest_enderDest_nro
     *
     * @return string
     */
    public function getDestEnderDestNro()
    {
        return $this->dest_enderDest_nro;
    }

    /**
     * Returns the value of field dest_enderDest_xBairro
     *
     * @return string
     */
    public function getDestEnderDestXBairro()
    {
        return $this->dest_enderDest_xBairro;
    }

    /**
     * Returns the value of field dest_enderDest_cMun
     *
     * @return string
     */
    public function getDestEnderDestCMun()
    {
        return $this->dest_enderDest_cMun;
    }

    /**
     * Returns the value of field dest_enderDest_xMun
     *
     * @return string
     */
    public function getDestEnderDestXMun()
    {
        return $this->dest_enderDest_xMun;
    }

    /**
     * Returns the value of field dest_enderDest_CEP
     *
     * @return string
     */
    public function getDestEnderDestCEP()
    {
        return $this->dest_enderDest_CEP;
    }

    /**
     * Returns the value of field dest_enderDest_UF
     *
     * @return string
     */
    public function getDestEnderDestUF()
    {
        return $this->dest_enderDest_UF;
    }

    /**
     * Returns the value of field dest_enderDest_xPais
     *
     * @return string
     */
    public function getDestEnderDestXPais()
    {
        return $this->dest_enderDest_xPais;
    }

    /**
     * Returns the value of field vPrest_vTPrest
     *
     * @return string
     */
    public function getVPrestVTPrest()
    {
        return $this->vPrest_vTPrest;
    }

    /**
     * Returns the value of field vPrest_vRec
     *
     * @return string
     */
    public function getVPrestVRec()
    {
        return $this->vPrest_vRec;
    }

    /**
     * Returns the value of field vPrest_Comp_0_xNome
     *
     * @return string
     */
    public function getVPrestComp0XNome()
    {
        return $this->vPrest_Comp_0_xNome;
    }

    /**
     * Returns the value of field vPrest_Comp_0_vComp
     *
     * @return string
     */
    public function getVPrestComp0VComp()
    {
        return $this->vPrest_Comp_0_vComp;
    }

    /**
     * Returns the value of field vPrest_Comp_1_xNome
     *
     * @return string
     */
    public function getVPrestComp1XNome()
    {
        return $this->vPrest_Comp_1_xNome;
    }

    /**
     * Returns the value of field vPrest_Comp_1_vComp
     *
     * @return string
     */
    public function getVPrestComp1VComp()
    {
        return $this->vPrest_Comp_1_vComp;
    }

    /**
     * Returns the value of field vPrest_Comp_2_xNome
     *
     * @return string
     */
    public function getVPrestComp2XNome()
    {
        return $this->vPrest_Comp_2_xNome;
    }

    /**
     * Returns the value of field vPrest_Comp_2_vComp
     *
     * @return string
     */
    public function getVPrestComp2VComp()
    {
        return $this->vPrest_Comp_2_vComp;
    }

    /**
     * Returns the value of field imp_CST
     *
     * @return string
     */
    public function getImpCST()
    {
        return $this->imp_CST;
    }

    /**
     * Returns the value of field imp_infAdFisco
     *
     * @return string
     */
    public function getImpInfAdFisco()
    {
        return $this->imp_infAdFisco;
    }

    /**
     * Returns the value of field infCTeNorm_infCarga_vCarga
     *
     * @return string
     */
    public function getInfCTeNormInfCargaVCarga()
    {
        return $this->infCTeNorm_infCarga_vCarga;
    }

    /**
     * Returns the value of field infCTeNorm_infCarga_proPred
     *
     * @return string
     */
    public function getInfCTeNormInfCargaProPred()
    {
        return $this->infCTeNorm_infCarga_proPred;
    }

    /**
     * Returns the value of field infCTeNorm_infCarga_xOutCat
     *
     * @return string
     */
    public function getInfCTeNormInfCargaXOutCat()
    {
        return $this->infCTeNorm_infCarga_xOutCat;
    }

    /**
     * Returns the value of field infCTeNorm_infCarga_infQ_0_cUnid
     *
     * @return string
     */
    public function getInfCTeNormInfCargaInfQ0CUnid()
    {
        return $this->infCTeNorm_infCarga_infQ_0_cUnid;
    }

    /**
     * Returns the value of field infCTeNorm_infCarga_infQ_0_tpMed
     *
     * @return string
     */
    public function getInfCTeNormInfCargaInfQ0TpMed()
    {
        return $this->infCTeNorm_infCarga_infQ_0_tpMed;
    }

    /**
     * Returns the value of field infCTeNorm_infCarga_infQ_0_qCarga
     *
     * @return string
     */
    public function getInfCTeNormInfCargaInfQ0QCarga()
    {
        return $this->infCTeNorm_infCarga_infQ_0_qCarga;
    }

    /**
     * Returns the value of field infCTeNorm_infCarga_infQ_1_cUnid
     *
     * @return string
     */
    public function getInfCTeNormInfCargaInfQ1CUnid()
    {
        return $this->infCTeNorm_infCarga_infQ_1_cUnid;
    }

    /**
     * Returns the value of field infCTeNorm_infCarga_infQ_1_tpMed
     *
     * @return string
     */
    public function getInfCTeNormInfCargaInfQ1TpMed()
    {
        return $this->infCTeNorm_infCarga_infQ_1_tpMed;
    }

    /**
     * Returns the value of field infCTeNorm_infCarga_infQ_1_qCarga
     *
     * @return string
     */
    public function getInfCTeNormInfCargaInfQ1QCarga()
    {
        return $this->infCTeNorm_infCarga_infQ_1_qCarga;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNFe_chave
     *
     * @return string
     */
    public function getInfCTeNormInfDocInfNFeChave()
    {
        return $this->infCTeNorm_infDoc_infNFe_chave;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_mod
     *
     * @return string
     */
    public function getInfCTeNormInfDocInfNFMod()
    {
        return $this->infCTeNorm_infDoc_infNF_mod;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_serie
     *
     * @return string
     */
    public function getInfCTeNormInfDocInfNFSerie()
    {
        return $this->infCTeNorm_infDoc_infNF_serie;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_nDoc
     *
     * @return string
     */
    public function getInfCTeNormInfDocInfNFNDoc()
    {
        return $this->infCTeNorm_infDoc_infNF_nDoc;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_dEmi
     *
     * @return string
     */
    public function getInfCTeNormInfDocInfNFDEmi()
    {
        return $this->infCTeNorm_infDoc_infNF_dEmi;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_vBC
     *
     * @return double
     */
    public function getInfCTeNormInfDocInfNFVBC()
    {
        return $this->infCTeNorm_infDoc_infNF_vBC;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_vICMS
     *
     * @return double
     */
    public function getInfCTeNormInfDocInfNFVICMS()
    {
        return $this->infCTeNorm_infDoc_infNF_vICMS;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_vBCST
     *
     * @return double
     */
    public function getInfCTeNormInfDocInfNFVBCST()
    {
        return $this->infCTeNorm_infDoc_infNF_vBCST;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_vST
     *
     * @return double
     */
    public function getInfCTeNormInfDocInfNFVST()
    {
        return $this->infCTeNorm_infDoc_infNF_vST;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_vProd
     *
     * @return double
     */
    public function getInfCTeNormInfDocInfNFVProd()
    {
        return $this->infCTeNorm_infDoc_infNF_vProd;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_vNF
     *
     * @return double
     */
    public function getInfCTeNormInfDocInfNFVNF()
    {
        return $this->infCTeNorm_infDoc_infNF_vNF;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_nCFOP
     *
     * @return string
     */
    public function getInfCTeNormInfDocInfNFNCFOP()
    {
        return $this->infCTeNorm_infDoc_infNF_nCFOP;
    }

    /**
     * Returns the value of field infCTeNorm_infDoc_infNF_nPeso
     *
     * @return string
     */
    public function getInfCTeNormInfDocInfNFNPeso()
    {
        return $this->infCTeNorm_infDoc_infNF_nPeso;
    }

    /**
     * Returns the value of field infCTeNorm_seg_respSeg
     *
     * @return string
     */
    public function getInfCTeNormSegRespSeg()
    {
        return $this->infCTeNorm_seg_respSeg;
    }

    /**
     * Returns the value of field infCTeNorm_seg_xSeg
     *
     * @return string
     */
    public function getInfCTeNormSegXSeg()
    {
        return $this->infCTeNorm_seg_xSeg;
    }

    /**
     * Returns the value of field infCTeNorm_seg_nApol
     *
     * @return string
     */
    public function getInfCTeNormSegNApol()
    {
        return $this->infCTeNorm_seg_nApol;
    }

    /**
     * Returns the value of field infCTeNorm_seg_vCarga
     *
     * @return string
     */
    public function getInfCTeNormSegVCarga()
    {
        return $this->infCTeNorm_seg_vCarga;
    }

    /**
     * Returns the value of field infCTeNorm_infModal_rodo_RNTRC
     *
     * @return string
     */
    public function getInfCTeNormInfModalRodoRNTRC()
    {
        return $this->infCTeNorm_infModal_rodo_RNTRC;
    }

    /**
     * Returns the value of field infCTeNorm_infModal_rodo_dPrev
     *
     * @return string
     */
    public function getInfCTeNormInfModalRodoDPrev()
    {
        return $this->infCTeNorm_infModal_rodo_dPrev;
    }

    /**
     * Returns the value of field infCTeNorm_infModal_rodo_lota
     *
     * @return string
     */
    public function getInfCTeNormInfModalRodoLota()
    {
        return $this->infCTeNorm_infModal_rodo_lota;
    }

    /**
     * Returns the value of field autXML_0_CNPJ
     *
     * @return string
     */
    public function getAutXML0CNPJ()
    {
        return $this->autXML_0_CNPJ;
    }

    /**
     * Returns the value of field autXML_1_CNPJ
     *
     * @return string
     */
    public function getAutXML1CNPJ()
    {
        return $this->autXML_1_CNPJ;
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
     * Returns the value of field xml
     *
     * @return string
     */
    public function getXml()
    {
        return $this->xml;
    }

    /**
     * Returns the value of field tipo_importacao_cte
     *
     * @return string
     */
    public function getTipoImportacaoCte()
    {
        return $this->tipo_importacao_cte;
    }

    /**
     * Returns the value of field indTipoPagamento
     *
     * @return integer
     */
    public function getIndTipoPagamento()
    {
        return $this->indTipoPagamento;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporteHasNf', 'cd_conhecimento_transporte', array('alias' => 'ConhecimentoTransporteHasNf'));
        $this->hasMany('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporteProdutos', 'cd_conhecimento_transporte', array('alias' => 'ConhecimentoTransporteProdutos'));
        $this->hasMany('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporteServicos', 'cd_conhecimento_transporte', array('alias' => 'ConhecimentoTransporteServicos'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->hasMany('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporteHasNf', 'cd_conhecimento_transporte', NULL);
        $this->hasMany('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporteProdutos', 'cd_conhecimento_transporte', NULL);
        $this->hasMany('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporteServicos', 'cd_conhecimento_transporte', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'conhecimento_transporte';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConhecimentoTransporte[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConhecimentoTransporte
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
            'cd_conhecimento_transporte' => 'cd_conhecimento_transporte',
            'cd_empresa' => 'cd_empresa',
            'cond_pagto_cobranca' => 'cond_pagto_cobranca',
            'cod_modelo_fiscal' => 'cod_modelo_fiscal',
            'cd_situacao_fiscal' => 'cd_situacao_fiscal',
            'ide_cUF' => 'ide_cUF',
            'ide_cCT' => 'ide_cCT',
            'ide_CFOP' => 'ide_CFOP',
            'ide_natOp' => 'ide_natOp',
            'ide_CFOP_ent' => 'ide_CFOP_ent',
            'ide_natOp_ent' => 'ide_natOp_ent',
            'ide_forPag' => 'ide_forPag',
            'ide_mod' => 'ide_mod',
            'ide_serie' => 'ide_serie',
            'ide_nCT' => 'ide_nCT',
            'ide_dhEmi' => 'ide_dhEmi',
            'ide_tpImp' => 'ide_tpImp',
            'ide_tpEmis' => 'ide_tpEmis',
            'ide_cDV' => 'ide_cDV',
            'ide_tpAmb' => 'ide_tpAmb',
            'ide_tpCTe' => 'ide_tpCTe',
            'ide_procEmi' => 'ide_procEmi',
            'ide_verProc' => 'ide_verProc',
            'ide_cMunEnv' => 'ide_cMunEnv',
            'ide_xMunEnv' => 'ide_xMunEnv',
            'ide_UFEnv' => 'ide_UFEnv',
            'ide_modal' => 'ide_modal',
            'ide_tpServ' => 'ide_tpServ',
            'ide_cMunIni' => 'ide_cMunIni',
            'ide_xMunIni' => 'ide_xMunIni',
            'ide_UFIni' => 'ide_UFIni',
            'ide_cMunFim' => 'ide_cMunFim',
            'ide_xMunFim' => 'ide_xMunFim',
            'ide_UFFim' => 'ide_UFFim',
            'ide_retira' => 'ide_retira',
            'ide_toma03_toma' => 'ide_toma03_toma',
            'chCTe' => 'chCTe',
            'compl_xEmi' => 'compl_xEmi',
            'compl_fluxo_xOrig' => 'compl_fluxo_xOrig',
            'compl_fluxo_xDest' => 'compl_fluxo_xDest',
            'compl_Entrega_semData_tpPer' => 'compl_Entrega_semData_tpPer',
            'compl_Entrega_semHora_tpHor' => 'compl_Entrega_semHora_tpHor',
            'compl_origCalc' => 'compl_origCalc',
            'compl_destCalc' => 'compl_destCalc',
            'compl_xObs' => 'compl_xObs',
            'emit_CNPJ' => 'emit_CNPJ',
            'emit_IE' => 'emit_IE',
            'emit_xID' => 'emit_xID',
            'emit_xNome' => 'emit_xNome',
            'emit_xFant' => 'emit_xFant',
            'emit_enderEmit_xLgr' => 'emit_enderEmit_xLgr',
            'emit_enderEmit_nro' => 'emit_enderEmit_nro',
            'emit_enderEmit_xBairro' => 'emit_enderEmit_xBairro',
            'emit_enderEmit_cMun' => 'emit_enderEmit_cMun',
            'emit_enderEmit_xMun' => 'emit_enderEmit_xMun',
            'emit_enderEmit_CEP' => 'emit_enderEmit_CEP',
            'emit_enderEmit_UF' => 'emit_enderEmit_UF',
            'rem_CNPJ' => 'rem_CNPJ',
            'rem_IE' => 'rem_IE',
            'rem_xNome' => 'rem_xNome',
            'rem_xFant' => 'rem_xFant',
            'rem_fone' => 'rem_fone',
            'rem_enderReme_xLgr' => 'rem_enderReme_xLgr',
            'rem_enderReme_nro' => 'rem_enderReme_nro',
            'rem_enderReme_xCpl' => 'rem_enderReme_xCpl',
            'rem_enderReme_xBairro' => 'rem_enderReme_xBairro',
            'rem_enderReme_cMun' => 'rem_enderReme_cMun',
            'rem_enderReme_xMun' => 'rem_enderReme_xMun',
            'rem_enderReme_CEP' => 'rem_enderReme_CEP',
            'rem_enderReme_UF' => 'rem_enderReme_UF',
            'rem_enderReme_cPais' => 'rem_enderReme_cPais',
            'rem_enderReme_xPais' => 'rem_enderReme_xPais',
            'dest_CNPJ' => 'dest_CNPJ',
            'dest_IE' => 'dest_IE',
            'dest_xNome' => 'dest_xNome',
            'dest_enderDest_xLgr' => 'dest_enderDest_xLgr',
            'dest_enderDest_nro' => 'dest_enderDest_nro',
            'dest_enderDest_xBairro' => 'dest_enderDest_xBairro',
            'dest_enderDest_cMun' => 'dest_enderDest_cMun',
            'dest_enderDest_xMun' => 'dest_enderDest_xMun',
            'dest_enderDest_CEP' => 'dest_enderDest_CEP',
            'dest_enderDest_UF' => 'dest_enderDest_UF',
            'dest_enderDest_xPais' => 'dest_enderDest_xPais',
            'vPrest_vTPrest' => 'vPrest_vTPrest',
            'vPrest_vRec' => 'vPrest_vRec',
            'vPrest_Comp_0_xNome' => 'vPrest_Comp_0_xNome',
            'vPrest_Comp_0_vComp' => 'vPrest_Comp_0_vComp',
            'vPrest_Comp_1_xNome' => 'vPrest_Comp_1_xNome',
            'vPrest_Comp_1_vComp' => 'vPrest_Comp_1_vComp',
            'vPrest_Comp_2_xNome' => 'vPrest_Comp_2_xNome',
            'vPrest_Comp_2_vComp' => 'vPrest_Comp_2_vComp',
            'imp_CST' => 'imp_CST',
            'imp_infAdFisco' => 'imp_infAdFisco',
            'infCTeNorm_infCarga_vCarga' => 'infCTeNorm_infCarga_vCarga',
            'infCTeNorm_infCarga_proPred' => 'infCTeNorm_infCarga_proPred',
            'infCTeNorm_infCarga_xOutCat' => 'infCTeNorm_infCarga_xOutCat',
            'infCTeNorm_infCarga_infQ_0_cUnid' => 'infCTeNorm_infCarga_infQ_0_cUnid',
            'infCTeNorm_infCarga_infQ_0_tpMed' => 'infCTeNorm_infCarga_infQ_0_tpMed',
            'infCTeNorm_infCarga_infQ_0_qCarga' => 'infCTeNorm_infCarga_infQ_0_qCarga',
            'infCTeNorm_infCarga_infQ_1_cUnid' => 'infCTeNorm_infCarga_infQ_1_cUnid',
            'infCTeNorm_infCarga_infQ_1_tpMed' => 'infCTeNorm_infCarga_infQ_1_tpMed',
            'infCTeNorm_infCarga_infQ_1_qCarga' => 'infCTeNorm_infCarga_infQ_1_qCarga',
            'infCTeNorm_infDoc_infNFe_chave' => 'infCTeNorm_infDoc_infNFe_chave',
            'infCTeNorm_infDoc_infNF_mod' => 'infCTeNorm_infDoc_infNF_mod',
            'infCTeNorm_infDoc_infNF_serie' => 'infCTeNorm_infDoc_infNF_serie',
            'infCTeNorm_infDoc_infNF_nDoc' => 'infCTeNorm_infDoc_infNF_nDoc',
            'infCTeNorm_infDoc_infNF_dEmi' => 'infCTeNorm_infDoc_infNF_dEmi',
            'infCTeNorm_infDoc_infNF_vBC' => 'infCTeNorm_infDoc_infNF_vBC',
            'infCTeNorm_infDoc_infNF_vICMS' => 'infCTeNorm_infDoc_infNF_vICMS',
            'infCTeNorm_infDoc_infNF_vBCST' => 'infCTeNorm_infDoc_infNF_vBCST',
            'infCTeNorm_infDoc_infNF_vST' => 'infCTeNorm_infDoc_infNF_vST',
            'infCTeNorm_infDoc_infNF_vProd' => 'infCTeNorm_infDoc_infNF_vProd',
            'infCTeNorm_infDoc_infNF_vNF' => 'infCTeNorm_infDoc_infNF_vNF',
            'infCTeNorm_infDoc_infNF_nCFOP' => 'infCTeNorm_infDoc_infNF_nCFOP',
            'infCTeNorm_infDoc_infNF_nPeso' => 'infCTeNorm_infDoc_infNF_nPeso',
            'infCTeNorm_seg_respSeg' => 'infCTeNorm_seg_respSeg',
            'infCTeNorm_seg_xSeg' => 'infCTeNorm_seg_xSeg',
            'infCTeNorm_seg_nApol' => 'infCTeNorm_seg_nApol',
            'infCTeNorm_seg_vCarga' => 'infCTeNorm_seg_vCarga',
            'infCTeNorm_infModal_rodo_RNTRC' => 'infCTeNorm_infModal_rodo_RNTRC',
            'infCTeNorm_infModal_rodo_dPrev' => 'infCTeNorm_infModal_rodo_dPrev',
            'infCTeNorm_infModal_rodo_lota' => 'infCTeNorm_infModal_rodo_lota',
            'autXML_0_CNPJ' => 'autXML_0_CNPJ',
            'autXML_1_CNPJ' => 'autXML_1_CNPJ',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'xml' => 'xml',
            'tipo_importacao_cte' => 'tipo_importacao_cte',
            'indTipoPagamento' => 'indTipoPagamento'
        );
    }

}
