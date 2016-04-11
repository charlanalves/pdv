<?php

namespace App\Models;

class ControleRotinasRodarManha extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    protected $diaMesAno;

    /**
     * Method to set the value of field diaMesAno
     *
     * @param string $diaMesAno
     * @return $this
     */
    public function setDiaMesAno($diaMesAno)
    {
        $this->diaMesAno = $diaMesAno;

        return $this;
    }

    /**
     * Returns the value of field diaMesAno
     *
     * @return string
     */
    public function getDiaMesAno()
    {
        return $this->diaMesAno;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'controle_rotinas_rodar_manha';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ControleRotinasRodarManha[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ControleRotinasRodarManha
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
            'diaMesAno' => 'diaMesAno'
        );
    }

}
