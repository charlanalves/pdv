<?php

namespace App\Models;

class PromocaoFornHomologado extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_promocao;

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
    protected $status_promocao;

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
     * Method to set the value of field cd_promocao
     *
     * @param integer $cd_promocao
     * @return $this
     */
    public function setCdPromocao($cd_promocao)
    {
        $this->cd_promocao = $cd_promocao;

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
     * Method to set the value of field status_promocao
     *
     * @param string $status_promocao
     * @return $this
     */
    public function setStatusPromocao($status_promocao)
    {
        $this->status_promocao = $status_promocao;

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
     * Returns the value of field cd_promocao
     *
     * @return integer
     */
    public function getCdPromocao()
    {
        return $this->cd_promocao;
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
     * Returns the value of field status_promocao
     *
     * @return string
     */
    public function getStatusPromocao()
    {
        return $this->status_promocao;
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
        $this->hasMany('cd_promocao', 'App\Models\PromocaoFornHomologadoHasArea', 'cd_promocao', array('alias' => 'PromocaoFornHomologadoHasArea'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->hasMany('cd_promocao', 'App\Models\PromocaoFornHomologadoHasArea', 'cd_promocao', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'promocao_forn_homologado';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PromocaoFornHomologado[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PromocaoFornHomologado
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
            'cd_promocao' => 'cd_promocao',
            'cd_empresa' => 'cd_empresa',
            'nome' => 'nome',
            'data_criacao' => 'data_criacao',
            'data_validade' => 'data_validade',
            'status_promocao' => 'status_promocao',
            'ativo' => 'ativo',
            'ordem' => 'ordem'
        );
    }

}
