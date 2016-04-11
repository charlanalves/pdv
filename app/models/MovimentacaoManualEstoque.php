<?php

namespace App\Models;

class MovimentacaoManualEstoque extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idmov;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var integer
     */
    protected $usuario_responsavel;

    /**
     *
     * @var integer
     */
    protected $requerente;

    /**
     *
     * @var integer
     */
    protected $cd_ordem_servico_reparo;

    /**
     *
     * @var string
     */
    protected $tipo;

    /**
     *
     * @var string
     */
    protected $obs;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var integer
     */
    protected $centro_armazenagem_entrada;

    /**
     *
     * @var integer
     */
    protected $centro_armazenagem_saida;

    /**
     * Method to set the value of field idmov
     *
     * @param integer $idmov
     * @return $this
     */
    public function setIdmov($idmov)
    {
        $this->idmov = $idmov;

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
     * Method to set the value of field cd_ordem_servico_reparo
     *
     * @param integer $cd_ordem_servico_reparo
     * @return $this
     */
    public function setCdOrdemServicoReparo($cd_ordem_servico_reparo)
    {
        $this->cd_ordem_servico_reparo = $cd_ordem_servico_reparo;

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
     * Method to set the value of field centro_armazenagem_entrada
     *
     * @param integer $centro_armazenagem_entrada
     * @return $this
     */
    public function setCentroArmazenagemEntrada($centro_armazenagem_entrada)
    {
        $this->centro_armazenagem_entrada = $centro_armazenagem_entrada;

        return $this;
    }

    /**
     * Method to set the value of field centro_armazenagem_saida
     *
     * @param integer $centro_armazenagem_saida
     * @return $this
     */
    public function setCentroArmazenagemSaida($centro_armazenagem_saida)
    {
        $this->centro_armazenagem_saida = $centro_armazenagem_saida;

        return $this;
    }

    /**
     * Returns the value of field idmov
     *
     * @return integer
     */
    public function getIdmov()
    {
        return $this->idmov;
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
     * Returns the value of field usuario_responsavel
     *
     * @return integer
     */
    public function getUsuarioResponsavel()
    {
        return $this->usuario_responsavel;
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
     * Returns the value of field cd_ordem_servico_reparo
     *
     * @return integer
     */
    public function getCdOrdemServicoReparo()
    {
        return $this->cd_ordem_servico_reparo;
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
     * Returns the value of field obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
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
     * Returns the value of field centro_armazenagem_entrada
     *
     * @return integer
     */
    public function getCentroArmazenagemEntrada()
    {
        return $this->centro_armazenagem_entrada;
    }

    /**
     * Returns the value of field centro_armazenagem_saida
     *
     * @return integer
     */
    public function getCentroArmazenagemSaida()
    {
        return $this->centro_armazenagem_saida;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idmov', 'App\Models\MovEstoque', 'movimentacao_manual_estoque_idmov', array('alias' => 'MovEstoque'));
        $this->hasMany('idmov', 'App\Models\MovimentacaoManualEstoqueItem', 'idmov', array('alias' => 'MovimentacaoManualEstoqueItem'));
        $this->belongsTo('cd_ordem_servico_reparo', 'App\Models\OrdemServicoReparo', 'cd_ordem_servico', array('alias' => 'OrdemServicoReparo'));
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->belongsTo('requerente', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'movimentacao_manual_estoque';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovimentacaoManualEstoque[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovimentacaoManualEstoque
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
            'idmov' => 'idmov',
            'cd_unidade' => 'cd_unidade',
            'usuario_responsavel' => 'usuario_responsavel',
            'requerente' => 'requerente',
            'cd_ordem_servico_reparo' => 'cd_ordem_servico_reparo',
            'tipo' => 'tipo',
            'obs' => 'obs',
            'criado' => 'criado',
            'centro_armazenagem_entrada' => 'centro_armazenagem_entrada',
            'centro_armazenagem_saida' => 'centro_armazenagem_saida'
        );
    }
}
