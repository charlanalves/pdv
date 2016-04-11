<?php

namespace App\Models;

class LancamentoNotificacaoEmail extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id_notificacao;

    /**
     *
     * @var integer
     */
    protected $cd_lancamento;

    /**
     *
     * @var integer
     */
    protected $cd_usuario;

    /**
     *
     * @var string
     */
    protected $email_envio;

    /**
     *
     * @var string
     */
    protected $data_envio;

    /**
     * Method to set the value of field id_notificacao
     *
     * @param integer $id_notificacao
     * @return $this
     */
    public function setIdNotificacao($id_notificacao)
    {
        $this->id_notificacao = $id_notificacao;

        return $this;
    }

    /**
     * Method to set the value of field cd_lancamento
     *
     * @param integer $cd_lancamento
     * @return $this
     */
    public function setCdLancamento($cd_lancamento)
    {
        $this->cd_lancamento = $cd_lancamento;

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
     * Method to set the value of field email_envio
     *
     * @param string $email_envio
     * @return $this
     */
    public function setEmailEnvio($email_envio)
    {
        $this->email_envio = $email_envio;

        return $this;
    }

    /**
     * Method to set the value of field data_envio
     *
     * @param string $data_envio
     * @return $this
     */
    public function setDataEnvio($data_envio)
    {
        $this->data_envio = $data_envio;

        return $this;
    }

    /**
     * Returns the value of field id_notificacao
     *
     * @return integer
     */
    public function getIdNotificacao()
    {
        return $this->id_notificacao;
    }

    /**
     * Returns the value of field cd_lancamento
     *
     * @return integer
     */
    public function getCdLancamento()
    {
        return $this->cd_lancamento;
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
     * Returns the value of field email_envio
     *
     * @return string
     */
    public function getEmailEnvio()
    {
        return $this->email_envio;
    }

    /**
     * Returns the value of field data_envio
     *
     * @return string
     */
    public function getDataEnvio()
    {
        return $this->data_envio;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
        $this->belongsTo('cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'lancamento_notificacao_email';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LancamentoNotificacaoEmail[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LancamentoNotificacaoEmail
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
            'id_notificacao' => 'id_notificacao',
            'cd_lancamento' => 'cd_lancamento',
            'cd_usuario' => 'cd_usuario',
            'email_envio' => 'email_envio',
            'data_envio' => 'data_envio'
        );
    }

}
