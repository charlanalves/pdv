<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class Contato extends \Phalcon\Mvc\Model
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
    protected $unidade_responsavel;

    /**
     *
     * @var integer
     */
    protected $usuario_responsavel;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $end_uf;

    /**
     *
     * @var string
     */
    protected $end_cidade;

    /**
     *
     * @var string
     */
    protected $end_bairro;

    /**
     *
     * @var string
     */
    protected $end_rua;

    /**
     *
     * @var string
     */
    protected $end_cep;

    /**
     *
     * @var string
     */
    protected $end_instalacao;

    /**
     *
     * @var string
     */
    protected $end_numero;

    /**
     *
     * @var string
     */
    protected $end_complemento;

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
     * @var integer
     */
    protected $folder;

    /**
     *
     * @var string
     */
    protected $contato;

    /**
     *
     * @var integer
     */
    protected $contato_status;

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
     *
     * @var integer
     */
    protected $cd_produto;

    /**
     *
     * @var integer
     */
    protected $idkits;

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
     * Method to set the value of field unidade_responsavel
     *
     * @param integer $unidade_responsavel
     * @return $this
     */
    public function setUnidadeResponsavel($unidade_responsavel)
    {
        $this->unidade_responsavel = $unidade_responsavel;

        return $this;
    }

    /**
     * Method to set the value of field usuario_responsavel
     *
     * @param integer $usuario_responsavel
     * @return $this
     */
    public function setUsuarioResponsavel($usuario_responsavel)
    {
        $this->usuario_responsavel = $usuario_responsavel;

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
     * Method to set the value of field end_cidade
     *
     * @param string $end_cidade
     * @return $this
     */
    public function setEndCidade($end_cidade)
    {
        $this->end_cidade = $end_cidade;

        return $this;
    }

    /**
     * Method to set the value of field end_bairro
     *
     * @param string $end_bairro
     * @return $this
     */
    public function setEndBairro($end_bairro)
    {
        $this->end_bairro = $end_bairro;

        return $this;
    }

    /**
     * Method to set the value of field end_rua
     *
     * @param string $end_rua
     * @return $this
     */
    public function setEndRua($end_rua)
    {
        $this->end_rua = $end_rua;

        return $this;
    }

    /**
     * Method to set the value of field end_cep
     *
     * @param string $end_cep
     * @return $this
     */
    public function setEndCep($end_cep)
    {
        $this->end_cep = $end_cep;

        return $this;
    }

    /**
     * Method to set the value of field end_instalacao
     *
     * @param string $end_instalacao
     * @return $this
     */
    public function setEndInstalacao($end_instalacao)
    {
        $this->end_instalacao = $end_instalacao;

        return $this;
    }

    /**
     * Method to set the value of field end_numero
     *
     * @param string $end_numero
     * @return $this
     */
    public function setEndNumero($end_numero)
    {
        $this->end_numero = $end_numero;

        return $this;
    }

    /**
     * Method to set the value of field end_complemento
     *
     * @param string $end_complemento
     * @return $this
     */
    public function setEndComplemento($end_complemento)
    {
        $this->end_complemento = $end_complemento;

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
     * Method to set the value of field folder
     *
     * @param integer $folder
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;

        return $this;
    }

    /**
     * Method to set the value of field contato
     *
     * @param string $contato
     * @return $this
     */
    public function setContato($contato)
    {
        $this->contato = $contato;

        return $this;
    }

    /**
     * Method to set the value of field contato_status
     *
     * @param integer $contato_status
     * @return $this
     */
    public function setContatoStatus($contato_status)
    {
        $this->contato_status = $contato_status;

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
     * Method to set the value of field cd_produto
     *
     * @param integer $cd_produto
     * @return $this
     */
    public function setCdProduto($cd_produto)
    {
        $this->cd_produto = $cd_produto;

        return $this;
    }

    /**
     * Method to set the value of field idkits
     *
     * @param integer $idkits
     * @return $this
     */
    public function setIdkits($idkits)
    {
        $this->idkits = $idkits;

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
     * Returns the value of field unidade_responsavel
     *
     * @return integer
     */
    public function getUnidadeResponsavel()
    {
        return $this->unidade_responsavel;
    }

    /**
     * Returns the value of field usuario_responsavel
     *
     * @return integer
     */
    public function getUsuarioResponsavel()
    {
        return $this->usuario_responsavel;
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
     * Returns the value of field end_uf
     *
     * @return string
     */
    public function getEndUf()
    {
        return $this->end_uf;
    }

    /**
     * Returns the value of field end_cidade
     *
     * @return string
     */
    public function getEndCidade()
    {
        return $this->end_cidade;
    }

    /**
     * Returns the value of field end_bairro
     *
     * @return string
     */
    public function getEndBairro()
    {
        return $this->end_bairro;
    }

    /**
     * Returns the value of field end_rua
     *
     * @return string
     */
    public function getEndRua()
    {
        return $this->end_rua;
    }

    /**
     * Returns the value of field end_cep
     *
     * @return string
     */
    public function getEndCep()
    {
        return $this->end_cep;
    }

    /**
     * Returns the value of field end_instalacao
     *
     * @return string
     */
    public function getEndInstalacao()
    {
        return $this->end_instalacao;
    }

    /**
     * Returns the value of field end_numero
     *
     * @return string
     */
    public function getEndNumero()
    {
        return $this->end_numero;
    }

    /**
     * Returns the value of field end_complemento
     *
     * @return string
     */
    public function getEndComplemento()
    {
        return $this->end_complemento;
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
     * Returns the value of field folder
     *
     * @return integer
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Returns the value of field contato
     *
     * @return string
     */
    public function getContato()
    {
        return $this->contato;
    }

    /**
     * Returns the value of field contato_status
     *
     * @return integer
     */
    public function getContatoStatus()
    {
        return $this->contato_status;
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
     * Returns the value of field cd_produto
     *
     * @return integer
     */
    public function getCdProduto()
    {
        return $this->cd_produto;
    }

    /**
     * Returns the value of field idkits
     *
     * @return integer
     */
    public function getIdkits()
    {
        return $this->idkits;
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
        $this->hasMany('cd_contato', 'App\Models\Orcamento', 'contato_cd_contato', array('alias' => 'Orcamento'));
        $this->belongsTo('cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('idkits', 'App\Models\Kits', 'idkits', array('alias' => 'Kits'));
        $this->belongsTo('unidade_responsavel', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->hasMany('cd_contato', 'App\Models\Orcamento', 'contato_cd_contato', NULL);
        $this->belongsTo('cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
        $this->belongsTo('idkits', 'App\Models\Kits', 'idkits', array('foreignKey' => true,'alias' => 'Kits'));
        $this->belongsTo('unidade_responsavel', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'contato';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Contato[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Contato
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
            'unidade_responsavel' => 'unidade_responsavel',
            'usuario_responsavel' => 'usuario_responsavel',
            'nome' => 'nome',
            'end_uf' => 'end_uf',
            'end_cidade' => 'end_cidade',
            'end_bairro' => 'end_bairro',
            'end_rua' => 'end_rua',
            'end_cep' => 'end_cep',
            'end_instalacao' => 'end_instalacao',
            'end_numero' => 'end_numero',
            'end_complemento' => 'end_complemento',
            'email' => 'email',
            'telefone' => 'telefone',
            'folder' => 'folder',
            'contato' => 'contato',
            'contato_status' => 'contato_status',
            'ativo' => 'ativo',
            'modificado' => 'modificado',
            'criado' => 'criado',
            'cd_produto' => 'cd_produto',
            'idkits' => 'idkits'
        );
    }

}
