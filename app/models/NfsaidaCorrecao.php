<?php

namespace App\Models;

class NfsaidaCorrecao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idcorrecao;

    /**
     *
     * @var integer
     */
    protected $cd_nfsaida;

    /**
     *
     * @var integer
     */
    protected $ncorrecao;

    /**
     *
     * @var string
     */
    protected $xml;

    /**
     *
     * @var string
     */
    protected $data_criado;

    /**
     * Method to set the value of field idcorrecao
     *
     * @param integer $idcorrecao
     * @return $this
     */
    public function setIdcorrecao($idcorrecao)
    {
        $this->idcorrecao = $idcorrecao;

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
     * Method to set the value of field ncorrecao
     *
     * @param integer $ncorrecao
     * @return $this
     */
    public function setNcorrecao($ncorrecao)
    {
        $this->ncorrecao = $ncorrecao;

        return $this;
    }

    /**
     * Method to set the value of field xml
     *
     * @param string $xml
     * @return $this
     */
    public function setXml($xml)
    {
        $this->xml = $xml;

        return $this;
    }

    /**
     * Method to set the value of field data_criado
     *
     * @param string $data_criado
     * @return $this
     */
    public function setDataCriado($data_criado)
    {
        $this->data_criado = $data_criado;

        return $this;
    }

    /**
     * Returns the value of field idcorrecao
     *
     * @return integer
     */
    public function getIdcorrecao()
    {
        return $this->idcorrecao;
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
     * Returns the value of field ncorrecao
     *
     * @return integer
     */
    public function getNcorrecao()
    {
        return $this->ncorrecao;
    }

    /**
     * Returns the value of field xml
     *
     * @return string
     */
    public function getXml()
    {
        return $this->xml;
    }

    /**
     * Returns the value of field data_criado
     *
     * @return string
     */
    public function getDataCriado()
    {
        return $this->data_criado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_nfsaida', 'App\Models\Nfsaida', 'cd_nfsaida', array('alias' => 'Nfsaida'));
        $this->belongsTo('cd_nfsaida', 'App\Models\Nfsaida', 'cd_nfsaida', array('foreignKey' => true,'alias' => 'Nfsaida'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfsaida_correcao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfsaidaCorrecao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfsaidaCorrecao
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
            'idcorrecao' => 'idcorrecao',
            'cd_nfsaida' => 'cd_nfsaida',
            'ncorrecao' => 'ncorrecao',
            'xml' => 'xml',
            'data_criado' => 'data_criado'
        );
    }

}
