<?php

namespace App\Models;

class CodigoAjustesFiscais extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_ajustes;

    /**
     *
     * @var string
     */
    protected $codigo_ajustes;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field id_ajustes
     *
     * @param integer $id_ajustes
     * @return $this
     */
    public function setIdAjustes($id_ajustes)
    {
        $this->id_ajustes = $id_ajustes;

        return $this;
    }

    /**
     * Method to set the value of field codigo_ajustes
     *
     * @param string $codigo_ajustes
     * @return $this
     */
    public function setCodigoAjustes($codigo_ajustes)
    {
        $this->codigo_ajustes = $codigo_ajustes;

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
     * Returns the value of field id_ajustes
     *
     * @return integer
     */
    public function getIdAjustes()
    {
        return $this->id_ajustes;
    }

    /**
     * Returns the value of field codigo_ajustes
     *
     * @return string
     */
    public function getCodigoAjustes()
    {
        return $this->codigo_ajustes;
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
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'codigo_ajustes_fiscais';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CodigoAjustesFiscais[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CodigoAjustesFiscais
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
            'id_ajustes' => 'id_ajustes',
            'codigo_ajustes' => 'codigo_ajustes',
            'descricao' => 'descricao'
        );
    }

}
