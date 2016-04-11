<?php

namespace App\Models;

class RoundcubeContactgroupmembers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $contactgroup_id;

    /**
     *
     * @var integer
     */
    protected $contact_id;

    /**
     *
     * @var string
     */
    protected $created;

    /**
     * Method to set the value of field contactgroup_id
     *
     * @param integer $contactgroup_id
     * @return $this
     */
    public function setContactgroupId($contactgroup_id)
    {
        $this->contactgroup_id = $contactgroup_id;

        return $this;
    }

    /**
     * Method to set the value of field contact_id
     *
     * @param integer $contact_id
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->contact_id = $contact_id;

        return $this;
    }

    /**
     * Method to set the value of field created
     *
     * @param string $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Returns the value of field contactgroup_id
     *
     * @return integer
     */
    public function getContactgroupId()
    {
        return $this->contactgroup_id;
    }

    /**
     * Returns the value of field contact_id
     *
     * @return integer
     */
    public function getContactId()
    {
        return $this->contact_id;
    }

    /**
     * Returns the value of field created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('contact_id', 'App\Models\RoundcubeContacts', 'contact_id', array('alias' => 'RoundcubeContacts'));
        $this->belongsTo('contactgroup_id', 'App\Models\RoundcubeContactgroups', 'contactgroup_id', array('alias' => 'RoundcubeContactgroups'));
        $this->belongsTo('contact_id', 'App\Models\RoundcubeContacts', 'contact_id', array('foreignKey' => true,'alias' => 'RoundcubeContacts'));
        $this->belongsTo('contactgroup_id', 'App\Models\RoundcubeContactgroups', 'contactgroup_id', array('foreignKey' => true,'alias' => 'RoundcubeContactgroups'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'roundcube__contactgroupmembers';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeContactgroupmembers[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeContactgroupmembers
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
            'contactgroup_id' => 'contactgroup_id',
            'contact_id' => 'contact_id',
            'created' => 'created'
        );
    }

}
