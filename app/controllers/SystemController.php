<?php
namespace App\Controllers;

use Phalcon\Mvc\View;
use Phalcon\Http\Response;
//controllers
use App\Controllers\BaseController as BaseController;
//models
use App\Models\Usuario as Usuario;
//views
use App\Forms\LoginForm as LoginForm;
use App\Services\Auth;
use Phalcon\Mvc\View\Simple as SimpleView;

class SystemController extends BaseController
{

    public function initialize()
    {

        if (!$this->session->has('auth-identity')) {
             $this->loginAction();
             exit;
        }

    }

    public function loginAction()
    {
        $this->assets
                ->collection('system')
                ->addJs('js/pages/login/EasePack.min.js')
                ->addJs('js/pages/login/rAF.js')
                ->addJs('js/pages/login/TweenLite.min.js')
                ->addJs('js/pages/login/login.js');


        $form = new LoginForm();
        $user = new Usuario();

        if ($this->request->isPost() == true) {
            $form->bind($this->request->getPost(), $user);
            if ($form->isValid()) {
                $auth = new Auth();
                if ($auth->check($this->request->getPost())) {
                    if ($this->session->has('login_redirect')) {
                        $aux = $this->session->get('login_redirect');
                        $this->session->remove('login_redirect');
                        header('Location: '. $this->url->getBaseUri().$aux);
                    } else {
                        header('Location: '. $this->url->getBaseUri());
                    }
                    exit;
                }
            }
        }

         $data['forms'] = $form->forms();
         echo $this->output('static/login', $data);
    }

    public function logoutAction()
    {
        $this->session->destroy();
        header('Location: '. $this->url->getBaseUri());
        exit;
    }

    public function indexAction()
    {
        header('Location: '. $this->url->getBaseUri());
        exit;
    }

    public function listarUsuarioUnidadeNegocioAction($unidade = 1)
    {
        $usuarios = new \App\Controllers\BaseController();
        $auth = new Auth();
        $identity = $auth->getIdentity();
        $data = $usuarios->listarUsuarioUnidadeNegocio($identity['id'], $identity['tipo'], $unidade);
        echo json_encode(array('data' => $data, 'status' => true));
        exit;
    }

    public function alterarUsuarioAction($unidade = 0, $usuario = 0)
    {
        $auth = new Auth();
        $identity = $auth->getIdentity();
        $data = $auth->usuarioUnidadeNegocio($identity['id'], $identity['tipo'], $unidade, $usuario);
        if ($data->valid()) {
            if ($auth->alterarSessao($unidade, $usuario)) {
                echo json_encode(array('data' => $data, 'status' => true));
                exit;
            }
        } else {
            $this->flash->error('Usuario/Unidade de Negocio invalido.');
        }
        echo json_encode(array('data' => $data, 'msg' => 'Usuario/Unidade de Negocio invalido.', 'status' => false));
        exit;

    }
}
