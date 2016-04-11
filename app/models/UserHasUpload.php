<?php

namespace App\Models;

class UserHasUpload extends \Phalcon\Mvc\Model
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
    protected $upload_idUpload;

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
     * Method to set the value of field upload_idUpload
     *
     * @param integer $upload_idUpload
     * @return $this
     */
    public function setUploadIdupload($upload_idUpload)
    {
        $this->upload_idUpload = $upload_idUpload;

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
     * Returns the value of field upload_idUpload
     *
     * @return integer
     */
    public function getUploadIdupload()
    {
        return $this->upload_idUpload;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
        $this->belongsTo('upload_idUpload', 'App\Models\Upload', 'idUpload', array('alias' => 'Upload'));
    }

    public function getSource()
    {
        return 'user_has_upload';
    }

    /**
     * @return UserHasUpload[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return UserHasUpload
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
            'upload_idUpload' => 'upload_idUpload'
        );
    }
}
