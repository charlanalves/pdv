<?php

namespace App\Models;

class NfeHasConn extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $nfe_nfeid;

    /**
     *
     * @var integer
     */
    protected $nfe_conn_idnfe_conn;

    /**
     * Method to set the value of field nfe_nfeid
     *
     * @param integer $nfe_nfeid
     * @return $this
     */
    public function setNfeNfeid($nfe_nfeid)
    {
        $this->nfe_nfeid = $nfe_nfeid;

        return $this;
    }

    /**
     * Method to set the value of field nfe_conn_idnfe_conn
     *
     * @param integer $nfe_conn_idnfe_conn
     * @return $this
     */
    public function setNfeConnIdnfeConn($nfe_conn_idnfe_conn)
    {
        $this->nfe_conn_idnfe_conn = $nfe_conn_idnfe_conn;

        return $this;
    }

    /**
     * Returns the value of field nfe_nfeid
     *
     * @return integer
     */
    public function getNfeNfeid()
    {
        return $this->nfe_nfeid;
    }

    /**
     * Returns the value of field nfe_conn_idnfe_conn
     *
     * @return integer
     */
    public function getNfeConnIdnfeConn()
    {
        return $this->nfe_conn_idnfe_conn;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('nfe_nfeid', 'App\Models\Nfsaida', 'cd_nfsaida', array('alias' => 'Nfsaida'));
        $this->belongsTo('nfe_conn_idnfe_conn', 'App\Models\NfeConn', 'idnfe_conn', array('alias' => 'NfeConn'));
        $this->belongsTo('nfe_nfeid', 'App\Models\Nfsaida', 'cd_nfsaida', array('foreignKey' => true,'alias' => 'Nfsaida'));
        $this->belongsTo('nfe_conn_idnfe_conn', 'App\Models\NfeConn', 'idnfe_conn', array('foreignKey' => true,'alias' => 'NfeConn'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfe_has_conn';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfeHasConn[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfeHasConn
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
            'nfe_nfeid' => 'nfe_nfeid',
            'nfe_conn_idnfe_conn' => 'nfe_conn_idnfe_conn'
        );
    }

}
