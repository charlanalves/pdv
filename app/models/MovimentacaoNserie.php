<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;

class MovimentacaoNserie extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_movimentacao;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var integer
     */
    protected $cd_estoque;

    /**
     *
     * @var string
     */
    protected $nserie;

    /**
     *
     * @var string
     */
    protected $tipo;

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
     * Method to set the value of field cd_movimentacao
     *
     * @param integer $cd_movimentacao
     * @return $this
     */
    public function setCdMovimentacao($cd_movimentacao)
    {
        $this->cd_movimentacao = $cd_movimentacao;

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
     * Method to set the value of field cd_estoque
     *
     * @param integer $cd_estoque
     * @return $this
     */
    public function setCdEstoque($cd_estoque)
    {
        $this->cd_estoque = $cd_estoque;

        return $this;
    }

    /**
     * Method to set the value of field nserie
     *
     * @param string $nserie
     * @return $this
     */
    public function setNserie($nserie)
    {
        $this->nserie = $nserie;

        return $this;
    }

    /**
     * Method to set the value of field tipo
     *
     * @param string $tipo
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

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
     * Returns the value of field cd_movimentacao
     *
     * @return integer
     */
    public function getCdMovimentacao()
    {
        return $this->cd_movimentacao;
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
     * Returns the value of field cd_estoque
     *
     * @return integer
     */
    public function getCdEstoque()
    {
        return $this->cd_estoque;
    }

    /**
     * Returns the value of field nserie
     *
     * @return string
     */
    public function getNserie()
    {
        return $this->nserie;
    }

    /**
     * Returns the value of field tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_estoque', 'App\Models\MovEstoque', 'cd_estoque', array('alias' => 'MovEstoque'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));

        $this->customInitialize();
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'movimentacao_nserie';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovimentacaoNserie[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovimentacaoNserie
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
            'cd_movimentacao' => 'cd_movimentacao',
            'cd_unidade' => 'cd_unidade',
            'cd_estoque' => 'cd_estoque',
            'nserie' => 'nserie',
            'tipo' => 'tipo',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

    public function customInitialize()
    {
        $this->addBehavior(new Timestampable(
            array(
                'beforeValidationOnCreate' => array(
                    'field' => array('modificado'),
                    'format' => 'Y-m-d H:i:s'
                    )
                )
        ));

        $this->skipAttributesOnUpdate(array('criado'));
    }
}
