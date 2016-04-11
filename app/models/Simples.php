<?php

namespace App\Models;

class Simples extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_simples;

    /**
     *
     * @var double
     */
    protected $vl_inicio;

    /**
     *
     * @var double
     */
    protected $vl_final;

    /**
     *
     * @var double
     */
    protected $aliquota;

    /**
     *
     * @var integer
     */
    protected $ativo;

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
     * Method to set the value of field cd_simples
     *
     * @param integer $cd_simples
     * @return $this
     */
    public function setCdSimples($cd_simples)
    {
        $this->cd_simples = $cd_simples;

        return $this;
    }

    /**
     * Method to set the value of field vl_inicio
     *
     * @param double $vl_inicio
     * @return $this
     */
    public function setVlInicio($vl_inicio)
    {
        $this->vl_inicio = $vl_inicio;

        return $this;
    }

    /**
     * Method to set the value of field vl_final
     *
     * @param double $vl_final
     * @return $this
     */
    public function setVlFinal($vl_final)
    {
        $this->vl_final = $vl_final;

        return $this;
    }

    /**
     * Method to set the value of field aliquota
     *
     * @param double $aliquota
     * @return $this
     */
    public function setAliquota($aliquota)
    {
        $this->aliquota = $aliquota;

        return $this;
    }

    /**
     * Method to set the value of field ativo
     *
     * @param integer $ativo
     * @return $this
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

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
     * Returns the value of field cd_simples
     *
     * @return integer
     */
    public function getCdSimples()
    {
        return $this->cd_simples;
    }

    /**
     * Returns the value of field vl_inicio
     *
     * @return double
     */
    public function getVlInicio()
    {
        return $this->vl_inicio;
    }

    /**
     * Returns the value of field vl_final
     *
     * @return double
     */
    public function getVlFinal()
    {
        return $this->vl_final;
    }

    /**
     * Returns the value of field aliquota
     *
     * @return double
     */
    public function getAliquota()
    {
        return $this->aliquota;
    }

    /**
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_simples', 'App\Models\UnidadeNegocio', 'cd_simples', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('cd_simples', 'App\Models\UnidadeNegocio', 'cd_simples', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'simples';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Simples[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Simples
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
            'cd_simples' => 'cd_simples',
            'vl_inicio' => 'vl_inicio',
            'vl_final' => 'vl_final',
            'aliquota' => 'aliquota',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
