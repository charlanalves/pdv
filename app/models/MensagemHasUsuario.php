<?php

namespace App\Models;

class MensagemHasUsuario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $mensagem_cd_mensagem;

    /**
     *
     * @var integer
     */
    protected $usuario_cd_usuario;

    /**
     *
     * @var string
     */
    protected $lido;

    /**
     * Method to set the value of field mensagem_cd_mensagem
     *
     * @param integer $mensagem_cd_mensagem
     * @return $this
     */
    public function setMensagemCdMensagem($mensagem_cd_mensagem)
    {
        $this->mensagem_cd_mensagem = $mensagem_cd_mensagem;

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
     * Method to set the value of field lido
     *
     * @param string $lido
     * @return $this
     */
    public function setLido($lido)
    {
        $this->lido = $lido;

        return $this;
    }

    /**
     * Returns the value of field mensagem_cd_mensagem
     *
     * @return integer
     */
    public function getMensagemCdMensagem()
    {
        return $this->mensagem_cd_mensagem;
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
     * Returns the value of field lido
     *
     * @return string
     */
    public function getLido()
    {
        return $this->lido;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('usuario_cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('mensagem_cd_mensagem', 'App\Models\Mensagem', 'cd_mensagem', array('alias' => 'Mensagem'));
        $this->belongsTo('usuario_cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
        $this->belongsTo('mensagem_cd_mensagem', 'App\Models\Mensagem', 'cd_mensagem', array('foreignKey' => true,'alias' => 'Mensagem'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'mensagem_has_usuario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MensagemHasUsuario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MensagemHasUsuario
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
            'mensagem_cd_mensagem' => 'mensagem_cd_mensagem',
            'usuario_cd_usuario' => 'usuario_cd_usuario',
            'lido' => 'lido'
        );
    }

}
