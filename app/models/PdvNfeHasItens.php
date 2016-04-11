<?php

namespace App\Models;

class PdvNfeHasItens extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $cd_nfe_item;

    /**
     *
     * @var integer
     */
    public $cd_nfe;

    /**
     *
     * @var integer
     */
    public $cd_produto;

    /**
     *
     * @var string
     */
    public $nome_produto;

    /**
     *
     * @var string
     */
    public $ncm;

    /**
     *
     * @var integer
     */
    public $cst;

    /**
     *
     * @var string
     */
    public $cfop;

    /**
     *
     * @var string
     */
    public $unidade_medida;

    /**
     *
     * @var integer
     */
    public $quantidade;

    /**
     *
     * @var double
     */
    public $vl_unitario;

    /**
     *
     * @var double
     */
    public $vl_total_bruto;

    /**
     *
     * @var double
     */
    public $bc_icms;

    /**
     *
     * @var double
     */
    public $vl_icms;

    /**
     *
     * @var double
     */
    public $vl_ipi;

    /**
     *
     * @var double
     */
    public $icms;

    /**
     *
     * @var double
     */
    public $ipi;

    /**
     *
     * @var integer
     */
    public $sequencia_nota;

    /**
     *
     * @var double
     */
    public $baseCalculoICMS_ST;

    /**
     *
     * @var double
     */
    public $valorICMS_ST;

    /**
     *
     * @var integer
     */
    public $cstCofins;

    /**
     *
     * @var integer
     */
    public $cstPIS;

    /**
     *
     * @var double
     */
    public $vl_desc;

    /**
     *
     * @var double
     */
    public $vl_seguro;

    /**
     *
     * @var double
     */
    public $vl_frete;

    /**
     *
     * @var double
     */
    public $vl_outro;

    /**
     *
     * @var double
     */
    public $vBCSTRet;

    /**
     *
     * @var double
     */
    public $vICMSSTRet;

    /**
     *
     * @var double
     */
    public $vBCSTDest;

    /**
     *
     * @var double
     */
    public $vICMSSTDest;

    /**
     *
     * @var integer
     */
    public $CSOSN;

    /**
     *
     * @var double
     */
    public $pCredSN;

    /**
     *
     * @var integer
     */
    public $modBCST;

    /**
     *
     * @var double
     */
    public $pMVAST;

    /**
     *
     * @var double
     */
    public $pRedBCST;

    /**
     *
     * @var double
     */
    public $pICMSST;

    /**
     *
     * @var double
     */
    public $vCredICMSSN;

    /**
     *
     * @var string
     */
    public $ipi_CNPJProd;

    /**
     *
     * @var string
     */
    public $ipi_cSelo;

    /**
     *
     * @var string
     */
    public $ipi_qSelo;

    /**
     *
     * @var integer
     */
    public $ipi_qUnid;

    /**
     *
     * @var double
     */
    public $ipi_vUnid;

    /**
     *
     * @var double
     */
    public $ipi_vIPI;

    /**
     *
     * @var double
     */
    public $cofins_VCOFINS;

    /**
     *
     * @var double
     */
    public $ii_vDespAdu;

    /**
     *
     * @var double
     */
    public $ii_vII;

    /**
     *
     * @var double
     */
    public $ii_vIOF;

    /**
     *
     * @var integer
     */
    public $pis_cst;

    /**
     *
     * @var double
     */
    public $pis_pPIS;

    /**
     *
     * @var double
     */
    public $pis_vPIS;

    /**
     *
     * @var double
     */
    public $pis_qBCProd;

    /**
     *
     * @var double
     */
    public $pis_vAliqProd;

    /**
     *
     * @var integer
     */
    public $cofins_cst;

    /**
     *
     * @var double
     */
    public $cofins_qBCProd;

    /**
     *
     * @var double
     */
    public $cofins_vAliqProd;

    /**
     *
     * @var double
     */
    public $cofins_pCOFINS;

    /**
     *
     * @var string
     */
    public $ean;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_nfe', 'PdvNfe', 'cd_nfe', array('alias' => 'PdvNfe'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_nfe_has_itens';
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

}
