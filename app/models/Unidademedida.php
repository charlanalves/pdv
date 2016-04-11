<?php

namespace App\Models;

class Unidademedida extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_medida;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $sigla;

    /**
     * Method to set the value of field cd_medida
     *
     * @param integer $cd_medida
     * @return $this
     */
    public function setCdMedida($cd_medida)
    {
        $this->cd_medida = $cd_medida;

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
     * Method to set the value of field sigla
     *
     * @param string $sigla
     * @return $this
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Returns the value of field cd_medida
     *
     * @return integer
     */
    public function getCdMedida()
    {
        return $this->cd_medida;
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
     * Returns the value of field sigla
     *
     * @return string
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_medida', 'App\Models\NfservicoItem', 'unidadeMedida', array('alias' => 'NfservicoItem'));
        $this->hasMany('cd_medida', 'App\Models\Produto', 'cd_medida_venda', array('alias' => 'Produto'));
        $this->hasMany('cd_medida', 'App\Models\Produto', 'cd_medida_embalagem', array('alias' => 'Produto'));
        $this->hasMany('cd_medida', 'App\Models\Produto', 'cd_medida', array('alias' => 'Produto'));
        $this->hasMany('cd_medida', 'App\Models\TabelaPrecosHasProdutos', 'cd_medida', array('alias' => 'TabelaPrecosHasProdutos'));
        $this->hasMany('cd_medida', 'App\Models\TabelaPrecosHasProdutos', 'cd_medida_venda', array('alias' => 'TabelaPrecosHasProdutos'));
        $this->hasMany('cd_medida', 'App\Models\NfservicoItem', 'unidadeMedida', NULL);
        $this->hasMany('cd_medida', 'App\Models\Produto', 'cd_medida_venda', NULL);
        $this->hasMany('cd_medida', 'App\Models\Produto', 'cd_medida_embalagem', NULL);
        $this->hasMany('cd_medida', 'App\Models\Produto', 'cd_medida', NULL);
        $this->hasMany('cd_medida', 'App\Models\TabelaPrecosHasProdutos', 'cd_medida', NULL);
        $this->hasMany('cd_medida', 'App\Models\TabelaPrecosHasProdutos', 'cd_medida_venda', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'unidademedida';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Unidademedida[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Unidademedida
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
            'cd_medida' => 'cd_medida',
            'descricao' => 'descricao',
            'sigla' => 'sigla'
        );
    }

}
