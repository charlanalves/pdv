<?php

namespace App\Models;

class NewsHasUpload extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $news_idNews;

    /**
     *
     * @var integer
     */
    protected $upload_idUpload;

    /**
     * Method to set the value of field news_idNews
     *
     * @param integer $news_idNews
     * @return $this
     */
    public function setNewsIdnews($news_idNews)
    {
        $this->news_idNews = $news_idNews;

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
     * Returns the value of field news_idNews
     *
     * @return integer
     */
    public function getNewsIdnews()
    {
        return $this->news_idNews;
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
        $this->belongsTo('news_idNews', 'App\Models\News', 'idNews', array('alias' => 'News'));
        $this->belongsTo('upload_idUpload', 'App\Models\Upload', 'idUpload', array('alias' => 'Upload'));
    }

    public function getSource()
    {
        return 'news_has_upload';
    }

    /**
     * @return NewsHasUpload[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return NewsHasUpload
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
            'news_idNews' => 'news_idNews',
            'upload_idUpload' => 'upload_idUpload'
        );
    }
}
