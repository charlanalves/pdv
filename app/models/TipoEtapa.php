<?php

namespace App\Models;

class TipoEtapa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_tipo;

    /**
     *
     * @var integer
     */
    protected $empresa_cd_empresa;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     * Method to set the value of field cd_tipo
     *
     * @param integer $cd_tipo
     * @return $this
     */
    public function setCdTipo($cd_tipo)
    {
        $this->cd_tipo = $cd_tipo;

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
     * Returns the value of field cd_tipo
     *
     * @return integer
     */
    public function getCdTipo()
    {
        return $this->cd_tipo;
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
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_tipo', 'App\Models\Equipes', 'tipo_etapa', array('alias' => 'Equipes'));
        $this->hasMany('cd_tipo', 'App\Models\Etapa', 'tipo_etapa', array('alias' => 'Etapa'));
        $this->hasMany('cd_tipo', 'App\Models\Opetapa', 'tipo_etapa', array('alias' => 'Opetapa'));
        $this->belongsTo('empresa_cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->hasMany('cd_tipo', 'App\Models\Equipes', 'tipo_etapa', NULL);
        $this->hasMany('cd_tipo', 'App\Models\Etapa', 'tipo_etapa', NULL);
        $this->hasMany('cd_tipo', 'App\Models\Opetapa', 'tipo_etapa', NULL);
        $this->belongsTo('empresa_cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tipo_etapa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoEtapa[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TipoEtapa
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
            'cd_tipo' => 'cd_tipo',
            'empresa_cd_empresa' => 'empresa_cd_empresa',
            'nome' => 'nome'
        );
    }

}
