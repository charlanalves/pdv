<?php

namespace App\Models;

class ProdutoHasImagem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $produto_Cd_produto;

    /**
     *
     * @var integer
     */
    protected $imagem_cd_imagem;

    /**
     *
     * @var integer
     */
    protected $capa;

    /**
     *
     * @var integer
     */
    protected $ordem;

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
     * Method to set the value of field imagem_cd_imagem
     *
     * @param integer $imagem_cd_imagem
     * @return $this
     */
    public function setImagemCdImagem($imagem_cd_imagem)
    {
        $this->imagem_cd_imagem = $imagem_cd_imagem;

        return $this;
    }

    /**
     * Method to set the value of field capa
     *
     * @param integer $capa
     * @return $this
     */
    public function setCapa($capa)
    {
        $this->capa = $capa;

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
     * Returns the value of field produto_Cd_produto
     *
     * @return integer
     */
    public function getProdutoCdProduto()
    {
        return $this->produto_Cd_produto;
    }

    /**
     * Returns the value of field imagem_cd_imagem
     *
     * @return integer
     */
    public function getImagemCdImagem()
    {
        return $this->imagem_cd_imagem;
    }

    /**
     * Returns the value of field capa
     *
     * @return integer
     */
    public function getCapa()
    {
        return $this->capa;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('produto_Cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('imagem_cd_imagem', 'App\Models\Imagem', 'cd_imagem', array('alias' => 'Imagem'));
        $this->belongsTo('produto_Cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
        $this->belongsTo('imagem_cd_imagem', 'App\Models\Imagem', 'cd_imagem', array('foreignKey' => true,'alias' => 'Imagem'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'produto_has_imagem';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasImagem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasImagem
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
            'produto_Cd_produto' => 'produto_Cd_produto',
            'imagem_cd_imagem' => 'imagem_cd_imagem',
            'capa' => 'capa',
            'ordem' => 'ordem'
        );
    }

}
