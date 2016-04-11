<?php

namespace App\Models;

class CentroProducao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_centro_producao;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var integer
     */
    protected $usuario_responsavel;

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
     * Method to set the value of field cd_centro_producao
     *
     * @param integer $cd_centro_producao
     * @return $this
     */
    public function setCdCentroProducao($cd_centro_producao)
    {
        $this->cd_centro_producao = $cd_centro_producao;

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
     * Method to set the value of field usuario_responsavel
     *
     * @param integer $usuario_responsavel
     * @return $this
     */
    public function setUsuarioResponsavel($usuario_responsavel)
    {
        $this->usuario_responsavel = $usuario_responsavel;

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
     * Returns the value of field cd_centro_producao
     *
     * @return integer
     */
    public function getCdCentroProducao()
    {
        return $this->cd_centro_producao;
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
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field usuario_responsavel
     *
     * @return integer
     */
    public function getUsuarioResponsavel()
    {
        return $this->usuario_responsavel;
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
        $this->hasMany('cd_centro_producao', 'App\Models\CentroProducaoHasEquipes', 'cd_centro_producao', array('alias' => 'CentroProducaoHasEquipes'));
        $this->hasMany('cd_centro_producao', 'App\Models\CentroProducaoHasMolde', 'cd_centro_producao', array('alias' => 'CentroProducaoHasMolde'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->hasMany('cd_centro_producao', 'App\Models\CentroProducaoHasEquipes', 'cd_centro_producao', NULL);
        $this->hasMany('cd_centro_producao', 'App\Models\CentroProducaoHasMolde', 'cd_centro_producao', NULL);
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('foreignKey' => true,'alias' => 'Empresa'));
        $this->belongsTo('usuario_responsavel', 'App\Models\Usuario', 'cd_usuario', array('foreignKey' => true,'alias' => 'Usuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'centro_producao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CentroProducao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CentroProducao
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
            'cd_centro_producao' => 'cd_centro_producao',
            'cd_empresa' => 'cd_empresa',
            'nome' => 'nome',
            'usuario_responsavel' => 'usuario_responsavel',
            'criado' => 'criado',
            'modificado' => 'modificado'
        );
    }

}
