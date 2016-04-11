<?php

namespace App\Models;

class Ncm extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_ncm;

    /**
     *
     * @var string
     */
    protected $ncm;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var double
     */
    protected $aliquota_ipi;

    /**
     *
     * @var string
     */
    protected $texto;

    /**
     *
     * @var string
     */
    protected $excecao;

    /**
     * Method to set the value of field cd_ncm
     *
     * @param integer $cd_ncm
     * @return $this
     */
    public function setCdNcm($cd_ncm)
    {
        $this->cd_ncm = $cd_ncm;

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
     * Method to set the value of field aliquota_ipi
     *
     * @param double $aliquota_ipi
     * @return $this
     */
    public function setAliquotaIpi($aliquota_ipi)
    {
        $this->aliquota_ipi = $aliquota_ipi;

        return $this;
    }

    /**
     * Method to set the value of field texto
     *
     * @param string $texto
     * @return $this
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Method to set the value of field excecao
     *
     * @param string $excecao
     * @return $this
     */
    public function setExcecao($excecao)
    {
        $this->excecao = $excecao;

        return $this;
    }

    /**
     * Returns the value of field cd_ncm
     *
     * @return integer
     */
    public function getCdNcm()
    {
        return $this->cd_ncm;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field aliquota_ipi
     *
     * @return double
     */
    public function getAliquotaIpi()
    {
        return $this->aliquota_ipi;
    }

    /**
     * Returns the value of field texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Returns the value of field excecao
     *
     * @return string
     */
    public function getExcecao()
    {
        return $this->excecao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_ncm', 'App\Models\NfservicoItem', 'ncm', array('alias' => 'NfservicoItem'));
        $this->hasMany('cd_ncm', 'App\Models\NfservicoItem', 'ncm', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ncm';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ncm[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ncm
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
            'cd_ncm' => 'cd_ncm',
            'ncm' => 'ncm',
            'descricao' => 'descricao',
            'aliquota_ipi' => 'aliquota_ipi',
            'texto' => 'texto',
            'excecao' => 'excecao'
        );
    }

}
