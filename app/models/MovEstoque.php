<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;

class MovEstoque extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_estoque;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var integer
     */
    protected $produto_Cd_produto;

    /**
     *
     * @var integer
     */
    protected $nfentrada_cd_nfentrada;

    /**
     *
     * @var integer
     */
    protected $nfsaida_cd_nfsaida;

    /**
     *
     * @var integer
     */
    protected $op_cd_op;

    /**
     *
     * @var integer
     */
    protected $opetapaitem_cd_item;

    /**
     *
     * @var integer
     */
    protected $movimentacao_manual_estoque_idmov;

    /**
     *
     * @var string
     */
    protected $tipo;

    /**
     *
     * @var string
     */
    protected $data;

    /**
     *
     * @var string
     */
    protected $hora;

    /**
     *
     * @var string
     */
    protected $nota;

    /**
     *
     * @var double
     */
    protected $quantidade;

    /**
     *
     * @var double
     */
    protected $valor_unitario;

    /**
     *
     * @var double
     */
    protected $saldo_estoque;

    /**
     *
     * @var double
     */
    protected $custo_medio;

    /**
     *
     * @var double
     */
    protected $total_estoque;

    /**
     *
     * @var string
     */
    protected $situacao;

    /**
     *
     * @var integer
     */
    protected $sequencia;

    /**
     *
     * @var integer
     */
    protected $funcionario_responsavel;

    /**
     *
     * @var integer
     */
    protected $cd_armazenagem;

    /**
     *
     * @var integer
     */
    protected $produto_ld;

    /**
     *
     * @var string
     */
    protected $observacao;

    /**
     *
     * @var integer
     */
    protected $ativo;

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
     * Method to set the value of field cd_estoque
     *
     * @param integer $cd_estoque
     * @return $this
     */
    public function setCdEstoque($cd_estoque)
    {
        $this->cd_estoque = $cd_estoque;

        return $this;
    }

    /**
     * Method to set the value of field cd_unidade
     *
     * @param integer $cd_unidade
     * @return $this
     */
    public function setCdUnidade($cd_unidade)
    {
        $this->cd_unidade = $cd_unidade;

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
     * Method to set the value of field nfentrada_cd_nfentrada
     *
     * @param integer $nfentrada_cd_nfentrada
     * @return $this
     */
    public function setNfentradaCdNfentrada($nfentrada_cd_nfentrada)
    {
        $this->nfentrada_cd_nfentrada = $nfentrada_cd_nfentrada;

        return $this;
    }

    /**
     * Method to set the value of field nfsaida_cd_nfsaida
     *
     * @param integer $nfsaida_cd_nfsaida
     * @return $this
     */
    public function setNfsaidaCdNfsaida($nfsaida_cd_nfsaida)
    {
        $this->nfsaida_cd_nfsaida = $nfsaida_cd_nfsaida;

        return $this;
    }

    /**
     * Method to set the value of field op_cd_op
     *
     * @param integer $op_cd_op
     * @return $this
     */
    public function setOpCdOp($op_cd_op)
    {
        $this->op_cd_op = $op_cd_op;

        return $this;
    }

    /**
     * Method to set the value of field opetapaitem_cd_item
     *
     * @param integer $opetapaitem_cd_item
     * @return $this
     */
    public function setOpetapaitemCdItem($opetapaitem_cd_item)
    {
        $this->opetapaitem_cd_item = $opetapaitem_cd_item;

        return $this;
    }

    /**
     * Method to set the value of field movimentacao_manual_estoque_idmov
     *
     * @param integer $movimentacao_manual_estoque_idmov
     * @return $this
     */
    public function setMovimentacaoManualEstoqueIdmov($movimentacao_manual_estoque_idmov)
    {
        $this->movimentacao_manual_estoque_idmov = $movimentacao_manual_estoque_idmov;

        return $this;
    }

    /**
     * Method to set the value of field tipo
     *
     * @param string $tipo
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Method to set the value of field data
     *
     * @param string $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Method to set the value of field hora
     *
     * @param string $hora
     * @return $this
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Method to set the value of field nota
     *
     * @param string $nota
     * @return $this
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

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
     * Method to set the value of field valor_unitario
     *
     * @param double $valor_unitario
     * @return $this
     */
    public function setValorUnitario($valor_unitario)
    {
        $this->valor_unitario = $valor_unitario;

        return $this;
    }

    /**
     * Method to set the value of field saldo_estoque
     *
     * @param double $saldo_estoque
     * @return $this
     */
    public function setSaldoEstoque($saldo_estoque)
    {
        $this->saldo_estoque = $saldo_estoque;

        return $this;
    }

    /**
     * Method to set the value of field custo_medio
     *
     * @param double $custo_medio
     * @return $this
     */
    public function setCustoMedio($custo_medio)
    {
        $this->custo_medio = $custo_medio;

        return $this;
    }

    /**
     * Method to set the value of field total_estoque
     *
     * @param double $total_estoque
     * @return $this
     */
    public function setTotalEstoque($total_estoque)
    {
        $this->total_estoque = $total_estoque;

        return $this;
    }

    /**
     * Method to set the value of field situacao
     *
     * @param string $situacao
     * @return $this
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Method to set the value of field sequencia
     *
     * @param integer $sequencia
     * @return $this
     */
    public function setSequencia($sequencia)
    {
        $this->sequencia = $sequencia;

        return $this;
    }

    /**
     * Method to set the value of field funcionario_responsavel
     *
     * @param integer $funcionario_responsavel
     * @return $this
     */
    public function setFuncionarioResponsavel($funcionario_responsavel)
    {
        $this->funcionario_responsavel = $funcionario_responsavel;

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
     * Returns the value of field cd_estoque
     *
     * @return integer
     */
    public function getCdEstoque()
    {
        return $this->cd_estoque;
    }

    /**
     * Returns the value of field cd_unidade
     *
     * @return integer
     */
    public function getCdUnidade()
    {
        return $this->cd_unidade;
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
     * Returns the value of field nfentrada_cd_nfentrada
     *
     * @return integer
     */
    public function getNfentradaCdNfentrada()
    {
        return $this->nfentrada_cd_nfentrada;
    }

    /**
     * Returns the value of field nfsaida_cd_nfsaida
     *
     * @return integer
     */
    public function getNfsaidaCdNfsaida()
    {
        return $this->nfsaida_cd_nfsaida;
    }

    /**
     * Returns the value of field op_cd_op
     *
     * @return integer
     */
    public function getOpCdOp()
    {
        return $this->op_cd_op;
    }

    /**
     * Returns the value of field opetapaitem_cd_item
     *
     * @return integer
     */
    public function getOpetapaitemCdItem()
    {
        return $this->opetapaitem_cd_item;
    }

    /**
     * Returns the value of field movimentacao_manual_estoque_idmov
     *
     * @return integer
     */
    public function getMovimentacaoManualEstoqueIdmov()
    {
        return $this->movimentacao_manual_estoque_idmov;
    }

    /**
     * Returns the value of field tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Returns the value of field data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Returns the value of field hora
     *
     * @return string
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Returns the value of field nota
     *
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
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
     * Returns the value of field valor_unitario
     *
     * @return double
     */
    public function getValorUnitario()
    {
        return $this->valor_unitario;
    }

    /**
     * Returns the value of field saldo_estoque
     *
     * @return double
     */
    public function getSaldoEstoque()
    {
        return $this->saldo_estoque;
    }

    /**
     * Returns the value of field custo_medio
     *
     * @return double
     */
    public function getCustoMedio()
    {
        return $this->custo_medio;
    }

    /**
     * Returns the value of field total_estoque
     *
     * @return double
     */
    public function getTotalEstoque()
    {
        return $this->total_estoque;
    }

    /**
     * Returns the value of field situacao
     *
     * @return string
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Returns the value of field sequencia
     *
     * @return integer
     */
    public function getSequencia()
    {
        return $this->sequencia;
    }

    /**
     * Returns the value of field funcionario_responsavel
     *
     * @return integer
     */
    public function getFuncionarioResponsavel()
    {
        return $this->funcionario_responsavel;
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
     * Returns the value of field produto_ld
     *
     * @return integer
     */
    public function getProdutoLd()
    {
        return $this->produto_ld;
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
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_estoque', 'App\Models\MovimentacaoNserie', 'cd_estoque', array('alias' => 'MovimentacaoNserie'));
        $this->hasMany('cd_estoque', 'App\Models\OrdemServicoReparo', 'cd_estoque', array('alias' => 'OrdemServicoReparo'));
        $this->hasMany('cd_estoque', 'App\Models\RequisicaoItem', 'movEstoque', array('alias' => 'RequisicaoItem'));
        $this->belongsTo('opetapaitem_cd_item', 'App\Models\Opetapaitem', 'cd_item', array('alias' => 'Opetapaitem'));
        $this->belongsTo('movimentacao_manual_estoque_idmov', 'App\Models\MovimentacaoManualEstoque', 'idmov', array('alias' => 'MovimentacaoManualEstoque'));
        $this->belongsTo('op_cd_op', 'App\Models\Op', 'cd_op', array('alias' => 'Op'));
        $this->belongsTo('funcionario_responsavel', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('nfentrada_cd_nfentrada', 'App\Models\Nfentrada', 'cd_nfentrada', array('alias' => 'Nfentrada'));
        $this->belongsTo('nfsaida_cd_nfsaida', 'App\Models\Nfsaida', 'cd_nfsaida', array('alias' => 'Nfsaida'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('produto_Cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));

        $this->customInitialize();
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'movEstoque';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovEstoque[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovEstoque
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
            'cd_estoque' => 'cd_estoque',
            'cd_unidade' => 'cd_unidade',
            'produto_Cd_produto' => 'produto_Cd_produto',
            'nfentrada_cd_nfentrada' => 'nfentrada_cd_nfentrada',
            'nfsaida_cd_nfsaida' => 'nfsaida_cd_nfsaida',
            'op_cd_op' => 'op_cd_op',
            'opetapaitem_cd_item' => 'opetapaitem_cd_item',
            'movimentacao_manual_estoque_idmov' => 'movimentacao_manual_estoque_idmov',
            'tipo' => 'tipo',
            'data' => 'data',
            'hora' => 'hora',
            'nota' => 'nota',
            'quantidade' => 'quantidade',
            'valor_unitario' => 'valor_unitario',
            'saldo_estoque' => 'saldo_estoque',
            'custo_medio' => 'custo_medio',
            'total_estoque' => 'total_estoque',
            'situacao' => 'situacao',
            'sequencia' => 'sequencia',
            'funcionario_responsavel' => 'funcionario_responsavel',
            'cd_armazenagem' => 'cd_armazenagem',
            'produto_ld' => 'produto_ld',
            'observacao' => 'observacao',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

    public function customInitialize()
    {
        $this->addBehavior(new Timestampable(
            array(
                'beforeValidationOnCreate' => array(
                    'field' => array('criado','modificado'),
                    'format' => 'Y-m-d H:i:s'
                    )
                )
        ));

        $this->skipAttributesOnUpdate(array('criado'));
    }
}
