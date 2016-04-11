<?php
namespace App\Controllers;

use Phalcon\Mvc\View;
use Phalcon\Http\Response;
//controllers
use App\Controllers\BaseController as BaseController;
//models
use App\Models\Permissions as Permissions;
//views
use App\Forms\PermissionsForm as PermissionsForm;

class PermissionsController extends BaseController
{

    public function initialize()
    {
        $this->breadCrumbs[] = array('link'=>'permissions', 'text'=>'Permissões');
    }

    public function indexAction()
    {
        $this->breadCrumbs[] = array('link'=>'permissions', 'text'=>'Listagem');
        $data['bc'] = $this->breadCrumbs;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/datatables/media/js/jquery.dataTables.js')
                ->addJs('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')
                ->addJs('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/system/permissions/permissions.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='permissions/list';
        $data['new'] = 1;

        echo $this->output('static/base', $data);

    }

    public function listAction()
    {
        $data['permissions'] = Permissions::find();

        foreach ($data['permissions'] as $key) {
            $aux = $key->toArray();
            if ($aux['icon']) {
                $aux['icon'] = '<span class="'.$aux['icon'].'"> </span> '.$aux['icon'];
            }
            if ($aux['menu']) {
                $aux['menu'] = 'Sim';
            } else {
                $aux['menu'] = 'Não';
            }
            if ($aux['profiles_idProfiles']) {
                $aux['profiles_idProfiles'] = $key->profiles->getName();
            }
            if ($aux['modules_idModules']) {
                $aux['modules_idModules'] = $key->modules->getDescription();
            }
            $permissions[] = $aux;
        }
        echo json_encode(array('data' => $permissions));
    }

    public function deleteAction($id)
    {
        $permissions = Permissions::findByIdPermissions($id);
        $return = $permissions->delete();
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
                ->addJs('js/system/permissions/form.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('fonts/icomoon/icomoon.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='permissions/form';
        if (is_numeric($id)) {
            $permissions = Permissions::findFirstByIdPermissions($id);
        } else {
            $permissions = new Permissions();
        }
        $data['permission'] = $permissions->getIdPermissions();
        $form = new PermissionsForm($permissions);
        $data['save'] = 1;

        if ($this->request->isPost() == true) {
            $auxPermissions = $this->request->getPost('permissions');
            if (!isset($auxPermissions['menu'])) {
                $auxPermissions['menu'] = 0;
            }

            $form->bind($auxPermissions, $permissions);
            if ($form->isValid()) {
                if ($permissions->save()) {
                    $this->flash->success("Permissão salvo com sucesso!");
                } else {
                    $this->flash->error("Ocorreu erro ao salvar!");
                }
            }
        }
        $data['forms'] = $form->forms();

        echo $this->output('static/base', $data);
    }
}
