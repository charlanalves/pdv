<?php

namespace App\Models;

class Perfilusuario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_perfil;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field cd_perfil
     *
     * @param integer $cd_perfil
     * @return $this
     */
    public function setCdPerfil($cd_perfil)
    {
        $this->cd_perfil = $cd_perfil;

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
     * Returns the value of field cd_perfil
     *
     * @return integer
     */
    public function getCdPerfil()
    {
        return $this->cd_perfil;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_perfil', 'App\Models\Permissaoperfilusuario', 'cd_perfil', array('alias' => 'Permissaoperfilusuario'));
        $this->hasMany('cd_perfil', 'App\Models\UsuarioHasPerfil', 'cd_perfil', array('alias' => 'UsuarioHasPerfil'));
        $this->hasMany('cd_perfil', 'App\Models\Permissaoperfilusuario', 'cd_perfil', NULL);
        $this->hasMany('cd_perfil', 'App\Models\UsuarioHasPerfil', 'cd_perfil', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'perfilusuario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Perfilusuario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Perfilusuario
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
            'cd_perfil' => 'cd_perfil',
            'descricao' => 'descricao'
        );
    }

}
