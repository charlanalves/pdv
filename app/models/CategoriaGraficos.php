<?php

namespace App\Models;

class CategoriaGraficos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_categoria;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     * Method to set the value of field cd_categoria
     *
     * @param integer $cd_categoria
     * @return $this
     */
    public function setCdCategoria($cd_categoria)
    {
        $this->cd_categoria = $cd_categoria;

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
     * Returns the value of field cd_categoria
     *
     * @return integer
     */
    public function getCdCategoria()
    {
        return $this->cd_categoria;
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
        $this->hasMany('cd_categoria', 'App\Models\Graficos', 'cd_categoria', array('alias' => 'Graficos'));
        $this->hasMany('cd_categoria', 'App\Models\Graficos', 'cd_categoria', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'categoria_graficos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CategoriaGraficos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CategoriaGraficos
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
            'cd_categoria' => 'cd_categoria',
            'nome' => 'nome'
        );
    }

}
