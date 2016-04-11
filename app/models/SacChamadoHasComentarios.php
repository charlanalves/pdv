<?php

namespace App\Models;

class SacChamadoHasComentarios extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cod_comentario;

    /**
     *
     * @var integer
     */
    protected $cod_chamado;

    /**
     *
     * @var integer
     */
    protected $cod_usuario;

    /**
     *
     * @var string
     */
    protected $comentario;

    /**
     *
     * @var string
     */
    protected $data_envio;

    /**
     * Method to set the value of field cod_comentario
     *
     * @param integer $cod_comentario
     * @return $this
     */
    public function setCodComentario($cod_comentario)
    {
        $this->cod_comentario = $cod_comentario;

        return $this;
    }

    /**
     * Method to set the value of field cod_chamado
     *
     * @param integer $cod_chamado
     * @return $this
     */
    public function setCodChamado($cod_chamado)
    {
        $this->cod_chamado = $cod_chamado;

        return $this;
    }

    /**
     * Method to set the value of field cod_usuario
     *
     * @param integer $cod_usuario
     * @return $this
     */
    public function setCodUsuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;

        return $this;
    }

    /**
     * Method to set the value of field comentario
     *
     * @param string $comentario
     * @return $this
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Method to set the value of field data_envio
     *
     * @param string $data_envio
     * @return $this
     */
    public function setDataEnvio($data_envio)
    {
        $this->data_envio = $data_envio;

        return $this;
    }

    /**
     * Returns the value of field cod_comentario
     *
     * @return integer
     */
    public function getCodComentario()
    {
        return $this->cod_comentario;
    }

    /**
     * Returns the value of field cod_chamado
     *
     * @return integer
     */
    public function getCodChamado()
    {
        return $this->cod_chamado;
    }

    /**
     * Returns the value of field cod_usuario
     *
     * @return integer
     */
    public function getCodUsuario()
    {
        return $this->cod_usuario;
    }

    /**
     * Returns the value of field comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Returns the value of field data_envio
     *
     * @return string
     */
    public function getDataEnvio()
    {
        return $this->data_envio;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cod_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cod_chamado', 'App\Models\SacChamado', 'cod_chamado', array('alias' => 'SacChamado'));
        $this->belongsTo('cod_usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
        $this->belongsTo('cod_chamado', 'App\Models\SacChamado', 'cod_chamado', array('foreignKey' => true,'alias' => 'SacChamado'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sac_chamado_has_comentarios';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacChamadoHasComentarios[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacChamadoHasComentarios
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
            'cod_comentario' => 'cod_comentario',
            'cod_chamado' => 'cod_chamado',
            'cod_usuario' => 'cod_usuario',
            'comentario' => 'comentario',
            'data_envio' => 'data_envio'
        );
    }

}
