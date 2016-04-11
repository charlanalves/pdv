<?php

namespace App\Models;

class EmailHasUser extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     *
     * @var integer
     */
    protected $email_idEmail;

    /**
     *
     * @var integer
     */
    protected $emailLog_idEmailLog;

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
     * Returns the value of field user_idUser
     *
     * @return integer
     */
    public function getUserIduser()
    {
        return $this->user_idUser;
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
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
        $this->belongsTo('email_idEmail', 'App\Models\Email', 'idEmail', array('alias' => 'Email'));
        $this->belongsTo('emailLog_idEmailLog', 'App\Models\EmailLog', 'idEmailLog', array('alias' => 'EmailLog'));
    }

    public function getSource()
    {
        return 'email_has_user';
    }

    /**
     * @return EmailHasUser[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return EmailHasUser
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
            'user_idUser' => 'user_idUser',
            'email_idEmail' => 'email_idEmail',
            'emailLog_idEmailLog' => 'emailLog_idEmailLog'
        );
    }
}
