<?php

namespace App\Models;

class ArquivoHasLancamento extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $arquivo_cd_arquivo;

    /**
     *
     * @var integer
     */
    protected $lancamento_cd_lancamento;

    /**
     * Method to set the value of field arquivo_cd_arquivo
     *
     * @param integer $arquivo_cd_arquivo
     * @return $this
     */
    public function setArquivoCdArquivo($arquivo_cd_arquivo)
    {
        $this->arquivo_cd_arquivo = $arquivo_cd_arquivo;

        return $this;
    }

    /**
     * Method to set the value of field lancamento_cd_lancamento
     *
     * @param integer $lancamento_cd_lancamento
     * @return $this
     */
    public function setLancamentoCdLancamento($lancamento_cd_lancamento)
    {
        $this->lancamento_cd_lancamento = $lancamento_cd_lancamento;

        return $this;
    }

    /**
     * Returns the value of field arquivo_cd_arquivo
     *
     * @return integer
     */
    public function getArquivoCdArquivo()
    {
        return $this->arquivo_cd_arquivo;
    }

    /**
     * Returns the value of field lancamento_cd_lancamento
     *
     * @return integer
     */
    public function getLancamentoCdLancamento()
    {
        return $this->lancamento_cd_lancamento;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('arquivo_cd_arquivo', 'App\Models\Arquivo', 'cd_arquivo', array('alias' => 'Arquivo'));
        $this->belongsTo('lancamento_cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('alias' => 'Lancamento'));
        $this->belongsTo('arquivo_cd_arquivo', 'App\Models\Arquivo', 'cd_arquivo', array('foreignKey' => true,'alias' => 'Arquivo'));
        $this->belongsTo('lancamento_cd_lancamento', 'App\Models\Lancamento', 'cd_lancamento', array('foreignKey' => true,'alias' => 'Lancamento'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'arquivo_has_lancamento';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ArquivoHasLancamento[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ArquivoHasLancamento
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
            'arquivo_cd_arquivo' => 'arquivo_cd_arquivo',
            'lancamento_cd_lancamento' => 'lancamento_cd_lancamento'
        );
    }

}
