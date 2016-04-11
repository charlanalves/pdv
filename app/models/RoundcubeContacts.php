<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class RoundcubeContacts extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $contact_id;

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
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $firstname;

    /**
     *
     * @var string
     */
    protected $surname;

    /**
     *
     * @var string
     */
    protected $vcard;

    /**
     *
     * @var string
     */
    protected $words;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     * Method to set the value of field contact_id
     *
     * @param integer $contact_id
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->contact_id = $contact_id;

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
     * Method to set the value of field firstname
     *
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Method to set the value of field surname
     *
     * @param string $surname
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Method to set the value of field vcard
     *
     * @param string $vcard
     * @return $this
     */
    public function setVcard($vcard)
    {
        $this->vcard = $vcard;

        return $this;
    }

    /**
     * Method to set the value of field words
     *
     * @param string $words
     * @return $this
     */
    public function setWords($words)
    {
        $this->words = $words;

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
     * Returns the value of field contact_id
     *
     * @return integer
     */
    public function getContactId()
    {
        return $this->contact_id;
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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Returns the value of field firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Returns the value of field surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Returns the value of field vcard
     *
     * @return string
     */
    public function getVcard()
    {
        return $this->vcard;
    }

    /**
     * Returns the value of field words
     *
     * @return string
     */
    public function getWords()
    {
        return $this->words;
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
        $this->hasMany('contact_id', 'App\Models\RoundcubeContactgroupmembers', 'contact_id', array('alias' => 'RoundcubeContactgroupmembers'));
        $this->belongsTo('user_id', 'App\Models\RoundcubeUsers', 'user_id', array('alias' => 'RoundcubeUsers'));
        $this->hasMany('contact_id', 'App\Models\RoundcubeContactgroupmembers', 'contact_id', NULL);
        $this->belongsTo('user_id', 'App\Models\RoundcubeUsers', 'user_id', array('foreignKey' => true,'alias' => 'RoundcubeUsers'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'roundcube__contacts';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeContacts[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeContacts
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
            'contact_id' => 'contact_id',
            'changed' => 'changed',
            'del' => 'del',
            'name' => 'name',
            'email' => 'email',
            'firstname' => 'firstname',
            'surname' => 'surname',
            'vcard' => 'vcard',
            'words' => 'words',
            'user_id' => 'user_id'
        );
    }

}
