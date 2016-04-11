<?php

namespace App\Models;

class PdvVendasHasFormaPagto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_pdv_forma_pagto;

    /**
     *
     * @var integer
     */
    protected $cd_cond_pagto;

    /**
     *
     * @var integer
     */
    protected $cd_pdv_venda;

    /**
     *
     * @var double
     */
    protected $valor;

    /**
     * Method to set the value of field cd_pdv_forma_pagto
     *
     * @param integer $cd_pdv_forma_pagto
     * @return $this
     */
    public function setCdPdvFormaPagto($cd_pdv_forma_pagto)
    {
        $this->cd_pdv_forma_pagto = $cd_pdv_forma_pagto;

        return $this;
    }

    /**
     * Method to set the value of field cd_cond_pagto
     *
     * @param integer $cd_cond_pagto
     * @return $this
     */
    public function setCdCondPagto($cd_cond_pagto)
    {
        $this->cd_cond_pagto = $cd_cond_pagto;

        return $this;
    }

    /**
     * Method to set the value of field cd_pdv_venda
     *
     * @param integer $cd_pdv_venda
     * @return $this
     */
    public function setCdPdvVenda($cd_pdv_venda)
    {
        $this->cd_pdv_venda = $cd_pdv_venda;

        return $this;
    }

    /**
     * Method to set the value of field valor
     *
     * @param double $valor
     * @return $this
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Returns the value of field cd_pdv_forma_pagto
     *
     * @return integer
     */
    public function getCdPdvFormaPagto()
    {
        return $this->cd_pdv_forma_pagto;
    }

    /**
     * Returns the value of field cd_cond_pagto
     *
     * @return integer
     */
    public function getCdCondPagto()
    {
        return $this->cd_cond_pagto;
    }

    /**
     * Returns the value of field cd_pdv_venda
     *
     * @return integer
     */
    public function getCdPdvVenda()
    {
        return $this->cd_pdv_venda;
    }

    /**
     * Returns the value of field valor
     *
     * @return double
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_cond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('alias' => 'CondPagto'));
        $this->belongsTo('cd_pdv_venda', 'App\Models\PdvVendas', 'cd_venda', array('alias' => 'PdvVendas'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_vendas_has_forma_pagto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvVendasHasFormaPagto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvVendasHasFormaPagto
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
            'cd_pdv_forma_pagto' => 'cd_pdv_forma_pagto',
            'cd_cond_pagto' => 'cd_cond_pagto',
            'cd_pdv_venda' => 'cd_pdv_venda',
            'valor' => 'valor'
        );
    }
}
