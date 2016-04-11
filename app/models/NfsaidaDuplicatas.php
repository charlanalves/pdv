<?php

namespace App\Models;

class NfsaidaDuplicatas extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_duplicatas;

    /**
     *
     * @var integer
     */
    protected $nfsaida_cd_nfsaida;

    /**
     *
     * @var string
     */
    protected $numero;

    /**
     *
     * @var string
     */
    protected $vencimento;

    /**
     *
     * @var double
     */
    protected $valor;

    /**
     * Method to set the value of field cd_duplicatas
     *
     * @param integer $cd_duplicatas
     * @return $this
     */
    public function setCdDuplicatas($cd_duplicatas)
    {
        $this->cd_duplicatas = $cd_duplicatas;

        return $this;
    }

    /**
     * Method to set the value of field nfsaida_cd_nfsaida
     *
     * @param integer $nfsaida_cd_nfsaida
     * @return $this
     */
    public function setNfsaidaCdNfsaida($nfsaida_cd_nfsaida)
    {
        $this->nfsaida_cd_nfsaida = $nfsaida_cd_nfsaida;

        return $this;
    }

    /**
     * Method to set the value of field numero
     *
     * @param string $numero
     * @return $this
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Method to set the value of field vencimento
     *
     * @param string $vencimento
     * @return $this
     */
    public function setVencimento($vencimento)
    {
        $this->vencimento = $vencimento;

        return $this;
    }

    /**
     * Method to set the value of field valor
     *
     * @param double $valor
     * @return $this
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Returns the value of field cd_duplicatas
     *
     * @return integer
     */
    public function getCdDuplicatas()
    {
        return $this->cd_duplicatas;
    }

    /**
     * Returns the value of field nfsaida_cd_nfsaida
     *
     * @return integer
     */
    public function getNfsaidaCdNfsaida()
    {
        return $this->nfsaida_cd_nfsaida;
    }

    /**
     * Returns the value of field numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Returns the value of field vencimento
     *
     * @return string
     */
    public function getVencimento()
    {
        return $this->vencimento;
    }

    /**
     * Returns the value of field valor
     *
     * @return double
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('nfsaida_cd_nfsaida', 'App\Models\Nfsaida', 'cd_nfsaida', array('alias' => 'Nfsaida'));
        $this->belongsTo('nfsaida_cd_nfsaida', 'App\Models\Nfsaida', 'cd_nfsaida', array('foreignKey' => true,'alias' => 'Nfsaida'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfsaida_duplicatas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfsaidaDuplicatas[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfsaidaDuplicatas
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
            'cd_duplicatas' => 'cd_duplicatas',
            'nfsaida_cd_nfsaida' => 'nfsaida_cd_nfsaida',
            'numero' => 'numero',
            'vencimento' => 'vencimento',
            'valor' => 'valor'
        );
    }

}
