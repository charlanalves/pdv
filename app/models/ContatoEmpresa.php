<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class ContatoEmpresa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_contato;

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
     * @var string
     */
    protected $telefone;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var integer
     */
    protected $tipo_contato_empresa;

    /**
     *
     * @var string
     */
    protected $fax;

    /**
     *
     * @var string
     */
    protected $celular;

    /**
     *
     * @var string
     */
    protected $homepage;

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
     * Method to set the value of field cd_contato
     *
     * @param integer $cd_contato
     * @return $this
     */
    public function setCdContato($cd_contato)
    {
        $this->cd_contato = $cd_contato;

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
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field tipo_contato_empresa
     *
     * @param integer $tipo_contato_empresa
     * @return $this
     */
    public function setTipoContatoEmpresa($tipo_contato_empresa)
    {
        $this->tipo_contato_empresa = $tipo_contato_empresa;

        return $this;
    }

    /**
     * Method to set the value of field fax
     *
     * @param string $fax
     * @return $this
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Method to set the value of field celular
     *
     * @param string $celular
     * @return $this
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Method to set the value of field homepage
     *
     * @param string $homepage
     * @return $this
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;

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
     * Returns the value of field cd_contato
     *
     * @return integer
     */
    public function getCdContato()
    {
        return $this->cd_contato;
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
     * Returns the value of field telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field tipo_contato_empresa
     *
     * @return integer
     */
    public function getTipoContatoEmpresa()
    {
        return $this->tipo_contato_empresa;
    }

    /**
     * Returns the value of field fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Returns the value of field celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Returns the value of field homepage
     *
     * @return string
     */
    public function getHomepage()
    {
        return $this->homepage;
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
     * Retorna telefone no formato somente números
     *
     * @return string
     */
    public function getTelefoneSomenteNumeros()
    {   
        return str_replace(array('(',')','-',' '), array('','','',''), $this->telefone);
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
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
        return 'contato_empresa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ContatoEmpresa[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ContatoEmpresa
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
            'cd_contato' => 'cd_contato',
            'empresa_cd_empresa' => 'empresa_cd_empresa',
            'nome' => 'nome',
            'telefone' => 'telefone',
            'email' => 'email',
            'tipo_contato_empresa' => 'tipo_contato_empresa',
            'fax' => 'fax',
            'celular' => 'celular',
            'homepage' => 'homepage',
            'obs' => 'obs',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
