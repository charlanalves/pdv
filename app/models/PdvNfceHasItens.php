<?php

namespace App\Models;

class PdvNfceHasItens extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_nfce_item;

    /**
     *
     * @var integer
     */
    protected $cd_nfce;

    /**
     *
     * @var integer
     */
    protected $cd_produto;

    /**
     *
     * @var string
     */
    protected $nome_produto;

    /**
     *
     * @var string
     */
    protected $cfop;

    /**
     *
     * @var string
     */
    protected $ncm;

    /**
     *
     * @var integer
     */
    protected $cst;

    /**
     *
     * @var string
     */
    protected $unidade_medida;

    /**
     *
     * @var integer
     */
    protected $quantidade;

    /**
     *
     * @var double
     */
    protected $vl_unitario;

    /**
     *
     * @var double
     */
    protected $vl_total_bruto;

    /**
     *
     * @var double
     */
    protected $bc_icms;

    /**
     *
     * @var double
     */
    protected $vl_icms;

    /**
     *
     * @var double
     */
    protected $vl_ipi;

    /**
     *
     * @var double
     */
    protected $icms;

    /**
     *
     * @var double
     */
    protected $ipi;

    /**
     *
     * @var integer
     */
    protected $sequencia_nota;

    /**
     *
     * @var double
     */
    protected $baseCalculoICMS_ST;

    /**
     *
     * @var double
     */
    protected $valorICMS_ST;

    /**
     *
     * @var integer
     */
    protected $cstCofins;

    /**
     *
     * @var integer
     */
    protected $cstPIS;

    /**
     *
     * @var double
     */
    protected $vl_desc;

    /**
     *
     * @var double
     */
    protected $vl_seguro;

    /**
     *
     * @var double
     */
    protected $vl_frete;

    /**
     *
     * @var double
     */
    protected $vl_outro;

    /**
     *
     * @var double
     */
    protected $vBCSTRet;

    /**
     *
     * @var double
     */
    protected $vICMSSTRet;

    /**
     *
     * @var double
     */
    protected $vBCSTDest;

    /**
     *
     * @var double
     */
    protected $vICMSSTDest;

    /**
     *
     * @var integer
     */
    protected $CSOSN;

    /**
     *
     * @var double
     */
    protected $pCredSN;

    /**
     *
     * @var double
     */
    protected $vCredICMSSN;

    /**
     *
     * @var string
     */
    protected $ipi_CNPJProd;

    /**
     *
     * @var string
     */
    protected $ipi_cSelo;

    /**
     *
     * @var string
     */
    protected $ipi_qSelo;

    /**
     *
     * @var integer
     */
    protected $ipi_qUnid;

    /**
     *
     * @var double
     */
    protected $ipi_vUnid;

    /**
     *
     * @var double
     */
    protected $ipi_vIPI;

    /**
     *
     * @var double
     */
    protected $cofins_VCOFINS;

    /**
     *
     * @var double
     */
    protected $ii_vDespAdu;

    /**
     *
     * @var double
     */
    protected $ii_vII;

    /**
     *
     * @var double
     */
    protected $ii_vIOF;

    /**
     *
     * @var integer
     */
    protected $pis_cst;

    /**
     *
     * @var double
     */
    protected $pis_pPIS;

    /**
     *
     * @var double
     */
    protected $pis_vPIS;

    /**
     *
     * @var double
     */
    protected $pis_qBCProd;

    /**
     *
     * @var double
     */
    protected $pis_vAliqProd;

    /**
     *
     * @var integer
     */
    protected $cofins_cst;

    /**
     *
     * @var double
     */
    protected $cofins_qBCProd;

    /**
     *
     * @var double
     */
    protected $cofins_vAliqProd;

    /**
     *
     * @var double
     */
    protected $cofins_pCOFINS;

    /**
     *
     * @var string
     */
    protected $ean;

    /**
     * Method to set the value of field cd_nfce_item
     *
     * @param integer $cd_nfce_item
     * @return $this
     */
    public function setCdNfceItem($cd_nfce_item)
    {
        $this->cd_nfce_item = $cd_nfce_item;

        return $this;
    }

    /**
     * Method to set the value of field cd_nfce
     *
     * @param integer $cd_nfce
     * @return $this
     */
    public function setCdNfce($cd_nfce)
    {
        $this->cd_nfce = $cd_nfce;

        return $this;
    }

    /**
     * Method to set the value of field cd_produto
     *
     * @param integer $cd_produto
     * @return $this
     */
    public function setCdProduto($cd_produto)
    {
        $this->cd_produto = $cd_produto;

        return $this;
    }

    /**
     * Method to set the value of field nome_produto
     *
     * @param string $nome_produto
     * @return $this
     */
    public function setNomeProduto($nome_produto)
    {
        $this->nome_produto = $nome_produto;

        return $this;
    }

    /**
     * Method to set the value of field cfop
     *
     * @param string $cfop
     * @return $this
     */
    public function setCfop($cfop)
    {
        $this->cfop = $cfop;

        return $this;
    }

    /**
     * Method to set the value of field ncm
     *
     * @param string $ncm
     * @return $this
     */
    public function setNcm($ncm)
    {
        $this->ncm = $ncm;

        return $this;
    }

    /**
     * Method to set the value of field cst
     *
     * @param integer $cst
     * @return $this
     */
    public function setCst($cst)
    {
        $this->cst = $cst;

        return $this;
    }

    /**
     * Method to set the value of field unidade_medida
     *
     * @param string $unidade_medida
     * @return $this
     */
    public function setUnidadeMedida($unidade_medida)
    {
        $this->unidade_medida = $unidade_medida;

        return $this;
    }

    /**
     * Method to set the value of field quantidade
     *
     * @param integer $quantidade
     * @return $this
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Method to set the value of field vl_unitario
     *
     * @param double $vl_unitario
     * @return $this
     */
    public function setVlUnitario($vl_unitario)
    {
        $this->vl_unitario = $vl_unitario;

        return $this;
    }

    /**
     * Method to set the value of field vl_total_bruto
     *
     * @param double $vl_total_bruto
     * @return $this
     */
    public function setVlTotalBruto($vl_total_bruto)
    {
        $this->vl_total_bruto = $vl_total_bruto;

        return $this;
    }

    /**
     * Method to set the value of field bc_icms
     *
     * @param double $bc_icms
     * @return $this
     */
    public function setBcIcms($bc_icms)
    {
        $this->bc_icms = $bc_icms;

        return $this;
    }

    /**
     * Method to set the value of field vl_icms
     *
     * @param double $vl_icms
     * @return $this
     */
    public function setVlIcms($vl_icms)
    {
        $this->vl_icms = $vl_icms;

        return $this;
    }

    /**
     * Method to set the value of field vl_ipi
     *
     * @param double $vl_ipi
     * @return $this
     */
    public function setVlIpi($vl_ipi)
    {
        $this->vl_ipi = $vl_ipi;

        return $this;
    }

    /**
     * Method to set the value of field icms
     *
     * @param double $icms
     * @return $this
     */
    public function setIcms($icms)
    {
        $this->icms = $icms;

        return $this;
    }

    /**
     * Method to set the value of field ipi
     *
     * @param double $ipi
     * @return $this
     */
    public function setIpi($ipi)
    {
        $this->ipi = $ipi;

        return $this;
    }

    /**
     * Method to set the value of field sequencia_nota
     *
     * @param integer $sequencia_nota
     * @return $this
     */
    public function setSequenciaNota($sequencia_nota)
    {
        $this->sequencia_nota = $sequencia_nota;

        return $this;
    }

    /**
     * Method to set the value of field baseCalculoICMS_ST
     *
     * @param double $baseCalculoICMS_ST
     * @return $this
     */
    public function setBaseCalculoICMSST($baseCalculoICMS_ST)
    {
        $this->baseCalculoICMS_ST = $baseCalculoICMS_ST;

        return $this;
    }

    /**
     * Method to set the value of field valorICMS_ST
     *
     * @param double $valorICMS_ST
     * @return $this
     */
    public function setValorICMSST($valorICMS_ST)
    {
        $this->valorICMS_ST = $valorICMS_ST;

        return $this;
    }

    /**
     * Method to set the value of field cstCofins
     *
     * @param integer $cstCofins
     * @return $this
     */
    public function setCstCofins($cstCofins)
    {
        $this->cstCofins = $cstCofins;

        return $this;
    }

    /**
     * Method to set the value of field cstPIS
     *
     * @param integer $cstPIS
     * @return $this
     */
    public function setCstPIS($cstPIS)
    {
        $this->cstPIS = $cstPIS;

        return $this;
    }

    /**
     * Method to set the value of field vl_desc
     *
     * @param double $vl_desc
     * @return $this
     */
    public function setVlDesc($vl_desc)
    {
        $this->vl_desc = $vl_desc;

        return $this;
    }

    /**
     * Method to set the value of field vl_seguro
     *
     * @param double $vl_seguro
     * @return $this
     */
    public function setVlSeguro($vl_seguro)
    {
        $this->vl_seguro = $vl_seguro;

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
     * Method to set the value of field vl_outro
     *
     * @param double $vl_outro
     * @return $this
     */
    public function setVlOutro($vl_outro)
    {
        $this->vl_outro = $vl_outro;

        return $this;
    }

    /**
     * Method to set the value of field vBCSTRet
     *
     * @param double $vBCSTRet
     * @return $this
     */
    public function setVBCSTRet($vBCSTRet)
    {
        $this->vBCSTRet = $vBCSTRet;

        return $this;
    }

    /**
     * Method to set the value of field vICMSSTRet
     *
     * @param double $vICMSSTRet
     * @return $this
     */
    public function setVICMSSTRet($vICMSSTRet)
    {
        $this->vICMSSTRet = $vICMSSTRet;

        return $this;
    }

    /**
     * Method to set the value of field vBCSTDest
     *
     * @param double $vBCSTDest
     * @return $this
     */
    public function setVBCSTDest($vBCSTDest)
    {
        $this->vBCSTDest = $vBCSTDest;

        return $this;
    }

    /**
     * Method to set the value of field vICMSSTDest
     *
     * @param double $vICMSSTDest
     * @return $this
     */
    public function setVICMSSTDest($vICMSSTDest)
    {
        $this->vICMSSTDest = $vICMSSTDest;

        return $this;
    }

    /**
     * Method to set the value of field CSOSN
     *
     * @param integer $CSOSN
     * @return $this
     */
    public function setCSOSN($CSOSN)
    {
        $this->CSOSN = $CSOSN;

        return $this;
    }

    /**
     * Method to set the value of field pCredSN
     *
     * @param double $pCredSN
     * @return $this
     */
    public function setPCredSN($pCredSN)
    {
        $this->pCredSN = $pCredSN;

        return $this;
    }

    /**
     * Method to set the value of field vCredICMSSN
     *
     * @param double $vCredICMSSN
     * @return $this
     */
    public function setVCredICMSSN($vCredICMSSN)
    {
        $this->vCredICMSSN = $vCredICMSSN;

        return $this;
    }

    /**
     * Method to set the value of field ipi_CNPJProd
     *
     * @param string $ipi_CNPJProd
     * @return $this
     */
    public function setIpiCNPJProd($ipi_CNPJProd)
    {
        $this->ipi_CNPJProd = $ipi_CNPJProd;

        return $this;
    }

    /**
     * Method to set the value of field ipi_cSelo
     *
     * @param string $ipi_cSelo
     * @return $this
     */
    public function setIpiCSelo($ipi_cSelo)
    {
        $this->ipi_cSelo = $ipi_cSelo;

        return $this;
    }

    /**
     * Method to set the value of field ipi_qSelo
     *
     * @param string $ipi_qSelo
     * @return $this
     */
    public function setIpiQSelo($ipi_qSelo)
    {
        $this->ipi_qSelo = $ipi_qSelo;

        return $this;
    }

    /**
     * Method to set the value of field ipi_qUnid
     *
     * @param integer $ipi_qUnid
     * @return $this
     */
    public function setIpiQUnid($ipi_qUnid)
    {
        $this->ipi_qUnid = $ipi_qUnid;

        return $this;
    }

    /**
     * Method to set the value of field ipi_vUnid
     *
     * @param double $ipi_vUnid
     * @return $this
     */
    public function setIpiVUnid($ipi_vUnid)
    {
        $this->ipi_vUnid = $ipi_vUnid;

        return $this;
    }

    /**
     * Method to set the value of field ipi_vIPI
     *
     * @param double $ipi_vIPI
     * @return $this
     */
    public function setIpiVIPI($ipi_vIPI)
    {
        $this->ipi_vIPI = $ipi_vIPI;

        return $this;
    }

    /**
     * Method to set the value of field cofins_VCOFINS
     *
     * @param double $cofins_VCOFINS
     * @return $this
     */
    public function setCofinsVCOFINS($cofins_VCOFINS)
    {
        $this->cofins_VCOFINS = $cofins_VCOFINS;

        return $this;
    }

    /**
     * Method to set the value of field ii_vDespAdu
     *
     * @param double $ii_vDespAdu
     * @return $this
     */
    public function setIiVDespAdu($ii_vDespAdu)
    {
        $this->ii_vDespAdu = $ii_vDespAdu;

        return $this;
    }

    /**
     * Method to set the value of field ii_vII
     *
     * @param double $ii_vII
     * @return $this
     */
    public function setIiVII($ii_vII)
    {
        $this->ii_vII = $ii_vII;

        return $this;
    }

    /**
     * Method to set the value of field ii_vIOF
     *
     * @param double $ii_vIOF
     * @return $this
     */
    public function setIiVIOF($ii_vIOF)
    {
        $this->ii_vIOF = $ii_vIOF;

        return $this;
    }

    /**
     * Method to set the value of field pis_cst
     *
     * @param integer $pis_cst
     * @return $this
     */
    public function setPisCst($pis_cst)
    {
        $this->pis_cst = $pis_cst;

        return $this;
    }

    /**
     * Method to set the value of field pis_pPIS
     *
     * @param double $pis_pPIS
     * @return $this
     */
    public function setPisPPIS($pis_pPIS)
    {
        $this->pis_pPIS = $pis_pPIS;

        return $this;
    }

    /**
     * Method to set the value of field pis_vPIS
     *
     * @param double $pis_vPIS
     * @return $this
     */
    public function setPisVPIS($pis_vPIS)
    {
        $this->pis_vPIS = $pis_vPIS;

        return $this;
    }

    /**
     * Method to set the value of field pis_qBCProd
     *
     * @param double $pis_qBCProd
     * @return $this
     */
    public function setPisQBCProd($pis_qBCProd)
    {
        $this->pis_qBCProd = $pis_qBCProd;

        return $this;
    }

    /**
     * Method to set the value of field pis_vAliqProd
     *
     * @param double $pis_vAliqProd
     * @return $this
     */
    public function setPisVAliqProd($pis_vAliqProd)
    {
        $this->pis_vAliqProd = $pis_vAliqProd;

        return $this;
    }

    /**
     * Method to set the value of field cofins_cst
     *
     * @param integer $cofins_cst
     * @return $this
     */
    public function setCofinsCst($cofins_cst)
    {
        $this->cofins_cst = $cofins_cst;

        return $this;
    }

    /**
     * Method to set the value of field cofins_qBCProd
     *
     * @param double $cofins_qBCProd
     * @return $this
     */
    public function setCofinsQBCProd($cofins_qBCProd)
    {
        $this->cofins_qBCProd = $cofins_qBCProd;

        return $this;
    }

    /**
     * Method to set the value of field cofins_vAliqProd
     *
     * @param double $cofins_vAliqProd
     * @return $this
     */
    public function setCofinsVAliqProd($cofins_vAliqProd)
    {
        $this->cofins_vAliqProd = $cofins_vAliqProd;

        return $this;
    }

    /**
     * Method to set the value of field cofins_pCOFINS
     *
     * @param double $cofins_pCOFINS
     * @return $this
     */
    public function setCofinsPCOFINS($cofins_pCOFINS)
    {
        $this->cofins_pCOFINS = $cofins_pCOFINS;

        return $this;
    }

    /**
     * Method to set the value of field ean
     *
     * @param string $ean
     * @return $this
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Returns the value of field cd_nfce_item
     *
     * @return integer
     */
    public function getCdNfceItem()
    {
        return $this->cd_nfce_item;
    }

    /**
     * Returns the value of field cd_nfce
     *
     * @return integer
     */
    public function getCdNfce()
    {
        return $this->cd_nfce;
    }

    /**
     * Returns the value of field cd_produto
     *
     * @return integer
     */
    public function getCdProduto()
    {
        return $this->cd_produto;
    }

    /**
     * Returns the value of field nome_produto
     *
     * @return string
     */
    public function getNomeProduto()
    {
        return $this->nome_produto;
    }

    /**
     * Returns the value of field cfop
     *
     * @return string
     */
    public function getCfop()
    {
        return $this->cfop;
    }

    /**
     * Returns the value of field ncm
     *
     * @return string
     */
    public function getNcm()
    {
        return $this->ncm;
    }

    /**
     * Returns the value of field cst
     *
     * @return integer
     */
    public function getCst()
    {
        return $this->cst;
    }

    /**
     * Returns the value of field unidade_medida
     *
     * @return string
     */
    public function getUnidadeMedida()
    {
        return $this->unidade_medida;
    }

    /**
     * Returns the value of field quantidade
     *
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Returns the value of field vl_unitario
     *
     * @return double
     */
    public function getVlUnitario()
    {
        return $this->vl_unitario;
    }

    /**
     * Returns the value of field vl_total_bruto
     *
     * @return double
     */
    public function getVlTotalBruto()
    {
        return $this->vl_total_bruto;
    }

    /**
     * Returns the value of field bc_icms
     *
     * @return double
     */
    public function getBcIcms()
    {
        return $this->bc_icms;
    }

    /**
     * Returns the value of field vl_icms
     *
     * @return double
     */
    public function getVlIcms()
    {
        return $this->vl_icms;
    }

    /**
     * Returns the value of field vl_ipi
     *
     * @return double
     */
    public function getVlIpi()
    {
        return $this->vl_ipi;
    }

    /**
     * Returns the value of field icms
     *
     * @return double
     */
    public function getIcms()
    {
        return $this->icms;
    }

    /**
     * Returns the value of field ipi
     *
     * @return double
     */
    public function getIpi()
    {
        return $this->ipi;
    }

    /**
     * Returns the value of field sequencia_nota
     *
     * @return integer
     */
    public function getSequenciaNota()
    {
        return $this->sequencia_nota;
    }

    /**
     * Returns the value of field baseCalculoICMS_ST
     *
     * @return double
     */
    public function getBaseCalculoICMSST()
    {
        return $this->baseCalculoICMS_ST;
    }

    /**
     * Returns the value of field valorICMS_ST
     *
     * @return double
     */
    public function getValorICMSST()
    {
        return $this->valorICMS_ST;
    }

    /**
     * Returns the value of field cstCofins
     *
     * @return integer
     */
    public function getCstCofins()
    {
        return $this->cstCofins;
    }

    /**
     * Returns the value of field cstPIS
     *
     * @return integer
     */
    public function getCstPIS()
    {
        return $this->cstPIS;
    }

    /**
     * Returns the value of field vl_desc
     *
     * @return double
     */
    public function getVlDesc()
    {
        return $this->vl_desc;
    }

    /**
     * Returns the value of field vl_seguro
     *
     * @return double
     */
    public function getVlSeguro()
    {
        return $this->vl_seguro;
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
     * Returns the value of field vl_outro
     *
     * @return double
     */
    public function getVlOutro()
    {
        return $this->vl_outro;
    }

    /**
     * Returns the value of field vBCSTRet
     *
     * @return double
     */
    public function getVBCSTRet()
    {
        return $this->vBCSTRet;
    }

    /**
     * Returns the value of field vICMSSTRet
     *
     * @return double
     */
    public function getVICMSSTRet()
    {
        return $this->vICMSSTRet;
    }

    /**
     * Returns the value of field vBCSTDest
     *
     * @return double
     */
    public function getVBCSTDest()
    {
        return $this->vBCSTDest;
    }

    /**
     * Returns the value of field vICMSSTDest
     *
     * @return double
     */
    public function getVICMSSTDest()
    {
        return $this->vICMSSTDest;
    }

    /**
     * Returns the value of field CSOSN
     *
     * @return integer
     */
    public function getCSOSN()
    {
        return $this->CSOSN;
    }

    /**
     * Returns the value of field pCredSN
     *
     * @return double
     */
    public function getPCredSN()
    {
        return $this->pCredSN;
    }

    /**
     * Returns the value of field vCredICMSSN
     *
     * @return double
     */
    public function getVCredICMSSN()
    {
        return $this->vCredICMSSN;
    }

    /**
     * Returns the value of field ipi_CNPJProd
     *
     * @return string
     */
    public function getIpiCNPJProd()
    {
        return $this->ipi_CNPJProd;
    }

    /**
     * Returns the value of field ipi_cSelo
     *
     * @return string
     */
    public function getIpiCSelo()
    {
        return $this->ipi_cSelo;
    }

    /**
     * Returns the value of field ipi_qSelo
     *
     * @return string
     */
    public function getIpiQSelo()
    {
        return $this->ipi_qSelo;
    }

    /**
     * Returns the value of field ipi_qUnid
     *
     * @return integer
     */
    public function getIpiQUnid()
    {
        return $this->ipi_qUnid;
    }

    /**
     * Returns the value of field ipi_vUnid
     *
     * @return double
     */
    public function getIpiVUnid()
    {
        return $this->ipi_vUnid;
    }

    /**
     * Returns the value of field ipi_vIPI
     *
     * @return double
     */
    public function getIpiVIPI()
    {
        return $this->ipi_vIPI;
    }

    /**
     * Returns the value of field cofins_VCOFINS
     *
     * @return double
     */
    public function getCofinsVCOFINS()
    {
        return $this->cofins_VCOFINS;
    }

    /**
     * Returns the value of field ii_vDespAdu
     *
     * @return double
     */
    public function getIiVDespAdu()
    {
        return $this->ii_vDespAdu;
    }

    /**
     * Returns the value of field ii_vII
     *
     * @return double
     */
    public function getIiVII()
    {
        return $this->ii_vII;
    }

    /**
     * Returns the value of field ii_vIOF
     *
     * @return double
     */
    public function getIiVIOF()
    {
        return $this->ii_vIOF;
    }

    /**
     * Returns the value of field pis_cst
     *
     * @return integer
     */
    public function getPisCst()
    {
        return $this->pis_cst;
    }

    /**
     * Returns the value of field pis_pPIS
     *
     * @return double
     */
    public function getPisPPIS()
    {
        return $this->pis_pPIS;
    }

    /**
     * Returns the value of field pis_vPIS
     *
     * @return double
     */
    public function getPisVPIS()
    {
        return $this->pis_vPIS;
    }

    /**
     * Returns the value of field pis_qBCProd
     *
     * @return double
     */
    public function getPisQBCProd()
    {
        return $this->pis_qBCProd;
    }

    /**
     * Returns the value of field pis_vAliqProd
     *
     * @return double
     */
    public function getPisVAliqProd()
    {
        return $this->pis_vAliqProd;
    }

    /**
     * Returns the value of field cofins_cst
     *
     * @return integer
     */
    public function getCofinsCst()
    {
        return $this->cofins_cst;
    }

    /**
     * Returns the value of field cofins_qBCProd
     *
     * @return double
     */
    public function getCofinsQBCProd()
    {
        return $this->cofins_qBCProd;
    }

    /**
     * Returns the value of field cofins_vAliqProd
     *
     * @return double
     */
    public function getCofinsVAliqProd()
    {
        return $this->cofins_vAliqProd;
    }

    /**
     * Returns the value of field cofins_pCOFINS
     *
     * @return double
     */
    public function getCofinsPCOFINS()
    {
        return $this->cofins_pCOFINS;
    }

    /**
     * Returns the value of field ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_nfce', 'App\Models\PdvNfce', 'cd_nfce', array('alias' => 'PdvNfce'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_nfce_has_itens';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvNfceHasItens[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvNfceHasItens
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
            'cd_nfce_item' => 'cd_nfce_item',
            'cd_nfce' => 'cd_nfce',
            'cd_produto' => 'cd_produto',
            'nome_produto' => 'nome_produto',
            'cfop' => 'cfop',
            'ncm' => 'ncm',
            'cst' => 'cst',
            'unidade_medida' => 'unidade_medida',
            'quantidade' => 'quantidade',
            'vl_unitario' => 'vl_unitario',
            'vl_total_bruto' => 'vl_total_bruto',
            'bc_icms' => 'bc_icms',
            'vl_icms' => 'vl_icms',
            'vl_ipi' => 'vl_ipi',
            'icms' => 'icms',
            'ipi' => 'ipi',
            'sequencia_nota' => 'sequencia_nota',
            'baseCalculoICMS_ST' => 'baseCalculoICMS_ST',
            'valorICMS_ST' => 'valorICMS_ST',
            'cstCofins' => 'cstCofins',
            'cstPIS' => 'cstPIS',
            'vl_desc' => 'vl_desc',
            'vl_seguro' => 'vl_seguro',
            'vl_frete' => 'vl_frete',
            'vl_outro' => 'vl_outro',
            'vBCSTRet' => 'vBCSTRet',
            'vICMSSTRet' => 'vICMSSTRet',
            'vBCSTDest' => 'vBCSTDest',
            'vICMSSTDest' => 'vICMSSTDest',
            'CSOSN' => 'CSOSN',
            'pCredSN' => 'pCredSN',
            'vCredICMSSN' => 'vCredICMSSN',
            'ipi_CNPJProd' => 'ipi_CNPJProd',
            'ipi_cSelo' => 'ipi_cSelo',
            'ipi_qSelo' => 'ipi_qSelo',
            'ipi_qUnid' => 'ipi_qUnid',
            'ipi_vUnid' => 'ipi_vUnid',
            'ipi_vIPI' => 'ipi_vIPI',
            'cofins_VCOFINS' => 'cofins_VCOFINS',
            'ii_vDespAdu' => 'ii_vDespAdu',
            'ii_vII' => 'ii_vII',
            'ii_vIOF' => 'ii_vIOF',
            'pis_cst' => 'pis_cst',
            'pis_pPIS' => 'pis_pPIS',
            'pis_vPIS' => 'pis_vPIS',
            'pis_qBCProd' => 'pis_qBCProd',
            'pis_vAliqProd' => 'pis_vAliqProd',
            'cofins_cst' => 'cofins_cst',
            'cofins_qBCProd' => 'cofins_qBCProd',
            'cofins_vAliqProd' => 'cofins_vAliqProd',
            'cofins_pCOFINS' => 'cofins_pCOFINS',
            'ean' => 'ean'
        );
    }

}
