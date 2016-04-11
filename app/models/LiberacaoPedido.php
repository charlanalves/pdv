<?php

namespace App\Models;

class LiberacaoPedido extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_liberacao;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var integer
     */
    protected $cd_usuario;

    /**
     *
     * @var integer
     */
    protected $cd_pedido;

    /**
     *
     * @var string
     */
    protected $pendencias;

    /**
     *
     * @var string
     */
    protected $observacao;

    /**
     *
     * @var string
     */
    protected $data_liberacao;

    /**
     *
     * @var string
     */
    protected $ip_liberacao;

    /**
     *
     * @var integer
     */
    protected $liberacao_licenciada;

    /**
     *
     * @var integer
     */
    protected $liberacao_administradora;

    /**
     * Method to set the value of field cd_liberacao
     *
     * @param integer $cd_liberacao
     * @return $this
     */
    public function setCdLiberacao($cd_liberacao)
    {
        $this->cd_liberacao = $cd_liberacao;

        return $this;
    }

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
     * Method to set the value of field cd_usuario
     *
     * @param integer $cd_usuario
     * @return $this
     */
    public function setCdUsuario($cd_usuario)
    {
        $this->cd_usuario = $cd_usuario;

        return $this;
    }

    /**
     * Method to set the value of field cd_pedido
     *
     * @param integer $cd_pedido
     * @return $this
     */
    public function setCdPedido($cd_pedido)
    {
        $this->cd_pedido = $cd_pedido;

        return $this;
    }

    /**
     * Method to set the value of field pendencias
     *
     * @param string $pendencias
     * @return $this
     */
    public function setPendencias($pendencias)
    {
        $this->pendencias = $pendencias;

        return $this;
    }

    /**
     * Method to set the value of field observacao
     *
     * @param string $observacao
     * @return $this
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Method to set the value of field data_liberacao
     *
     * @param string $data_liberacao
     * @return $this
     */
    public function setDataLiberacao($data_liberacao)
    {
        $this->data_liberacao = $data_liberacao;

        return $this;
    }

    /**
     * Method to set the value of field ip_liberacao
     *
     * @param string $ip_liberacao
     * @return $this
     */
    public function setIpLiberacao($ip_liberacao)
    {
        $this->ip_liberacao = $ip_liberacao;

        return $this;
    }

    /**
     * Method to set the value of field liberacao_licenciada
     *
     * @param integer $liberacao_licenciada
     * @return $this
     */
    public function setLiberacaoLicenciada($liberacao_licenciada)
    {
        $this->liberacao_licenciada = $liberacao_licenciada;

        return $this;
    }

    /**
     * Method to set the value of field liberacao_administradora
     *
     * @param integer $liberacao_administradora
     * @return $this
     */
    public function setLiberacaoAdministradora($liberacao_administradora)
    {
        $this->liberacao_administradora = $liberacao_administradora;

        return $this;
    }

    /**
     * Returns the value of field cd_liberacao
     *
     * @return integer
     */
    public function getCdLiberacao()
    {
        return $this->cd_liberacao;
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
     * Returns the value of field cd_usuario
     *
     * @return integer
     */
    public function getCdUsuario()
    {
        return $this->cd_usuario;
    }

    /**
     * Returns the value of field cd_pedido
     *
     * @return integer
     */
    public function getCdPedido()
    {
        return $this->cd_pedido;
    }

    /**
     * Returns the value of field pendencias
     *
     * @return string
     */
    public function getPendencias()
    {
        return $this->pendencias;
    }

    /**
     * Returns the value of field observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Returns the value of field data_liberacao
     *
     * @return string
     */
    public function getDataLiberacao()
    {
        return $this->data_liberacao;
    }

    /**
     * Returns the value of field ip_liberacao
     *
     * @return string
     */
    public function getIpLiberacao()
    {
        return $this->ip_liberacao;
    }

    /**
     * Returns the value of field liberacao_licenciada
     *
     * @return integer
     */
    public function getLiberacaoLicenciada()
    {
        return $this->liberacao_licenciada;
    }

    /**
     * Returns the value of field liberacao_administradora
     *
     * @return integer
     */
    public function getLiberacaoAdministradora()
    {
        return $this->liberacao_administradora;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('alias' => 'Pedido'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('cd_pedido', 'App\Models\Pedido', 'cd_pedido', array('foreignKey' => true,'alias' => 'Pedido'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'liberacao_pedido';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LiberacaoPedido[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LiberacaoPedido
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
            'cd_liberacao' => 'cd_liberacao',
            'cd_empresa' => 'cd_empresa',
            'cd_usuario' => 'cd_usuario',
            'cd_pedido' => 'cd_pedido',
            'pendencias' => 'pendencias',
            'observacao' => 'observacao',
            'data_liberacao' => 'data_liberacao',
            'ip_liberacao' => 'ip_liberacao',
            'liberacao_licenciada' => 'liberacao_licenciada',
            'liberacao_administradora' => 'liberacao_administradora'
        );
    }

}
