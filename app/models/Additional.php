<?php

namespace App\Models;

class Additional extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idAdditional;

    /**
     *
     * @var string
     */
    protected $maritalStatus;

    /**
     *
     * @var string
     */
    protected $birth;

    /**
     *
     * @var string
     */
    protected $nationality;

    /**
     *
     * @var string
     */
    protected $aboutMe;

    /**
     *
     * @var string
     */
    protected $careerGoal;

    /**
     *
     * @var string
     */
    protected $additionalInformation;

    /**
     *
     * @var string
     */
    protected $areaOfWork;

    /**
     *
     * @var double
     */
    protected $salaryInterest;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     * Method to set the value of field idAdditional
     *
     * @param integer $idAdditional
     * @return $this
     */
    public function setIdadditional($idAdditional)
    {
        $this->idAdditional = $idAdditional;

        return $this;
    }

    /**
     * Method to set the value of field maritalStatus
     *
     * @param string $maritalStatus
     * @return $this
     */
    public function setMaritalstatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    /**
     * Method to set the value of field birth
     *
     * @param string $birth
     * @return $this
     */
    public function setBirth($birth)
    {
        if ($birth) {
            $date = \DateTime::createFromFormat('d-m-Y', $birth);
            $birth = $date->format('Y-m-d');
        }

        $this->birth = $birth;

        return $this;
    }

    /**
     * Method to set the value of field nationality
     *
     * @param string $nationality
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Method to set the value of field aboutMe
     *
     * @param string $aboutMe
     * @return $this
     */
    public function setAboutme($aboutMe)
    {
        $this->aboutMe = $aboutMe;

        return $this;
    }

    /**
     * Method to set the value of field careerGoal
     *
     * @param string $careerGoal
     * @return $this
     */
    public function setCareergoal($careerGoal)
    {
        $this->careerGoal = $careerGoal;

        return $this;
    }

    /**
     * Method to set the value of field additionalInformation
     *
     * @param string $additionalInformation
     * @return $this
     */
    public function setAdditionalinformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    /**
     * Method to set the value of field areaOfWork
     *
     * @param string $areaOfWork
     * @return $this
     */
    public function setAreaOfWork($areaOfWork)
    {
        $this->areaOfWork = $areaOfWork;

        return $this;
    }

    /**
     * Method to set the value of field salaryInterest
     *
     * @param double $salaryInterest
     * @return $this
     */
    public function setSalaryinterest($salaryInterest)
    {
        $salaryInterest = str_replace('.', '', $salaryInterest);
        $salaryInterest = str_replace(',', '.', $salaryInterest);
        $this->salaryInterest = $salaryInterest;

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
     * Returns the value of field idAdditional
     *
     * @return integer
     */
    public function getIdadditional()
    {
        return $this->idAdditional;
    }

    /**
     * Returns the value of field maritalStatus
     *
     * @return string
     */
    public function getMaritalstatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Returns the value of field birth
     *
     * @return string
     */
    public function getBirth()
    {
        if (!empty($this->birth) && ($this->birth != '0000-00-00')) {
            $date = \DateTime::createFromFormat('Y-m-d', $this->birth);
            return $date->format('d-m-Y');
        }
        return '';
    }

    /**
     * Returns the value of field nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Returns the value of field aboutMe
     *
     * @return string
     */
    public function getAboutme()
    {
        return $this->aboutMe;
    }

    /**
     * Returns the value of field careerGoal
     *
     * @return string
     */
    public function getCareergoal()
    {
        return $this->careerGoal;
    }

    /**
     * Returns the value of field additionalInformation
     *
     * @return string
     */
    public function getAdditionalinformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Returns the value of field areaOfWork
     *
     * @return string
     */
    public function getAreaOfWork()
    {
        return $this->areaOfWork;
    }

    /**
     * Returns the value of field salaryInterest
     *
     * @return double
     */
    public function getSalaryinterest()
    {
        return $this->salaryInterest;
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
        return 'additional';
    }

    /**
     * @return Additional[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Additional
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
            'idAdditional' => 'idAdditional',
            'maritalStatus' => 'maritalStatus',
            'birth' => 'birth',
            'nationality' => 'nationality',
            'aboutMe' => 'aboutMe',
            'careerGoal' => 'careerGoal',
            'additionalInformation' => 'additionalInformation',
            'salaryInterest' => 'salaryInterest',
            'areaOfWork' => 'areaOfWork',
            'user_idUser' => 'user_idUser'
        );
    }
}
