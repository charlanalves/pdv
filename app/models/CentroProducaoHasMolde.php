<?php

namespace App\Models;

class CentroProducaoHasMolde extends \Phalcon\Mvc\Model
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
    protected $cd_molde;

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
     * Method to set the value of field cd_molde
     *
     * @param integer $cd_molde
     * @return $this
     */
    public function setCdMolde($cd_molde)
    {
        $this->cd_molde = $cd_molde;

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
     * Returns the value of field cd_molde
     *
     * @return integer
     */
    public function getCdMolde()
    {
        return $this->cd_molde;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_centro_producao', 'App\Models\CentroProducao', 'cd_centro_producao', array('alias' => 'CentroProducao'));
        $this->belongsTo('cd_molde', 'App\Models\Molde', 'cd_molde', array('alias' => 'Molde'));
        $this->belongsTo('cd_centro_producao', 'App\Models\CentroProducao', 'cd_centro_producao', array('foreignKey' => true,'alias' => 'CentroProducao'));
        $this->belongsTo('cd_molde', 'App\Models\Molde', 'cd_molde', array('foreignKey' => true,'alias' => 'Molde'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'centro_producao_has_molde';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CentroProducaoHasMolde[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CentroProducaoHasMolde
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
            'cd_molde' => 'cd_molde'
        );
    }

}
