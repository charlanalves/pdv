<?php

namespace App\Models;

class PdvSangrias extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_sangria;

    /**
     *
     * @var integer
     */
    protected $cd_caixa;

    /**
     *
     * @var integer
     */
    protected $cd_usuario;

    /**
     *
     * @var string
     */
    protected $data_criacao;

    /**
     *
     * @var double
     */
    protected $valor;

    /**
     * Method to set the value of field cd_sangria
     *
     * @param integer $cd_sangria
     * @return $this
     */
    public function setCdSangria($cd_sangria)
    {
        $this->cd_sangria = $cd_sangria;

        return $this;
    }

    /**
     * Method to set the value of field cd_caixa
     *
     * @param integer $cd_caixa
     * @return $this
     */
    public function setCdCaixa($cd_caixa)
    {
        $this->cd_caixa = $cd_caixa;

        return $this;
    }

    /**
     * Method to set the value of field cd_usuario
     *
     * @param integer $cd_usuario
     * @return $this
     */
    public function setCdUsuario($cd_usuario)
    {
        $this->cd_usuario = $cd_usuario;

        return $this;
    }

    /**
     * Method to set the value of field data_criacao
     *
     * @param string $data_criacao
     * @return $this
     */
    public function setDataCriacao($data_criacao)
    {
        $this->data_criacao = $data_criacao;

        return $this;
    }

    /**
     * Method to set the value of field valor
     *
     * @param double $valor
     * @return $this
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Returns the value of field cd_sangria
     *
     * @return integer
     */
    public function getCdSangria()
    {
        return $this->cd_sangria;
    }

    /**
     * Returns the value of field cd_caixa
     *
     * @return integer
     */
    public function getCdCaixa()
    {
        return $this->cd_caixa;
    }

    /**
     * Returns the value of field cd_usuario
     *
     * @return integer
     */
    public function getCdUsuario()
    {
        return $this->cd_usuario;
    }

    /**
     * Returns the value of field data_criacao
     *
     * @return string
     */
    public function getDataCriacao()
    {
        return $this->data_criacao;
    }

    /**
     * Returns the value of field valor
     *
     * @return double
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_caixa', 'App\Models\PdvCaixa', 'cd_caixa', array('alias' => 'PdvCaixa'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_sangrias';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvSangrias[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvSangrias
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
            'cd_sangria' => 'cd_sangria',
            'cd_caixa' => 'cd_caixa',
            'cd_usuario' => 'cd_usuario',
            'data_criacao' => 'data_criacao',
            'valor' => 'valor'
        );
    }

}
