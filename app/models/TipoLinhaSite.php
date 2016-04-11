<?php

namespace App\Models;

class TipoLinhaSite extends \Phalcon\Mvc\Model
{

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
     * @var integer
     */
    protected $ordem_exibicao;

    /**
     *
     * @var string
     */
    protected $expandido;

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
     * @var integer
     */
    protected $icon;

    /**
     *
     * @var integer
     */
    protected $id_tipo_redireciona;

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
     * Method to set the value of field expandido
     *
     * @param string $expandido
     * @return $this
     */
    public function setExpandido($expandido)
    {
        $this->expandido = $expandido;

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
     * Method to set the value of field icon
     *
     * @param integer $icon
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Method to set the value of field id_tipo_redireciona
     *
     * @param integer $id_tipo_redireciona
     * @return $this
     */
    public function setIdTipoRedireciona($id_tipo_redireciona)
    {
        $this->id_tipo_redireciona = $id_tipo_redireciona;

        return $this;
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
     * Returns the value of field ordem_exibicao
     *
     * @return integer
     */
    public function getOrdemExibicao()
    {
        return $this->ordem_exibicao;
    }

    /**
     * Returns the value of field expandido
     *
     * @return string
     */
    public function getExpandido()
    {
        return $this->expandido;
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
     * Returns the value of field icon
     *
     * @return integer
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Returns the value of field id_tipo_redireciona
     *
     * @return integer
     */
    public function getIdTipoRedireciona()
    {
        return $this->id_tipo_redireciona;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_tipo', 'App\Models\LinhaProdutoSite', 'id_tipo', array('alias' => 'LinhaProdutoSite'));
        $this->hasMany('id_tipo', 'App\Models\LinhaProdutoSite', 'id_tipo', NULL);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tipo_linha_site';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoLinhaSite[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoLinhaSite
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
            'id_tipo' => 'id_tipo',
            'nome' => 'nome',
            'ordem_exibicao' => 'ordem_exibicao',
            'expandido' => 'expandido',
            'title' => 'title',
            'description' => 'description',
            'icon' => 'icon',
            'id_tipo_redireciona' => 'id_tipo_redireciona'
        );
    }

}
