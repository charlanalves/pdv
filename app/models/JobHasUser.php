<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;

class JobHasUser extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $job_idJob;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     *
     * @var integer
     */
    protected $expectedSalary;

    /**
     *
     * @var string
     */
    protected $created;

    /**
     *
     * @var string
     */
    protected $emailId;

    /**
     *
     * @var integer
     */
    protected $view;

    /**
     * Method to set the value of field job_idJob
     *
     * @param integer $job_idJob
     * @return $this
     */
    public function setJobIdjob($job_idJob)
    {
        $this->job_idJob = $job_idJob;

        return $this;
    }

    /**
     * Method to set the value of field user_idUser
     *
     * @param integer $user_idUser
     * @return $this
     */
    public function setUserIduser($user_idUser)
    {
        $this->user_idUser = $user_idUser;

        return $this;
    }

    /**
     * Method to set the value of field expectedSalary
     *
     * @param integer $expectedSalary
     * @return $this
     */
    public function setExpectedSalary($expectedSalary)
    {
        $this->expectedSalary = $expectedSalary;

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
     * Method to set the value of field emailId
     *
     * @param string $emailId
     * @return $this
     */
    public function setEmailid($emailId)
    {
        $this->emailId = $emailId;

        return $this;
    }

    /**
     * Method to set the value of field view
     *
     * @param integer $view
     * @return $this
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Returns the value of field job_idJob
     *
     * @return integer
     */
    public function getJobIdjob()
    {
        return $this->job_idJob;
    }

    /**
     * Returns the value of field user_idUser
     *
     * @return integer
     */
    public function getUserIduser()
    {
        return $this->user_idUser;
    }

     /**
     * Returns the value of field expectedSalary
     *
     * @return integer
     */
    public function getExpectedSalary()
    {
        return $this->expectedSalary;
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
     * Returns the value of field emailId
     *
     * @return string
     */
    public function getEmailid()
    {
        return $this->emailId;
    }

    /**
     * Returns the value of field view
     *
     * @return integer
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('job_idJob', 'App\Models\Job', 'idJob', array('alias' => 'Job'));
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));

        $this->customInitialize();
    }

    public function getSource()
    {
        return 'job_has_user';
    }

    /**
     * @return JobHasUser[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return JobHasUser
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
            'job_idJob' => 'job_idJob',
            'user_idUser' => 'user_idUser',
            'expectedSalary' => 'expectedSalary',
            'created' => 'created',
            'emailId' => 'emailId',
            'view' => 'view'
        );
    }

    public function customInitialize()
    {
        $this->addBehavior(new Timestampable(
            array(
                'beforeCreate' => array(
                    'field' => array('created'),
                    'format' => 'Y-m-d H:i:s'
                    )
                )
        ));

        $this->skipAttributesOnUpdate(array('created'));
    }
}
