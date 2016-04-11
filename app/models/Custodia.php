<?php

namespace App\Models;

class Custodia extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_custodia;

    /**
     *
     * @var integer
     */
    protected $cd_unidade_negocio;

    /**
     *
     * @var integer
     */
    protected $nremessa;

    /**
     *
     * @var string
     */
    protected $data_geracao;

    /**
     *
     * @var string
     */
    protected $arquivo;

    /**
     *
     * @var integer
     */
    protected $portador;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     * Method to set the value of field cd_custodia
     *
     * @param integer $cd_custodia
     * @return $this
     */
    public function setCdCustodia($cd_custodia)
    {
        $this->cd_custodia = $cd_custodia;

        return $this;
    }

    /**
     * Method to set the value of field cd_unidade_negocio
     *
     * @param integer $cd_unidade_negocio
     * @return $this
     */
    public function setCdUnidadeNegocio($cd_unidade_negocio)
    {
        $this->cd_unidade_negocio = $cd_unidade_negocio;

        return $this;
    }

    /**
     * Method to set the value of field nremessa
     *
     * @param integer $nremessa
     * @return $this
     */
    public function setNremessa($nremessa)
    {
        $this->nremessa = $nremessa;

        return $this;
    }

    /**
     * Method to set the value of field data_geracao
     *
     * @param string $data_geracao
     * @return $this
     */
    public function setDataGeracao($data_geracao)
    {
        $this->data_geracao = $data_geracao;

        return $this;
    }

    /**
     * Method to set the value of field arquivo
     *
     * @param string $arquivo
     * @return $this
     */
    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;

        return $this;
    }

    /**
     * Method to set the value of field portador
     *
     * @param integer $portador
     * @return $this
     */
    public function setPortador($portador)
    {
        $this->portador = $portador;

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
     * Returns the value of field cd_custodia
     *
     * @return integer
     */
    public function getCdCustodia()
    {
        return $this->cd_custodia;
    }

    /**
     * Returns the value of field cd_unidade_negocio
     *
     * @return integer
     */
    public function getCdUnidadeNegocio()
    {
        return $this->cd_unidade_negocio;
    }

    /**
     * Returns the value of field nremessa
     *
     * @return integer
     */
    public function getNremessa()
    {
        return $this->nremessa;
    }

    /**
     * Returns the value of field data_geracao
     *
     * @return string
     */
    public function getDataGeracao()
    {
        return $this->data_geracao;
    }

    /**
     * Returns the value of field arquivo
     *
     * @return string
     */
    public function getArquivo()
    {
        return $this->arquivo;
    }

    /**
     * Returns the value of field portador
     *
     * @return integer
     */
    public function getPortador()
    {
        return $this->portador;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_custodia', 'App\Models\Cheque', 'cd_custodia', array('alias' => 'Cheque'));
        $this->hasMany('cd_custodia', 'App\Models\Cheque', 'cd_custodia', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'custodia';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Custodia[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Custodia
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
            'cd_custodia' => 'cd_custodia',
            'cd_unidade_negocio' => 'cd_unidade_negocio',
            'nremessa' => 'nremessa',
            'data_geracao' => 'data_geracao',
            'arquivo' => 'arquivo',
            'portador' => 'portador',
            'ativo' => 'ativo'
        );
    }

}
