<?php

namespace App\Models;

class CompartilhamentoEmpresa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_compartilhamento;

    /**
     *
     * @var integer
     */
    protected $licenciada;

    /**
     *
     * @var integer
     */
    protected $franquia;

    /**
     *
     * @var integer
     */
    protected $cliente;

    /**
     *
     * @var integer
     */
    protected $funcionario;

    /**
     *
     * @var integer
     */
    protected $fornecdor;

    /**
     *
     * @var integer
     */
    protected $representante;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     * Method to set the value of field id_compartilhamento
     *
     * @param integer $id_compartilhamento
     * @return $this
     */
    public function setIdCompartilhamento($id_compartilhamento)
    {
        $this->id_compartilhamento = $id_compartilhamento;

        return $this;
    }

    /**
     * Method to set the value of field licenciada
     *
     * @param integer $licenciada
     * @return $this
     */
    public function setLicenciada($licenciada)
    {
        $this->licenciada = $licenciada;

        return $this;
    }

    /**
     * Method to set the value of field franquia
     *
     * @param integer $franquia
     * @return $this
     */
    public function setFranquia($franquia)
    {
        $this->franquia = $franquia;

        return $this;
    }

    /**
     * Method to set the value of field cliente
     *
     * @param integer $cliente
     * @return $this
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Method to set the value of field funcionario
     *
     * @param integer $funcionario
     * @return $this
     */
    public function setFuncionario($funcionario)
    {
        $this->funcionario = $funcionario;

        return $this;
    }

    /**
     * Method to set the value of field fornecdor
     *
     * @param integer $fornecdor
     * @return $this
     */
    public function setFornecdor($fornecdor)
    {
        $this->fornecdor = $fornecdor;

        return $this;
    }

    /**
     * Method to set the value of field representante
     *
     * @param integer $representante
     * @return $this
     */
    public function setRepresentante($representante)
    {
        $this->representante = $representante;

        return $this;
    }

    /**
     * Method to set the value of field criado
     *
     * @param string $criado
     * @return $this
     */
    public function setCriado($criado)
    {
        $this->criado = $criado;

        return $this;
    }

    /**
     * Returns the value of field id_compartilhamento
     *
     * @return integer
     */
    public function getIdCompartilhamento()
    {
        return $this->id_compartilhamento;
    }

    /**
     * Returns the value of field licenciada
     *
     * @return integer
     */
    public function getLicenciada()
    {
        return $this->licenciada;
    }

    /**
     * Returns the value of field franquia
     *
     * @return integer
     */
    public function getFranquia()
    {
        return $this->franquia;
    }

    /**
     * Returns the value of field cliente
     *
     * @return integer
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Returns the value of field funcionario
     *
     * @return integer
     */
    public function getFuncionario()
    {
        return $this->funcionario;
    }

    /**
     * Returns the value of field fornecdor
     *
     * @return integer
     */
    public function getFornecdor()
    {
        return $this->fornecdor;
    }

    /**
     * Returns the value of field representante
     *
     * @return integer
     */
    public function getRepresentante()
    {
        return $this->representante;
    }

    /**
     * Returns the value of field criado
     *
     * @return string
     */
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('licenciada', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('fornecdor', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('representante', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cliente', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('franquia', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('funcionario', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('licenciada', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('fornecdor', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('representante', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cliente', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('franquia', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('funcionario', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'compartilhamento_empresa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CompartilhamentoEmpresa[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CompartilhamentoEmpresa
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
            'id_compartilhamento' => 'id_compartilhamento',
            'licenciada' => 'licenciada',
            'franquia' => 'franquia',
            'cliente' => 'cliente',
            'funcionario' => 'funcionario',
            'fornecdor' => 'fornecdor',
            'representante' => 'representante',
            'criado' => 'criado'
        );
    }

}
