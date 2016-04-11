<?php

namespace App\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use App\Services\Auth;
use App\Services\Acl;

class BaseController extends \Phalcon\Mvc\Controller
{

    public $breadCrumbs;
    public $acl;
    public $auth;

    public function beforeExecuteRoute(Dispatcher $dispatcher)
    {
        $this->acl = new Acl;
        $this->auth = new Auth;

        $controllerName = $dispatcher->getControllerName();
        $actionName = $dispatcher->getActionName();

         /* Debugbar start */
        $ns = $dispatcher->getNamespaceName();
        if ($ns=='Snowair\Debugbar\Controllers') {
            return true;
        }


        if ($this->acl->isWhiteList($controllerName, $actionName)) {
            $identity = $this->auth->getIdentity();
            if (is_array($identity)) {
                $this->view->setVar("menu", $this->acl->menuPermissions($identity['id']));
                $this->montarUnidadeDeNegocio($identity['id'], $identity['unidade']);
                $this->view->setVar("identity", $identity);
            } else {
                $this->view->setVar("menu", array());
                // $this->montarUnidadeDeNegocio($identity['id']);
                $this->view->setVar("identity", array());
            }
            return true;
        }
        if ($this->acl->isPrivate($controllerName)) {
            $identity = $this->auth->getIdentity();
            if (!is_array($identity)) {
                if (($controllerName != 'system') && ($actionName != 'login')) {
                    if (!$this->session->has('login_redirect')) {
                        ($controllerName == 'index') ? $controllerName = '' : $controllerName = $controllerName.'/';
                        ($actionName == 'index') ? $actionName = '' : $actionName = $actionName;
                        $this->session->set('login_redirect', $controllerName.$actionName);
                    }
                }

                if ($this->auth->loginTransparente()) {
                    $identity = $this->auth->getIdentity();
                    $this->view->setVar("identity", $identity);
                    $this->montarUnidadeDeNegocio($identity['id'], $identity['unidade']);
                    return true;
                }

                $dispatcher->forward(array(
                'controller' => 'system',
                'action' => 'login'
                ));
                return false;
            }
            $this->view->setVar("identity", $identity);
            $this->montarUnidadeDeNegocio($identity['id'], $identity['unidade']);
            return true;
            if (!$this->acl->isAllowed($identity['profile'], $controllerName, $actionName)) {
                $this->flash->error('Acesso restrito');
                if ($this->acl->isAllowed($identity['profile'], $controllerName, 'index')) {
                    $dispatcher->forward(array(
                    'controller' => $controllerName,
                    'action' => 'index'
                    ));
                } else {
                    $dispatcher->forward(array(
                    'controller' => 'index',
                    'action' => 'index'
                    ));
                }
                return false;
            }
            $this->view->setVar("menu", $this->acl->menuPermissions($identity['id']));
            $this->view->setVar("identity", $identity);
        }
    }

    private function montarUnidadeDeNegocio($usuario, $unidadeAtiva = 0, $ativo = 0)
    {
        if ($this->request->isAjax()) {
            return '';
        }
        $tipoUn = array(
                0 => 'LICENCIADA',
                1 => 'FRANQUIAS',
                2 => 'FORNERCEDORES',
                3 => 'ADMINISTRADORA');

        $sql = 'SELECT  App\Models\Empresa.cd_empresa,
                        App\Models\Empresa.ativo, 
                        App\Models\UnidadeNegocio.descricao, 
                        App\Models\UnidadeNegocio.cd_unidade, 
                        App\Models\UnidadeNegocio.tipo, 
                        App\Models\Endereco.cidade 
        FROM App\Models\UnidadeNegocioHasUsuario
        Join App\Models\UnidadeNegocio on App\Models\UnidadeNegocioHasUsuario.unidade_negocio_cd_unidade = App\Models\UnidadeNegocio.cd_unidade
        Join App\Models\Empresa on App\Models\UnidadeNegocio.empresa_cd_empresa = App\Models\Empresa.cd_empresa
        Join App\Models\Endereco on App\Models\Empresa.cd_empresa = App\Models\Endereco.empresa_cd_empresa and App\Models\Endereco.tipo = 0
        where App\Models\UnidadeNegocioHasUsuario.usuario_cd_usuario = :usuario:';

        $bind['usuario'] = $usuario;

        if ($ativo) {
            $sql .= ' AND App\Models\Empresa.ativo = :ativo:';
            $bind['ativo'] = $ativo;
        }

        $data = $this->modelsManager->executeQuery($sql, $bind);

        $unidades = $data->toArray();

      
        foreach ($unidades as $key) {
            $cidade = $key['cidade'];
            $unidadeNome = substr(mb_strtoupper($key['descricao']), 0, 26);
            $tipoUnidade = $tipoUn[$key['tipo']];
            $unidadeNegocio[$tipoUnidade][$key['cd_unidade']]['desc'] = str_pad($key['cd_empresa'], 6, 0, STR_PAD_LEFT). ' - '. $unidadeNome ." - ". mb_strtoupper($cidade);
            $unidadeNegocio[$tipoUnidade][$key['cd_unidade']]['ativo'] = $key['ativo'];
        }

        $select = '';

        foreach ($unidadeNegocio as $key => $value) {
            $select .= '<optgroup label="'.$key.'">';
            foreach ($value as $opt => $option) {
                $style = '';
                if (!$option['ativo']) {
                    $style = 'class="inativo"';
                }
                if ($opt != $unidadeAtiva) {
                    $select .= '<option value="'.$opt.'"'.$style.'>'.$option['desc'].'</option>';
                } else {
                    $select .= '<option value="'.$opt.'"'.$style.' selected>'.$option['desc'].'</option>';
                }
            }
            $select .= '</optgroup>';
        }
        $auth = new Auth();
        $identity = $auth->getIdentity();
        $usuarios = $this->listarUsuarioUnidadeNegocio($identity['id'], $identity['tipo'], $identity['unidade']);

        $this->view->setVar("selectUnidadeNegocio", $select);
        $this->view->setVar("selectUsuario", $usuarios);
    }

    public function listarUsuarioUnidadeNegocio($usuario, $tipo, $unidade)
    {

        $auth = new Auth();
        $data = $auth->usuarioUnidadeNegocio($usuario, $tipo, $unidade);

        $select = '';
        foreach ($data as $un) {
            $dbUsuario = $un->Usuario->toArray();

            if ($dbUsuario['cd_usuario'] == $usuario) {
                $select .= '<option value="'.$dbUsuario['cd_usuario'].'" selected>'.$dbUsuario['nome'].'</option>';
            } else {
                $select .= '<option value="'.$dbUsuario['cd_usuario'].'" >'.$dbUsuario['nome'].'</option>';
            }
        }

        return $select;

    }

    public function output($page, $data = null)
    {

        $this->assets
                ->collection('footer')
                ->addJs('js/jquery/jquery-2.1.4.min.js')
                ->addJs('vendor/jquery/jquery_ui/jquery-ui.min.js')
                ->addJs('vendor/sweetalert2/dist/sweetalert2.min.js')
                ->addJs('vendor/typeahead/typeahead.bundle.js')
                ->addJs('vendor/typeahead/handlebars.js')
                ->addJs('js/bootstrap/bootstrap.min.js')
                ->addJs('js/utility/utility.js')
                ->addJs('vendor/bootstrap-multiselect/dist/js/bootstrap-multiselect.js')
                ->addJs('js/shortcut.js')
                ->addJs('js/system/json2.js')
                ->addJs('js/jquery.maskedinput.min.js')
                ->addJs('js/main.js');


        $this->assets
                ->collection('header')
                ->addCss('skin/default_skin/css/theme.css')
                ->addCss('fonts/icomoon/icomoon.css')
                ->addCss('vendor/sweetalert2/dist/sweetalert2.css')
                ->addcss('vendor/bootstrap-multiselect/dist/css/bootstrap-multiselect.css')
                ->addCss('admin-tools/admin-forms/css/admin-forms.css');

                $this->assets
                        ->collection('system');

                $this->assets
                        ->collection('css_before');

        return $this->view->render($page, $data);
    }
}
