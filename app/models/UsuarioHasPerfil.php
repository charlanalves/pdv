<?php

namespace App\Models;

class UsuarioHasPerfil extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_usuario;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var integer
     */
    protected $cd_perfil;

    /**
     * Method to set the value of field cd_usuario
     *
     * @param integer $cd_usuario
     * @return $this
     */
    public function setCdUsuario($cd_usuario)
    {
        $this->cd_usuario = $cd_usuario;

        return $this;
    }

    /**
     * Method to set the value of field cd_unidade
     *
     * @param integer $cd_unidade
     * @return $this
     */
    public function setCdUnidade($cd_unidade)
    {
        $this->cd_unidade = $cd_unidade;

        return $this;
    }

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
     * Returns the value of field cd_usuario
     *
     * @return integer
     */
    public function getCdUsuario()
    {
        return $this->cd_usuario;
    }

    /**
     * Returns the value of field cd_unidade
     *
     * @return integer
     */
    public function getCdUnidade()
    {
        return $this->cd_unidade;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_perfil', 'App\Models\Perfilusuario', 'cd_perfil', array('alias' => 'Perfilusuario'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cd_perfil', 'App\Models\Perfilusuario', 'cd_perfil', array('foreignKey' => true,'alias' => 'Perfilusuario'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'usuario_has_perfil';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UsuarioHasPerfil[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UsuarioHasPerfil
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
            'cd_usuario' => 'cd_usuario',
            'cd_unidade' => 'cd_unidade',
            'cd_perfil' => 'cd_perfil'
        );
    }

}
