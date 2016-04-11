<?php

namespace App\Models;

class Professionalhistory extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idProfessionalHistory;

    /**
     *
     * @var string
     */
    protected $business;

    /**
     *
     * @var string
     */
    protected $office;

    /**
     *
     * @var string
     */
    protected $init;

    /**
     *
     * @var string
     */
    protected $end;

    /**
     *
     * @var string
     */
    protected $activity;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     * Method to set the value of field idProfessionalHistory
     *
     * @param integer $idProfessionalHistory
     * @return $this
     */
    public function setIdprofessionalhistory($idProfessionalHistory)
    {
        $this->idProfessionalHistory = $idProfessionalHistory;

        return $this;
    }

    /**
     * Method to set the value of field business
     *
     * @param string $business
     * @return $this
     */
    public function setBusiness($business)
    {
        $this->business = $business;

        return $this;
    }

    /**
     * Method to set the value of field office
     *
     * @param string $office
     * @return $this
     */
    public function setOffice($office)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Method to set the value of field init
     *
     * @param string $init
     * @return $this
     */
    public function setInit($init)
    {
        if ($init) {
            $date = \DateTime::createFromFormat('d-m-Y', $init);
            $init = $date->format('Y-m-d');
        }
        $this->init = $init;

        return $this;
    }

    /**
     * Method to set the value of field end
     *
     * @param string $end
     * @return $this
     */
    public function setEnd($end)
    {
        if ($end) {
            $date = \DateTime::createFromFormat('d-m-Y', $end);
            $end = $date->format('Y-m-d');
        }
        $this->end = $end;

        return $this;
    }

    /**
     * Method to set the value of field activity
     *
     * @param string $activity
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

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
     * Returns the value of field idProfessionalHistory
     *
     * @return integer
     */
    public function getIdprofessionalhistory()
    {
        return $this->idProfessionalHistory;
    }

    /**
     * Returns the value of field business
     *
     * @return string
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * Returns the value of field office
     *
     * @return string
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * Returns the value of field init
     *
     * @return string
     */
    public function getInit()
    {
        if (!empty($this->init) && $this->init != '0000-00-00') {
            $date = \DateTime::createFromFormat('Y-m-d', $this->init);
            return $date->format('d-m-Y');
        }
        return '';
    }

    /**
     * Returns the value of field end
     *
     * @return string
     */
    public function getEnd()
    {
        if (!empty($this->end) && $this->end != '0000-00-00') {
            $date = \DateTime::createFromFormat('Y-m-d', $this->end);
            return $date->format('d-m-Y');
        }
        return '';
    }

    /**
     * Returns the value of field activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
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
        $this->setSource('professionalHistory');
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
    }

    public function getSource()
    {
        return 'professionalHistory';
    }

    /**
     * @return Professionalhistory[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Professionalhistory
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
            'idProfessionalHistory' => 'idProfessionalHistory',
            'business' => 'business',
            'office' => 'office',
            'init' => 'init',
            'end' => 'end',
            'activity' => 'activity',
            'user_idUser' => 'user_idUser'
        );
    }
}
