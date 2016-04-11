<?php

namespace App\Models;

class Financeira extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_financeira;

    /**
     *
     * @var string
     */
    protected $nome;

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
     * Returns the value of field id_financeira
     *
     * @return integer
     */
    public function getIdFinanceira()
    {
        return $this->id_financeira;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_financeira', 'App\Models\CondPagto', 'id_financeira', array('alias' => 'CondPagto'));
        $this->hasMany('id_financeira', 'App\Models\Taxa', 'id_financeira', array('alias' => 'Taxa'));
        $this->hasMany('id_financeira', 'App\Models\CondPagto', 'id_financeira', NULL);
        $this->hasMany('id_financeira', 'App\Models\Taxa', 'id_financeira', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'financeira';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Financeira[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Financeira
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
            'nome' => 'nome'
        );
    }

}
