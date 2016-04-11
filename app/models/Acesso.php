<?php

namespace App\Models;

class Acesso extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_acesso;

    /**
     *
     * @var integer
     */
    protected $usuario_cd_usuario;

    /**
     *
     * @var string
     */
    protected $ip;

    /**
     *
     * @var string
     */
    protected $sessao;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     * Method to set the value of field cd_acesso
     *
     * @param integer $cd_acesso
     * @return $this
     */
    public function setCdAcesso($cd_acesso)
    {
        $this->cd_acesso = $cd_acesso;

        return $this;
    }

    /**
     * Method to set the value of field usuario_cd_usuario
     *
     * @param integer $usuario_cd_usuario
     * @return $this
     */
    public function setUsuarioCdUsuario($usuario_cd_usuario)
    {
        $this->usuario_cd_usuario = $usuario_cd_usuario;

        return $this;
    }

    /**
     * Method to set the value of field ip
     *
     * @param string $ip
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Method to set the value of field sessao
     *
     * @param string $sessao
     * @return $this
     */
    public function setSessao($sessao)
    {
        $this->sessao = $sessao;

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
     * Returns the value of field cd_acesso
     *
     * @return integer
     */
    public function getCdAcesso()
    {
        return $this->cd_acesso;
    }

    /**
     * Returns the value of field usuario_cd_usuario
     *
     * @return integer
     */
    public function getUsuarioCdUsuario()
    {
        return $this->usuario_cd_usuario;
    }

    /**
     * Returns the value of field ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Returns the value of field sessao
     *
     * @return string
     */
    public function getSessao()
    {
        return $this->sessao;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('usuario_cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('usuario_cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'acesso';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Acesso[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Acesso
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
            'cd_acesso' => 'cd_acesso',
            'usuario_cd_usuario' => 'usuario_cd_usuario',
            'ip' => 'ip',
            'sessao' => 'sessao',
            'criado' => 'criado'
        );
    }

}
