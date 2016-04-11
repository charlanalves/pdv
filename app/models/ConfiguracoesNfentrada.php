<?php

namespace App\Models;

class ConfiguracoesNfentrada extends \Phalcon\Mvc\Model
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
    protected $conta_padrao;

    /**
     *
     * @var integer
     */
    protected $ccusto_padrao;

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
     * Method to set the value of field conta_padrao
     *
     * @param integer $conta_padrao
     * @return $this
     */
    public function setContaPadrao($conta_padrao)
    {
        $this->conta_padrao = $conta_padrao;

        return $this;
    }

    /**
     * Method to set the value of field ccusto_padrao
     *
     * @param integer $ccusto_padrao
     * @return $this
     */
    public function setCcustoPadrao($ccusto_padrao)
    {
        $this->ccusto_padrao = $ccusto_padrao;

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
     * Returns the value of field conta_padrao
     *
     * @return integer
     */
    public function getContaPadrao()
    {
        return $this->conta_padrao;
    }

    /**
     * Returns the value of field ccusto_padrao
     *
     * @return integer
     */
    public function getCcustoPadrao()
    {
        return $this->ccusto_padrao;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'configuracoes_nfentrada';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConfiguracoesNfentrada[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ConfiguracoesNfentrada
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
            'conta_padrao' => 'conta_padrao',
            'ccusto_padrao' => 'ccusto_padrao'
        );
    }

}
