<?php

namespace App\Models;

class UploadHas extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $upload_cd_upload;

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $tabela;

    /**
     *
     * @var string
     */
    protected $pk;

    /**
     *
     * @var string
     */
    protected $imagem;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $ordem;

    /**
     * Method to set the value of field upload_cd_upload
     *
     * @param integer $upload_cd_upload
     * @return $this
     */
    public function setUploadCdUpload($upload_cd_upload)
    {
        $this->upload_cd_upload = $upload_cd_upload;

        return $this;
    }

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field tabela
     *
     * @param string $tabela
     * @return $this
     */
    public function setTabela($tabela)
    {
        $this->tabela = $tabela;

        return $this;
    }

    /**
     * Method to set the value of field pk
     *
     * @param string $pk
     * @return $this
     */
    public function setPk($pk)
    {
        $this->pk = $pk;

        return $this;
    }

    /**
     * Method to set the value of field imagem
     *
     * @param string $imagem
     * @return $this
     */
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

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
     * Method to set the value of field ordem
     *
     * @param integer $ordem
     * @return $this
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Returns the value of field upload_cd_upload
     *
     * @return integer
     */
    public function getUploadCdUpload()
    {
        return $this->upload_cd_upload;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field tabela
     *
     * @return string
     */
    public function getTabela()
    {
        return $this->tabela;
    }

    /**
     * Returns the value of field pk
     *
     * @return string
     */
    public function getPk()
    {
        return $this->pk;
    }

    /**
     * Returns the value of field imagem
     *
     * @return string
     */
    public function getImagem()
    {
        return $this->imagem;
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
     * Returns the value of field ordem
     *
     * @return integer
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('upload_cd_upload', 'App\Models\Upload', 'cd_upload', array('alias' => 'Upload'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'upload_has';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UploadHas[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UploadHas
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
            'upload_cd_upload' => 'upload_cd_upload',
            'id' => 'id',
            'tabela' => 'tabela',
            'pk' => 'pk',
            'imagem' => 'imagem',
            'descricao' => 'descricao',
            'ordem' => 'ordem'
        );
    }

}
