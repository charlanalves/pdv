<?php

namespace App\Models;

class Ccusto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idccusto;

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
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     * Method to set the value of field idccusto
     *
     * @param integer $idccusto
     * @return $this
     */
    public function setIdccusto($idccusto)
    {
        $this->idccusto = $idccusto;

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
     * Returns the value of field idccusto
     *
     * @return integer
     */
    public function getIdccusto()
    {
        return $this->idccusto;
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
        $this->hasMany('idccusto', 'App\Models\Lancamento', 'idccusto', array('alias' => 'Lancamento'));
        $this->hasMany('idccusto', 'App\Models\LancamentoHasLiquidacao', 'idcusto', array('alias' => 'LancamentoHasLiquidacao'));
        $this->hasMany('idccusto', 'App\Models\LancamentoRateio', 'idccusto', array('alias' => 'LancamentoRateio'));
        $this->hasMany('idccusto', 'App\Models\Liquidacao', 'idccusto', array('alias' => 'Liquidacao'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('idccusto', 'App\Models\Lancamento', 'idccusto', NULL);
        $this->hasMany('idccusto', 'App\Models\LancamentoHasLiquidacao', 'idcusto', NULL);
        $this->hasMany('idccusto', 'App\Models\LancamentoRateio', 'idccusto', NULL);
        $this->hasMany('idccusto', 'App\Models\Liquidacao', 'idccusto', NULL);
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ccusto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ccusto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ccusto
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
            'idccusto' => 'idccusto',
            'cd_unidade' => 'cd_unidade',
            'descricao' => 'descricao',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'ativo' => 'ativo'
        );
    }

}
