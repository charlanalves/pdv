<?php
namespace App\Models;

class PdvNfeHasConn extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_conn;

    /**
     *
     * @var integer
     */
    protected $cd_nfe;

    /**
     * Method to set the value of field cd_conn
     *
     * @param integer $cd_conn
     * @return $this
     */
    public function setCdConn($cd_conn)
    {
        $this->cd_conn = $cd_conn;

        return $this;
    }

    /**
     * Method to set the value of field cd_nfe
     *
     * @param integer $cd_nfe
     * @return $this
     */
    public function setCdNfe($cd_nfe)
    {
        $this->cd_nfe = $cd_nfe;

        return $this;
    }

    /**
     * Returns the value of field cd_conn
     *
     * @return integer
     */
    public function getCdConn()
    {
        return $this->cd_conn;
    }

    /**
     * Returns the value of field cd_nfe
     *
     * @return integer
     */
    public function getCdNfe()
    {
        return $this->cd_nfe;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_conn', 'NfeConn', 'idnfe_conn', array('alias' => 'NfeConn'));
        $this->belongsTo('cd_nfe', 'PdvNfe', 'cd_nfce', array('alias' => 'PdvNfe'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pdv_nfe_has_conn';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvNfeHasConn[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PdvNfeHasConn
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
            'cd_conn' => 'cd_conn',
            'cd_nfe' => 'cd_nfe'
        );
    }

}
