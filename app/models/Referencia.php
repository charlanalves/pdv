<?php

namespace App\Models;

class Referencia extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_referencia;

    /**
     *
     * @var integer
     */
    protected $empresa_cd_empresa;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var double
     */
    protected $valor_ult_compra;

    /**
     *
     * @var double
     */
    protected $limite;

    /**
     *
     * @var integer
     */
    protected $atraso;

    /**
     *
     * @var string
     */
    protected $cliente_desde;

    /**
     *
     * @var string
     */
    protected $obs;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     *
     * @var string
     */
    protected $telefone;

    /**
     *
     * @var string
     */
    protected $data_ult_compra;

    /**
     *
     * @var double
     */
    protected $valor_ult_compra_2;

    /**
     * Method to set the value of field cd_referencia
     *
     * @param integer $cd_referencia
     * @return $this
     */
    public function setCdReferencia($cd_referencia)
    {
        $this->cd_referencia = $cd_referencia;

        return $this;
    }

    /**
     * Method to set the value of field empresa_cd_empresa
     *
     * @param integer $empresa_cd_empresa
     * @return $this
     */
    public function setEmpresaCdEmpresa($empresa_cd_empresa)
    {
        $this->empresa_cd_empresa = $empresa_cd_empresa;

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
     * Method to set the value of field valor_ult_compra
     *
     * @param double $valor_ult_compra
     * @return $this
     */
    public function setValorUltCompra($valor_ult_compra)
    {
        $this->valor_ult_compra = $valor_ult_compra;

        return $this;
    }

    /**
     * Method to set the value of field limite
     *
     * @param double $limite
     * @return $this
     */
    public function setLimite($limite)
    {
        $this->limite = $limite;

        return $this;
    }

    /**
     * Method to set the value of field atraso
     *
     * @param integer $atraso
     * @return $this
     */
    public function setAtraso($atraso)
    {
        $this->atraso = $atraso;

        return $this;
    }

    /**
     * Method to set the value of field cliente_desde
     *
     * @param string $cliente_desde
     * @return $this
     */
    public function setClienteDesde($cliente_desde)
    {
        $this->cliente_desde = $cliente_desde;

        return $this;
    }

    /**
     * Method to set the value of field obs
     *
     * @param string $obs
     * @return $this
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Method to set the value of field ativo
     *
     * @param integer $ativo
     * @return $this
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

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
     * Method to set the value of field modificado
     *
     * @param string $modificado
     * @return $this
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;

        return $this;
    }

    /**
     * Method to set the value of field telefone
     *
     * @param string $telefone
     * @return $this
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Method to set the value of field data_ult_compra
     *
     * @param string $data_ult_compra
     * @return $this
     */
    public function setDataUltCompra($data_ult_compra)
    {
        $this->data_ult_compra = $data_ult_compra;

        return $this;
    }

    /**
     * Method to set the value of field valor_ult_compra_2
     *
     * @param double $valor_ult_compra_2
     * @return $this
     */
    public function setValorUltCompra2($valor_ult_compra_2)
    {
        $this->valor_ult_compra_2 = $valor_ult_compra_2;

        return $this;
    }

    /**
     * Returns the value of field cd_referencia
     *
     * @return integer
     */
    public function getCdReferencia()
    {
        return $this->cd_referencia;
    }

    /**
     * Returns the value of field empresa_cd_empresa
     *
     * @return integer
     */
    public function getEmpresaCdEmpresa()
    {
        return $this->empresa_cd_empresa;
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
     * Returns the value of field valor_ult_compra
     *
     * @return double
     */
    public function getValorUltCompra()
    {
        return $this->valor_ult_compra;
    }

    /**
     * Returns the value of field limite
     *
     * @return double
     */
    public function getLimite()
    {
        return $this->limite;
    }

    /**
     * Returns the value of field atraso
     *
     * @return integer
     */
    public function getAtraso()
    {
        return $this->atraso;
    }

    /**
     * Returns the value of field cliente_desde
     *
     * @return string
     */
    public function getClienteDesde()
    {
        return $this->cliente_desde;
    }

    /**
     * Returns the value of field obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
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
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * Returns the value of field telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Returns the value of field data_ult_compra
     *
     * @return string
     */
    public function getDataUltCompra()
    {
        return $this->data_ult_compra;
    }

    /**
     * Returns the value of field valor_ult_compra_2
     *
     * @return double
     */
    public function getValorUltCompra2()
    {
        return $this->valor_ult_compra_2;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('empresa_cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('empresa_cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'referencia';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Referencia[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Referencia
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
            'cd_referencia' => 'cd_referencia',
            'empresa_cd_empresa' => 'empresa_cd_empresa',
            'nome' => 'nome',
            'valor_ult_compra' => 'valor_ult_compra',
            'limite' => 'limite',
            'atraso' => 'atraso',
            'cliente_desde' => 'cliente_desde',
            'obs' => 'obs',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'telefone' => 'telefone',
            'data_ult_compra' => 'data_ult_compra',
            'valor_ult_compra_2' => 'valor_ult_compra_2'
        );
    }

}
