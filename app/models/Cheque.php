<?php

namespace App\Models;

class Cheque extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idcheque;

    /**
     *
     * @var integer
     */
    protected $idliquidacao;

    /**
     *
     * @var integer
     */
    protected $cd_lancamento;

    /**
     *
     * @var integer
     */
    protected $iddevolucao;

    /**
     *
     * @var string
     */
    protected $compensacao;

    /**
     *
     * @var string
     */
    protected $banco;

    /**
     *
     * @var string
     */
    protected $agencia;

    /**
     *
     * @var string
     */
    protected $conta;

    /**
     *
     * @var string
     */
    protected $ncheque;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $cpfCnpj;

    /**
     *
     * @var string
     */
    protected $barraCheque;

    /**
     *
     * @var double
     */
    protected $valor;

    /**
     *
     * @var integer
     */
    protected $situacao;

    /**
     *
     * @var string
     */
    protected $venc_original;

    /**
     *
     * @var integer
     */
    protected $ativo;

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
    protected $cd_custodia;

    /**
     *
     * @var integer
     */
    protected $cd_portador;

    /**
     * Method to set the value of field idcheque
     *
     * @param integer $idcheque
     * @return $this
     */
    public function setIdcheque($idcheque)
    {
        $this->idcheque = $idcheque;

        return $this;
    }

    /**
     * Method to set the value of field idliquidacao
     *
     * @param integer $idliquidacao
     * @return $this
     */
    public function setIdliquidacao($idliquidacao)
    {
        $this->idliquidacao = $idliquidacao;

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
     * Method to set the value of field iddevolucao
     *
     * @param integer $iddevolucao
     * @return $this
     */
    public function setIddevolucao($iddevolucao)
    {
        $this->iddevolucao = $iddevolucao;

        return $this;
    }

    /**
     * Method to set the value of field compensacao
     *
     * @param string $compensacao
     * @return $this
     */
    public function setCompensacao($compensacao)
    {
        $this->compensacao = $compensacao;

        return $this;
    }

    /**
     * Method to set the value of field banco
     *
     * @param string $banco
     * @return $this
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Method to set the value of field agencia
     *
     * @param string $agencia
     * @return $this
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * Method to set the value of field conta
     *
     * @param string $conta
     * @return $this
     */
    public function setConta($conta)
    {
        $this->conta = $conta;

        return $this;
    }

    /**
     * Method to set the value of field ncheque
     *
     * @param string $ncheque
     * @return $this
     */
    public function setNcheque($ncheque)
    {
        $this->ncheque = $ncheque;

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
     * Method to set the value of field cpfCnpj
     *
     * @param string $cpfCnpj
     * @return $this
     */
    public function setCpfCnpj($cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;

        return $this;
    }

    /**
     * Method to set the value of field barraCheque
     *
     * @param string $barraCheque
     * @return $this
     */
    public function setBarraCheque($barraCheque)
    {
        $this->barraCheque = $barraCheque;

        return $this;
    }

    /**
     * Method to set the value of field valor
     *
     * @param double $valor
     * @return $this
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

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
     * Method to set the value of field venc_original
     *
     * @param string $venc_original
     * @return $this
     */
    public function setVencOriginal($venc_original)
    {
        $this->venc_original = $venc_original;

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
     * Method to set the value of field cd_custodia
     *
     * @param integer $cd_custodia
     * @return $this
     */
    public function setCdCustodia($cd_custodia)
    {
        $this->cd_custodia = $cd_custodia;

        return $this;
    }

    /**
     * Method to set the value of field cd_portador
     *
     * @param integer $cd_portador
     * @return $this
     */
    public function setCdPortador($cd_portador)
    {
        $this->cd_portador = $cd_portador;

        return $this;
    }

    /**
     * Returns the value of field idcheque
     *
     * @return integer
     */
    public function getIdcheque()
    {
        return $this->idcheque;
    }

    /**
     * Returns the value of field idliquidacao
     *
     * @return integer
     */
    public function getIdliquidacao()
    {
        return $this->idliquidacao;
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
     * Returns the value of field iddevolucao
     *
     * @return integer
     */
    public function getIddevolucao()
    {
        return $this->iddevolucao;
    }

    /**
     * Returns the value of field compensacao
     *
     * @return string
     */
    public function getCompensacao()
    {
        return $this->compensacao;
    }

    /**
     * Returns the value of field banco
     *
     * @return string
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Returns the value of field agencia
     *
     * @return string
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Returns the value of field conta
     *
     * @return string
     */
    public function getConta()
    {
        return $this->conta;
    }

    /**
     * Returns the value of field ncheque
     *
     * @return string
     */
    public function getNcheque()
    {
        return $this->ncheque;
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
     * Returns the value of field cpfCnpj
     *
     * @return string
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * Returns the value of field barraCheque
     *
     * @return string
     */
    public function getBarraCheque()
    {
        return $this->barraCheque;
    }

    /**
     * Returns the value of field valor
     *
     * @return double
     */
    public function getValor()
    {
        return $this->valor;
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
     * Returns the value of field venc_original
     *
     * @return string
     */
    public function getVencOriginal()
    {
        return $this->venc_original;
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
     * Returns the value of field cd_custodia
     *
     * @return integer
     */
    public function getCdCustodia()
    {
        return $this->cd_custodia;
    }

    /**
     * Returns the value of field cd_portador
     *
     * @return integer
     */
    public function getCdPortador()
    {
        return $this->cd_portador;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_custodia', 'App\Models\Custodia', 'cd_custodia', array('alias' => 'Custodia'));
        $this->belongsTo('cd_portador', 'App\Models\Portador', 'cd_portador', array('alias' => 'Portador'));
        $this->belongsTo('idliquidacao', 'App\Models\Liquidacao', 'idliquidacao', array('alias' => 'Liquidacao'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('cd_custodia', 'App\Models\Custodia', 'cd_custodia', array('foreignKey' => true,'alias' => 'Custodia'));
        $this->belongsTo('cd_portador', 'App\Models\Portador', 'cd_portador', array('foreignKey' => true,'alias' => 'Portador'));
        $this->belongsTo('idliquidacao', 'App\Models\Liquidacao', 'idliquidacao', array('foreignKey' => true,'alias' => 'Liquidacao'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cheque';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cheque[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cheque
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
            'idcheque' => 'idcheque',
            'idliquidacao' => 'idliquidacao',
            'cd_lancamento' => 'cd_lancamento',
            'iddevolucao' => 'iddevolucao',
            'compensacao' => 'compensacao',
            'banco' => 'banco',
            'agencia' => 'agencia',
            'conta' => 'conta',
            'ncheque' => 'ncheque',
            'nome' => 'nome',
            'cpfCnpj' => 'cpfCnpj',
            'barraCheque' => 'barraCheque',
            'valor' => 'valor',
            'situacao' => 'situacao',
            'venc_original' => 'venc_original',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'cd_custodia' => 'cd_custodia',
            'cd_portador' => 'cd_portador'
        );
    }

}
