<?php

namespace App\Models;

class NfentradaItem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_nfentrada_item;

    /**
     *
     * @var integer
     */
    protected $nfentrada_cd_nfentrada;

    /**
     *
     * @var integer
     */
    protected $cd_produto;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $nserie_devolucao;

    /**
     *
     * @var string
     */
    protected $ncm;

    /**
     *
     * @var string
     */
    protected $cst;

    /**
     *
     * @var string
     */
    protected $cst_entrada;

    /**
     *
     * @var string
     */
    protected $cfop;

    /**
     *
     * @var string
     */
    protected $cfop_entrada;

    /**
     *
     * @var integer
     */
    protected $cd_armazenagem;

    /**
     *
     * @var integer
     */
    protected $movimenta_estoque;

    /**
     *
     * @var string
     */
    protected $unidade_medida;

    /**
     *
     * @var double
     */
    protected $quantidade;

    /**
     *
     * @var string
     */
    protected $unidade_medida_saida;

    /**
     *
     * @var double
     */
    protected $quantidade_saida;

    /**
     *
     * @var double
     */
    protected $vl_unitario;

    /**
     *
     * @var double
     */
    protected $CSOSN;

    /**
     *
     * @var string
     */
    protected $csosn_entrada;

    /**
     *
     * @var double
     */
    protected $modBC;

    /**
     *
     * @var double
     */
    protected $vBC;

    /**
     *
     * @var double
     */
    protected $vICMS;

    /**
     *
     * @var double
     */
    protected $pICMS;

    /**
     *
     * @var double
     */
    protected $vBCST;

    /**
     *
     * @var double
     */
    protected $pICMSST;

    /**
     *
     * @var double
     */
    protected $vICMSST;

    /**
     *
     * @var double
     */
    protected $pRedBC;

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
     * @var double
     */
    protected $modBCST;

    /**
     *
     * @var double
     */
    protected $pMVAST;

    /**
     *
     * @var double
     */
    protected $pRedBCST;

    /**
     *
     * @var double
     */
    protected $vICMSSTRet;

    /**
     *
     * @var double
     */
    protected $vBCSTRet;

    /**
     *
     * @var double
     */
    protected $vIPI;

    /**
     *
     * @var double
     */
    protected $pIPI;

    /**
     *
     * @var double
     */
    protected $vPIS;

    /**
     *
     * @var double
     */
    protected $cstPIS;

    /**
     *
     * @var double
     */
    protected $vCOFINS;

    /**
     *
     * @var double
     */
    protected $cstCofins;

    /**
     *
     * @var double
     */
    protected $vl_seguro;

    /**
     *
     * @var double
     */
    protected $vl_outro;

    /**
     *
     * @var double
     */
    protected $vl_desc;

    /**
     *
     * @var double
     */
    protected $vl_frete;

    /**
     *
     * @var integer
     */
    protected $has_diferencial;

    /**
     *
     * @var string
     */
    protected $cod_ajustes_fiscal;

    /**
     *
     * @var double
     */
    protected $aliqDif;

    /**
     *
     * @var double
     */
    protected $vBCDif;

    /**
     *
     * @var double
     */
    protected $vICMSDif;

    /**
     *
     * @var double
     */
    protected $vl_outroDif;

    /**
     *
     * @var double
     */
    protected $ean;

    /**
     *
     * @var string
     */
    protected $unidade_medida_tributavel;

    /**
     *
     * @var double
     */
    protected $orig;

    /**
     *
     * @var integer
     */
    protected $cd_servico;

    /**
     *
     * @var double
     */
    protected $vl_total;

    /**
     *
     * @var double
     */
    protected $frete_conhecimento_transporte;

    /**
     * Method to set the value of field cd_nfentrada_item
     *
     * @param integer $cd_nfentrada_item
     * @return $this
     */
    public function setCdNfentradaItem($cd_nfentrada_item)
    {
        $this->cd_nfentrada_item = $cd_nfentrada_item;

        return $this;
    }

    /**
     * Method to set the value of field nfentrada_cd_nfentrada
     *
     * @param integer $nfentrada_cd_nfentrada
     * @return $this
     */
    public function setNfentradaCdNfentrada($nfentrada_cd_nfentrada)
    {
        $this->nfentrada_cd_nfentrada = $nfentrada_cd_nfentrada;

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
     * Method to set the value of field nserie_devolucao
     *
     * @param string $nserie_devolucao
     * @return $this
     */
    public function setNserieDevolucao($nserie_devolucao)
    {
        $this->nserie_devolucao = $nserie_devolucao;

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
     * @param string $cst
     * @return $this
     */
    public function setCst($cst)
    {
        $this->cst = $cst;

        return $this;
    }

    /**
     * Method to set the value of field cst_entrada
     *
     * @param string $cst_entrada
     * @return $this
     */
    public function setCstEntrada($cst_entrada)
    {
        $this->cst_entrada = $cst_entrada;

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
     * Method to set the value of field cfop_entrada
     *
     * @param string $cfop_entrada
     * @return $this
     */
    public function setCfopEntrada($cfop_entrada)
    {
        $this->cfop_entrada = $cfop_entrada;

        return $this;
    }

    /**
     * Method to set the value of field cd_armazenagem
     *
     * @param integer $cd_armazenagem
     * @return $this
     */
    public function setCdArmazenagem($cd_armazenagem)
    {
        $this->cd_armazenagem = $cd_armazenagem;

        return $this;
    }

    /**
     * Method to set the value of field movimenta_estoque
     *
     * @param integer $movimenta_estoque
     * @return $this
     */
    public function setMovimentaEstoque($movimenta_estoque)
    {
        $this->movimenta_estoque = $movimenta_estoque;

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
     * @param double $quantidade
     * @return $this
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Method to set the value of field unidade_medida_saida
     *
     * @param string $unidade_medida_saida
     * @return $this
     */
    public function setUnidadeMedidaSaida($unidade_medida_saida)
    {
        $this->unidade_medida_saida = $unidade_medida_saida;

        return $this;
    }

    /**
     * Method to set the value of field quantidade_saida
     *
     * @param double $quantidade_saida
     * @return $this
     */
    public function setQuantidadeSaida($quantidade_saida)
    {
        $this->quantidade_saida = $quantidade_saida;

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
     * Method to set the value of field CSOSN
     *
     * @param double $CSOSN
     * @return $this
     */
    public function setCSOSN($CSOSN)
    {
        $this->CSOSN = $CSOSN;

        return $this;
    }

    /**
     * Method to set the value of field csosn_entrada
     *
     * @param string $csosn_entrada
     * @return $this
     */
    public function setCsosnEntrada($csosn_entrada)
    {
        $this->csosn_entrada = $csosn_entrada;

        return $this;
    }

    /**
     * Method to set the value of field modBC
     *
     * @param double $modBC
     * @return $this
     */
    public function setModBC($modBC)
    {
        $this->modBC = $modBC;

        return $this;
    }

    /**
     * Method to set the value of field vBC
     *
     * @param double $vBC
     * @return $this
     */
    public function setVBC($vBC)
    {
        $this->vBC = $vBC;

        return $this;
    }

    /**
     * Method to set the value of field vICMS
     *
     * @param double $vICMS
     * @return $this
     */
    public function setVICMS($vICMS)
    {
        $this->vICMS = $vICMS;

        return $this;
    }

    /**
     * Method to set the value of field pICMS
     *
     * @param double $pICMS
     * @return $this
     */
    public function setPICMS($pICMS)
    {
        $this->pICMS = $pICMS;

        return $this;
    }

    /**
     * Method to set the value of field vBCST
     *
     * @param double $vBCST
     * @return $this
     */
    public function setVBCST($vBCST)
    {
        $this->vBCST = $vBCST;

        return $this;
    }

    /**
     * Method to set the value of field pICMSST
     *
     * @param double $pICMSST
     * @return $this
     */
    public function setPICMSST($pICMSST)
    {
        $this->pICMSST = $pICMSST;

        return $this;
    }

    /**
     * Method to set the value of field vICMSST
     *
     * @param double $vICMSST
     * @return $this
     */
    public function setVICMSST($vICMSST)
    {
        $this->vICMSST = $vICMSST;

        return $this;
    }

    /**
     * Method to set the value of field pRedBC
     *
     * @param double $pRedBC
     * @return $this
     */
    public function setPRedBC($pRedBC)
    {
        $this->pRedBC = $pRedBC;

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
     * Method to set the value of field modBCST
     *
     * @param double $modBCST
     * @return $this
     */
    public function setModBCST($modBCST)
    {
        $this->modBCST = $modBCST;

        return $this;
    }

    /**
     * Method to set the value of field pMVAST
     *
     * @param double $pMVAST
     * @return $this
     */
    public function setPMVAST($pMVAST)
    {
        $this->pMVAST = $pMVAST;

        return $this;
    }

    /**
     * Method to set the value of field pRedBCST
     *
     * @param double $pRedBCST
     * @return $this
     */
    public function setPRedBCST($pRedBCST)
    {
        $this->pRedBCST = $pRedBCST;

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
     * Method to set the value of field vIPI
     *
     * @param double $vIPI
     * @return $this
     */
    public function setVIPI($vIPI)
    {
        $this->vIPI = $vIPI;

        return $this;
    }

    /**
     * Method to set the value of field pIPI
     *
     * @param double $pIPI
     * @return $this
     */
    public function setPIPI($pIPI)
    {
        $this->pIPI = $pIPI;

        return $this;
    }

    /**
     * Method to set the value of field vPIS
     *
     * @param double $vPIS
     * @return $this
     */
    public function setVPIS($vPIS)
    {
        $this->vPIS = $vPIS;

        return $this;
    }

    /**
     * Method to set the value of field cstPIS
     *
     * @param double $cstPIS
     * @return $this
     */
    public function setCstPIS($cstPIS)
    {
        $this->cstPIS = $cstPIS;

        return $this;
    }

    /**
     * Method to set the value of field vCOFINS
     *
     * @param double $vCOFINS
     * @return $this
     */
    public function setVCOFINS($vCOFINS)
    {
        $this->vCOFINS = $vCOFINS;

        return $this;
    }

    /**
     * Method to set the value of field cstCofins
     *
     * @param double $cstCofins
     * @return $this
     */
    public function setCstCofins($cstCofins)
    {
        $this->cstCofins = $cstCofins;

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
     * Method to set the value of field has_diferencial
     *
     * @param integer $has_diferencial
     * @return $this
     */
    public function setHasDiferencial($has_diferencial)
    {
        $this->has_diferencial = $has_diferencial;

        return $this;
    }

    /**
     * Method to set the value of field cod_ajustes_fiscal
     *
     * @param string $cod_ajustes_fiscal
     * @return $this
     */
    public function setCodAjustesFiscal($cod_ajustes_fiscal)
    {
        $this->cod_ajustes_fiscal = $cod_ajustes_fiscal;

        return $this;
    }

    /**
     * Method to set the value of field aliqDif
     *
     * @param double $aliqDif
     * @return $this
     */
    public function setAliqDif($aliqDif)
    {
        $this->aliqDif = $aliqDif;

        return $this;
    }

    /**
     * Method to set the value of field vBCDif
     *
     * @param double $vBCDif
     * @return $this
     */
    public function setVBCDif($vBCDif)
    {
        $this->vBCDif = $vBCDif;

        return $this;
    }

    /**
     * Method to set the value of field vICMSDif
     *
     * @param double $vICMSDif
     * @return $this
     */
    public function setVICMSDif($vICMSDif)
    {
        $this->vICMSDif = $vICMSDif;

        return $this;
    }

    /**
     * Method to set the value of field vl_outroDif
     *
     * @param double $vl_outroDif
     * @return $this
     */
    public function setVlOutroDif($vl_outroDif)
    {
        $this->vl_outroDif = $vl_outroDif;

        return $this;
    }

    /**
     * Method to set the value of field ean
     *
     * @param double $ean
     * @return $this
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Method to set the value of field unidade_medida_tributavel
     *
     * @param string $unidade_medida_tributavel
     * @return $this
     */
    public function setUnidadeMedidaTributavel($unidade_medida_tributavel)
    {
        $this->unidade_medida_tributavel = $unidade_medida_tributavel;

        return $this;
    }

    /**
     * Method to set the value of field orig
     *
     * @param double $orig
     * @return $this
     */
    public function setOrig($orig)
    {
        $this->orig = $orig;

        return $this;
    }

    /**
     * Method to set the value of field cd_servico
     *
     * @param integer $cd_servico
     * @return $this
     */
    public function setCdServico($cd_servico)
    {
        $this->cd_servico = $cd_servico;

        return $this;
    }

    /**
     * Method to set the value of field vl_total
     *
     * @param double $vl_total
     * @return $this
     */
    public function setVlTotal($vl_total)
    {
        $this->vl_total = $vl_total;

        return $this;
    }

    /**
     * Method to set the value of field frete_conhecimento_transporte
     *
     * @param double $frete_conhecimento_transporte
     * @return $this
     */
    public function setFreteConhecimentoTransporte($frete_conhecimento_transporte)
    {
        $this->frete_conhecimento_transporte = $frete_conhecimento_transporte;

        return $this;
    }

    /**
     * Returns the value of field cd_nfentrada_item
     *
     * @return integer
     */
    public function getCdNfentradaItem()
    {
        return $this->cd_nfentrada_item;
    }

    /**
     * Returns the value of field nfentrada_cd_nfentrada
     *
     * @return integer
     */
    public function getNfentradaCdNfentrada()
    {
        return $this->nfentrada_cd_nfentrada;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field nserie_devolucao
     *
     * @return string
     */
    public function getNserieDevolucao()
    {
        return $this->nserie_devolucao;
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
     * @return string
     */
    public function getCst()
    {
        return $this->cst;
    }

    /**
     * Returns the value of field cst_entrada
     *
     * @return string
     */
    public function getCstEntrada()
    {
        return $this->cst_entrada;
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
     * Returns the value of field cfop_entrada
     *
     * @return string
     */
    public function getCfopEntrada()
    {
        return $this->cfop_entrada;
    }

    /**
     * Returns the value of field cd_armazenagem
     *
     * @return integer
     */
    public function getCdArmazenagem()
    {
        return $this->cd_armazenagem;
    }

    /**
     * Returns the value of field movimenta_estoque
     *
     * @return integer
     */
    public function getMovimentaEstoque()
    {
        return $this->movimenta_estoque;
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
     * @return double
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Returns the value of field unidade_medida_saida
     *
     * @return string
     */
    public function getUnidadeMedidaSaida()
    {
        return $this->unidade_medida_saida;
    }

    /**
     * Returns the value of field quantidade_saida
     *
     * @return double
     */
    public function getQuantidadeSaida()
    {
        return $this->quantidade_saida;
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
     * Returns the value of field CSOSN
     *
     * @return double
     */
    public function getCSOSN()
    {
        return $this->CSOSN;
    }

    /**
     * Returns the value of field csosn_entrada
     *
     * @return string
     */
    public function getCsosnEntrada()
    {
        return $this->csosn_entrada;
    }

    /**
     * Returns the value of field modBC
     *
     * @return double
     */
    public function getModBC()
    {
        return $this->modBC;
    }

    /**
     * Returns the value of field vBC
     *
     * @return double
     */
    public function getVBC()
    {
        return $this->vBC;
    }

    /**
     * Returns the value of field vICMS
     *
     * @return double
     */
    public function getVICMS()
    {
        return $this->vICMS;
    }

    /**
     * Returns the value of field pICMS
     *
     * @return double
     */
    public function getPICMS()
    {
        return $this->pICMS;
    }

    /**
     * Returns the value of field vBCST
     *
     * @return double
     */
    public function getVBCST()
    {
        return $this->vBCST;
    }

    /**
     * Returns the value of field pICMSST
     *
     * @return double
     */
    public function getPICMSST()
    {
        return $this->pICMSST;
    }

    /**
     * Returns the value of field vICMSST
     *
     * @return double
     */
    public function getVICMSST()
    {
        return $this->vICMSST;
    }

    /**
     * Returns the value of field pRedBC
     *
     * @return double
     */
    public function getPRedBC()
    {
        return $this->pRedBC;
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
     * Returns the value of field modBCST
     *
     * @return double
     */
    public function getModBCST()
    {
        return $this->modBCST;
    }

    /**
     * Returns the value of field pMVAST
     *
     * @return double
     */
    public function getPMVAST()
    {
        return $this->pMVAST;
    }

    /**
     * Returns the value of field pRedBCST
     *
     * @return double
     */
    public function getPRedBCST()
    {
        return $this->pRedBCST;
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
     * Returns the value of field vBCSTRet
     *
     * @return double
     */
    public function getVBCSTRet()
    {
        return $this->vBCSTRet;
    }

    /**
     * Returns the value of field vIPI
     *
     * @return double
     */
    public function getVIPI()
    {
        return $this->vIPI;
    }

    /**
     * Returns the value of field pIPI
     *
     * @return double
     */
    public function getPIPI()
    {
        return $this->pIPI;
    }

    /**
     * Returns the value of field vPIS
     *
     * @return double
     */
    public function getVPIS()
    {
        return $this->vPIS;
    }

    /**
     * Returns the value of field cstPIS
     *
     * @return double
     */
    public function getCstPIS()
    {
        return $this->cstPIS;
    }

    /**
     * Returns the value of field vCOFINS
     *
     * @return double
     */
    public function getVCOFINS()
    {
        return $this->vCOFINS;
    }

    /**
     * Returns the value of field cstCofins
     *
     * @return double
     */
    public function getCstCofins()
    {
        return $this->cstCofins;
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
     * Returns the value of field vl_outro
     *
     * @return double
     */
    public function getVlOutro()
    {
        return $this->vl_outro;
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
     * Returns the value of field vl_frete
     *
     * @return double
     */
    public function getVlFrete()
    {
        return $this->vl_frete;
    }

    /**
     * Returns the value of field has_diferencial
     *
     * @return integer
     */
    public function getHasDiferencial()
    {
        return $this->has_diferencial;
    }

    /**
     * Returns the value of field cod_ajustes_fiscal
     *
     * @return string
     */
    public function getCodAjustesFiscal()
    {
        return $this->cod_ajustes_fiscal;
    }

    /**
     * Returns the value of field aliqDif
     *
     * @return double
     */
    public function getAliqDif()
    {
        return $this->aliqDif;
    }

    /**
     * Returns the value of field vBCDif
     *
     * @return double
     */
    public function getVBCDif()
    {
        return $this->vBCDif;
    }

    /**
     * Returns the value of field vICMSDif
     *
     * @return double
     */
    public function getVICMSDif()
    {
        return $this->vICMSDif;
    }

    /**
     * Returns the value of field vl_outroDif
     *
     * @return double
     */
    public function getVlOutroDif()
    {
        return $this->vl_outroDif;
    }

    /**
     * Returns the value of field ean
     *
     * @return double
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Returns the value of field unidade_medida_tributavel
     *
     * @return string
     */
    public function getUnidadeMedidaTributavel()
    {
        return $this->unidade_medida_tributavel;
    }

    /**
     * Returns the value of field orig
     *
     * @return double
     */
    public function getOrig()
    {
        return $this->orig;
    }

    /**
     * Returns the value of field cd_servico
     *
     * @return integer
     */
    public function getCdServico()
    {
        return $this->cd_servico;
    }

    /**
     * Returns the value of field vl_total
     *
     * @return double
     */
    public function getVlTotal()
    {
        return $this->vl_total;
    }

    /**
     * Returns the value of field frete_conhecimento_transporte
     *
     * @return double
     */
    public function getFreteConhecimentoTransporte()
    {
        return $this->frete_conhecimento_transporte;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('nfentrada_cd_nfentrada', 'App\Models\Nfentrada', 'cd_nfentrada', array('alias' => 'Nfentrada'));
        $this->belongsTo('cd_servico', 'App\Models\Servicos', 'cd_servico', array('alias' => 'Servicos'));
        $this->hasone('cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfentrada_item';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfentradaItem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfentradaItem
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
            'cd_nfentrada_item' => 'cd_nfentrada_item',
            'nfentrada_cd_nfentrada' => 'nfentrada_cd_nfentrada',
            'cd_produto' => 'cd_produto',
            'descricao' => 'descricao',
            'nserie_devolucao' => 'nserie_devolucao',
            'ncm' => 'ncm',
            'cst' => 'cst',
            'cst_entrada' => 'cst_entrada',
            'cfop' => 'cfop',
            'cfop_entrada' => 'cfop_entrada',
            'cd_armazenagem' => 'cd_armazenagem',
            'movimenta_estoque' => 'movimenta_estoque',
            'unidade_medida' => 'unidade_medida',
            'quantidade' => 'quantidade',
            'unidade_medida_saida' => 'unidade_medida_saida',
            'quantidade_saida' => 'quantidade_saida',
            'vl_unitario' => 'vl_unitario',
            'CSOSN' => 'CSOSN',
            'csosn_entrada' => 'csosn_entrada',
            'modBC' => 'modBC',
            'vBC' => 'vBC',
            'vICMS' => 'vICMS',
            'pICMS' => 'pICMS',
            'vBCST' => 'vBCST',
            'pICMSST' => 'pICMSST',
            'vICMSST' => 'vICMSST',
            'pRedBC' => 'pRedBC',
            'pCredSN' => 'pCredSN',
            'vCredICMSSN' => 'vCredICMSSN',
            'modBCST' => 'modBCST',
            'pMVAST' => 'pMVAST',
            'pRedBCST' => 'pRedBCST',
            'vICMSSTRet' => 'vICMSSTRet',
            'vBCSTRet' => 'vBCSTRet',
            'vIPI' => 'vIPI',
            'pIPI' => 'pIPI',
            'vPIS' => 'vPIS',
            'cstPIS' => 'cstPIS',
            'vCOFINS' => 'vCOFINS',
            'cstCofins' => 'cstCofins',
            'vl_seguro' => 'vl_seguro',
            'vl_outro' => 'vl_outro',
            'vl_desc' => 'vl_desc',
            'vl_frete' => 'vl_frete',
            'has_diferencial' => 'has_diferencial',
            'cod_ajustes_fiscal' => 'cod_ajustes_fiscal',
            'aliqDif' => 'aliqDif',
            'vBCDif' => 'vBCDif',
            'vICMSDif' => 'vICMSDif',
            'vl_outroDif' => 'vl_outroDif',
            'ean' => 'ean',
            'unidade_medida_tributavel' => 'unidade_medida_tributavel',
            'orig' => 'orig',
            'cd_servico' => 'cd_servico',
            'vl_total' => 'vl_total',
            'frete_conhecimento_transporte' => 'frete_conhecimento_transporte'
        );
    }
}
