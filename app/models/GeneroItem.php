<?php

namespace App\Models;

class GeneroItem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_genero;

    /**
     *
     * @var integer
     */
    protected $cd_genero;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field id_genero
     *
     * @param integer $id_genero
     * @return $this
     */
    public function setIdGenero($id_genero)
    {
        $this->id_genero = $id_genero;

        return $this;
    }

    /**
     * Method to set the value of field cd_genero
     *
     * @param integer $cd_genero
     * @return $this
     */
    public function setCdGenero($cd_genero)
    {
        $this->cd_genero = $cd_genero;

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
     * Returns the value of field id_genero
     *
     * @return integer
     */
    public function getIdGenero()
    {
        return $this->id_genero;
    }

    /**
     * Returns the value of field cd_genero
     *
     * @return integer
     */
    public function getCdGenero()
    {
        return $this->cd_genero;
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
        $this->hasMany('id_genero', 'App\Models\NfservicoItem', 'cod_genero', array('alias' => 'NfservicoItem'));
        $this->hasMany('id_genero', 'App\Models\NfservicoItem', 'cod_genero', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'genero_item';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return GeneroItem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return GeneroItem
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
            'id_genero' => 'id_genero',
            'cd_genero' => 'cd_genero',
            'descricao' => 'descricao'
        );
    }

}
