<?php

namespace App\Models;

class KitsProduto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idkits_produto;

    /**
     *
     * @var integer
     */
    protected $kits_idkits;

    /**
     *
     * @var integer
     */
    protected $produto_cd_produto;

    /**
     *
     * @var double
     */
    protected $quantidade;

    /**
     * Method to set the value of field idkits_produto
     *
     * @param integer $idkits_produto
     * @return $this
     */
    public function setIdkitsProduto($idkits_produto)
    {
        $this->idkits_produto = $idkits_produto;

        return $this;
    }

    /**
     * Method to set the value of field kits_idkits
     *
     * @param integer $kits_idkits
     * @return $this
     */
    public function setKitsIdkits($kits_idkits)
    {
        $this->kits_idkits = $kits_idkits;

        return $this;
    }

    /**
     * Method to set the value of field produto_cd_produto
     *
     * @param integer $produto_cd_produto
     * @return $this
     */
    public function setProdutoCdProduto($produto_cd_produto)
    {
        $this->produto_cd_produto = $produto_cd_produto;

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
     * Returns the value of field idkits_produto
     *
     * @return integer
     */
    public function getIdkitsProduto()
    {
        return $this->idkits_produto;
    }

    /**
     * Returns the value of field kits_idkits
     *
     * @return integer
     */
    public function getKitsIdkits()
    {
        return $this->kits_idkits;
    }

    /**
     * Returns the value of field produto_cd_produto
     *
     * @return integer
     */
    public function getProdutoCdProduto()
    {
        return $this->produto_cd_produto;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('kits_idkits', 'App\Models\Kits', 'idkits', array('alias' => 'Kits'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('kits_idkits', 'App\Models\Kits', 'idkits', array('foreignKey' => true,'alias' => 'Kits'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'kits_produto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return KitsProduto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return KitsProduto
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
            'idkits_produto' => 'idkits_produto',
            'kits_idkits' => 'kits_idkits',
            'produto_cd_produto' => 'produto_cd_produto',
            'quantidade' => 'quantidade'
        );
    }

}
