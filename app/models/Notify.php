<?php

namespace App\Models;

class Notify extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idNotify;

    /**
     *
     * @var string
     */
    protected $message;

    /**
     *
     * @var integer
     */
    protected $read;

    /**
     *
     * @var string
     */
    protected $readDate;

    /**
     *
     * @var string
     */
    protected $created;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     * Method to set the value of field idNotify
     *
     * @param integer $idNotify
     * @return $this
     */
    public function setIdnotify($idNotify)
    {
        $this->idNotify = $idNotify;

        return $this;
    }

    /**
     * Method to set the value of field message
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Method to set the value of field read
     *
     * @param integer $read
     * @return $this
     */
    public function setRead($read)
    {
        $this->read = $read;

        return $this;
    }

    /**
     * Method to set the value of field readDate
     *
     * @param string $readDate
     * @return $this
     */
    public function setReaddate($readDate)
    {
        $this->readDate = $readDate;

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
     * Returns the value of field idNotify
     *
     * @return integer
     */
    public function getIdnotify()
    {
        return $this->idNotify;
    }

    /**
     * Returns the value of field message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Returns the value of field read
     *
     * @return integer
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * Returns the value of field readDate
     *
     * @return string
     */
    public function getReaddate()
    {
        return $this->readDate;
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
        $this->hasMany('idNotify', 'App\Models\Email_has_notify', 'notify_idNotify', array('alias' => 'Email_has_notify'));
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
    }

    public function getSource()
    {
        return 'notify';
    }

    /**
     * @return Notify[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Notify
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
            'idNotify' => 'idNotify',
            'message' => 'message',
            'read' => 'read',
            'readDate' => 'readDate',
            'created' => 'created',
            'user_idUser' => 'user_idUser'
        );
    }
}
