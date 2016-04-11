<?php

namespace App\Models;

class SacChamado extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cod_chamado;

    /**
     *
     * @var integer
     */
    protected $cod_usuario_criacao;

    /**
     *
     * @var integer
     */
    protected $cod_status;

    /**
     *
     * @var integer
     */
    protected $cod_cliente;

    /**
     *
     * @var integer
     */
    protected $cod_reclamante;

    /**
     *
     * @var string
     */
    protected $protocolo;

    /**
     *
     * @var integer
     */
    protected $tipo_atendimento;

    /**
     *
     * @var string
     */
    protected $data_criacao;

    /**
     *
     * @var string
     */
    protected $data_conclusao;

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
     * Method to set the value of field cod_usuario_criacao
     *
     * @param integer $cod_usuario_criacao
     * @return $this
     */
    public function setCodUsuarioCriacao($cod_usuario_criacao)
    {
        $this->cod_usuario_criacao = $cod_usuario_criacao;

        return $this;
    }

    /**
     * Method to set the value of field cod_status
     *
     * @param integer $cod_status
     * @return $this
     */
    public function setCodStatus($cod_status)
    {
        $this->cod_status = $cod_status;

        return $this;
    }

    /**
     * Method to set the value of field cod_cliente
     *
     * @param integer $cod_cliente
     * @return $this
     */
    public function setCodCliente($cod_cliente)
    {
        $this->cod_cliente = $cod_cliente;

        return $this;
    }

    /**
     * Method to set the value of field cod_reclamante
     *
     * @param integer $cod_reclamante
     * @return $this
     */
    public function setCodReclamante($cod_reclamante)
    {
        $this->cod_reclamante = $cod_reclamante;

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
     * Method to set the value of field tipo_atendimento
     *
     * @param integer $tipo_atendimento
     * @return $this
     */
    public function setTipoAtendimento($tipo_atendimento)
    {
        $this->tipo_atendimento = $tipo_atendimento;

        return $this;
    }

    /**
     * Method to set the value of field data_criacao
     *
     * @param string $data_criacao
     * @return $this
     */
    public function setDataCriacao($data_criacao)
    {
        $this->data_criacao = $data_criacao;

        return $this;
    }

    /**
     * Method to set the value of field data_conclusao
     *
     * @param string $data_conclusao
     * @return $this
     */
    public function setDataConclusao($data_conclusao)
    {
        $this->data_conclusao = $data_conclusao;

        return $this;
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
     * Returns the value of field cod_usuario_criacao
     *
     * @return integer
     */
    public function getCodUsuarioCriacao()
    {
        return $this->cod_usuario_criacao;
    }

    /**
     * Returns the value of field cod_status
     *
     * @return integer
     */
    public function getCodStatus()
    {
        return $this->cod_status;
    }

    /**
     * Returns the value of field cod_cliente
     *
     * @return integer
     */
    public function getCodCliente()
    {
        return $this->cod_cliente;
    }

    /**
     * Returns the value of field cod_reclamante
     *
     * @return integer
     */
    public function getCodReclamante()
    {
        return $this->cod_reclamante;
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
     * Returns the value of field tipo_atendimento
     *
     * @return integer
     */
    public function getTipoAtendimento()
    {
        return $this->tipo_atendimento;
    }

    /**
     * Returns the value of field data_criacao
     *
     * @return string
     */
    public function getDataCriacao()
    {
        return $this->data_criacao;
    }

    /**
     * Returns the value of field data_conclusao
     *
     * @return string
     */
    public function getDataConclusao()
    {
        return $this->data_conclusao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cod_chamado', 'App\Models\SacChamadoHasComentarios', 'cod_chamado', array('alias' => 'SacChamadoHasComentarios'));
        $this->hasMany('cod_chamado', 'App\Models\SacChamadoHasHistorico', 'cod_chamado_historico', array('alias' => 'SacChamadoHasHistorico'));
        $this->hasMany('cod_chamado', 'App\Models\SacChamadoHasProblemas', 'cod_chamado', array('alias' => 'SacChamadoHasProblemas'));
        $this->belongsTo('cod_status', 'App\Models\SacStatus', 'cod_status', array('alias' => 'SacStatus'));
        $this->belongsTo('cod_usuario_criacao', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cod_cliente', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cod_reclamante', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->hasMany('cod_chamado', 'App\Models\SacChamadoHasComentarios', 'cod_chamado', NULL);
        $this->hasMany('cod_chamado', 'App\Models\SacChamadoHasHistorico', 'cod_chamado_historico', NULL);
        $this->hasMany('cod_chamado', 'App\Models\SacChamadoHasProblemas', 'cod_chamado', NULL);
        $this->belongsTo('cod_status', 'App\Models\SacStatus', 'cod_status', array('foreignKey' => true,'alias' => 'SacStatus'));
        $this->belongsTo('cod_usuario_criacao', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
        $this->belongsTo('cod_cliente', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cod_reclamante', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sac_chamado';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacChamado[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacChamado
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
            'cod_chamado' => 'cod_chamado',
            'cod_usuario_criacao' => 'cod_usuario_criacao',
            'cod_status' => 'cod_status',
            'cod_cliente' => 'cod_cliente',
            'cod_reclamante' => 'cod_reclamante',
            'protocolo' => 'protocolo',
            'tipo_atendimento' => 'tipo_atendimento',
            'data_criacao' => 'data_criacao',
            'data_conclusao' => 'data_conclusao'
        );
    }

}
