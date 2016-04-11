<?php

namespace App\Models;

class Permissaoperfilusuario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_permissao;

    /**
     *
     * @var integer
     */
    protected $cd_perfil;

    /**
     *
     * @var integer
     */
    protected $cd_rotina;

    /**
     * Method to set the value of field cd_permissao
     *
     * @param integer $cd_permissao
     * @return $this
     */
    public function setCdPermissao($cd_permissao)
    {
        $this->cd_permissao = $cd_permissao;

        return $this;
    }

    /**
     * Method to set the value of field cd_perfil
     *
     * @param integer $cd_perfil
     * @return $this
     */
    public function setCdPerfil($cd_perfil)
    {
        $this->cd_perfil = $cd_perfil;

        return $this;
    }

    /**
     * Method to set the value of field cd_rotina
     *
     * @param integer $cd_rotina
     * @return $this
     */
    public function setCdRotina($cd_rotina)
    {
        $this->cd_rotina = $cd_rotina;

        return $this;
    }

    /**
     * Returns the value of field cd_permissao
     *
     * @return integer
     */
    public function getCdPermissao()
    {
        return $this->cd_permissao;
    }

    /**
     * Returns the value of field cd_perfil
     *
     * @return integer
     */
    public function getCdPerfil()
    {
        return $this->cd_perfil;
    }

    /**
     * Returns the value of field cd_rotina
     *
     * @return integer
     */
    public function getCdRotina()
    {
        return $this->cd_rotina;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cd_perfil', 'App\Models\Perfilusuario', 'cd_perfil', array('alias' => 'Perfilusuario'));
        $this->belongsTo('cd_rotina', 'App\Models\Rotina', 'cd_rotina', array('alias' => 'Rotina'));
        $this->belongsTo('cd_perfil', 'App\Models\Perfilusuario', 'cd_perfil', array('foreignKey' => true,'alias' => 'Perfilusuario'));
        $this->belongsTo('cd_rotina', 'App\Models\Rotina', 'cd_rotina', array('foreignKey' => true,'alias' => 'Rotina'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'permissaoperfilusuario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Permissaoperfilusuario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Permissaoperfilusuario
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
            'cd_permissao' => 'cd_permissao',
            'cd_perfil' => 'cd_perfil',
            'cd_rotina' => 'cd_rotina'
        );
    }

}
