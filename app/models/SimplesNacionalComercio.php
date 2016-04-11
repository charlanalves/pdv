<?php

namespace App\Models;

class SimplesNacionalComercio extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var double
     */
    protected $valor_min;

    /**
     *
     * @var double
     */
    protected $valor_max;

    /**
     *
     * @var double
     */
    protected $aliquota;

    /**
     *
     * @var double
     */
    protected $irpj;

    /**
     *
     * @var double
     */
    protected $csll;

    /**
     *
     * @var double
     */
    protected $cofins;

    /**
     *
     * @var double
     */
    protected $pis;

    /**
     *
     * @var double
     */
    protected $cpp;

    /**
     *
     * @var double
     */
    protected $icms;

    /**
     * Method to set the value of field valor_min
     *
     * @param double $valor_min
     * @return $this
     */
    public function setValorMin($valor_min)
    {
        $this->valor_min = $valor_min;

        return $this;
    }

    /**
     * Method to set the value of field valor_max
     *
     * @param double $valor_max
     * @return $this
     */
    public function setValorMax($valor_max)
    {
        $this->valor_max = $valor_max;

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
     * Method to set the value of field irpj
     *
     * @param double $irpj
     * @return $this
     */
    public function setIrpj($irpj)
    {
        $this->irpj = $irpj;

        return $this;
    }

    /**
     * Method to set the value of field csll
     *
     * @param double $csll
     * @return $this
     */
    public function setCsll($csll)
    {
        $this->csll = $csll;

        return $this;
    }

    /**
     * Method to set the value of field cofins
     *
     * @param double $cofins
     * @return $this
     */
    public function setCofins($cofins)
    {
        $this->cofins = $cofins;

        return $this;
    }

    /**
     * Method to set the value of field pis
     *
     * @param double $pis
     * @return $this
     */
    public function setPis($pis)
    {
        $this->pis = $pis;

        return $this;
    }

    /**
     * Method to set the value of field cpp
     *
     * @param double $cpp
     * @return $this
     */
    public function setCpp($cpp)
    {
        $this->cpp = $cpp;

        return $this;
    }

    /**
     * Method to set the value of field icms
     *
     * @param double $icms
     * @return $this
     */
    public function setIcms($icms)
    {
        $this->icms = $icms;

        return $this;
    }

    /**
     * Returns the value of field valor_min
     *
     * @return double
     */
    public function getValorMin()
    {
        return $this->valor_min;
    }

    /**
     * Returns the value of field valor_max
     *
     * @return double
     */
    public function getValorMax()
    {
        return $this->valor_max;
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
     * Returns the value of field irpj
     *
     * @return double
     */
    public function getIrpj()
    {
        return $this->irpj;
    }

    /**
     * Returns the value of field csll
     *
     * @return double
     */
    public function getCsll()
    {
        return $this->csll;
    }

    /**
     * Returns the value of field cofins
     *
     * @return double
     */
    public function getCofins()
    {
        return $this->cofins;
    }

    /**
     * Returns the value of field pis
     *
     * @return double
     */
    public function getPis()
    {
        return $this->pis;
    }

    /**
     * Returns the value of field cpp
     *
     * @return double
     */
    public function getCpp()
    {
        return $this->cpp;
    }

    /**
     * Returns the value of field icms
     *
     * @return double
     */
    public function getIcms()
    {
        return $this->icms;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'simples_nacional_comercio';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SimplesNacionalComercio[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SimplesNacionalComercio
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
            'valor_min' => 'valor_min',
            'valor_max' => 'valor_max',
            'aliquota' => 'aliquota',
            'irpj' => 'irpj',
            'csll' => 'csll',
            'cofins' => 'cofins',
            'pis' => 'pis',
            'cpp' => 'cpp',
            'icms' => 'icms'
        );
    }

}
