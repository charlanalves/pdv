<?php

namespace App\Models;

class RoundcubeUsers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $username;

    /**
     *
     * @var string
     */
    protected $mail_host;

    /**
     *
     * @var string
     */
    protected $created;

    /**
     *
     * @var string
     */
    protected $last_login;

    /**
     *
     * @var string
     */
    protected $language;

    /**
     *
     * @var string
     */
    protected $preferences;

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
     * Method to set the value of field username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Method to set the value of field mail_host
     *
     * @param string $mail_host
     * @return $this
     */
    public function setMailHost($mail_host)
    {
        $this->mail_host = $mail_host;

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
     * Method to set the value of field last_login
     *
     * @param string $last_login
     * @return $this
     */
    public function setLastLogin($last_login)
    {
        $this->last_login = $last_login;

        return $this;
    }

    /**
     * Method to set the value of field language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Method to set the value of field preferences
     *
     * @param string $preferences
     * @return $this
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;

        return $this;
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
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field mail_host
     *
     * @return string
     */
    public function getMailHost()
    {
        return $this->mail_host;
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
     * Returns the value of field last_login
     *
     * @return string
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * Returns the value of field language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Returns the value of field preferences
     *
     * @return string
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('user_id', 'App\Models\RoundcubeCache', 'user_id', array('alias' => 'RoundcubeCache'));
        $this->hasMany('user_id', 'App\Models\RoundcubeCacheIndex', 'user_id', array('alias' => 'RoundcubeCacheIndex'));
        $this->hasMany('user_id', 'App\Models\RoundcubeCacheMessages', 'user_id', array('alias' => 'RoundcubeCacheMessages'));
        $this->hasMany('user_id', 'App\Models\RoundcubeCacheThread', 'user_id', array('alias' => 'RoundcubeCacheThread'));
        $this->hasMany('user_id', 'App\Models\RoundcubeCollectedContacts', 'user_id', array('alias' => 'RoundcubeCollectedContacts'));
        $this->hasMany('user_id', 'App\Models\RoundcubeContactgroups', 'user_id', array('alias' => 'RoundcubeContactgroups'));
        $this->hasMany('user_id', 'App\Models\RoundcubeContacts', 'user_id', array('alias' => 'RoundcubeContacts'));
        $this->hasMany('user_id', 'App\Models\RoundcubeDictionary', 'user_id', array('alias' => 'RoundcubeDictionary'));
        $this->hasMany('user_id', 'App\Models\RoundcubeIdentities', 'user_id', array('alias' => 'RoundcubeIdentities'));
        $this->hasMany('user_id', 'App\Models\RoundcubeSearches', 'user_id', array('alias' => 'RoundcubeSearches'));
        $this->hasMany('user_id', 'App\Models\RoundcubeCache', 'user_id', NULL);
        $this->hasMany('user_id', 'App\Models\RoundcubeCacheIndex', 'user_id', NULL);
        $this->hasMany('user_id', 'App\Models\RoundcubeCacheMessages', 'user_id', NULL);
        $this->hasMany('user_id', 'App\Models\RoundcubeCacheThread', 'user_id', NULL);
        $this->hasMany('user_id', 'App\Models\RoundcubeCollectedContacts', 'user_id', NULL);
        $this->hasMany('user_id', 'App\Models\RoundcubeContactgroups', 'user_id', NULL);
        $this->hasMany('user_id', 'App\Models\RoundcubeContacts', 'user_id', NULL);
        $this->hasMany('user_id', 'App\Models\RoundcubeDictionary', 'user_id', NULL);
        $this->hasMany('user_id', 'App\Models\RoundcubeIdentities', 'user_id', NULL);
        $this->hasMany('user_id', 'App\Models\RoundcubeSearches', 'user_id', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'roundcube__users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeUsers[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeUsers
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
            'user_id' => 'user_id',
            'username' => 'username',
            'mail_host' => 'mail_host',
            'created' => 'created',
            'last_login' => 'last_login',
            'language' => 'language',
            'preferences' => 'preferences'
        );
    }

}
