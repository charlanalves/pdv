<?php

namespace App\Models;

class ServicosOrcamento extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_servico;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field cd_servico
     *
     * @param integer $cd_servico
     * @return $this
     */
    public function setCdServico($cd_servico)
    {
        $this->cd_servico = $cd_servico;

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
     * Returns the value of field cd_servico
     *
     * @return integer
     */
    public function getCdServico()
    {
        return $this->cd_servico;
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
        $this->hasMany('cd_servico', 'App\Models\OrcamentoHasServico', 'cd_servico', array('alias' => 'OrcamentoHasServico'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->hasMany('cd_servico', 'App\Models\OrcamentoHasServico', 'cd_servico', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'servicos_orcamento';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ServicosOrcamento[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ServicosOrcamento
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
            'cd_servico' => 'cd_servico',
            'cd_empresa' => 'cd_empresa',
            'descricao' => 'descricao'
        );
    }

}
