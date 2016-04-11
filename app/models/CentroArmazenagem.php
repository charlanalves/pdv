<?php

namespace App\Models;

class CentroArmazenagem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $Cd_armazenagem;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var string
     */
    protected $descricao;

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
     * Method to set the value of field Cd_armazenagem
     *
     * @param integer $Cd_armazenagem
     * @return $this
     */
    public function setCdArmazenagem($Cd_armazenagem)
    {
        $this->Cd_armazenagem = $Cd_armazenagem;

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
     * Returns the value of field Cd_armazenagem
     *
     * @return integer
     */
    public function getCdArmazenagem()
    {
        return $this->Cd_armazenagem;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
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
        $this->hasMany('Cd_armazenagem', 'App\Models\Op', 'cd_armazenagem', array('alias' => 'Op'));
        $this->hasMany('Cd_armazenagem', 'App\Models\Produto', 'Cd_armazenagemPadraoEnt', array('alias' => 'Produto'));
        $this->hasMany('Cd_armazenagem', 'App\Models\Produto', 'Cd_armazenagemPadraoSai', array('alias' => 'Produto'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('Cd_armazenagem', 'App\Models\Op', 'cd_armazenagem', NULL);
        $this->hasMany('Cd_armazenagem', 'App\Models\Produto', 'Cd_armazenagemPadraoEnt', NULL);
        $this->hasMany('Cd_armazenagem', 'App\Models\Produto', 'Cd_armazenagemPadraoSai', NULL);
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'centroArmazenagem';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CentroArmazenagem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CentroArmazenagem
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
            'Cd_armazenagem' => 'Cd_armazenagem',
            'cd_unidade' => 'cd_unidade',
            'descricao' => 'descricao',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
