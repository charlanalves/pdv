<?php

namespace App\Models;

class InformativoHasUsuario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $informativo_cd_informativo;

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
     * Method to set the value of field informativo_cd_informativo
     *
     * @param integer $informativo_cd_informativo
     * @return $this
     */
    public function setInformativoCdInformativo($informativo_cd_informativo)
    {
        $this->informativo_cd_informativo = $informativo_cd_informativo;

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
     * Returns the value of field informativo_cd_informativo
     *
     * @return integer
     */
    public function getInformativoCdInformativo()
    {
        return $this->informativo_cd_informativo;
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
        $this->belongsTo('informativo_cd_informativo', 'App\Models\Informativo', 'cd_informativo', array('alias' => 'Informativo'));
        $this->belongsTo('usuario_cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('informativo_cd_informativo', 'App\Models\Informativo', 'cd_informativo', array('foreignKey' => true,'alias' => 'Informativo'));
        $this->belongsTo('usuario_cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'informativo_has_usuario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return InformativoHasUsuario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return InformativoHasUsuario
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
            'informativo_cd_informativo' => 'informativo_cd_informativo',
            'usuario_cd_usuario' => 'usuario_cd_usuario',
            'lido' => 'lido'
        );
    }

}
