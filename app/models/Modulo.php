<?php

namespace App\Models;

class Modulo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_modulo;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field cd_modulo
     *
     * @param integer $cd_modulo
     * @return $this
     */
    public function setCdModulo($cd_modulo)
    {
        $this->cd_modulo = $cd_modulo;

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
     * Returns the value of field cd_modulo
     *
     * @return integer
     */
    public function getCdModulo()
    {
        return $this->cd_modulo;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_modulo', 'App\Models\SacTipoProblemas', 'cod_modulo', array('alias' => 'SacTipoProblemas'));
        $this->hasMany('cd_modulo', 'App\Models\SacTipoProblemas', 'cod_modulo', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'modulo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Modulo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Modulo
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
            'cd_modulo' => 'cd_modulo',
            'descricao' => 'descricao'
        );
    }

}
