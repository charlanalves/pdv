<?php

namespace App\Models;

class SiteKits extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $idkits;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $descricaobreve;

    /**
     *
     * @var string
     */
    protected $caracteristicas;

    /**
     *
     * @var string
     */
    protected $link;

    /**
     *
     * @var integer
     */
    protected $publicar;

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
    protected $keywords;

    /**
     *
     * @var string
     */
    protected $otimizacao;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $comprimento;

    /**
     *
     * @var string
     */
    protected $largura;

    /**
     *
     * @var string
     */
    protected $profundidade;

    /**
     *
     * @var string
     */
    protected $diametro;

    /**
     *
     * @var integer
     */
    protected $ordem_exibicao;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Method to set the value of field descricaobreve
     *
     * @param string $descricaobreve
     * @return $this
     */
    public function setDescricaobreve($descricaobreve)
    {
        $this->descricaobreve = $descricaobreve;

        return $this;
    }

    /**
     * Method to set the value of field caracteristicas
     *
     * @param string $caracteristicas
     * @return $this
     */
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;

        return $this;
    }

    /**
     * Method to set the value of field link
     *
     * @param string $link
     * @return $this
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Method to set the value of field publicar
     *
     * @param integer $publicar
     * @return $this
     */
    public function setPublicar($publicar)
    {
        $this->publicar = $publicar;

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
     * Method to set the value of field keywords
     *
     * @param string $keywords
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Method to set the value of field otimizacao
     *
     * @param string $otimizacao
     * @return $this
     */
    public function setOtimizacao($otimizacao)
    {
        $this->otimizacao = $otimizacao;

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
     * Method to set the value of field comprimento
     *
     * @param string $comprimento
     * @return $this
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Method to set the value of field largura
     *
     * @param string $largura
     * @return $this
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Method to set the value of field profundidade
     *
     * @param string $profundidade
     * @return $this
     */
    public function setProfundidade($profundidade)
    {
        $this->profundidade = $profundidade;

        return $this;
    }

    /**
     * Method to set the value of field diametro
     *
     * @param string $diametro
     * @return $this
     */
    public function setDiametro($diametro)
    {
        $this->diametro = $diametro;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field descricaobreve
     *
     * @return string
     */
    public function getDescricaobreve()
    {
        return $this->descricaobreve;
    }

    /**
     * Returns the value of field caracteristicas
     *
     * @return string
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * Returns the value of field link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Returns the value of field publicar
     *
     * @return integer
     */
    public function getPublicar()
    {
        return $this->publicar;
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
     * Returns the value of field keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Returns the value of field otimizacao
     *
     * @return string
     */
    public function getOtimizacao()
    {
        return $this->otimizacao;
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
     * Returns the value of field comprimento
     *
     * @return string
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Returns the value of field largura
     *
     * @return string
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Returns the value of field profundidade
     *
     * @return string
     */
    public function getProfundidade()
    {
        return $this->profundidade;
    }

    /**
     * Returns the value of field diametro
     *
     * @return string
     */
    public function getDiametro()
    {
        return $this->diametro;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('idkits', 'App\Models\Kits', 'idkits', array('alias' => 'Kits'));
        $this->belongsTo('idkits', 'App\Models\Kits', 'idkits', array('foreignKey' => true,'alias' => 'Kits'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'site_kits';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SiteKits[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SiteKits
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
            'id' => 'id',
            'idkits' => 'idkits',
            'nome' => 'nome',
            'descricaobreve' => 'descricaobreve',
            'caracteristicas' => 'caracteristicas',
            'link' => 'link',
            'publicar' => 'publicar',
            'title' => 'title',
            'description' => 'description',
            'keywords' => 'keywords',
            'otimizacao' => 'otimizacao',
            'criado' => 'criado',
            'comprimento' => 'comprimento',
            'largura' => 'largura',
            'profundidade' => 'profundidade',
            'diametro' => 'diametro',
            'ordem_exibicao' => 'ordem_exibicao'
        );
    }

}
