<?php

namespace App\Models;

class DashboardModal extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_modal;

    /**
     *
     * @var string
     */
    protected $titulo;

    /**
     *
     * @var string
     */
    protected $nome_imagem;

    /**
     *
     * @var integer
     */
    protected $largura;

    /**
     *
     * @var integer
     */
    protected $altura;

    /**
     *
     * @var string
     */
    protected $data_inicio;

    /**
     *
     * @var string
     */
    protected $data_fim;

    /**
     *
     * @var integer
     */
    protected $local_exibicao;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     * Method to set the value of field cd_modal
     *
     * @param integer $cd_modal
     * @return $this
     */
    public function setCdModal($cd_modal)
    {
        $this->cd_modal = $cd_modal;

        return $this;
    }

    /**
     * Method to set the value of field titulo
     *
     * @param string $titulo
     * @return $this
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Method to set the value of field nome_imagem
     *
     * @param string $nome_imagem
     * @return $this
     */
    public function setNomeImagem($nome_imagem)
    {
        $this->nome_imagem = $nome_imagem;

        return $this;
    }

    /**
     * Method to set the value of field largura
     *
     * @param integer $largura
     * @return $this
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Method to set the value of field altura
     *
     * @param integer $altura
     * @return $this
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Method to set the value of field data_inicio
     *
     * @param string $data_inicio
     * @return $this
     */
    public function setDataInicio($data_inicio)
    {
        $this->data_inicio = $data_inicio;

        return $this;
    }

    /**
     * Method to set the value of field data_fim
     *
     * @param string $data_fim
     * @return $this
     */
    public function setDataFim($data_fim)
    {
        $this->data_fim = $data_fim;

        return $this;
    }

    /**
     * Method to set the value of field local_exibicao
     *
     * @param integer $local_exibicao
     * @return $this
     */
    public function setLocalExibicao($local_exibicao)
    {
        $this->local_exibicao = $local_exibicao;

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
     * Returns the value of field cd_modal
     *
     * @return integer
     */
    public function getCdModal()
    {
        return $this->cd_modal;
    }

    /**
     * Returns the value of field titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Returns the value of field nome_imagem
     *
     * @return string
     */
    public function getNomeImagem()
    {
        return $this->nome_imagem;
    }

    /**
     * Returns the value of field largura
     *
     * @return integer
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Returns the value of field altura
     *
     * @return integer
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Returns the value of field data_inicio
     *
     * @return string
     */
    public function getDataInicio()
    {
        return $this->data_inicio;
    }

    /**
     * Returns the value of field data_fim
     *
     * @return string
     */
    public function getDataFim()
    {
        return $this->data_fim;
    }

    /**
     * Returns the value of field local_exibicao
     *
     * @return integer
     */
    public function getLocalExibicao()
    {
        return $this->local_exibicao;
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
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dashboard_modal';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DashboardModal[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DashboardModal
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
            'cd_modal' => 'cd_modal',
            'titulo' => 'titulo',
            'nome_imagem' => 'nome_imagem',
            'largura' => 'largura',
            'altura' => 'altura',
            'data_inicio' => 'data_inicio',
            'data_fim' => 'data_fim',
            'local_exibicao' => 'local_exibicao',
            'ativo' => 'ativo'
        );
    }

}
