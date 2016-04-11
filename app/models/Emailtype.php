<?php

namespace App\Models;

class Emailtype extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idEmailType;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     * Method to set the value of field idEmailType
     *
     * @param integer $idEmailType
     * @return $this
     */
    public function setIdemailtype($idEmailType)
    {
        $this->idEmailType = $idEmailType;

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
     * Returns the value of field idEmailType
     *
     * @return integer
     */
    public function getIdemailtype()
    {
        return $this->idEmailType;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('emailType');
        $this->hasMany('idEmailType', 'App\Models\Email', 'emailType_idEmailType', array('alias' => 'Email'));
    }

    public function getSource()
    {
        return 'emailType';
    }

    /**
     * @return Emailtype[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Emailtype
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
            'idEmailType' => 'idEmailType',
            'description' => 'description'
        );
    }
}
