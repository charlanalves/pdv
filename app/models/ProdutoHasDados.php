<?php

namespace App\Models;

class ProdutoHasDados extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_produto;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $cd_modelo;

    /**
     *
     * @var double
     */
    protected $estMinimo;

    /**
     *
     * @var double
     */
    protected $estMaximo;

    /**
     *
     * @var double
     */
    protected $estSeguranca;

    /**
     *
     * @var string
     */
    protected $movimenta_estoque;

    /**
     *
     * @var integer
     */
    protected $cd_secao_produto;

    /**
     *
     * @var integer
     */
    protected $utiliza_lote;

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
     * Method to set the value of field cd_empresa
     *
     * @param integer $cd_empresa
     * @return $this
     */
    public function setCdEmpresa($cd_empresa)
    {
        $this->cd_empresa = $cd_empresa;

        return $this;
    }

    /**
     * Method to set the value of field cd_modelo
     *
     * @param integer $cd_modelo
     * @return $this
     */
    public function setCdModelo($cd_modelo)
    {
        $this->cd_modelo = $cd_modelo;

        return $this;
    }

    /**
     * Method to set the value of field estMinimo
     *
     * @param double $estMinimo
     * @return $this
     */
    public function setEstMinimo($estMinimo)
    {
        $this->estMinimo = $estMinimo;

        return $this;
    }

    /**
     * Method to set the value of field estMaximo
     *
     * @param double $estMaximo
     * @return $this
     */
    public function setEstMaximo($estMaximo)
    {
        $this->estMaximo = $estMaximo;

        return $this;
    }

    /**
     * Method to set the value of field estSeguranca
     *
     * @param double $estSeguranca
     * @return $this
     */
    public function setEstSeguranca($estSeguranca)
    {
        $this->estSeguranca = $estSeguranca;

        return $this;
    }

    /**
     * Method to set the value of field movimenta_estoque
     *
     * @param string $movimenta_estoque
     * @return $this
     */
    public function setMovimentaEstoque($movimenta_estoque)
    {
        $this->movimenta_estoque = $movimenta_estoque;

        return $this;
    }

    /**
     * Method to set the value of field cd_secao_produto
     *
     * @param integer $cd_secao_produto
     * @return $this
     */
    public function setCdSecaoProduto($cd_secao_produto)
    {
        $this->cd_secao_produto = $cd_secao_produto;

        return $this;
    }

    /**
     * Method to set the value of field utiliza_lote
     *
     * @param integer $utiliza_lote
     * @return $this
     */
    public function setUtilizaLote($utiliza_lote)
    {
        $this->utiliza_lote = $utiliza_lote;

        return $this;
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
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdEmpresa()
    {
        return $this->cd_empresa;
    }

    /**
     * Returns the value of field cd_modelo
     *
     * @return integer
     */
    public function getCdModelo()
    {
        return $this->cd_modelo;
    }

    /**
     * Returns the value of field estMinimo
     *
     * @return double
     */
    public function getEstMinimo()
    {
        return $this->estMinimo;
    }

    /**
     * Returns the value of field estMaximo
     *
     * @return double
     */
    public function getEstMaximo()
    {
        return $this->estMaximo;
    }

    /**
     * Returns the value of field estSeguranca
     *
     * @return double
     */
    public function getEstSeguranca()
    {
        return $this->estSeguranca;
    }

    /**
     * Returns the value of field movimenta_estoque
     *
     * @return string
     */
    public function getMovimentaEstoque()
    {
        return $this->movimenta_estoque;
    }

    /**
     * Returns the value of field cd_secao_produto
     *
     * @return integer
     */
    public function getCdSecaoProduto()
    {
        return $this->cd_secao_produto;
    }

    /**
     * Returns the value of field utiliza_lote
     *
     * @return integer
     */
    public function getUtilizaLote()
    {
        return $this->utiliza_lote;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_modelo', 'App\Models\ModeloTributacao', 'cd_modelo', array('alias' => 'ModeloTributacao'));
        $this->belongsTo('cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('cd_secao_produto', 'App\Models\SecaoProdutos', 'cd_secao', array('alias' => 'SecaoProdutos'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_modelo', 'App\Models\ModeloTributacao', 'cd_modelo', array('foreignKey' => true,'alias' => 'ModeloTributacao'));
        $this->belongsTo('cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
        $this->belongsTo('cd_secao_produto', 'App\Models\SecaoProdutos', 'cd_secao', array('foreignKey' => true,'alias' => 'SecaoProdutos'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'produto_has_dados';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasDados[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasDados
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
            'cd_produto' => 'cd_produto',
            'cd_empresa' => 'cd_empresa',
            'cd_modelo' => 'cd_modelo',
            'estMinimo' => 'estMinimo',
            'estMaximo' => 'estMaximo',
            'estSeguranca' => 'estSeguranca',
            'movimenta_estoque' => 'movimenta_estoque',
            'cd_secao_produto' => 'cd_secao_produto',
            'utiliza_lote' => 'utiliza_lote'
        );
    }

}
