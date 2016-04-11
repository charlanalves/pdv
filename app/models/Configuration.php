<?php

namespace AppModels;

class Configuration extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idConfiguration;

    /**
     *
     * @var integer
     */
    protected $receiveEmail;

    /**
     *
     * @var integer
     */
    protected $curriculumPublic;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     * Method to set the value of field idConfiguration
     *
     * @param integer $idConfiguration
     * @return $this
     */
    public function setIdconfiguration($idConfiguration)
    {
        $this->idConfiguration = $idConfiguration;

        return $this;
    }

    /**
     * Method to set the value of field receiveEmail
     *
     * @param integer $receiveEmail
     * @return $this
     */
    public function setReceiveemail($receiveEmail)
    {
        $this->receiveEmail = $receiveEmail;

        return $this;
    }

    /**
     * Method to set the value of field curriculumPublic
     *
     * @param integer $curriculumPublic
     * @return $this
     */
    public function setCurriculumpublic($curriculumPublic)
    {
        $this->curriculumPublic = $curriculumPublic;

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
     * Returns the value of field idConfiguration
     *
     * @return integer
     */
    public function getIdconfiguration()
    {
        return $this->idConfiguration;
    }

    /**
     * Returns the value of field receiveEmail
     *
     * @return integer
     */
    public function getReceiveemail()
    {
        return $this->receiveEmail;
    }

    /**
     * Returns the value of field curriculumPublic
     *
     * @return integer
     */
    public function getCurriculumpublic()
    {
        return $this->curriculumPublic;
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
        $this->belongsTo('user_idUser', 'AppModels\User', 'idUser', array('alias' => 'User'));
    }

    public function getSource()
    {
        return 'configuration';
    }

    /**
     * @return Configuration[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Configuration
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
            'idConfiguration' => 'idConfiguration', 
            'receiveEmail' => 'receiveEmail', 
            'curriculumPublic' => 'curriculumPublic', 
            'user_idUser' => 'user_idUser'
        );
    }

}
