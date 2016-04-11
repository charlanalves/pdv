<?php

namespace App\Models;

class LinhaProdutoSite extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_linha;

    /**
     *
     * @var integer
     */
    protected $id_tipo;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $publicar_net;

    /**
     *
     * @var string
     */
    protected $url;

    /**
     *
     * @var integer
     */
    protected $ordem_exibicao;

    /**
     *
     * @var string
     */
    protected $foto_linha;

    /**
     *
     * @var string
     */
    protected $exibe_home;

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
    protected $id_linha_redireciona;

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
     * Method to set the value of field id_tipo
     *
     * @param integer $id_tipo
     * @return $this
     */
    public function setIdTipo($id_tipo)
    {
        $this->id_tipo = $id_tipo;

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
     * Method to set the value of field url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

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
     * Method to set the value of field foto_linha
     *
     * @param string $foto_linha
     * @return $this
     */
    public function setFotoLinha($foto_linha)
    {
        $this->foto_linha = $foto_linha;

        return $this;
    }

    /**
     * Method to set the value of field exibe_home
     *
     * @param string $exibe_home
     * @return $this
     */
    public function setExibeHome($exibe_home)
    {
        $this->exibe_home = $exibe_home;

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
     * Method to set the value of field id_linha_redireciona
     *
     * @param integer $id_linha_redireciona
     * @return $this
     */
    public function setIdLinhaRedireciona($id_linha_redireciona)
    {
        $this->id_linha_redireciona = $id_linha_redireciona;

        return $this;
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
     * Returns the value of field id_tipo
     *
     * @return integer
     */
    public function getIdTipo()
    {
        return $this->id_tipo;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
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
     * Returns the value of field url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
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
     * Returns the value of field foto_linha
     *
     * @return string
     */
    public function getFotoLinha()
    {
        return $this->foto_linha;
    }

    /**
     * Returns the value of field exibe_home
     *
     * @return string
     */
    public function getExibeHome()
    {
        return $this->exibe_home;
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
     * Returns the value of field id_linha_redireciona
     *
     * @return integer
     */
    public function getIdLinhaRedireciona()
    {
        return $this->id_linha_redireciona;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_linha', 'App\Models\Grupoproduto', 'id_linha', array('alias' => 'Grupoproduto'));
        $this->hasMany('id_linha', 'App\Models\Kits', 'id_linha', array('alias' => 'Kits'));
        $this->hasMany('id_linha', 'App\Models\LinhaRelacionada', 'id_linha_principal', array('alias' => 'LinhaRelacionada'));
        $this->hasMany('id_linha', 'App\Models\LinhaRelacionada', 'id_linha_relacionada', array('alias' => 'LinhaRelacionada'));
        $this->hasMany('id_linha', 'App\Models\Produto', 'id_linha', array('alias' => 'Produto'));
        $this->hasMany('id_linha', 'App\Models\TabelaPrecosHasProdutos', 'id_linha', array('alias' => 'TabelaPrecosHasProdutos'));
        $this->belongsTo('id_tipo', 'App\Models\TipoLinhaSite', 'id_tipo', array('alias' => 'TipoLinhaSite'));
        $this->hasMany('id_linha', 'App\Models\Grupoproduto', 'id_linha', NULL);
        $this->hasMany('id_linha', 'App\Models\Kits', 'id_linha', NULL);
        $this->hasMany('id_linha', 'App\Models\LinhaRelacionada', 'id_linha_principal', NULL);
        $this->hasMany('id_linha', 'App\Models\LinhaRelacionada', 'id_linha_relacionada', NULL);
        $this->hasMany('id_linha', 'App\Models\Produto', 'id_linha', NULL);
        $this->hasMany('id_linha', 'App\Models\TabelaPrecosHasProdutos', 'id_linha', NULL);
        $this->belongsTo('id_tipo', 'App\Models\TipoLinhaSite', 'id_tipo', array('foreignKey' => true,'alias' => 'TipoLinhaSite'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'linha_produto_site';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LinhaProdutoSite[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LinhaProdutoSite
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
            'id_linha' => 'id_linha',
            'id_tipo' => 'id_tipo',
            'nome' => 'nome',
            'descricao' => 'descricao',
            'publicar_net' => 'publicar_net',
            'url' => 'url',
            'ordem_exibicao' => 'ordem_exibicao',
            'foto_linha' => 'foto_linha',
            'exibe_home' => 'exibe_home',
            'title' => 'title',
            'description' => 'description',
            'desc_foto' => 'desc_foto',
            'id_linha_redireciona' => 'id_linha_redireciona'
        );
    }

}
