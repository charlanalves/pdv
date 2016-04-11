<?php

namespace App\Models;

class LogSystem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_log;

    /**
     *
     * @var integer
     */
    protected $usuario;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $acao;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $sqlGerado;

    /**
     * Method to set the value of field cd_log
     *
     * @param integer $cd_log
     * @return $this
     */
    public function setCdLog($cd_log)
    {
        $this->cd_log = $cd_log;

        return $this;
    }

    /**
     * Method to set the value of field usuario
     *
     * @param integer $usuario
     * @return $this
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

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
     * Method to set the value of field acao
     *
     * @param string $acao
     * @return $this
     */
    public function setAcao($acao)
    {
        $this->acao = $acao;

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
     * Method to set the value of field sqlGerado
     *
     * @param string $sqlGerado
     * @return $this
     */
    public function setSqlGerado($sqlGerado)
    {
        $this->sqlGerado = $sqlGerado;

        return $this;
    }

    /**
     * Returns the value of field cd_log
     *
     * @return integer
     */
    public function getCdLog()
    {
        return $this->cd_log;
    }

    /**
     * Returns the value of field usuario
     *
     * @return integer
     */
    public function getUsuario()
    {
        return $this->usuario;
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
     * Returns the value of field acao
     *
     * @return string
     */
    public function getAcao()
    {
        return $this->acao;
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
     * Returns the value of field sqlGerado
     *
     * @return string
     */
    public function getSqlGerado()
    {
        return $this->sqlGerado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'log_system';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LogSystem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LogSystem
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
            'cd_log' => 'cd_log',
            'usuario' => 'usuario',
            'descricao' => 'descricao',
            'acao' => 'acao',
            'criado' => 'criado',
            'sqlGerado' => 'sqlGerado'
        );
    }

}
