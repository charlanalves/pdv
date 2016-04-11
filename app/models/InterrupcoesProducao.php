<?php

namespace App\Models;

class InterrupcoesProducao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $dia;

    /**
     *
     * @var integer
     */
    protected $tipo;

    /**
     *
     * @var integer
     */
    protected $integral_parcial;

    /**
     *
     * @var string
     */
    protected $hora_inicio;

    /**
     *
     * @var string
     */
    protected $hora_fim;

    /**
     *
     * @var string
     */
    protected $hora_intervalo;

    /**
     *
     * @var string
     */
    protected $motivo;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Method to set the value of field dia
     *
     * @param string $dia
     * @return $this
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Method to set the value of field tipo
     *
     * @param integer $tipo
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Method to set the value of field integral_parcial
     *
     * @param integer $integral_parcial
     * @return $this
     */
    public function setIntegralParcial($integral_parcial)
    {
        $this->integral_parcial = $integral_parcial;

        return $this;
    }

    /**
     * Method to set the value of field hora_inicio
     *
     * @param string $hora_inicio
     * @return $this
     */
    public function setHoraInicio($hora_inicio)
    {
        $this->hora_inicio = $hora_inicio;

        return $this;
    }

    /**
     * Method to set the value of field hora_fim
     *
     * @param string $hora_fim
     * @return $this
     */
    public function setHoraFim($hora_fim)
    {
        $this->hora_fim = $hora_fim;

        return $this;
    }

    /**
     * Method to set the value of field hora_intervalo
     *
     * @param string $hora_intervalo
     * @return $this
     */
    public function setHoraIntervalo($hora_intervalo)
    {
        $this->hora_intervalo = $hora_intervalo;

        return $this;
    }

    /**
     * Method to set the value of field motivo
     *
     * @param string $motivo
     * @return $this
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field dia
     *
     * @return string
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Returns the value of field tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Returns the value of field integral_parcial
     *
     * @return integer
     */
    public function getIntegralParcial()
    {
        return $this->integral_parcial;
    }

    /**
     * Returns the value of field hora_inicio
     *
     * @return string
     */
    public function getHoraInicio()
    {
        return $this->hora_inicio;
    }

    /**
     * Returns the value of field hora_fim
     *
     * @return string
     */
    public function getHoraFim()
    {
        return $this->hora_fim;
    }

    /**
     * Returns the value of field hora_intervalo
     *
     * @return string
     */
    public function getHoraIntervalo()
    {
        return $this->hora_intervalo;
    }

    /**
     * Returns the value of field motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'interrupcoes_producao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return InterrupcoesProducao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return InterrupcoesProducao
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
            'id' => 'id',
            'cd_empresa' => 'cd_empresa',
            'nome' => 'nome',
            'dia' => 'dia',
            'tipo' => 'tipo',
            'integral_parcial' => 'integral_parcial',
            'hora_inicio' => 'hora_inicio',
            'hora_fim' => 'hora_fim',
            'hora_intervalo' => 'hora_intervalo',
            'motivo' => 'motivo'
        );
    }

}
