<?php

namespace App\Models;

class CondPagtoHasItem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idcond_pagto_has_item;

    /**
     *
     * @var integer
     */
    protected $idcond_pagto;

    /**
     *
     * @var integer
     */
    protected $nparcela;

    /**
     *
     * @var integer
     */
    protected $periodicidade;

    /**
     *
     * @var double
     */
    protected $percentual;

    /**
     * Method to set the value of field idcond_pagto_has_item
     *
     * @param integer $idcond_pagto_has_item
     * @return $this
     */
    public function setIdcondPagtoHasItem($idcond_pagto_has_item)
    {
        $this->idcond_pagto_has_item = $idcond_pagto_has_item;

        return $this;
    }

    /**
     * Method to set the value of field idcond_pagto
     *
     * @param integer $idcond_pagto
     * @return $this
     */
    public function setIdcondPagto($idcond_pagto)
    {
        $this->idcond_pagto = $idcond_pagto;

        return $this;
    }

    /**
     * Method to set the value of field nparcela
     *
     * @param integer $nparcela
     * @return $this
     */
    public function setNparcela($nparcela)
    {
        $this->nparcela = $nparcela;

        return $this;
    }

    /**
     * Method to set the value of field periodicidade
     *
     * @param integer $periodicidade
     * @return $this
     */
    public function setPeriodicidade($periodicidade)
    {
        $this->periodicidade = $periodicidade;

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
     * Returns the value of field idcond_pagto_has_item
     *
     * @return integer
     */
    public function getIdcondPagtoHasItem()
    {
        return $this->idcond_pagto_has_item;
    }

    /**
     * Returns the value of field idcond_pagto
     *
     * @return integer
     */
    public function getIdcondPagto()
    {
        return $this->idcond_pagto;
    }

    /**
     * Returns the value of field nparcela
     *
     * @return integer
     */
    public function getNparcela()
    {
        return $this->nparcela;
    }

    /**
     * Returns the value of field periodicidade
     *
     * @return integer
     */
    public function getPeriodicidade()
    {
        return $this->periodicidade;
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
        $this->belongsTo('idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('alias' => 'CondPagto'));
        $this->belongsTo('idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('foreignKey' => true,'alias' => 'CondPagto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cond_pagto_has_item';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CondPagtoHasItem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CondPagtoHasItem
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
            'idcond_pagto_has_item' => 'idcond_pagto_has_item',
            'idcond_pagto' => 'idcond_pagto',
            'nparcela' => 'nparcela',
            'periodicidade' => 'periodicidade',
            'percentual' => 'percentual'
        );
    }

}
