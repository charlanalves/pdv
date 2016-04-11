<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Mvc\Model\Behavior\SoftDelete;

class Job extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idJob;

    /**
     *
     * @var string
     */
    protected $office;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var string
     */
    protected $status;

    /**
     *
     * @var double
     */
    protected $salary;

    /**
     *
     * @var string
     */
    protected $schedule;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $mandatoryRequirements;

    /**
     *
     * @var string
     */
    protected $desirableRequirements;

    /**
     *
     * @var string
     */
    protected $benefits;

    /**
     *
     * @var string
     */
    protected $employer;

    /**
     *
     * @var integer
     */
    protected $confidential;

    /**
     *
     * @var integer
     */
    protected $expectedSalary;

    /**
     *
     * @var string
     */
    protected $operationalArea;

    /**
     *
     * @var integer
     */
    protected $emailSent;

    /**
     *
     * @var integer
     */
    protected $views;

    /**
     *
     * @var string
     */
    protected $created;

    /**
     *
     * @var string
     */
    protected $modified;

    /**
     *
     * @var integer
     */
    protected $deleted;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     *
     * @var integer
     */
    protected $jobContract_idJobContract;

    /**
     *
     * @var integer
     */
    protected $address_idAddress;

    /**
     * Method to set the value of field idJob
     *
     * @param integer $idJob
     * @return $this
     */
    public function setIdjob($idJob)
    {
        $this->idJob = $idJob;

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
     * Method to set the value of field status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field salary
     *
     * @param double $salary
     * @return $this
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Method to set the value of field schedule
     *
     * @param string $schedule
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field mandatoryRequirements
     *
     * @param string $mandatoryRequirements
     * @return $this
     */
    public function setMandatoryrequirements($mandatoryRequirements)
    {
        $this->mandatoryRequirements = $mandatoryRequirements;

        return $this;
    }

    /**
     * Method to set the value of field desirableRequirements
     *
     * @param string $desirableRequirements
     * @return $this
     */
    public function setDesirablerequirements($desirableRequirements)
    {
        $this->desirableRequirements = $desirableRequirements;

        return $this;
    }

    /**
     * Method to set the value of field benefits
     *
     * @param string $benefits
     * @return $this
     */
    public function setBenefits($benefits)
    {
        $this->benefits = $benefits;

        return $this;
    }

    /**
     * Method to set the value of field operationalArea
     *
     * @param string $operationalArea
     * @return $this
     */
    public function setOperationalarea($operationalArea)
    {
        $this->operationalArea = $operationalArea;

        return $this;
    }

    /**
     * Method to set the value of field emailSent
     *
     * @param integer $emailSent
     * @return $this
     */
    public function setEmailsent($emailSent)
    {
        $this->emailSent = $emailSent;

        return $this;
    }

    /**
     * Method to set the value of field views
     *
     * @param integer $views
     * @return $this
     */
    public function setViews($views)
    {
        $this->views = $views;

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
     * Method to set the value of field modified
     *
     * @param string $modified
     * @return $this
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Method to set the value of field deleted
     *
     * @param integer $deleted
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

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
     * Method to set the value of field employer
     *
     * @param string $employer
     * @return $this
     */
    public function setEmployer($employer)
    {
        $this->employer = $employer;

        return $this;
    }

    /**
     * Method to set the value of field confidential
     *
     * @param integer $confidential
     * @return $this
     */
    public function setConfidential($confidential)
    {
        $this->confidential = $confidential;

        return $this;
    }

    /**
     * Method to set the value of field expectedSalary
     *
     * @param integer $expectedSalary
     * @return $this
     */
    public function setExpectedSalary($expectedSalary)
    {
        $this->expectedSalary = $expectedSalary;

        return $this;
    }

    /**
     * Method to set the value of field jobContract_idJobContract
     *
     * @param integer $jobContract_idJobContract
     * @return $this
     */
    public function setJobcontractIdjobcontract($jobContract_idJobContract)
    {
        $this->jobContract_idJobContract = $jobContract_idJobContract;

        return $this;
    }

    /**
     * Method to set the value of field address_idAddress
     *
     * @param integer $address_idAddress
     * @return $this
     */
    public function setAddressIdaddress($address_idAddress)
    {
        $this->address_idAddress = $address_idAddress;

        return $this;
    }

    /**
     * Returns the value of field idJob
     *
     * @return integer
     */
    public function getIdjob()
    {
        return $this->idJob;
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
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field salary
     *
     * @return double
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Returns the value of field schedule
     *
     * @return string
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field mandatoryRequirements
     *
     * @return string
     */
    public function getMandatoryrequirements()
    {
        return $this->mandatoryRequirements;
    }

    /**
     * Returns the value of field desirableRequirements
     *
     * @return string
     */
    public function getDesirablerequirements()
    {
        return $this->desirableRequirements;
    }

    /**
     * Returns the value of field benefits
     *
     * @return string
     */
    public function getBenefits()
    {
        return $this->benefits;
    }

    /**
     * Returns the value of field operationalArea
     *
     * @return string
     */
    public function getOperationalarea()
    {
        return $this->operationalArea;
    }

    /**
     * Returns the value of field emailSent
     *
     * @return integer
     */
    public function getEmailsent()
    {
        return $this->emailSent;
    }

    /**
     * Returns the value of field views
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
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
     * Returns the value of field modified
     *
     * @return string
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Returns the value of field deleted
     *
     * @return integer
     */
    public function getDeleted()
    {
        return $this->deleted;
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
     * Returns the value of field jobContract_idJobContract
     *
     * @return integer
     */
    public function getJobcontractIdjobcontract()
    {
        return $this->jobContract_idJobContract;
    }

    /**
     * Returns the value of field address_idAddress
     *
     * @return integer
     */
    public function getAddressIdaddress()
    {
        return $this->address_idAddress;
    }

    /**
     * Returns the value of field employer
     *
     * @return string
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Returns the value of field confidential
     *
     * @return integer
     */
    public function getConfidential()
    {
        return $this->confidential;
    }

    /**
     * Returns the value of field expectedSalary
     *
     * @return integer
     */
    public function getExpectedSalary()
    {
        return $this->expectedSalary;
    }

    /**
     * Validations and business logic
     */
    public function validation()
    {

        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idJob', 'App\Models\EmailHasJob', 'job_idJob', array('alias' => 'EmailHasJob'));
        $this->hasMany('idJob', 'App\Models\JobHasUser', 'job_idJob', array('alias' => 'JobHasUser'));
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
        $this->belongsTo('jobContract_idJobContract', 'App\Models\Jobcontract', 'idJobContract', array('alias' => 'JobContract'));
        $this->belongsTo('address_idAddress', 'App\Models\Address', 'idAddress', array('alias' => 'Address'));

        $this->customInitialize();
    }

    public function getSource()
    {
        return 'job';
    }

    /**
     * @return Job[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Job
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
            'idJob' => 'idJob',
            'office' => 'office',
            'description' => 'description',
            'status' => 'status',
            'salary' => 'salary',
            'schedule' => 'schedule',
            'email' => 'email',
            'mandatoryRequirements' => 'mandatoryRequirements',
            'desirableRequirements' => 'desirableRequirements',
            'benefits' => 'benefits',
            'operationalArea' => 'operationalArea',
            'employer' => 'employer',
            'confidential' => 'confidential',
            'expectedSalary' => 'expectedSalary',
            'emailSent' => 'emailSent',
            'views' => 'views',
            'created' => 'created',
            'modified' => 'modified',
            'deleted' => 'deleted',
            'user_idUser' => 'user_idUser',
            'jobContract_idJobContract' => 'jobContract_idJobContract',
            'address_idAddress' => 'address_idAddress'
        );
    }

    public function customInitialize()
    {
        $this->addBehavior(new Timestampable(
            array(
                'beforeCreate' => array(
                    'field' => array('created','modified'),
                    'format' => 'Y-m-d H:i:s'
                    )
                )
        ));
        $this->addBehavior(new Timestampable(
            array(
                'beforeUpdate' => array(
                    'field' => 'modified',
                    'format' => 'Y-m-d H:i:s'
                    )
                )
        ));
        $this->addBehavior(new SoftDelete(
            array(
                'field' => 'deleted',
                'value' => 1
                  )
        ));
        $this->skipAttributesOnUpdate(array('created'));
    }

    public static function search($params = null)
    {
        $query = self::query();

        // check if we need to join a table
        preg_match_all('/[\S]*\./', $params['conditions'] .' '. $params['order'], $aModelsToJoin);
        if (count($aModelsToJoin) > 0) {
            // remove duplicates
            $aModelsToJoin = array_filter(array_unique($aModelsToJoin[0]));
            foreach ($aModelsToJoin as $model) {
                if (rtrim($model, '.') != 'App\Models\Job') {
                    $query->Join(rtrim($model, '.'));
                }
            }
        }

        if (isset($params['conditions'])) {
            $query->where($params['conditions'], $params['bind']);
        }

        if (isset($params['order'])) {
            $query->order($params['order']);
        }

        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = 0;
            }

            $query->limit($params['limit'], $params['offset']);
        }
        if (isset($params['columns'])) {
            $query->columns($params['columns']);
        }

        if (isset($params['bulder']) && $params['bulder'] == 1) {
            return $query;
        } else {
            return $query->execute();
        }
    }
}
