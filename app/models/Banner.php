<?php

namespace App\Models;

class Banner extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_banner;

    /**
     *
     * @var integer
     */
    protected $imagem_cd_imagem;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $legenda;

    /**
     *
     * @var string
     */
    protected $link;

    /**
     *
     * @var string
     */
    protected $action;

    /**
     *
     * @var integer
     */
    protected $posicao;

    /**
     *
     * @var integer
     */
    protected $ativo;

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
     * Method to set the value of field cd_banner
     *
     * @param integer $cd_banner
     * @return $this
     */
    public function setCdBanner($cd_banner)
    {
        $this->cd_banner = $cd_banner;

        return $this;
    }

    /**
     * Method to set the value of field imagem_cd_imagem
     *
     * @param integer $imagem_cd_imagem
     * @return $this
     */
    public function setImagemCdImagem($imagem_cd_imagem)
    {
        $this->imagem_cd_imagem = $imagem_cd_imagem;

        return $this;
    }

    /**
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Method to set the value of field legenda
     *
     * @param string $legenda
     * @return $this
     */
    public function setLegenda($legenda)
    {
        $this->legenda = $legenda;

        return $this;
    }

    /**
     * Method to set the value of field link
     *
     * @param string $link
     * @return $this
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Method to set the value of field action
     *
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Method to set the value of field posicao
     *
     * @param integer $posicao
     * @return $this
     */
    public function setPosicao($posicao)
    {
        $this->posicao = $posicao;

        return $this;
    }

    /**
     * Method to set the value of field ativo
     *
     * @param integer $ativo
     * @return $this
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

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
     * Returns the value of field cd_banner
     *
     * @return integer
     */
    public function getCdBanner()
    {
        return $this->cd_banner;
    }

    /**
     * Returns the value of field imagem_cd_imagem
     *
     * @return integer
     */
    public function getImagemCdImagem()
    {
        return $this->imagem_cd_imagem;
    }

    /**
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field legenda
     *
     * @return string
     */
    public function getLegenda()
    {
        return $this->legenda;
    }

    /**
     * Returns the value of field link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Returns the value of field action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Returns the value of field posicao
     *
     * @return integer
     */
    public function getPosicao()
    {
        return $this->posicao;
    }

    /**
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('imagem_cd_imagem', 'App\Models\Imagem', 'cd_imagem', array('alias' => 'Imagem'));
        $this->belongsTo('imagem_cd_imagem', 'App\Models\Imagem', 'cd_imagem', array('foreignKey' => true,'alias' => 'Imagem'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'banner';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Banner[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Banner
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
            'cd_banner' => 'cd_banner',
            'imagem_cd_imagem' => 'imagem_cd_imagem',
            'nome' => 'nome',
            'legenda' => 'legenda',
            'link' => 'link',
            'action' => 'action',
            'posicao' => 'posicao',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
