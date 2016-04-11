<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;

class Accesslog extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idAccessLog;

    /**
     *
     * @var string
     */
    protected $ip;

    /**
     *
     * @var string
     */
    protected $userAgent;

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
     * Method to set the value of field idAccessLog
     *
     * @param integer $idAccessLog
     * @return $this
     */
    public function setIdaccesslog($idAccessLog)
    {
        $this->idAccessLog = $idAccessLog;

        return $this;
    }

    /**
     * Method to set the value of field ip
     *
     * @param string $ip
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Method to set the value of field userAgent
     *
     * @param string $userAgent
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

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
     * Returns the value of field idAccessLog
     *
     * @return integer
     */
    public function getIdaccesslog()
    {
        return $this->idAccessLog;
    }

    /**
     * Returns the value of field ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Returns the value of field userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
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
        $this->setSource('accessLog');
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
        $this->customInitialize();
    }

    public function getSource()
    {
        return 'accessLog';
    }

    /**
     * @return Accesslog[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Accesslog
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
            'idAccessLog' => 'idAccessLog',
            'ip' => 'ip',
            'userAgent' => 'userAgent',
            'created' => 'created',
            'user_idUser' => 'user_idUser'
        );
    }

    public function customInitialize()
    {
        $this->addBehavior(new Timestampable(
            array(
                'beforeCreate' => array(
                    'field' => array('created','modified'),
                    'format' => 'Y-m-d H:i:s'
                    )
                )
        ));

        $this->skipAttributesOnUpdate(array('created'));
    }
}
