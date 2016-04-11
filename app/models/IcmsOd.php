<?php

namespace App\Models;

class IcmsOd extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_icms;

    /**
     *
     * @var string
     */
    protected $origem;

    /**
     *
     * @var string
     */
    protected $destino;

    /**
     *
     * @var double
     */
    protected $icms;

    /**
     * Method to set the value of field cd_icms
     *
     * @param integer $cd_icms
     * @return $this
     */
    public function setCdIcms($cd_icms)
    {
        $this->cd_icms = $cd_icms;

        return $this;
    }

    /**
     * Method to set the value of field origem
     *
     * @param string $origem
     * @return $this
     */
    public function setOrigem($origem)
    {
        $this->origem = $origem;

        return $this;
    }

    /**
     * Method to set the value of field destino
     *
     * @param string $destino
     * @return $this
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Method to set the value of field icms
     *
     * @param double $icms
     * @return $this
     */
    public function setIcms($icms)
    {
        $this->icms = $icms;

        return $this;
    }

    /**
     * Returns the value of field cd_icms
     *
     * @return integer
     */
    public function getCdIcms()
    {
        return $this->cd_icms;
    }

    /**
     * Returns the value of field origem
     *
     * @return string
     */
    public function getOrigem()
    {
        return $this->origem;
    }

    /**
     * Returns the value of field destino
     *
     * @return string
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Returns the value of field icms
     *
     * @return double
     */
    public function getIcms()
    {
        return $this->icms;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'icms_od';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return IcmsOd[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return IcmsOd
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
            'cd_icms' => 'cd_icms',
            'origem' => 'origem',
            'destino' => 'destino',
            'icms' => 'icms'
        );
    }

}
