<?php

namespace App\Models;

class Course extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idCourse;

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
    protected $description;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $institution;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     *
     * @var integer
     */
    protected $literacy_idLiteracy;

    /**
     * Method to set the value of field idCourse
     *
     * @param integer $idCourse
     * @return $this
     */
    public function setIdcourse($idCourse)
    {
        $this->idCourse = $idCourse;

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
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * Returns the value of field idCourse
     *
     * @return integer
     */
    public function getIdcourse()
    {
        return $this->idCourse;
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
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Returns the value of field user_idUser
     *
     * @return integer
     */
    public function getUserIduser()
    {
        return $this->user_idUser;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
    }

    public function getSource()
    {
        return 'course';
    }

    /**
     * @return Course[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Course
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
            'idCourse' => 'idCourse',
            'init' => 'init',
            'end' => 'end',
            'description' => 'description',
            'name' => 'name',
            'institution' => 'institution',
            'user_idUser' => 'user_idUser',
        );
    }
}
