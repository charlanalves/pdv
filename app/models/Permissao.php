<?php

namespace App\Models;

class Permissao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_permissao;

    /**
     *
     * @var integer
     */
    protected $rotina;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_has_usuario_usuario_cd_usuario;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_has_usuario_Unidade_negocio_cd_unidade;

    /**
     *
     * @var integer
     */
    protected $inserir;

    /**
     *
     * @var integer
     */
    protected $atualizar;

    /**
     *
     * @var integer
     */
    protected $deletar;

    /**
     *
     * @var integer
     */
    protected $visualizar;

    /**
     *
     * @var string
     */
    protected $hash;

    /**
     * Method to set the value of field cd_permissao
     *
     * @param integer $cd_permissao
     * @return $this
     */
    public function setCdPermissao($cd_permissao)
    {
        $this->cd_permissao = $cd_permissao;

        return $this;
    }

    /**
     * Method to set the value of field rotina
     *
     * @param integer $rotina
     * @return $this
     */
    public function setRotina($rotina)
    {
        $this->rotina = $rotina;

        return $this;
    }

    /**
     * Method to set the value of field unidade_negocio_has_usuario_usuario_cd_usuario
     *
     * @param integer $unidade_negocio_has_usuario_usuario_cd_usuario
     * @return $this
     */
    public function setUnidadeNegocioHasUsuarioUsuarioCdUsuario($unidade_negocio_has_usuario_usuario_cd_usuario)
    {
        $this->unidade_negocio_has_usuario_usuario_cd_usuario = $unidade_negocio_has_usuario_usuario_cd_usuario;

        return $this;
    }

    /**
     * Method to set the value of field unidade_negocio_has_usuario_Unidade_negocio_cd_unidade
     *
     * @param integer $unidade_negocio_has_usuario_Unidade_negocio_cd_unidade
     * @return $this
     */
    public function setUnidadeNegocioHasUsuarioUnidadeNegocioCdUnidade($unidade_negocio_has_usuario_Unidade_negocio_cd_unidade)
    {
        $this->unidade_negocio_has_usuario_Unidade_negocio_cd_unidade = $unidade_negocio_has_usuario_Unidade_negocio_cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field inserir
     *
     * @param integer $inserir
     * @return $this
     */
    public function setInserir($inserir)
    {
        $this->inserir = $inserir;

        return $this;
    }

    /**
     * Method to set the value of field atualizar
     *
     * @param integer $atualizar
     * @return $this
     */
    public function setAtualizar($atualizar)
    {
        $this->atualizar = $atualizar;

        return $this;
    }

    /**
     * Method to set the value of field deletar
     *
     * @param integer $deletar
     * @return $this
     */
    public function setDeletar($deletar)
    {
        $this->deletar = $deletar;

        return $this;
    }

    /**
     * Method to set the value of field visualizar
     *
     * @param integer $visualizar
     * @return $this
     */
    public function setVisualizar($visualizar)
    {
        $this->visualizar = $visualizar;

        return $this;
    }

    /**
     * Method to set the value of field hash
     *
     * @param string $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Returns the value of field cd_permissao
     *
     * @return integer
     */
    public function getCdPermissao()
    {
        return $this->cd_permissao;
    }

    /**
     * Returns the value of field rotina
     *
     * @return integer
     */
    public function getRotina()
    {
        return $this->rotina;
    }

    /**
     * Returns the value of field unidade_negocio_has_usuario_usuario_cd_usuario
     *
     * @return integer
     */
    public function getUnidadeNegocioHasUsuarioUsuarioCdUsuario()
    {
        return $this->unidade_negocio_has_usuario_usuario_cd_usuario;
    }

    /**
     * Returns the value of field unidade_negocio_has_usuario_Unidade_negocio_cd_unidade
     *
     * @return integer
     */
    public function getUnidadeNegocioHasUsuarioUnidadeNegocioCdUnidade()
    {
        return $this->unidade_negocio_has_usuario_Unidade_negocio_cd_unidade;
    }

    /**
     * Returns the value of field inserir
     *
     * @return integer
     */
    public function getInserir()
    {
        return $this->inserir;
    }

    /**
     * Returns the value of field atualizar
     *
     * @return integer
     */
    public function getAtualizar()
    {
        return $this->atualizar;
    }

    /**
     * Returns the value of field deletar
     *
     * @return integer
     */
    public function getDeletar()
    {
        return $this->deletar;
    }

    /**
     * Returns the value of field visualizar
     *
     * @return integer
     */
    public function getVisualizar()
    {
        return $this->visualizar;
    }

    /**
     * Returns the value of field hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('unidade_negocio_has_usuario_Unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocioHasUsuario', 'unidade_negocio_cd_unidade', array('alias' => 'UnidadeNegocioHasUsuario'));
        $this->belongsTo('rotina', 'App\Models\Rotina', 'cd_rotina', array('alias' => 'Rotina'));
        $this->belongsTo('rotina', 'App\Models\Rotina', 'cd_rotina', array('foreignKey' => true,'alias' => 'Rotina'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'permissao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Permissao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Permissao
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
            'cd_permissao' => 'cd_permissao',
            'rotina' => 'rotina',
            'unidade_negocio_has_usuario_usuario_cd_usuario' => 'unidade_negocio_has_usuario_usuario_cd_usuario',
            'unidade_negocio_has_usuario_Unidade_negocio_cd_unidade' => 'unidade_negocio_has_usuario_Unidade_negocio_cd_unidade',
            'inserir' => 'inserir',
            'atualizar' => 'atualizar',
            'deletar' => 'deletar',
            'visualizar' => 'visualizar',
            'hash' => 'hash'
        );
    }

}
