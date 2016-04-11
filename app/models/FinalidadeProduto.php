<?php

namespace App\Models;

class FinalidadeProduto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_finalidade;

    /**
     *
     * @var string
     */
    protected $finalidade;

    /**
     *
     * @var string
     */
    protected $natureza_operacao;

    /**
     *
     * @var integer
     */
    protected $venda;

    /**
     *
     * @var integer
     */
    protected $exibir_central_compras;

    /**
     *
     * @var integer
     */
    protected $gera_financeiro;

    /**
     *
     * @var integer
     */
    protected $gera_royalties;

    /**
     *
     * @var integer
     */
    protected $gera_fundo_propaganda;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $emitir_nfe_cliente;

    /**
     *
     * @var string
     */
    protected $entrada_saida;

    /**
     *
     * @var integer
     */
    protected $finalidade_emissao_nfe;

    /**
     *
     * @var integer
     */
    protected $movimenta_estoque;

    /**
     *
     * @var integer
     */
    protected $movimenta_nfe;

    /**
     * Method to set the value of field id_finalidade
     *
     * @param integer $id_finalidade
     * @return $this
     */
    public function setIdFinalidade($id_finalidade)
    {
        $this->id_finalidade = $id_finalidade;

        return $this;
    }

    /**
     * Method to set the value of field finalidade
     *
     * @param string $finalidade
     * @return $this
     */
    public function setFinalidade($finalidade)
    {
        $this->finalidade = $finalidade;

        return $this;
    }

    /**
     * Method to set the value of field natureza_operacao
     *
     * @param string $natureza_operacao
     * @return $this
     */
    public function setNaturezaOperacao($natureza_operacao)
    {
        $this->natureza_operacao = $natureza_operacao;

        return $this;
    }

    /**
     * Method to set the value of field venda
     *
     * @param integer $venda
     * @return $this
     */
    public function setVenda($venda)
    {
        $this->venda = $venda;

        return $this;
    }

    /**
     * Method to set the value of field exibir_central_compras
     *
     * @param integer $exibir_central_compras
     * @return $this
     */
    public function setExibirCentralCompras($exibir_central_compras)
    {
        $this->exibir_central_compras = $exibir_central_compras;

        return $this;
    }

    /**
     * Method to set the value of field gera_financeiro
     *
     * @param integer $gera_financeiro
     * @return $this
     */
    public function setGeraFinanceiro($gera_financeiro)
    {
        $this->gera_financeiro = $gera_financeiro;

        return $this;
    }

    /**
     * Method to set the value of field gera_royalties
     *
     * @param integer $gera_royalties
     * @return $this
     */
    public function setGeraRoyalties($gera_royalties)
    {
        $this->gera_royalties = $gera_royalties;

        return $this;
    }

    /**
     * Method to set the value of field gera_fundo_propaganda
     *
     * @param integer $gera_fundo_propaganda
     * @return $this
     */
    public function setGeraFundoPropaganda($gera_fundo_propaganda)
    {
        $this->gera_fundo_propaganda = $gera_fundo_propaganda;

        return $this;
    }

    /**
     * Method to set the value of field descricao
     *
     * @param string $descricao
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Method to set the value of field emitir_nfe_cliente
     *
     * @param integer $emitir_nfe_cliente
     * @return $this
     */
    public function setEmitirNfeCliente($emitir_nfe_cliente)
    {
        $this->emitir_nfe_cliente = $emitir_nfe_cliente;

        return $this;
    }

    /**
     * Method to set the value of field entrada_saida
     *
     * @param string $entrada_saida
     * @return $this
     */
    public function setEntradaSaida($entrada_saida)
    {
        $this->entrada_saida = $entrada_saida;

        return $this;
    }

    /**
     * Method to set the value of field finalidade_emissao_nfe
     *
     * @param integer $finalidade_emissao_nfe
     * @return $this
     */
    public function setFinalidadeEmissaoNfe($finalidade_emissao_nfe)
    {
        $this->finalidade_emissao_nfe = $finalidade_emissao_nfe;

        return $this;
    }

    /**
     * Method to set the value of field movimenta_estoque
     *
     * @param integer $movimenta_estoque
     * @return $this
     */
    public function setMovimentaEstoque($movimenta_estoque)
    {
        $this->movimenta_estoque = $movimenta_estoque;

        return $this;
    }

    /**
     * Method to set the value of field movimenta_nfe
     *
     * @param integer $movimenta_nfe
     * @return $this
     */
    public function setMovimentaNfe($movimenta_nfe)
    {
        $this->movimenta_nfe = $movimenta_nfe;

        return $this;
    }

    /**
     * Returns the value of field id_finalidade
     *
     * @return integer
     */
    public function getIdFinalidade()
    {
        return $this->id_finalidade;
    }

    /**
     * Returns the value of field finalidade
     *
     * @return string
     */
    public function getFinalidade()
    {
        return $this->finalidade;
    }

    /**
     * Returns the value of field natureza_operacao
     *
     * @return string
     */
    public function getNaturezaOperacao()
    {
        return $this->natureza_operacao;
    }

    /**
     * Returns the value of field venda
     *
     * @return integer
     */
    public function getVenda()
    {
        return $this->venda;
    }

    /**
     * Returns the value of field exibir_central_compras
     *
     * @return integer
     */
    public function getExibirCentralCompras()
    {
        return $this->exibir_central_compras;
    }

    /**
     * Returns the value of field gera_financeiro
     *
     * @return integer
     */
    public function getGeraFinanceiro()
    {
        return $this->gera_financeiro;
    }

    /**
     * Returns the value of field gera_royalties
     *
     * @return integer
     */
    public function getGeraRoyalties()
    {
        return $this->gera_royalties;
    }

    /**
     * Returns the value of field gera_fundo_propaganda
     *
     * @return integer
     */
    public function getGeraFundoPropaganda()
    {
        return $this->gera_fundo_propaganda;
    }

    /**
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field emitir_nfe_cliente
     *
     * @return integer
     */
    public function getEmitirNfeCliente()
    {
        return $this->emitir_nfe_cliente;
    }

    /**
     * Returns the value of field entrada_saida
     *
     * @return string
     */
    public function getEntradaSaida()
    {
        return $this->entrada_saida;
    }

    /**
     * Returns the value of field finalidade_emissao_nfe
     *
     * @return integer
     */
    public function getFinalidadeEmissaoNfe()
    {
        return $this->finalidade_emissao_nfe;
    }

    /**
     * Returns the value of field movimenta_estoque
     *
     * @return integer
     */
    public function getMovimentaEstoque()
    {
        return $this->movimenta_estoque;
    }

    /**
     * Returns the value of field movimenta_nfe
     *
     * @return integer
     */
    public function getMovimentaNfe()
    {
        return $this->movimenta_nfe;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_finalidade', 'App\Models\Nfentrada', 'finalidade_nota', array('alias' => 'Nfentrada'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'finalidade_produto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return FinalidadeProduto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return FinalidadeProduto
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
            'id_finalidade' => 'id_finalidade',
            'finalidade' => 'finalidade',
            'natureza_operacao' => 'natureza_operacao',
            'venda' => 'venda',
            'exibir_central_compras' => 'exibir_central_compras',
            'gera_financeiro' => 'gera_financeiro',
            'gera_royalties' => 'gera_royalties',
            'gera_fundo_propaganda' => 'gera_fundo_propaganda',
            'descricao' => 'descricao',
            'emitir_nfe_cliente' => 'emitir_nfe_cliente',
            'entrada_saida' => 'entrada_saida',
            'finalidade_emissao_nfe' => 'finalidade_emissao_nfe',
            'movimenta_estoque' => 'movimenta_estoque',
            'movimenta_nfe' => 'movimenta_nfe'
        );
    }

}
