<?php
namespace App\Models;

class PdvImpostosUnidadeNegocio extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_config;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var integer
     */
    protected $cfop;

    /**
     *
     * @var integer
     */
    protected $csosn_st;

    /**
     *
     * @var integer
     */
    protected $csosn;

    /**
     *
     * @var integer
     */
    protected $cst_pis;

    /**
     *
     * @var integer
     */
    protected $cst_cofins;

    /**
     *
     * @var integer
     */
    protected $cst_ipi;

    /**
     * Method to set the value of field cd_config
     *
     * @param integer $cd_config
     * @return $this
     */
    public function setCdConfig($cd_config)
    {
        $this->cd_config = $cd_config;

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
     * Method to set the value of field csosn_st
     *
     * @param integer $csosn_st
     * @return $this
     */
    public function setCsosnSt($csosn_st)
    {
        $this->csosn_st = $csosn_st;

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
     * Method to set the value of field cst_pis
     *
     * @param integer $cst_pis
     * @return $this
     */
    public function setCstPis($cst_pis)
    {
        $this->cst_pis = $cst_pis;

        return $this;
    }

    /**
     * Method to set the value of field cst_cofins
     *
     * @param integer $cst_cofins
     * @return $this
     */
    public function setCstCofins($cst_cofins)
    {
        $this->cst_cofins = $cst_cofins;

        return $this;
    }

    /**
     * Method to set the value of field cst_ipi
     *
     * @param integer $cst_ipi
     * @return $this
     */
    public function setCstIpi($cst_ipi)
    {
        $this->cst_ipi = $cst_ipi;

        return $this;
    }

    /**
     * Returns the value of field cd_config
     *
     * @return integer
     */
    public function getCdConfig()
    {
        return $this->cd_config;
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
     * Returns the value of field cfop
     *
     * @return integer
     */
    public function getCfop()
    {
        return $this->cfop;
    }

    /**
     * Returns the value of field csosn_st
     *
     * @return integer
     */
    public function getCsosnSt()
    {
        return $this->csosn_st;
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
     * Returns the value of field cst_pis
     *
     * @return integer
     */
    public function getCstPis()
    {
        return $this->cst_pis;
    }

    /**
     * Returns the value of field cst_cofins
     *
     * @return integer
     */
    public function getCstCofins()
    {
        return $this->cst_cofins;
    }

    /**
     * Returns the value of field cst_ipi
     *
     * @return integer
     */
    public function getCstIpi()
    {
        return $this->cst_ipi;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasOne('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_impostos_unidade_negocio';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvImpostosUnidadeNegocio[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvImpostosUnidadeNegocio
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
            'cd_config' => 'cd_config',
            'cd_unidade' => 'cd_unidade',
            'cfop' => 'cfop',
            'csosn_st' => 'csosn_st',
            'csosn' => 'csosn',
            'cst_pis' => 'cst_pis',
            'cst_cofins' => 'cst_cofins',
            'cst_ipi' => 'cst_ipi'
        );
    }

}
