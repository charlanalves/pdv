<?php

namespace App\Models;

class Engenharia extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_engenharia;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var integer
     */
    protected $cd_tipo_engenharia;

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
     * Method to set the value of field cd_engenharia
     *
     * @param integer $cd_engenharia
     * @return $this
     */
    public function setCdEngenharia($cd_engenharia)
    {
        $this->cd_engenharia = $cd_engenharia;

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
     * Method to set the value of field ativo
     *
     * @param integer $ativo
     * @return $this
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Method to set the value of field cd_tipo_engenharia
     *
     * @param integer $cd_tipo_engenharia
     * @return $this
     */
    public function setCdTipoEngenharia($cd_tipo_engenharia)
    {
        $this->cd_tipo_engenharia = $cd_tipo_engenharia;

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
     * Returns the value of field cd_engenharia
     *
     * @return integer
     */
    public function getCdEngenharia()
    {
        return $this->cd_engenharia;
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
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Returns the value of field cd_tipo_engenharia
     *
     * @return integer
     */
    public function getCdTipoEngenharia()
    {
        return $this->cd_tipo_engenharia;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_engenharia', 'App\Models\Etapa', 'engenharia_cd_engenharia', array('alias' => 'Etapa'));
        $this->hasMany('cd_engenharia', 'App\Models\Produto', 'engenharia_cd_engenharia', array('alias' => 'Produto'));
        $this->hasMany('cd_engenharia', 'App\Models\ProdutoHasEngenharia', 'engenharia_cd_engenharia', array('alias' => 'ProdutoHasEngenharia'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_tipo_engenharia', 'App\Models\TipoEngenharia', 'cd_tipo', array('alias' => 'TipoEngenharia'));
        $this->hasMany('cd_engenharia', 'App\Models\Etapa', 'engenharia_cd_engenharia', NULL);
        $this->hasMany('cd_engenharia', 'App\Models\Produto', 'engenharia_cd_engenharia', NULL);
        $this->hasMany('cd_engenharia', 'App\Models\ProdutoHasEngenharia', 'engenharia_cd_engenharia', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_tipo_engenharia', 'App\Models\TipoEngenharia', 'cd_tipo', array('foreignKey' => true,'alias' => 'TipoEngenharia'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'engenharia';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Engenharia[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Engenharia
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
            'cd_engenharia' => 'cd_engenharia',
            'cd_empresa' => 'cd_empresa',
            'descricao' => 'descricao',
            'ativo' => 'ativo',
            'cd_tipo_engenharia' => 'cd_tipo_engenharia',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
