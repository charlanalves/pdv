<?php

namespace App\Models;

class TabelaPrecosHasProdutos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_tabela_has_produto;

    /**
     *
     * @var integer
     */
    protected $cd_tabela;

    /**
     *
     * @var integer
     */
    protected $cd_produto;

    /**
     *
     * @var string
     */
    protected $referencia;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $nomefiber;

    /**
     *
     * @var integer
     */
    protected $id_linha;

    /**
     *
     * @var integer
     */
    protected $cd_grupo;

    /**
     *
     * @var double
     */
    protected $peso;

    /**
     *
     * @var integer
     */
    protected $cd_medida;

    /**
     *
     * @var integer
     */
    protected $cd_medida_venda;

    /**
     *
     * @var integer
     */
    protected $qtdeCompra;

    /**
     *
     * @var integer
     */
    protected $qtdeVenda;

    /**
     *
     * @var integer
     */
    protected $utilizaConversao;

    /**
     *
     * @var string
     */
    protected $cd_ncm;

    /**
     *
     * @var integer
     */
    protected $descontinuado;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     * Method to set the value of field cd_tabela_has_produto
     *
     * @param integer $cd_tabela_has_produto
     * @return $this
     */
    public function setCdTabelaHasProduto($cd_tabela_has_produto)
    {
        $this->cd_tabela_has_produto = $cd_tabela_has_produto;

        return $this;
    }

    /**
     * Method to set the value of field cd_tabela
     *
     * @param integer $cd_tabela
     * @return $this
     */
    public function setCdTabela($cd_tabela)
    {
        $this->cd_tabela = $cd_tabela;

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
     * Method to set the value of field referencia
     *
     * @param string $referencia
     * @return $this
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

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
     * Method to set the value of field nomefiber
     *
     * @param string $nomefiber
     * @return $this
     */
    public function setNomefiber($nomefiber)
    {
        $this->nomefiber = $nomefiber;

        return $this;
    }

    /**
     * Method to set the value of field id_linha
     *
     * @param integer $id_linha
     * @return $this
     */
    public function setIdLinha($id_linha)
    {
        $this->id_linha = $id_linha;

        return $this;
    }

    /**
     * Method to set the value of field cd_grupo
     *
     * @param integer $cd_grupo
     * @return $this
     */
    public function setCdGrupo($cd_grupo)
    {
        $this->cd_grupo = $cd_grupo;

        return $this;
    }

    /**
     * Method to set the value of field peso
     *
     * @param double $peso
     * @return $this
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Method to set the value of field cd_medida
     *
     * @param integer $cd_medida
     * @return $this
     */
    public function setCdMedida($cd_medida)
    {
        $this->cd_medida = $cd_medida;

        return $this;
    }

    /**
     * Method to set the value of field cd_medida_venda
     *
     * @param integer $cd_medida_venda
     * @return $this
     */
    public function setCdMedidaVenda($cd_medida_venda)
    {
        $this->cd_medida_venda = $cd_medida_venda;

        return $this;
    }

    /**
     * Method to set the value of field qtdeCompra
     *
     * @param integer $qtdeCompra
     * @return $this
     */
    public function setQtdeCompra($qtdeCompra)
    {
        $this->qtdeCompra = $qtdeCompra;

        return $this;
    }

    /**
     * Method to set the value of field qtdeVenda
     *
     * @param integer $qtdeVenda
     * @return $this
     */
    public function setQtdeVenda($qtdeVenda)
    {
        $this->qtdeVenda = $qtdeVenda;

        return $this;
    }

    /**
     * Method to set the value of field utilizaConversao
     *
     * @param integer $utilizaConversao
     * @return $this
     */
    public function setUtilizaConversao($utilizaConversao)
    {
        $this->utilizaConversao = $utilizaConversao;

        return $this;
    }

    /**
     * Method to set the value of field cd_ncm
     *
     * @param string $cd_ncm
     * @return $this
     */
    public function setCdNcm($cd_ncm)
    {
        $this->cd_ncm = $cd_ncm;

        return $this;
    }

    /**
     * Method to set the value of field descontinuado
     *
     * @param integer $descontinuado
     * @return $this
     */
    public function setDescontinuado($descontinuado)
    {
        $this->descontinuado = $descontinuado;

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
     * Returns the value of field cd_tabela_has_produto
     *
     * @return integer
     */
    public function getCdTabelaHasProduto()
    {
        return $this->cd_tabela_has_produto;
    }

    /**
     * Returns the value of field cd_tabela
     *
     * @return integer
     */
    public function getCdTabela()
    {
        return $this->cd_tabela;
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
     * Returns the value of field referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
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
     * Returns the value of field nomefiber
     *
     * @return string
     */
    public function getNomefiber()
    {
        return $this->nomefiber;
    }

    /**
     * Returns the value of field id_linha
     *
     * @return integer
     */
    public function getIdLinha()
    {
        return $this->id_linha;
    }

    /**
     * Returns the value of field cd_grupo
     *
     * @return integer
     */
    public function getCdGrupo()
    {
        return $this->cd_grupo;
    }

    /**
     * Returns the value of field peso
     *
     * @return double
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Returns the value of field cd_medida
     *
     * @return integer
     */
    public function getCdMedida()
    {
        return $this->cd_medida;
    }

    /**
     * Returns the value of field cd_medida_venda
     *
     * @return integer
     */
    public function getCdMedidaVenda()
    {
        return $this->cd_medida_venda;
    }

    /**
     * Returns the value of field qtdeCompra
     *
     * @return integer
     */
    public function getQtdeCompra()
    {
        return $this->qtdeCompra;
    }

    /**
     * Returns the value of field qtdeVenda
     *
     * @return integer
     */
    public function getQtdeVenda()
    {
        return $this->qtdeVenda;
    }

    /**
     * Returns the value of field utilizaConversao
     *
     * @return integer
     */
    public function getUtilizaConversao()
    {
        return $this->utilizaConversao;
    }

    /**
     * Returns the value of field cd_ncm
     *
     * @return string
     */
    public function getCdNcm()
    {
        return $this->cd_ncm;
    }

    /**
     * Returns the value of field descontinuado
     *
     * @return integer
     */
    public function getDescontinuado()
    {
        return $this->descontinuado;
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
        $this->belongsTo('cd_grupo', 'App\Models\Grupoproduto', 'cd_grupo', array('alias' => 'Grupoproduto'));
        $this->belongsTo('id_linha', 'App\Models\LinhaProdutoSite', 'id_linha', array('alias' => 'LinhaProdutoSite'));
        $this->belongsTo('cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('cd_tabela', 'App\Models\TabelaPreco', 'cd_tabela', array('alias' => 'TabelaPreco'));
        $this->belongsTo('cd_medida', 'App\Models\Unidademedida', 'cd_medida', array('alias' => 'Unidademedida'));
        $this->belongsTo('cd_medida_venda', 'App\Models\Unidademedida', 'cd_medida', array('alias' => 'Unidademedida'));
        $this->belongsTo('cd_grupo', 'App\Models\Grupoproduto', 'cd_grupo', array('foreignKey' => true,'alias' => 'Grupoproduto'));
        $this->belongsTo('id_linha', 'App\Models\LinhaProdutoSite', 'id_linha', array('foreignKey' => true,'alias' => 'LinhaProdutoSite'));
        $this->belongsTo('cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
        $this->belongsTo('cd_tabela', 'App\Models\TabelaPreco', 'cd_tabela', array('foreignKey' => true,'alias' => 'TabelaPreco'));
        $this->belongsTo('cd_medida', 'App\Models\Unidademedida', 'cd_medida', array('foreignKey' => true,'alias' => 'Unidademedida'));
        $this->belongsTo('cd_medida_venda', 'App\Models\Unidademedida', 'cd_medida', array('foreignKey' => true,'alias' => 'Unidademedida'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tabela_precos_has_produtos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TabelaPrecosHasProdutos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TabelaPrecosHasProdutos
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
            'cd_tabela_has_produto' => 'cd_tabela_has_produto',
            'cd_tabela' => 'cd_tabela',
            'cd_produto' => 'cd_produto',
            'referencia' => 'referencia',
            'nome' => 'nome',
            'nomefiber' => 'nomefiber',
            'id_linha' => 'id_linha',
            'cd_grupo' => 'cd_grupo',
            'peso' => 'peso',
            'cd_medida' => 'cd_medida',
            'cd_medida_venda' => 'cd_medida_venda',
            'qtdeCompra' => 'qtdeCompra',
            'qtdeVenda' => 'qtdeVenda',
            'utilizaConversao' => 'utilizaConversao',
            'cd_ncm' => 'cd_ncm',
            'descontinuado' => 'descontinuado',
            'ativo' => 'ativo'
        );
    }

}
