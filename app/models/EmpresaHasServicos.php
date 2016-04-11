<?php

namespace App\Models;

class EmpresaHasServicos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $cd_servico;

    /**
     *
     * @var integer
     */
    protected $idcond_pagto;

    /**
     *
     * @var integer
     */
    protected $cd_conta;

    /**
     *
     * @var double
     */
    protected $taxa;

    /**
     *
     * @var string
     */
    protected $cobrar_valor;

    /**
     * Method to set the value of field cd_empresa
     *
     * @param integer $cd_empresa
     * @return $this
     */
    public function setCdEmpresa($cd_empresa)
    {
        $this->cd_empresa = $cd_empresa;

        return $this;
    }

    /**
     * Method to set the value of field cd_servico
     *
     * @param integer $cd_servico
     * @return $this
     */
    public function setCdServico($cd_servico)
    {
        $this->cd_servico = $cd_servico;

        return $this;
    }

    /**
     * Method to set the value of field idcond_pagto
     *
     * @param integer $idcond_pagto
     * @return $this
     */
    public function setIdcondPagto($idcond_pagto)
    {
        $this->idcond_pagto = $idcond_pagto;

        return $this;
    }

    /**
     * Method to set the value of field cd_conta
     *
     * @param integer $cd_conta
     * @return $this
     */
    public function setCdConta($cd_conta)
    {
        $this->cd_conta = $cd_conta;

        return $this;
    }

    /**
     * Method to set the value of field taxa
     *
     * @param double $taxa
     * @return $this
     */
    public function setTaxa($taxa)
    {
        $this->taxa = $taxa;

        return $this;
    }

    /**
     * Method to set the value of field cobrar_valor
     *
     * @param string $cobrar_valor
     * @return $this
     */
    public function setCobrarValor($cobrar_valor)
    {
        $this->cobrar_valor = $cobrar_valor;

        return $this;
    }

    /**
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdEmpresa()
    {
        return $this->cd_empresa;
    }

    /**
     * Returns the value of field cd_servico
     *
     * @return integer
     */
    public function getCdServico()
    {
        return $this->cd_servico;
    }

    /**
     * Returns the value of field idcond_pagto
     *
     * @return integer
     */
    public function getIdcondPagto()
    {
        return $this->idcond_pagto;
    }

    /**
     * Returns the value of field cd_conta
     *
     * @return integer
     */
    public function getCdConta()
    {
        return $this->cd_conta;
    }

    /**
     * Returns the value of field taxa
     *
     * @return double
     */
    public function getTaxa()
    {
        return $this->taxa;
    }

    /**
     * Returns the value of field cobrar_valor
     *
     * @return string
     */
    public function getCobrarValor()
    {
        return $this->cobrar_valor;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'empresa_has_servicos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EmpresaHasServicos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EmpresaHasServicos
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
            'cd_empresa' => 'cd_empresa',
            'cd_servico' => 'cd_servico',
            'idcond_pagto' => 'idcond_pagto',
            'cd_conta' => 'cd_conta',
            'taxa' => 'taxa',
            'cobrar_valor' => 'cobrar_valor'
        );
    }

}
