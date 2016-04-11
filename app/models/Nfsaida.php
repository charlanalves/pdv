<?php

namespace App\Models;

class Nfsaida extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_nfsaida;

    /**
     *
     * @var integer
     */
    protected $pedido_cd_pedido;

    /**
     *
     * @var integer
     */
    protected $numero;

    /**
     *
     * @var integer
     */
    protected $serie;

    /**
     *
     * @var string
     */
    protected $lote;

    /**
     *
     * @var integer
     */
    protected $cfop;

    /**
     *
     * @var string
     */
    protected $cfop_descricao;

    /**
     *
     * @var string
     */
    protected $inscricao_estadual_st;

    /**
     *
     * @var string
     */
    protected $chave_acesso_nfe;

    /**
     *
     * @var string
     */
    protected $refNfe;

    /**
     *
     * @var integer
     */
    protected $finNFe;

    /**
     *
     * @var integer
     */
    protected $fatura;

    /**
     *
     * @var string
     */
    protected $data_emissao;

    /**
     *
     * @var string
     */
    protected $hora_emissao;

    /**
     *
     * @var string
     */
    protected $gmt_emissao;

    /**
     *
     * @var string
     */
    protected $data_saida;

    /**
     *
     * @var string
     */
    protected $hora_saida;

    /**
     *
     * @var string
     */
    protected $gmt_saida;

    /**
     *
     * @var integer
     */
    protected $fornecedor_cd_fornecedor;

    /**
     *
     * @var string
     */
    protected $fornecedor_nome;

    /**
     *
     * @var string
     */
    protected $fornecedor_cnpj;

    /**
     *
     * @var string
     */
    protected $fornecedor_inscricao_estadual;

    /**
     *
     * @var string
     */
    protected $fornecedor_rua;

    /**
     *
     * @var string
     */
    protected $fornecedor_numero;

    /**
     *
     * @var string
     */
    protected $fornecedor_complemento;

    /**
     *
     * @var string
     */
    protected $fornecedor_bairro;

    /**
     *
     * @var string
     */
    protected $fornecedor_cep;

    /**
     *
     * @var string
     */
    protected $fornecedor_cidade;

    /**
     *
     * @var string
     */
    protected $fornecedor_uf;

    /**
     *
     * @var string
     */
    protected $fornecedor_telefone;

    /**
     *
     * @var integer
     */
    protected $cliente_cd_cliente;

    /**
     *
     * @var string
     */
    protected $cliente_nome;

    /**
     *
     * @var string
     */
    protected $cliente_cnpj;

    /**
     *
     * @var string
     */
    protected $cliente_inscricao_estadual;

    /**
     *
     * @var string
     */
    protected $cliente_bairro;

    /**
     *
     * @var string
     */
    protected $cliente_cep;

    /**
     *
     * @var string
     */
    protected $cliente_cidade;

    /**
     *
     * @var string
     */
    protected $cliente_uf;

    /**
     *
     * @var string
     */
    protected $cliente_telefone;

    /**
     *
     * @var double
     */
    protected $bc_icms;

    /**
     *
     * @var double
     */
    protected $vICMS;

    /**
     *
     * @var double
     */
    protected $vBCST;

    /**
     *
     * @var double
     */
    protected $vICMSST;

    /**
     *
     * @var double
     */
    protected $vl_frete;

    /**
     *
     * @var double
     */
    protected $vl_seguro;

    /**
     *
     * @var double
     */
    protected $vl_desconto;

    /**
     *
     * @var double
     */
    protected $desp_aces;

    /**
     *
     * @var double
     */
    protected $vl_ipi;

    /**
     *
     * @var double
     */
    protected $vl_total_produtos;

    /**
     *
     * @var double
     */
    protected $vl_total_nota;

    /**
     *
     * @var integer
     */
    protected $transportador_cd_transportador;

    /**
     *
     * @var string
     */
    protected $transportador_nome;

    /**
     *
     * @var string
     */
    protected $transportador_cnpj;

    /**
     *
     * @var string
     */
    protected $transportador_inscricao_estadual;

    /**
     *
     * @var string
     */
    protected $transportador_endereco;

    /**
     *
     * @var string
     */
    protected $transportador_cidade;

    /**
     *
     * @var string
     */
    protected $transportador_uf;

    /**
     *
     * @var integer
     */
    protected $transportador_tipo_frete;

    /**
     *
     * @var string
     */
    protected $transportador_cd_antt;

    /**
     *
     * @var string
     */
    protected $transportador_placa;

    /**
     *
     * @var string
     */
    protected $transportador_placa_uf;

    /**
     *
     * @var string
     */
    protected $transportador_quantidade;

    /**
     *
     * @var string
     */
    protected $transportador_marca;

    /**
     *
     * @var string
     */
    protected $transportador_especie;

    /**
     *
     * @var string
     */
    protected $transportador_numeracao;

    /**
     *
     * @var double
     */
    protected $transportador_peso_bruto;

    /**
     *
     * @var double
     */
    protected $transportador_peso_liquido;

    /**
     *
     * @var string
     */
    protected $info_complem;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var integer
     */
    protected $nDV;

    /**
     *
     * @var string
     */
    protected $cNF;

    /**
     *
     * @var string
     */
    protected $fornecedor_pais;

    /**
     *
     * @var string
     */
    protected $cliente_email;

    /**
     *
     * @var string
     */
    protected $cliente_rua;

    /**
     *
     * @var string
     */
    protected $cliente_numero;

    /**
     *
     * @var string
     */
    protected $cliente_complemento;

    /**
     *
     * @var string
     */
    protected $entrega_cnpj;

    /**
     *
     * @var string
     */
    protected $entrega_rua;

    /**
     *
     * @var string
     */
    protected $entrega_numero;

    /**
     *
     * @var string
     */
    protected $entrega_complemento;

    /**
     *
     * @var string
     */
    protected $entrega_bairro;

    /**
     *
     * @var string
     */
    protected $entrega_municipio;

    /**
     *
     * @var string
     */
    protected $entrega_uf;

    /**
     *
     * @var double
     */
    protected $vBC;

    /**
     *
     * @var integer
     */
    protected $transportador_reboque;

    /**
     *
     * @var string
     */
    protected $transportador_reboque_placa;

    /**
     *
     * @var string
     */
    protected $transportador_reboque_RNTC;

    /**
     *
     * @var string
     */
    protected $transportador_reboque_vagao;

    /**
     *
     * @var string
     */
    protected $transportador_reboque_balsa;

    /**
     *
     * @var string
     */
    protected $transportador_reboque_UF;

    /**
     *
     * @var string
     */
    protected $cobr_fat_vDesc;

    /**
     *
     * @var string
     */
    protected $cobr_fat_nfat;

    /**
     *
     * @var double
     */
    protected $cobr_fat_vOrig;

    /**
     *
     * @var double
     */
    protected $cobr_fat_vLiq;

    /**
     *
     * @var string
     */
    protected $cobr_dup_nDup;

    /**
     *
     * @var string
     */
    protected $cobr_dup_dVenc;

    /**
     *
     * @var double
     */
    protected $cobr_dup_vDup;

    /**
     *
     * @var string
     */
    protected $infoAdic;

    /**
     *
     * @var double
     */
    protected $vII;

    /**
     *
     * @var double
     */
    protected $vPIS;

    /**
     *
     * @var double
     */
    protected $vCOFINS;

    /**
     *
     * @var double
     */
    protected $vOutro;

    /**
     *
     * @var string
     */
    protected $nfsaida_numero_recibo;

    /**
     *
     * @var integer
     */
    protected $nfsaida_status;

    /**
     *
     * @var integer
     */
    protected $cancelada;

    /**
     *
     * @var integer
     */
    protected $denegada;

    /**
     *
     * @var integer
     */
    protected $nfe_impressa;

    /**
     *
     * @var integer
     */
    protected $tpNF;

    /**
     *
     * @var integer
     */
    protected $nfsaida_avulsa;

    /**
     *
     * @var integer
     */
    protected $contigencia;

    /**
     * Method to set the value of field cd_nfsaida
     *
     * @param integer $cd_nfsaida
     * @return $this
     */
    public function setCdNfsaida($cd_nfsaida)
    {
        $this->cd_nfsaida = $cd_nfsaida;

        return $this;
    }

    /**
     * Method to set the value of field pedido_cd_pedido
     *
     * @param integer $pedido_cd_pedido
     * @return $this
     */
    public function setPedidoCdPedido($pedido_cd_pedido)
    {
        $this->pedido_cd_pedido = $pedido_cd_pedido;

        return $this;
    }

    /**
     * Method to set the value of field numero
     *
     * @param integer $numero
     * @return $this
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Method to set the value of field serie
     *
     * @param integer $serie
     * @return $this
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Method to set the value of field lote
     *
     * @param string $lote
     * @return $this
     */
    public function setLote($lote)
    {
        $this->lote = $lote;

        return $this;
    }

    /**
     * Method to set the value of field cfop
     *
     * @param integer $cfop
     * @return $this
     */
    public function setCfop($cfop)
    {
        $this->cfop = $cfop;

        return $this;
    }

    /**
     * Method to set the value of field cfop_descricao
     *
     * @param string $cfop_descricao
     * @return $this
     */
    public function setCfopDescricao($cfop_descricao)
    {
        $this->cfop_descricao = $cfop_descricao;

        return $this;
    }

    /**
     * Method to set the value of field inscricao_estadual_st
     *
     * @param string $inscricao_estadual_st
     * @return $this
     */
    public function setInscricaoEstadualSt($inscricao_estadual_st)
    {
        $this->inscricao_estadual_st = $inscricao_estadual_st;

        return $this;
    }

    /**
     * Method to set the value of field chave_acesso_nfe
     *
     * @param string $chave_acesso_nfe
     * @return $this
     */
    public function setChaveAcessoNfe($chave_acesso_nfe)
    {
        $this->chave_acesso_nfe = $chave_acesso_nfe;

        return $this;
    }

    /**
     * Method to set the value of field refNfe
     *
     * @param string $refNfe
     * @return $this
     */
    public function setRefNfe($refNfe)
    {
        $this->refNfe = $refNfe;

        return $this;
    }

    /**
     * Method to set the value of field finNFe
     *
     * @param integer $finNFe
     * @return $this
     */
    public function setFinNFe($finNFe)
    {
        $this->finNFe = $finNFe;

        return $this;
    }

    /**
     * Method to set the value of field fatura
     *
     * @param integer $fatura
     * @return $this
     */
    public function setFatura($fatura)
    {
        $this->fatura = $fatura;

        return $this;
    }

    /**
     * Method to set the value of field data_emissao
     *
     * @param string $data_emissao
     * @return $this
     */
    public function setDataEmissao($data_emissao)
    {
        $this->data_emissao = $data_emissao;

        return $this;
    }

    /**
     * Method to set the value of field hora_emissao
     *
     * @param string $hora_emissao
     * @return $this
     */
    public function setHoraEmissao($hora_emissao)
    {
        $this->hora_emissao = $hora_emissao;

        return $this;
    }

    /**
     * Method to set the value of field gmt_emissao
     *
     * @param string $gmt_emissao
     * @return $this
     */
    public function setGmtEmissao($gmt_emissao)
    {
        $this->gmt_emissao = $gmt_emissao;

        return $this;
    }

    /**
     * Method to set the value of field data_saida
     *
     * @param string $data_saida
     * @return $this
     */
    public function setDataSaida($data_saida)
    {
        $this->data_saida = $data_saida;

        return $this;
    }

    /**
     * Method to set the value of field hora_saida
     *
     * @param string $hora_saida
     * @return $this
     */
    public function setHoraSaida($hora_saida)
    {
        $this->hora_saida = $hora_saida;

        return $this;
    }

    /**
     * Method to set the value of field gmt_saida
     *
     * @param string $gmt_saida
     * @return $this
     */
    public function setGmtSaida($gmt_saida)
    {
        $this->gmt_saida = $gmt_saida;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_cd_fornecedor
     *
     * @param integer $fornecedor_cd_fornecedor
     * @return $this
     */
    public function setFornecedorCdFornecedor($fornecedor_cd_fornecedor)
    {
        $this->fornecedor_cd_fornecedor = $fornecedor_cd_fornecedor;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_nome
     *
     * @param string $fornecedor_nome
     * @return $this
     */
    public function setFornecedorNome($fornecedor_nome)
    {
        $this->fornecedor_nome = $fornecedor_nome;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_cnpj
     *
     * @param string $fornecedor_cnpj
     * @return $this
     */
    public function setFornecedorCnpj($fornecedor_cnpj)
    {
        $this->fornecedor_cnpj = $fornecedor_cnpj;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_inscricao_estadual
     *
     * @param string $fornecedor_inscricao_estadual
     * @return $this
     */
    public function setFornecedorInscricaoEstadual($fornecedor_inscricao_estadual)
    {
        $this->fornecedor_inscricao_estadual = $fornecedor_inscricao_estadual;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_rua
     *
     * @param string $fornecedor_rua
     * @return $this
     */
    public function setFornecedorRua($fornecedor_rua)
    {
        $this->fornecedor_rua = $fornecedor_rua;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_numero
     *
     * @param string $fornecedor_numero
     * @return $this
     */
    public function setFornecedorNumero($fornecedor_numero)
    {
        $this->fornecedor_numero = $fornecedor_numero;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_complemento
     *
     * @param string $fornecedor_complemento
     * @return $this
     */
    public function setFornecedorComplemento($fornecedor_complemento)
    {
        $this->fornecedor_complemento = $fornecedor_complemento;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_bairro
     *
     * @param string $fornecedor_bairro
     * @return $this
     */
    public function setFornecedorBairro($fornecedor_bairro)
    {
        $this->fornecedor_bairro = $fornecedor_bairro;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_cep
     *
     * @param string $fornecedor_cep
     * @return $this
     */
    public function setFornecedorCep($fornecedor_cep)
    {
        $this->fornecedor_cep = $fornecedor_cep;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_cidade
     *
     * @param string $fornecedor_cidade
     * @return $this
     */
    public function setFornecedorCidade($fornecedor_cidade)
    {
        $this->fornecedor_cidade = $fornecedor_cidade;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_uf
     *
     * @param string $fornecedor_uf
     * @return $this
     */
    public function setFornecedorUf($fornecedor_uf)
    {
        $this->fornecedor_uf = $fornecedor_uf;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_telefone
     *
     * @param string $fornecedor_telefone
     * @return $this
     */
    public function setFornecedorTelefone($fornecedor_telefone)
    {
        $this->fornecedor_telefone = $fornecedor_telefone;

        return $this;
    }

    /**
     * Method to set the value of field cliente_cd_cliente
     *
     * @param integer $cliente_cd_cliente
     * @return $this
     */
    public function setClienteCdCliente($cliente_cd_cliente)
    {
        $this->cliente_cd_cliente = $cliente_cd_cliente;

        return $this;
    }

    /**
     * Method to set the value of field cliente_nome
     *
     * @param string $cliente_nome
     * @return $this
     */
    public function setClienteNome($cliente_nome)
    {
        $this->cliente_nome = $cliente_nome;

        return $this;
    }

    /**
     * Method to set the value of field cliente_cnpj
     *
     * @param string $cliente_cnpj
     * @return $this
     */
    public function setClienteCnpj($cliente_cnpj)
    {
        $this->cliente_cnpj = $cliente_cnpj;

        return $this;
    }

    /**
     * Method to set the value of field cliente_inscricao_estadual
     *
     * @param string $cliente_inscricao_estadual
     * @return $this
     */
    public function setClienteInscricaoEstadual($cliente_inscricao_estadual)
    {
        $this->cliente_inscricao_estadual = $cliente_inscricao_estadual;

        return $this;
    }

    /**
     * Method to set the value of field cliente_bairro
     *
     * @param string $cliente_bairro
     * @return $this
     */
    public function setClienteBairro($cliente_bairro)
    {
        $this->cliente_bairro = $cliente_bairro;

        return $this;
    }

    /**
     * Method to set the value of field cliente_cep
     *
     * @param string $cliente_cep
     * @return $this
     */
    public function setClienteCep($cliente_cep)
    {
        $this->cliente_cep = $cliente_cep;

        return $this;
    }

    /**
     * Method to set the value of field cliente_cidade
     *
     * @param string $cliente_cidade
     * @return $this
     */
    public function setClienteCidade($cliente_cidade)
    {
        $this->cliente_cidade = $cliente_cidade;

        return $this;
    }

    /**
     * Method to set the value of field cliente_uf
     *
     * @param string $cliente_uf
     * @return $this
     */
    public function setClienteUf($cliente_uf)
    {
        $this->cliente_uf = $cliente_uf;

        return $this;
    }

    /**
     * Method to set the value of field cliente_telefone
     *
     * @param string $cliente_telefone
     * @return $this
     */
    public function setClienteTelefone($cliente_telefone)
    {
        $this->cliente_telefone = $cliente_telefone;

        return $this;
    }

    /**
     * Method to set the value of field bc_icms
     *
     * @param double $bc_icms
     * @return $this
     */
    public function setBcIcms($bc_icms)
    {
        $this->bc_icms = $bc_icms;

        return $this;
    }

    /**
     * Method to set the value of field vICMS
     *
     * @param double $vICMS
     * @return $this
     */
    public function setVICMS($vICMS)
    {
        $this->vICMS = $vICMS;

        return $this;
    }

    /**
     * Method to set the value of field vBCST
     *
     * @param double $vBCST
     * @return $this
     */
    public function setVBCST($vBCST)
    {
        $this->vBCST = $vBCST;

        return $this;
    }

    /**
     * Method to set the value of field vICMSST
     *
     * @param double $vICMSST
     * @return $this
     */
    public function setVICMSST($vICMSST)
    {
        $this->vICMSST = $vICMSST;

        return $this;
    }

    /**
     * Method to set the value of field vl_frete
     *
     * @param double $vl_frete
     * @return $this
     */
    public function setVlFrete($vl_frete)
    {
        $this->vl_frete = $vl_frete;

        return $this;
    }

    /**
     * Method to set the value of field vl_seguro
     *
     * @param double $vl_seguro
     * @return $this
     */
    public function setVlSeguro($vl_seguro)
    {
        $this->vl_seguro = $vl_seguro;

        return $this;
    }

    /**
     * Method to set the value of field vl_desconto
     *
     * @param double $vl_desconto
     * @return $this
     */
    public function setVlDesconto($vl_desconto)
    {
        $this->vl_desconto = $vl_desconto;

        return $this;
    }

    /**
     * Method to set the value of field desp_aces
     *
     * @param double $desp_aces
     * @return $this
     */
    public function setDespAces($desp_aces)
    {
        $this->desp_aces = $desp_aces;

        return $this;
    }

    /**
     * Method to set the value of field vl_ipi
     *
     * @param double $vl_ipi
     * @return $this
     */
    public function setVlIpi($vl_ipi)
    {
        $this->vl_ipi = $vl_ipi;

        return $this;
    }

    /**
     * Method to set the value of field vl_total_produtos
     *
     * @param double $vl_total_produtos
     * @return $this
     */
    public function setVlTotalProdutos($vl_total_produtos)
    {
        $this->vl_total_produtos = $vl_total_produtos;

        return $this;
    }

    /**
     * Method to set the value of field vl_total_nota
     *
     * @param double $vl_total_nota
     * @return $this
     */
    public function setVlTotalNota($vl_total_nota)
    {
        $this->vl_total_nota = $vl_total_nota;

        return $this;
    }

    /**
     * Method to set the value of field transportador_cd_transportador
     *
     * @param integer $transportador_cd_transportador
     * @return $this
     */
    public function setTransportadorCdTransportador($transportador_cd_transportador)
    {
        $this->transportador_cd_transportador = $transportador_cd_transportador;

        return $this;
    }

    /**
     * Method to set the value of field transportador_nome
     *
     * @param string $transportador_nome
     * @return $this
     */
    public function setTransportadorNome($transportador_nome)
    {
        $this->transportador_nome = $transportador_nome;

        return $this;
    }

    /**
     * Method to set the value of field transportador_cnpj
     *
     * @param string $transportador_cnpj
     * @return $this
     */
    public function setTransportadorCnpj($transportador_cnpj)
    {
        $this->transportador_cnpj = $transportador_cnpj;

        return $this;
    }

    /**
     * Method to set the value of field transportador_inscricao_estadual
     *
     * @param string $transportador_inscricao_estadual
     * @return $this
     */
    public function setTransportadorInscricaoEstadual($transportador_inscricao_estadual)
    {
        $this->transportador_inscricao_estadual = $transportador_inscricao_estadual;

        return $this;
    }

    /**
     * Method to set the value of field transportador_endereco
     *
     * @param string $transportador_endereco
     * @return $this
     */
    public function setTransportadorEndereco($transportador_endereco)
    {
        $this->transportador_endereco = $transportador_endereco;

        return $this;
    }

    /**
     * Method to set the value of field transportador_cidade
     *
     * @param string $transportador_cidade
     * @return $this
     */
    public function setTransportadorCidade($transportador_cidade)
    {
        $this->transportador_cidade = $transportador_cidade;

        return $this;
    }

    /**
     * Method to set the value of field transportador_uf
     *
     * @param string $transportador_uf
     * @return $this
     */
    public function setTransportadorUf($transportador_uf)
    {
        $this->transportador_uf = $transportador_uf;

        return $this;
    }

    /**
     * Method to set the value of field transportador_tipo_frete
     *
     * @param integer $transportador_tipo_frete
     * @return $this
     */
    public function setTransportadorTipoFrete($transportador_tipo_frete)
    {
        $this->transportador_tipo_frete = $transportador_tipo_frete;

        return $this;
    }

    /**
     * Method to set the value of field transportador_cd_antt
     *
     * @param string $transportador_cd_antt
     * @return $this
     */
    public function setTransportadorCdAntt($transportador_cd_antt)
    {
        $this->transportador_cd_antt = $transportador_cd_antt;

        return $this;
    }

    /**
     * Method to set the value of field transportador_placa
     *
     * @param string $transportador_placa
     * @return $this
     */
    public function setTransportadorPlaca($transportador_placa)
    {
        $this->transportador_placa = $transportador_placa;

        return $this;
    }

    /**
     * Method to set the value of field transportador_placa_uf
     *
     * @param string $transportador_placa_uf
     * @return $this
     */
    public function setTransportadorPlacaUf($transportador_placa_uf)
    {
        $this->transportador_placa_uf = $transportador_placa_uf;

        return $this;
    }

    /**
     * Method to set the value of field transportador_quantidade
     *
     * @param string $transportador_quantidade
     * @return $this
     */
    public function setTransportadorQuantidade($transportador_quantidade)
    {
        $this->transportador_quantidade = $transportador_quantidade;

        return $this;
    }

    /**
     * Method to set the value of field transportador_marca
     *
     * @param string $transportador_marca
     * @return $this
     */
    public function setTransportadorMarca($transportador_marca)
    {
        $this->transportador_marca = $transportador_marca;

        return $this;
    }

    /**
     * Method to set the value of field transportador_especie
     *
     * @param string $transportador_especie
     * @return $this
     */
    public function setTransportadorEspecie($transportador_especie)
    {
        $this->transportador_especie = $transportador_especie;

        return $this;
    }

    /**
     * Method to set the value of field transportador_numeracao
     *
     * @param string $transportador_numeracao
     * @return $this
     */
    public function setTransportadorNumeracao($transportador_numeracao)
    {
        $this->transportador_numeracao = $transportador_numeracao;

        return $this;
    }

    /**
     * Method to set the value of field transportador_peso_bruto
     *
     * @param double $transportador_peso_bruto
     * @return $this
     */
    public function setTransportadorPesoBruto($transportador_peso_bruto)
    {
        $this->transportador_peso_bruto = $transportador_peso_bruto;

        return $this;
    }

    /**
     * Method to set the value of field transportador_peso_liquido
     *
     * @param double $transportador_peso_liquido
     * @return $this
     */
    public function setTransportadorPesoLiquido($transportador_peso_liquido)
    {
        $this->transportador_peso_liquido = $transportador_peso_liquido;

        return $this;
    }

    /**
     * Method to set the value of field info_complem
     *
     * @param string $info_complem
     * @return $this
     */
    public function setInfoComplem($info_complem)
    {
        $this->info_complem = $info_complem;

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
     * Method to set the value of field nDV
     *
     * @param integer $nDV
     * @return $this
     */
    public function setNDV($nDV)
    {
        $this->nDV = $nDV;

        return $this;
    }

    /**
     * Method to set the value of field cNF
     *
     * @param string $cNF
     * @return $this
     */
    public function setCNF($cNF)
    {
        $this->cNF = $cNF;

        return $this;
    }

    /**
     * Method to set the value of field fornecedor_pais
     *
     * @param string $fornecedor_pais
     * @return $this
     */
    public function setFornecedorPais($fornecedor_pais)
    {
        $this->fornecedor_pais = $fornecedor_pais;

        return $this;
    }

    /**
     * Method to set the value of field cliente_email
     *
     * @param string $cliente_email
     * @return $this
     */
    public function setClienteEmail($cliente_email)
    {
        $this->cliente_email = $cliente_email;

        return $this;
    }

    /**
     * Method to set the value of field cliente_rua
     *
     * @param string $cliente_rua
     * @return $this
     */
    public function setClienteRua($cliente_rua)
    {
        $this->cliente_rua = $cliente_rua;

        return $this;
    }

    /**
     * Method to set the value of field cliente_numero
     *
     * @param string $cliente_numero
     * @return $this
     */
    public function setClienteNumero($cliente_numero)
    {
        $this->cliente_numero = $cliente_numero;

        return $this;
    }

    /**
     * Method to set the value of field cliente_complemento
     *
     * @param string $cliente_complemento
     * @return $this
     */
    public function setClienteComplemento($cliente_complemento)
    {
        $this->cliente_complemento = $cliente_complemento;

        return $this;
    }

    /**
     * Method to set the value of field entrega_cnpj
     *
     * @param string $entrega_cnpj
     * @return $this
     */
    public function setEntregaCnpj($entrega_cnpj)
    {
        $this->entrega_cnpj = $entrega_cnpj;

        return $this;
    }

    /**
     * Method to set the value of field entrega_rua
     *
     * @param string $entrega_rua
     * @return $this
     */
    public function setEntregaRua($entrega_rua)
    {
        $this->entrega_rua = $entrega_rua;

        return $this;
    }

    /**
     * Method to set the value of field entrega_numero
     *
     * @param string $entrega_numero
     * @return $this
     */
    public function setEntregaNumero($entrega_numero)
    {
        $this->entrega_numero = $entrega_numero;

        return $this;
    }

    /**
     * Method to set the value of field entrega_complemento
     *
     * @param string $entrega_complemento
     * @return $this
     */
    public function setEntregaComplemento($entrega_complemento)
    {
        $this->entrega_complemento = $entrega_complemento;

        return $this;
    }

    /**
     * Method to set the value of field entrega_bairro
     *
     * @param string $entrega_bairro
     * @return $this
     */
    public function setEntregaBairro($entrega_bairro)
    {
        $this->entrega_bairro = $entrega_bairro;

        return $this;
    }

    /**
     * Method to set the value of field entrega_municipio
     *
     * @param string $entrega_municipio
     * @return $this
     */
    public function setEntregaMunicipio($entrega_municipio)
    {
        $this->entrega_municipio = $entrega_municipio;

        return $this;
    }

    /**
     * Method to set the value of field entrega_uf
     *
     * @param string $entrega_uf
     * @return $this
     */
    public function setEntregaUf($entrega_uf)
    {
        $this->entrega_uf = $entrega_uf;

        return $this;
    }

    /**
     * Method to set the value of field vBC
     *
     * @param double $vBC
     * @return $this
     */
    public function setVBC($vBC)
    {
        $this->vBC = $vBC;

        return $this;
    }

    /**
     * Method to set the value of field transportador_reboque
     *
     * @param integer $transportador_reboque
     * @return $this
     */
    public function setTransportadorReboque($transportador_reboque)
    {
        $this->transportador_reboque = $transportador_reboque;

        return $this;
    }

    /**
     * Method to set the value of field transportador_reboque_placa
     *
     * @param string $transportador_reboque_placa
     * @return $this
     */
    public function setTransportadorReboquePlaca($transportador_reboque_placa)
    {
        $this->transportador_reboque_placa = $transportador_reboque_placa;

        return $this;
    }

    /**
     * Method to set the value of field transportador_reboque_RNTC
     *
     * @param string $transportador_reboque_RNTC
     * @return $this
     */
    public function setTransportadorReboqueRNTC($transportador_reboque_RNTC)
    {
        $this->transportador_reboque_RNTC = $transportador_reboque_RNTC;

        return $this;
    }

    /**
     * Method to set the value of field transportador_reboque_vagao
     *
     * @param string $transportador_reboque_vagao
     * @return $this
     */
    public function setTransportadorReboqueVagao($transportador_reboque_vagao)
    {
        $this->transportador_reboque_vagao = $transportador_reboque_vagao;

        return $this;
    }

    /**
     * Method to set the value of field transportador_reboque_balsa
     *
     * @param string $transportador_reboque_balsa
     * @return $this
     */
    public function setTransportadorReboqueBalsa($transportador_reboque_balsa)
    {
        $this->transportador_reboque_balsa = $transportador_reboque_balsa;

        return $this;
    }

    /**
     * Method to set the value of field transportador_reboque_UF
     *
     * @param string $transportador_reboque_UF
     * @return $this
     */
    public function setTransportadorReboqueUF($transportador_reboque_UF)
    {
        $this->transportador_reboque_UF = $transportador_reboque_UF;

        return $this;
    }

    /**
     * Method to set the value of field cobr_fat_vDesc
     *
     * @param string $cobr_fat_vDesc
     * @return $this
     */
    public function setCobrFatVDesc($cobr_fat_vDesc)
    {
        $this->cobr_fat_vDesc = $cobr_fat_vDesc;

        return $this;
    }

    /**
     * Method to set the value of field cobr_fat_nfat
     *
     * @param string $cobr_fat_nfat
     * @return $this
     */
    public function setCobrFatNfat($cobr_fat_nfat)
    {
        $this->cobr_fat_nfat = $cobr_fat_nfat;

        return $this;
    }

    /**
     * Method to set the value of field cobr_fat_vOrig
     *
     * @param double $cobr_fat_vOrig
     * @return $this
     */
    public function setCobrFatVOrig($cobr_fat_vOrig)
    {
        $this->cobr_fat_vOrig = $cobr_fat_vOrig;

        return $this;
    }

    /**
     * Method to set the value of field cobr_fat_vLiq
     *
     * @param double $cobr_fat_vLiq
     * @return $this
     */
    public function setCobrFatVLiq($cobr_fat_vLiq)
    {
        $this->cobr_fat_vLiq = $cobr_fat_vLiq;

        return $this;
    }

    /**
     * Method to set the value of field cobr_dup_nDup
     *
     * @param string $cobr_dup_nDup
     * @return $this
     */
    public function setCobrDupNDup($cobr_dup_nDup)
    {
        $this->cobr_dup_nDup = $cobr_dup_nDup;

        return $this;
    }

    /**
     * Method to set the value of field cobr_dup_dVenc
     *
     * @param string $cobr_dup_dVenc
     * @return $this
     */
    public function setCobrDupDVenc($cobr_dup_dVenc)
    {
        $this->cobr_dup_dVenc = $cobr_dup_dVenc;

        return $this;
    }

    /**
     * Method to set the value of field cobr_dup_vDup
     *
     * @param double $cobr_dup_vDup
     * @return $this
     */
    public function setCobrDupVDup($cobr_dup_vDup)
    {
        $this->cobr_dup_vDup = $cobr_dup_vDup;

        return $this;
    }

    /**
     * Method to set the value of field infoAdic
     *
     * @param string $infoAdic
     * @return $this
     */
    public function setInfoAdic($infoAdic)
    {
        $this->infoAdic = $infoAdic;

        return $this;
    }

    /**
     * Method to set the value of field vII
     *
     * @param double $vII
     * @return $this
     */
    public function setVII($vII)
    {
        $this->vII = $vII;

        return $this;
    }

    /**
     * Method to set the value of field vPIS
     *
     * @param double $vPIS
     * @return $this
     */
    public function setVPIS($vPIS)
    {
        $this->vPIS = $vPIS;

        return $this;
    }

    /**
     * Method to set the value of field vCOFINS
     *
     * @param double $vCOFINS
     * @return $this
     */
    public function setVCOFINS($vCOFINS)
    {
        $this->vCOFINS = $vCOFINS;

        return $this;
    }

    /**
     * Method to set the value of field vOutro
     *
     * @param double $vOutro
     * @return $this
     */
    public function setVOutro($vOutro)
    {
        $this->vOutro = $vOutro;

        return $this;
    }

    /**
     * Method to set the value of field nfsaida_numero_recibo
     *
     * @param string $nfsaida_numero_recibo
     * @return $this
     */
    public function setNfsaidaNumeroRecibo($nfsaida_numero_recibo)
    {
        $this->nfsaida_numero_recibo = $nfsaida_numero_recibo;

        return $this;
    }

    /**
     * Method to set the value of field nfsaida_status
     *
     * @param integer $nfsaida_status
     * @return $this
     */
    public function setNfsaidaStatus($nfsaida_status)
    {
        $this->nfsaida_status = $nfsaida_status;

        return $this;
    }

    /**
     * Method to set the value of field cancelada
     *
     * @param integer $cancelada
     * @return $this
     */
    public function setCancelada($cancelada)
    {
        $this->cancelada = $cancelada;

        return $this;
    }

    /**
     * Method to set the value of field denegada
     *
     * @param integer $denegada
     * @return $this
     */
    public function setDenegada($denegada)
    {
        $this->denegada = $denegada;

        return $this;
    }

    /**
     * Method to set the value of field nfe_impressa
     *
     * @param integer $nfe_impressa
     * @return $this
     */
    public function setNfeImpressa($nfe_impressa)
    {
        $this->nfe_impressa = $nfe_impressa;

        return $this;
    }

    /**
     * Method to set the value of field tpNF
     *
     * @param integer $tpNF
     * @return $this
     */
    public function setTpNF($tpNF)
    {
        $this->tpNF = $tpNF;

        return $this;
    }

    /**
     * Method to set the value of field nfsaida_avulsa
     *
     * @param integer $nfsaida_avulsa
     * @return $this
     */
    public function setNfsaidaAvulsa($nfsaida_avulsa)
    {
        $this->nfsaida_avulsa = $nfsaida_avulsa;

        return $this;
    }

    /**
     * Method to set the value of field contigencia
     *
     * @param integer $contigencia
     * @return $this
     */
    public function setContigencia($contigencia)
    {
        $this->contigencia = $contigencia;

        return $this;
    }

    /**
     * Returns the value of field cd_nfsaida
     *
     * @return integer
     */
    public function getCdNfsaida()
    {
        return $this->cd_nfsaida;
    }

    /**
     * Returns the value of field pedido_cd_pedido
     *
     * @return integer
     */
    public function getPedidoCdPedido()
    {
        return $this->pedido_cd_pedido;
    }

    /**
     * Returns the value of field numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Returns the value of field serie
     *
     * @return integer
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Returns the value of field lote
     *
     * @return string
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * Returns the value of field cfop
     *
     * @return integer
     */
    public function getCfop()
    {
        return $this->cfop;
    }

    /**
     * Returns the value of field cfop_descricao
     *
     * @return string
     */
    public function getCfopDescricao()
    {
        return $this->cfop_descricao;
    }

    /**
     * Returns the value of field inscricao_estadual_st
     *
     * @return string
     */
    public function getInscricaoEstadualSt()
    {
        return $this->inscricao_estadual_st;
    }

    /**
     * Returns the value of field chave_acesso_nfe
     *
     * @return string
     */
    public function getChaveAcessoNfe()
    {
        return $this->chave_acesso_nfe;
    }

    /**
     * Returns the value of field refNfe
     *
     * @return string
     */
    public function getRefNfe()
    {
        return $this->refNfe;
    }

    /**
     * Returns the value of field finNFe
     *
     * @return integer
     */
    public function getFinNFe()
    {
        return $this->finNFe;
    }

    /**
     * Returns the value of field fatura
     *
     * @return integer
     */
    public function getFatura()
    {
        return $this->fatura;
    }

    /**
     * Returns the value of field data_emissao
     *
     * @return string
     */
    public function getDataEmissao()
    {
        return $this->data_emissao;
    }

    /**
     * Returns the value of field hora_emissao
     *
     * @return string
     */
    public function getHoraEmissao()
    {
        return $this->hora_emissao;
    }

    /**
     * Returns the value of field gmt_emissao
     *
     * @return string
     */
    public function getGmtEmissao()
    {
        return $this->gmt_emissao;
    }

    /**
     * Returns the value of field data_saida
     *
     * @return string
     */
    public function getDataSaida()
    {
        return $this->data_saida;
    }

    /**
     * Returns the value of field hora_saida
     *
     * @return string
     */
    public function getHoraSaida()
    {
        return $this->hora_saida;
    }

    /**
     * Returns the value of field gmt_saida
     *
     * @return string
     */
    public function getGmtSaida()
    {
        return $this->gmt_saida;
    }

    /**
     * Returns the value of field fornecedor_cd_fornecedor
     *
     * @return integer
     */
    public function getFornecedorCdFornecedor()
    {
        return $this->fornecedor_cd_fornecedor;
    }

    /**
     * Returns the value of field fornecedor_nome
     *
     * @return string
     */
    public function getFornecedorNome()
    {
        return $this->fornecedor_nome;
    }

    /**
     * Returns the value of field fornecedor_cnpj
     *
     * @return string
     */
    public function getFornecedorCnpj()
    {
        return $this->fornecedor_cnpj;
    }

    /**
     * Returns the value of field fornecedor_inscricao_estadual
     *
     * @return string
     */
    public function getFornecedorInscricaoEstadual()
    {
        return $this->fornecedor_inscricao_estadual;
    }

    /**
     * Returns the value of field fornecedor_rua
     *
     * @return string
     */
    public function getFornecedorRua()
    {
        return $this->fornecedor_rua;
    }

    /**
     * Returns the value of field fornecedor_numero
     *
     * @return string
     */
    public function getFornecedorNumero()
    {
        return $this->fornecedor_numero;
    }

    /**
     * Returns the value of field fornecedor_complemento
     *
     * @return string
     */
    public function getFornecedorComplemento()
    {
        return $this->fornecedor_complemento;
    }

    /**
     * Returns the value of field fornecedor_bairro
     *
     * @return string
     */
    public function getFornecedorBairro()
    {
        return $this->fornecedor_bairro;
    }

    /**
     * Returns the value of field fornecedor_cep
     *
     * @return string
     */
    public function getFornecedorCep()
    {
        return $this->fornecedor_cep;
    }

    /**
     * Returns the value of field fornecedor_cidade
     *
     * @return string
     */
    public function getFornecedorCidade()
    {
        return $this->fornecedor_cidade;
    }

    /**
     * Returns the value of field fornecedor_uf
     *
     * @return string
     */
    public function getFornecedorUf()
    {
        return $this->fornecedor_uf;
    }

    /**
     * Returns the value of field fornecedor_telefone
     *
     * @return string
     */
    public function getFornecedorTelefone()
    {
        return $this->fornecedor_telefone;
    }

    /**
     * Returns the value of field cliente_cd_cliente
     *
     * @return integer
     */
    public function getClienteCdCliente()
    {
        return $this->cliente_cd_cliente;
    }

    /**
     * Returns the value of field cliente_nome
     *
     * @return string
     */
    public function getClienteNome()
    {
        return $this->cliente_nome;
    }

    /**
     * Returns the value of field cliente_cnpj
     *
     * @return string
     */
    public function getClienteCnpj()
    {
        return $this->cliente_cnpj;
    }

    /**
     * Returns the value of field cliente_inscricao_estadual
     *
     * @return string
     */
    public function getClienteInscricaoEstadual()
    {
        return $this->cliente_inscricao_estadual;
    }

    /**
     * Returns the value of field cliente_bairro
     *
     * @return string
     */
    public function getClienteBairro()
    {
        return $this->cliente_bairro;
    }

    /**
     * Returns the value of field cliente_cep
     *
     * @return string
     */
    public function getClienteCep()
    {
        return $this->cliente_cep;
    }

    /**
     * Returns the value of field cliente_cidade
     *
     * @return string
     */
    public function getClienteCidade()
    {
        return $this->cliente_cidade;
    }

    /**
     * Returns the value of field cliente_uf
     *
     * @return string
     */
    public function getClienteUf()
    {
        return $this->cliente_uf;
    }

    /**
     * Returns the value of field cliente_telefone
     *
     * @return string
     */
    public function getClienteTelefone()
    {
        return $this->cliente_telefone;
    }

    /**
     * Returns the value of field bc_icms
     *
     * @return double
     */
    public function getBcIcms()
    {
        return $this->bc_icms;
    }

    /**
     * Returns the value of field vICMS
     *
     * @return double
     */
    public function getVICMS()
    {
        return $this->vICMS;
    }

    /**
     * Returns the value of field vBCST
     *
     * @return double
     */
    public function getVBCST()
    {
        return $this->vBCST;
    }

    /**
     * Returns the value of field vICMSST
     *
     * @return double
     */
    public function getVICMSST()
    {
        return $this->vICMSST;
    }

    /**
     * Returns the value of field vl_frete
     *
     * @return double
     */
    public function getVlFrete()
    {
        return $this->vl_frete;
    }

    /**
     * Returns the value of field vl_seguro
     *
     * @return double
     */
    public function getVlSeguro()
    {
        return $this->vl_seguro;
    }

    /**
     * Returns the value of field vl_desconto
     *
     * @return double
     */
    public function getVlDesconto()
    {
        return $this->vl_desconto;
    }

    /**
     * Returns the value of field desp_aces
     *
     * @return double
     */
    public function getDespAces()
    {
        return $this->desp_aces;
    }

    /**
     * Returns the value of field vl_ipi
     *
     * @return double
     */
    public function getVlIpi()
    {
        return $this->vl_ipi;
    }

    /**
     * Returns the value of field vl_total_produtos
     *
     * @return double
     */
    public function getVlTotalProdutos()
    {
        return $this->vl_total_produtos;
    }

    /**
     * Returns the value of field vl_total_nota
     *
     * @return double
     */
    public function getVlTotalNota()
    {
        return $this->vl_total_nota;
    }

    /**
     * Returns the value of field transportador_cd_transportador
     *
     * @return integer
     */
    public function getTransportadorCdTransportador()
    {
        return $this->transportador_cd_transportador;
    }

    /**
     * Returns the value of field transportador_nome
     *
     * @return string
     */
    public function getTransportadorNome()
    {
        return $this->transportador_nome;
    }

    /**
     * Returns the value of field transportador_cnpj
     *
     * @return string
     */
    public function getTransportadorCnpj()
    {
        return $this->transportador_cnpj;
    }

    /**
     * Returns the value of field transportador_inscricao_estadual
     *
     * @return string
     */
    public function getTransportadorInscricaoEstadual()
    {
        return $this->transportador_inscricao_estadual;
    }

    /**
     * Returns the value of field transportador_endereco
     *
     * @return string
     */
    public function getTransportadorEndereco()
    {
        return $this->transportador_endereco;
    }

    /**
     * Returns the value of field transportador_cidade
     *
     * @return string
     */
    public function getTransportadorCidade()
    {
        return $this->transportador_cidade;
    }

    /**
     * Returns the value of field transportador_uf
     *
     * @return string
     */
    public function getTransportadorUf()
    {
        return $this->transportador_uf;
    }

    /**
     * Returns the value of field transportador_tipo_frete
     *
     * @return integer
     */
    public function getTransportadorTipoFrete()
    {
        return $this->transportador_tipo_frete;
    }

    /**
     * Returns the value of field transportador_cd_antt
     *
     * @return string
     */
    public function getTransportadorCdAntt()
    {
        return $this->transportador_cd_antt;
    }

    /**
     * Returns the value of field transportador_placa
     *
     * @return string
     */
    public function getTransportadorPlaca()
    {
        return $this->transportador_placa;
    }

    /**
     * Returns the value of field transportador_placa_uf
     *
     * @return string
     */
    public function getTransportadorPlacaUf()
    {
        return $this->transportador_placa_uf;
    }

    /**
     * Returns the value of field transportador_quantidade
     *
     * @return string
     */
    public function getTransportadorQuantidade()
    {
        return $this->transportador_quantidade;
    }

    /**
     * Returns the value of field transportador_marca
     *
     * @return string
     */
    public function getTransportadorMarca()
    {
        return $this->transportador_marca;
    }

    /**
     * Returns the value of field transportador_especie
     *
     * @return string
     */
    public function getTransportadorEspecie()
    {
        return $this->transportador_especie;
    }

    /**
     * Returns the value of field transportador_numeracao
     *
     * @return string
     */
    public function getTransportadorNumeracao()
    {
        return $this->transportador_numeracao;
    }

    /**
     * Returns the value of field transportador_peso_bruto
     *
     * @return double
     */
    public function getTransportadorPesoBruto()
    {
        return $this->transportador_peso_bruto;
    }

    /**
     * Returns the value of field transportador_peso_liquido
     *
     * @return double
     */
    public function getTransportadorPesoLiquido()
    {
        return $this->transportador_peso_liquido;
    }

    /**
     * Returns the value of field info_complem
     *
     * @return string
     */
    public function getInfoComplem()
    {
        return $this->info_complem;
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
     * Returns the value of field nDV
     *
     * @return integer
     */
    public function getNDV()
    {
        return $this->nDV;
    }

    /**
     * Returns the value of field cNF
     *
     * @return string
     */
    public function getCNF()
    {
        return $this->cNF;
    }

    /**
     * Returns the value of field fornecedor_pais
     *
     * @return string
     */
    public function getFornecedorPais()
    {
        return $this->fornecedor_pais;
    }

    /**
     * Returns the value of field cliente_email
     *
     * @return string
     */
    public function getClienteEmail()
    {
        return $this->cliente_email;
    }

    /**
     * Returns the value of field cliente_rua
     *
     * @return string
     */
    public function getClienteRua()
    {
        return $this->cliente_rua;
    }

    /**
     * Returns the value of field cliente_numero
     *
     * @return string
     */
    public function getClienteNumero()
    {
        return $this->cliente_numero;
    }

    /**
     * Returns the value of field cliente_complemento
     *
     * @return string
     */
    public function getClienteComplemento()
    {
        return $this->cliente_complemento;
    }

    /**
     * Returns the value of field entrega_cnpj
     *
     * @return string
     */
    public function getEntregaCnpj()
    {
        return $this->entrega_cnpj;
    }

    /**
     * Returns the value of field entrega_rua
     *
     * @return string
     */
    public function getEntregaRua()
    {
        return $this->entrega_rua;
    }

    /**
     * Returns the value of field entrega_numero
     *
     * @return string
     */
    public function getEntregaNumero()
    {
        return $this->entrega_numero;
    }

    /**
     * Returns the value of field entrega_complemento
     *
     * @return string
     */
    public function getEntregaComplemento()
    {
        return $this->entrega_complemento;
    }

    /**
     * Returns the value of field entrega_bairro
     *
     * @return string
     */
    public function getEntregaBairro()
    {
        return $this->entrega_bairro;
    }

    /**
     * Returns the value of field entrega_municipio
     *
     * @return string
     */
    public function getEntregaMunicipio()
    {
        return $this->entrega_municipio;
    }

    /**
     * Returns the value of field entrega_uf
     *
     * @return string
     */
    public function getEntregaUf()
    {
        return $this->entrega_uf;
    }

    /**
     * Returns the value of field vBC
     *
     * @return double
     */
    public function getVBC()
    {
        return $this->vBC;
    }

    /**
     * Returns the value of field transportador_reboque
     *
     * @return integer
     */
    public function getTransportadorReboque()
    {
        return $this->transportador_reboque;
    }

    /**
     * Returns the value of field transportador_reboque_placa
     *
     * @return string
     */
    public function getTransportadorReboquePlaca()
    {
        return $this->transportador_reboque_placa;
    }

    /**
     * Returns the value of field transportador_reboque_RNTC
     *
     * @return string
     */
    public function getTransportadorReboqueRNTC()
    {
        return $this->transportador_reboque_RNTC;
    }

    /**
     * Returns the value of field transportador_reboque_vagao
     *
     * @return string
     */
    public function getTransportadorReboqueVagao()
    {
        return $this->transportador_reboque_vagao;
    }

    /**
     * Returns the value of field transportador_reboque_balsa
     *
     * @return string
     */
    public function getTransportadorReboqueBalsa()
    {
        return $this->transportador_reboque_balsa;
    }

    /**
     * Returns the value of field transportador_reboque_UF
     *
     * @return string
     */
    public function getTransportadorReboqueUF()
    {
        return $this->transportador_reboque_UF;
    }

    /**
     * Returns the value of field cobr_fat_vDesc
     *
     * @return string
     */
    public function getCobrFatVDesc()
    {
        return $this->cobr_fat_vDesc;
    }

    /**
     * Returns the value of field cobr_fat_nfat
     *
     * @return string
     */
    public function getCobrFatNfat()
    {
        return $this->cobr_fat_nfat;
    }

    /**
     * Returns the value of field cobr_fat_vOrig
     *
     * @return double
     */
    public function getCobrFatVOrig()
    {
        return $this->cobr_fat_vOrig;
    }

    /**
     * Returns the value of field cobr_fat_vLiq
     *
     * @return double
     */
    public function getCobrFatVLiq()
    {
        return $this->cobr_fat_vLiq;
    }

    /**
     * Returns the value of field cobr_dup_nDup
     *
     * @return string
     */
    public function getCobrDupNDup()
    {
        return $this->cobr_dup_nDup;
    }

    /**
     * Returns the value of field cobr_dup_dVenc
     *
     * @return string
     */
    public function getCobrDupDVenc()
    {
        return $this->cobr_dup_dVenc;
    }

    /**
     * Returns the value of field cobr_dup_vDup
     *
     * @return double
     */
    public function getCobrDupVDup()
    {
        return $this->cobr_dup_vDup;
    }

    /**
     * Returns the value of field infoAdic
     *
     * @return string
     */
    public function getInfoAdic()
    {
        return $this->infoAdic;
    }

    /**
     * Returns the value of field vII
     *
     * @return double
     */
    public function getVII()
    {
        return $this->vII;
    }

    /**
     * Returns the value of field vPIS
     *
     * @return double
     */
    public function getVPIS()
    {
        return $this->vPIS;
    }

    /**
     * Returns the value of field vCOFINS
     *
     * @return double
     */
    public function getVCOFINS()
    {
        return $this->vCOFINS;
    }

    /**
     * Returns the value of field vOutro
     *
     * @return double
     */
    public function getVOutro()
    {
        return $this->vOutro;
    }

    /**
     * Returns the value of field nfsaida_numero_recibo
     *
     * @return string
     */
    public function getNfsaidaNumeroRecibo()
    {
        return $this->nfsaida_numero_recibo;
    }

    /**
     * Returns the value of field nfsaida_status
     *
     * @return integer
     */
    public function getNfsaidaStatus()
    {
        return $this->nfsaida_status;
    }

    /**
     * Returns the value of field cancelada
     *
     * @return integer
     */
    public function getCancelada()
    {
        return $this->cancelada;
    }

    /**
     * Returns the value of field denegada
     *
     * @return integer
     */
    public function getDenegada()
    {
        return $this->denegada;
    }

    /**
     * Returns the value of field nfe_impressa
     *
     * @return integer
     */
    public function getNfeImpressa()
    {
        return $this->nfe_impressa;
    }

    /**
     * Returns the value of field tpNF
     *
     * @return integer
     */
    public function getTpNF()
    {
        return $this->tpNF;
    }

    /**
     * Returns the value of field nfsaida_avulsa
     *
     * @return integer
     */
    public function getNfsaidaAvulsa()
    {
        return $this->nfsaida_avulsa;
    }

    /**
     * Returns the value of field contigencia
     *
     * @return integer
     */
    public function getContigencia()
    {
        return $this->contigencia;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_nfsaida', 'App\Models\ConhecimentoTransporteHasNf', 'cd_nfsaida', array('alias' => 'ConhecimentoTransporteHasNf'));
        $this->hasMany('cd_nfsaida', 'App\Models\MovEstoque', 'nfsaida_cd_nfsaida', array('alias' => 'MovEstoque'));
        $this->hasMany('cd_nfsaida', 'App\Models\NfeHasConn', 'nfe_nfeid', array('alias' => 'NfeHasConn'));
        $this->hasMany('cd_nfsaida', 'App\Models\NfsaidaCorrecao', 'cd_nfsaida', array('alias' => 'NfsaidaCorrecao'));
        $this->hasMany('cd_nfsaida', 'App\Models\NfsaidaDuplicatas', 'nfsaida_cd_nfsaida', array('alias' => 'NfsaidaDuplicatas'));
        $this->hasMany('cd_nfsaida', 'App\Models\NfsaidaItem', 'nfsaida_cd_nfsaida', array('alias' => 'NfsaidaItem'));
        $this->hasOne('pedido_cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('alias' => 'Pedido'));
        $this->hasOne('fornecedor_cd_fornecedor', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Fornecedor'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfsaida';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Nfsaida[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Nfsaida
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
            'cd_nfsaida' => 'cd_nfsaida',
            'pedido_cd_pedido' => 'pedido_cd_pedido',
            'numero' => 'numero',
            'serie' => 'serie',
            'lote' => 'lote',
            'cfop' => 'cfop',
            'cfop_descricao' => 'cfop_descricao',
            'inscricao_estadual_st' => 'inscricao_estadual_st',
            'chave_acesso_nfe' => 'chave_acesso_nfe',
            'refNfe' => 'refNfe',
            'finNFe' => 'finNFe',
            'fatura' => 'fatura',
            'data_emissao' => 'data_emissao',
            'hora_emissao' => 'hora_emissao',
            'gmt_emissao' => 'gmt_emissao',
            'data_saida' => 'data_saida',
            'hora_saida' => 'hora_saida',
            'gmt_saida' => 'gmt_saida',
            'fornecedor_cd_fornecedor' => 'fornecedor_cd_fornecedor',
            'fornecedor_nome' => 'fornecedor_nome',
            'fornecedor_cnpj' => 'fornecedor_cnpj',
            'fornecedor_inscricao_estadual' => 'fornecedor_inscricao_estadual',
            'fornecedor_rua' => 'fornecedor_rua',
            'fornecedor_numero' => 'fornecedor_numero',
            'fornecedor_complemento' => 'fornecedor_complemento',
            'fornecedor_bairro' => 'fornecedor_bairro',
            'fornecedor_cep' => 'fornecedor_cep',
            'fornecedor_cidade' => 'fornecedor_cidade',
            'fornecedor_uf' => 'fornecedor_uf',
            'fornecedor_telefone' => 'fornecedor_telefone',
            'cliente_cd_cliente' => 'cliente_cd_cliente',
            'cliente_nome' => 'cliente_nome',
            'cliente_cnpj' => 'cliente_cnpj',
            'cliente_inscricao_estadual' => 'cliente_inscricao_estadual',
            'cliente_bairro' => 'cliente_bairro',
            'cliente_cep' => 'cliente_cep',
            'cliente_cidade' => 'cliente_cidade',
            'cliente_uf' => 'cliente_uf',
            'cliente_telefone' => 'cliente_telefone',
            'bc_icms' => 'bc_icms',
            'vICMS' => 'vICMS',
            'vBCST' => 'vBCST',
            'vICMSST' => 'vICMSST',
            'vl_frete' => 'vl_frete',
            'vl_seguro' => 'vl_seguro',
            'vl_desconto' => 'vl_desconto',
            'desp_aces' => 'desp_aces',
            'vl_ipi' => 'vl_ipi',
            'vl_total_produtos' => 'vl_total_produtos',
            'vl_total_nota' => 'vl_total_nota',
            'transportador_cd_transportador' => 'transportador_cd_transportador',
            'transportador_nome' => 'transportador_nome',
            'transportador_cnpj' => 'transportador_cnpj',
            'transportador_inscricao_estadual' => 'transportador_inscricao_estadual',
            'transportador_endereco' => 'transportador_endereco',
            'transportador_cidade' => 'transportador_cidade',
            'transportador_uf' => 'transportador_uf',
            'transportador_tipo_frete' => 'transportador_tipo_frete',
            'transportador_cd_antt' => 'transportador_cd_antt',
            'transportador_placa' => 'transportador_placa',
            'transportador_placa_uf' => 'transportador_placa_uf',
            'transportador_quantidade' => 'transportador_quantidade',
            'transportador_marca' => 'transportador_marca',
            'transportador_especie' => 'transportador_especie',
            'transportador_numeracao' => 'transportador_numeracao',
            'transportador_peso_bruto' => 'transportador_peso_bruto',
            'transportador_peso_liquido' => 'transportador_peso_liquido',
            'info_complem' => 'info_complem',
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'nDV' => 'nDV',
            'cNF' => 'cNF',
            'fornecedor_pais' => 'fornecedor_pais',
            'cliente_email' => 'cliente_email',
            'cliente_rua' => 'cliente_rua',
            'cliente_numero' => 'cliente_numero',
            'cliente_complemento' => 'cliente_complemento',
            'entrega_cnpj' => 'entrega_cnpj',
            'entrega_rua' => 'entrega_rua',
            'entrega_numero' => 'entrega_numero',
            'entrega_complemento' => 'entrega_complemento',
            'entrega_bairro' => 'entrega_bairro',
            'entrega_municipio' => 'entrega_municipio',
            'entrega_uf' => 'entrega_uf',
            'vBC' => 'vBC',
            'transportador_reboque' => 'transportador_reboque',
            'transportador_reboque_placa' => 'transportador_reboque_placa',
            'transportador_reboque_RNTC' => 'transportador_reboque_RNTC',
            'transportador_reboque_vagao' => 'transportador_reboque_vagao',
            'transportador_reboque_balsa' => 'transportador_reboque_balsa',
            'transportador_reboque_UF' => 'transportador_reboque_UF',
            'cobr_fat_vDesc' => 'cobr_fat_vDesc',
            'cobr_fat_nfat' => 'cobr_fat_nfat',
            'cobr_fat_vOrig' => 'cobr_fat_vOrig',
            'cobr_fat_vLiq' => 'cobr_fat_vLiq',
            'cobr_dup_nDup' => 'cobr_dup_nDup',
            'cobr_dup_dVenc' => 'cobr_dup_dVenc',
            'cobr_dup_vDup' => 'cobr_dup_vDup',
            'infoAdic' => 'infoAdic',
            'vII' => 'vII',
            'vPIS' => 'vPIS',
            'vCOFINS' => 'vCOFINS',
            'vOutro' => 'vOutro',
            'nfsaida_numero_recibo' => 'nfsaida_numero_recibo',
            'nfsaida_status' => 'nfsaida_status',
            'cancelada' => 'cancelada',
            'denegada' => 'denegada',
            'nfe_impressa' => 'nfe_impressa',
            'tpNF' => 'tpNF',
            'nfsaida_avulsa' => 'nfsaida_avulsa',
            'contigencia' => 'contigencia'
        );
    }
}
