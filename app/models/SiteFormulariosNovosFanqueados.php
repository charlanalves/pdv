<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class SiteFormulariosNovosFanqueados extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_novo_franqueado;

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
    protected $endereco;

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
    protected $cidade;

    /**
     *
     * @var string
     */
    protected $end_uf;

    /**
     *
     * @var string
     */
    protected $cep;

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
     * @var string
     */
    protected $ja_trabalha_com_piscina;

    /**
     *
     * @var string
     */
    protected $razao_Social;

    /**
     *
     * @var string
     */
    protected $cnpj;

    /**
     *
     * @var string
     */
    protected $ufabertura;

    /**
     *
     * @var string
     */
    protected $cidade_para_abertura;

    /**
     *
     * @var string
     */
    protected $disponibilidade_para_investir;

    /**
     *
     * @var string
     */
    protected $disponibilidade_para_mudar;

    /**
     *
     * @var string
     */
    protected $possui_imovel_para_abertura;

    /**
     *
     * @var string
     */
    protected $como_surgiu_o_interesse_sobre_o_sistema_de_franquia_fiber;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     * Method to set the value of field id_novo_franqueado
     *
     * @param integer $id_novo_franqueado
     * @return $this
     */
    public function setIdNovoFranqueado($id_novo_franqueado)
    {
        $this->id_novo_franqueado = $id_novo_franqueado;

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
     * Method to set the value of field end_uf
     *
     * @param string $end_uf
     * @return $this
     */
    public function setEndUf($end_uf)
    {
        $this->end_uf = $end_uf;

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
     * Method to set the value of field ja_trabalha_com_piscina
     *
     * @param string $ja_trabalha_com_piscina
     * @return $this
     */
    public function setJaTrabalhaComPiscina($ja_trabalha_com_piscina)
    {
        $this->ja_trabalha_com_piscina = $ja_trabalha_com_piscina;

        return $this;
    }

    /**
     * Method to set the value of field razao_Social
     *
     * @param string $razao_Social
     * @return $this
     */
    public function setRazaoSocial($razao_Social)
    {
        $this->razao_Social = $razao_Social;

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
     * Method to set the value of field ufabertura
     *
     * @param string $ufabertura
     * @return $this
     */
    public function setUfabertura($ufabertura)
    {
        $this->ufabertura = $ufabertura;

        return $this;
    }

    /**
     * Method to set the value of field cidade_para_abertura
     *
     * @param string $cidade_para_abertura
     * @return $this
     */
    public function setCidadeParaAbertura($cidade_para_abertura)
    {
        $this->cidade_para_abertura = $cidade_para_abertura;

        return $this;
    }

    /**
     * Method to set the value of field disponibilidade_para_investir
     *
     * @param string $disponibilidade_para_investir
     * @return $this
     */
    public function setDisponibilidadeParaInvestir($disponibilidade_para_investir)
    {
        $this->disponibilidade_para_investir = $disponibilidade_para_investir;

        return $this;
    }

    /**
     * Method to set the value of field disponibilidade_para_mudar
     *
     * @param string $disponibilidade_para_mudar
     * @return $this
     */
    public function setDisponibilidadeParaMudar($disponibilidade_para_mudar)
    {
        $this->disponibilidade_para_mudar = $disponibilidade_para_mudar;

        return $this;
    }

    /**
     * Method to set the value of field possui_imovel_para_abertura
     *
     * @param string $possui_imovel_para_abertura
     * @return $this
     */
    public function setPossuiImovelParaAbertura($possui_imovel_para_abertura)
    {
        $this->possui_imovel_para_abertura = $possui_imovel_para_abertura;

        return $this;
    }

    /**
     * Method to set the value of field como_surgiu_o_interesse_sobre_o_sistema_de_franquia_fiber
     *
     * @param string $como_surgiu_o_interesse_sobre_o_sistema_de_franquia_fiber
     * @return $this
     */
    public function setComoSurgiuOInteresseSobreOSistemaDeFranquiaFiber($como_surgiu_o_interesse_sobre_o_sistema_de_franquia_fiber)
    {
        $this->como_surgiu_o_interesse_sobre_o_sistema_de_franquia_fiber = $como_surgiu_o_interesse_sobre_o_sistema_de_franquia_fiber;

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
     * Returns the value of field id_novo_franqueado
     *
     * @return integer
     */
    public function getIdNovoFranqueado()
    {
        return $this->id_novo_franqueado;
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
     * Returns the value of field endereco
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
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
     * Returns the value of field cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Returns the value of field end_uf
     *
     * @return string
     */
    public function getEndUf()
    {
        return $this->end_uf;
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
     * Returns the value of field ja_trabalha_com_piscina
     *
     * @return string
     */
    public function getJaTrabalhaComPiscina()
    {
        return $this->ja_trabalha_com_piscina;
    }

    /**
     * Returns the value of field razao_Social
     *
     * @return string
     */
    public function getRazaoSocial()
    {
        return $this->razao_Social;
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
     * Returns the value of field ufabertura
     *
     * @return string
     */
    public function getUfabertura()
    {
        return $this->ufabertura;
    }

    /**
     * Returns the value of field cidade_para_abertura
     *
     * @return string
     */
    public function getCidadeParaAbertura()
    {
        return $this->cidade_para_abertura;
    }

    /**
     * Returns the value of field disponibilidade_para_investir
     *
     * @return string
     */
    public function getDisponibilidadeParaInvestir()
    {
        return $this->disponibilidade_para_investir;
    }

    /**
     * Returns the value of field disponibilidade_para_mudar
     *
     * @return string
     */
    public function getDisponibilidadeParaMudar()
    {
        return $this->disponibilidade_para_mudar;
    }

    /**
     * Returns the value of field possui_imovel_para_abertura
     *
     * @return string
     */
    public function getPossuiImovelParaAbertura()
    {
        return $this->possui_imovel_para_abertura;
    }

    /**
     * Returns the value of field como_surgiu_o_interesse_sobre_o_sistema_de_franquia_fiber
     *
     * @return string
     */
    public function getComoSurgiuOInteresseSobreOSistemaDeFranquiaFiber()
    {
        return $this->como_surgiu_o_interesse_sobre_o_sistema_de_franquia_fiber;
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
        return 'site_formularios_novos_fanqueados';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SiteFormulariosNovosFanqueados[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SiteFormulariosNovosFanqueados
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
            'id_novo_franqueado' => 'id_novo_franqueado',
            'nome' => 'nome',
            'cpf' => 'cpf',
            'endereco' => 'endereco',
            'numero' => 'numero',
            'complemento' => 'complemento',
            'cidade' => 'cidade',
            'end_uf' => 'end_uf',
            'cep' => 'cep',
            'telefone' => 'telefone',
            'email' => 'email',
            'ja_trabalha_com_piscina' => 'ja_trabalha_com_piscina',
            'razao_Social' => 'razao_Social',
            'cnpj' => 'cnpj',
            'ufabertura' => 'ufabertura',
            'cidade_para_abertura' => 'cidade_para_abertura',
            'disponibilidade_para_investir' => 'disponibilidade_para_investir',
            'disponibilidade_para_mudar' => 'disponibilidade_para_mudar',
            'possui_imovel_para_abertura' => 'possui_imovel_para_abertura',
            'como_surgiu_o_interesse_sobre_o_sistema_de_franquia_fiber' => 'como_surgiu_o_interesse_sobre_o_sistema_de_franquia_fiber',
            'criado' => 'criado'
        );
    }

}
