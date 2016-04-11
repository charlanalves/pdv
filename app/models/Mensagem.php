<?php

namespace App\Models;

class Mensagem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_mensagem;

    /**
     *
     * @var integer
     */
    protected $mensagem_criado_cd_usuario;

    /**
     *
     * @var integer
     */
    protected $mensagem_criado_cd_unidade;

    /**
     *
     * @var integer
     */
    protected $usuario_cd_usuario;

    /**
     *
     * @var integer
     */
    protected $empresa_franquia;

    /**
     *
     * @var integer
     */
    protected $arquivo_cd_arquivo;

    /**
     *
     * @var integer
     */
    protected $imagem_cd_imagem;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $mensagem;

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
     * Method to set the value of field cd_mensagem
     *
     * @param integer $cd_mensagem
     * @return $this
     */
    public function setCdMensagem($cd_mensagem)
    {
        $this->cd_mensagem = $cd_mensagem;

        return $this;
    }

    /**
     * Method to set the value of field mensagem_criado_cd_usuario
     *
     * @param integer $mensagem_criado_cd_usuario
     * @return $this
     */
    public function setMensagemCriadoCdUsuario($mensagem_criado_cd_usuario)
    {
        $this->mensagem_criado_cd_usuario = $mensagem_criado_cd_usuario;

        return $this;
    }

    /**
     * Method to set the value of field mensagem_criado_cd_unidade
     *
     * @param integer $mensagem_criado_cd_unidade
     * @return $this
     */
    public function setMensagemCriadoCdUnidade($mensagem_criado_cd_unidade)
    {
        $this->mensagem_criado_cd_unidade = $mensagem_criado_cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field usuario_cd_usuario
     *
     * @param integer $usuario_cd_usuario
     * @return $this
     */
    public function setUsuarioCdUsuario($usuario_cd_usuario)
    {
        $this->usuario_cd_usuario = $usuario_cd_usuario;

        return $this;
    }

    /**
     * Method to set the value of field empresa_franquia
     *
     * @param integer $empresa_franquia
     * @return $this
     */
    public function setEmpresaFranquia($empresa_franquia)
    {
        $this->empresa_franquia = $empresa_franquia;

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
     * Method to set the value of field imagem_cd_imagem
     *
     * @param integer $imagem_cd_imagem
     * @return $this
     */
    public function setImagemCdImagem($imagem_cd_imagem)
    {
        $this->imagem_cd_imagem = $imagem_cd_imagem;

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
     * Method to set the value of field mensagem
     *
     * @param string $mensagem
     * @return $this
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;

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
     * Returns the value of field cd_mensagem
     *
     * @return integer
     */
    public function getCdMensagem()
    {
        return $this->cd_mensagem;
    }

    /**
     * Returns the value of field mensagem_criado_cd_usuario
     *
     * @return integer
     */
    public function getMensagemCriadoCdUsuario()
    {
        return $this->mensagem_criado_cd_usuario;
    }

    /**
     * Returns the value of field mensagem_criado_cd_unidade
     *
     * @return integer
     */
    public function getMensagemCriadoCdUnidade()
    {
        return $this->mensagem_criado_cd_unidade;
    }

    /**
     * Returns the value of field usuario_cd_usuario
     *
     * @return integer
     */
    public function getUsuarioCdUsuario()
    {
        return $this->usuario_cd_usuario;
    }

    /**
     * Returns the value of field empresa_franquia
     *
     * @return integer
     */
    public function getEmpresaFranquia()
    {
        return $this->empresa_franquia;
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
     * Returns the value of field imagem_cd_imagem
     *
     * @return integer
     */
    public function getImagemCdImagem()
    {
        return $this->imagem_cd_imagem;
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
     * Returns the value of field mensagem
     *
     * @return string
     */
    public function getMensagem()
    {
        return $this->mensagem;
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
        $this->hasMany('cd_mensagem', 'App\Models\MensagemHasUsuario', 'mensagem_cd_mensagem', array('alias' => 'MensagemHasUsuario'));
        $this->belongsTo('mensagem_criado_cd_unidade', 'App\Models\UnidadeNegocioHasUsuario', 'unidade_negocio_cd_unidade', array('alias' => 'UnidadeNegocioHasUsuario'));
        $this->belongsTo('imagem_cd_imagem', 'App\Models\Imagem', 'cd_imagem', array('alias' => 'Imagem'));
        $this->belongsTo('usuario_cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('empresa_franquia', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('arquivo_cd_arquivo', 'App\Models\Arquivo', 'cd_arquivo', array('alias' => 'Arquivo'));
        $this->hasMany('cd_mensagem', 'App\Models\MensagemHasUsuario', 'mensagem_cd_mensagem', NULL);
        $this->belongsTo('imagem_cd_imagem', 'App\Models\Imagem', 'cd_imagem', array('foreignKey' => true,'alias' => 'Imagem'));
        $this->belongsTo('usuario_cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
        $this->belongsTo('empresa_franquia', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('arquivo_cd_arquivo', 'App\Models\Arquivo', 'cd_arquivo', array('foreignKey' => true,'alias' => 'Arquivo'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'mensagem';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Mensagem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Mensagem
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
            'cd_mensagem' => 'cd_mensagem',
            'mensagem_criado_cd_usuario' => 'mensagem_criado_cd_usuario',
            'mensagem_criado_cd_unidade' => 'mensagem_criado_cd_unidade',
            'usuario_cd_usuario' => 'usuario_cd_usuario',
            'empresa_franquia' => 'empresa_franquia',
            'arquivo_cd_arquivo' => 'arquivo_cd_arquivo',
            'imagem_cd_imagem' => 'imagem_cd_imagem',
            'nome' => 'nome',
            'mensagem' => 'mensagem',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
