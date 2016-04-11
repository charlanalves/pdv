<?php

namespace App\Models;

class CiSessionsAntigo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    protected $session_id;

    /**
     *
     * @var string
     */
    protected $ip_address;

    /**
     *
     * @var string
     */
    protected $user_agent;

    /**
     *
     * @var integer
     */
    protected $last_activity;

    /**
     *
     * @var string
     */
    protected $user_data;

    /**
     *
     * @var integer
     */
    protected $cd_usuario;

    /**
     * Method to set the value of field session_id
     *
     * @param string $session_id
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->session_id = $session_id;

        return $this;
    }

    /**
     * Method to set the value of field ip_address
     *
     * @param string $ip_address
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->ip_address = $ip_address;

        return $this;
    }

    /**
     * Method to set the value of field user_agent
     *
     * @param string $user_agent
     * @return $this
     */
    public function setUserAgent($user_agent)
    {
        $this->user_agent = $user_agent;

        return $this;
    }

    /**
     * Method to set the value of field last_activity
     *
     * @param integer $last_activity
     * @return $this
     */
    public function setLastActivity($last_activity)
    {
        $this->last_activity = $last_activity;

        return $this;
    }

    /**
     * Method to set the value of field user_data
     *
     * @param string $user_data
     * @return $this
     */
    public function setUserData($user_data)
    {
        $this->user_data = $user_data;

        return $this;
    }

    /**
     * Method to set the value of field cd_usuario
     *
     * @param integer $cd_usuario
     * @return $this
     */
    public function setCdUsuario($cd_usuario)
    {
        $this->cd_usuario = $cd_usuario;

        return $this;
    }

    /**
     * Returns the value of field session_id
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Returns the value of field ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Returns the value of field user_agent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * Returns the value of field last_activity
     *
     * @return integer
     */
    public function getLastActivity()
    {
        return $this->last_activity;
    }

    /**
     * Returns the value of field user_data
     *
     * @return string
     */
    public function getUserData()
    {
        return $this->user_data;
    }

    /**
     * Returns the value of field cd_usuario
     *
     * @return integer
     */
    public function getCdUsuario()
    {
        return $this->cd_usuario;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ci_sessions_antigo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CiSessionsAntigo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CiSessionsAntigo
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
            'session_id' => 'session_id',
            'ip_address' => 'ip_address',
            'user_agent' => 'user_agent',
            'last_activity' => 'last_activity',
            'user_data' => 'user_data',
            'cd_usuario' => 'cd_usuario'
        );
    }

}
