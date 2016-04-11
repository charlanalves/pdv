<?php

namespace App\Models;

class Area extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_area;

    /**
     *
     * @var integer
     */
    protected $idregiao;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var double
     */
    protected $percentual;

    /**
     *
     * @var integer
     */
    protected $aliquota;

    /**
     *
     * @var string
     */
    protected $uf;

    /**
     *
     * @var integer
     */
    protected $ativo;

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
    protected $localidade;

    /**
     * Method to set the value of field cd_area
     *
     * @param integer $cd_area
     * @return $this
     */
    public function setCdArea($cd_area)
    {
        $this->cd_area = $cd_area;

        return $this;
    }

    /**
     * Method to set the value of field idregiao
     *
     * @param integer $idregiao
     * @return $this
     */
    public function setIdregiao($idregiao)
    {
        $this->idregiao = $idregiao;

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
     * Method to set the value of field percentual
     *
     * @param double $percentual
     * @return $this
     */
    public function setPercentual($percentual)
    {
        $this->percentual = $percentual;

        return $this;
    }

    /**
     * Method to set the value of field aliquota
     *
     * @param integer $aliquota
     * @return $this
     */
    public function setAliquota($aliquota)
    {
        $this->aliquota = $aliquota;

        return $this;
    }

    /**
     * Method to set the value of field uf
     *
     * @param string $uf
     * @return $this
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

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
     * Method to set the value of field localidade
     *
     * @param string $localidade
     * @return $this
     */
    public function setLocalidade($localidade)
    {
        $this->localidade = $localidade;

        return $this;
    }

    /**
     * Returns the value of field cd_area
     *
     * @return integer
     */
    public function getCdArea()
    {
        return $this->cd_area;
    }

    /**
     * Returns the value of field idregiao
     *
     * @return integer
     */
    public function getIdregiao()
    {
        return $this->idregiao;
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
     * Returns the value of field percentual
     *
     * @return double
     */
    public function getPercentual()
    {
        return $this->percentual;
    }

    /**
     * Returns the value of field aliquota
     *
     * @return integer
     */
    public function getAliquota()
    {
        return $this->aliquota;
    }

    /**
     * Returns the value of field uf
     *
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
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
     * Returns the value of field localidade
     *
     * @return string
     */
    public function getLocalidade()
    {
        return $this->localidade;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_area', 'App\Models\AreaHasCondPagto', 'cd_area', array('alias' => 'AreaHasCondPagto'));
        $this->hasMany('cd_area', 'App\Models\InformacoesccompraHasArea', 'cd_area', array('alias' => 'InformacoesccompraHasArea'));
        $this->hasMany('cd_area', 'App\Models\KitsAreas', 'area_cd_area', array('alias' => 'KitsAreas'));
        $this->hasMany('cd_area', 'App\Models\Produtoarea', 'area_cd_area', array('alias' => 'Produtoarea'));
        $this->hasMany('cd_area', 'App\Models\PromocaoFornHomologadoHasArea', 'cd_area', array('alias' => 'PromocaoFornHomologadoHasArea'));
        $this->hasMany('cd_area', 'App\Models\TabelaPrecosHasProdutoarea', 'area_cd_area', array('alias' => 'TabelaPrecosHasProdutoarea'));
        $this->hasMany('cd_area', 'App\Models\UnidadeNegocio', 'area_cd_area', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('cd_area', 'App\Models\UnidadeNegocioHasArea', 'area_cd_area', array('alias' => 'UnidadeNegocioHasArea'));
        $this->belongsTo('idregiao', 'App\Models\Regiao', 'idregiao', array('alias' => 'Regiao'));
        $this->hasMany('cd_area', 'App\Models\AreaHasCondPagto', 'cd_area', NULL);
        $this->hasMany('cd_area', 'App\Models\InformacoesccompraHasArea', 'cd_area', NULL);
        $this->hasMany('cd_area', 'App\Models\KitsAreas', 'area_cd_area', NULL);
        $this->hasMany('cd_area', 'App\Models\Produtoarea', 'area_cd_area', NULL);
        $this->hasMany('cd_area', 'App\Models\PromocaoFornHomologadoHasArea', 'cd_area', NULL);
        $this->hasMany('cd_area', 'App\Models\TabelaPrecosHasProdutoarea', 'area_cd_area', NULL);
        $this->hasMany('cd_area', 'App\Models\UnidadeNegocio', 'area_cd_area', NULL);
        $this->hasMany('cd_area', 'App\Models\UnidadeNegocioHasArea', 'area_cd_area', NULL);
        $this->belongsTo('idregiao', 'App\Models\Regiao', 'idregiao', array('foreignKey' => true,'alias' => 'Regiao'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'area';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Area[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Area
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
            'cd_area' => 'cd_area',
            'idregiao' => 'idregiao',
            'descricao' => 'descricao',
            'percentual' => 'percentual',
            'aliquota' => 'aliquota',
            'uf' => 'uf',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'localidade' => 'localidade'
        );
    }

}
