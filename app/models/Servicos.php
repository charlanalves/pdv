<?php

namespace App\Models;

class Servicos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_servico;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var double
     */
    protected $cd_servicos_municipio;

    /**
     *
     * @var integer
     */
    protected $tipo_operacao;

    /**
     *
     * @var integer
     */
    protected $cd_medida;

    /**
     *
     * @var integer
     */
    protected $modelo_tributacao;

    /**
     *
     * @var integer
     */
    protected $reter_impostos;

    /**
     *
     * @var double
     */
    protected $pis;

    /**
     *
     * @var double
     */
    protected $cofins;

    /**
     *
     * @var double
     */
    protected $csll;

    /**
     *
     * @var double
     */
    protected $ir;

    /**
     *
     * @var double
     */
    protected $valor_minimo_guia_ir;

    /**
     *
     * @var double
     */
    protected $valor_minimo_guia_pis_cofins_csll;

    /**
     *
     * @var integer
     */
    protected $portador_padrao_ir;

    /**
     *
     * @var integer
     */
    protected $conta_padrao_ir;

    /**
     *
     * @var integer
     */
    protected $portador_padrao_pis;

    /**
     *
     * @var integer
     */
    protected $conta_padrao_pis;

    /**
     *
     * @var integer
     */
    protected $portador_padrao_cofins;

    /**
     *
     * @var integer
     */
    protected $conta_padrao_cofins;

    /**
     *
     * @var integer
     */
    protected $portador_padrao_csll;

    /**
     *
     * @var integer
     */
    protected $conta_padrao_csll;

    /**
     *
     * @var integer
     */
    protected $portador_padrao_credito_liquidado;

    /**
     *
     * @var integer
     */
    protected $conta_padrao_credito_liquidado;

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
     * Method to set the value of field cd_servicos_municipio
     *
     * @param double $cd_servicos_municipio
     * @return $this
     */
    public function setCdServicosMunicipio($cd_servicos_municipio)
    {
        $this->cd_servicos_municipio = $cd_servicos_municipio;

        return $this;
    }

    /**
     * Method to set the value of field tipo_operacao
     *
     * @param integer $tipo_operacao
     * @return $this
     */
    public function setTipoOperacao($tipo_operacao)
    {
        $this->tipo_operacao = $tipo_operacao;

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
     * Method to set the value of field reter_impostos
     *
     * @param integer $reter_impostos
     * @return $this
     */
    public function setReterImpostos($reter_impostos)
    {
        $this->reter_impostos = $reter_impostos;

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
     * Method to set the value of field valor_minimo_guia_ir
     *
     * @param double $valor_minimo_guia_ir
     * @return $this
     */
    public function setValorMinimoGuiaIr($valor_minimo_guia_ir)
    {
        $this->valor_minimo_guia_ir = $valor_minimo_guia_ir;

        return $this;
    }

    /**
     * Method to set the value of field valor_minimo_guia_pis_cofins_csll
     *
     * @param double $valor_minimo_guia_pis_cofins_csll
     * @return $this
     */
    public function setValorMinimoGuiaPisCofinsCsll($valor_minimo_guia_pis_cofins_csll)
    {
        $this->valor_minimo_guia_pis_cofins_csll = $valor_minimo_guia_pis_cofins_csll;

        return $this;
    }

    /**
     * Method to set the value of field portador_padrao_ir
     *
     * @param integer $portador_padrao_ir
     * @return $this
     */
    public function setPortadorPadraoIr($portador_padrao_ir)
    {
        $this->portador_padrao_ir = $portador_padrao_ir;

        return $this;
    }

    /**
     * Method to set the value of field conta_padrao_ir
     *
     * @param integer $conta_padrao_ir
     * @return $this
     */
    public function setContaPadraoIr($conta_padrao_ir)
    {
        $this->conta_padrao_ir = $conta_padrao_ir;

        return $this;
    }

    /**
     * Method to set the value of field portador_padrao_pis
     *
     * @param integer $portador_padrao_pis
     * @return $this
     */
    public function setPortadorPadraoPis($portador_padrao_pis)
    {
        $this->portador_padrao_pis = $portador_padrao_pis;

        return $this;
    }

    /**
     * Method to set the value of field conta_padrao_pis
     *
     * @param integer $conta_padrao_pis
     * @return $this
     */
    public function setContaPadraoPis($conta_padrao_pis)
    {
        $this->conta_padrao_pis = $conta_padrao_pis;

        return $this;
    }

    /**
     * Method to set the value of field portador_padrao_cofins
     *
     * @param integer $portador_padrao_cofins
     * @return $this
     */
    public function setPortadorPadraoCofins($portador_padrao_cofins)
    {
        $this->portador_padrao_cofins = $portador_padrao_cofins;

        return $this;
    }

    /**
     * Method to set the value of field conta_padrao_cofins
     *
     * @param integer $conta_padrao_cofins
     * @return $this
     */
    public function setContaPadraoCofins($conta_padrao_cofins)
    {
        $this->conta_padrao_cofins = $conta_padrao_cofins;

        return $this;
    }

    /**
     * Method to set the value of field portador_padrao_csll
     *
     * @param integer $portador_padrao_csll
     * @return $this
     */
    public function setPortadorPadraoCsll($portador_padrao_csll)
    {
        $this->portador_padrao_csll = $portador_padrao_csll;

        return $this;
    }

    /**
     * Method to set the value of field conta_padrao_csll
     *
     * @param integer $conta_padrao_csll
     * @return $this
     */
    public function setContaPadraoCsll($conta_padrao_csll)
    {
        $this->conta_padrao_csll = $conta_padrao_csll;

        return $this;
    }

    /**
     * Method to set the value of field portador_padrao_credito_liquidado
     *
     * @param integer $portador_padrao_credito_liquidado
     * @return $this
     */
    public function setPortadorPadraoCreditoLiquidado($portador_padrao_credito_liquidado)
    {
        $this->portador_padrao_credito_liquidado = $portador_padrao_credito_liquidado;

        return $this;
    }

    /**
     * Method to set the value of field conta_padrao_credito_liquidado
     *
     * @param integer $conta_padrao_credito_liquidado
     * @return $this
     */
    public function setContaPadraoCreditoLiquidado($conta_padrao_credito_liquidado)
    {
        $this->conta_padrao_credito_liquidado = $conta_padrao_credito_liquidado;

        return $this;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field cd_servicos_municipio
     *
     * @return double
     */
    public function getCdServicosMunicipio()
    {
        return $this->cd_servicos_municipio;
    }

    /**
     * Returns the value of field tipo_operacao
     *
     * @return integer
     */
    public function getTipoOperacao()
    {
        return $this->tipo_operacao;
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
     * Returns the value of field modelo_tributacao
     *
     * @return integer
     */
    public function getModeloTributacao()
    {
        return $this->modelo_tributacao;
    }

    /**
     * Returns the value of field reter_impostos
     *
     * @return integer
     */
    public function getReterImpostos()
    {
        return $this->reter_impostos;
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
     * Returns the value of field cofins
     *
     * @return double
     */
    public function getCofins()
    {
        return $this->cofins;
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
     * Returns the value of field ir
     *
     * @return double
     */
    public function getIr()
    {
        return $this->ir;
    }

    /**
     * Returns the value of field valor_minimo_guia_ir
     *
     * @return double
     */
    public function getValorMinimoGuiaIr()
    {
        return $this->valor_minimo_guia_ir;
    }

    /**
     * Returns the value of field valor_minimo_guia_pis_cofins_csll
     *
     * @return double
     */
    public function getValorMinimoGuiaPisCofinsCsll()
    {
        return $this->valor_minimo_guia_pis_cofins_csll;
    }

    /**
     * Returns the value of field portador_padrao_ir
     *
     * @return integer
     */
    public function getPortadorPadraoIr()
    {
        return $this->portador_padrao_ir;
    }

    /**
     * Returns the value of field conta_padrao_ir
     *
     * @return integer
     */
    public function getContaPadraoIr()
    {
        return $this->conta_padrao_ir;
    }

    /**
     * Returns the value of field portador_padrao_pis
     *
     * @return integer
     */
    public function getPortadorPadraoPis()
    {
        return $this->portador_padrao_pis;
    }

    /**
     * Returns the value of field conta_padrao_pis
     *
     * @return integer
     */
    public function getContaPadraoPis()
    {
        return $this->conta_padrao_pis;
    }

    /**
     * Returns the value of field portador_padrao_cofins
     *
     * @return integer
     */
    public function getPortadorPadraoCofins()
    {
        return $this->portador_padrao_cofins;
    }

    /**
     * Returns the value of field conta_padrao_cofins
     *
     * @return integer
     */
    public function getContaPadraoCofins()
    {
        return $this->conta_padrao_cofins;
    }

    /**
     * Returns the value of field portador_padrao_csll
     *
     * @return integer
     */
    public function getPortadorPadraoCsll()
    {
        return $this->portador_padrao_csll;
    }

    /**
     * Returns the value of field conta_padrao_csll
     *
     * @return integer
     */
    public function getContaPadraoCsll()
    {
        return $this->conta_padrao_csll;
    }

    /**
     * Returns the value of field portador_padrao_credito_liquidado
     *
     * @return integer
     */
    public function getPortadorPadraoCreditoLiquidado()
    {
        return $this->portador_padrao_credito_liquidado;
    }

    /**
     * Returns the value of field conta_padrao_credito_liquidado
     *
     * @return integer
     */
    public function getContaPadraoCreditoLiquidado()
    {
        return $this->conta_padrao_credito_liquidado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_servico', 'App\Models\FechamentoPeriodoServico', 'cd_servico', array('alias' => 'FechamentoPeriodoServico'));
        $this->hasMany('cd_servico', 'App\Models\NfentradaItem', 'cd_servico', array('alias' => 'NfentradaItem'));
        $this->hasMany('cd_servico', 'App\Models\FechamentoPeriodoServico', 'cd_servico', NULL);
        $this->hasMany('cd_servico', 'App\Models\NfentradaItem', 'cd_servico', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'servicos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Servicos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Servicos
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
            'cd_servico' => 'cd_servico',
            'descricao' => 'descricao',
            'cd_servicos_municipio' => 'cd_servicos_municipio',
            'tipo_operacao' => 'tipo_operacao',
            'cd_medida' => 'cd_medida',
            'modelo_tributacao' => 'modelo_tributacao',
            'reter_impostos' => 'reter_impostos',
            'pis' => 'pis',
            'cofins' => 'cofins',
            'csll' => 'csll',
            'ir' => 'ir',
            'valor_minimo_guia_ir' => 'valor_minimo_guia_ir',
            'valor_minimo_guia_pis_cofins_csll' => 'valor_minimo_guia_pis_cofins_csll',
            'portador_padrao_ir' => 'portador_padrao_ir',
            'conta_padrao_ir' => 'conta_padrao_ir',
            'portador_padrao_pis' => 'portador_padrao_pis',
            'conta_padrao_pis' => 'conta_padrao_pis',
            'portador_padrao_cofins' => 'portador_padrao_cofins',
            'conta_padrao_cofins' => 'conta_padrao_cofins',
            'portador_padrao_csll' => 'portador_padrao_csll',
            'conta_padrao_csll' => 'conta_padrao_csll',
            'portador_padrao_credito_liquidado' => 'portador_padrao_credito_liquidado',
            'conta_padrao_credito_liquidado' => 'conta_padrao_credito_liquidado'
        );
    }

}
