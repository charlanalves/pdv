<?php

namespace App\Models;

class OrcamentoRodape extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idrodape;

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
     * Method to set the value of field idrodape
     *
     * @param integer $idrodape
     * @return $this
     */
    public function setIdrodape($idrodape)
    {
        $this->idrodape = $idrodape;

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
     * Returns the value of field idrodape
     *
     * @return integer
     */
    public function getIdrodape()
    {
        return $this->idrodape;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'orcamento_rodape';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrcamentoRodape[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrcamentoRodape
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
            'idrodape' => 'idrodape',
            'cd_unidade' => 'cd_unidade',
            'descricao' => 'descricao'
        );
    }

}
