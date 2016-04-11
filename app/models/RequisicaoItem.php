<?php

namespace App\Models;

class RequisicaoItem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_requisicaoItem;

    /**
     *
     * @var integer
     */
    protected $requisicaoMat_cd_requisicao;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $movEstoque;

    /**
     *
     * @var integer
     */
    protected $Cd_produto;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var double
     */
    protected $quantidade;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     * Method to set the value of field cd_requisicaoItem
     *
     * @param integer $cd_requisicaoItem
     * @return $this
     */
    public function setCdRequisicaoItem($cd_requisicaoItem)
    {
        $this->cd_requisicaoItem = $cd_requisicaoItem;

        return $this;
    }

    /**
     * Method to set the value of field requisicaoMat_cd_requisicao
     *
     * @param integer $requisicaoMat_cd_requisicao
     * @return $this
     */
    public function setRequisicaoMatCdRequisicao($requisicaoMat_cd_requisicao)
    {
        $this->requisicaoMat_cd_requisicao = $requisicaoMat_cd_requisicao;

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
     * Method to set the value of field movEstoque
     *
     * @param integer $movEstoque
     * @return $this
     */
    public function setMovEstoque($movEstoque)
    {
        $this->movEstoque = $movEstoque;

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
     * @param double $quantidade
     * @return $this
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Method to set the value of field criado
     *
     * @param string $criado
     * @return $this
     */
    public function setCriado($criado)
    {
        $this->criado = $criado;

        return $this;
    }

    /**
     * Method to set the value of field modificado
     *
     * @param string $modificado
     * @return $this
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;

        return $this;
    }

    /**
     * Method to set the value of field ativo
     *
     * @param integer $ativo
     * @return $this
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Returns the value of field cd_requisicaoItem
     *
     * @return integer
     */
    public function getCdRequisicaoItem()
    {
        return $this->cd_requisicaoItem;
    }

    /**
     * Returns the value of field requisicaoMat_cd_requisicao
     *
     * @return integer
     */
    public function getRequisicaoMatCdRequisicao()
    {
        return $this->requisicaoMat_cd_requisicao;
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
     * Returns the value of field movEstoque
     *
     * @return integer
     */
    public function getMovEstoque()
    {
        return $this->movEstoque;
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
     * @return double
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Returns the value of field criado
     *
     * @return string
     */
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_requisicaoItem', 'App\Models\OrdemCompraItem', 'cd_requisicaoitem', array('alias' => 'OrdemCompraItem'));
        $this->hasMany('requisicaoMat_cd_requisicao', 'App\Models\OrdemCompraItem', 'cd_requisicaomat', array('alias' => 'OrdemCompraItem'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('requisicaoMat_cd_requisicao', 'App\Models\RequisicaoMat', 'cd_requisicao', array('alias' => 'RequisicaoMat'));
        $this->belongsTo('movEstoque', 'App\Models\MovEstoque', 'cd_estoque', array('alias' => 'MovEstoque'));
        $this->belongsTo('Cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->hasMany('cd_requisicaoItem', 'App\Models\OrdemCompraItem', 'cd_requisicaoitem', NULL);
        $this->hasMany('requisicaoMat_cd_requisicao', 'App\Models\OrdemCompraItem', 'cd_requisicaomat', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('requisicaoMat_cd_requisicao', 'App\Models\RequisicaoMat', 'cd_requisicao', array('foreignKey' => true,'alias' => 'RequisicaoMat'));
        $this->belongsTo('movEstoque', 'App\Models\MovEstoque', 'cd_estoque', array('foreignKey' => true,'alias' => 'MovEstoque'));
        $this->belongsTo('Cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'requisicaoItem';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RequisicaoItem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RequisicaoItem
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
            'cd_requisicaoItem' => 'cd_requisicaoItem',
            'requisicaoMat_cd_requisicao' => 'requisicaoMat_cd_requisicao',
            'cd_empresa' => 'cd_empresa',
            'movEstoque' => 'movEstoque',
            'Cd_produto' => 'Cd_produto',
            'nome' => 'nome',
            'quantidade' => 'quantidade',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'ativo' => 'ativo'
        );
    }

}
