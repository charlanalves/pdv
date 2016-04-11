<?php

namespace App\Models;

class RoundcubeSession extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    protected $sess_id;

    /**
     *
     * @var string
     */
    protected $created;

    /**
     *
     * @var string
     */
    protected $changed;

    /**
     *
     * @var string
     */
    protected $ip;

    /**
     *
     * @var string
     */
    protected $vars;

    /**
     * Method to set the value of field sess_id
     *
     * @param string $sess_id
     * @return $this
     */
    public function setSessId($sess_id)
    {
        $this->sess_id = $sess_id;

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
     * Method to set the value of field vars
     *
     * @param string $vars
     * @return $this
     */
    public function setVars($vars)
    {
        $this->vars = $vars;

        return $this;
    }

    /**
     * Returns the value of field sess_id
     *
     * @return string
     */
    public function getSessId()
    {
        return $this->sess_id;
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
     * Returns the value of field changed
     *
     * @return string
     */
    public function getChanged()
    {
        return $this->changed;
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
     * Returns the value of field vars
     *
     * @return string
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'roundcube__session';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeSession[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundcubeSession
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
            'sess_id' => 'sess_id',
            'created' => 'created',
            'changed' => 'changed',
            'ip' => 'ip',
            'vars' => 'vars'
        );
    }

}
