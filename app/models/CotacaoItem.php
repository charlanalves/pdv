<?php

namespace App\Models;

class CotacaoItem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_item;

    /**
     *
     * @var integer
     */
    protected $cotacao_cd_cotacao;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var integer
     */
    protected $quantidade;

    /**
     *
     * @var double
     */
    protected $valor;

    /**
     *
     * @var integer
     */
    protected $produto_cd_produto;

    /**
     *
     * @var integer
     */
    protected $kits_idkits;

    /**
     * Method to set the value of field cd_item
     *
     * @param integer $cd_item
     * @return $this
     */
    public function setCdItem($cd_item)
    {
        $this->cd_item = $cd_item;

        return $this;
    }

    /**
     * Method to set the value of field cotacao_cd_cotacao
     *
     * @param integer $cotacao_cd_cotacao
     * @return $this
     */
    public function setCotacaoCdCotacao($cotacao_cd_cotacao)
    {
        $this->cotacao_cd_cotacao = $cotacao_cd_cotacao;

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
     * @param integer $quantidade
     * @return $this
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

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
     * Returns the value of field cd_item
     *
     * @return integer
     */
    public function getCdItem()
    {
        return $this->cd_item;
    }

    /**
     * Returns the value of field cotacao_cd_cotacao
     *
     * @return integer
     */
    public function getCotacaoCdCotacao()
    {
        return $this->cotacao_cd_cotacao;
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
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
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
     * Returns the value of field produto_cd_produto
     *
     * @return integer
     */
    public function getProdutoCdProduto()
    {
        return $this->produto_cd_produto;
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
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cotacao_item';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CotacaoItem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CotacaoItem
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
            'cd_item' => 'cd_item',
            'cotacao_cd_cotacao' => 'cotacao_cd_cotacao',
            'nome' => 'nome',
            'quantidade' => 'quantidade',
            'valor' => 'valor',
            'produto_cd_produto' => 'produto_cd_produto',
            'kits_idkits' => 'kits_idkits'
        );
    }

}
