<?php

namespace App\Models;

class HistoricoCarga extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_historico;

    /**
     *
     * @var integer
     */
    protected $carga_cd_carga;

    /**
     *
     * @var string
     */
    protected $lido;

    /**
     * Method to set the value of field cd_historico
     *
     * @param integer $cd_historico
     * @return $this
     */
    public function setCdHistorico($cd_historico)
    {
        $this->cd_historico = $cd_historico;

        return $this;
    }

    /**
     * Method to set the value of field carga_cd_carga
     *
     * @param integer $carga_cd_carga
     * @return $this
     */
    public function setCargaCdCarga($carga_cd_carga)
    {
        $this->carga_cd_carga = $carga_cd_carga;

        return $this;
    }

    /**
     * Method to set the value of field lido
     *
     * @param string $lido
     * @return $this
     */
    public function setLido($lido)
    {
        $this->lido = $lido;

        return $this;
    }

    /**
     * Returns the value of field cd_historico
     *
     * @return integer
     */
    public function getCdHistorico()
    {
        return $this->cd_historico;
    }

    /**
     * Returns the value of field carga_cd_carga
     *
     * @return integer
     */
    public function getCargaCdCarga()
    {
        return $this->carga_cd_carga;
    }

    /**
     * Returns the value of field lido
     *
     * @return string
     */
    public function getLido()
    {
        return $this->lido;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('carga_cd_carga', 'App\Models\Carga', 'cd_carga', array('alias' => 'Carga'));
        $this->belongsTo('carga_cd_carga', 'App\Models\Carga', 'cd_carga', array('foreignKey' => true,'alias' => 'Carga'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'historico_carga';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return HistoricoCarga[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return HistoricoCarga
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
            'cd_historico' => 'cd_historico',
            'carga_cd_carga' => 'carga_cd_carga',
            'lido' => 'lido'
        );
    }

}
