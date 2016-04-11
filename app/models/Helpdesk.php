<?php

namespace App\Models;

class Helpdesk extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idchamado;

    /**
     *
     * @var string
     */
    protected $protocolo;

    /**
     *
     * @var integer
     */
    protected $tipo_problema;

    /**
     *
     * @var integer
     */
    protected $usuario_responsavel;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $empresa_cd_empresa;

    /**
     *
     * @var string
     */
    protected $solucao;

    /**
     *
     * @var string
     */
    protected $observacao;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $encerrado;

    /**
     *
     * @var string
     */
    protected $previsao_atendimento;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     * Method to set the value of field idchamado
     *
     * @param integer $idchamado
     * @return $this
     */
    public function setIdchamado($idchamado)
    {
        $this->idchamado = $idchamado;

        return $this;
    }

    /**
     * Method to set the value of field protocolo
     *
     * @param string $protocolo
     * @return $this
     */
    public function setProtocolo($protocolo)
    {
        $this->protocolo = $protocolo;

        return $this;
    }

    /**
     * Method to set the value of field tipo_problema
     *
     * @param integer $tipo_problema
     * @return $this
     */
    public function setTipoProblema($tipo_problema)
    {
        $this->tipo_problema = $tipo_problema;

        return $this;
    }

    /**
     * Method to set the value of field usuario_responsavel
     *
     * @param integer $usuario_responsavel
     * @return $this
     */
    public function setUsuarioResponsavel($usuario_responsavel)
    {
        $this->usuario_responsavel = $usuario_responsavel;

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
     * Method to set the value of field empresa_cd_empresa
     *
     * @param integer $empresa_cd_empresa
     * @return $this
     */
    public function setEmpresaCdEmpresa($empresa_cd_empresa)
    {
        $this->empresa_cd_empresa = $empresa_cd_empresa;

        return $this;
    }

    /**
     * Method to set the value of field solucao
     *
     * @param string $solucao
     * @return $this
     */
    public function setSolucao($solucao)
    {
        $this->solucao = $solucao;

        return $this;
    }

    /**
     * Method to set the value of field observacao
     *
     * @param string $observacao
     * @return $this
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

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
     * Method to set the value of field encerrado
     *
     * @param string $encerrado
     * @return $this
     */
    public function setEncerrado($encerrado)
    {
        $this->encerrado = $encerrado;

        return $this;
    }

    /**
     * Method to set the value of field previsao_atendimento
     *
     * @param string $previsao_atendimento
     * @return $this
     */
    public function setPrevisaoAtendimento($previsao_atendimento)
    {
        $this->previsao_atendimento = $previsao_atendimento;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Returns the value of field idchamado
     *
     * @return integer
     */
    public function getIdchamado()
    {
        return $this->idchamado;
    }

    /**
     * Returns the value of field protocolo
     *
     * @return string
     */
    public function getProtocolo()
    {
        return $this->protocolo;
    }

    /**
     * Returns the value of field tipo_problema
     *
     * @return integer
     */
    public function getTipoProblema()
    {
        return $this->tipo_problema;
    }

    /**
     * Returns the value of field usuario_responsavel
     *
     * @return integer
     */
    public function getUsuarioResponsavel()
    {
        return $this->usuario_responsavel;
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
     * Returns the value of field empresa_cd_empresa
     *
     * @return integer
     */
    public function getEmpresaCdEmpresa()
    {
        return $this->empresa_cd_empresa;
    }

    /**
     * Returns the value of field solucao
     *
     * @return string
     */
    public function getSolucao()
    {
        return $this->solucao;
    }

    /**
     * Returns the value of field observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
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
     * Returns the value of field encerrado
     *
     * @return string
     */
    public function getEncerrado()
    {
        return $this->encerrado;
    }

    /**
     * Returns the value of field previsao_atendimento
     *
     * @return string
     */
    public function getPrevisaoAtendimento()
    {
        return $this->previsao_atendimento;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('tipo_problema', 'App\Models\HelpdeskProblemasPadrao', 'id_padrao', array('alias' => 'HelpdeskProblemasPadrao'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('tipo_problema', 'App\Models\HelpdeskProblemasPadrao', 'id_padrao', array('foreignKey' => true,'alias' => 'HelpdeskProblemasPadrao'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'helpdesk';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Helpdesk[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Helpdesk
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
            'idchamado' => 'idchamado',
            'protocolo' => 'protocolo',
            'tipo_problema' => 'tipo_problema',
            'usuario_responsavel' => 'usuario_responsavel',
            'descricao' => 'descricao',
            'empresa_cd_empresa' => 'empresa_cd_empresa',
            'solucao' => 'solucao',
            'observacao' => 'observacao',
            'criado' => 'criado',
            'encerrado' => 'encerrado',
            'previsao_atendimento' => 'previsao_atendimento',
            'status' => 'status'
        );
    }

}
