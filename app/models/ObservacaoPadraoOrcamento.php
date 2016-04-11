<?php

namespace App\Models;

class ObservacaoPadraoOrcamento extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idobservacao;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var string
     */
    protected $titulo;

    /**
     *
     * @var string
     */
    protected $texto;

    /**
     * Method to set the value of field idobservacao
     *
     * @param integer $idobservacao
     * @return $this
     */
    public function setIdobservacao($idobservacao)
    {
        $this->idobservacao = $idobservacao;

        return $this;
    }

    /**
     * Method to set the value of field cd_empresa
     *
     * @param integer $cd_empresa
     * @return $this
     */
    public function setCdEmpresa($cd_empresa)
    {
        $this->cd_empresa = $cd_empresa;

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
     * Method to set the value of field texto
     *
     * @param string $texto
     * @return $this
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Returns the value of field idobservacao
     *
     * @return integer
     */
    public function getIdobservacao()
    {
        return $this->idobservacao;
    }

    /**
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdEmpresa()
    {
        return $this->cd_empresa;
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
     * Returns the value of field texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'observacao_padrao_orcamento';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ObservacaoPadraoOrcamento[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ObservacaoPadraoOrcamento
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
            'idobservacao' => 'idobservacao',
            'cd_empresa' => 'cd_empresa',
            'titulo' => 'titulo',
            'texto' => 'texto'
        );
    }

}
