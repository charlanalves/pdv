<?php

namespace App\Models;

class Itemop extends \Phalcon\Mvc\Model
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
    protected $Cd_produto;

    /**
     *
     * @var integer
     */
    protected $cd_etapa;

    /**
     *
     * @var double
     */
    protected $descricao;

    /**
     *
     * @var double
     */
    protected $qtdAtendida;

    /**
     *
     * @var double
     */
    protected $qtdEstimada;

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
     * Method to set the value of field cd_etapa
     *
     * @param integer $cd_etapa
     * @return $this
     */
    public function setCdEtapa($cd_etapa)
    {
        $this->cd_etapa = $cd_etapa;

        return $this;
    }

    /**
     * Method to set the value of field descricao
     *
     * @param double $descricao
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Method to set the value of field qtdAtendida
     *
     * @param double $qtdAtendida
     * @return $this
     */
    public function setQtdAtendida($qtdAtendida)
    {
        $this->qtdAtendida = $qtdAtendida;

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
     * Returns the value of field cd_item
     *
     * @return integer
     */
    public function getCdItem()
    {
        return $this->cd_item;
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
     * Returns the value of field cd_etapa
     *
     * @return integer
     */
    public function getCdEtapa()
    {
        return $this->cd_etapa;
    }

    /**
     * Returns the value of field descricao
     *
     * @return double
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field qtdAtendida
     *
     * @return double
     */
    public function getQtdAtendida()
    {
        return $this->qtdAtendida;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('Cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('Cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'itemop';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Itemop[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Itemop
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
            'Cd_produto' => 'Cd_produto',
            'cd_etapa' => 'cd_etapa',
            'descricao' => 'descricao',
            'qtdAtendida' => 'qtdAtendida',
            'qtdEstimada' => 'qtdEstimada'
        );
    }

}
