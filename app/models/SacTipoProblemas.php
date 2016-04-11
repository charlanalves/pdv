<?php

namespace App\Models;

class SacTipoProblemas extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cod_tipo_problemas;

    /**
     *
     * @var integer
     */
    protected $cod_modulo;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $tempo_limite;

    /**
     * Method to set the value of field cod_tipo_problemas
     *
     * @param integer $cod_tipo_problemas
     * @return $this
     */
    public function setCodTipoProblemas($cod_tipo_problemas)
    {
        $this->cod_tipo_problemas = $cod_tipo_problemas;

        return $this;
    }

    /**
     * Method to set the value of field cod_modulo
     *
     * @param integer $cod_modulo
     * @return $this
     */
    public function setCodModulo($cod_modulo)
    {
        $this->cod_modulo = $cod_modulo;

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
     * Method to set the value of field tempo_limite
     *
     * @param integer $tempo_limite
     * @return $this
     */
    public function setTempoLimite($tempo_limite)
    {
        $this->tempo_limite = $tempo_limite;

        return $this;
    }

    /**
     * Returns the value of field cod_tipo_problemas
     *
     * @return integer
     */
    public function getCodTipoProblemas()
    {
        return $this->cod_tipo_problemas;
    }

    /**
     * Returns the value of field cod_modulo
     *
     * @return integer
     */
    public function getCodModulo()
    {
        return $this->cod_modulo;
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
     * Returns the value of field tempo_limite
     *
     * @return integer
     */
    public function getTempoLimite()
    {
        return $this->tempo_limite;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cod_modulo', 'App\Models\Modulo', 'cd_modulo', array('alias' => 'Modulo'));
        $this->belongsTo('cod_modulo', 'App\Models\Modulo', 'cd_modulo', array('foreignKey' => true,'alias' => 'Modulo'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sac_tipo_problemas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacTipoProblemas[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacTipoProblemas
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
            'cod_tipo_problemas' => 'cod_tipo_problemas',
            'cod_modulo' => 'cod_modulo',
            'descricao' => 'descricao',
            'tempo_limite' => 'tempo_limite'
        );
    }

}
