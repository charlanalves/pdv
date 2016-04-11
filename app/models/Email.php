<?php

namespace App\Models;

class Email extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idEmail;

    /**
     *
     * @var string
     */
    protected $html;

    /**
     *
     * @var integer
     */
    protected $emailType_idEmailType;

    /**
     * Method to set the value of field idEmail
     *
     * @param integer $idEmail
     * @return $this
     */
    public function setIdemail($idEmail)
    {
        $this->idEmail = $idEmail;

        return $this;
    }

    /**
     * Method to set the value of field html
     *
     * @param string $html
     * @return $this
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Method to set the value of field emailType_idEmailType
     *
     * @param integer $emailType_idEmailType
     * @return $this
     */
    public function setEmailtypeIdemailtype($emailType_idEmailType)
    {
        $this->emailType_idEmailType = $emailType_idEmailType;

        return $this;
    }

    /**
     * Returns the value of field idEmail
     *
     * @return integer
     */
    public function getIdemail()
    {
        return $this->idEmail;
    }

    /**
     * Returns the value of field html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Returns the value of field emailType_idEmailType
     *
     * @return integer
     */
    public function getEmailtypeIdemailtype()
    {
        return $this->emailType_idEmailType;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idEmail', 'App\Models\EmailHasJob', 'email_idEmail', array('alias' => 'EmailHasJob'));
        $this->hasMany('idEmail', 'App\Models\EmailHasNews', 'email_idEmail', array('alias' => 'EmailHasNews'));
        $this->hasMany('idEmail', 'App\Models\EmailHasNotify', 'email_idEmail', array('alias' => 'EmailHasNotify'));
        $this->hasMany('idEmail', 'App\Models\EmailHasPayments', 'email_idEmail', array('alias' => 'EmailHasPayments'));
        $this->hasMany('idEmail', 'App\Models\EmailHasUser', 'email_idEmail', array('alias' => 'EmailHasUser'));
        $this->belongsTo('emailType_idEmailType', 'App\Models\EmailType', 'idEmailType', array('alias' => 'EmailType'));
    }

    public function getSource()
    {
        return 'email';
    }

    /**
     * @return Email[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Email
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
            'idEmail' => 'idEmail',
            'html' => 'html',
            'emailType_idEmailType' => 'emailType_idEmailType'
        );
    }
}
