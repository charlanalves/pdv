<?php

namespace App\Models;

class UnidadeHasDesconto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cond_pagto;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio;

    /**
     *
     * @var double
     */
    protected $percentual;

    /**
     * Method to set the value of field cond_pagto
     *
     * @param integer $cond_pagto
     * @return $this
     */
    public function setCondPagto($cond_pagto)
    {
        $this->cond_pagto = $cond_pagto;

        return $this;
    }

    /**
     * Method to set the value of field unidade_negocio
     *
     * @param integer $unidade_negocio
     * @return $this
     */
    public function setUnidadeNegocio($unidade_negocio)
    {
        $this->unidade_negocio = $unidade_negocio;

        return $this;
    }

    /**
     * Method to set the value of field percentual
     *
     * @param double $percentual
     * @return $this
     */
    public function setPercentual($percentual)
    {
        $this->percentual = $percentual;

        return $this;
    }

    /**
     * Returns the value of field cond_pagto
     *
     * @return integer
     */
    public function getCondPagto()
    {
        return $this->cond_pagto;
    }

    /**
     * Returns the value of field unidade_negocio
     *
     * @return integer
     */
    public function getUnidadeNegocio()
    {
        return $this->unidade_negocio;
    }

    /**
     * Returns the value of field percentual
     *
     * @return double
     */
    public function getPercentual()
    {
        return $this->percentual;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('alias' => 'CondPagto'));
        $this->belongsTo('unidade_negocio', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('cond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('foreignKey' => true,'alias' => 'CondPagto'));
        $this->belongsTo('unidade_negocio', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'unidade_has_desconto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UnidadeHasDesconto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UnidadeHasDesconto
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
            'cond_pagto' => 'cond_pagto',
            'unidade_negocio' => 'unidade_negocio',
            'percentual' => 'percentual'
        );
    }

}
