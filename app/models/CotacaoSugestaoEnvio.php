<?php

namespace App\Models;

class CotacaoSugestaoEnvio extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idsugestao;

    /**
     *
     * @var string
     */
    protected $cidade;

    /**
     *
     * @var string
     */
    protected $uf;

    /**
     *
     * @var integer
     */
    protected $franquia;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     * Method to set the value of field idsugestao
     *
     * @param integer $idsugestao
     * @return $this
     */
    public function setIdsugestao($idsugestao)
    {
        $this->idsugestao = $idsugestao;

        return $this;
    }

    /**
     * Method to set the value of field cidade
     *
     * @param string $cidade
     * @return $this
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Method to set the value of field uf
     *
     * @param string $uf
     * @return $this
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Method to set the value of field franquia
     *
     * @param integer $franquia
     * @return $this
     */
    public function setFranquia($franquia)
    {
        $this->franquia = $franquia;

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
     * Returns the value of field idsugestao
     *
     * @return integer
     */
    public function getIdsugestao()
    {
        return $this->idsugestao;
    }

    /**
     * Returns the value of field cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Returns the value of field uf
     *
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Returns the value of field franquia
     *
     * @return integer
     */
    public function getFranquia()
    {
        return $this->franquia;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('franquia', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('franquia', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cotacao_sugestao_envio';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CotacaoSugestaoEnvio[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CotacaoSugestaoEnvio
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
            'idsugestao' => 'idsugestao',
            'cidade' => 'cidade',
            'uf' => 'uf',
            'franquia' => 'franquia',
            'ativo' => 'ativo'
        );
    }

}
