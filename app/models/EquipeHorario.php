<?php

namespace App\Models;

class EquipeHorario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_equipe;

    /**
     *
     * @var integer
     */
    protected $cod_dia;

    /**
     *
     * @var string
     */
    protected $dia;

    /**
     *
     * @var string
     */
    protected $horario_entrada;

    /**
     *
     * @var string
     */
    protected $ida_almoco;

    /**
     *
     * @var string
     */
    protected $volta_almoco;

    /**
     *
     * @var string
     */
    protected $horario_saida;

    /**
     * Method to set the value of field cd_equipe
     *
     * @param integer $cd_equipe
     * @return $this
     */
    public function setCdEquipe($cd_equipe)
    {
        $this->cd_equipe = $cd_equipe;

        return $this;
    }

    /**
     * Method to set the value of field cod_dia
     *
     * @param integer $cod_dia
     * @return $this
     */
    public function setCodDia($cod_dia)
    {
        $this->cod_dia = $cod_dia;

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
     * Method to set the value of field horario_entrada
     *
     * @param string $horario_entrada
     * @return $this
     */
    public function setHorarioEntrada($horario_entrada)
    {
        $this->horario_entrada = $horario_entrada;

        return $this;
    }

    /**
     * Method to set the value of field ida_almoco
     *
     * @param string $ida_almoco
     * @return $this
     */
    public function setIdaAlmoco($ida_almoco)
    {
        $this->ida_almoco = $ida_almoco;

        return $this;
    }

    /**
     * Method to set the value of field volta_almoco
     *
     * @param string $volta_almoco
     * @return $this
     */
    public function setVoltaAlmoco($volta_almoco)
    {
        $this->volta_almoco = $volta_almoco;

        return $this;
    }

    /**
     * Method to set the value of field horario_saida
     *
     * @param string $horario_saida
     * @return $this
     */
    public function setHorarioSaida($horario_saida)
    {
        $this->horario_saida = $horario_saida;

        return $this;
    }

    /**
     * Returns the value of field cd_equipe
     *
     * @return integer
     */
    public function getCdEquipe()
    {
        return $this->cd_equipe;
    }

    /**
     * Returns the value of field cod_dia
     *
     * @return integer
     */
    public function getCodDia()
    {
        return $this->cod_dia;
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
     * Returns the value of field horario_entrada
     *
     * @return string
     */
    public function getHorarioEntrada()
    {
        return $this->horario_entrada;
    }

    /**
     * Returns the value of field ida_almoco
     *
     * @return string
     */
    public function getIdaAlmoco()
    {
        return $this->ida_almoco;
    }

    /**
     * Returns the value of field volta_almoco
     *
     * @return string
     */
    public function getVoltaAlmoco()
    {
        return $this->volta_almoco;
    }

    /**
     * Returns the value of field horario_saida
     *
     * @return string
     */
    public function getHorarioSaida()
    {
        return $this->horario_saida;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'equipe_horario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EquipeHorario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EquipeHorario
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
            'cd_equipe' => 'cd_equipe',
            'cod_dia' => 'cod_dia',
            'dia' => 'dia',
            'horario_entrada' => 'horario_entrada',
            'ida_almoco' => 'ida_almoco',
            'volta_almoco' => 'volta_almoco',
            'horario_saida' => 'horario_saida'
        );
    }

}
