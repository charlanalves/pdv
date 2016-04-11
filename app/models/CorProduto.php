<?php

namespace App\Models;

class CorProduto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_cor;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $hexadecimal;

    /**
     *
     * @var string
     */
    protected $textcolor;

    /**
     * Method to set the value of field cd_cor
     *
     * @param integer $cd_cor
     * @return $this
     */
    public function setCdCor($cd_cor)
    {
        $this->cd_cor = $cd_cor;

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
     * Method to set the value of field hexadecimal
     *
     * @param string $hexadecimal
     * @return $this
     */
    public function setHexadecimal($hexadecimal)
    {
        $this->hexadecimal = $hexadecimal;

        return $this;
    }

    /**
     * Method to set the value of field textcolor
     *
     * @param string $textcolor
     * @return $this
     */
    public function setTextcolor($textcolor)
    {
        $this->textcolor = $textcolor;

        return $this;
    }

    /**
     * Returns the value of field cd_cor
     *
     * @return integer
     */
    public function getCdCor()
    {
        return $this->cd_cor;
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
     * Returns the value of field hexadecimal
     *
     * @return string
     */
    public function getHexadecimal()
    {
        return $this->hexadecimal;
    }

    /**
     * Returns the value of field textcolor
     *
     * @return string
     */
    public function getTextcolor()
    {
        return $this->textcolor;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_cor', 'App\Models\Produto', 'cd_cor_produto', array('alias' => 'Produto'));
        $this->hasMany('cd_cor', 'App\Models\Produto', 'cd_cor_produto', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cor_produto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CorProduto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CorProduto
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
            'cd_cor' => 'cd_cor',
            'nome' => 'nome',
            'hexadecimal' => 'hexadecimal',
            'textcolor' => 'textcolor'
        );
    }

}
