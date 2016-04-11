<?php

namespace App\Models;

class Endereco extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_endereco;

    /**
     *
     * @var integer
     */
    protected $empresa_cd_empresa;

    /**
     *
     * @var integer
     */
    protected $tipo;

    /**
     *
     * @var string
     */
    protected $cep;

    /**
     *
     * @var string
     */
    protected $uf;

    /**
     *
     * @var string
     */
    protected $cidade;

    /**
     *
     * @var string
     */
    protected $bairro;

    /**
     *
     * @var string
     */
    protected $rua;

    /**
     *
     * @var string
     */
    protected $numero;

    /**
     *
     * @var string
     */
    protected $complemento;

    /**
     *
     * @var string
     */
    protected $cd_pais;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     * Method to set the value of field cd_endereco
     *
     * @param integer $cd_endereco
     * @return $this
     */
    public function setCdEndereco($cd_endereco)
    {
        $this->cd_endereco = $cd_endereco;

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
     * Method to set the value of field cep
     *
     * @param string $cep
     * @return $this
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Method to set the value of field uf
     *
     * @param string $uf
     * @return $this
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Method to set the value of field cidade
     *
     * @param string $cidade
     * @return $this
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Method to set the value of field bairro
     *
     * @param string $bairro
     * @return $this
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Method to set the value of field rua
     *
     * @param string $rua
     * @return $this
     */
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Method to set the value of field numero
     *
     * @param string $numero
     * @return $this
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Method to set the value of field complemento
     *
     * @param string $complemento
     * @return $this
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Method to set the value of field cd_pais
     *
     * @param string $cd_pais
     * @return $this
     */
    public function setCdPais($cd_pais)
    {
        $this->cd_pais = $cd_pais;

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
     * Returns the value of field cd_endereco
     *
     * @return integer
     */
    public function getCdEndereco()
    {
        return $this->cd_endereco;
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
     * Returns the value of field tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Returns the value of field cep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Returns the value of field uf
     *
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Returns the value of field uf
     *
     * @return string
     */
    public function getCodUf()
    {
        $uf = Uf::findBySigla($this->uf);
        return $uf[0]->codigo_uf;
    }

    /**
     * Returns the value of field cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Returns the value of field bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Returns the value of field rua
     *
     * @return string
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Returns the value of field numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Returns the value of field complemento
     *
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Returns the value of field cd_pais
     *
     * @return string
     */
    public function getCdPais()
    {
        return $this->cd_pais;
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
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
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
     * Returns the value of field criado
     *
     * @return string
     */
    public function getCepSomenteNumeros()
    { 
        return str_replace('-', '', $this->cep);
    }
       

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('empresa_cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('empresa_cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('uf', 'App\Models\Uf', 'sigla', array('alias' => 'Uf'));                
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'endereco';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Endereco[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Endereco
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
            'cd_endereco' => 'cd_endereco',
            'empresa_cd_empresa' => 'empresa_cd_empresa',
            'tipo' => 'tipo',
            'cep' => 'cep',
            'uf' => 'uf',
            'cidade' => 'cidade',
            'bairro' => 'bairro',
            'rua' => 'rua',
            'numero' => 'numero',
            'complemento' => 'complemento',
            'cd_pais' => 'cd_pais',
            'ativo' => 'ativo',
            'modificado' => 'modificado',
            'criado' => 'criado'
        );
    }

}
