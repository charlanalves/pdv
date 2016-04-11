<?php

namespace App\Models;

class CodMunicipio extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    protected $Codigo;

    /**
     *
     * @var string
     */
    protected $UF;

    /**
     *
     * @var string
     */
    protected $cidade;

    /**
     * Method to set the value of field Codigo
     *
     * @param string $Codigo
     * @return $this
     */
    public function setCodigo($Codigo)
    {
        $this->Codigo = $Codigo;

        return $this;
    }

    /**
     * Method to set the value of field UF
     *
     * @param string $UF
     * @return $this
     */
    public function setUF($UF)
    {
        $this->UF = $UF;

        return $this;
    }

    /**
     * Method to set the value of field cidade
     *
     * @param string $cidade
     * @return $this
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Returns the value of field Codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->Codigo;
    }

    /**
     * Returns the value of field UF
     *
     * @return string
     */
    public function getUF()
    {
        return $this->UF;
    }

    /**
     * Returns the value of field cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cod_municipio';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CodMunicipio[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CodMunicipio
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
            'Codigo' => 'Codigo',
            'UF' => 'UF',
            'cidade' => 'cidade'
        );
    }

}
