<?php

namespace App\Models;

class TipoFuncionario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_tipo_funcionario;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $funcionario_producao;

    /**
     * Method to set the value of field cd_tipo_funcionario
     *
     * @param integer $cd_tipo_funcionario
     * @return $this
     */
    public function setCdTipoFuncionario($cd_tipo_funcionario)
    {
        $this->cd_tipo_funcionario = $cd_tipo_funcionario;

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
     * Method to set the value of field funcionario_producao
     *
     * @param integer $funcionario_producao
     * @return $this
     */
    public function setFuncionarioProducao($funcionario_producao)
    {
        $this->funcionario_producao = $funcionario_producao;

        return $this;
    }

    /**
     * Returns the value of field cd_tipo_funcionario
     *
     * @return integer
     */
    public function getCdTipoFuncionario()
    {
        return $this->cd_tipo_funcionario;
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
     * Returns the value of field funcionario_producao
     *
     * @return integer
     */
    public function getFuncionarioProducao()
    {
        return $this->funcionario_producao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_tipo_funcionario', 'App\Models\Empresa', 'cd_tipo_funcionario', array('alias' => 'Empresa'));
        $this->hasMany('cd_tipo_funcionario', 'App\Models\Empresa', 'cd_tipo_funcionario', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tipo_funcionario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoFuncionario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoFuncionario
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
            'cd_tipo_funcionario' => 'cd_tipo_funcionario',
            'descricao' => 'descricao',
            'funcionario_producao' => 'funcionario_producao'
        );
    }

}
