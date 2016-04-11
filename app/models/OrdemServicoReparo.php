<?php

namespace App\Models;

class OrdemServicoReparo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_ordem_servico;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var integer
     */
    protected $cd_produto;

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
     * @var integer
     */
    protected $cd_equipe;

    /**
     *
     * @var integer
     */
    protected $situacao;

    /**
     *
     * @var string
     */
    protected $inicio;

    /**
     *
     * @var string
     */
    protected $termino;

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
     * Method to set the value of field cd_ordem_servico
     *
     * @param integer $cd_ordem_servico
     * @return $this
     */
    public function setCdOrdemServico($cd_ordem_servico)
    {
        $this->cd_ordem_servico = $cd_ordem_servico;

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
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

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
     * Method to set the value of field situacao
     *
     * @param integer $situacao
     * @return $this
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Method to set the value of field inicio
     *
     * @param string $inicio
     * @return $this
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Method to set the value of field termino
     *
     * @param string $termino
     * @return $this
     */
    public function setTermino($termino)
    {
        $this->termino = $termino;

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
     * Returns the value of field cd_ordem_servico
     *
     * @return integer
     */
    public function getCdOrdemServico()
    {
        return $this->cd_ordem_servico;
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
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
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
     * Returns the value of field cd_equipe
     *
     * @return integer
     */
    public function getCdEquipe()
    {
        return $this->cd_equipe;
    }

    /**
     * Returns the value of field situacao
     *
     * @return integer
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Returns the value of field inicio
     *
     * @return string
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Returns the value of field termino
     *
     * @return string
     */
    public function getTermino()
    {
        return $this->termino;
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
        $this->hasMany('cd_ordem_servico', 'App\Models\MovimentacaoManualEstoque', 'cd_ordem_servico_reparo', array('alias' => 'MovimentacaoManualEstoque'));
        $this->hasMany('cd_ordem_servico', 'App\Models\OrdemServicoReparoHasFuncionario', 'cd_ordem_servico', array('alias' => 'OrdemServicoReparoHasFuncionario'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_equipe', 'App\Models\Equipes', 'cd_equipe', array('alias' => 'Equipes'));
        $this->belongsTo('cd_estoque', 'App\Models\MovEstoque', 'cd_estoque', array('alias' => 'MovEstoque'));
        $this->belongsTo('cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->hasMany('cd_ordem_servico', 'App\Models\MovimentacaoManualEstoque', 'cd_ordem_servico_reparo', NULL);
        $this->hasMany('cd_ordem_servico', 'App\Models\OrdemServicoReparoHasFuncionario', 'cd_ordem_servico', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_equipe', 'App\Models\Equipes', 'cd_equipe', array('foreignKey' => true,'alias' => 'Equipes'));
        $this->belongsTo('cd_estoque', 'App\Models\MovEstoque', 'cd_estoque', array('foreignKey' => true,'alias' => 'MovEstoque'));
        $this->belongsTo('cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ordem_servico_reparo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrdemServicoReparo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrdemServicoReparo
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
            'cd_ordem_servico' => 'cd_ordem_servico',
            'cd_empresa' => 'cd_empresa',
            'nome' => 'nome',
            'cd_produto' => 'cd_produto',
            'cd_estoque' => 'cd_estoque',
            'nserie' => 'nserie',
            'cd_equipe' => 'cd_equipe',
            'situacao' => 'situacao',
            'inicio' => 'inicio',
            'termino' => 'termino',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
