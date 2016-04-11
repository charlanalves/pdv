<?php

namespace App\Models;

class AreaOperation extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idAreaOperation;

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
     *
     * @var integer
     */
    protected $areaOperation_idAreaOperation;

    /**
     * Method to set the value of field idAreaOperation
     *
     * @param integer $idAreaOperation
     * @return $this
     */
    public function setIdareaoperation($idAreaOperation)
    {
        $this->idAreaOperation = $idAreaOperation;

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
     * Method to set the value of field areaOperation_idAreaOperation
     *
     * @param integer $areaOperation_idAreaOperation
     * @return $this
     */
    public function setAreaoperationIdareaoperation($areaOperation_idAreaOperation)
    {
        $this->areaOperation_idAreaOperation = $areaOperation_idAreaOperation;

        return $this;
    }

    /**
     * Returns the value of field idAreaOperation
     *
     * @return integer
     */
    public function getIdareaoperation()
    {
        return $this->idAreaOperation;
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
     * Returns the value of field areaOperation_idAreaOperation
     *
     * @return integer
     */
    public function getAreaoperationIdareaoperation()
    {
        return $this->areaOperation_idAreaOperation;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('areaOperation');
        $this->hasMany('idAreaOperation', 'App\Models\AreaOperation', 'areaOperation_idAreaOperation', array('alias' => 'AreaOperation'));
        $this->hasMany('idAreaOperation', 'App\Models\Simulated', 'areaOperation_idAreaOperation', array('alias' => 'Simulated'));
        $this->belongsTo('areaOperation_idAreaOperation', 'App\Models\AreaOperation', 'idAreaOperation', array('alias' => 'AreaOperation'));
    }

    public function getSource()
    {
        return 'areaOperation';
    }

    /**
     * @return Areaoperation[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Areaoperation
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
            'idAreaOperation' => 'idAreaOperation',
            'description' => 'description',
            'enabled' => 'enabled',
            'areaOperation_idAreaOperation' => 'areaOperation_idAreaOperation'
        );
    }
}
