<?php

namespace App\Models;

class TipoItem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_tipo;

    /**
     *
     * @var string
     */
    protected $cd_tipo;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field id_tipo
     *
     * @param integer $id_tipo
     * @return $this
     */
    public function setIdTipo($id_tipo)
    {
        $this->id_tipo = $id_tipo;

        return $this;
    }

    /**
     * Method to set the value of field cd_tipo
     *
     * @param string $cd_tipo
     * @return $this
     */
    public function setCdTipo($cd_tipo)
    {
        $this->cd_tipo = $cd_tipo;

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
     * Returns the value of field id_tipo
     *
     * @return integer
     */
    public function getIdTipo()
    {
        return $this->id_tipo;
    }

    /**
     * Returns the value of field cd_tipo
     *
     * @return string
     */
    public function getCdTipo()
    {
        return $this->cd_tipo;
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
        $this->hasMany('id_tipo', 'App\Models\NfservicoItem', 'tipo_item', array('alias' => 'NfservicoItem'));
        $this->hasMany('id_tipo', 'App\Models\NfservicoItem', 'tipo_item', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tipo_item';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoItem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoItem
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
            'id_tipo' => 'id_tipo',
            'cd_tipo' => 'cd_tipo',
            'descricao' => 'descricao'
        );
    }

}
