<?php

namespace App\Models;

class Carga extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_carga;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var integer
     */
    protected $motorista;

    /**
     *
     * @var integer
     */
    protected $caminhao_cd_caminhao;

    /**
     *
     * @var integer
     */
    protected $tipofrete;

    /**
     *
     * @var integer
     */
    protected $transportador;

    /**
     *
     * @var string
     */
    protected $data_carga;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $status_carga;

    /**
     *
     * @var string
     */
    protected $data_prevista_inicial;

    /**
     *
     * @var string
     */
    protected $data_prevista_atual;

    /**
     *
     * @var integer
     */
    protected $ativo;

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
    protected $tempoEstimado;

    /**
     *
     * @var integer
     */
    protected $producao;

    /**
     *
     * @var string
     */
    protected $data_producao;

    /**
     *
     * @var string
     */
    protected $alerta;

    /**
     * Method to set the value of field cd_carga
     *
     * @param integer $cd_carga
     * @return $this
     */
    public function setCdCarga($cd_carga)
    {
        $this->cd_carga = $cd_carga;

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
     * Method to set the value of field motorista
     *
     * @param integer $motorista
     * @return $this
     */
    public function setMotorista($motorista)
    {
        $this->motorista = $motorista;

        return $this;
    }

    /**
     * Method to set the value of field caminhao_cd_caminhao
     *
     * @param integer $caminhao_cd_caminhao
     * @return $this
     */
    public function setCaminhaoCdCaminhao($caminhao_cd_caminhao)
    {
        $this->caminhao_cd_caminhao = $caminhao_cd_caminhao;

        return $this;
    }

    /**
     * Method to set the value of field tipofrete
     *
     * @param integer $tipofrete
     * @return $this
     */
    public function setTipofrete($tipofrete)
    {
        $this->tipofrete = $tipofrete;

        return $this;
    }

    /**
     * Method to set the value of field transportador
     *
     * @param integer $transportador
     * @return $this
     */
    public function setTransportador($transportador)
    {
        $this->transportador = $transportador;

        return $this;
    }

    /**
     * Method to set the value of field data_carga
     *
     * @param string $data_carga
     * @return $this
     */
    public function setDataCarga($data_carga)
    {
        $this->data_carga = $data_carga;

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
     * Method to set the value of field status_carga
     *
     * @param integer $status_carga
     * @return $this
     */
    public function setStatusCarga($status_carga)
    {
        $this->status_carga = $status_carga;

        return $this;
    }

    /**
     * Method to set the value of field data_prevista_inicial
     *
     * @param string $data_prevista_inicial
     * @return $this
     */
    public function setDataPrevistaInicial($data_prevista_inicial)
    {
        $this->data_prevista_inicial = $data_prevista_inicial;

        return $this;
    }

    /**
     * Method to set the value of field data_prevista_atual
     *
     * @param string $data_prevista_atual
     * @return $this
     */
    public function setDataPrevistaAtual($data_prevista_atual)
    {
        $this->data_prevista_atual = $data_prevista_atual;

        return $this;
    }

    /**
     * Method to set the value of field ativo
     *
     * @param integer $ativo
     * @return $this
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

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
     * Method to set the value of field tempoEstimado
     *
     * @param string $tempoEstimado
     * @return $this
     */
    public function setTempoEstimado($tempoEstimado)
    {
        $this->tempoEstimado = $tempoEstimado;

        return $this;
    }

    /**
     * Method to set the value of field producao
     *
     * @param integer $producao
     * @return $this
     */
    public function setProducao($producao)
    {
        $this->producao = $producao;

        return $this;
    }

    /**
     * Method to set the value of field data_producao
     *
     * @param string $data_producao
     * @return $this
     */
    public function setDataProducao($data_producao)
    {
        $this->data_producao = $data_producao;

        return $this;
    }

    /**
     * Method to set the value of field alerta
     *
     * @param string $alerta
     * @return $this
     */
    public function setAlerta($alerta)
    {
        $this->alerta = $alerta;

        return $this;
    }

    /**
     * Returns the value of field cd_carga
     *
     * @return integer
     */
    public function getCdCarga()
    {
        return $this->cd_carga;
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
     * Returns the value of field motorista
     *
     * @return integer
     */
    public function getMotorista()
    {
        return $this->motorista;
    }

    /**
     * Returns the value of field caminhao_cd_caminhao
     *
     * @return integer
     */
    public function getCaminhaoCdCaminhao()
    {
        return $this->caminhao_cd_caminhao;
    }

    /**
     * Returns the value of field tipofrete
     *
     * @return integer
     */
    public function getTipofrete()
    {
        return $this->tipofrete;
    }

    /**
     * Returns the value of field transportador
     *
     * @return integer
     */
    public function getTransportador()
    {
        return $this->transportador;
    }

    /**
     * Returns the value of field data_carga
     *
     * @return string
     */
    public function getDataCarga()
    {
        return $this->data_carga;
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
     * Returns the value of field status_carga
     *
     * @return integer
     */
    public function getStatusCarga()
    {
        return $this->status_carga;
    }

    /**
     * Returns the value of field data_prevista_inicial
     *
     * @return string
     */
    public function getDataPrevistaInicial()
    {
        return $this->data_prevista_inicial;
    }

    /**
     * Returns the value of field data_prevista_atual
     *
     * @return string
     */
    public function getDataPrevistaAtual()
    {
        return $this->data_prevista_atual;
    }

    /**
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
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
     * Returns the value of field tempoEstimado
     *
     * @return string
     */
    public function getTempoEstimado()
    {
        return $this->tempoEstimado;
    }

    /**
     * Returns the value of field producao
     *
     * @return integer
     */
    public function getProducao()
    {
        return $this->producao;
    }

    /**
     * Returns the value of field data_producao
     *
     * @return string
     */
    public function getDataProducao()
    {
        return $this->data_producao;
    }

    /**
     * Returns the value of field alerta
     *
     * @return string
     */
    public function getAlerta()
    {
        return $this->alerta;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_carga', 'App\Models\CargaHasPedido', 'carga_cd_carga', array('alias' => 'CargaHasPedido'));
        $this->hasMany('cd_carga', 'App\Models\CargaOrdemRota', 'cd_carga', array('alias' => 'CargaOrdemRota'));
        $this->hasMany('cd_carga', 'App\Models\HistoricoCarga', 'carga_cd_carga', array('alias' => 'HistoricoCarga'));
        $this->belongsTo('transportador', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('caminhao_cd_caminhao', 'App\Models\Caminhao', 'cd_caminhao', array('alias' => 'Caminhao'));
        $this->belongsTo('motorista', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->hasMany('cd_carga', 'App\Models\CargaHasPedido', 'carga_cd_carga', NULL);
        $this->hasMany('cd_carga', 'App\Models\CargaOrdemRota', 'cd_carga', NULL);
        $this->hasMany('cd_carga', 'App\Models\HistoricoCarga', 'carga_cd_carga', NULL);
        $this->belongsTo('transportador', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
        $this->belongsTo('caminhao_cd_caminhao', 'App\Models\Caminhao', 'cd_caminhao', array('foreignKey' => true,'alias' => 'Caminhao'));
        $this->belongsTo('motorista', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'carga';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Carga[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Carga
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
            'cd_carga' => 'cd_carga',
            'cd_unidade' => 'cd_unidade',
            'motorista' => 'motorista',
            'caminhao_cd_caminhao' => 'caminhao_cd_caminhao',
            'tipofrete' => 'tipofrete',
            'transportador' => 'transportador',
            'data_carga' => 'data_carga',
            'descricao' => 'descricao',
            'status_carga' => 'status_carga',
            'data_prevista_inicial' => 'data_prevista_inicial',
            'data_prevista_atual' => 'data_prevista_atual',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'tempoEstimado' => 'tempoEstimado',
            'producao' => 'producao',
            'data_producao' => 'data_producao',
            'alerta' => 'alerta'
        );
    }

}
