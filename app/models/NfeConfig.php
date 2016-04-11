<?php

namespace App\Models;

class NfeConfig extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idnfe_config;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var string
     */
    protected $certificado;

    /**
     *
     * @var string
     */
    protected $senha_cerficado;

    /**
     *
     * @var string
     */
    protected $schema;

    /**
     *
     * @var string
     */
    protected $formato;

    /**
     *
     * @var integer
     */
    protected $canhoto;

    /**
     *
     * @var string
     */
    protected $pos_logo;

    /**
     *
     * @var string
     */
    protected $fonte;

    /**
     *
     * @var string
     */
    protected $url_webservices;

    /**
     *
     * @var integer
     */
    protected $ambiente;

    /**
     *
     * @var string
     */
    protected $email_emitente;

    /**
     *
     * @var string
     */
    protected $email_url_smtp;

    /**
     *
     * @var integer
     */
    protected $email_autentica;

    /**
     *
     * @var string
     */
    protected $email_usuario;

    /**
     *
     * @var string
     */
    protected $email_senha;

    /**
     *
     * @var integer
     */
    protected $email_protocolo;

    /**
     *
     * @var string
     */
    protected $email_porta;

    /**
     * Method to set the value of field idnfe_config
     *
     * @param integer $idnfe_config
     * @return $this
     */
    public function setIdnfeConfig($idnfe_config)
    {
        $this->idnfe_config = $idnfe_config;

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
     * Method to set the value of field certificado
     *
     * @param string $certificado
     * @return $this
     */
    public function setCertificado($certificado)
    {
        $this->certificado = $certificado;

        return $this;
    }

    /**
     * Method to set the value of field senha_cerficado
     *
     * @param string $senha_cerficado
     * @return $this
     */
    public function setSenhaCerficado($senha_cerficado)
    {
        $this->senha_cerficado = $senha_cerficado;

        return $this;
    }

    /**
     * Method to set the value of field schema
     *
     * @param string $schema
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * Method to set the value of field formato
     *
     * @param string $formato
     * @return $this
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Method to set the value of field canhoto
     *
     * @param integer $canhoto
     * @return $this
     */
    public function setCanhoto($canhoto)
    {
        $this->canhoto = $canhoto;

        return $this;
    }

    /**
     * Method to set the value of field pos_logo
     *
     * @param string $pos_logo
     * @return $this
     */
    public function setPosLogo($pos_logo)
    {
        $this->pos_logo = $pos_logo;

        return $this;
    }

    /**
     * Method to set the value of field fonte
     *
     * @param string $fonte
     * @return $this
     */
    public function setFonte($fonte)
    {
        $this->fonte = $fonte;

        return $this;
    }

    /**
     * Method to set the value of field url_webservices
     *
     * @param string $url_webservices
     * @return $this
     */
    public function setUrlWebservices($url_webservices)
    {
        $this->url_webservices = $url_webservices;

        return $this;
    }

    /**
     * Method to set the value of field ambiente
     *
     * @param integer $ambiente
     * @return $this
     */
    public function setAmbiente($ambiente)
    {
        $this->ambiente = $ambiente;

        return $this;
    }

    /**
     * Method to set the value of field email_emitente
     *
     * @param string $email_emitente
     * @return $this
     */
    public function setEmailEmitente($email_emitente)
    {
        $this->email_emitente = $email_emitente;

        return $this;
    }

    /**
     * Method to set the value of field email_url_smtp
     *
     * @param string $email_url_smtp
     * @return $this
     */
    public function setEmailUrlSmtp($email_url_smtp)
    {
        $this->email_url_smtp = $email_url_smtp;

        return $this;
    }

    /**
     * Method to set the value of field email_autentica
     *
     * @param integer $email_autentica
     * @return $this
     */
    public function setEmailAutentica($email_autentica)
    {
        $this->email_autentica = $email_autentica;

        return $this;
    }

    /**
     * Method to set the value of field email_usuario
     *
     * @param string $email_usuario
     * @return $this
     */
    public function setEmailUsuario($email_usuario)
    {
        $this->email_usuario = $email_usuario;

        return $this;
    }

    /**
     * Method to set the value of field email_senha
     *
     * @param string $email_senha
     * @return $this
     */
    public function setEmailSenha($email_senha)
    {
        $this->email_senha = $email_senha;

        return $this;
    }

    /**
     * Method to set the value of field email_protocolo
     *
     * @param integer $email_protocolo
     * @return $this
     */
    public function setEmailProtocolo($email_protocolo)
    {
        $this->email_protocolo = $email_protocolo;

        return $this;
    }

    /**
     * Method to set the value of field email_porta
     *
     * @param string $email_porta
     * @return $this
     */
    public function setEmailPorta($email_porta)
    {
        $this->email_porta = $email_porta;

        return $this;
    }

    /**
     * Returns the value of field idnfe_config
     *
     * @return integer
     */
    public function getIdnfeConfig()
    {
        return $this->idnfe_config;
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
     * Returns the value of field certificado
     *
     * @return string
     */
    public function getCertificado()
    {
        return $this->certificado;
    }

    /**
     * Returns the value of field senha_cerficado
     *
     * @return string
     */
    public function getSenhaCerficado()
    {
        return $this->senha_cerficado;
    }

    /**
     * Returns the value of field schema
     *
     * @return string
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Returns the value of field formato
     *
     * @return string
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * Returns the value of field canhoto
     *
     * @return integer
     */
    public function getCanhoto()
    {
        return $this->canhoto;
    }

    /**
     * Returns the value of field pos_logo
     *
     * @return string
     */
    public function getPosLogo()
    {
        return $this->pos_logo;
    }

    /**
     * Returns the value of field fonte
     *
     * @return string
     */
    public function getFonte()
    {
        return $this->fonte;
    }

    /**
     * Returns the value of field url_webservices
     *
     * @return string
     */
    public function getUrlWebservices()
    {
        return $this->url_webservices;
    }

    /**
     * Returns the value of field ambiente
     *
     * @return integer
     */
    public function getAmbiente()
    {
        return $this->ambiente;
    }

    /**
     * Returns the value of field email_emitente
     *
     * @return string
     */
    public function getEmailEmitente()
    {
        return $this->email_emitente;
    }

    /**
     * Returns the value of field email_url_smtp
     *
     * @return string
     */
    public function getEmailUrlSmtp()
    {
        return $this->email_url_smtp;
    }

    /**
     * Returns the value of field email_autentica
     *
     * @return integer
     */
    public function getEmailAutentica()
    {
        return $this->email_autentica;
    }

    /**
     * Returns the value of field email_usuario
     *
     * @return string
     */
    public function getEmailUsuario()
    {
        return $this->email_usuario;
    }

    /**
     * Returns the value of field email_senha
     *
     * @return string
     */
    public function getEmailSenha()
    {
        return $this->email_senha;
    }

    /**
     * Returns the value of field email_protocolo
     *
     * @return integer
     */
    public function getEmailProtocolo()
    {
        return $this->email_protocolo;
    }

    /**
     * Returns the value of field email_porta
     *
     * @return string
     */
    public function getEmailPorta()
    {
        return $this->email_porta;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfe_config';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfeConfig[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfeConfig
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
            'idnfe_config' => 'idnfe_config',
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'certificado' => 'certificado',
            'senha_cerficado' => 'senha_cerficado',
            'schema' => 'schema',
            'formato' => 'formato',
            'canhoto' => 'canhoto',
            'pos_logo' => 'pos_logo',
            'fonte' => 'fonte',
            'url_webservices' => 'url_webservices',
            'ambiente' => 'ambiente',
            'email_emitente' => 'email_emitente',
            'email_url_smtp' => 'email_url_smtp',
            'email_autentica' => 'email_autentica',
            'email_usuario' => 'email_usuario',
            'email_senha' => 'email_senha',
            'email_protocolo' => 'email_protocolo',
            'email_porta' => 'email_porta'
        );
    }

}
