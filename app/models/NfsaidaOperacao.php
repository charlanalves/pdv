<?php

namespace App\Models;

class NfsaidaOperacao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_nfsaida;

    /**
     *
     * @var integer
     */
    protected $operacao;

    /**
     *
     * @var string
     */
    protected $retorno;

    /**
     * Method to set the value of field cd_nfsaida
     *
     * @param integer $cd_nfsaida
     * @return $this
     */
    public function setCdNfsaida($cd_nfsaida)
    {
        $this->cd_nfsaida = $cd_nfsaida;

        return $this;
    }

    /**
     * Method to set the value of field operacao
     *
     * @param integer $operacao
     * @return $this
     */
    public function setOperacao($operacao)
    {
        $this->operacao = $operacao;

        return $this;
    }

    /**
     * Method to set the value of field retorno
     *
     * @param string $retorno
     * @return $this
     */
    public function setRetorno($retorno)
    {
        $this->retorno = $retorno;

        return $this;
    }

    /**
     * Returns the value of field cd_nfsaida
     *
     * @return integer
     */
    public function getCdNfsaida()
    {
        return $this->cd_nfsaida;
    }

    /**
     * Returns the value of field operacao
     *
     * @return integer
     */
    public function getOperacao()
    {
        return $this->operacao;
    }

    /**
     * Returns the value of field retorno
     *
     * @return string
     */
    public function getRetorno()
    {
        return $this->retorno;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfsaida_operacao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfsaidaOperacao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfsaidaOperacao
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
            'cd_nfsaida' => 'cd_nfsaida',
            'operacao' => 'operacao',
            'retorno' => 'retorno'
        );
    }

}
