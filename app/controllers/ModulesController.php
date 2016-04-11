<?php
namespace App\Controllers;

use Phalcon\Mvc\View;
use Phalcon\Http\Response;
//controllers
use App\Controllers\BaseController as BaseController;
//models
use App\Models\Modules as Modules;
//views
use App\Forms\ModulesForm as ModulesForm;

class ModulesController extends BaseController
{

    public function initialize()
    {
        $this->breadCrumbs[] = array('link'=>'modules', 'text'=>'Modulos');
    }

    public function indexAction()
    {
        $this->breadCrumbs[] = array('link'=>'modules', 'text'=>'Listagem');
        $data['bc'] = $this->breadCrumbs;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/datatables/media/js/jquery.dataTables.js')
                ->addJs('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')
                ->addJs('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/system/modules/modules.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='modules/list';
        $data['new'] = 1;

        echo $this->output('static/base', $data);

    }

    public function listAction()
    {
        $data['modules'] = Modules::find();

        foreach ($data['modules'] as $key) {
            $aux = $key->toArray();
            if ($aux['icon']) {
                $aux['icon'] = '<span class="'.$aux['icon'].'"> </span> '.$aux['icon'];
            }
            $modules[] = $aux;
        }
        echo json_encode(array('data' => $modules));
    }

    public function deleteAction($id)
    {
        $modules = Modules::findByIdModules($id);
        $return = $modules->delete();
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
        $data['save'] = 1;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/datatables/media/js/jquery.dataTables.js')
                ->addJs('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')
                ->addJs('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/system/modules/form.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('fonts/icomoon/icomoon.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='modules/form';
        if (is_numeric($id)) {
            $modules = Modules::findFirstByIdModules($id);
        } else {
            $modules = new Modules();
        }
        $data['module'] = $modules->getIdModules();
        $form = new ModulesForm($modules);

        if ($this->request->isPost() == true) {
            $form->bind($this->request->getPost('modules'), $modules);
            if ($form->isValid()) {
                if ($modules->save()) {
                    $this->flash->success("Modulo salvo com sucesso!");
                } else {
                    $this->flash->error("Ocorreu erro ao salvar!");
                }
            }
        }
        $data['forms'] = $form->forms();

        echo $this->output('static/base', $data);
    }
}
