<?php

namespace App\Models;

class RoundcubeContactgroups extends \Phalcon\Mvc\Model
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
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $changed;

    /**
     *
     * @var integer
     */
    protected $del;

    /**
     *
     * @var string
     */
    protected $name;

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
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field changed
     *
     * @param string $changed
     * @return $this
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;

        return $this;
    }

    /**
     * Method to set the value of field del
     *
     * @param integer $del
     * @return $this
     */
    public function setDel($del)
    {
        $this->del = $del;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field changed
     *
     * @return string
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * Returns the value of field del
     *
     * @return integer
     */
    public function getDel()
    {
        return $this->del;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('contactgroup_id', 'App\Models\RoundcubeContactgroupmembers', 'contactgroup_id', array('alias' => 'RoundcubeContactgroupmembers'));
        $this->belongsTo('user_id', 'App\Models\RoundcubeUsers', 'user_id', array('alias' => 'RoundcubeUsers'));
        $this->hasMany('contactgroup_id', 'App\Models\RoundcubeContactgroupmembers', 'contactgroup_id', NULL);
        $this->belongsTo('user_id', 'App\Models\RoundcubeUsers', 'user_id', array('foreignKey' => true,'alias' => 'RoundcubeUsers'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'roundcube__contactgroups';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeContactgroups[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeContactgroups
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
            'user_id' => 'user_id',
            'changed' => 'changed',
            'del' => 'del',
            'name' => 'name'
        );
    }

}
