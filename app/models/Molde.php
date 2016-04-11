<?php

namespace App\Models;

class Molde extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_molde;

    /**
     *
     * @var integer
     */
    protected $unidade_cd_unidade;

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
     *
     * @var integer
     */
    protected $qtd_vezes_desmoldante;

    /**
     *
     * @var integer
     */
    protected $acumulado_vezes_desmoldante;

    /**
     *
     * @var integer
     */
    protected $motivo_interrupcao_automatica;

    /**
     *
     * @var string
     */
    protected $codigo_patrimonio;

    /**
     * Method to set the value of field cd_molde
     *
     * @param integer $cd_molde
     * @return $this
     */
    public function setCdMolde($cd_molde)
    {
        $this->cd_molde = $cd_molde;

        return $this;
    }

    /**
     * Method to set the value of field unidade_cd_unidade
     *
     * @param integer $unidade_cd_unidade
     * @return $this
     */
    public function setUnidadeCdUnidade($unidade_cd_unidade)
    {
        $this->unidade_cd_unidade = $unidade_cd_unidade;

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
     * Method to set the value of field qtd_vezes_desmoldante
     *
     * @param integer $qtd_vezes_desmoldante
     * @return $this
     */
    public function setQtdVezesDesmoldante($qtd_vezes_desmoldante)
    {
        $this->qtd_vezes_desmoldante = $qtd_vezes_desmoldante;

        return $this;
    }

    /**
     * Method to set the value of field acumulado_vezes_desmoldante
     *
     * @param integer $acumulado_vezes_desmoldante
     * @return $this
     */
    public function setAcumuladoVezesDesmoldante($acumulado_vezes_desmoldante)
    {
        $this->acumulado_vezes_desmoldante = $acumulado_vezes_desmoldante;

        return $this;
    }

    /**
     * Method to set the value of field motivo_interrupcao_automatica
     *
     * @param integer $motivo_interrupcao_automatica
     * @return $this
     */
    public function setMotivoInterrupcaoAutomatica($motivo_interrupcao_automatica)
    {
        $this->motivo_interrupcao_automatica = $motivo_interrupcao_automatica;

        return $this;
    }

    /**
     * Method to set the value of field codigo_patrimonio
     *
     * @param string $codigo_patrimonio
     * @return $this
     */
    public function setCodigoPatrimonio($codigo_patrimonio)
    {
        $this->codigo_patrimonio = $codigo_patrimonio;

        return $this;
    }

    /**
     * Returns the value of field cd_molde
     *
     * @return integer
     */
    public function getCdMolde()
    {
        return $this->cd_molde;
    }

    /**
     * Returns the value of field unidade_cd_unidade
     *
     * @return integer
     */
    public function getUnidadeCdUnidade()
    {
        return $this->unidade_cd_unidade;
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
     * Returns the value of field qtd_vezes_desmoldante
     *
     * @return integer
     */
    public function getQtdVezesDesmoldante()
    {
        return $this->qtd_vezes_desmoldante;
    }

    /**
     * Returns the value of field acumulado_vezes_desmoldante
     *
     * @return integer
     */
    public function getAcumuladoVezesDesmoldante()
    {
        return $this->acumulado_vezes_desmoldante;
    }

    /**
     * Returns the value of field motivo_interrupcao_automatica
     *
     * @return integer
     */
    public function getMotivoInterrupcaoAutomatica()
    {
        return $this->motivo_interrupcao_automatica;
    }

    /**
     * Returns the value of field codigo_patrimonio
     *
     * @return string
     */
    public function getCodigoPatrimonio()
    {
        return $this->codigo_patrimonio;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_molde', 'App\Models\CentroProducaoHasMolde', 'cd_molde', array('alias' => 'CentroProducaoHasMolde'));
        $this->hasMany('cd_molde', 'App\Models\InterrupcaoLinhaProducao', 'cd_molde', array('alias' => 'InterrupcaoLinhaProducao'));
        $this->hasMany('cd_molde', 'App\Models\Op', 'cd_molde', array('alias' => 'Op'));
        $this->hasMany('cd_molde', 'App\Models\ProdutoHasMolde', 'molde_cd_molde', array('alias' => 'ProdutoHasMolde'));
        $this->belongsTo('motivo_interrupcao_automatica', 'App\Models\MotivoInterrupcao', 'cd_motivo', array('alias' => 'MotivoInterrupcao'));
        $this->belongsTo('unidade_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('cd_molde', 'App\Models\CentroProducaoHasMolde', 'cd_molde', NULL);
        $this->hasMany('cd_molde', 'App\Models\InterrupcaoLinhaProducao', 'cd_molde', NULL);
        $this->hasMany('cd_molde', 'App\Models\Op', 'cd_molde', NULL);
        $this->hasMany('cd_molde', 'App\Models\ProdutoHasMolde', 'molde_cd_molde', NULL);
        $this->belongsTo('motivo_interrupcao_automatica', 'App\Models\MotivoInterrupcao', 'cd_motivo', array('foreignKey' => true,'alias' => 'MotivoInterrupcao'));
        $this->belongsTo('unidade_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'molde';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Molde[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Molde
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
            'cd_molde' => 'cd_molde',
            'unidade_cd_unidade' => 'unidade_cd_unidade',
            'descricao' => 'descricao',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'qtd_vezes_desmoldante' => 'qtd_vezes_desmoldante',
            'acumulado_vezes_desmoldante' => 'acumulado_vezes_desmoldante',
            'motivo_interrupcao_automatica' => 'motivo_interrupcao_automatica',
            'codigo_patrimonio' => 'codigo_patrimonio'
        );
    }

}
