<?php

namespace App\Models;

class OrdemServicoReparoHasFuncionario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_ordem_servico;

    /**
     *
     * @var integer
     */
    protected $cd_funcionario;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var double
     */
    protected $salario;

    /**
     *
     * @var double
     */
    protected $beneficios;

    /**
     *
     * @var double
     */
    protected $encargos;

    /**
     *
     * @var integer
     */
    protected $responsavel_equipe;

    /**
     * Method to set the value of field cd_ordem_servico
     *
     * @param integer $cd_ordem_servico
     * @return $this
     */
    public function setCdOrdemServico($cd_ordem_servico)
    {
        $this->cd_ordem_servico = $cd_ordem_servico;

        return $this;
    }

    /**
     * Method to set the value of field cd_funcionario
     *
     * @param integer $cd_funcionario
     * @return $this
     */
    public function setCdFuncionario($cd_funcionario)
    {
        $this->cd_funcionario = $cd_funcionario;

        return $this;
    }

    /**
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Method to set the value of field salario
     *
     * @param double $salario
     * @return $this
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Method to set the value of field beneficios
     *
     * @param double $beneficios
     * @return $this
     */
    public function setBeneficios($beneficios)
    {
        $this->beneficios = $beneficios;

        return $this;
    }

    /**
     * Method to set the value of field encargos
     *
     * @param double $encargos
     * @return $this
     */
    public function setEncargos($encargos)
    {
        $this->encargos = $encargos;

        return $this;
    }

    /**
     * Method to set the value of field responsavel_equipe
     *
     * @param integer $responsavel_equipe
     * @return $this
     */
    public function setResponsavelEquipe($responsavel_equipe)
    {
        $this->responsavel_equipe = $responsavel_equipe;

        return $this;
    }

    /**
     * Returns the value of field cd_ordem_servico
     *
     * @return integer
     */
    public function getCdOrdemServico()
    {
        return $this->cd_ordem_servico;
    }

    /**
     * Returns the value of field cd_funcionario
     *
     * @return integer
     */
    public function getCdFuncionario()
    {
        return $this->cd_funcionario;
    }

    /**
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field salario
     *
     * @return double
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Returns the value of field beneficios
     *
     * @return double
     */
    public function getBeneficios()
    {
        return $this->beneficios;
    }

    /**
     * Returns the value of field encargos
     *
     * @return double
     */
    public function getEncargos()
    {
        return $this->encargos;
    }

    /**
     * Returns the value of field responsavel_equipe
     *
     * @return integer
     */
    public function getResponsavelEquipe()
    {
        return $this->responsavel_equipe;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_funcionario', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_ordem_servico', 'App\Models\OrdemServicoReparo', 'cd_ordem_servico', array('alias' => 'OrdemServicoReparo'));
        $this->belongsTo('cd_funcionario', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_ordem_servico', 'App\Models\OrdemServicoReparo', 'cd_ordem_servico', array('foreignKey' => true,'alias' => 'OrdemServicoReparo'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ordem_servico_reparo_has_funcionario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrdemServicoReparoHasFuncionario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrdemServicoReparoHasFuncionario
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
            'cd_ordem_servico' => 'cd_ordem_servico',
            'cd_funcionario' => 'cd_funcionario',
            'nome' => 'nome',
            'salario' => 'salario',
            'beneficios' => 'beneficios',
            'encargos' => 'encargos',
            'responsavel_equipe' => 'responsavel_equipe'
        );
    }

}
