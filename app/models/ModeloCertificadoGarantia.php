<?php

namespace App\Models;

class ModeloCertificadoGarantia extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_certificado;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $texto;

    /**
     * Method to set the value of field id_certificado
     *
     * @param integer $id_certificado
     * @return $this
     */
    public function setIdCertificado($id_certificado)
    {
        $this->id_certificado = $id_certificado;

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
     * Method to set the value of field texto
     *
     * @param string $texto
     * @return $this
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Returns the value of field id_certificado
     *
     * @return integer
     */
    public function getIdCertificado()
    {
        return $this->id_certificado;
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
     * Returns the value of field texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_certificado', 'App\Models\Produto', 'certificado_garantia', array('alias' => 'Produto'));
        $this->hasMany('id_certificado', 'App\Models\Produto', 'certificado_garantia', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'modelo_certificado_garantia';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ModeloCertificadoGarantia[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ModeloCertificadoGarantia
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
            'id_certificado' => 'id_certificado',
            'nome' => 'nome',
            'texto' => 'texto'
        );
    }

}
