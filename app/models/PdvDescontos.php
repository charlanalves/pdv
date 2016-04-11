<?php

namespace App\Models;

class PdvDescontos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_desconto;

    /**
     *
     * @var integer
     */
    protected $cd_caixa;

    /**
     *
     * @var integer
     */
    protected $cd_produto;

    /**
     *
     * @var integer
     */
    protected $cd_unidade_negocio;

    /**
     *
     * @var integer
     */
    protected $cd_usuario_criacao;

    /**
     *
     * @var string
     */
    protected $data_criacao;

    /**
     *
     * @var integer
     */
    protected $percentual;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $tipo_desconto;

    /**
     * Method to set the value of field cd_desconto
     *
     * @param integer $cd_desconto
     * @return $this
     */
    public function setCdDesconto($cd_desconto)
    {
        $this->cd_desconto = $cd_desconto;

        return $this;
    }

    /**
     * Method to set the value of field cd_caixa
     *
     * @param integer $cd_caixa
     * @return $this
     */
    public function setCdCaixa($cd_caixa)
    {
        $this->cd_caixa = $cd_caixa;

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
     * Method to set the value of field cd_unidade_negocio
     *
     * @param integer $cd_unidade_negocio
     * @return $this
     */
    public function setCdUnidadeNegocio($cd_unidade_negocio)
    {
        $this->cd_unidade_negocio = $cd_unidade_negocio;

        return $this;
    }

    /**
     * Method to set the value of field cd_usuario_criacao
     *
     * @param integer $cd_usuario_criacao
     * @return $this
     */
    public function setCdUsuarioCriacao($cd_usuario_criacao)
    {
        $this->cd_usuario_criacao = $cd_usuario_criacao;

        return $this;
    }

    /**
     * Method to set the value of field data_criacao
     *
     * @param string $data_criacao
     * @return $this
     */
    public function setDataCriacao($data_criacao)
    {
        $this->data_criacao = $data_criacao;

        return $this;
    }

    /**
     * Method to set the value of field percentual
     *
     * @param integer $percentual
     * @return $this
     */
    public function setPercentual($percentual)
    {
        $this->percentual = $percentual;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field tipo_desconto
     *
     * @param integer $tipo_desconto
     * @return $this
     */
    public function setTipoDesconto($tipo_desconto)
    {
        $this->tipo_desconto = $tipo_desconto;

        return $this;
    }

    /**
     * Returns the value of field cd_desconto
     *
     * @return integer
     */
    public function getCdDesconto()
    {
        return $this->cd_desconto;
    }

    /**
     * Returns the value of field cd_caixa
     *
     * @return integer
     */
    public function getCdCaixa()
    {
        return $this->cd_caixa;
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
     * Returns the value of field cd_unidade_negocio
     *
     * @return integer
     */
    public function getCdUnidadeNegocio()
    {
        return $this->cd_unidade_negocio;
    }

    /**
     * Returns the value of field cd_usuario_criacao
     *
     * @return integer
     */
    public function getCdUsuarioCriacao()
    {
        return $this->cd_usuario_criacao;
    }

    /**
     * Returns the value of field data_criacao
     *
     * @return string
     */
    public function getDataCriacao()
    {
        return $this->data_criacao;
    }

    /**
     * Returns the value of field percentual
     *
     * @return integer
     */
    public function getPercentual()
    {
        return $this->percentual;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field tipo_desconto
     *
     * @return integer
     */
    public function getTipoDesconto()
    {
        return $this->tipo_desconto;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_desconto', 'App\Models\PdvVendasHasItens', 'cd_desconto', array('alias' => 'PdvVendasHasItens'));
        $this->belongsTo('cd_caixa', 'App\Models\PdvCaixa', 'cd_caixa', array('alias' => 'PdvCaixa'));
        $this->belongsTo('cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('cd_unidade_negocio', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('cd_usuario_criacao', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_descontos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvDescontos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvDescontos
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
            'cd_desconto' => 'cd_desconto',
            'cd_caixa' => 'cd_caixa',
            'cd_produto' => 'cd_produto',
            'cd_unidade_negocio' => 'cd_unidade_negocio',
            'cd_usuario_criacao' => 'cd_usuario_criacao',
            'data_criacao' => 'data_criacao',
            'percentual' => 'percentual',
            'status' => 'status',
            'tipo_desconto' => 'tipo_desconto'
        );
    }

}
