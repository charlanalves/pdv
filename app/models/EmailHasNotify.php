<?php

namespace App\Models;

class EmailHasNotify extends \Phalcon\Mvc\Model
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
    protected $notify_idNotify;

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
     * Method to set the value of field notify_idNotify
     *
     * @param integer $notify_idNotify
     * @return $this
     */
    public function setNotifyIdnotify($notify_idNotify)
    {
        $this->notify_idNotify = $notify_idNotify;

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
     * Returns the value of field notify_idNotify
     *
     * @return integer
     */
    public function getNotifyIdnotify()
    {
        return $this->notify_idNotify;
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
        $this->belongsTo('notify_idNotify', 'App\Models\Notify', 'idNotify', array('alias' => 'Notify'));
        $this->belongsTo('emailLog_idEmailLog', 'App\Models\EmailLog', 'idEmailLog', array('alias' => 'EmailLog'));
    }

    public function getSource()
    {
        return 'email_has_notify';
    }

    /**
     * @return EmailHasNotify[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return EmailHasNotify
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
            'notify_idNotify' => 'notify_idNotify',
            'emailLog_idEmailLog' => 'emailLog_idEmailLog'
        );
    }
}
