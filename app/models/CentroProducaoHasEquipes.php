<?php

namespace App\Models;

class CentroProducaoHasEquipes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_centro_producao;

    /**
     *
     * @var integer
     */
    protected $cd_equipe;

    /**
     * Method to set the value of field cd_centro_producao
     *
     * @param integer $cd_centro_producao
     * @return $this
     */
    public function setCdCentroProducao($cd_centro_producao)
    {
        $this->cd_centro_producao = $cd_centro_producao;

        return $this;
    }

    /**
     * Method to set the value of field cd_equipe
     *
     * @param integer $cd_equipe
     * @return $this
     */
    public function setCdEquipe($cd_equipe)
    {
        $this->cd_equipe = $cd_equipe;

        return $this;
    }

    /**
     * Returns the value of field cd_centro_producao
     *
     * @return integer
     */
    public function getCdCentroProducao()
    {
        return $this->cd_centro_producao;
    }

    /**
     * Returns the value of field cd_equipe
     *
     * @return integer
     */
    public function getCdEquipe()
    {
        return $this->cd_equipe;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_centro_producao', 'App\Models\CentroProducao', 'cd_centro_producao', array('alias' => 'CentroProducao'));
        $this->belongsTo('cd_equipe', 'App\Models\Equipes', 'cd_equipe', array('alias' => 'Equipes'));
        $this->belongsTo('cd_centro_producao', 'App\Models\CentroProducao', 'cd_centro_producao', array('foreignKey' => true,'alias' => 'CentroProducao'));
        $this->belongsTo('cd_equipe', 'App\Models\Equipes', 'cd_equipe', array('foreignKey' => true,'alias' => 'Equipes'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'centro_producao_has_equipes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CentroProducaoHasEquipes[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CentroProducaoHasEquipes
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
            'cd_centro_producao' => 'cd_centro_producao',
            'cd_equipe' => 'cd_equipe'
        );
    }

}
