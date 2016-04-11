<?php

namespace App\Models;

class Informacoesccompra extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_informacao;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $data_criacao;

    /**
     *
     * @var string
     */
    protected $data_validade;

    /**
     *
     * @var string
     */
    protected $status_informacao;

    /**
     *
     * @var string
     */
    protected $ativo;

    /**
     *
     * @var integer
     */
    protected $ordem;

    /**
     * Method to set the value of field cd_informacao
     *
     * @param integer $cd_informacao
     * @return $this
     */
    public function setCdInformacao($cd_informacao)
    {
        $this->cd_informacao = $cd_informacao;

        return $this;
    }

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
     * Method to set the value of field data_criacao
     *
     * @param string $data_criacao
     * @return $this
     */
    public function setDataCriacao($data_criacao)
    {
        $this->data_criacao = $data_criacao;

        return $this;
    }

    /**
     * Method to set the value of field data_validade
     *
     * @param string $data_validade
     * @return $this
     */
    public function setDataValidade($data_validade)
    {
        $this->data_validade = $data_validade;

        return $this;
    }

    /**
     * Method to set the value of field status_informacao
     *
     * @param string $status_informacao
     * @return $this
     */
    public function setStatusInformacao($status_informacao)
    {
        $this->status_informacao = $status_informacao;

        return $this;
    }

    /**
     * Method to set the value of field ativo
     *
     * @param string $ativo
     * @return $this
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Method to set the value of field ordem
     *
     * @param integer $ordem
     * @return $this
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Returns the value of field cd_informacao
     *
     * @return integer
     */
    public function getCdInformacao()
    {
        return $this->cd_informacao;
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
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field data_criacao
     *
     * @return string
     */
    public function getDataCriacao()
    {
        return $this->data_criacao;
    }

    /**
     * Returns the value of field data_validade
     *
     * @return string
     */
    public function getDataValidade()
    {
        return $this->data_validade;
    }

    /**
     * Returns the value of field status_informacao
     *
     * @return string
     */
    public function getStatusInformacao()
    {
        return $this->status_informacao;
    }

    /**
     * Returns the value of field ativo
     *
     * @return string
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Returns the value of field ordem
     *
     * @return integer
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_informacao', 'App\Models\InformacoesccompraHasArea', 'cd_informacao', array('alias' => 'InformacoesccompraHasArea'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->hasMany('cd_informacao', 'App\Models\InformacoesccompraHasArea', 'cd_informacao', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'informacoesccompra';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Informacoesccompra[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Informacoesccompra
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
            'cd_informacao' => 'cd_informacao',
            'cd_empresa' => 'cd_empresa',
            'nome' => 'nome',
            'data_criacao' => 'data_criacao',
            'data_validade' => 'data_validade',
            'status_informacao' => 'status_informacao',
            'ativo' => 'ativo',
            'ordem' => 'ordem'
        );
    }

}
