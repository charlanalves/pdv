<?php

namespace App\Models;

class Plantable extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idPlanTable;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var integer
     */
    protected $planTable_idPlanTable;

    /**
     *
     * @var integer
     */
    protected $plan_idPlan;

    /**
     * Method to set the value of field idPlanTable
     *
     * @param integer $idPlanTable
     * @return $this
     */
    public function setIdplantable($idPlanTable)
    {
        $this->idPlanTable = $idPlanTable;

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
     * Method to set the value of field planTable_idPlanTable
     *
     * @param integer $planTable_idPlanTable
     * @return $this
     */
    public function setPlantableIdplantable($planTable_idPlanTable)
    {
        $this->planTable_idPlanTable = $planTable_idPlanTable;

        return $this;
    }

    /**
     * Method to set the value of field plan_idPlan
     *
     * @param integer $plan_idPlan
     * @return $this
     */
    public function setPlanIdplan($plan_idPlan)
    {
        $this->plan_idPlan = $plan_idPlan;

        return $this;
    }

    /**
     * Returns the value of field idPlanTable
     *
     * @return integer
     */
    public function getIdplantable()
    {
        return $this->idPlanTable;
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
     * Returns the value of field planTable_idPlanTable
     *
     * @return integer
     */
    public function getPlantableIdplantable()
    {
        return $this->planTable_idPlanTable;
    }

    /**
     * Returns the value of field plan_idPlan
     *
     * @return integer
     */
    public function getPlanIdplan()
    {
        return $this->plan_idPlan;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('planTable');
        $this->hasMany('idPlanTable', 'App\Models\PlanTable', 'planTable_idPlanTable', array('alias' => 'PlanTables'));
        $this->belongsTo('planTable_idPlanTable', 'App\Models\PlanTable', 'idPlanTable', array('alias' => 'PlanTable'));
        $this->belongsTo('plan_idPlan', 'App\Models\Plan', 'idPlan', array('alias' => 'Plan'));
    }

    public function getSource()
    {
        return 'planTable';
    }

    /**
     * @return Plantable[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Plantable
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
            'idPlanTable' => 'idPlanTable',
            'description' => 'description',
            'planTable_idPlanTable' => 'planTable_idPlanTable',
            'plan_idPlan' => 'plan_idPlan'
        );
    }
}
