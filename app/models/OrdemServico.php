<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class OrdemServico extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_ordem;

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
    protected $pedido_Cd_pedido;

    /**
     *
     * @var integer
     */
    protected $atendimento;

    /**
     *
     * @var integer
     */
    protected $cd_pedido;

    /**
     *
     * @var string
     */
    protected $contato;

    /**
     *
     * @var string
     */
    protected $end_rua;

    /**
     *
     * @var string
     */
    protected $end_bairro;

    /**
     *
     * @var string
     */
    protected $end_numero;

    /**
     *
     * @var string
     */
    protected $end_complemento;

    /**
     *
     * @var string
     */
    protected $end_cidade;

    /**
     *
     * @var string
     */
    protected $end_uf;

    /**
     *
     * @var string
     */
    protected $telefone;

    /**
     *
     * @var string
     */
    protected $celular;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $cpfCnpj;

    /**
     *
     * @var string
     */
    protected $fax;

    /**
     *
     * @var integer
     */
    protected $responsavel;

    /**
     *
     * @var string
     */
    protected $referencia;

    /**
     *
     * @var string
     */
    protected $observacao;

    /**
     *
     * @var integer
     */
    protected $problema_cd_problemasprodutos;

    /**
     *
     * @var string
     */
    protected $problema_cliente;

    /**
     *
     * @var string
     */
    protected $problema_licenciada;

    /**
     *
     * @var string
     */
    protected $solucao_franquia;

    /**
     *
     * @var integer
     */
    protected $status_ordem;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $finalizado;

    /**
     *
     * @var string
     */
    protected $data_criado;

    /**
     *
     * @var string
     */
    protected $data_prevista;

    /**
     *
     * @var integer
     */
    protected $nserie;

    /**
     *
     * @var integer
     */
    protected $franquia;

    /**
     *
     * @var string
     */
    protected $cliente;

    /**
     *
     * @var string
     */
    protected $cliente_atendido;

    /**
     *
     * @var double
     */
    protected $vl_ordem_servico;

    /**
     *
     * @var integer
     */
    protected $cd_servico;

    /**
     *
     * @var integer
     */
    protected $fornecedor_homologado;

    /**
     *
     * @var double
     */
    protected $taxa_servico;

    /**
     *
     * @var integer
     */
    protected $faturado;

    /**
     *
     * @var integer
     */
    protected $cd_lancamento;

    /**
     *
     * @var integer
     */
    protected $idfaturamento;

    /**
     *
     * @var integer
     */
    protected $royalties;

    /**
     *
     * @var integer
     */
    protected $publicidade;

    /**
     *
     * @var integer
     */
    protected $sequencia;

    /**
     * Method to set the value of field cd_ordem
     *
     * @param integer $cd_ordem
     * @return $this
     */
    public function setCdOrdem($cd_ordem)
    {
        $this->cd_ordem = $cd_ordem;

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
     * Method to set the value of field pedido_Cd_pedido
     *
     * @param integer $pedido_Cd_pedido
     * @return $this
     */
    public function setPedidoCdPedido($pedido_Cd_pedido)
    {
        $this->pedido_Cd_pedido = $pedido_Cd_pedido;

        return $this;
    }

    /**
     * Method to set the value of field atendimento
     *
     * @param integer $atendimento
     * @return $this
     */
    public function setAtendimento($atendimento)
    {
        $this->atendimento = $atendimento;

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
     * Method to set the value of field contato
     *
     * @param string $contato
     * @return $this
     */
    public function setContato($contato)
    {
        $this->contato = $contato;

        return $this;
    }

    /**
     * Method to set the value of field end_rua
     *
     * @param string $end_rua
     * @return $this
     */
    public function setEndRua($end_rua)
    {
        $this->end_rua = $end_rua;

        return $this;
    }

    /**
     * Method to set the value of field end_bairro
     *
     * @param string $end_bairro
     * @return $this
     */
    public function setEndBairro($end_bairro)
    {
        $this->end_bairro = $end_bairro;

        return $this;
    }

    /**
     * Method to set the value of field end_numero
     *
     * @param string $end_numero
     * @return $this
     */
    public function setEndNumero($end_numero)
    {
        $this->end_numero = $end_numero;

        return $this;
    }

    /**
     * Method to set the value of field end_complemento
     *
     * @param string $end_complemento
     * @return $this
     */
    public function setEndComplemento($end_complemento)
    {
        $this->end_complemento = $end_complemento;

        return $this;
    }

    /**
     * Method to set the value of field end_cidade
     *
     * @param string $end_cidade
     * @return $this
     */
    public function setEndCidade($end_cidade)
    {
        $this->end_cidade = $end_cidade;

        return $this;
    }

    /**
     * Method to set the value of field end_uf
     *
     * @param string $end_uf
     * @return $this
     */
    public function setEndUf($end_uf)
    {
        $this->end_uf = $end_uf;

        return $this;
    }

    /**
     * Method to set the value of field telefone
     *
     * @param string $telefone
     * @return $this
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Method to set the value of field celular
     *
     * @param string $celular
     * @return $this
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field cpfCnpj
     *
     * @param string $cpfCnpj
     * @return $this
     */
    public function setCpfCnpj($cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;

        return $this;
    }

    /**
     * Method to set the value of field fax
     *
     * @param string $fax
     * @return $this
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Method to set the value of field responsavel
     *
     * @param integer $responsavel
     * @return $this
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Method to set the value of field referencia
     *
     * @param string $referencia
     * @return $this
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

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
     * Method to set the value of field problema_cd_problemasprodutos
     *
     * @param integer $problema_cd_problemasprodutos
     * @return $this
     */
    public function setProblemaCdProblemasprodutos($problema_cd_problemasprodutos)
    {
        $this->problema_cd_problemasprodutos = $problema_cd_problemasprodutos;

        return $this;
    }

    /**
     * Method to set the value of field problema_cliente
     *
     * @param string $problema_cliente
     * @return $this
     */
    public function setProblemaCliente($problema_cliente)
    {
        $this->problema_cliente = $problema_cliente;

        return $this;
    }

    /**
     * Method to set the value of field problema_licenciada
     *
     * @param string $problema_licenciada
     * @return $this
     */
    public function setProblemaLicenciada($problema_licenciada)
    {
        $this->problema_licenciada = $problema_licenciada;

        return $this;
    }

    /**
     * Method to set the value of field solucao_franquia
     *
     * @param string $solucao_franquia
     * @return $this
     */
    public function setSolucaoFranquia($solucao_franquia)
    {
        $this->solucao_franquia = $solucao_franquia;

        return $this;
    }

    /**
     * Method to set the value of field status_ordem
     *
     * @param integer $status_ordem
     * @return $this
     */
    public function setStatusOrdem($status_ordem)
    {
        $this->status_ordem = $status_ordem;

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
     * Method to set the value of field finalizado
     *
     * @param string $finalizado
     * @return $this
     */
    public function setFinalizado($finalizado)
    {
        $this->finalizado = $finalizado;

        return $this;
    }

    /**
     * Method to set the value of field data_criado
     *
     * @param string $data_criado
     * @return $this
     */
    public function setDataCriado($data_criado)
    {
        $this->data_criado = $data_criado;

        return $this;
    }

    /**
     * Method to set the value of field data_prevista
     *
     * @param string $data_prevista
     * @return $this
     */
    public function setDataPrevista($data_prevista)
    {
        $this->data_prevista = $data_prevista;

        return $this;
    }

    /**
     * Method to set the value of field nserie
     *
     * @param integer $nserie
     * @return $this
     */
    public function setNserie($nserie)
    {
        $this->nserie = $nserie;

        return $this;
    }

    /**
     * Method to set the value of field franquia
     *
     * @param integer $franquia
     * @return $this
     */
    public function setFranquia($franquia)
    {
        $this->franquia = $franquia;

        return $this;
    }

    /**
     * Method to set the value of field cliente
     *
     * @param string $cliente
     * @return $this
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Method to set the value of field cliente_atendido
     *
     * @param string $cliente_atendido
     * @return $this
     */
    public function setClienteAtendido($cliente_atendido)
    {
        $this->cliente_atendido = $cliente_atendido;

        return $this;
    }

    /**
     * Method to set the value of field vl_ordem_servico
     *
     * @param double $vl_ordem_servico
     * @return $this
     */
    public function setVlOrdemServico($vl_ordem_servico)
    {
        $this->vl_ordem_servico = $vl_ordem_servico;

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
     * Method to set the value of field fornecedor_homologado
     *
     * @param integer $fornecedor_homologado
     * @return $this
     */
    public function setFornecedorHomologado($fornecedor_homologado)
    {
        $this->fornecedor_homologado = $fornecedor_homologado;

        return $this;
    }

    /**
     * Method to set the value of field taxa_servico
     *
     * @param double $taxa_servico
     * @return $this
     */
    public function setTaxaServico($taxa_servico)
    {
        $this->taxa_servico = $taxa_servico;

        return $this;
    }

    /**
     * Method to set the value of field faturado
     *
     * @param integer $faturado
     * @return $this
     */
    public function setFaturado($faturado)
    {
        $this->faturado = $faturado;

        return $this;
    }

    /**
     * Method to set the value of field cd_lancamento
     *
     * @param integer $cd_lancamento
     * @return $this
     */
    public function setCdLancamento($cd_lancamento)
    {
        $this->cd_lancamento = $cd_lancamento;

        return $this;
    }

    /**
     * Method to set the value of field idfaturamento
     *
     * @param integer $idfaturamento
     * @return $this
     */
    public function setIdfaturamento($idfaturamento)
    {
        $this->idfaturamento = $idfaturamento;

        return $this;
    }

    /**
     * Method to set the value of field royalties
     *
     * @param integer $royalties
     * @return $this
     */
    public function setRoyalties($royalties)
    {
        $this->royalties = $royalties;

        return $this;
    }

    /**
     * Method to set the value of field publicidade
     *
     * @param integer $publicidade
     * @return $this
     */
    public function setPublicidade($publicidade)
    {
        $this->publicidade = $publicidade;

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
     * Returns the value of field cd_ordem
     *
     * @return integer
     */
    public function getCdOrdem()
    {
        return $this->cd_ordem;
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
     * Returns the value of field pedido_Cd_pedido
     *
     * @return integer
     */
    public function getPedidoCdPedido()
    {
        return $this->pedido_Cd_pedido;
    }

    /**
     * Returns the value of field atendimento
     *
     * @return integer
     */
    public function getAtendimento()
    {
        return $this->atendimento;
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
     * Returns the value of field contato
     *
     * @return string
     */
    public function getContato()
    {
        return $this->contato;
    }

    /**
     * Returns the value of field end_rua
     *
     * @return string
     */
    public function getEndRua()
    {
        return $this->end_rua;
    }

    /**
     * Returns the value of field end_bairro
     *
     * @return string
     */
    public function getEndBairro()
    {
        return $this->end_bairro;
    }

    /**
     * Returns the value of field end_numero
     *
     * @return string
     */
    public function getEndNumero()
    {
        return $this->end_numero;
    }

    /**
     * Returns the value of field end_complemento
     *
     * @return string
     */
    public function getEndComplemento()
    {
        return $this->end_complemento;
    }

    /**
     * Returns the value of field end_cidade
     *
     * @return string
     */
    public function getEndCidade()
    {
        return $this->end_cidade;
    }

    /**
     * Returns the value of field end_uf
     *
     * @return string
     */
    public function getEndUf()
    {
        return $this->end_uf;
    }

    /**
     * Returns the value of field telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Returns the value of field celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field cpfCnpj
     *
     * @return string
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * Returns the value of field fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Returns the value of field responsavel
     *
     * @return integer
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Returns the value of field referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
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
     * Returns the value of field problema_cd_problemasprodutos
     *
     * @return integer
     */
    public function getProblemaCdProblemasprodutos()
    {
        return $this->problema_cd_problemasprodutos;
    }

    /**
     * Returns the value of field problema_cliente
     *
     * @return string
     */
    public function getProblemaCliente()
    {
        return $this->problema_cliente;
    }

    /**
     * Returns the value of field problema_licenciada
     *
     * @return string
     */
    public function getProblemaLicenciada()
    {
        return $this->problema_licenciada;
    }

    /**
     * Returns the value of field solucao_franquia
     *
     * @return string
     */
    public function getSolucaoFranquia()
    {
        return $this->solucao_franquia;
    }

    /**
     * Returns the value of field status_ordem
     *
     * @return integer
     */
    public function getStatusOrdem()
    {
        return $this->status_ordem;
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
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
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
     * Returns the value of field finalizado
     *
     * @return string
     */
    public function getFinalizado()
    {
        return $this->finalizado;
    }

    /**
     * Returns the value of field data_criado
     *
     * @return string
     */
    public function getDataCriado()
    {
        return $this->data_criado;
    }

    /**
     * Returns the value of field data_prevista
     *
     * @return string
     */
    public function getDataPrevista()
    {
        return $this->data_prevista;
    }

    /**
     * Returns the value of field nserie
     *
     * @return integer
     */
    public function getNserie()
    {
        return $this->nserie;
    }

    /**
     * Returns the value of field franquia
     *
     * @return integer
     */
    public function getFranquia()
    {
        return $this->franquia;
    }

    /**
     * Returns the value of field cliente
     *
     * @return string
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Returns the value of field cliente_atendido
     *
     * @return string
     */
    public function getClienteAtendido()
    {
        return $this->cliente_atendido;
    }

    /**
     * Returns the value of field vl_ordem_servico
     *
     * @return double
     */
    public function getVlOrdemServico()
    {
        return $this->vl_ordem_servico;
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
     * Returns the value of field fornecedor_homologado
     *
     * @return integer
     */
    public function getFornecedorHomologado()
    {
        return $this->fornecedor_homologado;
    }

    /**
     * Returns the value of field taxa_servico
     *
     * @return double
     */
    public function getTaxaServico()
    {
        return $this->taxa_servico;
    }

    /**
     * Returns the value of field faturado
     *
     * @return integer
     */
    public function getFaturado()
    {
        return $this->faturado;
    }

    /**
     * Returns the value of field cd_lancamento
     *
     * @return integer
     */
    public function getCdLancamento()
    {
        return $this->cd_lancamento;
    }

    /**
     * Returns the value of field idfaturamento
     *
     * @return integer
     */
    public function getIdfaturamento()
    {
        return $this->idfaturamento;
    }

    /**
     * Returns the value of field royalties
     *
     * @return integer
     */
    public function getRoyalties()
    {
        return $this->royalties;
    }

    /**
     * Returns the value of field publicidade
     *
     * @return integer
     */
    public function getPublicidade()
    {
        return $this->publicidade;
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
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('fornecedor_homologado', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('franquia', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('idfaturamento', 'App\Models\FaturamentoServicos', 'idfaturamento', array('alias' => 'FaturamentoServicos'));
        $this->belongsTo('atendimento', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
        $this->belongsTo('fornecedor_homologado', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
        $this->belongsTo('franquia', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('idfaturamento', 'App\Models\FaturamentoServicos', 'idfaturamento', array('foreignKey' => true,'alias' => 'FaturamentoServicos'));
        $this->belongsTo('atendimento', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ordem_servico';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrdemServico[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrdemServico
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
            'cd_ordem' => 'cd_ordem',
            'cd_unidade' => 'cd_unidade',
            'produto_Cd_produto' => 'produto_Cd_produto',
            'pedido_Cd_pedido' => 'pedido_Cd_pedido',
            'atendimento' => 'atendimento',
            'cd_pedido' => 'cd_pedido',
            'contato' => 'contato',
            'end_rua' => 'end_rua',
            'end_bairro' => 'end_bairro',
            'end_numero' => 'end_numero',
            'end_complemento' => 'end_complemento',
            'end_cidade' => 'end_cidade',
            'end_uf' => 'end_uf',
            'telefone' => 'telefone',
            'celular' => 'celular',
            'email' => 'email',
            'cpfCnpj' => 'cpfCnpj',
            'fax' => 'fax',
            'responsavel' => 'responsavel',
            'referencia' => 'referencia',
            'observacao' => 'observacao',
            'problema_cd_problemasprodutos' => 'problema_cd_problemasprodutos',
            'problema_cliente' => 'problema_cliente',
            'problema_licenciada' => 'problema_licenciada',
            'solucao_franquia' => 'solucao_franquia',
            'status_ordem' => 'status_ordem',
            'ativo' => 'ativo',
            'modificado' => 'modificado',
            'criado' => 'criado',
            'finalizado' => 'finalizado',
            'data_criado' => 'data_criado',
            'data_prevista' => 'data_prevista',
            'nserie' => 'nserie',
            'franquia' => 'franquia',
            'cliente' => 'cliente',
            'cliente_atendido' => 'cliente_atendido',
            'vl_ordem_servico' => 'vl_ordem_servico',
            'cd_servico' => 'cd_servico',
            'fornecedor_homologado' => 'fornecedor_homologado',
            'taxa_servico' => 'taxa_servico',
            'faturado' => 'faturado',
            'cd_lancamento' => 'cd_lancamento',
            'idfaturamento' => 'idfaturamento',
            'royalties' => 'royalties',
            'publicidade' => 'publicidade',
            'sequencia' => 'sequencia'
        );
    }

}
