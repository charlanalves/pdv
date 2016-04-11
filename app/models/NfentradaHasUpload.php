<?php

namespace App\Models;

class NfentradaHasUpload extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_nfentrada;

    /**
     *
     * @var integer
     */
    protected $cd_upload;

    /**
     * Method to set the value of field cd_nfentrada
     *
     * @param integer $cd_nfentrada
     * @return $this
     */
    public function setCdNfentrada($cd_nfentrada)
    {
        $this->cd_nfentrada = $cd_nfentrada;

        return $this;
    }

    /**
     * Method to set the value of field cd_upload
     *
     * @param integer $cd_upload
     * @return $this
     */
    public function setCdUpload($cd_upload)
    {
        $this->cd_upload = $cd_upload;

        return $this;
    }

    /**
     * Returns the value of field cd_nfentrada
     *
     * @return integer
     */
    public function getCdNfentrada()
    {
        return $this->cd_nfentrada;
    }

    /**
     * Returns the value of field cd_upload
     *
     * @return integer
     */
    public function getCdUpload()
    {
        return $this->cd_upload;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_nfentrada', 'App\Models\Nfentrada', 'cd_nfentrada', array('alias' => 'Nfentrada'));
        $this->belongsTo('cd_upload', 'App\Models\Upload', 'cd_upload', array('alias' => 'Upload'));
        $this->belongsTo('cd_nfentrada', 'App\Models\Nfentrada', 'cd_nfentrada', array('foreignKey' => true,'alias' => 'Nfentrada'));
        $this->belongsTo('cd_upload', 'App\Models\Upload', 'cd_upload', array('foreignKey' => true,'alias' => 'Upload'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfentrada_has_upload';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfentradaHasUpload[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfentradaHasUpload
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'cd_nfentrada' => 'cd_nfentrada',
            'cd_upload' => 'cd_upload'
        );
    }

}
