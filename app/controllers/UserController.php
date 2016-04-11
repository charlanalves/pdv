<?php
namespace App\Controllers;

use Phalcon\Mvc\View;
use Phalcon\Http\Response;
//controllers
use App\Controllers\BaseController as BaseController;
//models
use App\Models\User as User;
use App\Models\Address as Address;
//views
use App\Forms\UserForm as UserForm;
use App\Forms\AddressForm as AddressForm;

class UserController extends BaseController
{

    public function initialize()
    {
        $this->breadCrumbs[] = array('link'=>'user', 'text'=>'Usuario');
    }

    public function indexAction()
    {
        $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Listagem');
        $data['bc'] = $this->breadCrumbs;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/datatables/media/js/jquery.dataTables.js')
                ->addJs('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')
                ->addJs('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/system/user/user.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $data['new'] = 1;

        $error = 0;
        $data['page'] ='user/list';

        echo $this->output('static/base', $data);

    }

    public function listAction()
    {
        $data['user'] = User::find(array(
                "conditions" => 'deleted = :deleted:',
                "bind" => array('deleted' => 0)
            ));
        $user = $data['user']->toArray();

        foreach ($user as &$key) {
            switch (mb_strtoupper($key['status'])) {
                case 'E':
                    $key['status'] = 'Ativo';
                    break;
                case 'N':
                    $key['status'] = 'Novo cadastro';
                    break;
                case 'S':
                    $key['status'] = 'Suspenso';
                    break;
                default:
                    $key['status'] = 'Novo cadastro';
                    break;
            }

            switch (mb_strtoupper($key['type'])) {
                case 'P':
                    $key['type'] = 'Profissional';
                    break;
                case 'B':
                    $key['type'] = 'Empresa';
                    break;
                case 'A':
                    $key['type'] = 'Administrador';
                    break;
                default:
                    $key['type'] = 'Indefinido';
                    break;
            }

            if (!empty($key['created'])) {
                $date = \DateTime::createFromFormat("Y-m-d H:i:s", $key['created']);
                $key['created'] = $date->format('d-m-Y H:i:s');
            }
            if (!empty($key['modified'])) {
                $date = \DateTime::createFromFormat("Y-m-d H:i:s", $key['modified']);
                $key['modified'] = $date->format('d-m-Y H:i:s');
            }
        }

        echo json_encode(array('data' => $user));
    }

    public function deleteAction($id)
    {
        $user = User::findByIdUser($id);
        $return = $user->delete();
        if ($return) {
            $msg = 'Deletado com sucesso';
        } else {
            $msg = 'Ocorreu um erro ao deletar o registro';
        }

        echo json_encode(array('data' => $return, 'msg' => $msg));
    }

    public function formAction($id = null)
    {
        $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Formulario');
        $data['bc'] = $this->breadCrumbs;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/datatables/media/js/jquery.dataTables.js')
                ->addJs('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')
                ->addJs('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/system/user/form.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('fonts/icomoon/icomoon.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='user/form';
        if (is_numeric($id)) {
            $user = User::findFirstByIdUser($id);
        } else {
            $user = new User();
        }
        $data['user'] = $user->getIdUser();
        $user->setPassword(null);
        $form = new UserForm($user);
        $countForm = 0;

        $data['save'] = 1;
        if ($user->Address->valid()) {
            foreach ($user->Address as $address) {
                $addressList[$countForm] = new AddressForm($address, $countForm);
                $countForm++;
            }
        } else {
            $address = new Address();
            $addressList[$countForm] = new AddressForm($address, $countForm);
        }

        if ($this->request->isPost() == true) {
            $form->bind($this->request->getPost('user'), $user);
            if ($form->isValid()) {
                $formAux = $this->request->getPost('user');

                if (!empty($formAux['password'])) {
                    $user->setPassword($this->security->hash($formAux['password']));
                } else {
                    $user->setPassword(null);
                }
                $countRequest = 0;
                $AddressObj = array();
                foreach ($this->request->getPost('address') as $addressForm) {
                    $AddressObj[$countRequest] = new Address;
                    $addressList[$countRequest] = new AddressForm($AddressObj[$countRequest], $countRequest);
                    $addressList[$countRequest]->bind($addressForm, $AddressObj[$countRequest]);

                    if ($addressList[$countRequest]->isValid()) {
                        $countRequest++;
                    } else {
                        $error = 1;
                    }
                }

                if ($error === 0) {
                    $user->Address->delete();
                    $user->Address = $AddressObj;
                    $user->setDeleted(0);
                    if ($user->save()) {
                        $this->flash->success("Empresa salva com sucesso!");
                    } else {
                        $this->flash->error("Ocorreu erro ao salvar!");
                    }
                }
            }
        }
        $data['forms'] = $form->forms();
        foreach ($addressList as $key) {
            $data['address'][] = $key->forms();
        }


        $data['payments'] = $user->Payments;
        $data['accessLog'] = $user->AccessLog;
        $data['jobHasUser'] = $user->JobHasUser;

        // foreach ($user->Payments as $key) {
        //     var_dump($key->toArray());
        // }
        echo $this->output('static/base', $data);
    }
}
