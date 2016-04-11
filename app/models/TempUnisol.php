<?php

namespace App\Models;

class TempUnisol extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $produto_cd_produto;

    /**
     *
     * @var integer
     */
    protected $area_cd_area;

    /**
     *
     * @var double
     */
    protected $precoBase;

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
     * Method to set the value of field area_cd_area
     *
     * @param integer $area_cd_area
     * @return $this
     */
    public function setAreaCdArea($area_cd_area)
    {
        $this->area_cd_area = $area_cd_area;

        return $this;
    }

    /**
     * Method to set the value of field precoBase
     *
     * @param double $precoBase
     * @return $this
     */
    public function setPrecoBase($precoBase)
    {
        $this->precoBase = $precoBase;

        return $this;
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
     * Returns the value of field area_cd_area
     *
     * @return integer
     */
    public function getAreaCdArea()
    {
        return $this->area_cd_area;
    }

    /**
     * Returns the value of field precoBase
     *
     * @return double
     */
    public function getPrecoBase()
    {
        return $this->precoBase;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'temp_unisol';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TempUnisol[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TempUnisol
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
            'produto_cd_produto' => 'produto_cd_produto',
            'area_cd_area' => 'area_cd_area',
            'precoBase' => 'precoBase'
        );
    }

}
