<?php

namespace App\Models;

class Bairros extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_bairro;

    /**
     *
     * @var integer
     */
    protected $cd_cidade;

    /**
     *
     * @var string
     */
    protected $descricao;

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
     * Returns the value of field cd_bairro
     *
     * @return integer
     */
    public function getCdBairro()
    {
        return $this->cd_bairro;
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
        $this->hasMany('cd_bairro', 'App\Models\Logradouros', 'cd_bairro', array('alias' => 'Logradouros'));
        $this->belongsTo('cd_cidade', 'App\Models\Cidades', 'cd_cidade', array('alias' => 'Cidades'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'bairros';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bairros[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bairros
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
            'cd_bairro' => 'cd_bairro',
            'cd_cidade' => 'cd_cidade',
            'descricao' => 'descricao'
        );
    }
}
