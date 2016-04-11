<?php

namespace App\Models;

class Opetapa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_etapa;

    /**
     *
     * @var integer
     */
    protected $cod_op;

    /**
     *
     * @var integer
     */
    protected $responsavel;

    /**
     *
     * @var string
     */
    protected $descricaoetapa;

    /**
     *
     * @var string
     */
    protected $descricaoerro;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $inicio;

    /**
     *
     * @var string
     */
    protected $fim;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $cd_equipe;

    /**
     *
     * @var integer
     */
    protected $custo_hora;

    /**
     *
     * @var string
     */
    protected $tempo_estimado_etapa;

    /**
     *
     * @var string
     */
    protected $tempo_minimo_entre_etapa;

    /**
     *
     * @var integer
     */
    protected $tipo_etapa;

    /**
     * Method to set the value of field cd_etapa
     *
     * @param integer $cd_etapa
     * @return $this
     */
    public function setCdEtapa($cd_etapa)
    {
        $this->cd_etapa = $cd_etapa;

        return $this;
    }

    /**
     * Method to set the value of field cod_op
     *
     * @param integer $cod_op
     * @return $this
     */
    public function setCodOp($cod_op)
    {
        $this->cod_op = $cod_op;

        return $this;
    }

    /**
     * Method to set the value of field responsavel
     *
     * @param integer $responsavel
     * @return $this
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Method to set the value of field descricaoetapa
     *
     * @param string $descricaoetapa
     * @return $this
     */
    public function setDescricaoetapa($descricaoetapa)
    {
        $this->descricaoetapa = $descricaoetapa;

        return $this;
    }

    /**
     * Method to set the value of field descricaoerro
     *
     * @param string $descricaoerro
     * @return $this
     */
    public function setDescricaoerro($descricaoerro)
    {
        $this->descricaoerro = $descricaoerro;

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
     * Method to set the value of field inicio
     *
     * @param string $inicio
     * @return $this
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Method to set the value of field fim
     *
     * @param string $fim
     * @return $this
     */
    public function setFim($fim)
    {
        $this->fim = $fim;

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
     * Method to set the value of field cd_equipe
     *
     * @param integer $cd_equipe
     * @return $this
     */
    public function setCdEquipe($cd_equipe)
    {
        $this->cd_equipe = $cd_equipe;

        return $this;
    }

    /**
     * Method to set the value of field custo_hora
     *
     * @param integer $custo_hora
     * @return $this
     */
    public function setCustoHora($custo_hora)
    {
        $this->custo_hora = $custo_hora;

        return $this;
    }

    /**
     * Method to set the value of field tempo_estimado_etapa
     *
     * @param string $tempo_estimado_etapa
     * @return $this
     */
    public function setTempoEstimadoEtapa($tempo_estimado_etapa)
    {
        $this->tempo_estimado_etapa = $tempo_estimado_etapa;

        return $this;
    }

    /**
     * Method to set the value of field tempo_minimo_entre_etapa
     *
     * @param string $tempo_minimo_entre_etapa
     * @return $this
     */
    public function setTempoMinimoEntreEtapa($tempo_minimo_entre_etapa)
    {
        $this->tempo_minimo_entre_etapa = $tempo_minimo_entre_etapa;

        return $this;
    }

    /**
     * Method to set the value of field tipo_etapa
     *
     * @param integer $tipo_etapa
     * @return $this
     */
    public function setTipoEtapa($tipo_etapa)
    {
        $this->tipo_etapa = $tipo_etapa;

        return $this;
    }

    /**
     * Returns the value of field cd_etapa
     *
     * @return integer
     */
    public function getCdEtapa()
    {
        return $this->cd_etapa;
    }

    /**
     * Returns the value of field cod_op
     *
     * @return integer
     */
    public function getCodOp()
    {
        return $this->cod_op;
    }

    /**
     * Returns the value of field responsavel
     *
     * @return integer
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Returns the value of field descricaoetapa
     *
     * @return string
     */
    public function getDescricaoetapa()
    {
        return $this->descricaoetapa;
    }

    /**
     * Returns the value of field descricaoerro
     *
     * @return string
     */
    public function getDescricaoerro()
    {
        return $this->descricaoerro;
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
     * Returns the value of field inicio
     *
     * @return string
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Returns the value of field fim
     *
     * @return string
     */
    public function getFim()
    {
        return $this->fim;
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
     * Returns the value of field cd_equipe
     *
     * @return integer
     */
    public function getCdEquipe()
    {
        return $this->cd_equipe;
    }

    /**
     * Returns the value of field custo_hora
     *
     * @return integer
     */
    public function getCustoHora()
    {
        return $this->custo_hora;
    }

    /**
     * Returns the value of field tempo_estimado_etapa
     *
     * @return string
     */
    public function getTempoEstimadoEtapa()
    {
        return $this->tempo_estimado_etapa;
    }

    /**
     * Returns the value of field tempo_minimo_entre_etapa
     *
     * @return string
     */
    public function getTempoMinimoEntreEtapa()
    {
        return $this->tempo_minimo_entre_etapa;
    }

    /**
     * Returns the value of field tipo_etapa
     *
     * @return integer
     */
    public function getTipoEtapa()
    {
        return $this->tipo_etapa;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_etapa', 'App\Models\OpetapaHasFuncionario', 'cd_etapa', array('alias' => 'OpetapaHasFuncionario'));
        $this->hasMany('cd_etapa', 'App\Models\Opetapaitem', 'opetapa_cd_etapa', array('alias' => 'Opetapaitem'));
        $this->belongsTo('responsavel', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_equipe', 'App\Models\Equipes', 'cd_equipe', array('alias' => 'Equipes'));
        $this->belongsTo('cod_op', 'App\Models\Op', 'cd_op', array('alias' => 'Op'));
        $this->belongsTo('tipo_etapa', 'App\Models\TipoEtapa', 'cd_tipo', array('alias' => 'TipoEtapa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'opetapa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Opetapa[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Opetapa
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
            'cd_etapa' => 'cd_etapa',
            'cod_op' => 'cod_op',
            'responsavel' => 'responsavel',
            'descricaoetapa' => 'descricaoetapa',
            'descricaoerro' => 'descricaoerro',
            'criado' => 'criado',
            'inicio' => 'inicio',
            'fim' => 'fim',
            'status' => 'status',
            'cd_equipe' => 'cd_equipe',
            'custo_hora' => 'custo_hora',
            'tempo_estimado_etapa' => 'tempo_estimado_etapa',
            'tempo_minimo_entre_etapa' => 'tempo_minimo_entre_etapa',
            'tipo_etapa' => 'tipo_etapa'
        );
    }

}
