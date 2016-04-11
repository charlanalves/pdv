<?php

namespace App\Models;

class ModeloTributacaoIcms extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_modelo;

    /**
     *
     * @var integer
     */
    protected $cfop;

    /**
     *
     * @var string
     */
    protected $estado;

    /**
     *
     * @var integer
     */
    protected $finalidade_tributacao;

    /**
     *
     * @var integer
     */
    protected $cstb;

    /**
     *
     * @var integer
     */
    protected $mod_bc_icms;

    /**
     *
     * @var double
     */
    protected $aliquota_icms;

    /**
     *
     * @var double
     */
    protected $red_bc_icms;

    /**
     *
     * @var integer
     */
    protected $mod_bc_icms_st;

    /**
     *
     * @var double
     */
    protected $mva_icms_st;

    /**
     *
     * @var double
     */
    protected $aliquota_icms_st;

    /**
     *
     * @var double
     */
    protected $red_bc_icms_st;

    /**
     *
     * @var integer
     */
    protected $csosn;

    /**
     *
     * @var double
     */
    protected $aliquota_calc_cred;

    /**
     *
     * @var string
     */
    protected $int_or_ext;

    /**
     *
     * @var integer
     */
    protected $csta;

    /**
     *
     * @var double
     */
    protected $cofins_aliquota;

    /**
     *
     * @var integer
     */
    protected $has_st;

    /**
     * Method to set the value of field cd_modelo
     *
     * @param integer $cd_modelo
     * @return $this
     */
    public function setCdModelo($cd_modelo)
    {
        $this->cd_modelo = $cd_modelo;

        return $this;
    }

    /**
     * Method to set the value of field cfop
     *
     * @param integer $cfop
     * @return $this
     */
    public function setCfop($cfop)
    {
        $this->cfop = $cfop;

        return $this;
    }

    /**
     * Method to set the value of field estado
     *
     * @param string $estado
     * @return $this
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

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
     * Method to set the value of field cstb
     *
     * @param integer $cstb
     * @return $this
     */
    public function setCstb($cstb)
    {
        $this->cstb = $cstb;

        return $this;
    }

    /**
     * Method to set the value of field mod_bc_icms
     *
     * @param integer $mod_bc_icms
     * @return $this
     */
    public function setModBcIcms($mod_bc_icms)
    {
        $this->mod_bc_icms = $mod_bc_icms;

        return $this;
    }

    /**
     * Method to set the value of field aliquota_icms
     *
     * @param double $aliquota_icms
     * @return $this
     */
    public function setAliquotaIcms($aliquota_icms)
    {
        $this->aliquota_icms = $aliquota_icms;

        return $this;
    }

    /**
     * Method to set the value of field red_bc_icms
     *
     * @param double $red_bc_icms
     * @return $this
     */
    public function setRedBcIcms($red_bc_icms)
    {
        $this->red_bc_icms = $red_bc_icms;

        return $this;
    }

    /**
     * Method to set the value of field mod_bc_icms_st
     *
     * @param integer $mod_bc_icms_st
     * @return $this
     */
    public function setModBcIcmsSt($mod_bc_icms_st)
    {
        $this->mod_bc_icms_st = $mod_bc_icms_st;

        return $this;
    }

    /**
     * Method to set the value of field mva_icms_st
     *
     * @param double $mva_icms_st
     * @return $this
     */
    public function setMvaIcmsSt($mva_icms_st)
    {
        $this->mva_icms_st = $mva_icms_st;

        return $this;
    }

    /**
     * Method to set the value of field aliquota_icms_st
     *
     * @param double $aliquota_icms_st
     * @return $this
     */
    public function setAliquotaIcmsSt($aliquota_icms_st)
    {
        $this->aliquota_icms_st = $aliquota_icms_st;

        return $this;
    }

    /**
     * Method to set the value of field red_bc_icms_st
     *
     * @param double $red_bc_icms_st
     * @return $this
     */
    public function setRedBcIcmsSt($red_bc_icms_st)
    {
        $this->red_bc_icms_st = $red_bc_icms_st;

        return $this;
    }

    /**
     * Method to set the value of field csosn
     *
     * @param integer $csosn
     * @return $this
     */
    public function setCsosn($csosn)
    {
        $this->csosn = $csosn;

        return $this;
    }

    /**
     * Method to set the value of field aliquota_calc_cred
     *
     * @param double $aliquota_calc_cred
     * @return $this
     */
    public function setAliquotaCalcCred($aliquota_calc_cred)
    {
        $this->aliquota_calc_cred = $aliquota_calc_cred;

        return $this;
    }

    /**
     * Method to set the value of field int_or_ext
     *
     * @param string $int_or_ext
     * @return $this
     */
    public function setIntOrExt($int_or_ext)
    {
        $this->int_or_ext = $int_or_ext;

        return $this;
    }

    /**
     * Method to set the value of field csta
     *
     * @param integer $csta
     * @return $this
     */
    public function setCsta($csta)
    {
        $this->csta = $csta;

        return $this;
    }

    /**
     * Method to set the value of field cofins_aliquota
     *
     * @param double $cofins_aliquota
     * @return $this
     */
    public function setCofinsAliquota($cofins_aliquota)
    {
        $this->cofins_aliquota = $cofins_aliquota;

        return $this;
    }

    /**
     * Method to set the value of field has_st
     *
     * @param integer $has_st
     * @return $this
     */
    public function setHasSt($has_st)
    {
        $this->has_st = $has_st;

        return $this;
    }

    /**
     * Returns the value of field cd_modelo
     *
     * @return integer
     */
    public function getCdModelo()
    {
        return $this->cd_modelo;
    }

    /**
     * Returns the value of field cfop
     *
     * @return integer
     */
    public function getCfop()
    {
        return $this->cfop;
    }

    /**
     * Returns the value of field estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
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
     * Returns the value of field cstb
     *
     * @return integer
     */
    public function getCstb()
    {
        return $this->cstb;
    }

    /**
     * Returns the value of field mod_bc_icms
     *
     * @return integer
     */
    public function getModBcIcms()
    {
        return $this->mod_bc_icms;
    }

    /**
     * Returns the value of field aliquota_icms
     *
     * @return double
     */
    public function getAliquotaIcms()
    {
        return $this->aliquota_icms;
    }

    /**
     * Returns the value of field red_bc_icms
     *
     * @return double
     */
    public function getRedBcIcms()
    {
        return $this->red_bc_icms;
    }

    /**
     * Returns the value of field mod_bc_icms_st
     *
     * @return integer
     */
    public function getModBcIcmsSt()
    {
        return $this->mod_bc_icms_st;
    }

    /**
     * Returns the value of field mva_icms_st
     *
     * @return double
     */
    public function getMvaIcmsSt()
    {
        return $this->mva_icms_st;
    }

    /**
     * Returns the value of field aliquota_icms_st
     *
     * @return double
     */
    public function getAliquotaIcmsSt()
    {
        return $this->aliquota_icms_st;
    }

    /**
     * Returns the value of field red_bc_icms_st
     *
     * @return double
     */
    public function getRedBcIcmsSt()
    {
        return $this->red_bc_icms_st;
    }

    /**
     * Returns the value of field csosn
     *
     * @return integer
     */
    public function getCsosn()
    {
        return $this->csosn;
    }

    /**
     * Returns the value of field aliquota_calc_cred
     *
     * @return double
     */
    public function getAliquotaCalcCred()
    {
        return $this->aliquota_calc_cred;
    }

    /**
     * Returns the value of field int_or_ext
     *
     * @return string
     */
    public function getIntOrExt()
    {
        return $this->int_or_ext;
    }

    /**
     * Returns the value of field csta
     *
     * @return integer
     */
    public function getCsta()
    {
        return $this->csta;
    }

    /**
     * Returns the value of field cofins_aliquota
     *
     * @return double
     */
    public function getCofinsAliquota()
    {
        return $this->cofins_aliquota;
    }

    /**
     * Returns the value of field has_st
     *
     * @return integer
     */
    public function getHasSt()
    {
        return $this->has_st;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cfop', 'App\Models\Cfop', 'cfop', array('alias' => 'Cfop'));
        $this->belongsTo('cfop', 'App\Models\Cfop', 'cfop', array('foreignKey' => true,'alias' => 'Cfop'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'modelo_tributacao_icms';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ModeloTributacaoIcms[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ModeloTributacaoIcms
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
            'cd_modelo' => 'cd_modelo',
            'cfop' => 'cfop',
            'estado' => 'estado',
            'finalidade_tributacao' => 'finalidade_tributacao',
            'cstb' => 'cstb',
            'mod_bc_icms' => 'mod_bc_icms',
            'aliquota_icms' => 'aliquota_icms',
            'red_bc_icms' => 'red_bc_icms',
            'mod_bc_icms_st' => 'mod_bc_icms_st',
            'mva_icms_st' => 'mva_icms_st',
            'aliquota_icms_st' => 'aliquota_icms_st',
            'red_bc_icms_st' => 'red_bc_icms_st',
            'csosn' => 'csosn',
            'aliquota_calc_cred' => 'aliquota_calc_cred',
            'int_or_ext' => 'int_or_ext',
            'csta' => 'csta',
            'cofins_aliquota' => 'cofins_aliquota',
            'has_st' => 'has_st'
        );
    }

}
