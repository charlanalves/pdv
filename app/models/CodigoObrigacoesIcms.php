<?php

namespace App\Models;

class CodigoObrigacoesIcms extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_obrigacoes_icms;

    /**
     *
     * @var string
     */
    protected $codigo_obrigacoes_icms;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field id_obrigacoes_icms
     *
     * @param integer $id_obrigacoes_icms
     * @return $this
     */
    public function setIdObrigacoesIcms($id_obrigacoes_icms)
    {
        $this->id_obrigacoes_icms = $id_obrigacoes_icms;

        return $this;
    }

    /**
     * Method to set the value of field codigo_obrigacoes_icms
     *
     * @param string $codigo_obrigacoes_icms
     * @return $this
     */
    public function setCodigoObrigacoesIcms($codigo_obrigacoes_icms)
    {
        $this->codigo_obrigacoes_icms = $codigo_obrigacoes_icms;

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
     * Returns the value of field id_obrigacoes_icms
     *
     * @return integer
     */
    public function getIdObrigacoesIcms()
    {
        return $this->id_obrigacoes_icms;
    }

    /**
     * Returns the value of field codigo_obrigacoes_icms
     *
     * @return string
     */
    public function getCodigoObrigacoesIcms()
    {
        return $this->codigo_obrigacoes_icms;
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
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'codigo_obrigacoes_icms';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CodigoObrigacoesIcms[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CodigoObrigacoesIcms
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
            'id_obrigacoes_icms' => 'id_obrigacoes_icms',
            'codigo_obrigacoes_icms' => 'codigo_obrigacoes_icms',
            'descricao' => 'descricao'
        );
    }

}
