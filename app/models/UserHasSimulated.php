<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;

class UserHasSimulated extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     *
     * @var integer
     */
    protected $simulated_idSimulated;

    /**
     *
     * @var integer
     */
    protected $answer;

    /**
     *
     * @var integer
     */
    protected $hit;

    /**
     *
     * @var string
     */
    protected $created;

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
     * Method to set the value of field simulated_idSimulated
     *
     * @param integer $simulated_idSimulated
     * @return $this
     */
    public function setSimulatedIdsimulated($simulated_idSimulated)
    {
        $this->simulated_idSimulated = $simulated_idSimulated;

        return $this;
    }

    /**
     * Method to set the value of field answer
     *
     * @param integer $answer
     * @return $this
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Method to set the value of field hit
     *
     * @param integer $hit
     * @return $this
     */
    public function setHit($hit)
    {
        $this->hit = $hit;

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
     * Returns the value of field user_idUser
     *
     * @return integer
     */
    public function getUserIduser()
    {
        return $this->user_idUser;
    }

    /**
     * Returns the value of field simulated_idSimulated
     *
     * @return integer
     */
    public function getSimulatedIdsimulated()
    {
        return $this->simulated_idSimulated;
    }

    /**
     * Returns the value of field answer
     *
     * @return integer
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Returns the value of field hit
     *
     * @return integer
     */
    public function getHit()
    {
        return $this->hit;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
        $this->belongsTo('simulated_idSimulated', 'App\Models\Simulated', 'idSimulated', array('alias' => 'Simulated'));
        $this->customInitialize();
    }

    public function getSource()
    {
        return 'user_has_simulated';
    }

    /**
     * @return UserHasSimulated[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return UserHasSimulated
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
            'user_idUser' => 'user_idUser',
            'simulated_idSimulated' => 'simulated_idSimulated',
            'answer' => 'answer',
            'hit' => 'hit',
            'created' => 'created'
        );
    }

    public function customInitialize()
    {
        $this->addBehavior(new Timestampable(
            array(
                'beforeCreate' => array(
                    'field' => array('created'),
                    'format' => 'Y-m-d H:i:s'
                    )
                )
        ));
    }
}
