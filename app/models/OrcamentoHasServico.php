<?php

namespace App\Models;

class OrcamentoHasServico extends \Phalcon\Mvc\Model
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
     * @var integer
     */
    protected $cd_servico;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $quantidade;

    /**
     *
     * @var double
     */
    protected $preco;

    /**
     *
     * @var double
     */
    protected $preco_futuro;

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
     * Method to set the value of field cd_servico
     *
     * @param integer $cd_servico
     * @return $this
     */
    public function setCdServico($cd_servico)
    {
        $this->cd_servico = $cd_servico;

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
     * Method to set the value of field preco
     *
     * @param double $preco
     * @return $this
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Method to set the value of field preco_futuro
     *
     * @param double $preco_futuro
     * @return $this
     */
    public function setPrecoFuturo($preco_futuro)
    {
        $this->preco_futuro = $preco_futuro;

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
     * Returns the value of field cd_servico
     *
     * @return integer
     */
    public function getCdServico()
    {
        return $this->cd_servico;
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
     * Returns the value of field quantidade
     *
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Returns the value of field preco
     *
     * @return double
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Returns the value of field preco_futuro
     *
     * @return double
     */
    public function getPrecoFuturo()
    {
        return $this->preco_futuro;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_servico', 'App\Models\ServicosOrcamento', 'cd_servico', array('alias' => 'ServicosOrcamento'));
        $this->belongsTo('orcamento_cd_orcamento', 'App\Models\Orcamento', 'cd_orcamento', array('alias' => 'Orcamento'));
        $this->belongsTo('cd_servico', 'App\Models\ServicosOrcamento', 'cd_servico', array('foreignKey' => true,'alias' => 'ServicosOrcamento'));
        $this->belongsTo('orcamento_cd_orcamento', 'App\Models\Orcamento', 'cd_orcamento', array('foreignKey' => true,'alias' => 'Orcamento'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'orcamento_has_servico';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrcamentoHasServico[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrcamentoHasServico
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
            'cd_servico' => 'cd_servico',
            'descricao' => 'descricao',
            'quantidade' => 'quantidade',
            'preco' => 'preco',
            'preco_futuro' => 'preco_futuro'
        );
    }

}
