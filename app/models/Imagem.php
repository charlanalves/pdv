<?php

namespace App\Models;

class Imagem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_imagem;

    /**
     *
     * @var integer
     */
    protected $arquivo_cd_arquivo;

    /**
     *
     * @var integer
     */
    protected $width;

    /**
     *
     * @var integer
     */
    protected $height;

    /**
     *
     * @var integer
     */
    protected $bits;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     * Method to set the value of field cd_imagem
     *
     * @param integer $cd_imagem
     * @return $this
     */
    public function setCdImagem($cd_imagem)
    {
        $this->cd_imagem = $cd_imagem;

        return $this;
    }

    /**
     * Method to set the value of field arquivo_cd_arquivo
     *
     * @param integer $arquivo_cd_arquivo
     * @return $this
     */
    public function setArquivoCdArquivo($arquivo_cd_arquivo)
    {
        $this->arquivo_cd_arquivo = $arquivo_cd_arquivo;

        return $this;
    }

    /**
     * Method to set the value of field width
     *
     * @param integer $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Method to set the value of field height
     *
     * @param integer $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Method to set the value of field bits
     *
     * @param integer $bits
     * @return $this
     */
    public function setBits($bits)
    {
        $this->bits = $bits;

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
     * Returns the value of field cd_imagem
     *
     * @return integer
     */
    public function getCdImagem()
    {
        return $this->cd_imagem;
    }

    /**
     * Returns the value of field arquivo_cd_arquivo
     *
     * @return integer
     */
    public function getArquivoCdArquivo()
    {
        return $this->arquivo_cd_arquivo;
    }

    /**
     * Returns the value of field width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Returns the value of field height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Returns the value of field bits
     *
     * @return integer
     */
    public function getBits()
    {
        return $this->bits;
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
     * Returns the value of field criado
     *
     * @return string
     */
    public function getCriado()
    {
        return $this->criado;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_imagem', 'App\Models\Banner', 'imagem_cd_imagem', array('alias' => 'Banner'));
        $this->hasMany('cd_imagem', 'App\Models\Informativo', 'imagem_cd_imagem', array('alias' => 'Informativo'));
        $this->hasMany('cd_imagem', 'App\Models\Mensagem', 'imagem_cd_imagem', array('alias' => 'Mensagem'));
        $this->hasMany('cd_imagem', 'App\Models\ProdutoHasImagem', 'imagem_cd_imagem', array('alias' => 'ProdutoHasImagem'));
        $this->belongsTo('arquivo_cd_arquivo', 'App\Models\Arquivo', 'cd_arquivo', array('alias' => 'Arquivo'));
        $this->hasMany('cd_imagem', 'App\Models\Banner', 'imagem_cd_imagem', NULL);
        $this->hasMany('cd_imagem', 'App\Models\Informativo', 'imagem_cd_imagem', NULL);
        $this->hasMany('cd_imagem', 'App\Models\Mensagem', 'imagem_cd_imagem', NULL);
        $this->hasMany('cd_imagem', 'App\Models\ProdutoHasImagem', 'imagem_cd_imagem', NULL);
        $this->belongsTo('arquivo_cd_arquivo', 'App\Models\Arquivo', 'cd_arquivo', array('foreignKey' => true,'alias' => 'Arquivo'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'imagem';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Imagem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Imagem
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
            'cd_imagem' => 'cd_imagem',
            'arquivo_cd_arquivo' => 'arquivo_cd_arquivo',
            'width' => 'width',
            'height' => 'height',
            'bits' => 'bits',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
