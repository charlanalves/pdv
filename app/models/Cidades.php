<?php

namespace App\Models;

class Cidades extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_cidade;

    /**
     *
     * @var integer
     */
    protected $cd_uf;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field cd_cidade
     *
     * @param integer $cd_cidade
     * @return $this
     */
    public function setCdCidade($cd_cidade)
    {
        $this->cd_cidade = $cd_cidade;

        return $this;
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
     * Returns the value of field cd_cidade
     *
     * @return integer
     */
    public function getCdCidade()
    {
        return $this->cd_cidade;
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
        $this->hasMany('cd_cidade', 'App\Models\Bairros', 'cd_cidade', array('alias' => 'Bairros'));
        $this->belongsTo('cd_uf', 'App\Models\Uf', 'cd_uf', array('alias' => 'Uf'));
        $this->hasMany('cd_cidade', 'App\Models\Bairros', 'cd_cidade', NULL);
        $this->belongsTo('cd_uf', 'App\Models\Uf', 'cd_uf', array('foreignKey' => true,'alias' => 'Uf'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cidades';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cidades[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cidades
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
            'cd_cidade' => 'cd_cidade',
            'cd_uf' => 'cd_uf',
            'descricao' => 'descricao'
        );
    }

}
