<?php

namespace App\Models;

class EmpresaHasArquivos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idarquivo;

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
    protected $usuario_responsavel;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     * Method to set the value of field idarquivo
     *
     * @param integer $idarquivo
     * @return $this
     */
    public function setIdarquivo($idarquivo)
    {
        $this->idarquivo = $idarquivo;

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
     * Method to set the value of field usuario_responsavel
     *
     * @param integer $usuario_responsavel
     * @return $this
     */
    public function setUsuarioResponsavel($usuario_responsavel)
    {
        $this->usuario_responsavel = $usuario_responsavel;

        return $this;
    }

    /**
     * Method to set the value of field criado
     *
     * @param string $criado
     * @return $this
     */
    public function setCriado($criado)
    {
        $this->criado = $criado;

        return $this;
    }

    /**
     * Returns the value of field idarquivo
     *
     * @return integer
     */
    public function getIdarquivo()
    {
        return $this->idarquivo;
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
     * Returns the value of field usuario_responsavel
     *
     * @return integer
     */
    public function getUsuarioResponsavel()
    {
        return $this->usuario_responsavel;
    }

    /**
     * Returns the value of field criado
     *
     * @return string
     */
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_upload', 'App\Models\Upload', 'cd_upload', array('alias' => 'Upload'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_upload', 'App\Models\Upload', 'cd_upload', array('foreignKey' => true,'alias' => 'Upload'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'empresa_has_arquivos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EmpresaHasArquivos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EmpresaHasArquivos
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
            'idarquivo' => 'idarquivo',
            'cd_empresa' => 'cd_empresa',
            'cd_upload' => 'cd_upload',
            'descricao' => 'descricao',
            'usuario_responsavel' => 'usuario_responsavel',
            'criado' => 'criado'
        );
    }

}
