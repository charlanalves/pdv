<?php

namespace App\Models;

class EmpresaHasLinkCentralcompras extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idlink;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $cd_upload;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $ordem_relevancia;

    /**
     * Method to set the value of field idlink
     *
     * @param integer $idlink
     * @return $this
     */
    public function setIdlink($idlink)
    {
        $this->idlink = $idlink;

        return $this;
    }

    /**
     * Method to set the value of field cd_empresa
     *
     * @param integer $cd_empresa
     * @return $this
     */
    public function setCdEmpresa($cd_empresa)
    {
        $this->cd_empresa = $cd_empresa;

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
     * Method to set the value of field descricao
     *
     * @param string $descricao
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Method to set the value of field ordem_relevancia
     *
     * @param integer $ordem_relevancia
     * @return $this
     */
    public function setOrdemRelevancia($ordem_relevancia)
    {
        $this->ordem_relevancia = $ordem_relevancia;

        return $this;
    }

    /**
     * Returns the value of field idlink
     *
     * @return integer
     */
    public function getIdlink()
    {
        return $this->idlink;
    }

    /**
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdEmpresa()
    {
        return $this->cd_empresa;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field ordem_relevancia
     *
     * @return integer
     */
    public function getOrdemRelevancia()
    {
        return $this->ordem_relevancia;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_upload', 'App\Models\Upload', 'cd_upload', array('alias' => 'Upload'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_upload', 'App\Models\Upload', 'cd_upload', array('foreignKey' => true,'alias' => 'Upload'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'empresa_has_link_centralcompras';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EmpresaHasLinkCentralcompras[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EmpresaHasLinkCentralcompras
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
            'idlink' => 'idlink',
            'cd_empresa' => 'cd_empresa',
            'cd_upload' => 'cd_upload',
            'descricao' => 'descricao',
            'ordem_relevancia' => 'ordem_relevancia'
        );
    }

}
