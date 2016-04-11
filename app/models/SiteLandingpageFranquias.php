<?php

namespace App\Models;

class SiteLandingpageFranquias extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_landingpage;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     * Method to set the value of field id_landingpage
     *
     * @param integer $id_landingpage
     * @return $this
     */
    public function setIdLandingpage($id_landingpage)
    {
        $this->id_landingpage = $id_landingpage;

        return $this;
    }

    /**
     * Method to set the value of field cd_empresa
     *
     * @param integer $cd_empresa
     * @return $this
     */
    public function setCdEmpresa($cd_empresa)
    {
        $this->cd_empresa = $cd_empresa;

        return $this;
    }

    /**
     * Returns the value of field id_landingpage
     *
     * @return integer
     */
    public function getIdLandingpage()
    {
        return $this->id_landingpage;
    }

    /**
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdEmpresa()
    {
        return $this->cd_empresa;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('id_landingpage', 'App\Models\SiteLandingpage', 'id_landingpage', array('alias' => 'SiteLandingpage'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('id_landingpage', 'App\Models\SiteLandingpage', 'id_landingpage', array('foreignKey' => true,'alias' => 'SiteLandingpage'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'site_landingpage_franquias';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SiteLandingpageFranquias[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SiteLandingpageFranquias
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
            'id_landingpage' => 'id_landingpage',
            'cd_empresa' => 'cd_empresa'
        );
    }

}
