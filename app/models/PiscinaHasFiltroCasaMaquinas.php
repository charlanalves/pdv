<?php

namespace App\Models;

class PiscinaHasFiltroCasaMaquinas extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $codPiscinaCasaFiltro;

    /**
     *
     * @var integer
     */
    protected $produto_cd_produto;

    /**
     *
     * @var integer
     */
    protected $casa_maq;

    /**
     *
     * @var integer
     */
    protected $filtro;

    /**
     *
     * @var integer
     */
    protected $tab_material_construcao;

    /**
     * Method to set the value of field codPiscinaCasaFiltro
     *
     * @param integer $codPiscinaCasaFiltro
     * @return $this
     */
    public function setCodPiscinaCasaFiltro($codPiscinaCasaFiltro)
    {
        $this->codPiscinaCasaFiltro = $codPiscinaCasaFiltro;

        return $this;
    }

    /**
     * Method to set the value of field produto_cd_produto
     *
     * @param integer $produto_cd_produto
     * @return $this
     */
    public function setProdutoCdProduto($produto_cd_produto)
    {
        $this->produto_cd_produto = $produto_cd_produto;

        return $this;
    }

    /**
     * Method to set the value of field casa_maq
     *
     * @param integer $casa_maq
     * @return $this
     */
    public function setCasaMaq($casa_maq)
    {
        $this->casa_maq = $casa_maq;

        return $this;
    }

    /**
     * Method to set the value of field filtro
     *
     * @param integer $filtro
     * @return $this
     */
    public function setFiltro($filtro)
    {
        $this->filtro = $filtro;

        return $this;
    }

    /**
     * Method to set the value of field tab_material_construcao
     *
     * @param integer $tab_material_construcao
     * @return $this
     */
    public function setTabMaterialConstrucao($tab_material_construcao)
    {
        $this->tab_material_construcao = $tab_material_construcao;

        return $this;
    }

    /**
     * Returns the value of field codPiscinaCasaFiltro
     *
     * @return integer
     */
    public function getCodPiscinaCasaFiltro()
    {
        return $this->codPiscinaCasaFiltro;
    }

    /**
     * Returns the value of field produto_cd_produto
     *
     * @return integer
     */
    public function getProdutoCdProduto()
    {
        return $this->produto_cd_produto;
    }

    /**
     * Returns the value of field casa_maq
     *
     * @return integer
     */
    public function getCasaMaq()
    {
        return $this->casa_maq;
    }

    /**
     * Returns the value of field filtro
     *
     * @return integer
     */
    public function getFiltro()
    {
        return $this->filtro;
    }

    /**
     * Returns the value of field tab_material_construcao
     *
     * @return integer
     */
    public function getTabMaterialConstrucao()
    {
        return $this->tab_material_construcao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('filtro', 'App\Models\Kits', 'idkits', array('alias' => 'Kits'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('casa_maq', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('filtro', 'App\Models\Kits', 'idkits', array('foreignKey' => true,'alias' => 'Kits'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
        $this->belongsTo('casa_maq', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'piscina_has_filtro_casa_maquinas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PiscinaHasFiltroCasaMaquinas[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PiscinaHasFiltroCasaMaquinas
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
            'codPiscinaCasaFiltro' => 'codPiscinaCasaFiltro',
            'produto_cd_produto' => 'produto_cd_produto',
            'casa_maq' => 'casa_maq',
            'filtro' => 'filtro',
            'tab_material_construcao' => 'tab_material_construcao'
        );
    }

}
