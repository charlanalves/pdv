<?php

namespace App\Models;

class ConfiguracoesSped extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $cod_inc_trib;

    /**
     *
     * @var integer
     */
    protected $ind_apro_cred;

    /**
     *
     * @var integer
     */
    protected $cod_tipo_cont;

    /**
     *
     * @var integer
     */
    protected $ind_reg_cum;

    /**
     *
     * @var string
     */
    protected $cod_aju_fisc;

    /**
     *
     * @var string
     */
    protected $cod_receita;

    /**
     *
     * @var string
     */
    protected $data_pagamento_diferencial;

    /**
     *
     * @var string
     */
    protected $obrigacoes_icms;

    /**
     *
     * @var integer
     */
    protected $controla_estoque;

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
     * Method to set the value of field cod_inc_trib
     *
     * @param integer $cod_inc_trib
     * @return $this
     */
    public function setCodIncTrib($cod_inc_trib)
    {
        $this->cod_inc_trib = $cod_inc_trib;

        return $this;
    }

    /**
     * Method to set the value of field ind_apro_cred
     *
     * @param integer $ind_apro_cred
     * @return $this
     */
    public function setIndAproCred($ind_apro_cred)
    {
        $this->ind_apro_cred = $ind_apro_cred;

        return $this;
    }

    /**
     * Method to set the value of field cod_tipo_cont
     *
     * @param integer $cod_tipo_cont
     * @return $this
     */
    public function setCodTipoCont($cod_tipo_cont)
    {
        $this->cod_tipo_cont = $cod_tipo_cont;

        return $this;
    }

    /**
     * Method to set the value of field ind_reg_cum
     *
     * @param integer $ind_reg_cum
     * @return $this
     */
    public function setIndRegCum($ind_reg_cum)
    {
        $this->ind_reg_cum = $ind_reg_cum;

        return $this;
    }

    /**
     * Method to set the value of field cod_aju_fisc
     *
     * @param string $cod_aju_fisc
     * @return $this
     */
    public function setCodAjuFisc($cod_aju_fisc)
    {
        $this->cod_aju_fisc = $cod_aju_fisc;

        return $this;
    }

    /**
     * Method to set the value of field cod_receita
     *
     * @param string $cod_receita
     * @return $this
     */
    public function setCodReceita($cod_receita)
    {
        $this->cod_receita = $cod_receita;

        return $this;
    }

    /**
     * Method to set the value of field data_pagamento_diferencial
     *
     * @param string $data_pagamento_diferencial
     * @return $this
     */
    public function setDataPagamentoDiferencial($data_pagamento_diferencial)
    {
        $this->data_pagamento_diferencial = $data_pagamento_diferencial;

        return $this;
    }

    /**
     * Method to set the value of field obrigacoes_icms
     *
     * @param string $obrigacoes_icms
     * @return $this
     */
    public function setObrigacoesIcms($obrigacoes_icms)
    {
        $this->obrigacoes_icms = $obrigacoes_icms;

        return $this;
    }

    /**
     * Method to set the value of field controla_estoque
     *
     * @param integer $controla_estoque
     * @return $this
     */
    public function setControlaEstoque($controla_estoque)
    {
        $this->controla_estoque = $controla_estoque;

        return $this;
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
     * Returns the value of field cod_inc_trib
     *
     * @return integer
     */
    public function getCodIncTrib()
    {
        return $this->cod_inc_trib;
    }

    /**
     * Returns the value of field ind_apro_cred
     *
     * @return integer
     */
    public function getIndAproCred()
    {
        return $this->ind_apro_cred;
    }

    /**
     * Returns the value of field cod_tipo_cont
     *
     * @return integer
     */
    public function getCodTipoCont()
    {
        return $this->cod_tipo_cont;
    }

    /**
     * Returns the value of field ind_reg_cum
     *
     * @return integer
     */
    public function getIndRegCum()
    {
        return $this->ind_reg_cum;
    }

    /**
     * Returns the value of field cod_aju_fisc
     *
     * @return string
     */
    public function getCodAjuFisc()
    {
        return $this->cod_aju_fisc;
    }

    /**
     * Returns the value of field cod_receita
     *
     * @return string
     */
    public function getCodReceita()
    {
        return $this->cod_receita;
    }

    /**
     * Returns the value of field data_pagamento_diferencial
     *
     * @return string
     */
    public function getDataPagamentoDiferencial()
    {
        return $this->data_pagamento_diferencial;
    }

    /**
     * Returns the value of field obrigacoes_icms
     *
     * @return string
     */
    public function getObrigacoesIcms()
    {
        return $this->obrigacoes_icms;
    }

    /**
     * Returns the value of field controla_estoque
     *
     * @return integer
     */
    public function getControlaEstoque()
    {
        return $this->controla_estoque;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'configuracoes_sped';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConfiguracoesSped[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConfiguracoesSped
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
            'cd_empresa' => 'cd_empresa',
            'cod_inc_trib' => 'cod_inc_trib',
            'ind_apro_cred' => 'ind_apro_cred',
            'cod_tipo_cont' => 'cod_tipo_cont',
            'ind_reg_cum' => 'ind_reg_cum',
            'cod_aju_fisc' => 'cod_aju_fisc',
            'cod_receita' => 'cod_receita',
            'data_pagamento_diferencial' => 'data_pagamento_diferencial',
            'obrigacoes_icms' => 'obrigacoes_icms',
            'controla_estoque' => 'controla_estoque'
        );
    }

}
