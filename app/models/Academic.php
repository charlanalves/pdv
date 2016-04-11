<?php

namespace App\Models;

class Academic extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idAcademic;

    /**
     *
     * @var string
     */
    protected $course;

    /**
     *
     * @var string
     */
    protected $institution;

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
    protected $obs;

    /**
     *
     * @var integer
     */
    protected $literacy_idLiteracy;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     * Method to set the value of field idAcademic
     *
     * @param integer $idAcademic
     * @return $this
     */
    public function setIdacademic($idAcademic)
    {
        $this->idAcademic = $idAcademic;

        return $this;
    }

    /**
     * Method to set the value of field course
     *
     * @param string $course
     * @return $this
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Method to set the value of field institution
     *
     * @param string $institution
     * @return $this
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;

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
     * Method to set the value of field obs
     *
     * @param string $obs
     * @return $this
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Method to set the value of field literacy_idLiteracy
     *
     * @param integer $literacy_idLiteracy
     * @return $this
     */
    public function setLiteracyIdliteracy($literacy_idLiteracy)
    {
        $this->literacy_idLiteracy = $literacy_idLiteracy;

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
     * Returns the value of field idAcademic
     *
     * @return integer
     */
    public function getIdacademic()
    {
        return $this->idAcademic;
    }

    /**
     * Returns the value of field course
     *
     * @return string
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Returns the value of field institution
     *
     * @return string
     */
    public function getInstitution()
    {
        return $this->institution;
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
     * Returns the value of field obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Returns the value of field literacy_idLiteracy
     *
     * @return integer
     */
    public function getLiteracyIdliteracy()
    {
        return $this->literacy_idLiteracy;
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
        $this->belongsTo('literacy_idLiteracy', 'App\Models\Literacy', 'idLiteracy', array('alias' => 'Literacy'));
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
    }

    public function getSource()
    {
        return 'academic';
    }

    /**
     * @return Academic[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Academic
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
            'idAcademic' => 'idAcademic',
            'course' => 'course',
            'institution' => 'institution',
            'init' => 'init',
            'end' => 'end',
            'obs' => 'obs',
            'literacy_idLiteracy' => 'literacy_idLiteracy',
            'user_idUser' => 'user_idUser'
        );
    }
}
