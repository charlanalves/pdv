<?php

namespace App\Models;

class Uf extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_uf;

    /**
     *
     * @var string
     */
    protected $sigla;

    /**
     *
     * @var string
     */
    protected $descricao;
    
     /**
     *
     * @var int
     */
    protected $codigo_uf;
    
    /**
     * Returns the value of field codigo_uf
     *
     * @return string
     */
    public function getCodigoUf()
    {
        return $this->codigo_uf;
    }

    /**
    * Method to set the value of field codigo_uf
    *
    * @param integer $codigo_uf
    * @return $this
    */
    public function setCodigoUf($codigo_uf)
    {
        $this->codigo_uf = $codigo_uf;
    }

    /**
     * Method to set the value of field cd_uf
     *
     * @param integer $cd_uf
     * @return $this
     */
    public function setCdUf($cd_uf)
    {
        $this->cd_uf = $cd_uf;

        return $this;
    }

    /**
     * Method to set the value of field sigla
     *
     * @param string $sigla
     * @return $this
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

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
     * Returns the value of field cd_uf
     *
     * @return integer
     */
    public function getCdUf()
    {
        return $this->cd_uf;
    }

    /**
     * Returns the value of field sigla
     *
     * @return string
     */
    public function getSigla()
    {
        return $this->sigla;
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
        $this->hasMany('cd_uf', 'App\Models\Cidades', 'cd_uf', array('alias' => 'Cidades'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'uf';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Uf[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Uf
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
            'cd_uf' => 'cd_uf',
            'sigla' => 'sigla',
            'descricao' => 'descricao',
            'codigo_uf' => 'codigo_uf'
        );
    }
}
