<?php

namespace App\Models;

class DashboardRows extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $titulo;

    /**
     *
     * @var integer
     */
    protected $ordem;

    /**
     *
     * @var integer
     */
    protected $qtd_colunas;

    /**
     *
     * @var string
     */
    protected $publicar;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     *
     * @var string
     */
    protected $params_css;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field titulo
     *
     * @param string $titulo
     * @return $this
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Method to set the value of field ordem
     *
     * @param integer $ordem
     * @return $this
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Method to set the value of field qtd_colunas
     *
     * @param integer $qtd_colunas
     * @return $this
     */
    public function setQtdColunas($qtd_colunas)
    {
        $this->qtd_colunas = $qtd_colunas;

        return $this;
    }

    /**
     * Method to set the value of field publicar
     *
     * @param string $publicar
     * @return $this
     */
    public function setPublicar($publicar)
    {
        $this->publicar = $publicar;

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
     * Method to set the value of field modificado
     *
     * @param string $modificado
     * @return $this
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;

        return $this;
    }

    /**
     * Method to set the value of field params_css
     *
     * @param string $params_css
     * @return $this
     */
    public function setParamsCss($params_css)
    {
        $this->params_css = $params_css;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Returns the value of field ordem
     *
     * @return integer
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Returns the value of field qtd_colunas
     *
     * @return integer
     */
    public function getQtdColunas()
    {
        return $this->qtd_colunas;
    }

    /**
     * Returns the value of field publicar
     *
     * @return string
     */
    public function getPublicar()
    {
        return $this->publicar;
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
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * Returns the value of field params_css
     *
     * @return string
     */
    public function getParamsCss()
    {
        return $this->params_css;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'App\Models\DashboardBox', 'id_rows', array('alias' => 'DashboardBox'));
        $this->hasMany('id', 'App\Models\DashboardBox', 'id_rows', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dashboard_rows';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DashboardRows[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DashboardRows
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
            'id' => 'id',
            'titulo' => 'titulo',
            'ordem' => 'ordem',
            'qtd_colunas' => 'qtd_colunas',
            'publicar' => 'publicar',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'params_css' => 'params_css'
        );
    }

}
