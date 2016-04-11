<?php

namespace App\Models;

class Opetapaitem extends \Phalcon\Mvc\Model
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
    protected $opetapa_cd_etapa;

    /**
     *
     * @var double
     */
    protected $qtdPrevista;

    /**
     *
     * @var double
     */
    protected $qtdUtilizada;

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
     *
     * @var string
     */
    protected $lote;

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
     * Method to set the value of field opetapa_cd_etapa
     *
     * @param integer $opetapa_cd_etapa
     * @return $this
     */
    public function setOpetapaCdEtapa($opetapa_cd_etapa)
    {
        $this->opetapa_cd_etapa = $opetapa_cd_etapa;

        return $this;
    }

    /**
     * Method to set the value of field qtdPrevista
     *
     * @param double $qtdPrevista
     * @return $this
     */
    public function setQtdPrevista($qtdPrevista)
    {
        $this->qtdPrevista = $qtdPrevista;

        return $this;
    }

    /**
     * Method to set the value of field qtdUtilizada
     *
     * @param double $qtdUtilizada
     * @return $this
     */
    public function setQtdUtilizada($qtdUtilizada)
    {
        $this->qtdUtilizada = $qtdUtilizada;

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
     * Method to set the value of field lote
     *
     * @param string $lote
     * @return $this
     */
    public function setLote($lote)
    {
        $this->lote = $lote;

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
     * Returns the value of field opetapa_cd_etapa
     *
     * @return integer
     */
    public function getOpetapaCdEtapa()
    {
        return $this->opetapa_cd_etapa;
    }

    /**
     * Returns the value of field qtdPrevista
     *
     * @return double
     */
    public function getQtdPrevista()
    {
        return $this->qtdPrevista;
    }

    /**
     * Returns the value of field qtdUtilizada
     *
     * @return double
     */
    public function getQtdUtilizada()
    {
        return $this->qtdUtilizada;
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
     * Returns the value of field lote
     *
     * @return string
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_item', 'App\Models\MovEstoque', 'opetapaitem_cd_item', array('alias' => 'MovEstoque'));
        $this->belongsTo('opetapa_cd_etapa', 'App\Models\Opetapa', 'cd_etapa', array('alias' => 'Opetapa'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'opetapaitem';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Opetapaitem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Opetapaitem
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
            'opetapa_cd_etapa' => 'opetapa_cd_etapa',
            'qtdPrevista' => 'qtdPrevista',
            'qtdUtilizada' => 'qtdUtilizada',
            'ordem' => 'ordem',
            'produto_cd_produto' => 'produto_cd_produto',
            'nome' => 'nome',
            'lote' => 'lote'
        );
    }

}
