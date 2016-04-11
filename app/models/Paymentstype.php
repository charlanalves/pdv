<?php

namespace App\Models;

class Paymentstype extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idPaymentsType;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var integer
     */
    protected $enabled;

    /**
     * Method to set the value of field idPaymentsType
     *
     * @param integer $idPaymentsType
     * @return $this
     */
    public function setIdpaymentstype($idPaymentsType)
    {
        $this->idPaymentsType = $idPaymentsType;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field enabled
     *
     * @param integer $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Returns the value of field idPaymentsType
     *
     * @return integer
     */
    public function getIdpaymentstype()
    {
        return $this->idPaymentsType;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field enabled
     *
     * @return integer
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('paymentsType');
        $this->hasMany('idPaymentsType', 'App\Models\Payments', 'paymentsType_idPaymentsType1', array('alias' => 'Payments'));
        $this->hasMany('idPaymentsType', 'App\Models\Payments', 'paymentsType_idPaymentsType', array('alias' => 'Payments'));
    }

    public function getSource()
    {
        return 'paymentsType';
    }

    /**
     * @return Paymentstype[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Paymentstype
     */
    public static function findFirst($parameters = array())
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'idPaymentsType' => 'idPaymentsType',
            'description' => 'description',
            'enabled' => 'enabled'
        );
    }
}
