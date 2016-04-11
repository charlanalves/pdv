<?php

namespace App\Models;

class ConhecimentoTransporteProdutos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_produto;

    /**
     *
     * @var integer
     */
    protected $cd_conhecimento_transporte;

    /**
     *
     * @var string
     */
    protected $cUnid;

    /**
     *
     * @var string
     */
    protected $tpMed;

    /**
     *
     * @var double
     */
    protected $qCarga;

    /**
     * Method to set the value of field cd_produto
     *
     * @param integer $cd_produto
     * @return $this
     */
    public function setCdProduto($cd_produto)
    {
        $this->cd_produto = $cd_produto;

        return $this;
    }

    /**
     * Method to set the value of field cd_conhecimento_transporte
     *
     * @param integer $cd_conhecimento_transporte
     * @return $this
     */
    public function setCdConhecimentoTransporte($cd_conhecimento_transporte)
    {
        $this->cd_conhecimento_transporte = $cd_conhecimento_transporte;

        return $this;
    }

    /**
     * Method to set the value of field cUnid
     *
     * @param string $cUnid
     * @return $this
     */
    public function setCUnid($cUnid)
    {
        $this->cUnid = $cUnid;

        return $this;
    }

    /**
     * Method to set the value of field tpMed
     *
     * @param string $tpMed
     * @return $this
     */
    public function setTpMed($tpMed)
    {
        $this->tpMed = $tpMed;

        return $this;
    }

    /**
     * Method to set the value of field qCarga
     *
     * @param double $qCarga
     * @return $this
     */
    public function setQCarga($qCarga)
    {
        $this->qCarga = $qCarga;

        return $this;
    }

    /**
     * Returns the value of field cd_produto
     *
     * @return integer
     */
    public function getCdProduto()
    {
        return $this->cd_produto;
    }

    /**
     * Returns the value of field cd_conhecimento_transporte
     *
     * @return integer
     */
    public function getCdConhecimentoTransporte()
    {
        return $this->cd_conhecimento_transporte;
    }

    /**
     * Returns the value of field cUnid
     *
     * @return string
     */
    public function getCUnid()
    {
        return $this->cUnid;
    }

    /**
     * Returns the value of field tpMed
     *
     * @return string
     */
    public function getTpMed()
    {
        return $this->tpMed;
    }

    /**
     * Returns the value of field qCarga
     *
     * @return double
     */
    public function getQCarga()
    {
        return $this->qCarga;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporte', 'cd_conhecimento_transporte', array('alias' => 'ConhecimentoTransporte'));
        $this->belongsTo('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporte', 'cd_conhecimento_transporte', array('foreignKey' => true,'alias' => 'ConhecimentoTransporte'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'conhecimento_transporte_produtos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConhecimentoTransporteProdutos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConhecimentoTransporteProdutos
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
            'cd_produto' => 'cd_produto',
            'cd_conhecimento_transporte' => 'cd_conhecimento_transporte',
            'cUnid' => 'cUnid',
            'tpMed' => 'tpMed',
            'qCarga' => 'qCarga'
        );
    }

}
