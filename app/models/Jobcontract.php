<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;

class Jobcontract extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idJobContract;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     * Method to set the value of field idJobContract
     *
     * @param integer $idJobContract
     * @return $this
     */
    public function setIdjobcontract($idJobContract)
    {
        $this->idJobContract = $idJobContract;

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
     * Returns the value of field idJobContract
     *
     * @return integer
     */
    public function getIdjobcontract()
    {
        return $this->idJobContract;
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
        $this->setSource('jobContract');
        $this->hasMany('idJobContract', 'App\Models\Job', 'jobContract_idJobContract', array('alias' => 'Job'));
    }

    public function getSource()
    {
        return 'jobContract';
    }

    /**
     * @return Jobcontract[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Jobcontract
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
            'idJobContract' => 'idJobContract',
            'description' => 'description'
        );
    }
}
