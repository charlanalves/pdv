<?php

namespace App\Models;

class News extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idNews;

    /**
     *
     * @var string
     */
    protected $title;

    /**
     *
     * @var string
     */
    protected $text;

    /**
     *
     * @var integer
     */
    protected $highlights;

    /**
     *
     * @var string
     */
    protected $source;

    /**
     *
     * @var string
     */
    protected $sourceLink;

    /**
     *
     * @var string
     */
    protected $author;

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
    protected $user_idUser;

    /**
     *
     * @var integer
     */
    protected $category_idCategory;

    /**
     * Method to set the value of field idNews
     *
     * @param integer $idNews
     * @return $this
     */
    public function setIdnews($idNews)
    {
        $this->idNews = $idNews;

        return $this;
    }

    /**
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Method to set the value of field text
     *
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Method to set the value of field highlights
     *
     * @param integer $highlights
     * @return $this
     */
    public function setHighlights($highlights)
    {
        $this->highlights = $highlights;

        return $this;
    }

    /**
     * Method to set the value of field source
     *
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Method to set the value of field sourceLink
     *
     * @param string $sourceLink
     * @return $this
     */
    public function setSourcelink($sourceLink)
    {
        $this->sourceLink = $sourceLink;

        return $this;
    }

    /**
     * Method to set the value of field author
     *
     * @param string $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;

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
     * Method to set the value of field category_idCategory
     *
     * @param integer $category_idCategory
     * @return $this
     */
    public function setCategoryIdcategory($category_idCategory)
    {
        $this->category_idCategory = $category_idCategory;

        return $this;
    }

    /**
     * Returns the value of field idNews
     *
     * @return integer
     */
    public function getIdnews()
    {
        return $this->idNews;
    }

    /**
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the value of field text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Returns the value of field highlights
     *
     * @return integer
     */
    public function getHighlights()
    {
        return $this->highlights;
    }

    /**
     * Returns the value of field source
     *
     * @return string
     */
    public function getSourceElement()
    {
        return $this->source;
    }

    /**
     * Returns the value of field sourceLink
     *
     * @return string
     */
    public function getSourcelink()
    {
        return $this->sourceLink;
    }

    /**
     * Returns the value of field author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
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
     * Returns the value of field user_idUser
     *
     * @return integer
     */
    public function getUserIduser()
    {
        return $this->user_idUser;
    }

    /**
     * Returns the value of field category_idCategory
     *
     * @return integer
     */
    public function getCategoryIdcategory()
    {
        return $this->category_idCategory;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idNews', 'App\Models\Email_has_news', 'news_idNews', array('alias' => 'Email_has_news'));
        $this->hasMany('idNews', 'App\Models\News_has_upload', 'news_idNews', array('alias' => 'News_has_upload'));
        $this->belongsTo('user_idUser', 'App\Models\User', 'idUser', array('alias' => 'User'));
        $this->belongsTo('category_idCategory', 'App\Models\Category', 'idCategory', array('alias' => 'Category'));
    }

    public function getSource()
    {
        return 'news';
    }

    /**
     * @return News[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return News
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
            'idNews' => 'idNews',
            'title' => 'title',
            'text' => 'text',
            'highlights' => 'highlights',
            'source' => 'source',
            'sourceLink' => 'sourceLink',
            'author' => 'author',
            'created' => 'created',
            'modified' => 'modified',
            'user_idUser' => 'user_idUser',
            'category_idCategory' => 'category_idCategory'
        );
    }
}
