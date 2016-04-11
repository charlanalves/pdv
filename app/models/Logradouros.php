<?php

namespace App\Models;

class Logradouros extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_logradouro;

    /**
     *
     * @var string
     */
    protected $cep;

    /**
     *
     * @var integer
     */
    protected $cd_bairro;

    /**
     *
     * @var string
     */
    protected $logradouro;

    /**
     * Method to set the value of field cd_logradouro
     *
     * @param integer $cd_logradouro
     * @return $this
     */
    public function setCdLogradouro($cd_logradouro)
    {
        $this->cd_logradouro = $cd_logradouro;

        return $this;
    }

    /**
     * Method to set the value of field cep
     *
     * @param string $cep
     * @return $this
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Method to set the value of field cd_bairro
     *
     * @param integer $cd_bairro
     * @return $this
     */
    public function setCdBairro($cd_bairro)
    {
        $this->cd_bairro = $cd_bairro;

        return $this;
    }

    /**
     * Method to set the value of field logradouro
     *
     * @param string $logradouro
     * @return $this
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Returns the value of field cd_logradouro
     *
     * @return integer
     */
    public function getCdLogradouro()
    {
        return $this->cd_logradouro;
    }

    /**
     * Returns the value of field cep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Returns the value of field cd_bairro
     *
     * @return integer
     */
    public function getCdBairro()
    {
        return $this->cd_bairro;
    }

    /**
     * Returns the value of field logradouro
     *
     * @return string
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_bairro', 'App\Models\Bairros', 'cd_bairro', array('alias' => 'Bairros'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'logradouros';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Logradouros[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Logradouros
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
            'cd_logradouro' => 'cd_logradouro',
            'cep' => 'cep',
            'cd_bairro' => 'cd_bairro',
            'logradouro' => 'logradouro'
        );
    }
}
