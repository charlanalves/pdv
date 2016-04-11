<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class Queromaisinformacoes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_mais_informacoes;

    /**
     *
     * @var string
     */
    protected $nome;

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
    protected $assunto;

    /**
     * Method to set the value of field id_mais_informacoes
     *
     * @param integer $id_mais_informacoes
     * @return $this
     */
    public function setIdMaisInformacoes($id_mais_informacoes)
    {
        $this->id_mais_informacoes = $id_mais_informacoes;

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
     * Method to set the value of field assunto
     *
     * @param string $assunto
     * @return $this
     */
    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;

        return $this;
    }

    /**
     * Returns the value of field id_mais_informacoes
     *
     * @return integer
     */
    public function getIdMaisInformacoes()
    {
        return $this->id_mais_informacoes;
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
     * Returns the value of field assunto
     *
     * @return string
     */
    public function getAssunto()
    {
        return $this->assunto;
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
        return 'queromaisinformacoes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Queromaisinformacoes[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Queromaisinformacoes
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
            'id_mais_informacoes' => 'id_mais_informacoes',
            'nome' => 'nome',
            'email' => 'email',
            'telefone' => 'telefone',
            'assunto' => 'assunto'
        );
    }

}
