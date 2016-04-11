<?php

namespace App\Models;

class PdvNfe extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $cd_nfe;

    /**
     *
     * @var integer
     */
    public $cd_venda;

    /**
     *
     * @var integer
     */
    public $numero;

    /**
     *
     * @var integer
     */
    public $serie;

    /**
     *
     * @var string
     */
    public $lote;

    /**
     *
     * @var integer
     */
    public $cfop;

    /**
     *
     * @var string
     */
    public $cfop_descricao;

    /**
     *
     * @var string
     */
    public $inscricao_estadual_st;

    /**
     *
     * @var string
     */
    public $chave_acesso_nfe;

    /**
     *
     * @var string
     */
    public $refNfe;

    /**
     *
     * @var integer
     */
    public $finNFe;

    /**
     *
     * @var integer
     */
    public $fatura;

    /**
     *
     * @var string
     */
    public $data_emissao;

    /**
     *
     * @var string
     */
    public $hora_emissao;

    /**
     *
     * @var string
     */
    public $gmt_emissao;

    /**
     *
     * @var string
     */
    public $data_saida;

    /**
     *
     * @var string
     */
    public $hora_saida;

    /**
     *
     * @var string
     */
    public $gmt_saida;

    /**
     *
     * @var integer
     */
    public $cliente_cd_cliente;

    /**
     *
     * @var string
     */
    public $cliente_nome;

    /**
     *
     * @var string
     */
    public $cliente_cpfcnpj;

    /**
     *
     * @var string
     */
    public $cliente_inscricao_estadual;

    /**
     *
     * @var string
     */
    public $cliente_bairro;

    /**
     *
     * @var string
     */
    public $cliente_cep;

    /**
     *
     * @var string
     */
    public $cliente_cidade;

    /**
     *
     * @var string
     */
    public $cliente_uf;

    /**
     *
     * @var string
     */
    public $cliente_telefone;

    /**
     *
     * @var double
     */
    public $bc_icms;

    /**
     *
     * @var double
     */
    public $vICMS;

    /**
     *
     * @var double
     */
    public $vBCST;

    /**
     *
     * @var double
     */
    public $vICMSST;

    /**
     *
     * @var double
     */
    public $vl_frete;

    /**
     *
     * @var double
     */
    public $vl_seguro;

    /**
     *
     * @var double
     */
    public $vl_desconto;

    /**
     *
     * @var double
     */
    public $desp_aces;

    /**
     *
     * @var double
     */
    public $vl_ipi;

    /**
     *
     * @var double
     */
    public $vl_total_produtos;

    /**
     *
     * @var double
     */
    public $vl_total_nota;

    /**
     *
     * @var string
     */
    public $info_complem;

    /**
     *
     * @var integer
     */
    public $unidade_negocio_cd_unidade;

    /**
     *
     * @var integer
     */
    public $nDV;

    /**
     *
     * @var string
     */
    public $cNF;

    /**
     *
     * @var string
     */
    public $fornecedor_pais;

    /**
     *
     * @var string
     */
    public $cliente_email;

    /**
     *
     * @var string
     */
    public $cliente_rua;

    /**
     *
     * @var string
     */
    public $cliente_numero;

    /**
     *
     * @var string
     */
    public $cliente_complemento;

    /**
     *
     * @var string
     */
    public $entrega_cnpj;

    /**
     *
     * @var string
     */
    public $entrega_rua;

    /**
     *
     * @var string
     */
    public $entrega_numero;

    /**
     *
     * @var string
     */
    public $entrega_complemento;

    /**
     *
     * @var string
     */
    public $entrega_bairro;

    /**
     *
     * @var string
     */
    public $entrega_municipio;

    /**
     *
     * @var string
     */
    public $entrega_uf;

    /**
     *
     * @var double
     */
    public $vBC;

    /**
     *
     * @var string
     */
    public $cobr_fat_vDesc;

    /**
     *
     * @var string
     */
    public $cobr_fat_nfat;

    /**
     *
     * @var double
     */
    public $cobr_fat_vOrig;

    /**
     *
     * @var double
     */
    public $cobr_fat_vLiq;

    /**
     *
     * @var string
     */
    public $cobr_dup_nDup;

    /**
     *
     * @var string
     */
    public $cobr_dup_dVenc;

    /**
     *
     * @var double
     */
    public $cobr_dup_vDup;

    /**
     *
     * @var string
     */
    public $infoAdic;

    /**
     *
     * @var double
     */
    public $vII;

    /**
     *
     * @var double
     */
    public $vPIS;

    /**
     *
     * @var double
     */
    public $vCOFINS;
    /**
     *
     * @var double
     */
    public $vST;
    /**
     *
     * @var double
     */
    public $vIPI;

    /**
     *
     * @var double
     */
    public $vOutro;

    /**
     *
     * @var string
     */
    public $pdv_nfsaida_numero_recibo;

    /**
     *
     * @var integer
     */
    public $pdv_nfsaida_status;

    /**
     *
     * @var integer
     */
    public $cancelada;

    /**
     *
     * @var integer
     */
    public $denegada;

    /**
     *
     * @var integer
     */
    public $nfe_impressa;

    /**
     *
     * @var integer
     */
    public $tpNF;

    /**
     *
     * @var integer
     */
    public $pdv_nfsaida_avulsa;

    /**
     *
     * @var integer
     */
    public $contigencia;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_nfe', 'App\Models\PdvNfeHasItens', 'cd_nfe', array('alias' => 'PdvNfeItens'));
        $this->belongsTo('cd_venda', 'App\Models\PdvVendas', 'cd_venda', array('alias' => 'PdvVendas'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_nfe';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvNfce[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvNfce
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
