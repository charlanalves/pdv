<?php

namespace App\Models;

class LiquidacaoHasUpload extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idliquidacao;

    /**
     *
     * @var integer
     */
    protected $cd_upload;

    /**
     * Method to set the value of field idliquidacao
     *
     * @param integer $idliquidacao
     * @return $this
     */
    public function setIdliquidacao($idliquidacao)
    {
        $this->idliquidacao = $idliquidacao;

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
     * Returns the value of field idliquidacao
     *
     * @return integer
     */
    public function getIdliquidacao()
    {
        return $this->idliquidacao;
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
        $this->belongsTo('idliquidacao', 'App\Models\Liquidacao', 'idliquidacao', array('alias' => 'Liquidacao'));
        $this->belongsTo('cd_upload', 'App\Models\Upload', 'cd_upload', array('alias' => 'Upload'));
        $this->belongsTo('idliquidacao', 'App\Models\Liquidacao', 'idliquidacao', array('foreignKey' => true,'alias' => 'Liquidacao'));
        $this->belongsTo('cd_upload', 'App\Models\Upload', 'cd_upload', array('foreignKey' => true,'alias' => 'Upload'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'liquidacao_has_upload';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LiquidacaoHasUpload[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LiquidacaoHasUpload
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
            'idliquidacao' => 'idliquidacao',
            'cd_upload' => 'cd_upload'
        );
    }

}
