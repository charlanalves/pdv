<?php

namespace App\Models;

class LinhaRelacionada extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_relacionamento;

    /**
     *
     * @var integer
     */
    protected $id_linha_principal;

    /**
     *
     * @var integer
     */
    protected $id_linha_relacionada;

    /**
     * Method to set the value of field id_relacionamento
     *
     * @param integer $id_relacionamento
     * @return $this
     */
    public function setIdRelacionamento($id_relacionamento)
    {
        $this->id_relacionamento = $id_relacionamento;

        return $this;
    }

    /**
     * Method to set the value of field id_linha_principal
     *
     * @param integer $id_linha_principal
     * @return $this
     */
    public function setIdLinhaPrincipal($id_linha_principal)
    {
        $this->id_linha_principal = $id_linha_principal;

        return $this;
    }

    /**
     * Method to set the value of field id_linha_relacionada
     *
     * @param integer $id_linha_relacionada
     * @return $this
     */
    public function setIdLinhaRelacionada($id_linha_relacionada)
    {
        $this->id_linha_relacionada = $id_linha_relacionada;

        return $this;
    }

    /**
     * Returns the value of field id_relacionamento
     *
     * @return integer
     */
    public function getIdRelacionamento()
    {
        return $this->id_relacionamento;
    }

    /**
     * Returns the value of field id_linha_principal
     *
     * @return integer
     */
    public function getIdLinhaPrincipal()
    {
        return $this->id_linha_principal;
    }

    /**
     * Returns the value of field id_linha_relacionada
     *
     * @return integer
     */
    public function getIdLinhaRelacionada()
    {
        return $this->id_linha_relacionada;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_linha_principal', 'App\Models\LinhaProdutoSite', 'id_linha', array('alias' => 'LinhaProdutoSite'));
        $this->belongsTo('id_linha_relacionada', 'App\Models\LinhaProdutoSite', 'id_linha', array('alias' => 'LinhaProdutoSite'));
        $this->belongsTo('id_linha_principal', 'App\Models\LinhaProdutoSite', 'id_linha', array('foreignKey' => true,'alias' => 'LinhaProdutoSite'));
        $this->belongsTo('id_linha_relacionada', 'App\Models\LinhaProdutoSite', 'id_linha', array('foreignKey' => true,'alias' => 'LinhaProdutoSite'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'linha_relacionada';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LinhaRelacionada[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LinhaRelacionada
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
            'id_relacionamento' => 'id_relacionamento',
            'id_linha_principal' => 'id_linha_principal',
            'id_linha_relacionada' => 'id_linha_relacionada'
        );
    }

}
