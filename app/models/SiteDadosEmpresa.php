<?php

namespace App\Models;

class SiteDadosEmpresa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var string
     */
    protected $nome_site;

    /**
     *
     * @var string
     */
    protected $rua_site;

    /**
     *
     * @var string
     */
    protected $numero_site;

    /**
     *
     * @var string
     */
    protected $bairro_site;

    /**
     *
     * @var string
     */
    protected $cidade_site;

    /**
     *
     * @var string
     */
    protected $uf_site;

    /**
     *
     * @var string
     */
    protected $cep_site;

    /**
     *
     * @var string
     */
    protected $tel_site;

    /**
     *
     * @var string
     */
    protected $email_site;

    /**
     *
     * @var string
     */
    protected $complemento_site;

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
     * Method to set the value of field nome_site
     *
     * @param string $nome_site
     * @return $this
     */
    public function setNomeSite($nome_site)
    {
        $this->nome_site = $nome_site;

        return $this;
    }

    /**
     * Method to set the value of field rua_site
     *
     * @param string $rua_site
     * @return $this
     */
    public function setRuaSite($rua_site)
    {
        $this->rua_site = $rua_site;

        return $this;
    }

    /**
     * Method to set the value of field numero_site
     *
     * @param string $numero_site
     * @return $this
     */
    public function setNumeroSite($numero_site)
    {
        $this->numero_site = $numero_site;

        return $this;
    }

    /**
     * Method to set the value of field bairro_site
     *
     * @param string $bairro_site
     * @return $this
     */
    public function setBairroSite($bairro_site)
    {
        $this->bairro_site = $bairro_site;

        return $this;
    }

    /**
     * Method to set the value of field cidade_site
     *
     * @param string $cidade_site
     * @return $this
     */
    public function setCidadeSite($cidade_site)
    {
        $this->cidade_site = $cidade_site;

        return $this;
    }

    /**
     * Method to set the value of field uf_site
     *
     * @param string $uf_site
     * @return $this
     */
    public function setUfSite($uf_site)
    {
        $this->uf_site = $uf_site;

        return $this;
    }

    /**
     * Method to set the value of field cep_site
     *
     * @param string $cep_site
     * @return $this
     */
    public function setCepSite($cep_site)
    {
        $this->cep_site = $cep_site;

        return $this;
    }

    /**
     * Method to set the value of field tel_site
     *
     * @param string $tel_site
     * @return $this
     */
    public function setTelSite($tel_site)
    {
        $this->tel_site = $tel_site;

        return $this;
    }

    /**
     * Method to set the value of field email_site
     *
     * @param string $email_site
     * @return $this
     */
    public function setEmailSite($email_site)
    {
        $this->email_site = $email_site;

        return $this;
    }

    /**
     * Method to set the value of field complemento_site
     *
     * @param string $complemento_site
     * @return $this
     */
    public function setComplementoSite($complemento_site)
    {
        $this->complemento_site = $complemento_site;

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
     * Returns the value of field nome_site
     *
     * @return string
     */
    public function getNomeSite()
    {
        return $this->nome_site;
    }

    /**
     * Returns the value of field rua_site
     *
     * @return string
     */
    public function getRuaSite()
    {
        return $this->rua_site;
    }

    /**
     * Returns the value of field numero_site
     *
     * @return string
     */
    public function getNumeroSite()
    {
        return $this->numero_site;
    }

    /**
     * Returns the value of field bairro_site
     *
     * @return string
     */
    public function getBairroSite()
    {
        return $this->bairro_site;
    }

    /**
     * Returns the value of field cidade_site
     *
     * @return string
     */
    public function getCidadeSite()
    {
        return $this->cidade_site;
    }

    /**
     * Returns the value of field uf_site
     *
     * @return string
     */
    public function getUfSite()
    {
        return $this->uf_site;
    }

    /**
     * Returns the value of field cep_site
     *
     * @return string
     */
    public function getCepSite()
    {
        return $this->cep_site;
    }

    /**
     * Returns the value of field tel_site
     *
     * @return string
     */
    public function getTelSite()
    {
        return $this->tel_site;
    }

    /**
     * Returns the value of field email_site
     *
     * @return string
     */
    public function getEmailSite()
    {
        return $this->email_site;
    }

    /**
     * Returns the value of field complemento_site
     *
     * @return string
     */
    public function getComplementoSite()
    {
        return $this->complemento_site;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'site_dados_empresa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SiteDadosEmpresa[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SiteDadosEmpresa
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
            'nome_site' => 'nome_site',
            'rua_site' => 'rua_site',
            'numero_site' => 'numero_site',
            'bairro_site' => 'bairro_site',
            'cidade_site' => 'cidade_site',
            'uf_site' => 'uf_site',
            'cep_site' => 'cep_site',
            'tel_site' => 'tel_site',
            'email_site' => 'email_site',
            'complemento_site' => 'complemento_site'
        );
    }

}
