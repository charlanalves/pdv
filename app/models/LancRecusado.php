<?php

namespace App\Models;

class LancRecusado extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_recusado;

    /**
     *
     * @var integer
     */
    protected $lancamento_cd_lancamento;

    /**
     *
     * @var string
     */
    protected $motivo;

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
     *
     * @var integer
     */
    protected $ativo;

    /**
     * Method to set the value of field cd_recusado
     *
     * @param integer $cd_recusado
     * @return $this
     */
    public function setCdRecusado($cd_recusado)
    {
        $this->cd_recusado = $cd_recusado;

        return $this;
    }

    /**
     * Method to set the value of field lancamento_cd_lancamento
     *
     * @param integer $lancamento_cd_lancamento
     * @return $this
     */
    public function setLancamentoCdLancamento($lancamento_cd_lancamento)
    {
        $this->lancamento_cd_lancamento = $lancamento_cd_lancamento;

        return $this;
    }

    /**
     * Method to set the value of field motivo
     *
     * @param string $motivo
     * @return $this
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

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
     * Returns the value of field cd_recusado
     *
     * @return integer
     */
    public function getCdRecusado()
    {
        return $this->cd_recusado;
    }

    /**
     * Returns the value of field lancamento_cd_lancamento
     *
     * @return integer
     */
    public function getLancamentoCdLancamento()
    {
        return $this->lancamento_cd_lancamento;
    }

    /**
     * Returns the value of field motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
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
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('lancamento_cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('lancamento_cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'lanc_recusado';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LancRecusado[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LancRecusado
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
            'cd_recusado' => 'cd_recusado',
            'lancamento_cd_lancamento' => 'lancamento_cd_lancamento',
            'motivo' => 'motivo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'ativo' => 'ativo'
        );
    }

}
