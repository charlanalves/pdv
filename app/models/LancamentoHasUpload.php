<?php

namespace App\Models;

class LancamentoHasUpload extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_lancamento;

    /**
     *
     * @var integer
     */
    protected $cd_upload;

    /**
     * Method to set the value of field cd_lancamento
     *
     * @param integer $cd_lancamento
     * @return $this
     */
    public function setCdLancamento($cd_lancamento)
    {
        $this->cd_lancamento = $cd_lancamento;

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
     * Returns the value of field cd_lancamento
     *
     * @return integer
     */
    public function getCdLancamento()
    {
        return $this->cd_lancamento;
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
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('cd_upload', 'App\Models\Upload', 'cd_upload', array('alias' => 'Upload'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
        $this->belongsTo('cd_upload', 'App\Models\Upload', 'cd_upload', array('foreignKey' => true,'alias' => 'Upload'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'lancamento_has_upload';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LancamentoHasUpload[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LancamentoHasUpload
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
            'cd_lancamento' => 'cd_lancamento',
            'cd_upload' => 'cd_upload'
        );
    }

}
