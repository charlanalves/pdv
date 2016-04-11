<?php

namespace App\Models;

class EquipesHasFuncionario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $equipes_cd_equipe;

    /**
     *
     * @var integer
     */
    protected $empresa_cd_empresa;

    /**
     *
     * @var integer
     */
    protected $responsavel_equipe;

    /**
     * Method to set the value of field equipes_cd_equipe
     *
     * @param integer $equipes_cd_equipe
     * @return $this
     */
    public function setEquipesCdEquipe($equipes_cd_equipe)
    {
        $this->equipes_cd_equipe = $equipes_cd_equipe;

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
     * Method to set the value of field responsavel_equipe
     *
     * @param integer $responsavel_equipe
     * @return $this
     */
    public function setResponsavelEquipe($responsavel_equipe)
    {
        $this->responsavel_equipe = $responsavel_equipe;

        return $this;
    }

    /**
     * Returns the value of field equipes_cd_equipe
     *
     * @return integer
     */
    public function getEquipesCdEquipe()
    {
        return $this->equipes_cd_equipe;
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
     * Returns the value of field responsavel_equipe
     *
     * @return integer
     */
    public function getResponsavelEquipe()
    {
        return $this->responsavel_equipe;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('empresa_cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('equipes_cd_equipe', 'App\Models\Equipes', 'cd_equipe', array('alias' => 'Equipes'));
        $this->belongsTo('empresa_cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('equipes_cd_equipe', 'App\Models\Equipes', 'cd_equipe', array('foreignKey' => true,'alias' => 'Equipes'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'equipes_has_funcionario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EquipesHasFuncionario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EquipesHasFuncionario
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
            'equipes_cd_equipe' => 'equipes_cd_equipe',
            'empresa_cd_empresa' => 'empresa_cd_empresa',
            'responsavel_equipe' => 'responsavel_equipe'
        );
    }

}
