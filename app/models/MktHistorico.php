<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Mvc\Model\Behavior\SoftDelete;

class MktHistorico extends \Phalcon\Mvc\Model
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
    protected $cd_unidade;

    /**
     *
     * @var integer
     */
    protected $cd_template;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $status;

    /**
     *
     * @var string
     */
    protected $codigoMandrill;

    /**
     *
     * @var string
     */
    protected $motivoRejeicao;

    /**
     *
     * @var integer
     */
    protected $lido;

    /**
     *
     * @var integer
     */
    protected $clique;

    /**
     *
     * @var string
     */
    protected $enviado;

    /**
     *
     * @var string
     */
    protected $modificado;

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
     * Method to set the value of field cd_historico
     *
     * @param integer $cd_historico
     * @return $this
     */
    public function setCdUnidade($cd_unidade)
    {
        $this->cd_unidade = $cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field cd_unidade
     *
     * @param integer $cd_unidade
     * @return $this
     */
    public function setCdTemplate($cd_template)
    {
        $this->cd_template = $cd_template;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field codigoMandrill
     *
     * @param string $codigoMandrill
     * @return $this
     */
    public function setCodigoMandrill($codigoMandrill)
    {
        $this->codigoMandrill = $codigoMandrill;

        return $this;
    }

    /**
     * Method to set the value of field motivoRejeicao
     *
     * @param string $motivoRejeicao
     * @return $this
     */
    public function setMotivoRejeicao($motivoRejeicao)
    {
        $this->motivoRejeicao = $motivoRejeicao;

        return $this;
    }

    /**
     * Method to set the value of field lido
     *
     * @param integer $lido
     * @return $this
     */
    public function setLido($lido)
    {
        $this->lido = $lido;

        return $this;
    }

    /**
     * Method to set the value of field clique
     *
     * @param integer $clique
     * @return $this
     */
    public function setClique($clique)
    {
        $this->clique = $clique;

        return $this;
    }

    /**
     * Method to set the value of field enviado
     *
     * @param string $enviado
     * @return $this
     */
    public function setEnviado($enviado)
    {
        $this->enviado = $enviado;

        return $this;
    }

    /**
     * Method to set the value of field modificado
     *
     * @param string $modificado
     * @return $this
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;

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
     * Returns the value of field cd_template
     *
     * @return integer
     */
    public function getCdTemplate()
    {
        return $this->cd_template;
    }

    /**
     * Returns the value of field cd_unidade
     *
     * @return integer
     */
    public function getCdUnidade()
    {
        return $this->cd_unidade;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field codigoMandrill
     *
     * @return string
     */
    public function getCodigoMandrill()
    {
        return $this->codigoMandrill;
    }

    /**
     * Returns the value of field motivoRejeicao
     *
     * @return string
     */
    public function getMotivoRejeicao()
    {
        return $this->motivoRejeicao;
    }

    /**
     * Returns the value of field lido
     *
     * @return integer
     */
    public function getLido()
    {
        return $this->lido;
    }

    /**
     * Returns the value of field clique
     *
     * @return integer
     */
    public function getClique()
    {
        return $this->clique;
    }

    /**
     * Returns the value of field enviado
     *
     * @return string
     */
    public function getEnviado()
    {
        return $this->enviado;
    }

    /**
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_template', 'App\Models\MktTemplates', 'cd_template', array('alias' => 'MktTemplates'));
        $this->customInitialize();
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'mkt_historico';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MktHistorico[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MktHistorico
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
            'cd_template' => 'cd_template',
            'cd_unidade' => 'cd_unidade',
            'email' => 'email',
            'status' => 'status',
            'codigoMandrill' => 'codigoMandrill',
            'motivoRejeicao' => 'motivoRejeicao',
            'lido' => 'lido',
            'clique' => 'clique',
            'enviado' => 'enviado',
            'modificado' => 'modificado'
        );
    }

    public function customInitialize()
    {
        $this->addBehavior(new Timestampable(
            array(
                'beforeCreate' => array(
                    'field' => array('enviado','modificado'),
                    'format' => 'Y-m-d H:i:s'
                    )
                )
        ));
        $this->addBehavior(new Timestampable(
            array(
                'beforeUpdate' => array(
                    'field' => 'modificado',
                    'format' => 'Y-m-d H:i:s'
                    )
                )
        ));

        $this->skipAttributesOnUpdate(array('enviado'));
    }
}
