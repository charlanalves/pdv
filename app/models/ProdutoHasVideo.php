<?php

namespace App\Models;

class ProdutoHasVideo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $produto_Cd_produto;

    /**
     *
     * @var integer
     */
    protected $video_cd_video;

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
     * Method to set the value of field produto_Cd_produto
     *
     * @param integer $produto_Cd_produto
     * @return $this
     */
    public function setProdutoCdProduto($produto_Cd_produto)
    {
        $this->produto_Cd_produto = $produto_Cd_produto;

        return $this;
    }

    /**
     * Method to set the value of field video_cd_video
     *
     * @param integer $video_cd_video
     * @return $this
     */
    public function setVideoCdVideo($video_cd_video)
    {
        $this->video_cd_video = $video_cd_video;

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
     * Returns the value of field produto_Cd_produto
     *
     * @return integer
     */
    public function getProdutoCdProduto()
    {
        return $this->produto_Cd_produto;
    }

    /**
     * Returns the value of field video_cd_video
     *
     * @return integer
     */
    public function getVideoCdVideo()
    {
        return $this->video_cd_video;
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
        $this->belongsTo('produto_Cd_produto', 'App\Models\Produto', 'cd_produto', array('alias' => 'Produto'));
        $this->belongsTo('video_cd_video', 'App\Models\Video', 'cd_video', array('alias' => 'Video'));
        $this->belongsTo('produto_Cd_produto', 'App\Models\Produto', 'cd_produto', array('foreignKey' => true,'alias' => 'Produto'));
        $this->belongsTo('video_cd_video', 'App\Models\Video', 'cd_video', array('foreignKey' => true,'alias' => 'Video'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'produto_has_video';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasVideo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProdutoHasVideo
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
            'produto_Cd_produto' => 'produto_Cd_produto',
            'video_cd_video' => 'video_cd_video',
            'posicao' => 'posicao',
            'ativo' => 'ativo',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
