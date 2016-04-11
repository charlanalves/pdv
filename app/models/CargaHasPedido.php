<?php

namespace App\Models;

class CargaHasPedido extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $carga_cd_carga;

    /**
     *
     * @var integer
     */
    protected $pedido_cd_pedido;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     * Method to set the value of field carga_cd_carga
     *
     * @param integer $carga_cd_carga
     * @return $this
     */
    public function setCargaCdCarga($carga_cd_carga)
    {
        $this->carga_cd_carga = $carga_cd_carga;

        return $this;
    }

    /**
     * Method to set the value of field pedido_cd_pedido
     *
     * @param integer $pedido_cd_pedido
     * @return $this
     */
    public function setPedidoCdPedido($pedido_cd_pedido)
    {
        $this->pedido_cd_pedido = $pedido_cd_pedido;

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
     * Returns the value of field carga_cd_carga
     *
     * @return integer
     */
    public function getCargaCdCarga()
    {
        return $this->carga_cd_carga;
    }

    /**
     * Returns the value of field pedido_cd_pedido
     *
     * @return integer
     */
    public function getPedidoCdPedido()
    {
        return $this->pedido_cd_pedido;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('carga_cd_carga', 'App\Models\Carga', 'cd_carga', array('alias' => 'Carga'));
        $this->belongsTo('pedido_cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('alias' => 'Pedido'));
        $this->belongsTo('carga_cd_carga', 'App\Models\Carga', 'cd_carga', array('foreignKey' => true,'alias' => 'Carga'));
        $this->belongsTo('pedido_cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('foreignKey' => true,'alias' => 'Pedido'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'carga_has_pedido';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CargaHasPedido[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CargaHasPedido
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
            'carga_cd_carga' => 'carga_cd_carga',
            'pedido_cd_pedido' => 'pedido_cd_pedido',
            'criado' => 'criado'
        );
    }

}
