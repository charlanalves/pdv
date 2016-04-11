<?php

namespace App\Models;

class SitePaginaAvulsa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_site_pagina;

    /**
     *
     * @var string
     */
    protected $titulo;

    /**
     *
     * @var string
     */
    protected $texto;

    /**
     *
     * @var string
     */
    protected $url;

    /**
     * Method to set the value of field cd_site_pagina
     *
     * @param integer $cd_site_pagina
     * @return $this
     */
    public function setCdSitePagina($cd_site_pagina)
    {
        $this->cd_site_pagina = $cd_site_pagina;

        return $this;
    }

    /**
     * Method to set the value of field titulo
     *
     * @param string $titulo
     * @return $this
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Method to set the value of field texto
     *
     * @param string $texto
     * @return $this
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Method to set the value of field url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Returns the value of field cd_site_pagina
     *
     * @return integer
     */
    public function getCdSitePagina()
    {
        return $this->cd_site_pagina;
    }

    /**
     * Returns the value of field titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Returns the value of field texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Returns the value of field url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'site_pagina_avulsa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SitePaginaAvulsa[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SitePaginaAvulsa
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
            'cd_site_pagina' => 'cd_site_pagina',
            'titulo' => 'titulo',
            'texto' => 'texto',
            'url' => 'url'
        );
    }

}
