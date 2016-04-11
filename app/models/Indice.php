<?php

namespace App\Models;

class Indice extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_indice;

    /**
     *
     * @var double
     */
    protected $periodicidade;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $dataIndice;

    /**
     *
     * @var double
     */
    protected $indice;

    /**
     *
     * @var double
     */
    protected $acumulado;

    /**
     * Method to set the value of field cd_indice
     *
     * @param integer $cd_indice
     * @return $this
     */
    public function setCdIndice($cd_indice)
    {
        $this->cd_indice = $cd_indice;

        return $this;
    }

    /**
     * Method to set the value of field periodicidade
     *
     * @param double $periodicidade
     * @return $this
     */
    public function setPeriodicidade($periodicidade)
    {
        $this->periodicidade = $periodicidade;

        return $this;
    }

    /**
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Method to set the value of field dataIndice
     *
     * @param string $dataIndice
     * @return $this
     */
    public function setDataIndice($dataIndice)
    {
        $this->dataIndice = $dataIndice;

        return $this;
    }

    /**
     * Method to set the value of field indice
     *
     * @param double $indice
     * @return $this
     */
    public function setIndice($indice)
    {
        $this->indice = $indice;

        return $this;
    }

    /**
     * Method to set the value of field acumulado
     *
     * @param double $acumulado
     * @return $this
     */
    public function setAcumulado($acumulado)
    {
        $this->acumulado = $acumulado;

        return $this;
    }

    /**
     * Returns the value of field cd_indice
     *
     * @return integer
     */
    public function getCdIndice()
    {
        return $this->cd_indice;
    }

    /**
     * Returns the value of field periodicidade
     *
     * @return double
     */
    public function getPeriodicidade()
    {
        return $this->periodicidade;
    }

    /**
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field dataIndice
     *
     * @return string
     */
    public function getDataIndice()
    {
        return $this->dataIndice;
    }

    /**
     * Returns the value of field indice
     *
     * @return double
     */
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Returns the value of field acumulado
     *
     * @return double
     */
    public function getAcumulado()
    {
        return $this->acumulado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_indice', 'App\Models\Liquidacao', 'cd_indice', array('alias' => 'Liquidacao'));
        $this->hasMany('cd_indice', 'App\Models\LiquidacaoCreditoCliente', 'cd_indice', array('alias' => 'LiquidacaoCreditoCliente'));
        $this->hasMany('cd_indice', 'App\Models\Liquidacao', 'cd_indice', NULL);
        $this->hasMany('cd_indice', 'App\Models\LiquidacaoCreditoCliente', 'cd_indice', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'indice';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Indice[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Indice
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
            'cd_indice' => 'cd_indice',
            'periodicidade' => 'periodicidade',
            'nome' => 'nome',
            'dataIndice' => 'dataIndice',
            'indice' => 'indice',
            'acumulado' => 'acumulado'
        );
    }

}
