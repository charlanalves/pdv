<?php

namespace App\Models;

class Language extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idLanguage;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var string
     */
    protected $level;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     * Method to set the value of field idLanguage
     *
     * @param integer $idLanguage
     * @return $this
     */
    public function setIdlanguage($idLanguage)
    {
        $this->idLanguage = $idLanguage;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field level
     *
     * @param string $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;

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
     * Returns the value of field idLanguage
     *
     * @return integer
     */
    public function getIdlanguage()
    {
        return $this->idLanguage;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
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
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
    }

    public function getSource()
    {
        return 'language';
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'idLanguage' => 'idLanguage',
            'description' => 'description',
            'level' => 'level',
            'user_idUser' => 'user_idUser'
        );
    }
}
