<?php

namespace App\Models;

class Etapa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_etapa;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $ordemProducao;

    /**
     *
     * @var integer
     */
    protected $engenharia_cd_engenharia;

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
     * Method to set the value of field ordemProducao
     *
     * @param integer $ordemProducao
     * @return $this
     */
    public function setOrdemProducao($ordemProducao)
    {
        $this->ordemProducao = $ordemProducao;

        return $this;
    }

    /**
     * Method to set the value of field engenharia_cd_engenharia
     *
     * @param integer $engenharia_cd_engenharia
     * @return $this
     */
    public function setEngenhariaCdEngenharia($engenharia_cd_engenharia)
    {
        $this->engenharia_cd_engenharia = $engenharia_cd_engenharia;

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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field ordemProducao
     *
     * @return integer
     */
    public function getOrdemProducao()
    {
        return $this->ordemProducao;
    }

    /**
     * Returns the value of field engenharia_cd_engenharia
     *
     * @return integer
     */
    public function getEngenhariaCdEngenharia()
    {
        return $this->engenharia_cd_engenharia;
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
        $this->hasMany('cd_etapa', 'App\Models\Etapaitem', 'etapa_cd_etapa', array('alias' => 'Etapaitem'));
        $this->belongsTo('tipo_etapa', 'App\Models\TipoEtapa', 'cd_tipo', array('alias' => 'TipoEtapa'));
        $this->belongsTo('engenharia_cd_engenharia', 'App\Models\Engenharia', 'cd_engenharia', array('alias' => 'Engenharia'));
        $this->hasMany('cd_etapa', 'App\Models\Etapaitem', 'etapa_cd_etapa', NULL);
        $this->belongsTo('tipo_etapa', 'App\Models\TipoEtapa', 'cd_tipo', array('foreignKey' => true,'alias' => 'TipoEtapa'));
        $this->belongsTo('engenharia_cd_engenharia', 'App\Models\Engenharia', 'cd_engenharia', array('foreignKey' => true,'alias' => 'Engenharia'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'etapa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Etapa[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Etapa
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
            'descricao' => 'descricao',
            'ordemProducao' => 'ordemProducao',
            'engenharia_cd_engenharia' => 'engenharia_cd_engenharia',
            'tempo_estimado_etapa' => 'tempo_estimado_etapa',
            'tempo_minimo_entre_etapa' => 'tempo_minimo_entre_etapa',
            'tipo_etapa' => 'tipo_etapa'
        );
    }

}
