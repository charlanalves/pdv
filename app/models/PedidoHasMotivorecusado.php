<?php

namespace App\Models;

class PedidoHasMotivorecusado extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_motivo;

    /**
     *
     * @var integer
     */
    protected $pedido_cd_pedido;

    /**
     *
     * @var string
     */
    protected $motivo;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $data_recusado;

    /**
     *
     * @var integer
     */
    protected $cd_usuario;

    /**
     * Method to set the value of field cd_motivo
     *
     * @param integer $cd_motivo
     * @return $this
     */
    public function setCdMotivo($cd_motivo)
    {
        $this->cd_motivo = $cd_motivo;

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
     * Method to set the value of field motivo
     *
     * @param string $motivo
     * @return $this
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

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
     * Method to set the value of field data_recusado
     *
     * @param string $data_recusado
     * @return $this
     */
    public function setDataRecusado($data_recusado)
    {
        $this->data_recusado = $data_recusado;

        return $this;
    }

    /**
     * Method to set the value of field cd_usuario
     *
     * @param integer $cd_usuario
     * @return $this
     */
    public function setCdUsuario($cd_usuario)
    {
        $this->cd_usuario = $cd_usuario;

        return $this;
    }

    /**
     * Returns the value of field cd_motivo
     *
     * @return integer
     */
    public function getCdMotivo()
    {
        return $this->cd_motivo;
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
     * Returns the value of field motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
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
     * Returns the value of field data_recusado
     *
     * @return string
     */
    public function getDataRecusado()
    {
        return $this->data_recusado;
    }

    /**
     * Returns the value of field cd_usuario
     *
     * @return integer
     */
    public function getCdUsuario()
    {
        return $this->cd_usuario;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('pedido_cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('alias' => 'Pedido'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('pedido_cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('foreignKey' => true,'alias' => 'Pedido'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pedido_has_motivorecusado';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PedidoHasMotivorecusado[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PedidoHasMotivorecusado
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
            'cd_motivo' => 'cd_motivo',
            'pedido_cd_pedido' => 'pedido_cd_pedido',
            'motivo' => 'motivo',
            'descricao' => 'descricao',
            'data_recusado' => 'data_recusado',
            'cd_usuario' => 'cd_usuario'
        );
    }

}
