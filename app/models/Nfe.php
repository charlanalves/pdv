<?php

namespace App\Models;

class Nfe extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $nfeid;

    /**
     *
     * @var string
     */
    protected $nf;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var string
     */
    protected $status;

    /**
     * Method to set the value of field nfeid
     *
     * @param integer $nfeid
     * @return $this
     */
    public function setNfeid($nfeid)
    {
        $this->nfeid = $nfeid;

        return $this;
    }

    /**
     * Method to set the value of field nf
     *
     * @param string $nf
     * @return $this
     */
    public function setNf($nf)
    {
        $this->nf = $nf;

        return $this;
    }

    /**
     * Method to set the value of field unidade_negocio_cd_unidade
     *
     * @param integer $unidade_negocio_cd_unidade
     * @return $this
     */
    public function setUnidadeNegocioCdUnidade($unidade_negocio_cd_unidade)
    {
        $this->unidade_negocio_cd_unidade = $unidade_negocio_cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Returns the value of field nfeid
     *
     * @return integer
     */
    public function getNfeid()
    {
        return $this->nfeid;
    }

    /**
     * Returns the value of field nf
     *
     * @return string
     */
    public function getNf()
    {
        return $this->nf;
    }

    /**
     * Returns the value of field unidade_negocio_cd_unidade
     *
     * @return integer
     */
    public function getUnidadeNegocioCdUnidade()
    {
        return $this->unidade_negocio_cd_unidade;
    }

    /**
     * Returns the value of field status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfe';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Nfe[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Nfe
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
            'nfeid' => 'nfeid',
            'nf' => 'nf',
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'status' => 'status'
        );
    }

}
