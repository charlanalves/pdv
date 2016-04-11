<?php

namespace App\Models;

class PdvVendas extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_venda;

    /**
     *
     * @var integer
     */
    protected $cd_caixa;

    /**
     *
     * @var integer
     */
    protected $cd_cond_pgto;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;
    /**
     *
     * @var integer
     */
    protected $cd_cliente;

    /**
     *
     * @var integer
     */
    protected $cd_tipo_pgto;


    /**
     *
     * @var integer
     */
    protected $forma_entrega;
    
    /**
     *
     * @var integer
     */
    protected $existe_dados_cliente;
    /**
     *
     * @var integer
     */
    protected $entrega_domicilio;
    /**
     *
     * @var integer
     */
    protected $valor_total;


    /**
     *
     * @var datetime
     */
    protected $criado;

    /**
     * Method to set the value of field cd_venda
     *
     * @param integer $cd_venda
     * @return $this
     */
    public function setCdVenda($cd_venda)
    {
        $this->cd_venda = $cd_venda;

        return $this;
    }

    /**
     * Method to set the value of field cd_caixa
     *
     * @param integer $cd_caixa
     * @return $this
     */
    public function setCdCaixa($cd_caixa)
    {
        $this->cd_caixa = $cd_caixa;

        return $this;
    }

    /**
     * Method to set the value of field cd_cond_pgto
     *
     * @param integer $cd_cond_pgto
     * @return $this
     */
    public function setCdCondPgto($cd_cond_pgto)
    {
        $this->cd_cond_pgto = $cd_cond_pgto;

        return $this;

    }

    /**
     * Method to set the value of field cd_empresa
     *
     * @param integer $cd_empresa
     * @return $this
     */
    public function setCdEmpresa($cd_empresa)
    {
        $this->cd_empresa = $cd_empresa;

        return $this;
    }

    /**
     * Method to set the value of field cd_tipo_pgto
     *
     * @param integer $cd_tipo_pgto
     * @return $this
     */
    public function setCdTipoPgto($cd_tipo_pgto)
    {
        $this->cd_tipo_pgto = $cd_tipo_pgto;

        return $this;
    }

    /**
     * Method to set the value of field cd_cliente
     *
     * @param integer $cd_cliente
     * @return $this
     */
    public function setCdCliente($cd_cliente)
    {
        $this->cd_cliente = $cd_cliente;

        return $this;
    }


    /**
     * Method to set the value of field forma_entrega
     *
     * @param integer $forma_entrega
     * @return $this
     */
    public function setFormaEntrega($forma_entrega)
    {
        $this->forma_entrega = $forma_entrega;

        return $this;
    }

    /**
     * Method to set the value of field existe_dados_cliente
     *
     * @param integer $existe_dados_cliente
     * @return $this
     */
    public function setExisteDadosCliente($existe_dados_cliente)
    {
        $this->existe_dados_cliente = $existe_dados_cliente;

        return $this;
    }

    /**
     * Method to set the value of field entrega_domicilio
     *
     * @param integer $entrega_domicilio
     * @return $this
     */
    public function setEntregaDomicilio($entrega_domicilio)
    {
        $this->entrega_domicilio = $entrega_domicilio;

        return $this;
    }

    /**
     * Method to set the value of field valor_total
     *
     * @param double $valor_total
     * @return $this
     */
    public function setValorTotal($valor_total)
    {
        $this->valor_total = $valor_total;

        return $this;
    }

    public function setCriado($criado)
    {
        $this->criado = $criado;

        return $this;
    }

    /**
     * Returns the value of field cd_venda
     *
     * @return integer
     */
    public function getCdVenda()
    {
        return $this->cd_venda;
    }

    /**
     * Returns the value of field cd_caixa
     *
     * @return integer
     */
    public function getCdCaixa()
    {
        return $this->cd_caixa;
    }
    
    /**
     * Returns the value of field cd_cliente
     *
     * @return integer
     */
    public function getCdCliente()
    {
        return $this->cd_cliente;
    }

    
    /**
     * Returns the value of field cd_cond_pgto
     *
     * @return integer
     */
    public function getCdCondPgto()
    {
        return $this->cd_cond_pgto;
    }

    /**
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdEmpresa()
    {
        return $this->cd_empresa;
    }

    /**
     * Returns the value of field cd_tipo_pgto
     *
     * @return integer
     */
    public function getCdTipoPgto()
    {
        return $this->cd_tipo_pgto;
    }


    /**
     * Returns the value of field cd_unidade
     *
     * @return integer
     */
    public function getExisteDadosCliente()
    {
        return $this->existe_dados_cliente;
    }
    
    /**
     * Returns the value of field entrega_domicilio
     *
     * @return integer
     */
    public function getEntregaDomicilio()
    {
        return $this->entrega_domicilio;
    }

    
    /**
     * Returns the value of field forma_entrega
     *
     * @return integer
     */
    public function getFormaEntrega()
    {
        return $this->forma_entrega;
    }



    /**
     * Returns the value of field valor_total
     *
     * @return double
     */
    public function getValorTotal()
    {
        return $this->valor_total;
    }

    public function getCriado()
    {
        return $this->criado;
    }

    /**

     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_venda', 'App\Models\PdvNfce', 'cd_vendas', array('alias' => 'PdvNfce'));
        $this->hasMany('cd_venda', 'App\Models\PdvVendasHasItens', 'cd_venda', array('alias' => 'PdvVendasHasItens'));
        $this->hasOne('cd_venda', 'App\Models\PdvNfe', 'cd_venda', array('alias' => 'PdvNfe'));
        $this->belongsTo('cd_caixa', 'App\Models\PdvCaixa', 'cd_caixa', array('alias' => 'PdvCaixa'));
        $this->belongsTo('cd_cliente', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_cond_pgto', 'App\Models\CondPagto', 'idcond_pagto', array('alias' => 'CondPagto'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_tipo_pgto', 'App\Models\TipoPagto', 'cd_pagto', array('alias' => 'TipoPagto'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('cd_cliente', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Cliente'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_vendas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvVendas[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvVendas
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
            'cd_venda' => 'cd_venda',
            'cd_caixa' => 'cd_caixa',
            'cd_cliente' => 'cd_cliente',
            'cd_unidade' => 'cd_unidade',
            'cd_cond_pgto' => 'cd_cond_pgto',
            'cd_empresa' => 'cd_empresa',
            'cd_tipo_pgto' => 'cd_tipo_pgto',
            'cd_cliente' => 'cd_cliente',
            'forma_entrega' => 'forma_entrega',
            'existe_dados_cliente' => 'existe_dados_cliente',
            'entrega_domicilio' => 'entrega_domicilio',
            'valor_total' => 'valor_total',
            'criado' => 'criado'
        );
    }
}
