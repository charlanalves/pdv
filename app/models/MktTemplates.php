<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Mvc\Model\Behavior\SoftDelete;

class MktTemplates extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_template;

    /**
     *
     * @var integer
     */
    protected $cd_unidade;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $responderPara;

    /**
     *
     * @var string
     */
    protected $enviadoPor;

    /**
     *
     * @var string
     */
    protected $enviadoPorNome;

    /**
     *
     * @var string
     */
    protected $assunto;

    /**
     *
     * @var string
     */
    protected $conteudo;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     *
     * @var integer
     */
    protected $deletado;

    /**
     *
     * @var integer
     */
    protected $privado;


    /**
     * Method to set the value of field cd_template
     *
     * @param integer $cd_template
     * @return $this
     */
    public function setCdTemplate($cd_template)
    {
        $this->cd_template = $cd_template;

        return $this;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Method to set the value of field cd_empresa
     *
     * @param integer $cd_empresa
     * @return $this
     */
    public function setCdUnidade($cd_unidade)
    {
        $this->cd_unidade = $cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field responderPara
     *
     * @param string $responderPara
     * @return $this
     */
    public function setResponderPara($responderPara)
    {
        $this->responderPara = $responderPara;

        return $this;
    }

    /**
     * Method to set the value of field enviadoPor
     *
     * @param string $enviadoPor
     * @return $this
     */
    public function setEnviadoPor($enviadoPor)
    {
        $this->enviadoPor = $enviadoPor;

        return $this;
    }

    /**
     * Method to set the value of field enviadoPorNome
     *
     * @param string $enviadoPorNome
     * @return $this
     */
    public function setEnviadoPorNome($enviadoPorNome)
    {
        $this->enviadoPorNome = $enviadoPorNome;

        return $this;
    }

    /**
     * Method to set the value of field assunto
     *
     * @param string $assunto
     * @return $this
     */
    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;

        return $this;
    }

    /**
     * Method to set the value of field conteudo
     *
     * @param string $conteudo
     * @return $this
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;

        return $this;
    }

    /**
     * Method to set the value of field criado
     *
     * @param string $criado
     * @return $this
     */
    public function setCriado($criado)
    {
        $this->criado = $criado;

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
     * Method to set the value of field deletado
     *
     * @param integer $deletado
     * @return $this
     */
    public function setDeletado($deletado)
    {
        $this->deletado = $deletado;

        return $this;
    }

    /**
     * Method to set the value of field privado
     *
     * @param integer $privado
     * @return $this
     */
    public function setPrivado($privado)
    {
        $this->privado = $privado;

        return $this;
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

    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdUnidade()
    {
        return $this->cd_unidade;
    }

    /**
     * Returns the value of field responderPara
     *
     * @return string
     */
    public function getResponderPara()
    {
        return $this->responderPara;
    }

    /**
     * Returns the value of field enviadoPor
     *
     * @return string
     */
    public function getEnviadoPor()
    {
        return $this->enviadoPor;
    }

    /**
     * Returns the value of field enviadoPorNome
     *
     * @return string
     */
    public function getEnviadoPorNome()
    {
        return $this->enviadoPorNome;
    }

    /**
     * Returns the value of field assunto
     *
     * @return string
     */
    public function getAssunto()
    {
        return $this->assunto;
    }

    /**
     * Returns the value of field conteudo
     *
     * @return string
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * Returns the value of field criado
     *
     * @return string
     */
    public function getCriado()
    {
        return $this->criado;
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
     * Returns the value of field deletado
     *
     * @return integer
     */
    public function getDeletado()
    {
        return $this->deletado;
    }


    /**
     * Returns the value of field privado
     *
     * @return integer
     */
    public function getPrivado()
    {
        return $this->privado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio'));
        $this->HasMany('cd_template', 'App\Models\MktHistorico', 'cd_template', array('alias' => 'MktHistorico'));
        $this->customInitialize();
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'mkt_templates';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MktTemplates[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MktTemplates
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
            'cd_template' => 'cd_template',
            'nome' => 'nome',
            'cd_unidade' => 'cd_unidade',
            'responderPara' => 'responderPara',
            'enviadoPor' => 'enviadoPor',
            'enviadoPorNome' => 'enviadoPorNome',
            'assunto' => 'assunto',
            'conteudo' => 'conteudo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'deletado' => 'deletado',
            'privado' => 'privado'
        );
    }

    public function customInitialize()
    {
        $this->addBehavior(new Timestampable(
            array(
                'beforeCreate' => array(
                    'field' => array('criado','modificado'),
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
        $this->addBehavior(new SoftDelete(
            array(
                'field' => 'deletado',
                'value' => 1
                  )
        ));
        $this->skipAttributesOnUpdate(array('criado'));
    }
}
