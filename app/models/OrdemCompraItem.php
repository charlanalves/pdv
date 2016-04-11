<?php

namespace App\Models;

class OrdemCompraItem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_oc_item;

    /**
     *
     * @var integer
     */
    protected $Cd_produto;

    /**
     *
     * @var integer
     */
    protected $cd_compra;

    /**
     *
     * @var double
     */
    protected $quantidade;

    /**
     *
     * @var double
     */
    protected $vl_unit;

    /**
     *
     * @var double
     */
    protected $desconto;

    /**
     *
     * @var double
     */
    protected $peso;

    /**
     *
     * @var double
     */
    protected $despAces;

    /**
     *
     * @var double
     */
    protected $frete;

    /**
     *
     * @var string
     */
    protected $obs;

    /**
     *
     * @var string
     */
    protected $descricaoProduto;

    /**
     *
     * @var integer
     */
    protected $cd_requisicaomat;

    /**
     *
     * @var integer
     */
    protected $cd_requisicaoitem;

    /**
     * Method to set the value of field cd_oc_item
     *
     * @param integer $cd_oc_item
     * @return $this
     */
    public function setCdOcItem($cd_oc_item)
    {
        $this->cd_oc_item = $cd_oc_item;

        return $this;
    }

    /**
     * Method to set the value of field Cd_produto
     *
     * @param integer $Cd_produto
     * @return $this
     */
    public function setCdProduto($Cd_produto)
    {
        $this->Cd_produto = $Cd_produto;

        return $this;
    }

    /**
     * Method to set the value of field cd_compra
     *
     * @param integer $cd_compra
     * @return $this
     */
    public function setCdCompra($cd_compra)
    {
        $this->cd_compra = $cd_compra;

        return $this;
    }

    /**
     * Method to set the value of field quantidade
     *
     * @param double $quantidade
     * @return $this
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Method to set the value of field vl_unit
     *
     * @param double $vl_unit
     * @return $this
     */
    public function setVlUnit($vl_unit)
    {
        $this->vl_unit = $vl_unit;

        return $this;
    }

    /**
     * Method to set the value of field desconto
     *
     * @param double $desconto
     * @return $this
     */
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;

        return $this;
    }

    /**
     * Method to set the value of field peso
     *
     * @param double $peso
     * @return $this
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Method to set the value of field despAces
     *
     * @param double $despAces
     * @return $this
     */
    public function setDespAces($despAces)
    {
        $this->despAces = $despAces;

        return $this;
    }

    /**
     * Method to set the value of field frete
     *
     * @param double $frete
     * @return $this
     */
    public function setFrete($frete)
    {
        $this->frete = $frete;

        return $this;
    }

    /**
     * Method to set the value of field obs
     *
     * @param string $obs
     * @return $this
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Method to set the value of field descricaoProduto
     *
     * @param string $descricaoProduto
     * @return $this
     */
    public function setDescricaoProduto($descricaoProduto)
    {
        $this->descricaoProduto = $descricaoProduto;

        return $this;
    }

    /**
     * Method to set the value of field cd_requisicaomat
     *
     * @param integer $cd_requisicaomat
     * @return $this
     */
    public function setCdRequisicaomat($cd_requisicaomat)
    {
        $this->cd_requisicaomat = $cd_requisicaomat;

        return $this;
    }

    /**
     * Method to set the value of field cd_requisicaoitem
     *
     * @param integer $cd_requisicaoitem
     * @return $this
     */
    public function setCdRequisicaoitem($cd_requisicaoitem)
    {
        $this->cd_requisicaoitem = $cd_requisicaoitem;

        return $this;
    }

    /**
     * Returns the value of field cd_oc_item
     *
     * @return integer
     */
    public function getCdOcItem()
    {
        return $this->cd_oc_item;
    }

    /**
     * Returns the value of field Cd_produto
     *
     * @return integer
     */
    public function getCdProduto()
    {
        return $this->Cd_produto;
    }

    /**
     * Returns the value of field cd_compra
     *
     * @return integer
     */
    public function getCdCompra()
    {
        return $this->cd_compra;
    }

    /**
     * Returns the value of field quantidade
     *
     * @return double
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Returns the value of field vl_unit
     *
     * @return double
     */
    public function getVlUnit()
    {
        return $this->vl_unit;
    }

    /**
     * Returns the value of field desconto
     *
     * @return double
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * Returns the value of field peso
     *
     * @return double
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Returns the value of field despAces
     *
     * @return double
     */
    public function getDespAces()
    {
        return $this->despAces;
    }

    /**
     * Returns the value of field frete
     *
     * @return double
     */
    public function getFrete()
    {
        return $this->frete;
    }

    /**
     * Returns the value of field obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Returns the value of field descricaoProduto
     *
     * @return string
     */
    public function getDescricaoProduto()
    {
        return $this->descricaoProduto;
    }

    /**
     * Returns the value of field cd_requisicaomat
     *
     * @return integer
     */
    public function getCdRequisicaomat()
    {
        return $this->cd_requisicaomat;
    }

    /**
     * Returns the value of field cd_requisicaoitem
     *
     * @return integer
     */
    public function getCdRequisicaoitem()
    {
        return $this->cd_requisicaoitem;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_requisicaoitem', 'App\Models\RequisicaoItem', 'cd_requisicaoItem', array('alias' => 'RequisicaoItem'));
        $this->belongsTo('cd_requisicaomat', 'App\Models\RequisicaoItem', 'requisicaoMat_cd_requisicao', array('alias' => 'RequisicaoItem'));
        $this->belongsTo('Cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('cd_compra', 'App\Models\OrdemCompra', 'cd_compra', array('alias' => 'OrdemCompra'));
        $this->belongsTo('cd_requisicaoitem', 'App\Models\RequisicaoItem', 'cd_requisicaoItem', array('foreignKey' => true,'alias' => 'RequisicaoItem'));
        $this->belongsTo('cd_requisicaomat', 'App\Models\RequisicaoItem', 'requisicaoMat_cd_requisicao', array('foreignKey' => true,'alias' => 'RequisicaoItem'));
        $this->belongsTo('Cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
        $this->belongsTo('cd_compra', 'App\Models\OrdemCompra', 'cd_compra', array('foreignKey' => true,'alias' => 'OrdemCompra'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ordemCompraItem';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrdemCompraItem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrdemCompraItem
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
            'cd_oc_item' => 'cd_oc_item',
            'Cd_produto' => 'Cd_produto',
            'cd_compra' => 'cd_compra',
            'quantidade' => 'quantidade',
            'vl_unit' => 'vl_unit',
            'desconto' => 'desconto',
            'peso' => 'peso',
            'despAces' => 'despAces',
            'frete' => 'frete',
            'obs' => 'obs',
            'descricaoProduto' => 'descricaoProduto',
            'cd_requisicaomat' => 'cd_requisicaomat',
            'cd_requisicaoitem' => 'cd_requisicaoitem'
        );
    }

}
