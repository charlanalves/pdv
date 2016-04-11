<?php

namespace App\Models;

class PedidoHasCertificadoProduto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_produto_certificado;

    /**
     *
     * @var integer
     */
    protected $pedido_Cd_pedido;

    /**
     *
     * @var integer
     */
    protected $produto_Cd_produto;

    /**
     *
     * @var integer
     */
    protected $empresa_Cd_empresa;

    /**
     *
     * @var string
     */
    protected $nserie;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     * Method to set the value of field id_produto_certificado
     *
     * @param integer $id_produto_certificado
     * @return $this
     */
    public function setIdProdutoCertificado($id_produto_certificado)
    {
        $this->id_produto_certificado = $id_produto_certificado;

        return $this;
    }

    /**
     * Method to set the value of field pedido_Cd_pedido
     *
     * @param integer $pedido_Cd_pedido
     * @return $this
     */
    public function setPedidoCdPedido($pedido_Cd_pedido)
    {
        $this->pedido_Cd_pedido = $pedido_Cd_pedido;

        return $this;
    }

    /**
     * Method to set the value of field produto_Cd_produto
     *
     * @param integer $produto_Cd_produto
     * @return $this
     */
    public function setProdutoCdProduto($produto_Cd_produto)
    {
        $this->produto_Cd_produto = $produto_Cd_produto;

        return $this;
    }

    /**
     * Method to set the value of field empresa_Cd_empresa
     *
     * @param integer $empresa_Cd_empresa
     * @return $this
     */
    public function setEmpresaCdEmpresa($empresa_Cd_empresa)
    {
        $this->empresa_Cd_empresa = $empresa_Cd_empresa;

        return $this;
    }

    /**
     * Method to set the value of field nserie
     *
     * @param string $nserie
     * @return $this
     */
    public function setNserie($nserie)
    {
        $this->nserie = $nserie;

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
     * Method to set the value of field modificado
     *
     * @param string $modificado
     * @return $this
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;

        return $this;
    }

    /**
     * Returns the value of field id_produto_certificado
     *
     * @return integer
     */
    public function getIdProdutoCertificado()
    {
        return $this->id_produto_certificado;
    }

    /**
     * Returns the value of field pedido_Cd_pedido
     *
     * @return integer
     */
    public function getPedidoCdPedido()
    {
        return $this->pedido_Cd_pedido;
    }

    /**
     * Returns the value of field produto_Cd_produto
     *
     * @return integer
     */
    public function getProdutoCdProduto()
    {
        return $this->produto_Cd_produto;
    }

    /**
     * Returns the value of field empresa_Cd_empresa
     *
     * @return integer
     */
    public function getEmpresaCdEmpresa()
    {
        return $this->empresa_Cd_empresa;
    }

    /**
     * Returns the value of field nserie
     *
     * @return string
     */
    public function getNserie()
    {
        return $this->nserie;
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
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('empresa_Cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('pedido_Cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('alias' => 'Pedido'));
        $this->belongsTo('produto_Cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('empresa_Cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('pedido_Cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('foreignKey' => true,'alias' => 'Pedido'));
        $this->belongsTo('produto_Cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pedido_has_certificado_produto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PedidoHasCertificadoProduto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PedidoHasCertificadoProduto
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
            'id_produto_certificado' => 'id_produto_certificado',
            'pedido_Cd_pedido' => 'pedido_Cd_pedido',
            'produto_Cd_produto' => 'produto_Cd_produto',
            'empresa_Cd_empresa' => 'empresa_Cd_empresa',
            'nserie' => 'nserie',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
