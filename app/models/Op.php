<?php

namespace App\Models;

class Op extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_op;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $Cd_produto;

    /**
     *
     * @var integer
     */
    protected $cd_pedido;

    /**
     *
     * @var integer
     */
    protected $cd_molde;

    /**
     *
     * @var string
     */
    protected $nserie;

    /**
     *
     * @var integer
     */
    protected $ordem_fila_producao;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var string
     */
    protected $inicio;

    /**
     *
     * @var string
     */
    protected $termino;

    /**
     *
     * @var string
     */
    protected $observacao;

    /**
     *
     * @var string
     */
    protected $mensagem;

    /**
     *
     * @var integer
     */
    protected $avulso;

    /**
     *
     * @var integer
     */
    protected $cd_tipo_engenharia;

    /**
     *
     * @var integer
     */
    protected $produto_ld;

    /**
     *
     * @var double
     */
    protected $quantidade_fabricado;

    /**
     *
     * @var integer
     */
    protected $status_encerramento;

    /**
     *
     * @var integer
     */
    protected $cd_armazenagem;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     * Method to set the value of field cd_op
     *
     * @param integer $cd_op
     * @return $this
     */
    public function setCdOp($cd_op)
    {
        $this->cd_op = $cd_op;

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
     * Method to set the value of field cd_pedido
     *
     * @param integer $cd_pedido
     * @return $this
     */
    public function setCdPedido($cd_pedido)
    {
        $this->cd_pedido = $cd_pedido;

        return $this;
    }

    /**
     * Method to set the value of field cd_molde
     *
     * @param integer $cd_molde
     * @return $this
     */
    public function setCdMolde($cd_molde)
    {
        $this->cd_molde = $cd_molde;

        return $this;
    }

    /**
     * Method to set the value of field nserie
     *
     * @param string $nserie
     * @return $this
     */
    public function setNserie($nserie)
    {
        $this->nserie = $nserie;

        return $this;
    }

    /**
     * Method to set the value of field ordem_fila_producao
     *
     * @param integer $ordem_fila_producao
     * @return $this
     */
    public function setOrdemFilaProducao($ordem_fila_producao)
    {
        $this->ordem_fila_producao = $ordem_fila_producao;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field inicio
     *
     * @param string $inicio
     * @return $this
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Method to set the value of field termino
     *
     * @param string $termino
     * @return $this
     */
    public function setTermino($termino)
    {
        $this->termino = $termino;

        return $this;
    }

    /**
     * Method to set the value of field observacao
     *
     * @param string $observacao
     * @return $this
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Method to set the value of field mensagem
     *
     * @param string $mensagem
     * @return $this
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;

        return $this;
    }

    /**
     * Method to set the value of field avulso
     *
     * @param integer $avulso
     * @return $this
     */
    public function setAvulso($avulso)
    {
        $this->avulso = $avulso;

        return $this;
    }

    /**
     * Method to set the value of field cd_tipo_engenharia
     *
     * @param integer $cd_tipo_engenharia
     * @return $this
     */
    public function setCdTipoEngenharia($cd_tipo_engenharia)
    {
        $this->cd_tipo_engenharia = $cd_tipo_engenharia;

        return $this;
    }

    /**
     * Method to set the value of field produto_ld
     *
     * @param integer $produto_ld
     * @return $this
     */
    public function setProdutoLd($produto_ld)
    {
        $this->produto_ld = $produto_ld;

        return $this;
    }

    /**
     * Method to set the value of field quantidade_fabricado
     *
     * @param double $quantidade_fabricado
     * @return $this
     */
    public function setQuantidadeFabricado($quantidade_fabricado)
    {
        $this->quantidade_fabricado = $quantidade_fabricado;

        return $this;
    }

    /**
     * Method to set the value of field status_encerramento
     *
     * @param integer $status_encerramento
     * @return $this
     */
    public function setStatusEncerramento($status_encerramento)
    {
        $this->status_encerramento = $status_encerramento;

        return $this;
    }

    /**
     * Method to set the value of field cd_armazenagem
     *
     * @param integer $cd_armazenagem
     * @return $this
     */
    public function setCdArmazenagem($cd_armazenagem)
    {
        $this->cd_armazenagem = $cd_armazenagem;

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
     * Returns the value of field cd_op
     *
     * @return integer
     */
    public function getCdOp()
    {
        return $this->cd_op;
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
     * Returns the value of field Cd_produto
     *
     * @return integer
     */
    public function getCdProduto()
    {
        return $this->Cd_produto;
    }

    /**
     * Returns the value of field cd_pedido
     *
     * @return integer
     */
    public function getCdPedido()
    {
        return $this->cd_pedido;
    }

    /**
     * Returns the value of field cd_molde
     *
     * @return integer
     */
    public function getCdMolde()
    {
        return $this->cd_molde;
    }

    /**
     * Returns the value of field nserie
     *
     * @return string
     */
    public function getNserie()
    {
        return $this->nserie;
    }

    /**
     * Returns the value of field ordem_fila_producao
     *
     * @return integer
     */
    public function getOrdemFilaProducao()
    {
        return $this->ordem_fila_producao;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field inicio
     *
     * @return string
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Returns the value of field termino
     *
     * @return string
     */
    public function getTermino()
    {
        return $this->termino;
    }

    /**
     * Returns the value of field observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Returns the value of field mensagem
     *
     * @return string
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * Returns the value of field avulso
     *
     * @return integer
     */
    public function getAvulso()
    {
        return $this->avulso;
    }

    /**
     * Returns the value of field cd_tipo_engenharia
     *
     * @return integer
     */
    public function getCdTipoEngenharia()
    {
        return $this->cd_tipo_engenharia;
    }

    /**
     * Returns the value of field produto_ld
     *
     * @return integer
     */
    public function getProdutoLd()
    {
        return $this->produto_ld;
    }

    /**
     * Returns the value of field quantidade_fabricado
     *
     * @return double
     */
    public function getQuantidadeFabricado()
    {
        return $this->quantidade_fabricado;
    }

    /**
     * Returns the value of field status_encerramento
     *
     * @return integer
     */
    public function getStatusEncerramento()
    {
        return $this->status_encerramento;
    }

    /**
     * Returns the value of field cd_armazenagem
     *
     * @return integer
     */
    public function getCdArmazenagem()
    {
        return $this->cd_armazenagem;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_op', 'App\Models\InterrupcaoLinhaProducao', 'cd_op', array('alias' => 'InterrupcaoLinhaProducao'));
        $this->hasMany('cd_op', 'App\Models\MovEstoque', 'op_cd_op', array('alias' => 'MovEstoque'));
        $this->hasMany('cd_op', 'App\Models\Opetapa', 'cod_op', array('alias' => 'Opetapa'));
        $this->belongsTo('cd_molde', 'App\Models\Molde', 'cd_molde', array('alias' => 'Molde'));
        $this->belongsTo('cd_armazenagem', 'App\Models\CentroArmazenagem', 'Cd_armazenagem', array('alias' => 'CentroArmazenagem'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('alias' => 'Pedido'));
        $this->belongsTo('cd_tipo_engenharia', 'App\Models\TipoEngenharia', 'cd_tipo', array('alias' => 'TipoEngenharia'));
        $this->belongsTo('Cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'op';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Op[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Op
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
            'cd_op' => 'cd_op',
            'cd_empresa' => 'cd_empresa',
            'Cd_produto' => 'Cd_produto',
            'cd_pedido' => 'cd_pedido',
            'cd_molde' => 'cd_molde',
            'nserie' => 'nserie',
            'ordem_fila_producao' => 'ordem_fila_producao',
            'status' => 'status',
            'inicio' => 'inicio',
            'termino' => 'termino',
            'observacao' => 'observacao',
            'mensagem' => 'mensagem',
            'avulso' => 'avulso',
            'cd_tipo_engenharia' => 'cd_tipo_engenharia',
            'produto_ld' => 'produto_ld',
            'quantidade_fabricado' => 'quantidade_fabricado',
            'status_encerramento' => 'status_encerramento',
            'cd_armazenagem' => 'cd_armazenagem',
            'criado' => 'criado'
        );
    }

}
