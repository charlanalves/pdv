<?php

namespace App\Models;

class ModeloTributacaoOperacao extends \Phalcon\Mvc\Model
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
     * @var integer
     */
    protected $csta;

    /**
     *
     * @var integer
     */
    protected $pis_cst;

    /**
     *
     * @var integer
     */
    protected $pis_modalidade;

    /**
     *
     * @var double
     */
    protected $pis_aliquota;

    /**
     *
     * @var integer
     */
    protected $pis_st;

    /**
     *
     * @var string
     */
    protected $pis_st_modalidade;

    /**
     *
     * @var integer
     */
    protected $cofins_cst;

    /**
     *
     * @var integer
     */
    protected $cofins_modalidade;

    /**
     *
     * @var double
     */
    protected $cofins_aliquota;

    /**
     *
     * @var integer
     */
    protected $cofins_st;

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
     * Method to set the value of field pis_modalidade
     *
     * @param integer $pis_modalidade
     * @return $this
     */
    public function setPisModalidade($pis_modalidade)
    {
        $this->pis_modalidade = $pis_modalidade;

        return $this;
    }

    /**
     * Method to set the value of field pis_aliquota
     *
     * @param double $pis_aliquota
     * @return $this
     */
    public function setPisAliquota($pis_aliquota)
    {
        $this->pis_aliquota = $pis_aliquota;

        return $this;
    }

    /**
     * Method to set the value of field pis_st
     *
     * @param integer $pis_st
     * @return $this
     */
    public function setPisSt($pis_st)
    {
        $this->pis_st = $pis_st;

        return $this;
    }

    /**
     * Method to set the value of field pis_st_modalidade
     *
     * @param string $pis_st_modalidade
     * @return $this
     */
    public function setPisStModalidade($pis_st_modalidade)
    {
        $this->pis_st_modalidade = $pis_st_modalidade;

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
     * Method to set the value of field cofins_modalidade
     *
     * @param integer $cofins_modalidade
     * @return $this
     */
    public function setCofinsModalidade($cofins_modalidade)
    {
        $this->cofins_modalidade = $cofins_modalidade;

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
     * Method to set the value of field cofins_st
     *
     * @param integer $cofins_st
     * @return $this
     */
    public function setCofinsSt($cofins_st)
    {
        $this->cofins_st = $cofins_st;

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
     * Returns the value of field csta
     *
     * @return integer
     */
    public function getCsta()
    {
        return $this->csta;
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
     * Returns the value of field pis_modalidade
     *
     * @return integer
     */
    public function getPisModalidade()
    {
        return $this->pis_modalidade;
    }

    /**
     * Returns the value of field pis_aliquota
     *
     * @return double
     */
    public function getPisAliquota()
    {
        return $this->pis_aliquota;
    }

    /**
     * Returns the value of field pis_st
     *
     * @return integer
     */
    public function getPisSt()
    {
        return $this->pis_st;
    }

    /**
     * Returns the value of field pis_st_modalidade
     *
     * @return string
     */
    public function getPisStModalidade()
    {
        return $this->pis_st_modalidade;
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
     * Returns the value of field cofins_modalidade
     *
     * @return integer
     */
    public function getCofinsModalidade()
    {
        return $this->cofins_modalidade;
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
     * Returns the value of field cofins_st
     *
     * @return integer
     */
    public function getCofinsSt()
    {
        return $this->cofins_st;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'modelo_tributacao_operacao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ModeloTributacaoOperacao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ModeloTributacaoOperacao
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
            'csta' => 'csta',
            'pis_cst' => 'pis_cst',
            'pis_modalidade' => 'pis_modalidade',
            'pis_aliquota' => 'pis_aliquota',
            'pis_st' => 'pis_st',
            'pis_st_modalidade' => 'pis_st_modalidade',
            'cofins_cst' => 'cofins_cst',
            'cofins_modalidade' => 'cofins_modalidade',
            'cofins_aliquota' => 'cofins_aliquota',
            'cofins_st' => 'cofins_st'
        );
    }

}
