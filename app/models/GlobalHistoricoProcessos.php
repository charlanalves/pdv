<?php

namespace App\Models;

class GlobalHistoricoProcessos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_historico;

    /**
     *
     * @var integer
     */
    protected $cd_status;

    /**
     *
     * @var integer
     */
    protected $cd_usuario;

    /**
     *
     * @var integer
     */
    protected $cd_lancamento;

    /**
     *
     * @var string
     */
    protected $data_acao;

    /**
     *
     * @var string
     */
    protected $motivo;

    /**
     * Method to set the value of field cd_historico
     *
     * @param integer $cd_historico
     * @return $this
     */
    public function setCdHistorico($cd_historico)
    {
        $this->cd_historico = $cd_historico;

        return $this;
    }

    /**
     * Method to set the value of field cd_status
     *
     * @param integer $cd_status
     * @return $this
     */
    public function setCdStatus($cd_status)
    {
        $this->cd_status = $cd_status;

        return $this;
    }

    /**
     * Method to set the value of field cd_usuario
     *
     * @param integer $cd_usuario
     * @return $this
     */
    public function setCdUsuario($cd_usuario)
    {
        $this->cd_usuario = $cd_usuario;

        return $this;
    }

    /**
     * Method to set the value of field cd_lancamento
     *
     * @param integer $cd_lancamento
     * @return $this
     */
    public function setCdLancamento($cd_lancamento)
    {
        $this->cd_lancamento = $cd_lancamento;

        return $this;
    }

    /**
     * Method to set the value of field data_acao
     *
     * @param string $data_acao
     * @return $this
     */
    public function setDataAcao($data_acao)
    {
        $this->data_acao = $data_acao;

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
     * Returns the value of field cd_historico
     *
     * @return integer
     */
    public function getCdHistorico()
    {
        return $this->cd_historico;
    }

    /**
     * Returns the value of field cd_status
     *
     * @return integer
     */
    public function getCdStatus()
    {
        return $this->cd_status;
    }

    /**
     * Returns the value of field cd_usuario
     *
     * @return integer
     */
    public function getCdUsuario()
    {
        return $this->cd_usuario;
    }

    /**
     * Returns the value of field cd_lancamento
     *
     * @return integer
     */
    public function getCdLancamento()
    {
        return $this->cd_lancamento;
    }

    /**
     * Returns the value of field data_acao
     *
     * @return string
     */
    public function getDataAcao()
    {
        return $this->data_acao;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_status', 'App\Models\GlobalStatus', 'cd_status', array('alias' => 'GlobalStatus'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cd_status', 'App\Models\GlobalStatus', 'cd_status', array('foreignKey' => true,'alias' => 'GlobalStatus'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'global_historico_processos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return GlobalHistoricoProcessos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return GlobalHistoricoProcessos
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
            'cd_historico' => 'cd_historico',
            'cd_status' => 'cd_status',
            'cd_usuario' => 'cd_usuario',
            'cd_lancamento' => 'cd_lancamento',
            'data_acao' => 'data_acao',
            'motivo' => 'motivo'
        );
    }

}
