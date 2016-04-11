<?php

namespace App\Models;

class ConhecimentoTransporteHasNf extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_conhecimento_transporte;

    /**
     *
     * @var integer
     */
    protected $cd_nfentrada;

    /**
     *
     * @var integer
     */
    protected $cd_nfsaida;

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
     * Method to set the value of field cd_nfentrada
     *
     * @param integer $cd_nfentrada
     * @return $this
     */
    public function setCdNfentrada($cd_nfentrada)
    {
        $this->cd_nfentrada = $cd_nfentrada;

        return $this;
    }

    /**
     * Method to set the value of field cd_nfsaida
     *
     * @param integer $cd_nfsaida
     * @return $this
     */
    public function setCdNfsaida($cd_nfsaida)
    {
        $this->cd_nfsaida = $cd_nfsaida;

        return $this;
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
     * Returns the value of field cd_nfentrada
     *
     * @return integer
     */
    public function getCdNfentrada()
    {
        return $this->cd_nfentrada;
    }

    /**
     * Returns the value of field cd_nfsaida
     *
     * @return integer
     */
    public function getCdNfsaida()
    {
        return $this->cd_nfsaida;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporte', 'cd_conhecimento_transporte', array('alias' => 'ConhecimentoTransporte'));
        $this->belongsTo('cd_nfentrada', 'App\Models\Nfentrada', 'cd_nfentrada', array('alias' => 'Nfentrada'));
        $this->belongsTo('cd_nfsaida', 'App\Models\Nfsaida', 'cd_nfsaida', array('alias' => 'Nfsaida'));
        $this->belongsTo('cd_conhecimento_transporte', 'App\Models\ConhecimentoTransporte', 'cd_conhecimento_transporte', array('foreignKey' => true,'alias' => 'ConhecimentoTransporte'));
        $this->belongsTo('cd_nfentrada', 'App\Models\Nfentrada', 'cd_nfentrada', array('foreignKey' => true,'alias' => 'Nfentrada'));
        $this->belongsTo('cd_nfsaida', 'App\Models\Nfsaida', 'cd_nfsaida', array('foreignKey' => true,'alias' => 'Nfsaida'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'conhecimento_transporte_has_nf';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConhecimentoTransporteHasNf[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConhecimentoTransporteHasNf
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
            'cd_conhecimento_transporte' => 'cd_conhecimento_transporte',
            'cd_nfentrada' => 'cd_nfentrada',
            'cd_nfsaida' => 'cd_nfsaida'
        );
    }

}
