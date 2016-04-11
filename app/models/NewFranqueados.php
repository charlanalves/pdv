<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class NewFranqueados extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $cpf;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $telefone;

    /**
     *
     * @var string
     */
    protected $cep;

    /**
     *
     * @var string
     */
    protected $cidade;

    /**
     *
     * @var string
     */
    protected $estado;

    /**
     *
     * @var string
     */
    protected $complemento;

    /**
     *
     * @var string
     */
    protected $bairro;

    /**
     *
     * @var string
     */
    protected $numero;

    /**
     *
     * @var string
     */
    protected $endereco;

    /**
     *
     * @var string
     */
    protected $cidade_abertura;

    /**
     *
     * @var string
     */
    protected $estado_abertura;

    /**
     *
     * @var string
     */
    protected $trabalha_piscina;

    /**
     *
     * @var string
     */
    protected $razao_social;

    /**
     *
     * @var string
     */
    protected $cnpj;

    /**
     *
     * @var string
     */
    protected $disponibilidade_mudar;

    /**
     *
     * @var string
     */
    protected $disponibilidade_financeira;

    /**
     *
     * @var string
     */
    protected $imovel_abertura;

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
     * Method to set the value of field cpf
     *
     * @param string $cpf
     * @return $this
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

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
     * Method to set the value of field estado
     *
     * @param string $estado
     * @return $this
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

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
     * Method to set the value of field endereco
     *
     * @param string $endereco
     * @return $this
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Method to set the value of field cidade_abertura
     *
     * @param string $cidade_abertura
     * @return $this
     */
    public function setCidadeAbertura($cidade_abertura)
    {
        $this->cidade_abertura = $cidade_abertura;

        return $this;
    }

    /**
     * Method to set the value of field estado_abertura
     *
     * @param string $estado_abertura
     * @return $this
     */
    public function setEstadoAbertura($estado_abertura)
    {
        $this->estado_abertura = $estado_abertura;

        return $this;
    }

    /**
     * Method to set the value of field trabalha_piscina
     *
     * @param string $trabalha_piscina
     * @return $this
     */
    public function setTrabalhaPiscina($trabalha_piscina)
    {
        $this->trabalha_piscina = $trabalha_piscina;

        return $this;
    }

    /**
     * Method to set the value of field razao_social
     *
     * @param string $razao_social
     * @return $this
     */
    public function setRazaoSocial($razao_social)
    {
        $this->razao_social = $razao_social;

        return $this;
    }

    /**
     * Method to set the value of field cnpj
     *
     * @param string $cnpj
     * @return $this
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Method to set the value of field disponibilidade_mudar
     *
     * @param string $disponibilidade_mudar
     * @return $this
     */
    public function setDisponibilidadeMudar($disponibilidade_mudar)
    {
        $this->disponibilidade_mudar = $disponibilidade_mudar;

        return $this;
    }

    /**
     * Method to set the value of field disponibilidade_financeira
     *
     * @param string $disponibilidade_financeira
     * @return $this
     */
    public function setDisponibilidadeFinanceira($disponibilidade_financeira)
    {
        $this->disponibilidade_financeira = $disponibilidade_financeira;

        return $this;
    }

    /**
     * Method to set the value of field imovel_abertura
     *
     * @param string $imovel_abertura
     * @return $this
     */
    public function setImovelAbertura($imovel_abertura)
    {
        $this->imovel_abertura = $imovel_abertura;

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
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field cpf
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
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
     * Returns the value of field telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
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
     * Returns the value of field cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Returns the value of field estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
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
     * Returns the value of field bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
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
     * Returns the value of field endereco
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Returns the value of field cidade_abertura
     *
     * @return string
     */
    public function getCidadeAbertura()
    {
        return $this->cidade_abertura;
    }

    /**
     * Returns the value of field estado_abertura
     *
     * @return string
     */
    public function getEstadoAbertura()
    {
        return $this->estado_abertura;
    }

    /**
     * Returns the value of field trabalha_piscina
     *
     * @return string
     */
    public function getTrabalhaPiscina()
    {
        return $this->trabalha_piscina;
    }

    /**
     * Returns the value of field razao_social
     *
     * @return string
     */
    public function getRazaoSocial()
    {
        return $this->razao_social;
    }

    /**
     * Returns the value of field cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Returns the value of field disponibilidade_mudar
     *
     * @return string
     */
    public function getDisponibilidadeMudar()
    {
        return $this->disponibilidade_mudar;
    }

    /**
     * Returns the value of field disponibilidade_financeira
     *
     * @return string
     */
    public function getDisponibilidadeFinanceira()
    {
        return $this->disponibilidade_financeira;
    }

    /**
     * Returns the value of field imovel_abertura
     *
     * @return string
     */
    public function getImovelAbertura()
    {
        return $this->imovel_abertura;
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
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'new_franqueados';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return NewFranqueados[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return NewFranqueados
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
            'nome' => 'nome',
            'cpf' => 'cpf',
            'email' => 'email',
            'telefone' => 'telefone',
            'cep' => 'cep',
            'cidade' => 'cidade',
            'estado' => 'estado',
            'complemento' => 'complemento',
            'bairro' => 'bairro',
            'numero' => 'numero',
            'endereco' => 'endereco',
            'cidade_abertura' => 'cidade_abertura',
            'estado_abertura' => 'estado_abertura',
            'trabalha_piscina' => 'trabalha_piscina',
            'razao_social' => 'razao_social',
            'cnpj' => 'cnpj',
            'disponibilidade_mudar' => 'disponibilidade_mudar',
            'disponibilidade_financeira' => 'disponibilidade_financeira',
            'imovel_abertura' => 'imovel_abertura'
        );
    }

}
