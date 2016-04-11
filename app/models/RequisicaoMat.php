<?php

namespace App\Models;

class RequisicaoMat extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_requisicao;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $requerente;

    /**
     *
     * @var integer
     */
    protected $usuario_responsavel;

    /**
     *
     * @var integer
     */
    protected $solicitacao_compra;

    /**
     *
     * @var string
     */
    protected $obs;

    /**
     *
     * @var integer
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
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     * Method to set the value of field cd_requisicao
     *
     * @param integer $cd_requisicao
     * @return $this
     */
    public function setCdRequisicao($cd_requisicao)
    {
        $this->cd_requisicao = $cd_requisicao;

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
     * Method to set the value of field requerente
     *
     * @param integer $requerente
     * @return $this
     */
    public function setRequerente($requerente)
    {
        $this->requerente = $requerente;

        return $this;
    }

    /**
     * Method to set the value of field usuario_responsavel
     *
     * @param integer $usuario_responsavel
     * @return $this
     */
    public function setUsuarioResponsavel($usuario_responsavel)
    {
        $this->usuario_responsavel = $usuario_responsavel;

        return $this;
    }

    /**
     * Method to set the value of field solicitacao_compra
     *
     * @param integer $solicitacao_compra
     * @return $this
     */
    public function setSolicitacaoCompra($solicitacao_compra)
    {
        $this->solicitacao_compra = $solicitacao_compra;

        return $this;
    }

    /**
     * Method to set the value of field obs
     *
     * @param string $obs
     * @return $this
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Method to set the value of field tipo
     *
     * @param integer $tipo
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
     * Returns the value of field cd_requisicao
     *
     * @return integer
     */
    public function getCdRequisicao()
    {
        return $this->cd_requisicao;
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
     * Returns the value of field requerente
     *
     * @return integer
     */
    public function getRequerente()
    {
        return $this->requerente;
    }

    /**
     * Returns the value of field usuario_responsavel
     *
     * @return integer
     */
    public function getUsuarioResponsavel()
    {
        return $this->usuario_responsavel;
    }

    /**
     * Returns the value of field solicitacao_compra
     *
     * @return integer
     */
    public function getSolicitacaoCompra()
    {
        return $this->solicitacao_compra;
    }

    /**
     * Returns the value of field obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Returns the value of field tipo
     *
     * @return integer
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
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_requisicao', 'App\Models\RequisicaoItem', 'requisicaoMat_cd_requisicao', array('alias' => 'RequisicaoItem'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('solicitacao_compra', 'App\Models\OrdemCompra', 'cd_compra', array('alias' => 'OrdemCompra'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->hasMany('cd_requisicao', 'App\Models\RequisicaoItem', 'requisicaoMat_cd_requisicao', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('solicitacao_compra', 'App\Models\OrdemCompra', 'cd_compra', array('foreignKey' => true,'alias' => 'OrdemCompra'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'requisicaoMat';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RequisicaoMat[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RequisicaoMat
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
            'cd_requisicao' => 'cd_requisicao',
            'cd_empresa' => 'cd_empresa',
            'requerente' => 'requerente',
            'usuario_responsavel' => 'usuario_responsavel',
            'solicitacao_compra' => 'solicitacao_compra',
            'obs' => 'obs',
            'tipo' => 'tipo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'ativo' => 'ativo',
            'status' => 'status'
        );
    }

}
