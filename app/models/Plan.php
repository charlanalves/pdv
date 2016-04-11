<?php

namespace App\Models;

class Plan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idPlan;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var double
     */
    protected $value;

    /**
     *
     * @var string
     */
    protected $days;

    /**
     *
     * @var integer
     */
    protected $profiles_idProfiles;

    /**
     * Method to set the value of field idPlan
     *
     * @param integer $idPlan
     * @return $this
     */
    public function setIdplan($idPlan)
    {
        $this->idPlan = $idPlan;

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
     * Method to set the value of field value
     *
     * @param double $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Method to set the value of field days
     *
     * @param string $days
     * @return $this
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Method to set the value of field profiles_idProfiles
     *
     * @param integer $profiles_idProfiles
     * @return $this
     */
    public function setProfilesIdprofiles($profiles_idProfiles)
    {
        $this->profiles_idProfiles = $profiles_idProfiles;

        return $this;
    }

    /**
     * Returns the value of field idPlan
     *
     * @return integer
     */
    public function getIdplan()
    {
        return $this->idPlan;
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
     * Returns the value of field value
     *
     * @return double
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns the value of field days
     *
     * @return string
     */
    public function getDays()
    {
        return $this->days;
    }

     /**
     * Returns the value of field profiles_idProfiles
     *
     * @return integer
     */
    public function getProfilesIdprofiles()
    {
        return $this->profiles_idProfiles;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idPlan', 'App\Models\Plantable', 'plan_idPlan', array('alias' => 'Plantable'));
        $this->hasMany('idPlan', 'App\Models\User', 'plan_idPlan', array('alias' => 'User'));
        $this->belongsTo('profiles_idProfiles', 'App\Models\Profiles', 'idProfiles', array('alias' => 'Profiles'));
    }

    public function getSource()
    {
        return 'plan';
    }

    /**
     * @return Plan[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Plan
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
            'idPlan' => 'idPlan',
            'description' => 'description',
            'value' => 'value',
            'days' => 'days',
            'profiles_idProfiles' => 'profiles_idProfiles'
        );
    }
}
