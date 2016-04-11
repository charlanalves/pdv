<?php

namespace App\Models;

class Nfentrada extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_nfentrada;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $tipo_nota;

    /**
     *
     * @var integer
     */
    protected $cd_compra;

    /**
     *
     * @var integer
     */
    protected $cd_modelo;

    /**
     *
     * @var integer
     */
    protected $finalidade_nota;

    /**
     *
     * @var integer
     */
    protected $movimenta_estoque;

    /**
     *
     * @var integer
     */
    protected $cd_situacao_fiscal;

    /**
     *
     * @var string
     */
    protected $numero;

    /**
     *
     * @var string
     */
    protected $serie;

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
    protected $chave_devolucao;

    /**
     *
     * @var string
     */
    protected $fatura;

    /**
     *
     * @var string
     */
    protected $crt;

    /**
     *
     * @var string
     */
    protected $cliente_crt;

    /**
     *
     * @var string
     */
    protected $data_emissao;

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
     * @var integer
     */
    protected $ind_pgto;

    /**
     *
     * @var integer
     */
    protected $cond_pagto_cobranca;

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
    protected $aliq_icms;

    /**
     *
     * @var double
     */
    protected $bc_icms;

    /**
     *
     * @var double
     */
    protected $vl_icms;

    /**
     *
     * @var double
     */
    protected $bc_st;

    /**
     *
     * @var double
     */
    protected $vl_st;

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
    protected $data_movimentacao;

    /**
     *
     * @var string
     */
    protected $hora_movimentacao;

    /**
     *
     * @var integer
     */
    protected $cd_armazenagem;

    /**
     *
     * @var string
     */
    protected $issqn_inscricao_municipal;

    /**
     *
     * @var double
     */
    protected $issqn_vl_total_servicos;

    /**
     *
     * @var double
     */
    protected $issqn_bc_issqn;

    /**
     *
     * @var double
     */
    protected $issqn_vl_issqn;

    /**
     *
     * @var string
     */
    protected $info_complem;

    /**
     *
     * @var double
     */
    protected $vl_ii;

    /**
     *
     * @var double
     */
    protected $vl_cofins;

    /**
     *
     * @var double
     */
    protected $vl_pis;

    /**
     *
     * @var integer
     */
    protected $has_financeiro;

    /**
     *
     * @var integer
     */
    protected $cd_conhecimento_transporte;

    /**
     *
     * @var string
     */
    protected $local_destaque_frete;

    /**
     *
     * @var string
     */
    protected $xml;

    /**
     * Method to set the value of field cd_nfentrada
     *
     * @param integer $cd_nfentrada
     * @return $this
     */
    public function setCdNfentrada($cd_nfentrada)
    {
        $this->cd_nfentrada = $cd_nfentrada;

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
     * Method to set the value of field tipo_nota
     *
     * @param integer $tipo_nota
     * @return $this
     */
    public function setTipoNota($tipo_nota)
    {
        $this->tipo_nota = $tipo_nota;

        return $this;
    }

    /**
     * Method to set the value of field cd_compra
     *
     * @param integer $cd_compra
     * @return $this
     */
    public function setCdCompra($cd_compra)
    {
        $this->cd_compra = $cd_compra;

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
     * Method to set the value of field finalidade_nota
     *
     * @param integer $finalidade_nota
     * @return $this
     */
    public function setFinalidadeNota($finalidade_nota)
    {
        $this->finalidade_nota = $finalidade_nota;

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
     * Method to set the value of field cd_situacao_fiscal
     *
     * @param integer $cd_situacao_fiscal
     * @return $this
     */
    public function setCdSituacaoFiscal($cd_situacao_fiscal)
    {
        $this->cd_situacao_fiscal = $cd_situacao_fiscal;

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
     * Method to set the value of field chave_devolucao
     *
     * @param string $chave_devolucao
     * @return $this
     */
    public function setChaveDevolucao($chave_devolucao)
    {
        $this->chave_devolucao = $chave_devolucao;

        return $this;
    }

    /**
     * Method to set the value of field fatura
     *
     * @param string $fatura
     * @return $this
     */
    public function setFatura($fatura)
    {
        $this->fatura = $fatura;

        return $this;
    }

    /**
     * Method to set the value of field crt
     *
     * @param string $crt
     * @return $this
     */
    public function setCrt($crt)
    {
        $this->crt = $crt;

        return $this;
    }

    /**
     * Method to set the value of field cliente_crt
     *
     * @param string $cliente_crt
     * @return $this
     */
    public function setClienteCrt($cliente_crt)
    {
        $this->cliente_crt = $cliente_crt;

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
     * Method to set the value of field ind_pgto
     *
     * @param integer $ind_pgto
     * @return $this
     */
    public function setIndPgto($ind_pgto)
    {
        $this->ind_pgto = $ind_pgto;

        return $this;
    }

    /**
     * Method to set the value of field cond_pagto_cobranca
     *
     * @param integer $cond_pagto_cobranca
     * @return $this
     */
    public function setCondPagtoCobranca($cond_pagto_cobranca)
    {
        $this->cond_pagto_cobranca = $cond_pagto_cobranca;

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
     * Method to set the value of field aliq_icms
     *
     * @param double $aliq_icms
     * @return $this
     */
    public function setAliqIcms($aliq_icms)
    {
        $this->aliq_icms = $aliq_icms;

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
     * Method to set the value of field vl_icms
     *
     * @param double $vl_icms
     * @return $this
     */
    public function setVlIcms($vl_icms)
    {
        $this->vl_icms = $vl_icms;

        return $this;
    }

    /**
     * Method to set the value of field bc_st
     *
     * @param double $bc_st
     * @return $this
     */
    public function setBcSt($bc_st)
    {
        $this->bc_st = $bc_st;

        return $this;
    }

    /**
     * Method to set the value of field vl_st
     *
     * @param double $vl_st
     * @return $this
     */
    public function setVlSt($vl_st)
    {
        $this->vl_st = $vl_st;

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
     * Method to set the value of field data_movimentacao
     *
     * @param string $data_movimentacao
     * @return $this
     */
    public function setDataMovimentacao($data_movimentacao)
    {
        $this->data_movimentacao = $data_movimentacao;

        return $this;
    }

    /**
     * Method to set the value of field hora_movimentacao
     *
     * @param string $hora_movimentacao
     * @return $this
     */
    public function setHoraMovimentacao($hora_movimentacao)
    {
        $this->hora_movimentacao = $hora_movimentacao;

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
     * Method to set the value of field issqn_inscricao_municipal
     *
     * @param string $issqn_inscricao_municipal
     * @return $this
     */
    public function setIssqnInscricaoMunicipal($issqn_inscricao_municipal)
    {
        $this->issqn_inscricao_municipal = $issqn_inscricao_municipal;

        return $this;
    }

    /**
     * Method to set the value of field issqn_vl_total_servicos
     *
     * @param double $issqn_vl_total_servicos
     * @return $this
     */
    public function setIssqnVlTotalServicos($issqn_vl_total_servicos)
    {
        $this->issqn_vl_total_servicos = $issqn_vl_total_servicos;

        return $this;
    }

    /**
     * Method to set the value of field issqn_bc_issqn
     *
     * @param double $issqn_bc_issqn
     * @return $this
     */
    public function setIssqnBcIssqn($issqn_bc_issqn)
    {
        $this->issqn_bc_issqn = $issqn_bc_issqn;

        return $this;
    }

    /**
     * Method to set the value of field issqn_vl_issqn
     *
     * @param double $issqn_vl_issqn
     * @return $this
     */
    public function setIssqnVlIssqn($issqn_vl_issqn)
    {
        $this->issqn_vl_issqn = $issqn_vl_issqn;

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
     * Method to set the value of field vl_ii
     *
     * @param double $vl_ii
     * @return $this
     */
    public function setVlIi($vl_ii)
    {
        $this->vl_ii = $vl_ii;

        return $this;
    }

    /**
     * Method to set the value of field vl_cofins
     *
     * @param double $vl_cofins
     * @return $this
     */
    public function setVlCofins($vl_cofins)
    {
        $this->vl_cofins = $vl_cofins;

        return $this;
    }

    /**
     * Method to set the value of field vl_pis
     *
     * @param double $vl_pis
     * @return $this
     */
    public function setVlPis($vl_pis)
    {
        $this->vl_pis = $vl_pis;

        return $this;
    }

    /**
     * Method to set the value of field has_financeiro
     *
     * @param integer $has_financeiro
     * @return $this
     */
    public function setHasFinanceiro($has_financeiro)
    {
        $this->has_financeiro = $has_financeiro;

        return $this;
    }

    /**
     * Method to set the value of field cd_conhecimento_transporte
     *
     * @param integer $cd_conhecimento_transporte
     * @return $this
     */
    public function setCdConhecimentoTransporte($cd_conhecimento_transporte)
    {
        $this->cd_conhecimento_transporte = $cd_conhecimento_transporte;

        return $this;
    }

    /**
     * Method to set the value of field local_destaque_frete
     *
     * @param string $local_destaque_frete
     * @return $this
     */
    public function setLocalDestaqueFrete($local_destaque_frete)
    {
        $this->local_destaque_frete = $local_destaque_frete;

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
     * Returns the value of field cd_nfentrada
     *
     * @return integer
     */
    public function getCdNfentrada()
    {
        return $this->cd_nfentrada;
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
     * Returns the value of field tipo_nota
     *
     * @return integer
     */
    public function getTipoNota()
    {
        return $this->tipo_nota;
    }

    /**
     * Returns the value of field cd_compra
     *
     * @return integer
     */
    public function getCdCompra()
    {
        return $this->cd_compra;
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
     * Returns the value of field finalidade_nota
     *
     * @return integer
     */
    public function getFinalidadeNota()
    {
        return $this->finalidade_nota;
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
     * Returns the value of field cd_situacao_fiscal
     *
     * @return integer
     */
    public function getCdSituacaoFiscal()
    {
        return $this->cd_situacao_fiscal;
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
     * Returns the value of field serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
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
     * Returns the value of field chave_devolucao
     *
     * @return string
     */
    public function getChaveDevolucao()
    {
        return $this->chave_devolucao;
    }

    /**
     * Returns the value of field fatura
     *
     * @return string
     */
    public function getFatura()
    {
        return $this->fatura;
    }

    /**
     * Returns the value of field crt
     *
     * @return string
     */
    public function getCrt()
    {
        return $this->crt;
    }

    /**
     * Returns the value of field cliente_crt
     *
     * @return string
     */
    public function getClienteCrt()
    {
        return $this->cliente_crt;
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
     * Returns the value of field ind_pgto
     *
     * @return integer
     */
    public function getIndPgto()
    {
        return $this->ind_pgto;
    }

    /**
     * Returns the value of field cond_pagto_cobranca
     *
     * @return integer
     */
    public function getCondPagtoCobranca()
    {
        return $this->cond_pagto_cobranca;
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
     * Returns the value of field aliq_icms
     *
     * @return double
     */
    public function getAliqIcms()
    {
        return $this->aliq_icms;
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
     * Returns the value of field vl_icms
     *
     * @return double
     */
    public function getVlIcms()
    {
        return $this->vl_icms;
    }

    /**
     * Returns the value of field bc_st
     *
     * @return double
     */
    public function getBcSt()
    {
        return $this->bc_st;
    }

    /**
     * Returns the value of field vl_st
     *
     * @return double
     */
    public function getVlSt()
    {
        return $this->vl_st;
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
     * Returns the value of field data_movimentacao
     *
     * @return string
     */
    public function getDataMovimentacao()
    {
        return $this->data_movimentacao;
    }

    /**
     * Returns the value of field hora_movimentacao
     *
     * @return string
     */
    public function getHoraMovimentacao()
    {
        return $this->hora_movimentacao;
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
     * Returns the value of field issqn_inscricao_municipal
     *
     * @return string
     */
    public function getIssqnInscricaoMunicipal()
    {
        return $this->issqn_inscricao_municipal;
    }

    /**
     * Returns the value of field issqn_vl_total_servicos
     *
     * @return double
     */
    public function getIssqnVlTotalServicos()
    {
        return $this->issqn_vl_total_servicos;
    }

    /**
     * Returns the value of field issqn_bc_issqn
     *
     * @return double
     */
    public function getIssqnBcIssqn()
    {
        return $this->issqn_bc_issqn;
    }

    /**
     * Returns the value of field issqn_vl_issqn
     *
     * @return double
     */
    public function getIssqnVlIssqn()
    {
        return $this->issqn_vl_issqn;
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
     * Returns the value of field vl_ii
     *
     * @return double
     */
    public function getVlIi()
    {
        return $this->vl_ii;
    }

    /**
     * Returns the value of field vl_cofins
     *
     * @return double
     */
    public function getVlCofins()
    {
        return $this->vl_cofins;
    }

    /**
     * Returns the value of field vl_pis
     *
     * @return double
     */
    public function getVlPis()
    {
        return $this->vl_pis;
    }

    /**
     * Returns the value of field has_financeiro
     *
     * @return integer
     */
    public function getHasFinanceiro()
    {
        return $this->has_financeiro;
    }

    /**
     * Returns the value of field cd_conhecimento_transporte
     *
     * @return integer
     */
    public function getCdConhecimentoTransporte()
    {
        return $this->cd_conhecimento_transporte;
    }

    /**
     * Returns the value of field local_destaque_frete
     *
     * @return string
     */
    public function getLocalDestaqueFrete()
    {
        return $this->local_destaque_frete;
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
        $this->hasMany('cd_nfentrada', 'App\Models\ConhecimentoTransporteHasNf', 'cd_nfentrada', array('alias' => 'ConhecimentoTransporteHasNf'));
        $this->hasMany('cd_nfentrada', 'App\Models\Lancamento', 'nfentrada_cd_nfentrada', array('alias' => 'Lancamento'));
        $this->hasMany('cd_nfentrada', 'App\Models\MovEstoque', 'nfentrada_cd_nfentrada', array('alias' => 'MovEstoque'));
        $this->hasMany('cd_nfentrada', 'App\Models\NfentradaHasUpload', 'cd_nfentrada', array('alias' => 'NfentradaHasUpload'));
        $this->hasMany('cd_nfentrada', 'App\Models\NfentradaItem', 'nfentrada_cd_nfentrada', array('alias' => 'NfentradaItem'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('finalidade_nota', 'App\Models\FinalidadeProduto', 'id_finalidade', array('alias' => 'FinalidadeProduto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfentrada';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Nfentrada[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Nfentrada
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
            'cd_nfentrada' => 'cd_nfentrada',
            'cd_empresa' => 'cd_empresa',
            'tipo_nota' => 'tipo_nota',
            'cd_compra' => 'cd_compra',
            'cd_modelo' => 'cd_modelo',
            'finalidade_nota' => 'finalidade_nota',
            'movimenta_estoque' => 'movimenta_estoque',
            'cd_situacao_fiscal' => 'cd_situacao_fiscal',
            'numero' => 'numero',
            'serie' => 'serie',
            'cfop' => 'cfop',
            'cfop_descricao' => 'cfop_descricao',
            'inscricao_estadual_st' => 'inscricao_estadual_st',
            'chave_acesso_nfe' => 'chave_acesso_nfe',
            'chave_devolucao' => 'chave_devolucao',
            'fatura' => 'fatura',
            'crt' => 'crt',
            'cliente_crt' => 'cliente_crt',
            'data_emissao' => 'data_emissao',
            'data_saida' => 'data_saida',
            'hora_saida' => 'hora_saida',
            'ind_pgto' => 'ind_pgto',
            'cond_pagto_cobranca' => 'cond_pagto_cobranca',
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
            'cliente_rua' => 'cliente_rua',
            'cliente_numero' => 'cliente_numero',
            'cliente_complemento' => 'cliente_complemento',
            'cliente_bairro' => 'cliente_bairro',
            'cliente_cep' => 'cliente_cep',
            'cliente_cidade' => 'cliente_cidade',
            'cliente_uf' => 'cliente_uf',
            'cliente_telefone' => 'cliente_telefone',
            'aliq_icms' => 'aliq_icms',
            'bc_icms' => 'bc_icms',
            'vl_icms' => 'vl_icms',
            'bc_st' => 'bc_st',
            'vl_st' => 'vl_st',
            'vl_frete' => 'vl_frete',
            'vl_seguro' => 'vl_seguro',
            'vl_desconto' => 'vl_desconto',
            'desp_aces' => 'desp_aces',
            'vl_ipi' => 'vl_ipi',
            'vl_total_produtos' => 'vl_total_produtos',
            'vl_total_nota' => 'vl_total_nota',
            'cobr_fat_vDesc' => 'cobr_fat_vDesc',
            'cobr_fat_nfat' => 'cobr_fat_nfat',
            'cobr_fat_vOrig' => 'cobr_fat_vOrig',
            'cobr_fat_vLiq' => 'cobr_fat_vLiq',
            'cobr_dup_nDup' => 'cobr_dup_nDup',
            'cobr_dup_dVenc' => 'cobr_dup_dVenc',
            'cobr_dup_vDup' => 'cobr_dup_vDup',
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
            'data_movimentacao' => 'data_movimentacao',
            'hora_movimentacao' => 'hora_movimentacao',
            'cd_armazenagem' => 'cd_armazenagem',
            'issqn_inscricao_municipal' => 'issqn_inscricao_municipal',
            'issqn_vl_total_servicos' => 'issqn_vl_total_servicos',
            'issqn_bc_issqn' => 'issqn_bc_issqn',
            'issqn_vl_issqn' => 'issqn_vl_issqn',
            'info_complem' => 'info_complem',
            'vl_ii' => 'vl_ii',
            'vl_cofins' => 'vl_cofins',
            'vl_pis' => 'vl_pis',
            'has_financeiro' => 'has_financeiro',
            'cd_conhecimento_transporte' => 'cd_conhecimento_transporte',
            'local_destaque_frete' => 'local_destaque_frete',
            'xml' => 'xml'
        );
    }

}
