<?php

namespace App\Models;

class PdvConfigSimplesNacional extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $cd_config;

    /**
     *
     * @var integer
     */
    public $cd_unidade;

    /**
     *
     * @var integer
     */
    public $cfop_st;

    /**
     *
     * @var integer
     */
    public $cfop;

    /**
     *
     * @var integer
     */
    public $csosn_st;

    /**
     *
     * @var integer
     */
    public $csosn;

    /**
     *
     * @var integer
     */
    public $cst_pis;

    /**
     *
     * @var integer
     */
    public $cst_cofins;

    /**
     *
     * @var integer
     */
    public $cst_ipi;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_unidade', 'UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_config_simples_nacional';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvConfigSimplesNacional[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvConfigSimplesNacional
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
