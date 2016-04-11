<?php

namespace App\Models;

class PedidoStatus extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_status;

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
     *
     * @var integer
     */
    protected $status_pedido;

    /**
     * Method to set the value of field cd_status
     *
     * @param integer $cd_status
     * @return $this
     */
    public function setCdStatus($cd_status)
    {
        $this->cd_status = $cd_status;

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
     * Method to set the value of field status_pedido
     *
     * @param integer $status_pedido
     * @return $this
     */
    public function setStatusPedido($status_pedido)
    {
        $this->status_pedido = $status_pedido;

        return $this;
    }

    /**
     * Returns the value of field cd_status
     *
     * @return integer
     */
    public function getCdStatus()
    {
        return $this->cd_status;
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
     * Returns the value of field status_pedido
     *
     * @return integer
     */
    public function getStatusPedido()
    {
        return $this->status_pedido;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('pedido_cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('alias' => 'Pedido'));
        $this->belongsTo('pedido_cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('foreignKey' => true,'alias' => 'Pedido'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pedido_status';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PedidoStatus[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PedidoStatus
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
            'cd_status' => 'cd_status',
            'pedido_cd_pedido' => 'pedido_cd_pedido',
            'criado' => 'criado',
            'status_pedido' => 'status_pedido'
        );
    }

}
