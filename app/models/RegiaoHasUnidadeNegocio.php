<?php

namespace App\Models;

class RegiaoHasUnidadeNegocio extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $regiao_idregiao;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     * Method to set the value of field regiao_idregiao
     *
     * @param integer $regiao_idregiao
     * @return $this
     */
    public function setRegiaoIdregiao($regiao_idregiao)
    {
        $this->regiao_idregiao = $regiao_idregiao;

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
     * Returns the value of field regiao_idregiao
     *
     * @return integer
     */
    public function getRegiaoIdregiao()
    {
        return $this->regiao_idregiao;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('regiao_idregiao', 'App\Models\Regiao', 'idregiao', array('alias' => 'Regiao'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('regiao_idregiao', 'App\Models\Regiao', 'idregiao', array('foreignKey' => true,'alias' => 'Regiao'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'regiao_has_unidade_negocio';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RegiaoHasUnidadeNegocio[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RegiaoHasUnidadeNegocio
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
            'regiao_idregiao' => 'regiao_idregiao',
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade'
        );
    }

}
