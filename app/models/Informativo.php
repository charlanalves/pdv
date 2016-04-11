<?php

namespace App\Models;

class Informativo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_informativo;

    /**
     *
     * @var integer
     */
    protected $informativo_criado_cd_usuario;

    /**
     *
     * @var integer
     */
    protected $informativo_criado_cd_unidade;

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
    protected $informativo;

    /**
     *
     * @var integer
     */
    protected $tipo;

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
     * Method to set the value of field cd_informativo
     *
     * @param integer $cd_informativo
     * @return $this
     */
    public function setCdInformativo($cd_informativo)
    {
        $this->cd_informativo = $cd_informativo;

        return $this;
    }

    /**
     * Method to set the value of field informativo_criado_cd_usuario
     *
     * @param integer $informativo_criado_cd_usuario
     * @return $this
     */
    public function setInformativoCriadoCdUsuario($informativo_criado_cd_usuario)
    {
        $this->informativo_criado_cd_usuario = $informativo_criado_cd_usuario;

        return $this;
    }

    /**
     * Method to set the value of field informativo_criado_cd_unidade
     *
     * @param integer $informativo_criado_cd_unidade
     * @return $this
     */
    public function setInformativoCriadoCdUnidade($informativo_criado_cd_unidade)
    {
        $this->informativo_criado_cd_unidade = $informativo_criado_cd_unidade;

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
     * Method to set the value of field informativo
     *
     * @param string $informativo
     * @return $this
     */
    public function setInformativo($informativo)
    {
        $this->informativo = $informativo;

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
     * Returns the value of field cd_informativo
     *
     * @return integer
     */
    public function getCdInformativo()
    {
        return $this->cd_informativo;
    }

    /**
     * Returns the value of field informativo_criado_cd_usuario
     *
     * @return integer
     */
    public function getInformativoCriadoCdUsuario()
    {
        return $this->informativo_criado_cd_usuario;
    }

    /**
     * Returns the value of field informativo_criado_cd_unidade
     *
     * @return integer
     */
    public function getInformativoCriadoCdUnidade()
    {
        return $this->informativo_criado_cd_unidade;
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
     * Returns the value of field informativo
     *
     * @return string
     */
    public function getInformativo()
    {
        return $this->informativo;
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
        $this->hasMany('cd_informativo', 'App\Models\InformativoHasUsuario', 'informativo_cd_informativo', array('alias' => 'InformativoHasUsuario'));
        $this->belongsTo('informativo_criado_cd_unidade', 'App\Models\UnidadeNegocioHasUsuario', 'unidade_negocio_cd_unidade', array('alias' => 'UnidadeNegocioHasUsuario'));
        $this->belongsTo('usuario_cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('imagem_cd_imagem', 'App\Models\Imagem', 'cd_imagem', array('alias' => 'Imagem'));
        $this->belongsTo('empresa_franquia', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->hasMany('cd_informativo', 'App\Models\InformativoHasUsuario', 'informativo_cd_informativo', NULL);
        $this->belongsTo('usuario_cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
        $this->belongsTo('imagem_cd_imagem', 'App\Models\Imagem', 'cd_imagem', array('foreignKey' => true,'alias' => 'Imagem'));
        $this->belongsTo('empresa_franquia', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'informativo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Informativo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Informativo
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
            'cd_informativo' => 'cd_informativo',
            'informativo_criado_cd_usuario' => 'informativo_criado_cd_usuario',
            'informativo_criado_cd_unidade' => 'informativo_criado_cd_unidade',
            'usuario_cd_usuario' => 'usuario_cd_usuario',
            'empresa_franquia' => 'empresa_franquia',
            'imagem_cd_imagem' => 'imagem_cd_imagem',
            'nome' => 'nome',
            'informativo' => 'informativo',
            'tipo' => 'tipo',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
