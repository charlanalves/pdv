<?php

namespace App\Models;

class ProdutoFornecedor extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_produto_fornecedor;

    /**
     *
     * @var integer
     */
    protected $produto_Cd_produto;

    /**
     *
     * @var integer
     */
    protected $unidade_cd_unidade;

    /**
     *
     * @var integer
     */
    protected $fornecedor_principal;

    /**
     *
     * @var integer
     */
    protected $empresa_Cd_empresa;

    /**
     * Method to set the value of field cd_produto_fornecedor
     *
     * @param integer $cd_produto_fornecedor
     * @return $this
     */
    public function setCdProdutoFornecedor($cd_produto_fornecedor)
    {
        $this->cd_produto_fornecedor = $cd_produto_fornecedor;

        return $this;
    }

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
     * Method to set the value of field unidade_cd_unidade
     *
     * @param integer $unidade_cd_unidade
     * @return $this
     */
    public function setUnidadeCdUnidade($unidade_cd_unidade)
    {
        $this->unidade_cd_unidade = $unidade_cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_principal
     *
     * @param integer $fornecedor_principal
     * @return $this
     */
    public function setFornecedorPrincipal($fornecedor_principal)
    {
        $this->fornecedor_principal = $fornecedor_principal;

        return $this;
    }

    /**
     * Method to set the value of field empresa_Cd_empresa
     *
     * @param integer $empresa_Cd_empresa
     * @return $this
     */
    public function setEmpresaCdEmpresa($empresa_Cd_empresa)
    {
        $this->empresa_Cd_empresa = $empresa_Cd_empresa;

        return $this;
    }

    /**
     * Returns the value of field cd_produto_fornecedor
     *
     * @return integer
     */
    public function getCdProdutoFornecedor()
    {
        return $this->cd_produto_fornecedor;
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
     * Returns the value of field unidade_cd_unidade
     *
     * @return integer
     */
    public function getUnidadeCdUnidade()
    {
        return $this->unidade_cd_unidade;
    }

    /**
     * Returns the value of field fornecedor_principal
     *
     * @return integer
     */
    public function getFornecedorPrincipal()
    {
        return $this->fornecedor_principal;
    }

    /**
     * Returns the value of field empresa_Cd_empresa
     *
     * @return integer
     */
    public function getEmpresaCdEmpresa()
    {
        return $this->empresa_Cd_empresa;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('unidade_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('produto_Cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('unidade_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
        $this->belongsTo('produto_Cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'produto_fornecedor';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoFornecedor[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoFornecedor
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
            'cd_produto_fornecedor' => 'cd_produto_fornecedor',
            'produto_Cd_produto' => 'produto_Cd_produto',
            'unidade_cd_unidade' => 'unidade_cd_unidade',
            'fornecedor_principal' => 'fornecedor_principal',
            'empresa_Cd_empresa' => 'empresa_Cd_empresa'
        );
    }

}
