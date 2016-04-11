<?php

namespace App\Models;

class Permissions extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idPermissions;

    /**
     *
     * @var string
     */
    protected $resource;

    /**
     *
     * @var string
     */
    protected $action;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var string
     */
    protected $icon;

    /**
     *
     * @var integer
     */
    protected $ordem;

    /**
     *
     * @var integer
     */
    protected $menu;

    /**
     *
     * @var integer
     */
    protected $profiles_idProfiles;

    /**
     *
     * @var integer
     */
    protected $modules_idModules;

    /**
     * Method to set the value of field idPermissions
     *
     * @param integer $idPermissions
     * @return $this
     */
    public function setIdpermissions($idPermissions)
    {
        $this->idPermissions = $idPermissions;

        return $this;
    }

    /**
     * Method to set the value of field resource
     *
     * @param string $resource
     * @return $this
     */
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Method to set the value of field action
     *
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;

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
     * Method to set the value of field icon
     *
     * @param string $icon
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Method to set the value of field ordem
     *
     * @param integer $ordem
     * @return $this
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Method to set the value of field menu
     *
     * @param integer $menu
     * @return $this
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;

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
     * Method to set the value of field modules_idModules
     *
     * @param integer $modules_idModules
     * @return $this
     */
    public function setModulesIdmodules($modules_idModules)
    {
        $this->modules_idModules = $modules_idModules;

        return $this;
    }

    /**
     * Returns the value of field idPermissions
     *
     * @return integer
     */
    public function getIdpermissions()
    {
        return $this->idPermissions;
    }

    /**
     * Returns the value of field resource
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Returns the value of field action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
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
     * Returns the value of field icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Returns the value of field ordem
     *
     * @return integer
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Returns the value of field menu
     *
     * @return integer
     */
    public function getMenu()
    {
        return $this->menu;
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
     * Returns the value of field modules_idModules
     *
     * @return integer
     */
    public function getModulesIdmodules()
    {
        return $this->modules_idModules;
    }

    public function getSource()
    {
        return 'permissions';
    }

    public function initialize()
    {
        $this->belongsTo('profiles_idProfiles', 'App\Models\Profiles', 'idProfiles', array('alias' => 'Profiles'));
        $this->belongsTo('modules_idModules', 'App\Models\Modules', 'idModules', array('alias' => 'Modules'));
    }


    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'idPermissions' => 'idPermissions',
            'resource' => 'resource',
            'action' => 'action',
            'description' => 'description',
            'icon' => 'icon',
            'ordem' => 'ordem',
            'menu' => 'menu',
            'profiles_idProfiles' => 'profiles_idProfiles',
            'modules_idModules' => 'modules_idModules'
        );
    }

    public function getPrivatePermissions($resources = array())
    {
        $phql = "select DISTINCT resource, action from App\Models\Permissions";

        $permissions = $this->modelsManager->executeQuery($phql);

        // var_dump($permissions->toArray());
        foreach ($permissions as $key) {
            $list[$key->resource][] = $key->action;
        }

        foreach ($resources as $key => $value) {
            foreach ($value as $add) {
                $list[$key][] = $add;
            }
        }

        return $list;
    }
}
