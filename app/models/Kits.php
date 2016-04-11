<?php

namespace App\Models;

class Kits extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idkits;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var integer
     */
    protected $id_linha;

    /**
     *
     * @var integer
     */
    protected $grupo;

    /**
     *
     * @var integer
     */
    protected $responsavel;

    /**
     *
     * @var integer
     */
    protected $foto;

    /**
     *
     * @var integer
     */
    protected $publicar_net;

    /**
     *
     * @var integer
     */
    protected $descontinuado;

    /**
     * Method to set the value of field idkits
     *
     * @param integer $idkits
     * @return $this
     */
    public function setIdkits($idkits)
    {
        $this->idkits = $idkits;

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
     * Method to set the value of field unidade_negocio_cd_unidade
     *
     * @param integer $unidade_negocio_cd_unidade
     * @return $this
     */
    public function setUnidadeNegocioCdUnidade($unidade_negocio_cd_unidade)
    {
        $this->unidade_negocio_cd_unidade = $unidade_negocio_cd_unidade;

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
     * Method to set the value of field grupo
     *
     * @param integer $grupo
     * @return $this
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Method to set the value of field responsavel
     *
     * @param integer $responsavel
     * @return $this
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Method to set the value of field foto
     *
     * @param integer $foto
     * @return $this
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Method to set the value of field publicar_net
     *
     * @param integer $publicar_net
     * @return $this
     */
    public function setPublicarNet($publicar_net)
    {
        $this->publicar_net = $publicar_net;

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
     * Returns the value of field idkits
     *
     * @return integer
     */
    public function getIdkits()
    {
        return $this->idkits;
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
     * Returns the value of field unidade_negocio_cd_unidade
     *
     * @return integer
     */
    public function getUnidadeNegocioCdUnidade()
    {
        return $this->unidade_negocio_cd_unidade;
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
     * Returns the value of field grupo
     *
     * @return integer
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Returns the value of field responsavel
     *
     * @return integer
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Returns the value of field foto
     *
     * @return integer
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Returns the value of field publicar_net
     *
     * @return integer
     */
    public function getPublicarNet()
    {
        return $this->publicar_net;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idkits', 'App\Models\Contato', 'idkits', array('alias' => 'Contato'));
        $this->hasMany('idkits', 'App\Models\KitsAreas', 'kits_idkits', array('alias' => 'KitsAreas'));
        $this->hasMany('idkits', 'App\Models\KitsProduto', 'kits_idkits', array('alias' => 'KitsProduto'));
        $this->hasMany('idkits', 'App\Models\OrcamentoItem', 'kits_idkits', array('alias' => 'OrcamentoItem'));
        $this->hasMany('idkits', 'App\Models\PedidoHasProduto', 'kits_idkits', array('alias' => 'PedidoHasProduto'));
        $this->hasMany('idkits', 'App\Models\PiscinaHasFiltroCasaMaquinas', 'filtro', array('alias' => 'PiscinaHasFiltroCasaMaquinas'));
        $this->hasMany('idkits', 'App\Models\SiteKits', 'idkits', array('alias' => 'SiteKits'));
        $this->belongsTo('grupo', 'App\Models\Grupoproduto', 'cd_grupo', array('alias' => 'Grupoproduto'));
        $this->belongsTo('id_linha', 'App\Models\LinhaProdutoSite', 'id_linha', array('alias' => 'LinhaProdutoSite'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('idkits', 'App\Models\Contato', 'idkits', NULL);
        $this->hasMany('idkits', 'App\Models\KitsAreas', 'kits_idkits', NULL);
        $this->hasMany('idkits', 'App\Models\KitsProduto', 'kits_idkits', NULL);
        $this->hasMany('idkits', 'App\Models\OrcamentoItem', 'kits_idkits', NULL);
        $this->hasMany('idkits', 'App\Models\PedidoHasProduto', 'kits_idkits', NULL);
        $this->hasMany('idkits', 'App\Models\PiscinaHasFiltroCasaMaquinas', 'filtro', NULL);
        $this->hasMany('idkits', 'App\Models\SiteKits', 'idkits', NULL);
        $this->belongsTo('grupo', 'App\Models\Grupoproduto', 'cd_grupo', array('foreignKey' => true,'alias' => 'Grupoproduto'));
        $this->belongsTo('id_linha', 'App\Models\LinhaProdutoSite', 'id_linha', array('foreignKey' => true,'alias' => 'LinhaProdutoSite'));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('foreignKey' => true,'alias' => 'UnidadeNegocio'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'kits';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kits[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kits
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
            'idkits' => 'idkits',
            'descricao' => 'descricao',
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'id_linha' => 'id_linha',
            'grupo' => 'grupo',
            'responsavel' => 'responsavel',
            'foto' => 'foto',
            'publicar_net' => 'publicar_net',
            'descontinuado' => 'descontinuado'
        );
    }

}
