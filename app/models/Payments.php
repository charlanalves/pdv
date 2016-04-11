<?php

namespace App\Models;

class Payments extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idPayments;

    /**
     *
     * @var string
     */
    protected $transactionCode;

    /**
     *
     * @var double
     */
    protected $transactionValue;

    /**
     *
     * @var integer
     */
    protected $transactionStatus;

    /**
     *
     * @var string
     */
    protected $transactionReference;

    /**
     *
     * @var integer
     */
    protected $days;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $lastStatus;

    /**
     *
     * @var string
     */
    protected $created;

    /**
     *
     * @var string
     */
    protected $modified;

    /**
     *
     * @var integer
     */
    protected $paymentsType_idPaymentsType;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     * Method to set the value of field idPayments
     *
     * @param integer $idPayments
     * @return $this
     */
    public function setIdpayments($idPayments)
    {
        $this->idPayments = $idPayments;

        return $this;
    }

    /**
     * Method to set the value of field transactionCode
     *
     * @param string $transactionCode
     * @return $this
     */
    public function setTransactioncode($transactionCode)
    {
        $this->transactionCode = $transactionCode;

        return $this;
    }

    /**
     * Method to set the value of field transactionValue
     *
     * @param double $transactionValue
     * @return $this
     */
    public function setTransactionvalue($transactionValue)
    {
        $this->transactionValue = $transactionValue;

        return $this;
    }

    /**
     * Method to set the value of field transactionStatus
     *
     * @param integer $transactionStatus
     * @return $this
     */
    public function setTransactionstatus($transactionStatus)
    {
        $this->transactionStatus = $transactionStatus;

        return $this;
    }

    /**
     * Method to set the value of field transactionReference
     *
     * @param string $transactionReference
     * @return $this
     */
    public function setTransactionreference($transactionReference)
    {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    /**
     * Method to set the value of field days
     *
     * @param integer $days
     * @return $this
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field lastStatus
     *
     * @param integer $lastStatus
     * @return $this
     */
    public function setLaststatus($lastStatus)
    {
        $this->lastStatus = $lastStatus;

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
     * Method to set the value of field modified
     *
     * @param string $modified
     * @return $this
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Method to set the value of field paymentsType_idPaymentsType
     *
     * @param integer $paymentsType_idPaymentsType
     * @return $this
     */
    public function setPaymentstypeIdpaymentstype($paymentsType_idPaymentsType)
    {
        $this->paymentsType_idPaymentsType = $paymentsType_idPaymentsType;

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
     * Returns the value of field idPayments
     *
     * @return integer
     */
    public function getIdpayments()
    {
        return $this->idPayments;
    }

    /**
     * Returns the value of field transactionCode
     *
     * @return string
     */
    public function getTransactioncode()
    {
        return $this->transactionCode;
    }

    /**
     * Returns the value of field transactionValue
     *
     * @return double
     */
    public function getTransactionvalue()
    {
        return $this->transactionValue;
    }

    /**
     * Returns the value of field transactionStatus
     *
     * @return integer
     */
    public function getTransactionstatus()
    {
        return $this->transactionStatus;
    }

    /**
     * Returns the value of field transactionReference
     *
     * @return string
     */
    public function getTransactionreference()
    {
        return $this->transactionReference;
    }

    /**
     * Returns the value of field days
     *
     * @return integer
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field lastStatus
     *
     * @return integer
     */
    public function getLaststatus()
    {
        return $this->lastStatus;
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
     * Returns the value of field modified
     *
     * @return string
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Returns the value of field paymentsType_idPaymentsType
     *
     * @return integer
     */
    public function getPaymentstypeIdpaymentstype()
    {
        return $this->paymentsType_idPaymentsType;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idPayments', 'App\Models\Email_has_payments', 'payments_idPayments', array('alias' => 'Email_has_payments'));
        $this->hasMany('idPayments', 'App\Models\PaymentsStatusLog', 'payments_idPayments', array('alias' => 'PaymentsStatusLog'));
        $this->belongsTo('paymentsType_idPaymentsType', 'App\Models\PaymentsType', 'idPaymentsType', array('alias' => 'PaymentsType'));
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
        $this->belongsTo('enterprise_idEnterprise', 'App\Models\Enterprise', 'idEnterprise', array('alias' => 'Enterprise'));
        $this->belongsTo('paymentsType_idPaymentsType', 'App\Models\PaymentsType', 'idPaymentsType', array('alias' => 'PaymentsType'));
    }

    public function getSource()
    {
        return 'payments';
    }

    /**
     * @return Payments[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Payments
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
            'idPayments' => 'idPayments',
            'transactionCode' => 'transactionCode',
            'transactionValue' => 'transactionValue',
            'transactionStatus' => 'transactionStatus',
            'transactionReference' => 'transactionReference',
            'days' => 'days',
            'status' => 'status',
            'lastStatus' => 'lastStatus',
            'created' => 'created',
            'modified' => 'modified',
            'paymentsType_idPaymentsType' => 'paymentsType_idPaymentsType',
            'user_idUser' => 'user_idUser'
        );
    }
}
