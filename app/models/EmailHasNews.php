<?php

namespace App\Models;

class EmailHasNews extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $email_idEmail;

    /**
     *
     * @var integer
     */
    protected $news_idNews;

    /**
     *
     * @var integer
     */
    protected $emailLog_idEmailLog;

    /**
     * Method to set the value of field email_idEmail
     *
     * @param integer $email_idEmail
     * @return $this
     */
    public function setEmailIdemail($email_idEmail)
    {
        $this->email_idEmail = $email_idEmail;

        return $this;
    }

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
     * Method to set the value of field emailLog_idEmailLog
     *
     * @param integer $emailLog_idEmailLog
     * @return $this
     */
    public function setEmaillogIdemaillog($emailLog_idEmailLog)
    {
        $this->emailLog_idEmailLog = $emailLog_idEmailLog;

        return $this;
    }

    /**
     * Returns the value of field email_idEmail
     *
     * @return integer
     */
    public function getEmailIdemail()
    {
        return $this->email_idEmail;
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
     * Returns the value of field emailLog_idEmailLog
     *
     * @return integer
     */
    public function getEmaillogIdemaillog()
    {
        return $this->emailLog_idEmailLog;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('email_idEmail', 'App\Models\Email', 'idEmail', array('alias' => 'Email'));
        $this->belongsTo('news_idNews', 'App\Models\News', 'idNews', array('alias' => 'News'));
        $this->belongsTo('emailLog_idEmailLog', 'App\Models\EmailLog', 'idEmailLog', array('alias' => 'EmailLog'));
    }

    public function getSource()
    {
        return 'email_has_news';
    }

    /**
     * @return EmailHasNews[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return EmailHasNews
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
            'email_idEmail' => 'email_idEmail',
            'news_idNews' => 'news_idNews',
            'emailLog_idEmailLog' => 'emailLog_idEmailLog'
        );
    }
}
