<?php

namespace App\Models;

class ProdutoImposto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_produto_imposto;

    /**
     *
     * @var integer
     */
    protected $produto_cd_produto;

    /**
     *
     * @var integer
     */
    protected $cst;

    /**
     *
     * @var string
     */
    protected $cfop;

    /**
     *
     * @var integer
     */
    protected $orig;

    /**
     *
     * @var integer
     */
    protected $modBC;

    /**
     *
     * @var double
     */
    protected $pICMS;

    /**
     *
     * @var integer
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
    protected $pICMSST;

    /**
     *
     * @var double
     */
    protected $pRedBC;

    /**
     *
     * @var integer
     */
    protected $motDesICMS;

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
     * @var integer
     */
    protected $ipi_clEnq;

    /**
     *
     * @var string
     */
    protected $ipi_CNPJProd;

    /**
     *
     * @var double
     */
    protected $ipi_pIPI;

    /**
     *
     * @var double
     */
    protected $cofins_pCOFINS;

    /**
     *
     * @var double
     */
    protected $pis_pPIS;

    /**
     * Method to set the value of field cd_produto_imposto
     *
     * @param integer $cd_produto_imposto
     * @return $this
     */
    public function setCdProdutoImposto($cd_produto_imposto)
    {
        $this->cd_produto_imposto = $cd_produto_imposto;

        return $this;
    }

    /**
     * Method to set the value of field produto_cd_produto
     *
     * @param integer $produto_cd_produto
     * @return $this
     */
    public function setProdutoCdProduto($produto_cd_produto)
    {
        $this->produto_cd_produto = $produto_cd_produto;

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
     * Method to set the value of field orig
     *
     * @param integer $orig
     * @return $this
     */
    public function setOrig($orig)
    {
        $this->orig = $orig;

        return $this;
    }

    /**
     * Method to set the value of field modBC
     *
     * @param integer $modBC
     * @return $this
     */
    public function setModBC($modBC)
    {
        $this->modBC = $modBC;

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
     * Method to set the value of field modBCST
     *
     * @param integer $modBCST
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
     * Method to set the value of field motDesICMS
     *
     * @param integer $motDesICMS
     * @return $this
     */
    public function setMotDesICMS($motDesICMS)
    {
        $this->motDesICMS = $motDesICMS;

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
     * Method to set the value of field ipi_clEnq
     *
     * @param integer $ipi_clEnq
     * @return $this
     */
    public function setIpiClEnq($ipi_clEnq)
    {
        $this->ipi_clEnq = $ipi_clEnq;

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
     * Method to set the value of field ipi_pIPI
     *
     * @param double $ipi_pIPI
     * @return $this
     */
    public function setIpiPIPI($ipi_pIPI)
    {
        $this->ipi_pIPI = $ipi_pIPI;

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
     * Returns the value of field cd_produto_imposto
     *
     * @return integer
     */
    public function getCdProdutoImposto()
    {
        return $this->cd_produto_imposto;
    }

    /**
     * Returns the value of field produto_cd_produto
     *
     * @return integer
     */
    public function getProdutoCdProduto()
    {
        return $this->produto_cd_produto;
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
     * Returns the value of field cfop
     *
     * @return string
     */
    public function getCfop()
    {
        return $this->cfop;
    }

    /**
     * Returns the value of field orig
     *
     * @return integer
     */
    public function getOrig()
    {
        return $this->orig;
    }

    /**
     * Returns the value of field modBC
     *
     * @return integer
     */
    public function getModBC()
    {
        return $this->modBC;
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
     * Returns the value of field modBCST
     *
     * @return integer
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
     * Returns the value of field pICMSST
     *
     * @return double
     */
    public function getPICMSST()
    {
        return $this->pICMSST;
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
     * Returns the value of field motDesICMS
     *
     * @return integer
     */
    public function getMotDesICMS()
    {
        return $this->motDesICMS;
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
     * Returns the value of field ipi_clEnq
     *
     * @return integer
     */
    public function getIpiClEnq()
    {
        return $this->ipi_clEnq;
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
     * Returns the value of field ipi_pIPI
     *
     * @return double
     */
    public function getIpiPIPI()
    {
        return $this->ipi_pIPI;
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
     * Returns the value of field pis_pPIS
     *
     * @return double
     */
    public function getPisPPIS()
    {
        return $this->pis_pPIS;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'produto_imposto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoImposto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoImposto
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
            'cd_produto_imposto' => 'cd_produto_imposto',
            'produto_cd_produto' => 'produto_cd_produto',
            'cst' => 'cst',
            'cfop' => 'cfop',
            'orig' => 'orig',
            'modBC' => 'modBC',
            'pICMS' => 'pICMS',
            'modBCST' => 'modBCST',
            'pMVAST' => 'pMVAST',
            'pRedBCST' => 'pRedBCST',
            'pICMSST' => 'pICMSST',
            'pRedBC' => 'pRedBC',
            'motDesICMS' => 'motDesICMS',
            'CSOSN' => 'CSOSN',
            'pCredSN' => 'pCredSN',
            'ipi_clEnq' => 'ipi_clEnq',
            'ipi_CNPJProd' => 'ipi_CNPJProd',
            'ipi_pIPI' => 'ipi_pIPI',
            'cofins_pCOFINS' => 'cofins_pCOFINS',
            'pis_pPIS' => 'pis_pPIS'
        );
    }

}
