<?php

namespace App\Models;

class Emaillog extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idEmailLog;

    /**
     *
     * @var string
     */
    protected $sendAt;

    /**
     *
     * @var integer
     */
    protected $read;

    /**
     *
     * @var string
     */
    protected $libraryEmailId;

    /**
     *
     * @var string
     */
    protected $li;

    /**
     * Method to set the value of field idEmailLog
     *
     * @param integer $idEmailLog
     * @return $this
     */
    public function setIdemaillog($idEmailLog)
    {
        $this->idEmailLog = $idEmailLog;

        return $this;
    }

    /**
     * Method to set the value of field sendAt
     *
     * @param string $sendAt
     * @return $this
     */
    public function setSendat($sendAt)
    {
        $this->sendAt = $sendAt;

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
     * Method to set the value of field libraryEmailId
     *
     * @param string $libraryEmailId
     * @return $this
     */
    public function setLibraryemailid($libraryEmailId)
    {
        $this->libraryEmailId = $libraryEmailId;

        return $this;
    }

    /**
     * Method to set the value of field li
     *
     * @param string $li
     * @return $this
     */
    public function setLi($li)
    {
        $this->li = $li;

        return $this;
    }

    /**
     * Returns the value of field idEmailLog
     *
     * @return integer
     */
    public function getIdemaillog()
    {
        return $this->idEmailLog;
    }

    /**
     * Returns the value of field sendAt
     *
     * @return string
     */
    public function getSendat()
    {
        return $this->sendAt;
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
     * Returns the value of field libraryEmailId
     *
     * @return string
     */
    public function getLibraryemailid()
    {
        return $this->libraryEmailId;
    }

    /**
     * Returns the value of field li
     *
     * @return string
     */
    public function getLi()
    {
        return $this->li;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('emailLog');
        $this->hasMany('idEmailLog', 'App\Models\Email_has_job', 'emailLog_idEmailLog', array('alias' => 'Email_has_job'));
        $this->hasMany('idEmailLog', 'App\Models\Email_has_news', 'emailLog_idEmailLog', array('alias' => 'Email_has_news'));
        $this->hasMany('idEmailLog', 'App\Models\Email_has_notify', 'emailLog_idEmailLog', array('alias' => 'Email_has_notify'));
        $this->hasMany('idEmailLog', 'App\Models\Email_has_payments', 'emailLog_idEmailLog', array('alias' => 'Email_has_payments'));
        $this->hasMany('idEmailLog', 'App\Models\Email_has_user', 'emailLog_idEmailLog', array('alias' => 'Email_has_user'));
    }

    public function getSource()
    {
        return 'emailLog';
    }

    /**
     * @return Emaillog[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Emaillog
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
            'idEmailLog' => 'idEmailLog',
            'sendAt' => 'sendAt',
            'read' => 'read',
            'libraryEmailId' => 'libraryEmailId',
            'li' => 'li'
        );
    }
}
