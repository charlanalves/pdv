<?php

namespace App\Models;

class OrcamentoHasCondPagto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_item;

    /**
     *
     * @var integer
     */
    protected $orcamento_cd_orcamento;

    /**
     *
     * @var integer
     */
    protected $idcond_pagto;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $qtd_vezes;

    /**
     *
     * @var integer
     */
    protected $padrao;

    /**
     * Method to set the value of field cd_item
     *
     * @param integer $cd_item
     * @return $this
     */
    public function setCdItem($cd_item)
    {
        $this->cd_item = $cd_item;

        return $this;
    }

    /**
     * Method to set the value of field orcamento_cd_orcamento
     *
     * @param integer $orcamento_cd_orcamento
     * @return $this
     */
    public function setOrcamentoCdOrcamento($orcamento_cd_orcamento)
    {
        $this->orcamento_cd_orcamento = $orcamento_cd_orcamento;

        return $this;
    }

    /**
     * Method to set the value of field idcond_pagto
     *
     * @param integer $idcond_pagto
     * @return $this
     */
    public function setIdcondPagto($idcond_pagto)
    {
        $this->idcond_pagto = $idcond_pagto;

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
     * Method to set the value of field qtd_vezes
     *
     * @param integer $qtd_vezes
     * @return $this
     */
    public function setQtdVezes($qtd_vezes)
    {
        $this->qtd_vezes = $qtd_vezes;

        return $this;
    }

    /**
     * Method to set the value of field padrao
     *
     * @param integer $padrao
     * @return $this
     */
    public function setPadrao($padrao)
    {
        $this->padrao = $padrao;

        return $this;
    }

    /**
     * Returns the value of field cd_item
     *
     * @return integer
     */
    public function getCdItem()
    {
        return $this->cd_item;
    }

    /**
     * Returns the value of field orcamento_cd_orcamento
     *
     * @return integer
     */
    public function getOrcamentoCdOrcamento()
    {
        return $this->orcamento_cd_orcamento;
    }

    /**
     * Returns the value of field idcond_pagto
     *
     * @return integer
     */
    public function getIdcondPagto()
    {
        return $this->idcond_pagto;
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
     * Returns the value of field qtd_vezes
     *
     * @return integer
     */
    public function getQtdVezes()
    {
        return $this->qtd_vezes;
    }

    /**
     * Returns the value of field padrao
     *
     * @return integer
     */
    public function getPadrao()
    {
        return $this->padrao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('alias' => 'CondPagto'));
        $this->belongsTo('orcamento_cd_orcamento', 'App\Models\Orcamento', 'cd_orcamento', array('alias' => 'Orcamento'));
        $this->belongsTo('idcond_pagto', 'App\Models\CondPagto', 'idcond_pagto', array('foreignKey' => true,'alias' => 'CondPagto'));
        $this->belongsTo('orcamento_cd_orcamento', 'App\Models\Orcamento', 'cd_orcamento', array('foreignKey' => true,'alias' => 'Orcamento'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'orcamento_has_cond_pagto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrcamentoHasCondPagto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrcamentoHasCondPagto
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
            'cd_item' => 'cd_item',
            'orcamento_cd_orcamento' => 'orcamento_cd_orcamento',
            'idcond_pagto' => 'idcond_pagto',
            'descricao' => 'descricao',
            'qtd_vezes' => 'qtd_vezes',
            'padrao' => 'padrao'
        );
    }

}
