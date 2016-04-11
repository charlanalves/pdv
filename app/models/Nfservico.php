<?php

namespace App\Models;

class Nfservico extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_nfservico;

    /**
     *
     * @var integer
     */
    protected $indTipoOperacao;

    /**
     *
     * @var integer
     */
    protected $ind_emitente;

    /**
     *
     * @var integer
     */
    protected $tomador;

    /**
     *
     * @var integer
     */
    protected $prestador;

    /**
     *
     * @var integer
     */
    protected $cd_modelo;

    /**
     *
     * @var integer
     */
    protected $modelo_tributacao;

    /**
     *
     * @var integer
     */
    protected $cod_situacao;

    /**
     *
     * @var string
     */
    protected $serie;

    /**
     *
     * @var string
     */
    protected $numero;

    /**
     *
     * @var string
     */
    protected $chave;

    /**
     *
     * @var string
     */
    protected $codigoVerificacao;

    /**
     *
     * @var string
     */
    protected $dataEmissao;

    /**
     *
     * @var string
     */
    protected $dataEntradaSaida;

    /**
     *
     * @var double
     */
    protected $valServico;

    /**
     *
     * @var integer
     */
    protected $ind_frete;

    /**
     *
     * @var integer
     */
    protected $indTipoPagamento;

    /**
     *
     * @var double
     */
    protected $descIncondicionado;

    /**
     *
     * @var double
     */
    protected $descCondicionado;

    /**
     *
     * @var double
     */
    protected $deducoes;

    /**
     *
     * @var double
     */
    protected $aliquota;

    /**
     *
     * @var double
     */
    protected $baseCalculo;

    /**
     *
     * @var double
     */
    protected $cofins;

    /**
     *
     * @var double
     */
    protected $cofins_st;

    /**
     *
     * @var double
     */
    protected $csll;

    /**
     *
     * @var double
     */
    protected $inss;

    /**
     *
     * @var double
     */
    protected $ir;

    /**
     *
     * @var double
     */
    protected $pis;

    /**
     *
     * @var double
     */
    protected $pis_st;

    /**
     *
     * @var double
     */
    protected $valorIss;

    /**
     *
     * @var double
     */
    protected $valorLiquidoNfe;

    /**
     *
     * @var double
     */
    protected $outrasRetencoes;

    /**
     *
     * @var double
     */
    protected $issRetido;

    /**
     *
     * @var string
     */
    protected $respRetencao;

    /**
     *
     * @var integer
     */
    protected $codTributacaoMunicipio;

    /**
     *
     * @var string
     */
    protected $cnae;

    /**
     *
     * @var double
     */
    protected $versao;

    /**
     *
     * @var string
     */
    protected $xml;

    /**
     * Method to set the value of field cd_nfservico
     *
     * @param integer $cd_nfservico
     * @return $this
     */
    public function setCdNfservico($cd_nfservico)
    {
        $this->cd_nfservico = $cd_nfservico;

        return $this;
    }

    /**
     * Method to set the value of field indTipoOperacao
     *
     * @param integer $indTipoOperacao
     * @return $this
     */
    public function setIndTipoOperacao($indTipoOperacao)
    {
        $this->indTipoOperacao = $indTipoOperacao;

        return $this;
    }

    /**
     * Method to set the value of field ind_emitente
     *
     * @param integer $ind_emitente
     * @return $this
     */
    public function setIndEmitente($ind_emitente)
    {
        $this->ind_emitente = $ind_emitente;

        return $this;
    }

    /**
     * Method to set the value of field tomador
     *
     * @param integer $tomador
     * @return $this
     */
    public function setTomador($tomador)
    {
        $this->tomador = $tomador;

        return $this;
    }

    /**
     * Method to set the value of field prestador
     *
     * @param integer $prestador
     * @return $this
     */
    public function setPrestador($prestador)
    {
        $this->prestador = $prestador;

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
     * Method to set the value of field modelo_tributacao
     *
     * @param integer $modelo_tributacao
     * @return $this
     */
    public function setModeloTributacao($modelo_tributacao)
    {
        $this->modelo_tributacao = $modelo_tributacao;

        return $this;
    }

    /**
     * Method to set the value of field cod_situacao
     *
     * @param integer $cod_situacao
     * @return $this
     */
    public function setCodSituacao($cod_situacao)
    {
        $this->cod_situacao = $cod_situacao;

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
     * Method to set the value of field numero
     *
     * @param string $numero
     * @return $this
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Method to set the value of field chave
     *
     * @param string $chave
     * @return $this
     */
    public function setChave($chave)
    {
        $this->chave = $chave;

        return $this;
    }

    /**
     * Method to set the value of field codigoVerificacao
     *
     * @param string $codigoVerificacao
     * @return $this
     */
    public function setCodigoVerificacao($codigoVerificacao)
    {
        $this->codigoVerificacao = $codigoVerificacao;

        return $this;
    }

    /**
     * Method to set the value of field dataEmissao
     *
     * @param string $dataEmissao
     * @return $this
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;

        return $this;
    }

    /**
     * Method to set the value of field dataEntradaSaida
     *
     * @param string $dataEntradaSaida
     * @return $this
     */
    public function setDataEntradaSaida($dataEntradaSaida)
    {
        $this->dataEntradaSaida = $dataEntradaSaida;

        return $this;
    }

    /**
     * Method to set the value of field valServico
     *
     * @param double $valServico
     * @return $this
     */
    public function setValServico($valServico)
    {
        $this->valServico = $valServico;

        return $this;
    }

    /**
     * Method to set the value of field ind_frete
     *
     * @param integer $ind_frete
     * @return $this
     */
    public function setIndFrete($ind_frete)
    {
        $this->ind_frete = $ind_frete;

        return $this;
    }

    /**
     * Method to set the value of field indTipoPagamento
     *
     * @param integer $indTipoPagamento
     * @return $this
     */
    public function setIndTipoPagamento($indTipoPagamento)
    {
        $this->indTipoPagamento = $indTipoPagamento;

        return $this;
    }

    /**
     * Method to set the value of field descIncondicionado
     *
     * @param double $descIncondicionado
     * @return $this
     */
    public function setDescIncondicionado($descIncondicionado)
    {
        $this->descIncondicionado = $descIncondicionado;

        return $this;
    }

    /**
     * Method to set the value of field descCondicionado
     *
     * @param double $descCondicionado
     * @return $this
     */
    public function setDescCondicionado($descCondicionado)
    {
        $this->descCondicionado = $descCondicionado;

        return $this;
    }

    /**
     * Method to set the value of field deducoes
     *
     * @param double $deducoes
     * @return $this
     */
    public function setDeducoes($deducoes)
    {
        $this->deducoes = $deducoes;

        return $this;
    }

    /**
     * Method to set the value of field aliquota
     *
     * @param double $aliquota
     * @return $this
     */
    public function setAliquota($aliquota)
    {
        $this->aliquota = $aliquota;

        return $this;
    }

    /**
     * Method to set the value of field baseCalculo
     *
     * @param double $baseCalculo
     * @return $this
     */
    public function setBaseCalculo($baseCalculo)
    {
        $this->baseCalculo = $baseCalculo;

        return $this;
    }

    /**
     * Method to set the value of field cofins
     *
     * @param double $cofins
     * @return $this
     */
    public function setCofins($cofins)
    {
        $this->cofins = $cofins;

        return $this;
    }

    /**
     * Method to set the value of field cofins_st
     *
     * @param double $cofins_st
     * @return $this
     */
    public function setCofinsSt($cofins_st)
    {
        $this->cofins_st = $cofins_st;

        return $this;
    }

    /**
     * Method to set the value of field csll
     *
     * @param double $csll
     * @return $this
     */
    public function setCsll($csll)
    {
        $this->csll = $csll;

        return $this;
    }

    /**
     * Method to set the value of field inss
     *
     * @param double $inss
     * @return $this
     */
    public function setInss($inss)
    {
        $this->inss = $inss;

        return $this;
    }

    /**
     * Method to set the value of field ir
     *
     * @param double $ir
     * @return $this
     */
    public function setIr($ir)
    {
        $this->ir = $ir;

        return $this;
    }

    /**
     * Method to set the value of field pis
     *
     * @param double $pis
     * @return $this
     */
    public function setPis($pis)
    {
        $this->pis = $pis;

        return $this;
    }

    /**
     * Method to set the value of field pis_st
     *
     * @param double $pis_st
     * @return $this
     */
    public function setPisSt($pis_st)
    {
        $this->pis_st = $pis_st;

        return $this;
    }

    /**
     * Method to set the value of field valorIss
     *
     * @param double $valorIss
     * @return $this
     */
    public function setValorIss($valorIss)
    {
        $this->valorIss = $valorIss;

        return $this;
    }

    /**
     * Method to set the value of field valorLiquidoNfe
     *
     * @param double $valorLiquidoNfe
     * @return $this
     */
    public function setValorLiquidoNfe($valorLiquidoNfe)
    {
        $this->valorLiquidoNfe = $valorLiquidoNfe;

        return $this;
    }

    /**
     * Method to set the value of field outrasRetencoes
     *
     * @param double $outrasRetencoes
     * @return $this
     */
    public function setOutrasRetencoes($outrasRetencoes)
    {
        $this->outrasRetencoes = $outrasRetencoes;

        return $this;
    }

    /**
     * Method to set the value of field issRetido
     *
     * @param double $issRetido
     * @return $this
     */
    public function setIssRetido($issRetido)
    {
        $this->issRetido = $issRetido;

        return $this;
    }

    /**
     * Method to set the value of field respRetencao
     *
     * @param string $respRetencao
     * @return $this
     */
    public function setRespRetencao($respRetencao)
    {
        $this->respRetencao = $respRetencao;

        return $this;
    }

    /**
     * Method to set the value of field codTributacaoMunicipio
     *
     * @param integer $codTributacaoMunicipio
     * @return $this
     */
    public function setCodTributacaoMunicipio($codTributacaoMunicipio)
    {
        $this->codTributacaoMunicipio = $codTributacaoMunicipio;

        return $this;
    }

    /**
     * Method to set the value of field cnae
     *
     * @param string $cnae
     * @return $this
     */
    public function setCnae($cnae)
    {
        $this->cnae = $cnae;

        return $this;
    }

    /**
     * Method to set the value of field versao
     *
     * @param double $versao
     * @return $this
     */
    public function setVersao($versao)
    {
        $this->versao = $versao;

        return $this;
    }

    /**
     * Method to set the value of field xml
     *
     * @param string $xml
     * @return $this
     */
    public function setXml($xml)
    {
        $this->xml = $xml;

        return $this;
    }

    /**
     * Returns the value of field cd_nfservico
     *
     * @return integer
     */
    public function getCdNfservico()
    {
        return $this->cd_nfservico;
    }

    /**
     * Returns the value of field indTipoOperacao
     *
     * @return integer
     */
    public function getIndTipoOperacao()
    {
        return $this->indTipoOperacao;
    }

    /**
     * Returns the value of field ind_emitente
     *
     * @return integer
     */
    public function getIndEmitente()
    {
        return $this->ind_emitente;
    }

    /**
     * Returns the value of field tomador
     *
     * @return integer
     */
    public function getTomador()
    {
        return $this->tomador;
    }

    /**
     * Returns the value of field prestador
     *
     * @return integer
     */
    public function getPrestador()
    {
        return $this->prestador;
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
     * Returns the value of field modelo_tributacao
     *
     * @return integer
     */
    public function getModeloTributacao()
    {
        return $this->modelo_tributacao;
    }

    /**
     * Returns the value of field cod_situacao
     *
     * @return integer
     */
    public function getCodSituacao()
    {
        return $this->cod_situacao;
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
     * Returns the value of field numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Returns the value of field chave
     *
     * @return string
     */
    public function getChave()
    {
        return $this->chave;
    }

    /**
     * Returns the value of field codigoVerificacao
     *
     * @return string
     */
    public function getCodigoVerificacao()
    {
        return $this->codigoVerificacao;
    }

    /**
     * Returns the value of field dataEmissao
     *
     * @return string
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * Returns the value of field dataEntradaSaida
     *
     * @return string
     */
    public function getDataEntradaSaida()
    {
        return $this->dataEntradaSaida;
    }

    /**
     * Returns the value of field valServico
     *
     * @return double
     */
    public function getValServico()
    {
        return $this->valServico;
    }

    /**
     * Returns the value of field ind_frete
     *
     * @return integer
     */
    public function getIndFrete()
    {
        return $this->ind_frete;
    }

    /**
     * Returns the value of field indTipoPagamento
     *
     * @return integer
     */
    public function getIndTipoPagamento()
    {
        return $this->indTipoPagamento;
    }

    /**
     * Returns the value of field descIncondicionado
     *
     * @return double
     */
    public function getDescIncondicionado()
    {
        return $this->descIncondicionado;
    }

    /**
     * Returns the value of field descCondicionado
     *
     * @return double
     */
    public function getDescCondicionado()
    {
        return $this->descCondicionado;
    }

    /**
     * Returns the value of field deducoes
     *
     * @return double
     */
    public function getDeducoes()
    {
        return $this->deducoes;
    }

    /**
     * Returns the value of field aliquota
     *
     * @return double
     */
    public function getAliquota()
    {
        return $this->aliquota;
    }

    /**
     * Returns the value of field baseCalculo
     *
     * @return double
     */
    public function getBaseCalculo()
    {
        return $this->baseCalculo;
    }

    /**
     * Returns the value of field cofins
     *
     * @return double
     */
    public function getCofins()
    {
        return $this->cofins;
    }

    /**
     * Returns the value of field cofins_st
     *
     * @return double
     */
    public function getCofinsSt()
    {
        return $this->cofins_st;
    }

    /**
     * Returns the value of field csll
     *
     * @return double
     */
    public function getCsll()
    {
        return $this->csll;
    }

    /**
     * Returns the value of field inss
     *
     * @return double
     */
    public function getInss()
    {
        return $this->inss;
    }

    /**
     * Returns the value of field ir
     *
     * @return double
     */
    public function getIr()
    {
        return $this->ir;
    }

    /**
     * Returns the value of field pis
     *
     * @return double
     */
    public function getPis()
    {
        return $this->pis;
    }

    /**
     * Returns the value of field pis_st
     *
     * @return double
     */
    public function getPisSt()
    {
        return $this->pis_st;
    }

    /**
     * Returns the value of field valorIss
     *
     * @return double
     */
    public function getValorIss()
    {
        return $this->valorIss;
    }

    /**
     * Returns the value of field valorLiquidoNfe
     *
     * @return double
     */
    public function getValorLiquidoNfe()
    {
        return $this->valorLiquidoNfe;
    }

    /**
     * Returns the value of field outrasRetencoes
     *
     * @return double
     */
    public function getOutrasRetencoes()
    {
        return $this->outrasRetencoes;
    }

    /**
     * Returns the value of field issRetido
     *
     * @return double
     */
    public function getIssRetido()
    {
        return $this->issRetido;
    }

    /**
     * Returns the value of field respRetencao
     *
     * @return string
     */
    public function getRespRetencao()
    {
        return $this->respRetencao;
    }

    /**
     * Returns the value of field codTributacaoMunicipio
     *
     * @return integer
     */
    public function getCodTributacaoMunicipio()
    {
        return $this->codTributacaoMunicipio;
    }

    /**
     * Returns the value of field cnae
     *
     * @return string
     */
    public function getCnae()
    {
        return $this->cnae;
    }

    /**
     * Returns the value of field versao
     *
     * @return double
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     * Returns the value of field xml
     *
     * @return string
     */
    public function getXml()
    {
        return $this->xml;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_nfservico', 'App\Models\FaturamentoServicos', 'cd_nfservico', array('alias' => 'FaturamentoServicos'));
        $this->hasMany('cd_nfservico', 'App\Models\NfservicoItem', 'cd_nfservico', array('alias' => 'NfservicoItem'));
        $this->belongsTo('cd_modelo', 'App\Models\CodigoModeloFiscal', 'id_codigo', array('alias' => 'CodigoModeloFiscal'));
        $this->belongsTo('cod_situacao', 'App\Models\SituacaoDocumentoFiscal', 'id_situacao', array('alias' => 'SituacaoDocumentoFiscal'));
        $this->hasMany('cd_nfservico', 'App\Models\FaturamentoServicos', 'cd_nfservico', NULL);
        $this->hasMany('cd_nfservico', 'App\Models\NfservicoItem', 'cd_nfservico', NULL);
        $this->belongsTo('cd_modelo', 'App\Models\CodigoModeloFiscal', 'id_codigo', array('foreignKey' => true,'alias' => 'CodigoModeloFiscal'));
        $this->belongsTo('cod_situacao', 'App\Models\SituacaoDocumentoFiscal', 'id_situacao', array('foreignKey' => true,'alias' => 'SituacaoDocumentoFiscal'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfservico';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Nfservico[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Nfservico
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
            'cd_nfservico' => 'cd_nfservico',
            'indTipoOperacao' => 'indTipoOperacao',
            'ind_emitente' => 'ind_emitente',
            'tomador' => 'tomador',
            'prestador' => 'prestador',
            'cd_modelo' => 'cd_modelo',
            'modelo_tributacao' => 'modelo_tributacao',
            'cod_situacao' => 'cod_situacao',
            'serie' => 'serie',
            'numero' => 'numero',
            'chave' => 'chave',
            'codigoVerificacao' => 'codigoVerificacao',
            'dataEmissao' => 'dataEmissao',
            'dataEntradaSaida' => 'dataEntradaSaida',
            'valServico' => 'valServico',
            'ind_frete' => 'ind_frete',
            'indTipoPagamento' => 'indTipoPagamento',
            'descIncondicionado' => 'descIncondicionado',
            'descCondicionado' => 'descCondicionado',
            'deducoes' => 'deducoes',
            'aliquota' => 'aliquota',
            'baseCalculo' => 'baseCalculo',
            'cofins' => 'cofins',
            'cofins_st' => 'cofins_st',
            'csll' => 'csll',
            'inss' => 'inss',
            'ir' => 'ir',
            'pis' => 'pis',
            'pis_st' => 'pis_st',
            'valorIss' => 'valorIss',
            'valorLiquidoNfe' => 'valorLiquidoNfe',
            'outrasRetencoes' => 'outrasRetencoes',
            'issRetido' => 'issRetido',
            'respRetencao' => 'respRetencao',
            'codTributacaoMunicipio' => 'codTributacaoMunicipio',
            'cnae' => 'cnae',
            'versao' => 'versao',
            'xml' => 'xml'
        );
    }

}
