<?php

namespace App\Models;

class Cargo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_cargo;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var integer
     */
    protected $id_ocupacao;

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
     * Method to set the value of field cd_cargo
     *
     * @param integer $cd_cargo
     * @return $this
     */
    public function setCdCargo($cd_cargo)
    {
        $this->cd_cargo = $cd_cargo;

        return $this;
    }

    /**
     * Method to set the value of field cd_empresa
     *
     * @param integer $cd_empresa
     * @return $this
     */
    public function setCdEmpresa($cd_empresa)
    {
        $this->cd_empresa = $cd_empresa;

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
     * Method to set the value of field id_ocupacao
     *
     * @param integer $id_ocupacao
     * @return $this
     */
    public function setIdOcupacao($id_ocupacao)
    {
        $this->id_ocupacao = $id_ocupacao;

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
     * Returns the value of field cd_cargo
     *
     * @return integer
     */
    public function getCdCargo()
    {
        return $this->cd_cargo;
    }

    /**
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdEmpresa()
    {
        return $this->cd_empresa;
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
     * Returns the value of field id_ocupacao
     *
     * @return integer
     */
    public function getIdOcupacao()
    {
        return $this->id_ocupacao;
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
        $this->hasMany('cd_cargo', 'App\Models\Empresa', 'cd_cargo', array('alias' => 'Empresa'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('id_ocupacao', 'App\Models\Cbo', 'id_ocupacao', array('alias' => 'Cbo'));
        $this->hasMany('cd_cargo', 'App\Models\Empresa', 'cd_cargo', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('id_ocupacao', 'App\Models\Cbo', 'id_ocupacao', array('foreignKey' => true,'alias' => 'Cbo'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cargo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cargo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cargo
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
            'cd_cargo' => 'cd_cargo',
            'cd_empresa' => 'cd_empresa',
            'nome' => 'nome',
            'id_ocupacao' => 'id_ocupacao',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
