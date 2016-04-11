<?php

namespace App\Models;

class Equipes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_equipe;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var string
     */
    protected $carga_horaria;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var integer
     */
    protected $tipo_etapa;

    /**
     *
     * @var string
     */
    protected $horario_entrada;

    /**
     *
     * @var string
     */
    protected $horario_saida;

    /**
     *
     * @var string
     */
    protected $horas_almoco;

    /**
     *
     * @var integer
     */
    protected $ativo;

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
     * Method to set the value of field unidade_negocio_cd_unidade
     *
     * @param integer $unidade_negocio_cd_unidade
     * @return $this
     */
    public function setUnidadeNegocioCdUnidade($unidade_negocio_cd_unidade)
    {
        $this->unidade_negocio_cd_unidade = $unidade_negocio_cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field carga_horaria
     *
     * @param string $carga_horaria
     * @return $this
     */
    public function setCargaHoraria($carga_horaria)
    {
        $this->carga_horaria = $carga_horaria;

        return $this;
    }

    /**
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

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
     * Method to set the value of field horario_entrada
     *
     * @param string $horario_entrada
     * @return $this
     */
    public function setHorarioEntrada($horario_entrada)
    {
        $this->horario_entrada = $horario_entrada;

        return $this;
    }

    /**
     * Method to set the value of field horario_saida
     *
     * @param string $horario_saida
     * @return $this
     */
    public function setHorarioSaida($horario_saida)
    {
        $this->horario_saida = $horario_saida;

        return $this;
    }

    /**
     * Method to set the value of field horas_almoco
     *
     * @param string $horas_almoco
     * @return $this
     */
    public function setHorasAlmoco($horas_almoco)
    {
        $this->horas_almoco = $horas_almoco;

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
     * Returns the value of field cd_equipe
     *
     * @return integer
     */
    public function getCdEquipe()
    {
        return $this->cd_equipe;
    }

    /**
     * Returns the value of field unidade_negocio_cd_unidade
     *
     * @return integer
     */
    public function getUnidadeNegocioCdUnidade()
    {
        return $this->unidade_negocio_cd_unidade;
    }

    /**
     * Returns the value of field carga_horaria
     *
     * @return string
     */
    public function getCargaHoraria()
    {
        return $this->carga_horaria;
    }

    /**
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
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
     * Returns the value of field horario_entrada
     *
     * @return string
     */
    public function getHorarioEntrada()
    {
        return $this->horario_entrada;
    }

    /**
     * Returns the value of field horario_saida
     *
     * @return string
     */
    public function getHorarioSaida()
    {
        return $this->horario_saida;
    }

    /**
     * Returns the value of field horas_almoco
     *
     * @return string
     */
    public function getHorasAlmoco()
    {
        return $this->horas_almoco;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_equipe', 'App\Models\CentroProducaoHasEquipes', 'cd_equipe', array('alias' => 'CentroProducaoHasEquipes'));
        $this->hasMany('cd_equipe', 'App\Models\EquipesHasFuncionario', 'equipes_cd_equipe', array('alias' => 'EquipesHasFuncionario'));
        $this->hasMany('cd_equipe', 'App\Models\InterrupcaoLinhaProducao', 'cd_equipe', array('alias' => 'InterrupcaoLinhaProducao'));
        $this->hasMany('cd_equipe', 'App\Models\Opetapa', 'cd_equipe', array('alias' => 'Opetapa'));
        $this->hasMany('cd_equipe', 'App\Models\OrdemServicoReparo', 'cd_equipe', array('alias' => 'OrdemServicoReparo'));
        $this->belongsTo('tipo_etapa', 'App\Models\TipoEtapa', 'cd_tipo', array('alias' => 'TipoEtapa'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('cd_equipe', 'App\Models\CentroProducaoHasEquipes', 'cd_equipe', NULL);
        $this->hasMany('cd_equipe', 'App\Models\EquipesHasFuncionario', 'equipes_cd_equipe', NULL);
        $this->hasMany('cd_equipe', 'App\Models\InterrupcaoLinhaProducao', 'cd_equipe', NULL);
        $this->hasMany('cd_equipe', 'App\Models\Opetapa', 'cd_equipe', NULL);
        $this->hasMany('cd_equipe', 'App\Models\OrdemServicoReparo', 'cd_equipe', NULL);
        $this->belongsTo('tipo_etapa', 'App\Models\TipoEtapa', 'cd_tipo', array('foreignKey' => true,'alias' => 'TipoEtapa'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'equipes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Equipes[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Equipes
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
            'cd_equipe' => 'cd_equipe',
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'carga_horaria' => 'carga_horaria',
            'nome' => 'nome',
            'tipo_etapa' => 'tipo_etapa',
            'horario_entrada' => 'horario_entrada',
            'horario_saida' => 'horario_saida',
            'horas_almoco' => 'horas_almoco',
            'ativo' => 'ativo'
        );
    }

}
