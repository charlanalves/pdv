<?php

namespace App\Models;

class Lancamento extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_lancamento;

    /**
     *
     * @var integer
     */
    protected $cd_pedido;

    /**
     *
     * @var integer
     */
    protected $idccusto;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var integer
     */
    protected $cobranca;

    /**
     *
     * @var integer
     */
    protected $empresa;

    /**
     *
     * @var integer
     */
    protected $contas_financeira_cd_contas;

    /**
     *
     * @var integer
     */
    protected $espDoc_Cd_documento;

    /**
     *
     * @var string
     */
    protected $emissao;

    /**
     *
     * @var string
     */
    protected $venc_original;

    /**
     *
     * @var string
     */
    protected $venc_programado;

    /**
     *
     * @var string
     */
    protected $nf;

    /**
     *
     * @var integer
     */
    protected $nfsaida_cd_nfsaida;

    /**
     *
     * @var integer
     */
    protected $nfentrada_cd_nfentrada;

    /**
     *
     * @var integer
     */
    protected $conhecimento_transporte_cd_conhecimento;

    /**
     *
     * @var string
     */
    protected $serie;

    /**
     *
     * @var string
     */
    protected $documento;

    /**
     *
     * @var string
     */
    protected $duplicata;

    /**
     *
     * @var integer
     */
    protected $parcela;

    /**
     *
     * @var integer
     */
    protected $nparcela;

    /**
     *
     * @var string
     */
    protected $historico;

    /**
     *
     * @var string
     */
    protected $obs;

    /**
     *
     * @var double
     */
    protected $valor;

    /**
     *
     * @var double
     */
    protected $saldo_lanc;

    /**
     *
     * @var double
     */
    protected $saldo_credito_cliente;

    /**
     *
     * @var integer
     */
    protected $situacao;

    /**
     *
     * @var integer
     */
    protected $multiplo;

    /**
     *
     * @var integer
     */
    protected $tipo;

    /**
     *
     * @var integer
     */
    protected $tipo_lancamento;

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
    protected $ccliente;

    /**
     *
     * @var integer
     */
    protected $cheque;

    /**
     *
     * @var integer
     */
    protected $liberado;

    /**
     *
     * @var integer
     */
    protected $portador;

    /**
     *
     * @var integer
     */
    protected $lancamento_avulso;

    /**
     *
     * @var integer
     */
    protected $lancamento_liquidado;

    /**
     *
     * @var integer
     */
    protected $composicao_nosso_numero;

    /**
     *
     * @var integer
     */
    protected $bloqueado;

    /**
     *
     * @var integer
     */
    protected $contrapartida;

    /**
     *
     * @var integer
     */
    protected $lanc_automatico;

    /**
     *
     * @var integer
     */
    protected $especie_lancamento;

    /**
     *
     * @var integer
     */
    protected $liquidacao_parent;

    /**
     *
     * @var integer
     */
    protected $cd_status;

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
     * Method to set the value of field idccusto
     *
     * @param integer $idccusto
     * @return $this
     */
    public function setIdccusto($idccusto)
    {
        $this->idccusto = $idccusto;

        return $this;
    }

    /**
     * Method to set the value of field unidade_negocio_cd_unidade
     *
     * @param integer $unidade_negocio_cd_unidade
     * @return $this
     */
    public function setUnidadeNegocioCdUnidade($unidade_negocio_cd_unidade)
    {
        $this->unidade_negocio_cd_unidade = $unidade_negocio_cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field cobranca
     *
     * @param integer $cobranca
     * @return $this
     */
    public function setCobranca($cobranca)
    {
        $this->cobranca = $cobranca;

        return $this;
    }

    /**
     * Method to set the value of field empresa
     *
     * @param integer $empresa
     * @return $this
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Method to set the value of field contas_financeira_cd_contas
     *
     * @param integer $contas_financeira_cd_contas
     * @return $this
     */
    public function setContasFinanceiraCdContas($contas_financeira_cd_contas)
    {
        $this->contas_financeira_cd_contas = $contas_financeira_cd_contas;

        return $this;
    }

    /**
     * Method to set the value of field espDoc_Cd_documento
     *
     * @param integer $espDoc_Cd_documento
     * @return $this
     */
    public function setEspDocCdDocumento($espDoc_Cd_documento)
    {
        $this->espDoc_Cd_documento = $espDoc_Cd_documento;

        return $this;
    }

    /**
     * Method to set the value of field emissao
     *
     * @param string $emissao
     * @return $this
     */
    public function setEmissao($emissao)
    {
        $this->emissao = $emissao;

        return $this;
    }

    /**
     * Method to set the value of field venc_original
     *
     * @param string $venc_original
     * @return $this
     */
    public function setVencOriginal($venc_original)
    {
        $this->venc_original = $venc_original;

        return $this;
    }

    /**
     * Method to set the value of field venc_programado
     *
     * @param string $venc_programado
     * @return $this
     */
    public function setVencProgramado($venc_programado)
    {
        $this->venc_programado = $venc_programado;

        return $this;
    }

    /**
     * Method to set the value of field nf
     *
     * @param string $nf
     * @return $this
     */
    public function setNf($nf)
    {
        $this->nf = $nf;

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
     * Method to set the value of field conhecimento_transporte_cd_conhecimento
     *
     * @param integer $conhecimento_transporte_cd_conhecimento
     * @return $this
     */
    public function setConhecimentoTransporteCdConhecimento($conhecimento_transporte_cd_conhecimento)
    {
        $this->conhecimento_transporte_cd_conhecimento = $conhecimento_transporte_cd_conhecimento;

        return $this;
    }

    /**
     * Method to set the value of field serie
     *
     * @param string $serie
     * @return $this
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Method to set the value of field documento
     *
     * @param string $documento
     * @return $this
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Method to set the value of field duplicata
     *
     * @param string $duplicata
     * @return $this
     */
    public function setDuplicata($duplicata)
    {
        $this->duplicata = $duplicata;

        return $this;
    }

    /**
     * Method to set the value of field parcela
     *
     * @param integer $parcela
     * @return $this
     */
    public function setParcela($parcela)
    {
        $this->parcela = $parcela;

        return $this;
    }

    /**
     * Method to set the value of field nparcela
     *
     * @param integer $nparcela
     * @return $this
     */
    public function setNparcela($nparcela)
    {
        $this->nparcela = $nparcela;

        return $this;
    }

    /**
     * Method to set the value of field historico
     *
     * @param string $historico
     * @return $this
     */
    public function setHistorico($historico)
    {
        $this->historico = $historico;

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
     * Method to set the value of field valor
     *
     * @param double $valor
     * @return $this
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Method to set the value of field saldo_lanc
     *
     * @param double $saldo_lanc
     * @return $this
     */
    public function setSaldoLanc($saldo_lanc)
    {
        $this->saldo_lanc = $saldo_lanc;

        return $this;
    }

    /**
     * Method to set the value of field saldo_credito_cliente
     *
     * @param double $saldo_credito_cliente
     * @return $this
     */
    public function setSaldoCreditoCliente($saldo_credito_cliente)
    {
        $this->saldo_credito_cliente = $saldo_credito_cliente;

        return $this;
    }

    /**
     * Method to set the value of field situacao
     *
     * @param integer $situacao
     * @return $this
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Method to set the value of field multiplo
     *
     * @param integer $multiplo
     * @return $this
     */
    public function setMultiplo($multiplo)
    {
        $this->multiplo = $multiplo;

        return $this;
    }

    /**
     * Method to set the value of field tipo
     *
     * @param integer $tipo
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Method to set the value of field tipo_lancamento
     *
     * @param integer $tipo_lancamento
     * @return $this
     */
    public function setTipoLancamento($tipo_lancamento)
    {
        $this->tipo_lancamento = $tipo_lancamento;

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
     * Method to set the value of field ccliente
     *
     * @param integer $ccliente
     * @return $this
     */
    public function setCcliente($ccliente)
    {
        $this->ccliente = $ccliente;

        return $this;
    }

    /**
     * Method to set the value of field cheque
     *
     * @param integer $cheque
     * @return $this
     */
    public function setCheque($cheque)
    {
        $this->cheque = $cheque;

        return $this;
    }

    /**
     * Method to set the value of field liberado
     *
     * @param integer $liberado
     * @return $this
     */
    public function setLiberado($liberado)
    {
        $this->liberado = $liberado;

        return $this;
    }

    /**
     * Method to set the value of field portador
     *
     * @param integer $portador
     * @return $this
     */
    public function setPortador($portador)
    {
        $this->portador = $portador;

        return $this;
    }

    /**
     * Method to set the value of field lancamento_avulso
     *
     * @param integer $lancamento_avulso
     * @return $this
     */
    public function setLancamentoAvulso($lancamento_avulso)
    {
        $this->lancamento_avulso = $lancamento_avulso;

        return $this;
    }

    /**
     * Method to set the value of field lancamento_liquidado
     *
     * @param integer $lancamento_liquidado
     * @return $this
     */
    public function setLancamentoLiquidado($lancamento_liquidado)
    {
        $this->lancamento_liquidado = $lancamento_liquidado;

        return $this;
    }

    /**
     * Method to set the value of field composicao_nosso_numero
     *
     * @param integer $composicao_nosso_numero
     * @return $this
     */
    public function setComposicaoNossoNumero($composicao_nosso_numero)
    {
        $this->composicao_nosso_numero = $composicao_nosso_numero;

        return $this;
    }

    /**
     * Method to set the value of field bloqueado
     *
     * @param integer $bloqueado
     * @return $this
     */
    public function setBloqueado($bloqueado)
    {
        $this->bloqueado = $bloqueado;

        return $this;
    }

    /**
     * Method to set the value of field contrapartida
     *
     * @param integer $contrapartida
     * @return $this
     */
    public function setContrapartida($contrapartida)
    {
        $this->contrapartida = $contrapartida;

        return $this;
    }

    /**
     * Method to set the value of field lanc_automatico
     *
     * @param integer $lanc_automatico
     * @return $this
     */
    public function setLancAutomatico($lanc_automatico)
    {
        $this->lanc_automatico = $lanc_automatico;

        return $this;
    }

    /**
     * Method to set the value of field especie_lancamento
     *
     * @param integer $especie_lancamento
     * @return $this
     */
    public function setEspecieLancamento($especie_lancamento)
    {
        $this->especie_lancamento = $especie_lancamento;

        return $this;
    }

    /**
     * Method to set the value of field liquidacao_parent
     *
     * @param integer $liquidacao_parent
     * @return $this
     */
    public function setLiquidacaoParent($liquidacao_parent)
    {
        $this->liquidacao_parent = $liquidacao_parent;

        return $this;
    }

    /**
     * Method to set the value of field cd_status
     *
     * @param integer $cd_status
     * @return $this
     */
    public function setCdStatus($cd_status)
    {
        $this->cd_status = $cd_status;

        return $this;
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
     * Returns the value of field cd_pedido
     *
     * @return integer
     */
    public function getCdPedido()
    {
        return $this->cd_pedido;
    }

    /**
     * Returns the value of field idccusto
     *
     * @return integer
     */
    public function getIdccusto()
    {
        return $this->idccusto;
    }

    /**
     * Returns the value of field unidade_negocio_cd_unidade
     *
     * @return integer
     */
    public function getUnidadeNegocioCdUnidade()
    {
        return $this->unidade_negocio_cd_unidade;
    }

    /**
     * Returns the value of field cobranca
     *
     * @return integer
     */
    public function getCobranca()
    {
        return $this->cobranca;
    }

    /**
     * Returns the value of field empresa
     *
     * @return integer
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Returns the value of field contas_financeira_cd_contas
     *
     * @return integer
     */
    public function getContasFinanceiraCdContas()
    {
        return $this->contas_financeira_cd_contas;
    }

    /**
     * Returns the value of field espDoc_Cd_documento
     *
     * @return integer
     */
    public function getEspDocCdDocumento()
    {
        return $this->espDoc_Cd_documento;
    }

    /**
     * Returns the value of field emissao
     *
     * @return string
     */
    public function getEmissao()
    {
        return $this->emissao;
    }

    /**
     * Returns the value of field venc_original
     *
     * @return string
     */
    public function getVencOriginal()
    {
        return $this->venc_original;
    }

    /**
     * Returns the value of field venc_programado
     *
     * @return string
     */
    public function getVencProgramado()
    {
        return $this->venc_programado;
    }

    /**
     * Returns the value of field nf
     *
     * @return string
     */
    public function getNf()
    {
        return $this->nf;
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
     * Returns the value of field nfentrada_cd_nfentrada
     *
     * @return integer
     */
    public function getNfentradaCdNfentrada()
    {
        return $this->nfentrada_cd_nfentrada;
    }

    /**
     * Returns the value of field conhecimento_transporte_cd_conhecimento
     *
     * @return integer
     */
    public function getConhecimentoTransporteCdConhecimento()
    {
        return $this->conhecimento_transporte_cd_conhecimento;
    }

    /**
     * Returns the value of field serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Returns the value of field documento
     *
     * @return string
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Returns the value of field duplicata
     *
     * @return string
     */
    public function getDuplicata()
    {
        return $this->duplicata;
    }

    /**
     * Returns the value of field parcela
     *
     * @return integer
     */
    public function getParcela()
    {
        return $this->parcela;
    }

    /**
     * Returns the value of field nparcela
     *
     * @return integer
     */
    public function getNparcela()
    {
        return $this->nparcela;
    }

    /**
     * Returns the value of field historico
     *
     * @return string
     */
    public function getHistorico()
    {
        return $this->historico;
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
     * Returns the value of field valor
     *
     * @return double
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Returns the value of field saldo_lanc
     *
     * @return double
     */
    public function getSaldoLanc()
    {
        return $this->saldo_lanc;
    }

    /**
     * Returns the value of field saldo_credito_cliente
     *
     * @return double
     */
    public function getSaldoCreditoCliente()
    {
        return $this->saldo_credito_cliente;
    }

    /**
     * Returns the value of field situacao
     *
     * @return integer
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Returns the value of field multiplo
     *
     * @return integer
     */
    public function getMultiplo()
    {
        return $this->multiplo;
    }

    /**
     * Returns the value of field tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Returns the value of field tipo_lancamento
     *
     * @return integer
     */
    public function getTipoLancamento()
    {
        return $this->tipo_lancamento;
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
     * Returns the value of field ccliente
     *
     * @return integer
     */
    public function getCcliente()
    {
        return $this->ccliente;
    }

    /**
     * Returns the value of field cheque
     *
     * @return integer
     */
    public function getCheque()
    {
        return $this->cheque;
    }

    /**
     * Returns the value of field liberado
     *
     * @return integer
     */
    public function getLiberado()
    {
        return $this->liberado;
    }

    /**
     * Returns the value of field portador
     *
     * @return integer
     */
    public function getPortador()
    {
        return $this->portador;
    }

    /**
     * Returns the value of field lancamento_avulso
     *
     * @return integer
     */
    public function getLancamentoAvulso()
    {
        return $this->lancamento_avulso;
    }

    /**
     * Returns the value of field lancamento_liquidado
     *
     * @return integer
     */
    public function getLancamentoLiquidado()
    {
        return $this->lancamento_liquidado;
    }

    /**
     * Returns the value of field composicao_nosso_numero
     *
     * @return integer
     */
    public function getComposicaoNossoNumero()
    {
        return $this->composicao_nosso_numero;
    }

    /**
     * Returns the value of field bloqueado
     *
     * @return integer
     */
    public function getBloqueado()
    {
        return $this->bloqueado;
    }

    /**
     * Returns the value of field contrapartida
     *
     * @return integer
     */
    public function getContrapartida()
    {
        return $this->contrapartida;
    }

    /**
     * Returns the value of field lanc_automatico
     *
     * @return integer
     */
    public function getLancAutomatico()
    {
        return $this->lanc_automatico;
    }

    /**
     * Returns the value of field especie_lancamento
     *
     * @return integer
     */
    public function getEspecieLancamento()
    {
        return $this->especie_lancamento;
    }

    /**
     * Returns the value of field liquidacao_parent
     *
     * @return integer
     */
    public function getLiquidacaoParent()
    {
        return $this->liquidacao_parent;
    }

    /**
     * Returns the value of field cd_status
     *
     * @return integer
     */
    public function getCdStatus()
    {
        return $this->cd_status;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_lancamento', 'App\Models\ArquivoHasLancamento', 'lancamento_cd_lancamento', array('alias' => 'ArquivoHasLancamento'));
        $this->hasMany('cd_lancamento', 'App\Models\Cheque', 'cd_lancamento', array('alias' => 'Cheque'));
        $this->hasMany('cd_lancamento', 'App\Models\FaturamentoServicosHasLancamento', 'cd_lancamento', array('alias' => 'FaturamentoServicosHasLancamento'));
        $this->hasMany('cd_lancamento', 'App\Models\GlobalHistoricoProcessos', 'cd_lancamento', array('alias' => 'GlobalHistoricoProcessos'));
        $this->hasMany('cd_lancamento', 'App\Models\LancRecusado', 'lancamento_cd_lancamento', array('alias' => 'LancRecusado'));
        $this->hasMany('cd_lancamento', 'App\Models\Lancamento', 'contrapartida', array('alias' => 'Lancamento'));
        $this->hasMany('cd_lancamento', 'App\Models\LancamentoHasLiquidacao', 'vinculado', array('alias' => 'LancamentoHasLiquidacao'));
        $this->hasMany('cd_lancamento', 'App\Models\LancamentoHasLiquidacao', 'cd_lancamento', array('alias' => 'LancamentoHasLiquidacao'));
        $this->hasMany('cd_lancamento', 'App\Models\LancamentoHasUpload', 'cd_lancamento', array('alias' => 'LancamentoHasUpload'));
        $this->hasMany('cd_lancamento', 'App\Models\LancamentoNotificacaoEmail', 'cd_lancamento', array('alias' => 'LancamentoNotificacaoEmail'));
        $this->hasMany('cd_lancamento', 'App\Models\LancamentoRateio', 'cd_lancamento', array('alias' => 'LancamentoRateio'));
        $this->hasMany('cd_lancamento', 'App\Models\LiquidacaoCreditoCliente', 'cd_lancamento', array('alias' => 'LiquidacaoCreditoCliente'));
        $this->hasMany('cd_lancamento', 'App\Models\OrdemServico', 'cd_lancamento', array('alias' => 'OrdemServico'));
        $this->belongsTo('portador', 'App\Models\Portador', 'cd_portador', array('alias' => 'Portador'));
        $this->belongsTo('contrapartida', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('nfentrada_cd_nfentrada', 'App\Models\Nfentrada', 'cd_nfentrada', array('alias' => 'Nfentrada'));
        $this->belongsTo('empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('idccusto', 'App\Models\Ccusto', 'idccusto', array('alias' => 'Ccusto'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('alias' => 'Pedido'));
        $this->belongsTo('contas_financeira_cd_contas', 'App\Models\ContasFinanceira', 'cd_contas', array('alias' => 'ContasFinanceira'));
        $this->belongsTo('espDoc_Cd_documento', 'App\Models\Espdoc', 'Cd_documento', array('alias' => 'Espdoc'));
        $this->belongsTo('cobranca', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->hasMany('cd_lancamento', 'App\Models\ArquivoHasLancamento', 'lancamento_cd_lancamento', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\Cheque', 'cd_lancamento', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\FaturamentoServicosHasLancamento', 'cd_lancamento', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\GlobalHistoricoProcessos', 'cd_lancamento', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\LancRecusado', 'lancamento_cd_lancamento', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\Lancamento', 'contrapartida', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\LancamentoHasLiquidacao', 'vinculado', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\LancamentoHasLiquidacao', 'cd_lancamento', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\LancamentoHasUpload', 'cd_lancamento', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\LancamentoNotificacaoEmail', 'cd_lancamento', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\LancamentoRateio', 'cd_lancamento', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\LiquidacaoCreditoCliente', 'cd_lancamento', NULL);
        $this->hasMany('cd_lancamento', 'App\Models\OrdemServico', 'cd_lancamento', NULL);
        $this->belongsTo('portador', 'App\Models\Portador', 'cd_portador', array('foreignKey' => true,'alias' => 'Portador'));
        $this->belongsTo('contrapartida', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
        $this->belongsTo('nfentrada_cd_nfentrada', 'App\Models\Nfentrada', 'cd_nfentrada', array('foreignKey' => true,'alias' => 'Nfentrada'));
        $this->belongsTo('empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('idccusto', 'App\Models\Ccusto', 'idccusto', array('foreignKey' => true,'alias' => 'Ccusto'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
        $this->belongsTo('cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('foreignKey' => true,'alias' => 'Pedido'));
        $this->belongsTo('contas_financeira_cd_contas', 'App\Models\ContasFinanceira', 'cd_contas', array('foreignKey' => true,'alias' => 'ContasFinanceira'));
        $this->belongsTo('espDoc_Cd_documento', 'App\Models\Espdoc', 'Cd_documento', array('foreignKey' => true,'alias' => 'Espdoc'));
        $this->belongsTo('cobranca', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'lancamento';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Lancamento[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Lancamento
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
            'cd_lancamento' => 'cd_lancamento',
            'cd_pedido' => 'cd_pedido',
            'idccusto' => 'idccusto',
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'cobranca' => 'cobranca',
            'empresa' => 'empresa',
            'contas_financeira_cd_contas' => 'contas_financeira_cd_contas',
            'espDoc_Cd_documento' => 'espDoc_Cd_documento',
            'emissao' => 'emissao',
            'venc_original' => 'venc_original',
            'venc_programado' => 'venc_programado',
            'nf' => 'nf',
            'nfsaida_cd_nfsaida' => 'nfsaida_cd_nfsaida',
            'nfentrada_cd_nfentrada' => 'nfentrada_cd_nfentrada',
            'conhecimento_transporte_cd_conhecimento' => 'conhecimento_transporte_cd_conhecimento',
            'serie' => 'serie',
            'documento' => 'documento',
            'duplicata' => 'duplicata',
            'parcela' => 'parcela',
            'nparcela' => 'nparcela',
            'historico' => 'historico',
            'obs' => 'obs',
            'valor' => 'valor',
            'saldo_lanc' => 'saldo_lanc',
            'saldo_credito_cliente' => 'saldo_credito_cliente',
            'situacao' => 'situacao',
            'multiplo' => 'multiplo',
            'tipo' => 'tipo',
            'tipo_lancamento' => 'tipo_lancamento',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'ccliente' => 'ccliente',
            'cheque' => 'cheque',
            'liberado' => 'liberado',
            'portador' => 'portador',
            'lancamento_avulso' => 'lancamento_avulso',
            'lancamento_liquidado' => 'lancamento_liquidado',
            'composicao_nosso_numero' => 'composicao_nosso_numero',
            'bloqueado' => 'bloqueado',
            'contrapartida' => 'contrapartida',
            'lanc_automatico' => 'lanc_automatico',
            'especie_lancamento' => 'especie_lancamento',
            'liquidacao_parent' => 'liquidacao_parent',
            'cd_status' => 'cd_status'
        );
    }

}
