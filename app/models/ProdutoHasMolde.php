<?php

namespace App\Models;

class ProdutoHasMolde extends \Phalcon\Mvc\Model
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
    protected $molde_cd_molde;

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
     * Method to set the value of field molde_cd_molde
     *
     * @param integer $molde_cd_molde
     * @return $this
     */
    public function setMoldeCdMolde($molde_cd_molde)
    {
        $this->molde_cd_molde = $molde_cd_molde;

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
     * Returns the value of field molde_cd_molde
     *
     * @return integer
     */
    public function getMoldeCdMolde()
    {
        return $this->molde_cd_molde;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('molde_cd_molde', 'App\Models\Molde', 'cd_molde', array('alias' => 'Molde'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('molde_cd_molde', 'App\Models\Molde', 'cd_molde', array('foreignKey' => true,'alias' => 'Molde'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'produto_has_molde';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasMolde[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasMolde
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
            'molde_cd_molde' => 'molde_cd_molde'
        );
    }

}
