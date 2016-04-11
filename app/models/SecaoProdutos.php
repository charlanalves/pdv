<?php

namespace App\Models;

class SecaoProdutos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_secao;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     *
     * @var string
     */
    protected $tipo_secao;

    /**
     * Method to set the value of field cd_secao
     *
     * @param integer $cd_secao
     * @return $this
     */
    public function setCdSecao($cd_secao)
    {
        $this->cd_secao = $cd_secao;

        return $this;
    }

    /**
     * Method to set the value of field cd_empresa
     *
     * @param integer $cd_empresa
     * @return $this
     */
    public function setCdEmpresa($cd_empresa)
    {
        $this->cd_empresa = $cd_empresa;

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
     * Method to set the value of field modificado
     *
     * @param string $modificado
     * @return $this
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;

        return $this;
    }

    /**
     * Method to set the value of field tipo_secao
     *
     * @param string $tipo_secao
     * @return $this
     */
    public function setTipoSecao($tipo_secao)
    {
        $this->tipo_secao = $tipo_secao;

        return $this;
    }

    /**
     * Returns the value of field cd_secao
     *
     * @return integer
     */
    public function getCdSecao()
    {
        return $this->cd_secao;
    }

    /**
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdEmpresa()
    {
        return $this->cd_empresa;
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
     * Returns the value of field criado
     *
     * @return string
     */
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * Returns the value of field tipo_secao
     *
     * @return string
     */
    public function getTipoSecao()
    {
        return $this->tipo_secao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_secao', 'App\Models\Produto', 'cd_secao_produto', array('alias' => 'Produto'));
        $this->hasMany('cd_secao', 'App\Models\ProdutoHasDados', 'cd_secao_produto', array('alias' => 'ProdutoHasDados'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->hasMany('cd_secao', 'App\Models\Produto', 'cd_secao_produto', NULL);
        $this->hasMany('cd_secao', 'App\Models\ProdutoHasDados', 'cd_secao_produto', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'secao_produtos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SecaoProdutos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SecaoProdutos
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
            'cd_secao' => 'cd_secao',
            'cd_empresa' => 'cd_empresa',
            'nome' => 'nome',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'tipo_secao' => 'tipo_secao'
        );
    }

}
