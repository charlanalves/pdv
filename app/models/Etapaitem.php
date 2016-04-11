<?php

namespace App\Models;

class Etapaitem extends \Phalcon\Mvc\Model
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
    protected $etapa_cd_etapa;

    /**
     *
     * @var double
     */
    protected $qtdEstimada;

    /**
     *
     * @var integer
     */
    protected $ordem;

    /**
     *
     * @var integer
     */
    protected $produto_cd_produto;

    /**
     *
     * @var string
     */
    protected $nome;

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
     * Method to set the value of field etapa_cd_etapa
     *
     * @param integer $etapa_cd_etapa
     * @return $this
     */
    public function setEtapaCdEtapa($etapa_cd_etapa)
    {
        $this->etapa_cd_etapa = $etapa_cd_etapa;

        return $this;
    }

    /**
     * Method to set the value of field qtdEstimada
     *
     * @param double $qtdEstimada
     * @return $this
     */
    public function setQtdEstimada($qtdEstimada)
    {
        $this->qtdEstimada = $qtdEstimada;

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
     * Returns the value of field cd_item
     *
     * @return integer
     */
    public function getCdItem()
    {
        return $this->cd_item;
    }

    /**
     * Returns the value of field etapa_cd_etapa
     *
     * @return integer
     */
    public function getEtapaCdEtapa()
    {
        return $this->etapa_cd_etapa;
    }

    /**
     * Returns the value of field qtdEstimada
     *
     * @return double
     */
    public function getQtdEstimada()
    {
        return $this->qtdEstimada;
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
     * Returns the value of field produto_cd_produto
     *
     * @return integer
     */
    public function getProdutoCdProduto()
    {
        return $this->produto_cd_produto;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('etapa_cd_etapa', 'App\Models\Etapa', 'cd_etapa', array('alias' => 'Etapa'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
        $this->belongsTo('etapa_cd_etapa', 'App\Models\Etapa', 'cd_etapa', array('foreignKey' => true,'alias' => 'Etapa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'etapaitem';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Etapaitem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Etapaitem
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
            'etapa_cd_etapa' => 'etapa_cd_etapa',
            'qtdEstimada' => 'qtdEstimada',
            'ordem' => 'ordem',
            'produto_cd_produto' => 'produto_cd_produto',
            'nome' => 'nome'
        );
    }

}
