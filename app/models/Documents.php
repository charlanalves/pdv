<?php

namespace App\Models;

class Documents extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idDocuments;

    /**
     *
     * @var string
     */
    protected $cpfCnpj;

    /**
     *
     * @var string
     */
    protected $rg;

    /**
     *
     * @var string
     */
    protected $cnh;

    /**
     *
     * @var string
     */
    protected $typeCnh;

    /**
     *
     * @var string
     */
    protected $oab;

    /**
     *
     * @var string
     */
    protected $typeOab;

    /**
     *
     * @var integer
     */
    protected $user_idUser;

    /**
     * Method to set the value of field idDocuments
     *
     * @param integer $idDocuments
     * @return $this
     */
    public function setIddocuments($idDocuments)
    {
        $this->idDocuments = $idDocuments;

        return $this;
    }

    /**
     * Method to set the value of field cpfCnpj
     *
     * @param string $cpfCnpj
     * @return $this
     */
    public function setCpfcnpj($cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;

        return $this;
    }

    /**
     * Method to set the value of field rg
     *
     * @param string $rg
     * @return $this
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Method to set the value of field cnh
     *
     * @param string $cnh
     * @return $this
     */
    public function setCnh($cnh)
    {
        $this->cnh = $cnh;

        return $this;
    }

    /**
     * Method to set the value of field typeCnh
     *
     * @param string $typeCnh
     * @return $this
     */
    public function setTypecnh($typeCnh)
    {
        $this->typeCnh = $typeCnh;

        return $this;
    }

    /**
     * Method to set the value of field oab
     *
     * @param string $oab
     * @return $this
     */
    public function setOab($oab)
    {
        $this->oab = $oab;

        return $this;
    }

    /**
     * Method to set the value of field typeOab
     *
     * @param string $typeOab
     * @return $this
     */
    public function setTypeoab($typeOab)
    {
        $this->typeOab = $typeOab;

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
     * Returns the value of field idDocuments
     *
     * @return integer
     */
    public function getIddocuments()
    {
        return $this->idDocuments;
    }

    /**
     * Returns the value of field cpfCnpj
     *
     * @return string
     */
    public function getCpfcnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * Returns the value of field rg
     *
     * @return string
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Returns the value of field cnh
     *
     * @return string
     */
    public function getCnh()
    {
        return $this->cnh;
    }

    /**
     * Returns the value of field typeCnh
     *
     * @return string
     */
    public function getTypecnh()
    {
        return $this->typeCnh;
    }

    /**
     * Returns the value of field oab
     *
     * @return string
     */
    public function getOab()
    {
        return $this->oab;
    }

    /**
     * Returns the value of field typeOab
     *
     * @return string
     */
    public function getTypeoab()
    {
        return $this->typeOab;
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
        $this->belongsTo('documentsType_idDocumentsType', 'App\Models\DocumentsType', 'iddocumentsType', array('alias' => 'DocumentsType'));
        $this->belongsTo('people_idPeople', 'App\Models\People', 'idPeople', array('alias' => 'People'));
    }

    public function getSource()
    {
        return 'documents';
    }

    /**
     * @return Documents[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Documents
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
            'idDocuments' => 'idDocuments',
            'cpfCnpj' => 'cpfCnpj',
            'rg' => 'rg',
            'cnh' => 'cnh',
            'typeCnh' => 'typeCnh',
            'oab' => 'oab',
            'typeOab' => 'typeOab',
            'user_idUser' => 'user_idUser'
        );
    }
}
