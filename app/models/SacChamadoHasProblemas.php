<?php

namespace App\Models;

class SacChamadoHasProblemas extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cod_chamado_problemas;

    /**
     *
     * @var integer
     */
    protected $cod_tipo_problema;

    /**
     *
     * @var integer
     */
    protected $cod_chamado;

    /**
     *
     * @var integer
     */
    protected $cod_usuario_responsavel;

    /**
     *
     * @var integer
     */
    protected $cod_usuario_modificacao;

    /**
     *
     * @var integer
     */
    protected $cod_status;

    /**
     *
     * @var integer
     */
    protected $cod_produto;

    /**
     *
     * @var string
     */
    protected $data_conclusao;

    /**
     *
     * @var string
     */
    protected $data_ultimo_encaminhamento;

    /**
     *
     * @var string
     */
    protected $data_ultima_modificacao;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $tipo_problema;

    /**
     * Method to set the value of field cod_chamado_problemas
     *
     * @param integer $cod_chamado_problemas
     * @return $this
     */
    public function setCodChamadoProblemas($cod_chamado_problemas)
    {
        $this->cod_chamado_problemas = $cod_chamado_problemas;

        return $this;
    }

    /**
     * Method to set the value of field cod_tipo_problema
     *
     * @param integer $cod_tipo_problema
     * @return $this
     */
    public function setCodTipoProblema($cod_tipo_problema)
    {
        $this->cod_tipo_problema = $cod_tipo_problema;

        return $this;
    }

    /**
     * Method to set the value of field cod_chamado
     *
     * @param integer $cod_chamado
     * @return $this
     */
    public function setCodChamado($cod_chamado)
    {
        $this->cod_chamado = $cod_chamado;

        return $this;
    }

    /**
     * Method to set the value of field cod_usuario_responsavel
     *
     * @param integer $cod_usuario_responsavel
     * @return $this
     */
    public function setCodUsuarioResponsavel($cod_usuario_responsavel)
    {
        $this->cod_usuario_responsavel = $cod_usuario_responsavel;

        return $this;
    }

    /**
     * Method to set the value of field cod_usuario_modificacao
     *
     * @param integer $cod_usuario_modificacao
     * @return $this
     */
    public function setCodUsuarioModificacao($cod_usuario_modificacao)
    {
        $this->cod_usuario_modificacao = $cod_usuario_modificacao;

        return $this;
    }

    /**
     * Method to set the value of field cod_status
     *
     * @param integer $cod_status
     * @return $this
     */
    public function setCodStatus($cod_status)
    {
        $this->cod_status = $cod_status;

        return $this;
    }

    /**
     * Method to set the value of field cod_produto
     *
     * @param integer $cod_produto
     * @return $this
     */
    public function setCodProduto($cod_produto)
    {
        $this->cod_produto = $cod_produto;

        return $this;
    }

    /**
     * Method to set the value of field data_conclusao
     *
     * @param string $data_conclusao
     * @return $this
     */
    public function setDataConclusao($data_conclusao)
    {
        $this->data_conclusao = $data_conclusao;

        return $this;
    }

    /**
     * Method to set the value of field data_ultimo_encaminhamento
     *
     * @param string $data_ultimo_encaminhamento
     * @return $this
     */
    public function setDataUltimoEncaminhamento($data_ultimo_encaminhamento)
    {
        $this->data_ultimo_encaminhamento = $data_ultimo_encaminhamento;

        return $this;
    }

    /**
     * Method to set the value of field data_ultima_modificacao
     *
     * @param string $data_ultima_modificacao
     * @return $this
     */
    public function setDataUltimaModificacao($data_ultima_modificacao)
    {
        $this->data_ultima_modificacao = $data_ultima_modificacao;

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
     * Method to set the value of field tipo_problema
     *
     * @param string $tipo_problema
     * @return $this
     */
    public function setTipoProblema($tipo_problema)
    {
        $this->tipo_problema = $tipo_problema;

        return $this;
    }

    /**
     * Returns the value of field cod_chamado_problemas
     *
     * @return integer
     */
    public function getCodChamadoProblemas()
    {
        return $this->cod_chamado_problemas;
    }

    /**
     * Returns the value of field cod_tipo_problema
     *
     * @return integer
     */
    public function getCodTipoProblema()
    {
        return $this->cod_tipo_problema;
    }

    /**
     * Returns the value of field cod_chamado
     *
     * @return integer
     */
    public function getCodChamado()
    {
        return $this->cod_chamado;
    }

    /**
     * Returns the value of field cod_usuario_responsavel
     *
     * @return integer
     */
    public function getCodUsuarioResponsavel()
    {
        return $this->cod_usuario_responsavel;
    }

    /**
     * Returns the value of field cod_usuario_modificacao
     *
     * @return integer
     */
    public function getCodUsuarioModificacao()
    {
        return $this->cod_usuario_modificacao;
    }

    /**
     * Returns the value of field cod_status
     *
     * @return integer
     */
    public function getCodStatus()
    {
        return $this->cod_status;
    }

    /**
     * Returns the value of field cod_produto
     *
     * @return integer
     */
    public function getCodProduto()
    {
        return $this->cod_produto;
    }

    /**
     * Returns the value of field data_conclusao
     *
     * @return string
     */
    public function getDataConclusao()
    {
        return $this->data_conclusao;
    }

    /**
     * Returns the value of field data_ultimo_encaminhamento
     *
     * @return string
     */
    public function getDataUltimoEncaminhamento()
    {
        return $this->data_ultimo_encaminhamento;
    }

    /**
     * Returns the value of field data_ultima_modificacao
     *
     * @return string
     */
    public function getDataUltimaModificacao()
    {
        return $this->data_ultima_modificacao;
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
     * Returns the value of field tipo_problema
     *
     * @return string
     */
    public function getTipoProblema()
    {
        return $this->tipo_problema;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cod_chamado', 'App\Models\SacChamado', 'cod_chamado', array('alias' => 'SacChamado'));
        $this->belongsTo('cod_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('cod_status', 'App\Models\SacStatus', 'cod_status', array('alias' => 'SacStatus'));
        $this->belongsTo('cod_usuario_modificacao', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cod_usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cod_tipo_problema', 'App\Models\Tipos', 'cd_tipos', array('alias' => 'Tipos'));
        $this->belongsTo('cod_chamado', 'App\Models\SacChamado', 'cod_chamado', array('foreignKey' => true,'alias' => 'SacChamado'));
        $this->belongsTo('cod_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
        $this->belongsTo('cod_status', 'App\Models\SacStatus', 'cod_status', array('foreignKey' => true,'alias' => 'SacStatus'));
        $this->belongsTo('cod_usuario_modificacao', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
        $this->belongsTo('cod_usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
        $this->belongsTo('cod_tipo_problema', 'App\Models\Tipos', 'cd_tipos', array('foreignKey' => true,'alias' => 'Tipos'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sac_chamado_has_problemas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacChamadoHasProblemas[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SacChamadoHasProblemas
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
            'cod_chamado_problemas' => 'cod_chamado_problemas',
            'cod_tipo_problema' => 'cod_tipo_problema',
            'cod_chamado' => 'cod_chamado',
            'cod_usuario_responsavel' => 'cod_usuario_responsavel',
            'cod_usuario_modificacao' => 'cod_usuario_modificacao',
            'cod_status' => 'cod_status',
            'cod_produto' => 'cod_produto',
            'data_conclusao' => 'data_conclusao',
            'data_ultimo_encaminhamento' => 'data_ultimo_encaminhamento',
            'data_ultima_modificacao' => 'data_ultima_modificacao',
            'descricao' => 'descricao',
            'tipo_problema' => 'tipo_problema'
        );
    }

}
