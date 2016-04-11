<?php

namespace App\Models;

class UnidadeNegocioHasUsuario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $unidade_negocio_cd_unidade;

    /**
     *
     * @var integer
     */
    protected $usuario_cd_usuario;

    /**
     *
     * @var integer
     */
    protected $unidade_padrao;

    /**
     * Method to set the value of field unidade_negocio_cd_unidade
     *
     * @param integer $unidade_negocio_cd_unidade
     * @return $this
     */
    public function setUnidadeNegocioCdUnidade($unidade_negocio_cd_unidade)
    {
        $this->unidade_negocio_cd_unidade = $unidade_negocio_cd_unidade;

        return $this;
    }

    /**
     * Method to set the value of field usuario_cd_usuario
     *
     * @param integer $usuario_cd_usuario
     * @return $this
     */
    public function setUsuarioCdUsuario($usuario_cd_usuario)
    {
        $this->usuario_cd_usuario = $usuario_cd_usuario;

        return $this;
    }

    /**
     * Method to set the value of field unidade_padrao
     *
     * @param integer $unidade_padrao
     * @return $this
     */
    public function setUnidadePadrao($unidade_padrao)
    {
        $this->unidade_padrao = $unidade_padrao;

        return $this;
    }

    /**
     * Returns the value of field unidade_negocio_cd_unidade
     *
     * @return integer
     */
    public function getUnidadeNegocioCdUnidade()
    {
        return $this->unidade_negocio_cd_unidade;
    }

    /**
     * Returns the value of field usuario_cd_usuario
     *
     * @return integer
     */
    public function getUsuarioCdUsuario()
    {
        return $this->usuario_cd_usuario;
    }

    /**
     * Returns the value of field unidade_padrao
     *
     * @return integer
     */
    public function getUnidadePadrao()
    {
        return $this->unidade_padrao;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('unidade_negocio_cd_unidade', 'App\Models\Informativo', 'informativo_criado_cd_unidade', array('alias' => 'Informativo'));
        $this->hasMany('unidade_negocio_cd_unidade', 'App\Models\Mensagem', 'mensagem_criado_cd_unidade', array('alias' => 'Mensagem'));
        $this->hasMany('unidade_negocio_cd_unidade', 'App\Models\Permissao', 'unidade_negocio_has_usuario_Unidade_negocio_cd_unidade', array('alias' => 'Permissao'));
        $this->belongsTo('usuario_cd_usuario', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario',  "foreignKey" => true));
        $this->belongsTo('unidade_negocio_cd_unidade', 'App\Models\UnidadeNegocio', 'cd_unidade', array('alias' => 'UnidadeNegocio', "foreignKey" => true));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'unidade_negocio_has_usuario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UnidadeNegocioHasUsuario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UnidadeNegocioHasUsuario
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
            'unidade_negocio_cd_unidade' => 'unidade_negocio_cd_unidade',
            'usuario_cd_usuario' => 'usuario_cd_usuario',
            'unidade_padrao' => 'unidade_padrao'
        );
    }

    public static function search($params = null)
    {
        $query = self::query();

        preg_match_all('/[\S]*\./', $params['conditions'] .' '. $params['order'], $aModelsToJoin);
        if (count($aModelsToJoin) > 0) {
            $aModelsToJoin = array_filter(array_unique($aModelsToJoin[0]));
            foreach ($aModelsToJoin as $model) {
                if (rtrim($model, '.') != 'App\Models\UnidadeNegocioHasUsuario') {
                    $query->Join(rtrim($model, '.'));
                }
            }
        }

        if (isset($params['conditions'])) {
            $query->where($params['conditions'], $params['bind']);
        }

        if (isset($params['order'])) {
            $query->order($params['order']);
        }

        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = 0;
            }

            $query->limit($params['limit'], $params['offset']);
        }
        if (isset($params['columns'])) {
            $query->columns($params['columns']);
        }

        if (isset($params['bulder']) && $params['bulder'] == 1) {
            return $query;
        } else {
            return $query->execute();
        }
    }
}
