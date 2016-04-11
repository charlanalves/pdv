<?php

namespace App\Models;

class Modules extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idModules;

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
     * Method to set the value of field idModules
     *
     * @param integer $idModules
     * @return $this
     */
    public function setIdmodules($idModules)
    {
        $this->idModules = $idModules;

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
     * Returns the value of field idModules
     *
     * @return integer
     */
    public function getIdmodules()
    {
        return $this->idModules;
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

    public function getSource()
    {
        return 'modules';
    }

    public function initialize()
    {
        $this->hasMany('idModules', 'App\Models\Permissions', 'modules_idModules', array('alias' => 'Permissions'));
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'idModules' => 'idModules',
            'description' => 'description',
            'icon' => 'icon',
            'ordem' => 'ordem'
        );
    }
}
