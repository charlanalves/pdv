<?php

namespace App\Models;

class Profiles extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idProfiles;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var integer
     */
    protected $enabled;

    /**
     * Method to set the value of field idProfiles
     *
     * @param integer $idProfiles
     * @return $this
     */
    public function setIdprofiles($idProfiles)
    {
        $this->idProfiles = $idProfiles;

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
     * Returns the value of field idProfiles
     *
     * @return integer
     */
    public function getIdprofiles()
    {
        return $this->idProfiles;
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
        $this->hasMany('idProfiles', 'App\Models\Permissions', 'profiles_idProfiles', array('alias' => 'Permissions'));
        $this->hasMany('idProfiles', 'App\Models\Plan', 'profiles_idProfiles', array('alias' => 'Plan'));
        $this->hasMany('idProfiles', 'App\Models\User', 'profiles_idProfiles', array('alias' => 'User'));
    }

    public function getSource()
    {
        return 'profiles';
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'idProfiles' => 'idProfiles', 
            'name' => 'name', 
            'enabled' => 'enabled'
        );
    }

}
