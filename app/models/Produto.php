<?php

namespace App\Models;

class Produto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_produto;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $nomefiber;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $utilizaConversao;

    /**
     *
     * @var integer
     */
    protected $cd_medida;

    /**
     *
     * @var integer
     */
    protected $qtdeCompra;

    /**
     *
     * @var integer
     */
    protected $cd_medida_venda;

    /**
     *
     * @var integer
     */
    protected $qtdeVenda;

    /**
     *
     * @var integer
     */
    protected $utilizaVolume;

    /**
     *
     * @var integer
     */
    protected $cd_medida_embalagem;

    /**
     *
     * @var integer
     */
    protected $qtdeEmbalagem;

    /**
     *
     * @var string
     */
    protected $cd_ncm;

    /**
     *
     * @var integer
     */
    protected $Cd_armazenagemPadraoSai;

    /**
     *
     * @var integer
     */
    protected $Cd_armazenagemPadraoEnt;

    /**
     *
     * @var integer
     */
    protected $cd_unidade_negocio;

    /**
     *
     * @var integer
     */
    protected $engenharia_cd_engenharia;

    /**
     *
     * @var integer
     */
    protected $cd_grupo;

    /**
     *
     * @var integer
     */
    protected $tipo;

    /**
     *
     * @var integer
     */
    protected $utiliza_nSerie;

    /**
     *
     * @var string
     */
    protected $garantiaVenda;

    /**
     *
     * @var double
     */
    protected $peso;

    /**
     *
     * @var double
     */
    protected $pesoEmb;

    /**
     *
     * @var double
     */
    protected $volume;

    /**
     *
     * @var integer
     */
    protected $engenharia;

    /**
     *
     * @var double
     */
    protected $estMinimo;

    /**
     *
     * @var double
     */
    protected $estSeguranca;

    /**
     *
     * @var double
     */
    protected $estoque;

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
     * @var double
     */
    protected $custo;

    /**
     *
     * @var integer
     */
    protected $descontinuado;

    /**
     *
     * @var integer
     */
    protected $utiliza_molde;

    /**
     *
     * @var integer
     */
    protected $publicar_net;

    /**
     *
     * @var integer
     */
    protected $id_linha;

    /**
     *
     * @var string
     */
    protected $referencia;

    /**
     *
     * @var string
     */
    protected $cod_barras;

    /**
     *
     * @var string
     */
    protected $foto;

    /**
     *
     * @var integer
     */
    protected $iconeproducao;

    /**
     *
     * @var string
     */
    protected $cigam;

    /**
     *
     * @var string
     */
    protected $un_cigam;

    /**
     *
     * @var integer
     */
    protected $cd_modelo;

    /**
     *
     * @var integer
     */
    protected $certificado_garantia;

    /**
     *
     * @var string
     */
    protected $movimenta_estoque;

    /**
     *
     * @var string
     */
    protected $utiliza_casas_decimais;

    /**
     *
     * @var double
     */
    protected $variacao_custo;

    /**
     *
     * @var integer
     */
    protected $utiliza_lote;

    /**
     *
     * @var integer
     */
    protected $saida_unitaria;

    /**
     *
     * @var integer
     */
    protected $materia_prima;

    /**
     *
     * @var integer
     */
    protected $cd_cor_produto;

    /**
     *
     * @var integer
     */
    protected $cd_secao_produto;

    /**
     * Method to set the value of field cd_produto
     *
     * @param integer $cd_produto
     * @return $this
     */
    public function setCdProduto($cd_produto)
    {
        $this->cd_produto = $cd_produto;

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
     * Method to set the value of field nomefiber
     *
     * @param string $nomefiber
     * @return $this
     */
    public function setNomefiber($nomefiber)
    {
        $this->nomefiber = $nomefiber;

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
     * Method to set the value of field utilizaConversao
     *
     * @param integer $utilizaConversao
     * @return $this
     */
    public function setUtilizaConversao($utilizaConversao)
    {
        $this->utilizaConversao = $utilizaConversao;

        return $this;
    }

    /**
     * Method to set the value of field cd_medida
     *
     * @param integer $cd_medida
     * @return $this
     */
    public function setCdMedida($cd_medida)
    {
        $this->cd_medida = $cd_medida;

        return $this;
    }

    /**
     * Method to set the value of field qtdeCompra
     *
     * @param integer $qtdeCompra
     * @return $this
     */
    public function setQtdeCompra($qtdeCompra)
    {
        $this->qtdeCompra = $qtdeCompra;

        return $this;
    }

    /**
     * Method to set the value of field cd_medida_venda
     *
     * @param integer $cd_medida_venda
     * @return $this
     */
    public function setCdMedidaVenda($cd_medida_venda)
    {
        $this->cd_medida_venda = $cd_medida_venda;

        return $this;
    }

    /**
     * Method to set the value of field qtdeVenda
     *
     * @param integer $qtdeVenda
     * @return $this
     */
    public function setQtdeVenda($qtdeVenda)
    {
        $this->qtdeVenda = $qtdeVenda;

        return $this;
    }

    /**
     * Method to set the value of field utilizaVolume
     *
     * @param integer $utilizaVolume
     * @return $this
     */
    public function setUtilizaVolume($utilizaVolume)
    {
        $this->utilizaVolume = $utilizaVolume;

        return $this;
    }

    /**
     * Method to set the value of field cd_medida_embalagem
     *
     * @param integer $cd_medida_embalagem
     * @return $this
     */
    public function setCdMedidaEmbalagem($cd_medida_embalagem)
    {
        $this->cd_medida_embalagem = $cd_medida_embalagem;

        return $this;
    }

    /**
     * Method to set the value of field qtdeEmbalagem
     *
     * @param integer $qtdeEmbalagem
     * @return $this
     */
    public function setQtdeEmbalagem($qtdeEmbalagem)
    {
        $this->qtdeEmbalagem = $qtdeEmbalagem;

        return $this;
    }

    /**
     * Method to set the value of field cd_ncm
     *
     * @param string $cd_ncm
     * @return $this
     */
    public function setCdNcm($cd_ncm)
    {
        $this->cd_ncm = $cd_ncm;

        return $this;
    }

    /**
     * Method to set the value of field Cd_armazenagemPadraoSai
     *
     * @param integer $Cd_armazenagemPadraoSai
     * @return $this
     */
    public function setCdArmazenagemPadraoSai($Cd_armazenagemPadraoSai)
    {
        $this->Cd_armazenagemPadraoSai = $Cd_armazenagemPadraoSai;

        return $this;
    }

    /**
     * Method to set the value of field Cd_armazenagemPadraoEnt
     *
     * @param integer $Cd_armazenagemPadraoEnt
     * @return $this
     */
    public function setCdArmazenagemPadraoEnt($Cd_armazenagemPadraoEnt)
    {
        $this->Cd_armazenagemPadraoEnt = $Cd_armazenagemPadraoEnt;

        return $this;
    }

    /**
     * Method to set the value of field cd_unidade_negocio
     *
     * @param integer $cd_unidade_negocio
     * @return $this
     */
    public function setCdUnidadeNegocio($cd_unidade_negocio)
    {
        $this->cd_unidade_negocio = $cd_unidade_negocio;

        return $this;
    }

    /**
     * Method to set the value of field engenharia_cd_engenharia
     *
     * @param integer $engenharia_cd_engenharia
     * @return $this
     */
    public function setEngenhariaCdEngenharia($engenharia_cd_engenharia)
    {
        $this->engenharia_cd_engenharia = $engenharia_cd_engenharia;

        return $this;
    }

    /**
     * Method to set the value of field cd_grupo
     *
     * @param integer $cd_grupo
     * @return $this
     */
    public function setCdGrupo($cd_grupo)
    {
        $this->cd_grupo = $cd_grupo;

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
     * Method to set the value of field utiliza_nSerie
     *
     * @param integer $utiliza_nSerie
     * @return $this
     */
    public function setUtilizaNSerie($utiliza_nSerie)
    {
        $this->utiliza_nSerie = $utiliza_nSerie;

        return $this;
    }

    /**
     * Method to set the value of field garantiaVenda
     *
     * @param string $garantiaVenda
     * @return $this
     */
    public function setGarantiaVenda($garantiaVenda)
    {
        $this->garantiaVenda = $garantiaVenda;

        return $this;
    }

    /**
     * Method to set the value of field peso
     *
     * @param double $peso
     * @return $this
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Method to set the value of field pesoEmb
     *
     * @param double $pesoEmb
     * @return $this
     */
    public function setPesoEmb($pesoEmb)
    {
        $this->pesoEmb = $pesoEmb;

        return $this;
    }

    /**
     * Method to set the value of field volume
     *
     * @param double $volume
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Method to set the value of field engenharia
     *
     * @param integer $engenharia
     * @return $this
     */
    public function setEngenharia($engenharia)
    {
        $this->engenharia = $engenharia;

        return $this;
    }

    /**
     * Method to set the value of field estMinimo
     *
     * @param double $estMinimo
     * @return $this
     */
    public function setEstMinimo($estMinimo)
    {
        $this->estMinimo = $estMinimo;

        return $this;
    }

    /**
     * Method to set the value of field estSeguranca
     *
     * @param double $estSeguranca
     * @return $this
     */
    public function setEstSeguranca($estSeguranca)
    {
        $this->estSeguranca = $estSeguranca;

        return $this;
    }

    /**
     * Method to set the value of field estoque
     *
     * @param double $estoque
     * @return $this
     */
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;

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
     * Method to set the value of field custo
     *
     * @param double $custo
     * @return $this
     */
    public function setCusto($custo)
    {
        $this->custo = $custo;

        return $this;
    }

    /**
     * Method to set the value of field descontinuado
     *
     * @param integer $descontinuado
     * @return $this
     */
    public function setDescontinuado($descontinuado)
    {
        $this->descontinuado = $descontinuado;

        return $this;
    }

    /**
     * Method to set the value of field utiliza_molde
     *
     * @param integer $utiliza_molde
     * @return $this
     */
    public function setUtilizaMolde($utiliza_molde)
    {
        $this->utiliza_molde = $utiliza_molde;

        return $this;
    }

    /**
     * Method to set the value of field publicar_net
     *
     * @param integer $publicar_net
     * @return $this
     */
    public function setPublicarNet($publicar_net)
    {
        $this->publicar_net = $publicar_net;

        return $this;
    }

    /**
     * Method to set the value of field id_linha
     *
     * @param integer $id_linha
     * @return $this
     */
    public function setIdLinha($id_linha)
    {
        $this->id_linha = $id_linha;

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
     * Method to set the value of field cod_barras
     *
     * @param string $cod_barras
     * @return $this
     */
    public function setCodBarras($cod_barras)
    {
        $this->cod_barras = $cod_barras;

        return $this;
    }

    /**
     * Method to set the value of field foto
     *
     * @param string $foto
     * @return $this
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Method to set the value of field iconeproducao
     *
     * @param integer $iconeproducao
     * @return $this
     */
    public function setIconeproducao($iconeproducao)
    {
        $this->iconeproducao = $iconeproducao;

        return $this;
    }

    /**
     * Method to set the value of field cigam
     *
     * @param string $cigam
     * @return $this
     */
    public function setCigam($cigam)
    {
        $this->cigam = $cigam;

        return $this;
    }

    /**
     * Method to set the value of field un_cigam
     *
     * @param string $un_cigam
     * @return $this
     */
    public function setUnCigam($un_cigam)
    {
        $this->un_cigam = $un_cigam;

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
     * Method to set the value of field certificado_garantia
     *
     * @param integer $certificado_garantia
     * @return $this
     */
    public function setCertificadoGarantia($certificado_garantia)
    {
        $this->certificado_garantia = $certificado_garantia;

        return $this;
    }

    /**
     * Method to set the value of field movimenta_estoque
     *
     * @param string $movimenta_estoque
     * @return $this
     */
    public function setMovimentaEstoque($movimenta_estoque)
    {
        $this->movimenta_estoque = $movimenta_estoque;

        return $this;
    }

    /**
     * Method to set the value of field utiliza_casas_decimais
     *
     * @param string $utiliza_casas_decimais
     * @return $this
     */
    public function setUtilizaCasasDecimais($utiliza_casas_decimais)
    {
        $this->utiliza_casas_decimais = $utiliza_casas_decimais;

        return $this;
    }

    /**
     * Method to set the value of field variacao_custo
     *
     * @param double $variacao_custo
     * @return $this
     */
    public function setVariacaoCusto($variacao_custo)
    {
        $this->variacao_custo = $variacao_custo;

        return $this;
    }

    /**
     * Method to set the value of field utiliza_lote
     *
     * @param integer $utiliza_lote
     * @return $this
     */
    public function setUtilizaLote($utiliza_lote)
    {
        $this->utiliza_lote = $utiliza_lote;

        return $this;
    }

    /**
     * Method to set the value of field saida_unitaria
     *
     * @param integer $saida_unitaria
     * @return $this
     */
    public function setSaidaUnitaria($saida_unitaria)
    {
        $this->saida_unitaria = $saida_unitaria;

        return $this;
    }

    /**
     * Method to set the value of field materia_prima
     *
     * @param integer $materia_prima
     * @return $this
     */
    public function setMateriaPrima($materia_prima)
    {
        $this->materia_prima = $materia_prima;

        return $this;
    }

    /**
     * Method to set the value of field cd_cor_produto
     *
     * @param integer $cd_cor_produto
     * @return $this
     */
    public function setCdCorProduto($cd_cor_produto)
    {
        $this->cd_cor_produto = $cd_cor_produto;

        return $this;
    }

    /**
     * Method to set the value of field cd_secao_produto
     *
     * @param integer $cd_secao_produto
     * @return $this
     */
    public function setCdSecaoProduto($cd_secao_produto)
    {
        $this->cd_secao_produto = $cd_secao_produto;

        return $this;
    }

    /**
     * Returns the value of field cd_produto
     *
     * @return integer
     */
    public function getCdProduto()
    {
        return $this->cd_produto;
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
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field nomefiber
     *
     * @return string
     */
    public function getNomefiber()
    {
        return $this->nomefiber;
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
     * Returns the value of field utilizaConversao
     *
     * @return integer
     */
    public function getUtilizaConversao()
    {
        return $this->utilizaConversao;
    }

    /**
     * Returns the value of field cd_medida
     *
     * @return integer
     */
    public function getCdMedida()
    {
        return $this->cd_medida;
    }

    /**
     * Returns the value of field qtdeCompra
     *
     * @return integer
     */
    public function getQtdeCompra()
    {
        return $this->qtdeCompra;
    }

    /**
     * Returns the value of field cd_medida_venda
     *
     * @return integer
     */
    public function getCdMedidaVenda()
    {
        return $this->cd_medida_venda;
    }

    /**
     * Returns the value of field qtdeVenda
     *
     * @return integer
     */
    public function getQtdeVenda()
    {
        return $this->qtdeVenda;
    }

    /**
     * Returns the value of field utilizaVolume
     *
     * @return integer
     */
    public function getUtilizaVolume()
    {
        return $this->utilizaVolume;
    }

    /**
     * Returns the value of field cd_medida_embalagem
     *
     * @return integer
     */
    public function getCdMedidaEmbalagem()
    {
        return $this->cd_medida_embalagem;
    }

    /**
     * Returns the value of field qtdeEmbalagem
     *
     * @return integer
     */
    public function getQtdeEmbalagem()
    {
        return $this->qtdeEmbalagem;
    }

    /**
     * Returns the value of field cd_ncm
     *
     * @return string
     */
    public function getCdNcm()
    {
        return $this->cd_ncm;
    }

    /**
     * Returns the value of field Cd_armazenagemPadraoSai
     *
     * @return integer
     */
    public function getCdArmazenagemPadraoSai()
    {
        return $this->Cd_armazenagemPadraoSai;
    }

    /**
     * Returns the value of field Cd_armazenagemPadraoEnt
     *
     * @return integer
     */
    public function getCdArmazenagemPadraoEnt()
    {
        return $this->Cd_armazenagemPadraoEnt;
    }

    /**
     * Returns the value of field cd_unidade_negocio
     *
     * @return integer
     */
    public function getCdUnidadeNegocio()
    {
        return $this->cd_unidade_negocio;
    }

    /**
     * Returns the value of field engenharia_cd_engenharia
     *
     * @return integer
     */
    public function getEngenhariaCdEngenharia()
    {
        return $this->engenharia_cd_engenharia;
    }

    /**
     * Returns the value of field cd_grupo
     *
     * @return integer
     */
    public function getCdGrupo()
    {
        return $this->cd_grupo;
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
     * Returns the value of field utiliza_nSerie
     *
     * @return integer
     */
    public function getUtilizaNSerie()
    {
        return $this->utiliza_nSerie;
    }

    /**
     * Returns the value of field garantiaVenda
     *
     * @return string
     */
    public function getGarantiaVenda()
    {
        return $this->garantiaVenda;
    }

    /**
     * Returns the value of field peso
     *
     * @return double
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Returns the value of field pesoEmb
     *
     * @return double
     */
    public function getPesoEmb()
    {
        return $this->pesoEmb;
    }

    /**
     * Returns the value of field volume
     *
     * @return double
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Returns the value of field engenharia
     *
     * @return integer
     */
    public function getEngenharia()
    {
        return $this->engenharia;
    }

    /**
     * Returns the value of field estMinimo
     *
     * @return double
     */
    public function getEstMinimo()
    {
        return $this->estMinimo;
    }

    /**
     * Returns the value of field estSeguranca
     *
     * @return double
     */
    public function getEstSeguranca()
    {
        return $this->estSeguranca;
    }

    /**
     * Returns the value of field estoque
     *
     * @return double
     */
    public function getEstoque()
    {
        return $this->estoque;
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
     * Returns the value of field custo
     *
     * @return double
     */
    public function getCusto()
    {
        return $this->custo;
    }

    /**
     * Returns the value of field descontinuado
     *
     * @return integer
     */
    public function getDescontinuado()
    {
        return $this->descontinuado;
    }

    /**
     * Returns the value of field utiliza_molde
     *
     * @return integer
     */
    public function getUtilizaMolde()
    {
        return $this->utiliza_molde;
    }

    /**
     * Returns the value of field publicar_net
     *
     * @return integer
     */
    public function getPublicarNet()
    {
        return $this->publicar_net;
    }

    /**
     * Returns the value of field id_linha
     *
     * @return integer
     */
    public function getIdLinha()
    {
        return $this->id_linha;
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
     * Returns the value of field cod_barras
     *
     * @return string
     */
    public function getCodBarras()
    {
        return $this->cod_barras;
    }

    /**
     * Returns the value of field foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Returns the value of field iconeproducao
     *
     * @return integer
     */
    public function getIconeproducao()
    {
        return $this->iconeproducao;
    }

    /**
     * Returns the value of field cigam
     *
     * @return string
     */
    public function getCigam()
    {
        return $this->cigam;
    }

    /**
     * Returns the value of field un_cigam
     *
     * @return string
     */
    public function getUnCigam()
    {
        return $this->un_cigam;
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
     * Returns the value of field certificado_garantia
     *
     * @return integer
     */
    public function getCertificadoGarantia()
    {
        return $this->certificado_garantia;
    }

    /**
     * Returns the value of field movimenta_estoque
     *
     * @return string
     */
    public function getMovimentaEstoque()
    {
        return $this->movimenta_estoque;
    }

    /**
     * Returns the value of field utiliza_casas_decimais
     *
     * @return string
     */
    public function getUtilizaCasasDecimais()
    {
        return $this->utiliza_casas_decimais;
    }

    /**
     * Returns the value of field variacao_custo
     *
     * @return double
     */
    public function getVariacaoCusto()
    {
        return $this->variacao_custo;
    }

    /**
     * Returns the value of field utiliza_lote
     *
     * @return integer
     */
    public function getUtilizaLote()
    {
        return $this->utiliza_lote;
    }

    /**
     * Returns the value of field saida_unitaria
     *
     * @return integer
     */
    public function getSaidaUnitaria()
    {
        return $this->saida_unitaria;
    }

    /**
     * Returns the value of field materia_prima
     *
     * @return integer
     */
    public function getMateriaPrima()
    {
        return $this->materia_prima;
    }

    /**
     * Returns the value of field cd_cor_produto
     *
     * @return integer
     */
    public function getCdCorProduto()
    {
        return $this->cd_cor_produto;
    }

    /**
     * Returns the value of field cd_secao_produto
     *
     * @return integer
     */
    public function getCdSecaoProduto()
    {
        return $this->cd_secao_produto;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_produto', 'App\Models\Contato', 'cd_produto', array('alias' => 'Contato'));
        $this->hasMany('cd_produto', 'App\Models\Etapaitem', 'produto_cd_produto', array('alias' => 'Etapaitem'));
        $this->hasMany('cd_produto', 'App\Models\Itemop', 'Cd_produto', array('alias' => 'Itemop'));
        $this->hasMany('cd_produto', 'App\Models\KitsProduto', 'produto_cd_produto', array('alias' => 'KitsProduto'));
        $this->hasMany('cd_produto', 'App\Models\MovEstoque', 'produto_Cd_produto', array('alias' => 'MovEstoque'));
        $this->hasMany('cd_produto', 'App\Models\MovimentacaoManualEstoqueItem', 'cd_produto', array('alias' => 'MovimentacaoManualEstoqueItem'));
        $this->hasMany('cd_produto', 'App\Models\Op', 'Cd_produto', array('alias' => 'Op'));
        $this->hasMany('cd_produto', 'App\Models\Opetapaitem', 'produto_cd_produto', array('alias' => 'Opetapaitem'));
        $this->hasMany('cd_produto', 'App\Models\OrcamentoItem', 'produto_cd_produto', array('alias' => 'OrcamentoItem'));
        $this->hasMany('cd_produto', 'App\Models\OrdemCompraItem', 'Cd_produto', array('alias' => 'OrdemCompraItem'));
        $this->hasMany('cd_produto', 'App\Models\OrdemServicoReparo', 'cd_produto', array('alias' => 'OrdemServicoReparo'));
        $this->hasMany('cd_produto', 'App\Models\PedidoHasCertificadoProduto', 'produto_Cd_produto', array('alias' => 'PedidoHasCertificadoProduto'));
        $this->hasMany('cd_produto', 'App\Models\PedidoHasProduto', 'produto_Cd_produto', array('alias' => 'PedidoHasProduto'));
        $this->hasMany('cd_produto', 'App\Models\PiscinaHasFiltroCasaMaquinas', 'produto_cd_produto', array('alias' => 'PiscinaHasFiltroCasaMaquinas'));
        $this->hasMany('cd_produto', 'App\Models\PiscinaHasFiltroCasaMaquinas', 'casa_maq', array('alias' => 'PiscinaHasFiltroCasaMaquinas'));
        $this->hasMany('cd_produto', 'App\Models\ProdutoFornecedor', 'produto_Cd_produto', array('alias' => 'ProdutoFornecedor'));
        $this->hasMany('cd_produto', 'App\Models\ProdutoHasArquivo', 'produto_Cd_produto', array('alias' => 'ProdutoHasArquivo'));
        $this->hasMany('cd_produto', 'App\Models\ProdutoHasDados', 'cd_produto', array('alias' => 'ProdutoHasDados'));
        $this->hasMany('cd_produto', 'App\Models\ProdutoHasEngenharia', 'produto_cd_produto', array('alias' => 'ProdutoHasEngenharia'));
        $this->hasMany('cd_produto', 'App\Models\ProdutoHasImagem', 'produto_Cd_produto', array('alias' => 'ProdutoHasImagem'));
        $this->hasMany('cd_produto', 'App\Models\ProdutoHasMolde', 'produto_cd_produto', array('alias' => 'ProdutoHasMolde'));
        $this->hasMany('cd_produto', 'App\Models\ProdutoHasVideo', 'produto_Cd_produto', array('alias' => 'ProdutoHasVideo'));
        $this->hasMany('cd_produto', 'App\Models\ProdutoImposto', 'produto_cd_produto', array('alias' => 'ProdutoImposto'));
        $this->hasMany('cd_produto', 'App\Models\ProdutoArea', 'produto_cd_produto', array('alias' => 'ProdutoArea'));
        $this->hasMany('cd_produto', 'App\Models\RequisicaoItem', 'Cd_produto', array('alias' => 'RequisicaoItem'));
        $this->hasMany('cd_produto', 'App\Models\SacChamadoHasProblemas', 'cod_produto', array('alias' => 'SacChamadoHasProblemas'));
        $this->hasMany('cd_produto', 'App\Models\Site', 'cd_produto', array('alias' => 'Site'));
        $this->hasMany('cd_produto', 'App\Models\TabelaPrecosHasProdutoarea', 'produto_cd_produto', array('alias' => 'TabelaPrecosHasProdutoarea'));
        $this->hasMany('cd_produto', 'App\Models\TabelaPrecosHasProdutos', 'cd_produto', array('alias' => 'TabelaPrecosHasProdutos'));
        $this->belongsTo('cd_medida_venda', 'App\Models\Unidademedida', 'cd_medida', array('alias' => 'Unidademedida'));
        $this->belongsTo('cd_medida_embalagem', 'App\Models\Unidademedida', 'cd_medida', array('alias' => 'Unidademedida'));
        $this->belongsTo('cd_grupo', 'App\Models\Grupoproduto', 'cd_grupo', array('alias' => 'Grupoproduto'));
        $this->belongsTo('certificado_garantia', 'App\Models\ModeloCertificadoGarantia', 'id_certificado', array('alias' => 'ModeloCertificadoGarantia'));
        $this->belongsTo('cd_cor_produto', 'App\Models\CorProduto', 'cd_cor', array('alias' => 'CorProduto'));
        $this->belongsTo('cd_secao_produto', 'App\Models\SecaoProdutos', 'cd_secao', array('alias' => 'SecaoProdutos'));
        $this->belongsTo('id_linha', 'App\Models\LinhaProdutoSite', 'id_linha', array('alias' => 'LinhaProdutoSite'));
        $this->belongsTo('Cd_armazenagemPadraoEnt', 'App\Models\CentroArmazenagem', 'Cd_armazenagem', array('alias' => 'CentroArmazenagem'));
        $this->belongsTo('engenharia_cd_engenharia', 'App\Models\Engenharia', 'cd_engenharia', array('alias' => 'Engenharia'));
        $this->belongsTo('cd_medida', 'App\Models\Unidademedida', 'cd_medida', array('alias' => 'Unidademedida'));
        $this->belongsTo('cd_unidade_negocio', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('Cd_armazenagemPadraoSai', 'App\Models\CentroArmazenagem', 'Cd_armazenagem', array('alias' => 'CentroArmazenagem'));
        $this->hasone('cd_produto', 'App\Models\Nfsaidaitem', 'cd_produto', array('alias' => 'Produto'));

    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'produto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Produto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Produto
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
            'cd_produto' => 'cd_produto',
            'cd_unidade' => 'cd_unidade',
            'nome' => 'nome',
            'nomefiber' => 'nomefiber',
            'descricao' => 'descricao',
            'utilizaConversao' => 'utilizaConversao',
            'cd_medida' => 'cd_medida',
            'qtdeCompra' => 'qtdeCompra',
            'cd_medida_venda' => 'cd_medida_venda',
            'qtdeVenda' => 'qtdeVenda',
            'utilizaVolume' => 'utilizaVolume',
            'cd_medida_embalagem' => 'cd_medida_embalagem',
            'qtdeEmbalagem' => 'qtdeEmbalagem',
            'cd_ncm' => 'cd_ncm',
            'Cd_armazenagemPadraoSai' => 'Cd_armazenagemPadraoSai',
            'Cd_armazenagemPadraoEnt' => 'Cd_armazenagemPadraoEnt',
            'cd_unidade_negocio' => 'cd_unidade_negocio',
            'engenharia_cd_engenharia' => 'engenharia_cd_engenharia',
            'cd_grupo' => 'cd_grupo',
            'tipo' => 'tipo',
            'utiliza_nSerie' => 'utiliza_nSerie',
            'garantiaVenda' => 'garantiaVenda',
            'peso' => 'peso',
            'pesoEmb' => 'pesoEmb',
            'volume' => 'volume',
            'engenharia' => 'engenharia',
            'estMinimo' => 'estMinimo',
            'estSeguranca' => 'estSeguranca',
            'estoque' => 'estoque',
            'ativo' => 'ativo',
            'modificado' => 'modificado',
            'criado' => 'criado',
            'royalties' => 'royalties',
            'publicidade' => 'publicidade',
            'custo' => 'custo',
            'descontinuado' => 'descontinuado',
            'utiliza_molde' => 'utiliza_molde',
            'publicar_net' => 'publicar_net',
            'id_linha' => 'id_linha',
            'referencia' => 'referencia',
            'cod_barras' => 'cod_barras',
            'foto' => 'foto',
            'iconeproducao' => 'iconeproducao',
            'cigam' => 'cigam',
            'un_cigam' => 'un_cigam',
            'cd_modelo' => 'cd_modelo',
            'certificado_garantia' => 'certificado_garantia',
            'movimenta_estoque' => 'movimenta_estoque',
            'utiliza_casas_decimais' => 'utiliza_casas_decimais',
            'variacao_custo' => 'variacao_custo',
            'utiliza_lote' => 'utiliza_lote',
            'saida_unitaria' => 'saida_unitaria',
            'materia_prima' => 'materia_prima',
            'cd_cor_produto' => 'cd_cor_produto',
            'cd_secao_produto' => 'cd_secao_produto'
        );
    }
}
