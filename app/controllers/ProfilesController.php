<?php
namespace App\Controllers;

use Phalcon\Mvc\View;
use Phalcon\Http\Response;
//controllers
use App\Controllers\BaseController as BaseController;
//models
use App\Models\Profiles as Profiles;
//views
use App\Forms\ProfilesForm as ProfilesForm;

class ProfilesController extends BaseController
{

    public function initialize()
    {
        $this->breadCrumbs[] = array('link'=>'profiles', 'text'=>'Perfil');
    }

    public function indexAction()
    {
        $this->breadCrumbs[] = array('link'=>'profiles', 'text'=>'Listagem');
        $data['bc'] = $this->breadCrumbs;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/datatables/media/js/jquery.dataTables.js')
                ->addJs('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')
                ->addJs('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/system/profiles/profiles.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='profiles/list';
        $data['new'] = 1;

        echo $this->output('static/base', $data);

    }

    public function listAction()
    {
        $data['profiles'] = Profiles::find();

        foreach ($data['profiles'] as $key) {
            $aux = $key->toArray();

            ($aux['enabled']) ? $aux['enabled'] = 'Sim' : $aux['enabled'] = 'Não';

            $profiles[] = $aux;
        }
        echo json_encode(array('data' => $profiles));
    }

    public function deleteAction($id)
    {
        $profiles = Profiles::findByIdProfiles($id);
        $return = $profiles->delete();
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
                ->addJs('js/system/profiles/form.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('fonts/icomoon/icomoon.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='profiles/form';
        $data['save'] = 1;
        if (is_numeric($id)) {
            $profiles = Profiles::findFirstByIdProfiles($id);
        } else {
            $profiles = new Profiles();
        }
        $data['profile'] = $profiles->getIdProfiles();
        $form = new ProfilesForm($profiles);

        if ($this->request->isPost() == true) {
            $auxProfiles = $this->request->getPost('profiles');
            if (!isset($auxProfiles['enabled'])) {
                $auxProfiles['enabled'] = 0;
            }

            $form->bind($auxProfiles, $profiles);
            if ($form->isValid()) {
                if ($profiles->save()) {
                    $this->flash->success("Perfil salvo com sucesso!");
                } else {
                    $this->flash->error("Ocorreu erro ao salvar!");
                }
            }
        }
        $data['forms'] = $form->forms();

        echo $this->output('static/base', $data);
    }
}
