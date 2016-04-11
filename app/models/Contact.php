<?php

namespace App\Models;

class Contact extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idContact;

    /**
     *
     * @var string
     */
    protected $phone;

    /**
     *
     * @var string
     */
    protected $type;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     * Method to set the value of field idContact
     *
     * @param integer $idContact
     * @return $this
     */
    public function setIdcontact($idContact)
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * Method to set the value of field phone
     *
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Method to set the value of field type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

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
     * Returns the value of field idContact
     *
     * @return integer
     */
    public function getIdcontact()
    {
        return $this->idContact;
    }

    /**
     * Returns the value of field phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Returns the value of field type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
        $this->belongsTo('user_iduser', 'App\Models\User', 'iduser', array('alias' => 'User'));
        $this->belongsTo('people_idPeople', 'App\Models\People', 'idPeople', array('alias' => 'People'));
    }

    public function getSource()
    {
        return 'contact';
    }

    /**
     * @return Contact[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Contact
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
            'idContact' => 'idContact',
            'phone' => 'phone',
            'type' => 'type',
            'user_idUser' => 'user_idUser'
        );
    }
}
