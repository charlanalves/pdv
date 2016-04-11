<?php

namespace App\Models;

class MovimentacaoManualEstoqueItem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idmov_item;

    /**
     *
     * @var integer
     */
    protected $idmov;

    /**
     *
     * @var integer
     */
    protected $cd_produto;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var double
     */
    protected $quantidade;

    /**
     *
     * @var double
     */
    protected $valor_unitario;

    /**
     * Method to set the value of field idmov_item
     *
     * @param integer $idmov_item
     * @return $this
     */
    public function setIdmovItem($idmov_item)
    {
        $this->idmov_item = $idmov_item;

        return $this;
    }

    /**
     * Method to set the value of field idmov
     *
     * @param integer $idmov
     * @return $this
     */
    public function setIdmov($idmov)
    {
        $this->idmov = $idmov;

        return $this;
    }

    /**
     * Method to set the value of field cd_produto
     *
     * @param integer $cd_produto
     * @return $this
     */
    public function setCdProduto($cd_produto)
    {
        $this->cd_produto = $cd_produto;

        return $this;
    }

    /**
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

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
     * Method to set the value of field valor_unitario
     *
     * @param double $valor_unitario
     * @return $this
     */
    public function setValorUnitario($valor_unitario)
    {
        $this->valor_unitario = $valor_unitario;

        return $this;
    }

    /**
     * Returns the value of field idmov_item
     *
     * @return integer
     */
    public function getIdmovItem()
    {
        return $this->idmov_item;
    }

    /**
     * Returns the value of field idmov
     *
     * @return integer
     */
    public function getIdmov()
    {
        return $this->idmov;
    }

    /**
     * Returns the value of field cd_produto
     *
     * @return integer
     */
    public function getCdProduto()
    {
        return $this->cd_produto;
    }

    /**
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
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
     * Returns the value of field valor_unitario
     *
     * @return double
     */
    public function getValorUnitario()
    {
        return $this->valor_unitario;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('idmov', 'App\Models\MovimentacaoManualEstoque', 'idmov', array('alias' => 'MovimentacaoManualEstoque'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'movimentacao_manual_estoque_item';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovimentacaoManualEstoqueItem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovimentacaoManualEstoqueItem
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
            'idmov_item' => 'idmov_item',
            'idmov' => 'idmov',
            'cd_produto' => 'cd_produto',
            'nome' => 'nome',
            'quantidade' => 'quantidade',
            'valor_unitario' => 'valor_unitario'
        );
    }

}
