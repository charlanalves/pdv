<?php

namespace App\Models;

class CargaOrdemRota extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_carga;

    /**
     *
     * @var integer
     */
    protected $cd_pedido;

    /**
     *
     * @var integer
     */
    protected $ordem;

    /**
     *
     * @var string
     */
    protected $destinatario;

    /**
     * Method to set the value of field cd_carga
     *
     * @param integer $cd_carga
     * @return $this
     */
    public function setCdCarga($cd_carga)
    {
        $this->cd_carga = $cd_carga;

        return $this;
    }

    /**
     * Method to set the value of field cd_pedido
     *
     * @param integer $cd_pedido
     * @return $this
     */
    public function setCdPedido($cd_pedido)
    {
        $this->cd_pedido = $cd_pedido;

        return $this;
    }

    /**
     * Method to set the value of field ordem
     *
     * @param integer $ordem
     * @return $this
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Method to set the value of field destinatario
     *
     * @param string $destinatario
     * @return $this
     */
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Returns the value of field cd_carga
     *
     * @return integer
     */
    public function getCdCarga()
    {
        return $this->cd_carga;
    }

    /**
     * Returns the value of field cd_pedido
     *
     * @return integer
     */
    public function getCdPedido()
    {
        return $this->cd_pedido;
    }

    /**
     * Returns the value of field ordem
     *
     * @return integer
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Returns the value of field destinatario
     *
     * @return string
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_carga', 'App\Models\Carga', 'cd_carga', array('alias' => 'Carga'));
        $this->belongsTo('cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('alias' => 'Pedido'));
        $this->belongsTo('cd_carga', 'App\Models\Carga', 'cd_carga', array('foreignKey' => true,'alias' => 'Carga'));
        $this->belongsTo('cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('foreignKey' => true,'alias' => 'Pedido'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'carga_ordem_rota';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CargaOrdemRota[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CargaOrdemRota
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
            'cd_carga' => 'cd_carga',
            'cd_pedido' => 'cd_pedido',
            'ordem' => 'ordem',
            'destinatario' => 'destinatario'
        );
    }

}
