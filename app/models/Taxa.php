<?php

namespace App\Models;

class Taxa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_financeira;

    /**
     *
     * @var double
     */
    protected $taxa;

    /**
     *
     * @var integer
     */
    protected $intervalo_min;

    /**
     *
     * @var integer
     */
    protected $intervalo_max;

    /**
     * Method to set the value of field id_financeira
     *
     * @param integer $id_financeira
     * @return $this
     */
    public function setIdFinanceira($id_financeira)
    {
        $this->id_financeira = $id_financeira;

        return $this;
    }

    /**
     * Method to set the value of field taxa
     *
     * @param double $taxa
     * @return $this
     */
    public function setTaxa($taxa)
    {
        $this->taxa = $taxa;

        return $this;
    }

    /**
     * Method to set the value of field intervalo_min
     *
     * @param integer $intervalo_min
     * @return $this
     */
    public function setIntervaloMin($intervalo_min)
    {
        $this->intervalo_min = $intervalo_min;

        return $this;
    }

    /**
     * Method to set the value of field intervalo_max
     *
     * @param integer $intervalo_max
     * @return $this
     */
    public function setIntervaloMax($intervalo_max)
    {
        $this->intervalo_max = $intervalo_max;

        return $this;
    }

    /**
     * Returns the value of field id_financeira
     *
     * @return integer
     */
    public function getIdFinanceira()
    {
        return $this->id_financeira;
    }

    /**
     * Returns the value of field taxa
     *
     * @return double
     */
    public function getTaxa()
    {
        return $this->taxa;
    }

    /**
     * Returns the value of field intervalo_min
     *
     * @return integer
     */
    public function getIntervaloMin()
    {
        return $this->intervalo_min;
    }

    /**
     * Returns the value of field intervalo_max
     *
     * @return integer
     */
    public function getIntervaloMax()
    {
        return $this->intervalo_max;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_financeira', 'App\Models\Financeira', 'id_financeira', array('alias' => 'Financeira'));
        $this->belongsTo('id_financeira', 'App\Models\Financeira', 'id_financeira', array('foreignKey' => true,'alias' => 'Financeira'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'taxa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Taxa[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Taxa
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
            'id_financeira' => 'id_financeira',
            'taxa' => 'taxa',
            'intervalo_min' => 'intervalo_min',
            'intervalo_max' => 'intervalo_max'
        );
    }

}
