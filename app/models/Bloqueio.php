<?php

namespace App\Models;

class Bloqueio extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_bloqueio;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var string
     */
    protected $motivo;

    /**
     *
     * @var integer
     */
    protected $bloqueado;

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
     *
     * @var string
     */
    protected $motivo_desbloquio;

    /**
     * Method to set the value of field cd_bloqueio
     *
     * @param integer $cd_bloqueio
     * @return $this
     */
    public function setCdBloqueio($cd_bloqueio)
    {
        $this->cd_bloqueio = $cd_bloqueio;

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
     * Method to set the value of field motivo
     *
     * @param string $motivo
     * @return $this
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Method to set the value of field bloqueado
     *
     * @param integer $bloqueado
     * @return $this
     */
    public function setBloqueado($bloqueado)
    {
        $this->bloqueado = $bloqueado;

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
     * Method to set the value of field motivo_desbloquio
     *
     * @param string $motivo_desbloquio
     * @return $this
     */
    public function setMotivoDesbloquio($motivo_desbloquio)
    {
        $this->motivo_desbloquio = $motivo_desbloquio;

        return $this;
    }

    /**
     * Returns the value of field cd_bloqueio
     *
     * @return integer
     */
    public function getCdBloqueio()
    {
        return $this->cd_bloqueio;
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
     * Returns the value of field motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Returns the value of field bloqueado
     *
     * @return integer
     */
    public function getBloqueado()
    {
        return $this->bloqueado;
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
     * Returns the value of field motivo_desbloquio
     *
     * @return string
     */
    public function getMotivoDesbloquio()
    {
        return $this->motivo_desbloquio;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'bloqueio';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bloqueio[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bloqueio
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
            'cd_bloqueio' => 'cd_bloqueio',
            'cd_unidade' => 'cd_unidade',
            'motivo' => 'motivo',
            'bloqueado' => 'bloqueado',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'motivo_desbloquio' => 'motivo_desbloquio'
        );
    }

}
