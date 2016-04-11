<?php

namespace App\Models;

class EmailHasPayments extends \Phalcon\Mvc\Model
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
    protected $payments_idPayments;

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
     * Method to set the value of field payments_idPayments
     *
     * @param integer $payments_idPayments
     * @return $this
     */
    public function setPaymentsIdpayments($payments_idPayments)
    {
        $this->payments_idPayments = $payments_idPayments;

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
     * Returns the value of field payments_idPayments
     *
     * @return integer
     */
    public function getPaymentsIdpayments()
    {
        return $this->payments_idPayments;
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
        $this->belongsTo('payments_idPayments', 'App\Models\Payments', 'idPayments', array('alias' => 'Payments'));
        $this->belongsTo('emailLog_idEmailLog', 'App\Models\EmailLog', 'idEmailLog', array('alias' => 'EmailLog'));
    }

    public function getSource()
    {
        return 'email_has_payments';
    }

    /**
     * @return EmailHasPayments[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return EmailHasPayments
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
            'payments_idPayments' => 'payments_idPayments',
            'emailLog_idEmailLog' => 'emailLog_idEmailLog'
        );
    }
}
