<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class RoundcubeIdentities extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $identity_id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $changed;

    /**
     *
     * @var integer
     */
    protected $del;

    /**
     *
     * @var integer
     */
    protected $standard;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $organization;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $reply-to;

    /**
     *
     * @var string
     */
    protected $bcc;

    /**
     *
     * @var string
     */
    protected $signature;

    /**
     *
     * @var integer
     */
    protected $html_signature;

    /**
     * Method to set the value of field identity_id
     *
     * @param integer $identity_id
     * @return $this
     */
    public function setIdentityId($identity_id)
    {
        $this->identity_id = $identity_id;

        return $this;
    }

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field changed
     *
     * @param string $changed
     * @return $this
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;

        return $this;
    }

    /**
     * Method to set the value of field del
     *
     * @param integer $del
     * @return $this
     */
    public function setDel($del)
    {
        $this->del = $del;

        return $this;
    }

    /**
     * Method to set the value of field standard
     *
     * @param integer $standard
     * @return $this
     */
    public function setStandard($standard)
    {
        $this->standard = $standard;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field organization
     *
     * @param string $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field reply-to
     *
     * @param string $reply-to
     * @return $this
     */
    public function setReply-to($reply-to)
    {
        $this->reply-to = $reply-to;

        return $this;
    }

    /**
     * Method to set the value of field bcc
     *
     * @param string $bcc
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->bcc = $bcc;

        return $this;
    }

    /**
     * Method to set the value of field signature
     *
     * @param string $signature
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Method to set the value of field html_signature
     *
     * @param integer $html_signature
     * @return $this
     */
    public function setHtmlSignature($html_signature)
    {
        $this->html_signature = $html_signature;

        return $this;
    }

    /**
     * Returns the value of field identity_id
     *
     * @return integer
     */
    public function getIdentityId()
    {
        return $this->identity_id;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field changed
     *
     * @return string
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * Returns the value of field del
     *
     * @return integer
     */
    public function getDel()
    {
        return $this->del;
    }

    /**
     * Returns the value of field standard
     *
     * @return integer
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field reply-to
     *
     * @return string
     */
    public function getReply-to()
    {
        return $this->reply-to;
    }

    /**
     * Returns the value of field bcc
     *
     * @return string
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * Returns the value of field signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Returns the value of field html_signature
     *
     * @return integer
     */
    public function getHtmlSignature()
    {
        return $this->html_signature;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('user_id', 'App\Models\RoundcubeUsers', 'user_id', array('alias' => 'RoundcubeUsers'));
        $this->belongsTo('user_id', 'App\Models\RoundcubeUsers', 'user_id', array('foreignKey' => true,'alias' => 'RoundcubeUsers'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'roundcube__identities';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeIdentities[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeIdentities
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
            'identity_id' => 'identity_id',
            'user_id' => 'user_id',
            'changed' => 'changed',
            'del' => 'del',
            'standard' => 'standard',
            'name' => 'name',
            'organization' => 'organization',
            'email' => 'email',
            'reply-to' => 'reply-to',
            'bcc' => 'bcc',
            'signature' => 'signature',
            'html_signature' => 'html_signature'
        );
    }

}
