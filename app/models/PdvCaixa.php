<?php

namespace App\Models;

class PdvCaixa extends \Phalcon\Mvc\Model
{

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
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var string
     */
    protected $data_abertura;

    /**
     *
     * @var string
     */
    protected $data_fechamento;

    /**
     *
     * @var double
     */
    protected $saldo_troco;

    /**
     *
     * @var integer
     */
    protected $deletado;

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
     * Method to set the value of field cd_unidade
     *
     * @param integer $cd_unidade
     * @return $this
     */
    public function setCdUnidade($cd_unidade)
    {
        $this->cd_unidade = $cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field data_abertura
     *
     * @param string $data_abertura
     * @return $this
     */
    public function setDataAbertura($data_abertura)
    {
        $this->data_abertura = $data_abertura;

        return $this;
    }

    /**
     * Method to set the value of field data_fechamento
     *
     * @param string $data_fechamento
     * @return $this
     */
    public function setDataFechamento($data_fechamento)
    {
        $this->data_fechamento = $data_fechamento;

        return $this;
    }

    /**
     * Method to set the value of field saldo_troco
     *
     * @param double $saldo_troco
     * @return $this
     */
    public function setSaldoTroco($saldo_troco)
    {
        if ($saldo_troco) {
            $saldo_troco = str_replace('.', '', $saldo_troco);
            $saldo_troco = str_replace(',', '.', $saldo_troco);
        } else {
            $saldo_troco = 0.00;
        }
        $this->saldo_troco = $saldo_troco;

        return $this;
    }

    /**
     * Method to set the value of field deletado
     *
     * @param integer $deletado
     * @return $this
     */
    public function setDeletado($deletado)
    {
        $this->deletado = $deletado;

        return $this;
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
     * Returns the value of field cd_unidade
     *
     * @return integer
     */
    public function getCdUnidade()
    {
        return $this->cd_unidade;
    }

    /**
     * Returns the value of field data_abertura
     *
     * @return string
     */
    public function getDataAbertura()
    {
        return $this->data_abertura;
    }

    /**
     * Returns the value of field data_fechamento
     *
     * @return string
     */
    public function getDataFechamento()
    {
        return $this->data_fechamento;
    }

    /**
     * Returns the value of field saldo_troco
     *
     * @return double
     */
    public function getSaldoTroco()
    {
        return $this->saldo_troco;
    }

    /**
     * Returns the value of field deletado
     *
     * @return integer
     */
    public function getDeletado()
    {
        return $this->deletado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_caixa', 'App\Models\PdvDescontos', 'cd_caixa', array('alias' => 'PdvDescontos'));
        $this->hasMany('cd_caixa', 'App\Models\PdvSangrias', 'cd_caixa', array('alias' => 'PdvSangrias'));
        $this->hasMany('cd_caixa', 'App\Models\PdvVendas', 'cd_caixa', array('alias' => 'PdvVendas'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cd_usuario', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_caixa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvCaixa[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvCaixa
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
            'cd_caixa' => 'cd_caixa',
            'cd_usuario' => 'cd_usuario',
            'cd_unidade' => 'cd_unidade',
            'data_abertura' => 'data_abertura',
            'data_fechamento' => 'data_fechamento',
            'saldo_troco' => 'saldo_troco',
            'deletado' => 'deletado'
        );
    }
}
