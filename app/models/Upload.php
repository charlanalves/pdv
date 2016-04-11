<?php

namespace App\Models;

class Upload extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_upload;

    /**
     *
     * @var string
     */
    protected $nome_original;

    /**
     *
     * @var string
     */
    protected $nome_servidor;

    /**
     *
     * @var string
     */
    protected $criacao;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     * Method to set the value of field cd_upload
     *
     * @param integer $cd_upload
     * @return $this
     */
    public function setCdUpload($cd_upload)
    {
        $this->cd_upload = $cd_upload;

        return $this;
    }

    /**
     * Method to set the value of field nome_original
     *
     * @param string $nome_original
     * @return $this
     */
    public function setNomeOriginal($nome_original)
    {
        $this->nome_original = $nome_original;

        return $this;
    }

    /**
     * Method to set the value of field nome_servidor
     *
     * @param string $nome_servidor
     * @return $this
     */
    public function setNomeServidor($nome_servidor)
    {
        $this->nome_servidor = $nome_servidor;

        return $this;
    }

    /**
     * Method to set the value of field criacao
     *
     * @param string $criacao
     * @return $this
     */
    public function setCriacao($criacao)
    {
        $this->criacao = $criacao;

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
     * Returns the value of field cd_upload
     *
     * @return integer
     */
    public function getCdUpload()
    {
        return $this->cd_upload;
    }

    /**
     * Returns the value of field nome_original
     *
     * @return string
     */
    public function getNomeOriginal()
    {
        return $this->nome_original;
    }

    /**
     * Returns the value of field nome_servidor
     *
     * @return string
     */
    public function getNomeServidor()
    {
        return $this->nome_servidor;
    }

    /**
     * Returns the value of field criacao
     *
     * @return string
     */
    public function getCriacao()
    {
        return $this->criacao;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_upload', 'App\Models\Empresa', 'logo', array('alias' => 'Empresa'));
        $this->hasMany('cd_upload', 'App\Models\EmpresaHasArquivos', 'cd_upload', array('alias' => 'EmpresaHasArquivos'));
        $this->hasMany('cd_upload', 'App\Models\EmpresaHasLinkCentralcompras', 'cd_upload', array('alias' => 'EmpresaHasLinkCentralcompras'));
        $this->hasMany('cd_upload', 'App\Models\LancamentoHasUpload', 'cd_upload', array('alias' => 'LancamentoHasUpload'));
        $this->hasMany('cd_upload', 'App\Models\LiquidacaoHasUpload', 'cd_upload', array('alias' => 'LiquidacaoHasUpload'));
        $this->hasMany('cd_upload', 'App\Models\NfentradaHasUpload', 'cd_upload', array('alias' => 'NfentradaHasUpload'));
        $this->hasMany('cd_upload', 'App\Models\UploadHas', 'upload_cd_upload', array('alias' => 'UploadHas'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'upload';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Upload[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Upload
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
            'cd_upload' => 'cd_upload',
            'nome_original' => 'nome_original',
            'nome_servidor' => 'nome_servidor',
            'criacao' => 'criacao',
            'cd_unidade' => 'cd_unidade'
        );
    }

}
