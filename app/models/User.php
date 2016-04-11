<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Mvc\Model\Behavior\SoftDelete;

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idUser;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $password;

    /**
     *
     * @var string
     */
    protected $type;

    /**
     *
     * @var string
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $viewDays;

    /**
     *
     * @var string
     */
    protected $urlfy;

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
    protected $curriculumView;

    /**
     *
     * @var integer
     */
    protected $plan_idPlan;

    /**
     *
     * @var integer
     */
    protected $profiles_idProfiles;


    /**
     * Method to set the value of field idUser
     *
     * @param integer $idUser
     * @return $this
     */
    public function setIduser($idUser)
    {
        $this->idUser = $idUser;

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
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

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
     * Method to set the value of field viewDays
     *
     * @param integer $viewDays
     * @return $this
     */
    public function setViewdays($viewDays)
    {
        $this->viewDays = $viewDays;

        return $this;
    }

    /**
     * Method to set the value of field urlfy
     *
     * @param string $urlfy
     * @return $this
     */
    public function setUrlfy($urlfy)
    {
        $this->urlfy = $urlfy;

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
     * Method to set the value of field curriculumView
     *
     * @param integer $curriculumView
     * @return $this
     */
    public function setCurriculumview($curriculumView)
    {
        $this->curriculumView = $curriculumView;

        return $this;
    }

    /**
     * Method to set the value of field plan_idPlan
     *
     * @param integer $plan_idPlan
     * @return $this
     */
    public function setPlanIdplan($plan_idPlan)
    {
        $this->plan_idPlan = $plan_idPlan;

        return $this;
    }

    /**
     * Method to set the value of field profiles_idProfiles
     *
     * @param integer $profiles_idProfiles
     * @return $this
     */
    public function setProfilesIdprofiles($profiles_idProfiles)
    {
        $this->profiles_idProfiles = $profiles_idProfiles;

        return $this;
    }

    /**
     * Returns the value of field idUser
     *
     * @return integer
     */
    public function getIduser()
    {
        return $this->idUser;
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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
     * Returns the value of field viewDays
     *
     * @return integer
     */
    public function getViewdays()
    {
        return $this->viewDays;
    }

    /**
     * Returns the value of field urlfy
     *
     * @return string
     */
    public function getUrlfy()
    {
        return $this->urlfy;
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
     * Returns the value of field curriculumView
     *
     * @return integer
     */
    public function getCurriculumview()
    {
        return $this->curriculumView;
    }

    /**
     * Returns the value of field plan_idPlan
     *
     * @return integer
     */
    public function getPlanIdplan()
    {
        return $this->plan_idPlan;
    }

    /**
     * Returns the value of field profiles_idProfiles
     *
     * @return integer
     */
    public function getProfilesIdprofiles()
    {
        return $this->profiles_idProfiles;
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
        $this->hasMany('idUser', 'App\Models\Academic', 'user_idUser', array('alias' => 'Academic'));
        $this->hasMany('idUser', 'App\Models\Accesslog', 'user_idUser', array('alias' => 'AccessLog'));
        $this->hasMany('idUser', 'App\Models\Additional', 'user_idUser', array('alias' => 'Additional'));
        $this->hasMany('idUser', 'App\Models\Address', 'user_idUser', array('alias' => 'Address'));
        $this->hasMany('idUser', 'App\Models\Configuration', 'user_idUser', array('alias' => 'Configuration'));
        $this->hasMany('idUser', 'App\Models\Contact', 'user_idUser', array('alias' => 'Contact'));
        $this->hasMany('idUser', 'App\Models\Correspondent', 'user_idUser', array('alias' => 'Correspondent'));
        $this->hasMany('idUser', 'App\Models\Course', 'user_idUser', array('alias' => 'Course'));
        $this->hasMany('idUser', 'App\Models\Documents', 'user_idUser', array('alias' => 'Documents'));
        $this->hasMany('idUser', 'App\Models\EmailHasUser', 'user_idUser', array('alias' => 'EmailHasUser'));
        $this->hasMany('idUser', 'App\Models\Job', 'user_idUser', array('alias' => 'Job'));
        $this->hasMany('idUser', 'App\Models\JobHasUser', 'user_idUser', array('alias' => 'JobHasUser'));
        $this->hasMany('idUser', 'App\Models\News', 'user_idUser', array('alias' => 'News'));
        $this->hasMany('idUser', 'App\Models\Notify', 'user_idUser', array('alias' => 'Notify'));
        $this->hasMany('idUser', 'App\Models\Payments', 'user_idUser', array('alias' => 'Payments'));
        $this->hasMany('idUser', 'App\Models\Professionalhistory', 'user_idUser', array('alias' => 'Professionalhistory'));
        $this->hasMany('idUser', 'App\Models\UserHasSimulated', 'user_idUser', array('alias' => 'UserHasSimulated'));
        $this->hasMany('idUser', 'App\Models\UserHasUpload', 'user_idUser', array('alias' => 'UserHasUpload'));
        $this->hasMany('idUser', 'App\Models\Language', 'user_idUser', array('alias' => 'Language'));
        $this->belongsTo('plan_idPlan', 'App\Models\Plan', 'idPlan', array('alias' => 'Plan'));
        $this->belongsTo('profiles_idProfiles', 'App\Models\Profiles', 'idProfiles', array('alias' => 'Profiles'));
        $this->belongsTo('people_idPeople', 'App\Models\People', 'idPeople', array('alias' => 'People'));

        $this->customInitialize();
    }

    public function getSource()
    {
        return 'user';
    }

    /**
     * @return User[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return User
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
            'idUser' => 'idUser',
            'email' => 'email',
            'name' => 'name',
            'password' => 'password',
            'type' => 'type',
            'status' => 'status',
            'viewDays' => 'viewDays',
            'urlfy' => 'urlfy',
            'created' => 'created',
            'modified' => 'modified',
            'deleted' => 'deleted',
            'curriculumView' => 'curriculumView',
            'plan_idPlan' => 'plan_idPlan',
            'profiles_idProfiles' => 'profiles_idProfiles'
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

    public function beforeValidation()
    {
        if (!$this->password) {
            $this->skipAttributes(array('password'));
        }
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
                if (rtrim($model, '.') != 'App\Models\User') {
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
