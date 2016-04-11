<?php

namespace App\Models;

class ProdutoHasArquivo extends \Phalcon\Mvc\Model
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
    protected $arquivo_cd_arquivo;

    /**
     *
     * @var integer
     */
    protected $padrao;

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
     * Method to set the value of field arquivo_cd_arquivo
     *
     * @param integer $arquivo_cd_arquivo
     * @return $this
     */
    public function setArquivoCdArquivo($arquivo_cd_arquivo)
    {
        $this->arquivo_cd_arquivo = $arquivo_cd_arquivo;

        return $this;
    }

    /**
     * Method to set the value of field padrao
     *
     * @param integer $padrao
     * @return $this
     */
    public function setPadrao($padrao)
    {
        $this->padrao = $padrao;

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
     * Returns the value of field arquivo_cd_arquivo
     *
     * @return integer
     */
    public function getArquivoCdArquivo()
    {
        return $this->arquivo_cd_arquivo;
    }

    /**
     * Returns the value of field padrao
     *
     * @return integer
     */
    public function getPadrao()
    {
        return $this->padrao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('arquivo_cd_arquivo', 'App\Models\Arquivo', 'cd_arquivo', array('alias' => 'Arquivo'));
        $this->belongsTo('produto_Cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('arquivo_cd_arquivo', 'App\Models\Arquivo', 'cd_arquivo', array('foreignKey' => true,'alias' => 'Arquivo'));
        $this->belongsTo('produto_Cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'produto_has_arquivo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasArquivo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasArquivo
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
            'arquivo_cd_arquivo' => 'arquivo_cd_arquivo',
            'padrao' => 'padrao'
        );
    }

}
