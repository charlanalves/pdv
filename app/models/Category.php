<?php

namespace App\Models;

class Category extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idCategory;

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
     * Method to set the value of field idCategory
     *
     * @param integer $idCategory
     * @return $this
     */
    public function setIdcategory($idCategory)
    {
        $this->idCategory = $idCategory;

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
     * Returns the value of field idCategory
     *
     * @return integer
     */
    public function getIdcategory()
    {
        return $this->idCategory;
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
        $this->hasMany('idCategory', 'App\Models\News', 'category_idCategory', array('alias' => 'News'));
    }

    public function getSource()
    {
        return 'category';
    }

    /**
     * @return Category[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Category
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
            'idCategory' => 'idCategory',
            'description' => 'description',
            'enabled' => 'enabled'
        );
    }
}
