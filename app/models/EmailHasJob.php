<?php

namespace App\Models;

class EmailHasJob extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $email_idEmail;

    /**
     *
     * @var integer
     */
    protected $job_idJob;

    /**
     *
     * @var integer
     */
    protected $emailLog_idEmailLog;

    /**
     * Method to set the value of field email_idEmail
     *
     * @param integer $email_idEmail
     * @return $this
     */
    public function setEmailIdemail($email_idEmail)
    {
        $this->email_idEmail = $email_idEmail;

        return $this;
    }

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
     * Method to set the value of field emailLog_idEmailLog
     *
     * @param integer $emailLog_idEmailLog
     * @return $this
     */
    public function setEmaillogIdemaillog($emailLog_idEmailLog)
    {
        $this->emailLog_idEmailLog = $emailLog_idEmailLog;

        return $this;
    }

    /**
     * Returns the value of field email_idEmail
     *
     * @return integer
     */
    public function getEmailIdemail()
    {
        return $this->email_idEmail;
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
     * Returns the value of field emailLog_idEmailLog
     *
     * @return integer
     */
    public function getEmaillogIdemaillog()
    {
        return $this->emailLog_idEmailLog;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('email_idEmail', 'App\Models\Email', 'idEmail', array('alias' => 'Email'));
        $this->belongsTo('job_idJob', 'App\Models\Job', 'idJob', array('alias' => 'Job'));
        $this->belongsTo('emailLog_idEmailLog', 'App\Models\EmailLog', 'idEmailLog', array('alias' => 'EmailLog'));
    }

    public function getSource()
    {
        return 'email_has_job';
    }

    /**
     * @return EmailHasJob[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return EmailHasJob
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
            'email_idEmail' => 'email_idEmail',
            'job_idJob' => 'job_idJob',
            'emailLog_idEmailLog' => 'emailLog_idEmailLog'
        );
    }
}
