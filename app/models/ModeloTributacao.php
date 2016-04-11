<?php

namespace App\Models;

class ModeloTributacao extends \Phalcon\Mvc\Model
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
    protected $cd_unidade;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $csta;

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
     * @var double
     */
    protected $csll;

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
     * Method to set the value of field csll
     *
     * @param double $csll
     * @return $this
     */
    public function setCsll($csll)
    {
        $this->csll = $csll;

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
     * Returns the value of field cd_unidade
     *
     * @return integer
     */
    public function getCdUnidade()
    {
        return $this->cd_unidade;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
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
     * Returns the value of field csll
     *
     * @return double
     */
    public function getCsll()
    {
        return $this->csll;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_modelo', 'App\Models\ProdutoHasDados', 'cd_modelo', array('alias' => 'ProdutoHasDados'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('cd_modelo', 'App\Models\ProdutoHasDados', 'cd_modelo', NULL);
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'modelo_tributacao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ModeloTributacao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ModeloTributacao
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
            'cd_unidade' => 'cd_unidade',
            'ativo' => 'ativo',
            'descricao' => 'descricao',
            'csta' => 'csta',
            'pis' => 'pis',
            'cofins' => 'cofins',
            'ir' => 'ir',
            'csll' => 'csll'
        );
    }

}
