<?php

namespace App\Models;

class TipoEngenharia extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_tipo;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field cd_tipo
     *
     * @param integer $cd_tipo
     * @return $this
     */
    public function setCdTipo($cd_tipo)
    {
        $this->cd_tipo = $cd_tipo;

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
     * Returns the value of field cd_tipo
     *
     * @return integer
     */
    public function getCdTipo()
    {
        return $this->cd_tipo;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_tipo', 'App\Models\Engenharia', 'cd_tipo_engenharia', array('alias' => 'Engenharia'));
        $this->hasMany('cd_tipo', 'App\Models\Op', 'cd_tipo_engenharia', array('alias' => 'Op'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('cd_tipo', 'App\Models\Engenharia', 'cd_tipo_engenharia', NULL);
        $this->hasMany('cd_tipo', 'App\Models\Op', 'cd_tipo_engenharia', NULL);
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tipo_engenharia';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoEngenharia[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoEngenharia
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
            'cd_tipo' => 'cd_tipo',
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'descricao' => 'descricao'
        );
    }

}
