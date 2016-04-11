<?php

namespace App\Models;

class CodigoModeloFiscal extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_codigo;

    /**
     *
     * @var string
     */
    protected $codigo;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $modelo;

    /**
     *
     * @var string
     */
    protected $registro_pai;

    /**
     * Method to set the value of field id_codigo
     *
     * @param integer $id_codigo
     * @return $this
     */
    public function setIdCodigo($id_codigo)
    {
        $this->id_codigo = $id_codigo;

        return $this;
    }

    /**
     * Method to set the value of field codigo
     *
     * @param string $codigo
     * @return $this
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

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
     * Method to set the value of field modelo
     *
     * @param string $modelo
     * @return $this
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Method to set the value of field registro_pai
     *
     * @param string $registro_pai
     * @return $this
     */
    public function setRegistroPai($registro_pai)
    {
        $this->registro_pai = $registro_pai;

        return $this;
    }

    /**
     * Returns the value of field id_codigo
     *
     * @return integer
     */
    public function getIdCodigo()
    {
        return $this->id_codigo;
    }

    /**
     * Returns the value of field codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
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
     * Returns the value of field modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Returns the value of field registro_pai
     *
     * @return string
     */
    public function getRegistroPai()
    {
        return $this->registro_pai;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_codigo', 'App\Models\Nfservico', 'cd_modelo', array('alias' => 'Nfservico'));
        $this->hasMany('id_codigo', 'App\Models\UnidadeNegocio', 'modelo_documento_fisical', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('id_codigo', 'App\Models\Nfservico', 'cd_modelo', NULL);
        $this->hasMany('id_codigo', 'App\Models\UnidadeNegocio', 'modelo_documento_fisical', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'codigo_modelo_fiscal';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CodigoModeloFiscal[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CodigoModeloFiscal
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
            'id_codigo' => 'id_codigo',
            'codigo' => 'codigo',
            'descricao' => 'descricao',
            'modelo' => 'modelo',
            'registro_pai' => 'registro_pai'
        );
    }

}
