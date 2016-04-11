<?php

namespace App\Models;

class Literacy extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idLiteracy;

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
     * Method to set the value of field idLiteracy
     *
     * @param integer $idLiteracy
     * @return $this
     */
    public function setIdliteracy($idLiteracy)
    {
        $this->idLiteracy = $idLiteracy;

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
     * Returns the value of field idLiteracy
     *
     * @return integer
     */
    public function getIdliteracy()
    {
        return $this->idLiteracy;
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
        $this->hasMany('idLiteracy', 'App\Models\Academic', 'literacy_idLiteracy', array('alias' => 'Academic'));
    }

    public function getSource()
    {
        return 'literacy';
    }

    /**
     * @return Literacy[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Literacy
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
            'idLiteracy' => 'idLiteracy',
            'description' => 'description',
            'enabled' => 'enabled'
        );
    }
}
