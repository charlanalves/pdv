<?php
namespace App\Controllers;

use Phalcon\Mvc\View;
use Phalcon\Http\Response;
//controllers
use App\Controllers\BaseController as BaseController;
//models
use App\Models\Plan as Plan;
use App\Models\Plantable as Plantable;
//views
use App\Forms\PlanForm as PlanForm;
use App\Forms\PlantableForm as PlantableForm;

class PlanController extends BaseController
{

    public function initialize()
    {
        $this->breadCrumbs[] = array('link'=>'plan', 'text'=>'Planos');
    }

    public function indexAction()
    {
        $this->breadCrumbs[] = array('link'=>'plan', 'text'=>'Listagem');
        $data['bc'] = $this->breadCrumbs;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/datatables/media/js/jquery.dataTables.js')
                ->addJs('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')
                ->addJs('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/system/plan/plan.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='plan/list';
        $data['new'] = 1;

        echo $this->output('static/base', $data);

    }

    public function listAction()
    {
        $data['plan'] = Plan::find();

        foreach ($data['plan'] as $key) {
            $plan = $key->toArray();
            if ($key->Profiles) {
                $plan['profiles_idProfiles'] = $key->Profiles->getName();
            } else {
                $plan['profiles_idProfiles'] = '';
            }

            $aux[] = $plan;
        }
        echo json_encode(array('data' => $aux));
    }

    public function deleteAction($id)
    {
        $plan = Plan::findByIdPlan($id);
        $return = $plan->delete();
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
                ->addJs('js/system/plan/form.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('fonts/icomoon/icomoon.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='plan/form';
        $data['save'] = 1;
        if (is_numeric($id)) {
            $plan = Plan::findFirstByIdPlan($id);
        } else {
            $plan = new Plan();
        }
        $data['plan'] = $plan->getIdPlan();
        $form = new PlanForm($plan);

        $countForm = 0;

        if ($plan->Plantable->valid()) {
            foreach ($plan->Plantable as $planTable) {
                $planTableList[$countForm] = new PlantableForm($planTable, $countForm);
                $countForm++;
            }
        } else {
            $planTable = new Plantable();
            $planTableList[$countForm] = new PlantableForm($planTable, $countForm);
        }


        if ($this->request->isPost() == true) {
            $auxPlan = $this->request->getPost('plan');
            $form->bind($auxPlan, $plan);

            $planTableList = array();
            $planTableObj = array();
            $countRequest = 0;
            foreach ($this->request->getPost('plantable') as $planTableForm) {
                $planTableObj[$countRequest] = new Plantable;
                $planTableList[$countRequest] = new PlantableForm($planTableObj[$countRequest], $countRequest);
                $planTableList[$countRequest]->bind($planTableForm, $planTableObj[$countRequest]);

                if ($planTableList[$countRequest]->isValid()) {
                    $planTableObj[$countRequest]->setPlanIdplan($plan->getIdPlan());
                    $countRequest++;
                } else {
                    $error = 1;
                }
            }

            if ($form->isValid()) {
                if ($error === 0) {
                    $plan->Plantable->delete();
                    $plan->Plantable = $planTableObj;

                    if ($plan->save()) {
                        $this->flash->success("Plano salvo com sucesso!");
                    } else {
                        $this->flash->error("Ocorreu erro ao salvar!");
                    }
                } else {
                    $this->flash->error("Ocorreu erro ao salvar!");
                }
            }
        }

        foreach ($planTableList as $key) {
            $data['planTable'][] = $key->forms();
        }

        $data['forms'] = $form->forms();
        $data['ajax'] = false;
        echo $this->output('static/base', $data);
    }

    public function addPlantableAction($position)
    {
        $planTable = new Plantable();
        $planTableForm = new PlantableForm($planTable, $position);
        $data['ajax'] = true;
        $data['planTable'][] = $planTableForm->forms();
        echo $this->output('plan/planTable', $data);
    }
}
