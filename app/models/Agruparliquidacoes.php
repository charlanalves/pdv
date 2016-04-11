<?php

namespace App\Models;

class Agruparliquidacoes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idagrupamento;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     * Method to set the value of field idagrupamento
     *
     * @param integer $idagrupamento
     * @return $this
     */
    public function setIdagrupamento($idagrupamento)
    {
        $this->idagrupamento = $idagrupamento;

        return $this;
    }

    /**
     * Method to set the value of field criado
     *
     * @param string $criado
     * @return $this
     */
    public function setCriado($criado)
    {
        $this->criado = $criado;

        return $this;
    }

    /**
     * Returns the value of field idagrupamento
     *
     * @return integer
     */
    public function getIdagrupamento()
    {
        return $this->idagrupamento;
    }

    /**
     * Returns the value of field criado
     *
     * @return string
     */
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idagrupamento', 'App\Models\Liquidacao', 'idagrupamento', array('alias' => 'Liquidacao'));
        $this->hasMany('idagrupamento', 'App\Models\Liquidacao', 'idagrupamento', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'agruparliquidacoes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Agruparliquidacoes[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Agruparliquidacoes
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
            'idagrupamento' => 'idagrupamento',
            'criado' => 'criado'
        );
    }

}
