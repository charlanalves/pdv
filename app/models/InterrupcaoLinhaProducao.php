<?php

namespace App\Models;

class InterrupcaoLinhaProducao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_interrupcao;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $cd_molde;

    /**
     *
     * @var integer
     */
    protected $cd_equipe;

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
     * @var string
     */
    protected $hora_inicio;

    /**
     *
     * @var string
     */
    protected $hora_fim;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $cd_op;

    /**
     *
     * @var integer
     */
    protected $usuario_gerador;

    /**
     *
     * @var integer
     */
    protected $cd_motivo_interrupcao;

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
     * Method to set the value of field cd_interrupcao
     *
     * @param integer $cd_interrupcao
     * @return $this
     */
    public function setCdInterrupcao($cd_interrupcao)
    {
        $this->cd_interrupcao = $cd_interrupcao;

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
     * Method to set the value of field cd_molde
     *
     * @param integer $cd_molde
     * @return $this
     */
    public function setCdMolde($cd_molde)
    {
        $this->cd_molde = $cd_molde;

        return $this;
    }

    /**
     * Method to set the value of field cd_equipe
     *
     * @param integer $cd_equipe
     * @return $this
     */
    public function setCdEquipe($cd_equipe)
    {
        $this->cd_equipe = $cd_equipe;

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
     * Method to set the value of field hora_inicio
     *
     * @param string $hora_inicio
     * @return $this
     */
    public function setHoraInicio($hora_inicio)
    {
        $this->hora_inicio = $hora_inicio;

        return $this;
    }

    /**
     * Method to set the value of field hora_fim
     *
     * @param string $hora_fim
     * @return $this
     */
    public function setHoraFim($hora_fim)
    {
        $this->hora_fim = $hora_fim;

        return $this;
    }

    /**
     * Method to set the value of field descricao
     *
     * @param string $descricao
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Method to set the value of field cd_op
     *
     * @param integer $cd_op
     * @return $this
     */
    public function setCdOp($cd_op)
    {
        $this->cd_op = $cd_op;

        return $this;
    }

    /**
     * Method to set the value of field usuario_gerador
     *
     * @param integer $usuario_gerador
     * @return $this
     */
    public function setUsuarioGerador($usuario_gerador)
    {
        $this->usuario_gerador = $usuario_gerador;

        return $this;
    }

    /**
     * Method to set the value of field cd_motivo_interrupcao
     *
     * @param integer $cd_motivo_interrupcao
     * @return $this
     */
    public function setCdMotivoInterrupcao($cd_motivo_interrupcao)
    {
        $this->cd_motivo_interrupcao = $cd_motivo_interrupcao;

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
     * Returns the value of field cd_interrupcao
     *
     * @return integer
     */
    public function getCdInterrupcao()
    {
        return $this->cd_interrupcao;
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
     * Returns the value of field cd_molde
     *
     * @return integer
     */
    public function getCdMolde()
    {
        return $this->cd_molde;
    }

    /**
     * Returns the value of field cd_equipe
     *
     * @return integer
     */
    public function getCdEquipe()
    {
        return $this->cd_equipe;
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
     * Returns the value of field hora_inicio
     *
     * @return string
     */
    public function getHoraInicio()
    {
        return $this->hora_inicio;
    }

    /**
     * Returns the value of field hora_fim
     *
     * @return string
     */
    public function getHoraFim()
    {
        return $this->hora_fim;
    }

    /**
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field cd_op
     *
     * @return integer
     */
    public function getCdOp()
    {
        return $this->cd_op;
    }

    /**
     * Returns the value of field usuario_gerador
     *
     * @return integer
     */
    public function getUsuarioGerador()
    {
        return $this->usuario_gerador;
    }

    /**
     * Returns the value of field cd_motivo_interrupcao
     *
     * @return integer
     */
    public function getCdMotivoInterrupcao()
    {
        return $this->cd_motivo_interrupcao;
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
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_equipe', 'App\Models\Equipes', 'cd_equipe', array('alias' => 'Equipes'));
        $this->belongsTo('cd_molde', 'App\Models\Molde', 'cd_molde', array('alias' => 'Molde'));
        $this->belongsTo('cd_op', 'App\Models\Op', 'cd_op', array('alias' => 'Op'));
        $this->belongsTo('cd_motivo_interrupcao', 'App\Models\MotivoInterrupcao', 'cd_motivo', array('alias' => 'MotivoInterrupcao'));
        $this->belongsTo('usuario_gerador', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_equipe', 'App\Models\Equipes', 'cd_equipe', array('foreignKey' => true,'alias' => 'Equipes'));
        $this->belongsTo('cd_molde', 'App\Models\Molde', 'cd_molde', array('foreignKey' => true,'alias' => 'Molde'));
        $this->belongsTo('cd_op', 'App\Models\Op', 'cd_op', array('foreignKey' => true,'alias' => 'Op'));
        $this->belongsTo('cd_motivo_interrupcao', 'App\Models\MotivoInterrupcao', 'cd_motivo', array('foreignKey' => true,'alias' => 'MotivoInterrupcao'));
        $this->belongsTo('usuario_gerador', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'interrupcao_linha_producao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return InterrupcaoLinhaProducao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return InterrupcaoLinhaProducao
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
            'cd_interrupcao' => 'cd_interrupcao',
            'cd_empresa' => 'cd_empresa',
            'cd_molde' => 'cd_molde',
            'cd_equipe' => 'cd_equipe',
            'data_inicio' => 'data_inicio',
            'data_fim' => 'data_fim',
            'hora_inicio' => 'hora_inicio',
            'hora_fim' => 'hora_fim',
            'descricao' => 'descricao',
            'cd_op' => 'cd_op',
            'usuario_gerador' => 'usuario_gerador',
            'cd_motivo_interrupcao' => 'cd_motivo_interrupcao',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
