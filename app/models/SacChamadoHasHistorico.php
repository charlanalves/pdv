<?php

namespace App\Models;

class SacChamadoHasHistorico extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cod_historico_chamado;

    /**
     *
     * @var integer
     */
    protected $cod_chamado_historico;

    /**
     *
     * @var integer
     */
    protected $cod_acao;

    /**
     *
     * @var integer
     */
    protected $cod_usuario_acao;

    /**
     *
     * @var string
     */
    protected $motivo_acao;

    /**
     * Method to set the value of field cod_historico_chamado
     *
     * @param integer $cod_historico_chamado
     * @return $this
     */
    public function setCodHistoricoChamado($cod_historico_chamado)
    {
        $this->cod_historico_chamado = $cod_historico_chamado;

        return $this;
    }

    /**
     * Method to set the value of field cod_chamado_historico
     *
     * @param integer $cod_chamado_historico
     * @return $this
     */
    public function setCodChamadoHistorico($cod_chamado_historico)
    {
        $this->cod_chamado_historico = $cod_chamado_historico;

        return $this;
    }

    /**
     * Method to set the value of field cod_acao
     *
     * @param integer $cod_acao
     * @return $this
     */
    public function setCodAcao($cod_acao)
    {
        $this->cod_acao = $cod_acao;

        return $this;
    }

    /**
     * Method to set the value of field cod_usuario_acao
     *
     * @param integer $cod_usuario_acao
     * @return $this
     */
    public function setCodUsuarioAcao($cod_usuario_acao)
    {
        $this->cod_usuario_acao = $cod_usuario_acao;

        return $this;
    }

    /**
     * Method to set the value of field motivo_acao
     *
     * @param string $motivo_acao
     * @return $this
     */
    public function setMotivoAcao($motivo_acao)
    {
        $this->motivo_acao = $motivo_acao;

        return $this;
    }

    /**
     * Returns the value of field cod_historico_chamado
     *
     * @return integer
     */
    public function getCodHistoricoChamado()
    {
        return $this->cod_historico_chamado;
    }

    /**
     * Returns the value of field cod_chamado_historico
     *
     * @return integer
     */
    public function getCodChamadoHistorico()
    {
        return $this->cod_chamado_historico;
    }

    /**
     * Returns the value of field cod_acao
     *
     * @return integer
     */
    public function getCodAcao()
    {
        return $this->cod_acao;
    }

    /**
     * Returns the value of field cod_usuario_acao
     *
     * @return integer
     */
    public function getCodUsuarioAcao()
    {
        return $this->cod_usuario_acao;
    }

    /**
     * Returns the value of field motivo_acao
     *
     * @return string
     */
    public function getMotivoAcao()
    {
        return $this->motivo_acao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cod_chamado_historico', 'App\Models\SacChamado', 'cod_chamado', array('alias' => 'SacChamado'));
        $this->belongsTo('cod_acao', 'App\Models\SacStatus', 'cod_status', array('alias' => 'SacStatus'));
        $this->belongsTo('cod_usuario_acao', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cod_chamado_historico', 'App\Models\SacChamado', 'cod_chamado', array('foreignKey' => true,'alias' => 'SacChamado'));
        $this->belongsTo('cod_acao', 'App\Models\SacStatus', 'cod_status', array('foreignKey' => true,'alias' => 'SacStatus'));
        $this->belongsTo('cod_usuario_acao', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sac_chamado_has_historico';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacChamadoHasHistorico[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacChamadoHasHistorico
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
            'cod_historico_chamado' => 'cod_historico_chamado',
            'cod_chamado_historico' => 'cod_chamado_historico',
            'cod_acao' => 'cod_acao',
            'cod_usuario_acao' => 'cod_usuario_acao',
            'motivo_acao' => 'motivo_acao'
        );
    }

}
