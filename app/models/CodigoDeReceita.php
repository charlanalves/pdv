<?php

namespace App\Models;

class CodigoDeReceita extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_receita;

    /**
     *
     * @var string
     */
    protected $codigo_receita;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $uf;

    /**
     * Method to set the value of field id_receita
     *
     * @param integer $id_receita
     * @return $this
     */
    public function setIdReceita($id_receita)
    {
        $this->id_receita = $id_receita;

        return $this;
    }

    /**
     * Method to set the value of field codigo_receita
     *
     * @param string $codigo_receita
     * @return $this
     */
    public function setCodigoReceita($codigo_receita)
    {
        $this->codigo_receita = $codigo_receita;

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
     * Method to set the value of field uf
     *
     * @param string $uf
     * @return $this
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Returns the value of field id_receita
     *
     * @return integer
     */
    public function getIdReceita()
    {
        return $this->id_receita;
    }

    /**
     * Returns the value of field codigo_receita
     *
     * @return string
     */
    public function getCodigoReceita()
    {
        return $this->codigo_receita;
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
     * Returns the value of field uf
     *
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'codigo_de_receita';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CodigoDeReceita[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CodigoDeReceita
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
            'id_receita' => 'id_receita',
            'codigo_receita' => 'codigo_receita',
            'descricao' => 'descricao',
            'uf' => 'uf'
        );
    }

}
