<?php

namespace App\Models;

class HelpdeskProblemasPadrao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_padrao;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field id_padrao
     *
     * @param integer $id_padrao
     * @return $this
     */
    public function setIdPadrao($id_padrao)
    {
        $this->id_padrao = $id_padrao;

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
     * Returns the value of field id_padrao
     *
     * @return integer
     */
    public function getIdPadrao()
    {
        return $this->id_padrao;
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
        $this->hasMany('id_padrao', 'App\Models\Helpdesk', 'tipo_problema', array('alias' => 'Helpdesk'));
        $this->hasMany('id_padrao', 'App\Models\Helpdesk', 'tipo_problema', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'helpdesk_problemas_padrao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return HelpdeskProblemasPadrao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return HelpdeskProblemasPadrao
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
            'id_padrao' => 'id_padrao',
            'descricao' => 'descricao'
        );
    }

}
