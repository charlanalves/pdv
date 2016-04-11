<?php

namespace App\Models;

class OrcamentoItem extends \Phalcon\Mvc\Model
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
    protected $orcamento_cd_orcamento;

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
     * @var double
     */
    protected $valor_futuro;

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
     * Method to set the value of field orcamento_cd_orcamento
     *
     * @param integer $orcamento_cd_orcamento
     * @return $this
     */
    public function setOrcamentoCdOrcamento($orcamento_cd_orcamento)
    {
        $this->orcamento_cd_orcamento = $orcamento_cd_orcamento;

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
     * Method to set the value of field valor_futuro
     *
     * @param double $valor_futuro
     * @return $this
     */
    public function setValorFuturo($valor_futuro)
    {
        $this->valor_futuro = $valor_futuro;

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
     * Returns the value of field orcamento_cd_orcamento
     *
     * @return integer
     */
    public function getOrcamentoCdOrcamento()
    {
        return $this->orcamento_cd_orcamento;
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
     * Returns the value of field valor_futuro
     *
     * @return double
     */
    public function getValorFuturo()
    {
        return $this->valor_futuro;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('kits_idkits', 'App\Models\Kits', 'idkits', array('alias' => 'Kits'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('orcamento_cd_orcamento', 'App\Models\Orcamento', 'cd_orcamento', array('alias' => 'Orcamento'));
        $this->belongsTo('kits_idkits', 'App\Models\Kits', 'idkits', array('foreignKey' => true,'alias' => 'Kits'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
        $this->belongsTo('orcamento_cd_orcamento', 'App\Models\Orcamento', 'cd_orcamento', array('foreignKey' => true,'alias' => 'Orcamento'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'orcamento_item';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrcamentoItem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrcamentoItem
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
            'orcamento_cd_orcamento' => 'orcamento_cd_orcamento',
            'nome' => 'nome',
            'quantidade' => 'quantidade',
            'valor' => 'valor',
            'valor_futuro' => 'valor_futuro',
            'produto_cd_produto' => 'produto_cd_produto',
            'kits_idkits' => 'kits_idkits'
        );
    }

}
