<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class Orcamento extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_orcamento;

    /**
     *
     * @var integer
     */
    protected $cd_cotacao;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var integer
     */
    protected $usuario_responsavel;

    /**
     *
     * @var integer
     */
    protected $empresa_franquia;

    /**
     *
     * @var integer
     */
    protected $contato_cd_contato;

    /**
     *
     * @var string
     */
    protected $validade;

    /**
     *
     * @var integer
     */
    protected $status_orcamento;

    /**
     *
     * @var string
     */
    protected $condPagto;

    /**
     *
     * @var string
     */
    protected $prazoEntrega;

    /**
     *
     * @var string
     */
    protected $data_envio;

    /**
     *
     * @var string
     */
    protected $data_lido;

    /**
     *
     * @var string
     */
    protected $prazoInstalacao;

    /**
     *
     * @var string
     */
    protected $obs;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $telefone;

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
    protected $end_bairro;

    /**
     *
     * @var string
     */
    protected $end_cep;

    /**
     *
     * @var string
     */
    protected $end_rua;

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
    protected $end_instalacao;

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
     *
     * @var integer
     */
    protected $padrao;

    /**
     *
     * @var string
     */
    protected $padrao_nome;

    /**
     *
     * @var string
     */
    protected $mao_obra_descricao;

    /**
     *
     * @var double
     */
    protected $mao_obra_valor;

    /**
     *
     * @var string
     */
    protected $terreno;

    /**
     *
     * @var string
     */
    protected $garantia;

    /**
     *
     * @var double
     */
    protected $sinal;

    /**
     *
     * @var integer
     */
    protected $nparcelas;

    /**
     *
     * @var string
     */
    protected $hash;

    /**
     *
     * @var integer
     */
    protected $numero_orcamento;

    /**
     *
     * @var integer
     */
    protected $sequencia_orcamento;

    /**
     *
     * @var integer
     */
    protected $orcamento_avulso;

    /**
     *
     * @var double
     */
    protected $frete;

    /**
     *
     * @var double
     */
    protected $frete_futuro;

    /**
     *
     * @var integer
     */
    protected $rodape;

    /**
     *
     * @var integer
     */
    protected $exibir_kit;

    /**
     *
     * @var integer
     */
    protected $status_envio;

    /**
     * Method to set the value of field cd_orcamento
     *
     * @param integer $cd_orcamento
     * @return $this
     */
    public function setCdOrcamento($cd_orcamento)
    {
        $this->cd_orcamento = $cd_orcamento;

        return $this;
    }

    /**
     * Method to set the value of field cd_cotacao
     *
     * @param integer $cd_cotacao
     * @return $this
     */
    public function setCdCotacao($cd_cotacao)
    {
        $this->cd_cotacao = $cd_cotacao;

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
     * Method to set the value of field usuario_responsavel
     *
     * @param integer $usuario_responsavel
     * @return $this
     */
    public function setUsuarioResponsavel($usuario_responsavel)
    {
        $this->usuario_responsavel = $usuario_responsavel;

        return $this;
    }

    /**
     * Method to set the value of field empresa_franquia
     *
     * @param integer $empresa_franquia
     * @return $this
     */
    public function setEmpresaFranquia($empresa_franquia)
    {
        $this->empresa_franquia = $empresa_franquia;

        return $this;
    }

    /**
     * Method to set the value of field contato_cd_contato
     *
     * @param integer $contato_cd_contato
     * @return $this
     */
    public function setContatoCdContato($contato_cd_contato)
    {
        $this->contato_cd_contato = $contato_cd_contato;

        return $this;
    }

    /**
     * Method to set the value of field validade
     *
     * @param string $validade
     * @return $this
     */
    public function setValidade($validade)
    {
        $this->validade = $validade;

        return $this;
    }

    /**
     * Method to set the value of field status_orcamento
     *
     * @param integer $status_orcamento
     * @return $this
     */
    public function setStatusOrcamento($status_orcamento)
    {
        $this->status_orcamento = $status_orcamento;

        return $this;
    }

    /**
     * Method to set the value of field condPagto
     *
     * @param string $condPagto
     * @return $this
     */
    public function setCondPagto($condPagto)
    {
        $this->condPagto = $condPagto;

        return $this;
    }

    /**
     * Method to set the value of field prazoEntrega
     *
     * @param string $prazoEntrega
     * @return $this
     */
    public function setPrazoEntrega($prazoEntrega)
    {
        $this->prazoEntrega = $prazoEntrega;

        return $this;
    }

    /**
     * Method to set the value of field data_envio
     *
     * @param string $data_envio
     * @return $this
     */
    public function setDataEnvio($data_envio)
    {
        $this->data_envio = $data_envio;

        return $this;
    }

    /**
     * Method to set the value of field data_lido
     *
     * @param string $data_lido
     * @return $this
     */
    public function setDataLido($data_lido)
    {
        $this->data_lido = $data_lido;

        return $this;
    }

    /**
     * Method to set the value of field prazoInstalacao
     *
     * @param string $prazoInstalacao
     * @return $this
     */
    public function setPrazoInstalacao($prazoInstalacao)
    {
        $this->prazoInstalacao = $prazoInstalacao;

        return $this;
    }

    /**
     * Method to set the value of field obs
     *
     * @param string $obs
     * @return $this
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

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
     * Method to set the value of field end_cep
     *
     * @param string $end_cep
     * @return $this
     */
    public function setEndCep($end_cep)
    {
        $this->end_cep = $end_cep;

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
     * Method to set the value of field end_instalacao
     *
     * @param string $end_instalacao
     * @return $this
     */
    public function setEndInstalacao($end_instalacao)
    {
        $this->end_instalacao = $end_instalacao;

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
     * Method to set the value of field padrao_nome
     *
     * @param string $padrao_nome
     * @return $this
     */
    public function setPadraoNome($padrao_nome)
    {
        $this->padrao_nome = $padrao_nome;

        return $this;
    }

    /**
     * Method to set the value of field mao_obra_descricao
     *
     * @param string $mao_obra_descricao
     * @return $this
     */
    public function setMaoObraDescricao($mao_obra_descricao)
    {
        $this->mao_obra_descricao = $mao_obra_descricao;

        return $this;
    }

    /**
     * Method to set the value of field mao_obra_valor
     *
     * @param double $mao_obra_valor
     * @return $this
     */
    public function setMaoObraValor($mao_obra_valor)
    {
        $this->mao_obra_valor = $mao_obra_valor;

        return $this;
    }

    /**
     * Method to set the value of field terreno
     *
     * @param string $terreno
     * @return $this
     */
    public function setTerreno($terreno)
    {
        $this->terreno = $terreno;

        return $this;
    }

    /**
     * Method to set the value of field garantia
     *
     * @param string $garantia
     * @return $this
     */
    public function setGarantia($garantia)
    {
        $this->garantia = $garantia;

        return $this;
    }

    /**
     * Method to set the value of field sinal
     *
     * @param double $sinal
     * @return $this
     */
    public function setSinal($sinal)
    {
        $this->sinal = $sinal;

        return $this;
    }

    /**
     * Method to set the value of field nparcelas
     *
     * @param integer $nparcelas
     * @return $this
     */
    public function setNparcelas($nparcelas)
    {
        $this->nparcelas = $nparcelas;

        return $this;
    }

    /**
     * Method to set the value of field hash
     *
     * @param string $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Method to set the value of field numero_orcamento
     *
     * @param integer $numero_orcamento
     * @return $this
     */
    public function setNumeroOrcamento($numero_orcamento)
    {
        $this->numero_orcamento = $numero_orcamento;

        return $this;
    }

    /**
     * Method to set the value of field sequencia_orcamento
     *
     * @param integer $sequencia_orcamento
     * @return $this
     */
    public function setSequenciaOrcamento($sequencia_orcamento)
    {
        $this->sequencia_orcamento = $sequencia_orcamento;

        return $this;
    }

    /**
     * Method to set the value of field orcamento_avulso
     *
     * @param integer $orcamento_avulso
     * @return $this
     */
    public function setOrcamentoAvulso($orcamento_avulso)
    {
        $this->orcamento_avulso = $orcamento_avulso;

        return $this;
    }

    /**
     * Method to set the value of field frete
     *
     * @param double $frete
     * @return $this
     */
    public function setFrete($frete)
    {
        $this->frete = $frete;

        return $this;
    }

    /**
     * Method to set the value of field frete_futuro
     *
     * @param double $frete_futuro
     * @return $this
     */
    public function setFreteFuturo($frete_futuro)
    {
        $this->frete_futuro = $frete_futuro;

        return $this;
    }

    /**
     * Method to set the value of field rodape
     *
     * @param integer $rodape
     * @return $this
     */
    public function setRodape($rodape)
    {
        $this->rodape = $rodape;

        return $this;
    }

    /**
     * Method to set the value of field exibir_kit
     *
     * @param integer $exibir_kit
     * @return $this
     */
    public function setExibirKit($exibir_kit)
    {
        $this->exibir_kit = $exibir_kit;

        return $this;
    }

    /**
     * Method to set the value of field status_envio
     *
     * @param integer $status_envio
     * @return $this
     */
    public function setStatusEnvio($status_envio)
    {
        $this->status_envio = $status_envio;

        return $this;
    }

    /**
     * Returns the value of field cd_orcamento
     *
     * @return integer
     */
    public function getCdOrcamento()
    {
        return $this->cd_orcamento;
    }

    /**
     * Returns the value of field cd_cotacao
     *
     * @return integer
     */
    public function getCdCotacao()
    {
        return $this->cd_cotacao;
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
     * Returns the value of field usuario_responsavel
     *
     * @return integer
     */
    public function getUsuarioResponsavel()
    {
        return $this->usuario_responsavel;
    }

    /**
     * Returns the value of field empresa_franquia
     *
     * @return integer
     */
    public function getEmpresaFranquia()
    {
        return $this->empresa_franquia;
    }

    /**
     * Returns the value of field contato_cd_contato
     *
     * @return integer
     */
    public function getContatoCdContato()
    {
        return $this->contato_cd_contato;
    }

    /**
     * Returns the value of field validade
     *
     * @return string
     */
    public function getValidade()
    {
        return $this->validade;
    }

    /**
     * Returns the value of field status_orcamento
     *
     * @return integer
     */
    public function getStatusOrcamento()
    {
        return $this->status_orcamento;
    }

    /**
     * Returns the value of field condPagto
     *
     * @return string
     */
    public function getCondPagto()
    {
        return $this->condPagto;
    }

    /**
     * Returns the value of field prazoEntrega
     *
     * @return string
     */
    public function getPrazoEntrega()
    {
        return $this->prazoEntrega;
    }

    /**
     * Returns the value of field data_envio
     *
     * @return string
     */
    public function getDataEnvio()
    {
        return $this->data_envio;
    }

    /**
     * Returns the value of field data_lido
     *
     * @return string
     */
    public function getDataLido()
    {
        return $this->data_lido;
    }

    /**
     * Returns the value of field prazoInstalacao
     *
     * @return string
     */
    public function getPrazoInstalacao()
    {
        return $this->prazoInstalacao;
    }

    /**
     * Returns the value of field obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
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
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
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
     * Returns the value of field end_bairro
     *
     * @return string
     */
    public function getEndBairro()
    {
        return $this->end_bairro;
    }

    /**
     * Returns the value of field end_cep
     *
     * @return string
     */
    public function getEndCep()
    {
        return $this->end_cep;
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
     * Returns the value of field end_instalacao
     *
     * @return string
     */
    public function getEndInstalacao()
    {
        return $this->end_instalacao;
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
     * Returns the value of field padrao
     *
     * @return integer
     */
    public function getPadrao()
    {
        return $this->padrao;
    }

    /**
     * Returns the value of field padrao_nome
     *
     * @return string
     */
    public function getPadraoNome()
    {
        return $this->padrao_nome;
    }

    /**
     * Returns the value of field mao_obra_descricao
     *
     * @return string
     */
    public function getMaoObraDescricao()
    {
        return $this->mao_obra_descricao;
    }

    /**
     * Returns the value of field mao_obra_valor
     *
     * @return double
     */
    public function getMaoObraValor()
    {
        return $this->mao_obra_valor;
    }

    /**
     * Returns the value of field terreno
     *
     * @return string
     */
    public function getTerreno()
    {
        return $this->terreno;
    }

    /**
     * Returns the value of field garantia
     *
     * @return string
     */
    public function getGarantia()
    {
        return $this->garantia;
    }

    /**
     * Returns the value of field sinal
     *
     * @return double
     */
    public function getSinal()
    {
        return $this->sinal;
    }

    /**
     * Returns the value of field nparcelas
     *
     * @return integer
     */
    public function getNparcelas()
    {
        return $this->nparcelas;
    }

    /**
     * Returns the value of field hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Returns the value of field numero_orcamento
     *
     * @return integer
     */
    public function getNumeroOrcamento()
    {
        return $this->numero_orcamento;
    }

    /**
     * Returns the value of field sequencia_orcamento
     *
     * @return integer
     */
    public function getSequenciaOrcamento()
    {
        return $this->sequencia_orcamento;
    }

    /**
     * Returns the value of field orcamento_avulso
     *
     * @return integer
     */
    public function getOrcamentoAvulso()
    {
        return $this->orcamento_avulso;
    }

    /**
     * Returns the value of field frete
     *
     * @return double
     */
    public function getFrete()
    {
        return $this->frete;
    }

    /**
     * Returns the value of field frete_futuro
     *
     * @return double
     */
    public function getFreteFuturo()
    {
        return $this->frete_futuro;
    }

    /**
     * Returns the value of field rodape
     *
     * @return integer
     */
    public function getRodape()
    {
        return $this->rodape;
    }

    /**
     * Returns the value of field exibir_kit
     *
     * @return integer
     */
    public function getExibirKit()
    {
        return $this->exibir_kit;
    }

    /**
     * Returns the value of field status_envio
     *
     * @return integer
     */
    public function getStatusEnvio()
    {
        return $this->status_envio;
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
        $this->hasMany('cd_orcamento', 'App\Models\OrcamentoHasCondPagto', 'orcamento_cd_orcamento', array('alias' => 'OrcamentoHasCondPagto'));
        $this->hasMany('cd_orcamento', 'App\Models\OrcamentoHasServico', 'orcamento_cd_orcamento', array('alias' => 'OrcamentoHasServico'));
        $this->hasMany('cd_orcamento', 'App\Models\OrcamentoItem', 'orcamento_cd_orcamento', array('alias' => 'OrcamentoItem'));
        $this->belongsTo('cd_cotacao', 'App\Models\Cotacao', 'cd_cotacao', array('alias' => 'Cotacao'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('empresa_franquia', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('contato_cd_contato', 'App\Models\Contato', 'cd_contato', array('alias' => 'Contato'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->hasMany('cd_orcamento', 'App\Models\OrcamentoHasCondPagto', 'orcamento_cd_orcamento', NULL);
        $this->hasMany('cd_orcamento', 'App\Models\OrcamentoHasServico', 'orcamento_cd_orcamento', NULL);
        $this->hasMany('cd_orcamento', 'App\Models\OrcamentoItem', 'orcamento_cd_orcamento', NULL);
        $this->belongsTo('cd_cotacao', 'App\Models\Cotacao', 'cd_cotacao', array('foreignKey' => true,'alias' => 'Cotacao'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
        $this->belongsTo('empresa_franquia', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('contato_cd_contato', 'App\Models\Contato', 'cd_contato', array('foreignKey' => true,'alias' => 'Contato'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'orcamento';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Orcamento[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Orcamento
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
            'cd_orcamento' => 'cd_orcamento',
            'cd_cotacao' => 'cd_cotacao',
            'cd_unidade' => 'cd_unidade',
            'usuario_responsavel' => 'usuario_responsavel',
            'empresa_franquia' => 'empresa_franquia',
            'contato_cd_contato' => 'contato_cd_contato',
            'validade' => 'validade',
            'status_orcamento' => 'status_orcamento',
            'condPagto' => 'condPagto',
            'prazoEntrega' => 'prazoEntrega',
            'data_envio' => 'data_envio',
            'data_lido' => 'data_lido',
            'prazoInstalacao' => 'prazoInstalacao',
            'obs' => 'obs',
            'nome' => 'nome',
            'email' => 'email',
            'telefone' => 'telefone',
            'end_cidade' => 'end_cidade',
            'end_uf' => 'end_uf',
            'end_bairro' => 'end_bairro',
            'end_cep' => 'end_cep',
            'end_rua' => 'end_rua',
            'end_numero' => 'end_numero',
            'end_complemento' => 'end_complemento',
            'end_instalacao' => 'end_instalacao',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'padrao' => 'padrao',
            'padrao_nome' => 'padrao_nome',
            'mao_obra_descricao' => 'mao_obra_descricao',
            'mao_obra_valor' => 'mao_obra_valor',
            'terreno' => 'terreno',
            'garantia' => 'garantia',
            'sinal' => 'sinal',
            'nparcelas' => 'nparcelas',
            'hash' => 'hash',
            'numero_orcamento' => 'numero_orcamento',
            'sequencia_orcamento' => 'sequencia_orcamento',
            'orcamento_avulso' => 'orcamento_avulso',
            'frete' => 'frete',
            'frete_futuro' => 'frete_futuro',
            'rodape' => 'rodape',
            'exibir_kit' => 'exibir_kit',
            'status_envio' => 'status_envio'
        );
    }

}
