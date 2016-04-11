<?php

namespace App\Models;

class ProdutoHasEngenharia extends \Phalcon\Mvc\Model
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
    protected $engenharia_cd_engenharia;

    /**
     *
     * @var integer
     */
    protected $empresa_cd_empresa;

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
     * Method to set the value of field engenharia_cd_engenharia
     *
     * @param integer $engenharia_cd_engenharia
     * @return $this
     */
    public function setEngenhariaCdEngenharia($engenharia_cd_engenharia)
    {
        $this->engenharia_cd_engenharia = $engenharia_cd_engenharia;

        return $this;
    }

    /**
     * Method to set the value of field empresa_cd_empresa
     *
     * @param integer $empresa_cd_empresa
     * @return $this
     */
    public function setEmpresaCdEmpresa($empresa_cd_empresa)
    {
        $this->empresa_cd_empresa = $empresa_cd_empresa;

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
     * Returns the value of field engenharia_cd_engenharia
     *
     * @return integer
     */
    public function getEngenhariaCdEngenharia()
    {
        return $this->engenharia_cd_engenharia;
    }

    /**
     * Returns the value of field empresa_cd_empresa
     *
     * @return integer
     */
    public function getEmpresaCdEmpresa()
    {
        return $this->empresa_cd_empresa;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('empresa_cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('engenharia_cd_engenharia', 'App\Models\Engenharia', 'cd_engenharia', array('alias' => 'Engenharia'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('empresa_cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('engenharia_cd_engenharia', 'App\Models\Engenharia', 'cd_engenharia', array('foreignKey' => true,'alias' => 'Engenharia'));
        $this->belongsTo('produto_cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'produto_has_engenharia';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasEngenharia[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasEngenharia
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
            'engenharia_cd_engenharia' => 'engenharia_cd_engenharia',
            'empresa_cd_empresa' => 'empresa_cd_empresa'
        );
    }

}
