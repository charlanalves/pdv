<?php

namespace App\Models;

class SituacaoDocumentoFiscal extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_situacao;

    /**
     *
     * @var string
     */
    protected $cd_situacao;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field id_situacao
     *
     * @param integer $id_situacao
     * @return $this
     */
    public function setIdSituacao($id_situacao)
    {
        $this->id_situacao = $id_situacao;

        return $this;
    }

    /**
     * Method to set the value of field cd_situacao
     *
     * @param string $cd_situacao
     * @return $this
     */
    public function setCdSituacao($cd_situacao)
    {
        $this->cd_situacao = $cd_situacao;

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
     * Returns the value of field id_situacao
     *
     * @return integer
     */
    public function getIdSituacao()
    {
        return $this->id_situacao;
    }

    /**
     * Returns the value of field cd_situacao
     *
     * @return string
     */
    public function getCdSituacao()
    {
        return $this->cd_situacao;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_situacao', 'App\Models\Nfservico', 'cod_situacao', array('alias' => 'Nfservico'));
        $this->hasMany('id_situacao', 'App\Models\Nfservico', 'cod_situacao', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'situacao_documento_fiscal';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SituacaoDocumentoFiscal[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SituacaoDocumentoFiscal
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
            'id_situacao' => 'id_situacao',
            'cd_situacao' => 'cd_situacao',
            'descricao' => 'descricao'
        );
    }

}
