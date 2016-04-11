<?php

namespace App\Models;

class OrigemDestino extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    protected $origem;

    /**
     *
     * @var string
     */
    protected $destino;

    /**
     *
     * @var double
     */
    protected $aliquota;

    /**
     * Method to set the value of field origem
     *
     * @param string $origem
     * @return $this
     */
    public function setOrigem($origem)
    {
        $this->origem = $origem;

        return $this;
    }

    /**
     * Method to set the value of field destino
     *
     * @param string $destino
     * @return $this
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Method to set the value of field aliquota
     *
     * @param double $aliquota
     * @return $this
     */
    public function setAliquota($aliquota)
    {
        $this->aliquota = $aliquota;

        return $this;
    }

    /**
     * Returns the value of field origem
     *
     * @return string
     */
    public function getOrigem()
    {
        return $this->origem;
    }

    /**
     * Returns the value of field destino
     *
     * @return string
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Returns the value of field aliquota
     *
     * @return double
     */
    public function getAliquota()
    {
        return $this->aliquota;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'origem_destino';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrigemDestino[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrigemDestino
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
            'origem' => 'origem',
            'destino' => 'destino',
            'aliquota' => 'aliquota'
        );
    }

}
