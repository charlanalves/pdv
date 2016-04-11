<?php

namespace App\Models;

class Graficos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_grafico;

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
     *
     * @var string
     */
    protected $url;

    /**
     *
     * @var integer
     */
    protected $has_periodo;

    /**
     * Method to set the value of field cd_grafico
     *
     * @param integer $cd_grafico
     * @return $this
     */
    public function setCdGrafico($cd_grafico)
    {
        $this->cd_grafico = $cd_grafico;

        return $this;
    }

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
     * Method to set the value of field url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Method to set the value of field has_periodo
     *
     * @param integer $has_periodo
     * @return $this
     */
    public function setHasPeriodo($has_periodo)
    {
        $this->has_periodo = $has_periodo;

        return $this;
    }

    /**
     * Returns the value of field cd_grafico
     *
     * @return integer
     */
    public function getCdGrafico()
    {
        return $this->cd_grafico;
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
     * Returns the value of field url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Returns the value of field has_periodo
     *
     * @return integer
     */
    public function getHasPeriodo()
    {
        return $this->has_periodo;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_categoria', 'App\Models\CategoriaGraficos', 'cd_categoria', array('alias' => 'CategoriaGraficos'));
        $this->belongsTo('cd_categoria', 'App\Models\CategoriaGraficos', 'cd_categoria', array('foreignKey' => true,'alias' => 'CategoriaGraficos'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'graficos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Graficos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Graficos
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
            'cd_grafico' => 'cd_grafico',
            'cd_categoria' => 'cd_categoria',
            'nome' => 'nome',
            'url' => 'url',
            'has_periodo' => 'has_periodo'
        );
    }

}
