<?php

namespace App\Models;

class Grupoproduto extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_grupo;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $infos;

    /**
     *
     * @var integer
     */
    protected $publicar_net;

    /**
     *
     * @var integer
     */
    protected $id_linha;

    /**
     *
     * @var integer
     */
    protected $foto;

    /**
     *
     * @var integer
     */
    protected $ordem_exibicao;

    /**
     *
     * @var string
     */
    protected $title;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var string
     */
    protected $desc_foto;

    /**
     *
     * @var integer
     */
    protected $cd_grupo_redireciona;

    /**
     *
     * @var integer
     */
    protected $icone;

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
     * Method to set the value of field infos
     *
     * @param string $infos
     * @return $this
     */
    public function setInfos($infos)
    {
        $this->infos = $infos;

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
     * Method to set the value of field ordem_exibicao
     *
     * @param integer $ordem_exibicao
     * @return $this
     */
    public function setOrdemExibicao($ordem_exibicao)
    {
        $this->ordem_exibicao = $ordem_exibicao;

        return $this;
    }

    /**
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field desc_foto
     *
     * @param string $desc_foto
     * @return $this
     */
    public function setDescFoto($desc_foto)
    {
        $this->desc_foto = $desc_foto;

        return $this;
    }

    /**
     * Method to set the value of field cd_grupo_redireciona
     *
     * @param integer $cd_grupo_redireciona
     * @return $this
     */
    public function setCdGrupoRedireciona($cd_grupo_redireciona)
    {
        $this->cd_grupo_redireciona = $cd_grupo_redireciona;

        return $this;
    }

    /**
     * Method to set the value of field icone
     *
     * @param integer $icone
     * @return $this
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;

        return $this;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field infos
     *
     * @return string
     */
    public function getInfos()
    {
        return $this->infos;
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
     * Returns the value of field id_linha
     *
     * @return integer
     */
    public function getIdLinha()
    {
        return $this->id_linha;
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
     * Returns the value of field ordem_exibicao
     *
     * @return integer
     */
    public function getOrdemExibicao()
    {
        return $this->ordem_exibicao;
    }

    /**
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field desc_foto
     *
     * @return string
     */
    public function getDescFoto()
    {
        return $this->desc_foto;
    }

    /**
     * Returns the value of field cd_grupo_redireciona
     *
     * @return integer
     */
    public function getCdGrupoRedireciona()
    {
        return $this->cd_grupo_redireciona;
    }

    /**
     * Returns the value of field icone
     *
     * @return integer
     */
    public function getIcone()
    {
        return $this->icone;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_grupo', 'App\Models\Kits', 'grupo', array('alias' => 'Kits'));
        $this->hasMany('cd_grupo', 'App\Models\Produto', 'cd_grupo', array('alias' => 'Produto'));
        $this->hasMany('cd_grupo', 'App\Models\TabelaPrecosHasProdutos', 'cd_grupo', array('alias' => 'TabelaPrecosHasProdutos'));
        $this->belongsTo('id_linha', 'App\Models\LinhaProdutoSite', 'id_linha', array('alias' => 'LinhaProdutoSite'));
        $this->hasMany('cd_grupo', 'App\Models\Kits', 'grupo', NULL);
        $this->hasMany('cd_grupo', 'App\Models\Produto', 'cd_grupo', NULL);
        $this->hasMany('cd_grupo', 'App\Models\TabelaPrecosHasProdutos', 'cd_grupo', NULL);
        $this->belongsTo('id_linha', 'App\Models\LinhaProdutoSite', 'id_linha', array('foreignKey' => true,'alias' => 'LinhaProdutoSite'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'grupoproduto';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Grupoproduto[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Grupoproduto
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
            'cd_grupo' => 'cd_grupo',
            'descricao' => 'descricao',
            'infos' => 'infos',
            'publicar_net' => 'publicar_net',
            'id_linha' => 'id_linha',
            'foto' => 'foto',
            'ordem_exibicao' => 'ordem_exibicao',
            'title' => 'title',
            'description' => 'description',
            'desc_foto' => 'desc_foto',
            'cd_grupo_redireciona' => 'cd_grupo_redireciona',
            'icone' => 'icone'
        );
    }

}
