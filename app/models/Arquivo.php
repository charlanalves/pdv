<?php

namespace App\Models;

class Arquivo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_arquivo;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $titulo;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $tamanho;

    /**
     *
     * @var string
     */
    protected $arquivo;

    /**
     *
     * @var string
     */
    protected $miniatura;

    /**
     *
     * @var string
     */
    protected $mimetype;

    /**
     *
     * @var integer
     */
    protected $oculto;

    /**
     *
     * @var integer
     */
    protected $download;

    /**
     *
     * @var integer
     */
    protected $aberto;

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
     * Method to set the value of field cd_arquivo
     *
     * @param integer $cd_arquivo
     * @return $this
     */
    public function setCdArquivo($cd_arquivo)
    {
        $this->cd_arquivo = $cd_arquivo;

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
     * Method to set the value of field titulo
     *
     * @param string $titulo
     * @return $this
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

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
     * Method to set the value of field tamanho
     *
     * @param string $tamanho
     * @return $this
     */
    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;

        return $this;
    }

    /**
     * Method to set the value of field arquivo
     *
     * @param string $arquivo
     * @return $this
     */
    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;

        return $this;
    }

    /**
     * Method to set the value of field miniatura
     *
     * @param string $miniatura
     * @return $this
     */
    public function setMiniatura($miniatura)
    {
        $this->miniatura = $miniatura;

        return $this;
    }

    /**
     * Method to set the value of field mimetype
     *
     * @param string $mimetype
     * @return $this
     */
    public function setMimetype($mimetype)
    {
        $this->mimetype = $mimetype;

        return $this;
    }

    /**
     * Method to set the value of field oculto
     *
     * @param integer $oculto
     * @return $this
     */
    public function setOculto($oculto)
    {
        $this->oculto = $oculto;

        return $this;
    }

    /**
     * Method to set the value of field download
     *
     * @param integer $download
     * @return $this
     */
    public function setDownload($download)
    {
        $this->download = $download;

        return $this;
    }

    /**
     * Method to set the value of field aberto
     *
     * @param integer $aberto
     * @return $this
     */
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;

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
     * Returns the value of field cd_arquivo
     *
     * @return integer
     */
    public function getCdArquivo()
    {
        return $this->cd_arquivo;
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
     * Returns the value of field titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
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
     * Returns the value of field tamanho
     *
     * @return string
     */
    public function getTamanho()
    {
        return $this->tamanho;
    }

    /**
     * Returns the value of field arquivo
     *
     * @return string
     */
    public function getArquivo()
    {
        return $this->arquivo;
    }

    /**
     * Returns the value of field miniatura
     *
     * @return string
     */
    public function getMiniatura()
    {
        return $this->miniatura;
    }

    /**
     * Returns the value of field mimetype
     *
     * @return string
     */
    public function getMimetype()
    {
        return $this->mimetype;
    }

    /**
     * Returns the value of field oculto
     *
     * @return integer
     */
    public function getOculto()
    {
        return $this->oculto;
    }

    /**
     * Returns the value of field download
     *
     * @return integer
     */
    public function getDownload()
    {
        return $this->download;
    }

    /**
     * Returns the value of field aberto
     *
     * @return integer
     */
    public function getAberto()
    {
        return $this->aberto;
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
        $this->hasMany('cd_arquivo', 'App\Models\ArquivoHasLancamento', 'arquivo_cd_arquivo', array('alias' => 'ArquivoHasLancamento'));
        $this->hasMany('cd_arquivo', 'App\Models\Imagem', 'arquivo_cd_arquivo', array('alias' => 'Imagem'));
        $this->hasMany('cd_arquivo', 'App\Models\Mensagem', 'arquivo_cd_arquivo', array('alias' => 'Mensagem'));
        $this->hasMany('cd_arquivo', 'App\Models\ProdutoHasArquivo', 'arquivo_cd_arquivo', array('alias' => 'ProdutoHasArquivo'));
        $this->hasMany('cd_arquivo', 'App\Models\ArquivoHasLancamento', 'arquivo_cd_arquivo', NULL);
        $this->hasMany('cd_arquivo', 'App\Models\Imagem', 'arquivo_cd_arquivo', NULL);
        $this->hasMany('cd_arquivo', 'App\Models\Mensagem', 'arquivo_cd_arquivo', NULL);
        $this->hasMany('cd_arquivo', 'App\Models\ProdutoHasArquivo', 'arquivo_cd_arquivo', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'arquivo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Arquivo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Arquivo
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
            'cd_arquivo' => 'cd_arquivo',
            'descricao' => 'descricao',
            'titulo' => 'titulo',
            'nome' => 'nome',
            'tamanho' => 'tamanho',
            'arquivo' => 'arquivo',
            'miniatura' => 'miniatura',
            'mimetype' => 'mimetype',
            'oculto' => 'oculto',
            'download' => 'download',
            'aberto' => 'aberto',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
