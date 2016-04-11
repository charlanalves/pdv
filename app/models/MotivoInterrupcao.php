<?php

namespace App\Models;

class MotivoInterrupcao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_motivo;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field cd_motivo
     *
     * @param integer $cd_motivo
     * @return $this
     */
    public function setCdMotivo($cd_motivo)
    {
        $this->cd_motivo = $cd_motivo;

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
     * Returns the value of field cd_motivo
     *
     * @return integer
     */
    public function getCdMotivo()
    {
        return $this->cd_motivo;
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
        $this->hasMany('cd_motivo', 'App\Models\InterrupcaoLinhaProducao', 'cd_motivo_interrupcao', array('alias' => 'InterrupcaoLinhaProducao'));
        $this->hasMany('cd_motivo', 'App\Models\Molde', 'motivo_interrupcao_automatica', array('alias' => 'Molde'));
        $this->hasMany('cd_motivo', 'App\Models\InterrupcaoLinhaProducao', 'cd_motivo_interrupcao', NULL);
        $this->hasMany('cd_motivo', 'App\Models\Molde', 'motivo_interrupcao_automatica', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'motivo_interrupcao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MotivoInterrupcao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MotivoInterrupcao
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
            'cd_motivo' => 'cd_motivo',
            'descricao' => 'descricao'
        );
    }

}
