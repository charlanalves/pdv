<?php

namespace App\Models;

class Rotina extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_rotina;

    /**
     *
     * @var integer
     */
    protected $cd_rotina_pai;

    /**
     *
     * @var integer
     */
    protected $modulo;

    /**
     *
     * @var integer
     */
    protected $exibir_dashboard;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $link;

    /**
     *
     * @var string
     */
    protected $class_btn;

    /**
     *
     * @var string
     */
    protected $name_btn;

    /**
     *
     * @var integer
     */
    protected $display_btn;

    /**
     *
     * @var integer
     */
    protected $menu;

    /**
     *
     * @var integer
     */
    protected $listagem;

    /**
     *
     * @var string
     */
    protected $acceskey;

    /**
     *
     * @var integer
     */
    protected $ordem;

    /**
     *
     * @var integer
     */
    protected $tipo;

    /**
     *
     * @var string
     */
    protected $permissao_unidade_negocio;

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
     * Method to set the value of field cd_rotina_pai
     *
     * @param integer $cd_rotina_pai
     * @return $this
     */
    public function setCdRotinaPai($cd_rotina_pai)
    {
        $this->cd_rotina_pai = $cd_rotina_pai;

        return $this;
    }

    /**
     * Method to set the value of field modulo
     *
     * @param integer $modulo
     * @return $this
     */
    public function setModulo($modulo)
    {
        $this->modulo = $modulo;

        return $this;
    }

    /**
     * Method to set the value of field exibir_dashboard
     *
     * @param integer $exibir_dashboard
     * @return $this
     */
    public function setExibirDashboard($exibir_dashboard)
    {
        $this->exibir_dashboard = $exibir_dashboard;

        return $this;
    }

    /**
     * Method to set the value of field descricao
     *
     * @param string $descricao
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

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
     * Method to set the value of field class_btn
     *
     * @param string $class_btn
     * @return $this
     */
    public function setClassBtn($class_btn)
    {
        $this->class_btn = $class_btn;

        return $this;
    }

    /**
     * Method to set the value of field name_btn
     *
     * @param string $name_btn
     * @return $this
     */
    public function setNameBtn($name_btn)
    {
        $this->name_btn = $name_btn;

        return $this;
    }

    /**
     * Method to set the value of field display_btn
     *
     * @param integer $display_btn
     * @return $this
     */
    public function setDisplayBtn($display_btn)
    {
        $this->display_btn = $display_btn;

        return $this;
    }

    /**
     * Method to set the value of field menu
     *
     * @param integer $menu
     * @return $this
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Method to set the value of field listagem
     *
     * @param integer $listagem
     * @return $this
     */
    public function setListagem($listagem)
    {
        $this->listagem = $listagem;

        return $this;
    }

    /**
     * Method to set the value of field acceskey
     *
     * @param string $acceskey
     * @return $this
     */
    public function setAcceskey($acceskey)
    {
        $this->acceskey = $acceskey;

        return $this;
    }

    /**
     * Method to set the value of field ordem
     *
     * @param integer $ordem
     * @return $this
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Method to set the value of field tipo
     *
     * @param integer $tipo
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Method to set the value of field permissao_unidade_negocio
     *
     * @param string $permissao_unidade_negocio
     * @return $this
     */
    public function setPermissaoUnidadeNegocio($permissao_unidade_negocio)
    {
        $this->permissao_unidade_negocio = $permissao_unidade_negocio;

        return $this;
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
     * Returns the value of field cd_rotina_pai
     *
     * @return integer
     */
    public function getCdRotinaPai()
    {
        return $this->cd_rotina_pai;
    }

    /**
     * Returns the value of field modulo
     *
     * @return integer
     */
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * Returns the value of field exibir_dashboard
     *
     * @return integer
     */
    public function getExibirDashboard()
    {
        return $this->exibir_dashboard;
    }

    /**
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
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
     * Returns the value of field link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Returns the value of field class_btn
     *
     * @return string
     */
    public function getClassBtn()
    {
        return $this->class_btn;
    }

    /**
     * Returns the value of field name_btn
     *
     * @return string
     */
    public function getNameBtn()
    {
        return $this->name_btn;
    }

    /**
     * Returns the value of field display_btn
     *
     * @return integer
     */
    public function getDisplayBtn()
    {
        return $this->display_btn;
    }

    /**
     * Returns the value of field menu
     *
     * @return integer
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Returns the value of field listagem
     *
     * @return integer
     */
    public function getListagem()
    {
        return $this->listagem;
    }

    /**
     * Returns the value of field acceskey
     *
     * @return string
     */
    public function getAcceskey()
    {
        return $this->acceskey;
    }

    /**
     * Returns the value of field ordem
     *
     * @return integer
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Returns the value of field tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Returns the value of field permissao_unidade_negocio
     *
     * @return string
     */
    public function getPermissaoUnidadeNegocio()
    {
        return $this->permissao_unidade_negocio;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_rotina', 'App\Models\Permissao', 'rotina', array('alias' => 'Permissao'));
        $this->hasMany('cd_rotina', 'App\Models\Permissaoperfilusuario', 'cd_rotina', array('alias' => 'Permissaoperfilusuario'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'rotina';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Rotina[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Rotina
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
            'cd_rotina' => 'cd_rotina',
            'cd_rotina_pai' => 'cd_rotina_pai',
            'modulo' => 'modulo',
            'exibir_dashboard' => 'exibir_dashboard',
            'descricao' => 'descricao',
            'nome' => 'nome',
            'link' => 'link',
            'class_btn' => 'class_btn',
            'name_btn' => 'name_btn',
            'display_btn' => 'display_btn',
            'menu' => 'menu',
            'listagem' => 'listagem',
            'acceskey' => 'acceskey',
            'ordem' => 'ordem',
            'tipo' => 'tipo',
            'permissao_unidade_negocio' => 'permissao_unidade_negocio'
        );
    }

    public function getPrivatePermissions($resources = array())
    {
        $phql = "select distinct App\Models\Rotina.nome, App\Models\Modulo.descricao FROM App\Models\Permissao
                    join App\Models\Rotina on App\Models\Permissao.rotina = App\Models\Rotina.cd_rotina
                    join App\Models\Modulo on App\Models\Modulo.cd_modulo = App\Models\Rotina.modulo";

        $permissions = $this->modelsManager->executeQuery($phql);

        // var_dump($permissions->toArray());
        foreach ($permissions as $key) {
            $list[$key->descricao][] = $key->nome;
        }

        foreach ($resources as $key => $value) {
            foreach ($value as $add) {
                $list[$key][] = $add;
            }
        }
        
        return $list;
    }

}
