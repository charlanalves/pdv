<?php

namespace App\Models;

class Banco extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idbanco;

    /**
     *
     * @var string
     */
    protected $cd_compensacao;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $homepage;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     * Method to set the value of field idbanco
     *
     * @param integer $idbanco
     * @return $this
     */
    public function setIdbanco($idbanco)
    {
        $this->idbanco = $idbanco;

        return $this;
    }

    /**
     * Method to set the value of field cd_compensacao
     *
     * @param string $cd_compensacao
     * @return $this
     */
    public function setCdCompensacao($cd_compensacao)
    {
        $this->cd_compensacao = $cd_compensacao;

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
     * Returns the value of field idbanco
     *
     * @return integer
     */
    public function getIdbanco()
    {
        return $this->idbanco;
    }

    /**
     * Returns the value of field cd_compensacao
     *
     * @return string
     */
    public function getCdCompensacao()
    {
        return $this->cd_compensacao;
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
     * Returns the value of field homepage
     *
     * @return string
     */
    public function getHomepage()
    {
        return $this->homepage;
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
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'banco';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Banco[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Banco
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
            'idbanco' => 'idbanco',
            'cd_compensacao' => 'cd_compensacao',
            'nome' => 'nome',
            'homepage' => 'homepage',
            'cd_unidade' => 'cd_unidade'
        );
    }

}
