<?php
namespace App\Controllers;

use Phalcon\Mvc\View;
use Phalcon\Http\Response;
//controllers
use App\Controllers\BaseController as BaseController;
//models
use App\Models\Simulated as Simulated;
use App\Models\UserHasSimulated as UserHasSimulated;
use App\Models\User as User;
//view
use App\Forms\SimulatedSeachForm as SimulatedSeachForm;

//paginator builder
use Phalcon\Paginator\Adapter\Model as PaginatorModel;
use Phalcon\Paginator\Adapter\NativeArray as PaginatorArray;
use Phalcon\Paginator\Adapter\QueryBuilder as PaginatorQueryBuilder;

use App\Models\AreaOperation as AreaOperation;

class SimulatedController extends BaseController
{

    public function initialize()
    {
        $this->breadCrumbs[] = array('link'=>'simulated', 'text'=>'Simulado');
    }

    public function indexAction()
    {
        $this->breadCrumbs[] = array('link'=>'simulated', 'text'=>'Simulado');
        $data['bc'] = $this->breadCrumbs;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/datatables/media/js/jquery.dataTables.js')
                ->addJs('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')
                ->addJs('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/system/simulated/simulated.js');


        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='simulated/simulated';


        $form = new SimulatedSeachForm();
        $data['simulated'] =  Simulated::query();
        $data['simulated']->leftJoin('App\Models\UserHasSimulated', 'App\Models\UserHasSimulated.simulated_idSimulated = App\Models\Simulated.idSimulated');
        if ($this->request->get('filter') != '') {
            $data['simulated']->where('App\Models\Simulated.question != :question: AND App\Models\Simulated.areaOperation_idAreaOperation = :areaOperation_idAreaOperation: AND App\Models\UserHasSimulated.simulated_idSimulated IS NUll', array("question" => "", 'areaOperation_idAreaOperation' => $this->request->get('filter')));
        } else {
            $data['simulated']->where('App\Models\Simulated.question != :question: AND App\Models\UserHasSimulated.simulated_idSimulated IS NUll', array("question" => ""));
        }
        $data['simulated']->orderBy('RAND()');
        $data['simulated'] = $data['simulated']->execute();


        $page = $this->request->getQuery("page", "int");
        if ($page == 0) {
            $page = 1;
        }

        $paginator = new PaginatorModel(
            array(
                "data"  => $data['simulated'],
                "limit" => 10,
                "page"  => $page
                )
        );

        $data['simulated'] = $paginator->getPaginate();


        $data['forms'] = $form->forms();
        echo $this->output('static/base', $data);
    }

    public function historyAction()
    {
        $this->breadCrumbs[] = array('link'=>'history', 'text'=>'Histórico');
        $data['bc'] = $this->breadCrumbs;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/datatables/media/js/jquery.dataTables.js')
                ->addJs('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')
                ->addJs('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/system/simulated/simulated.js');


        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='simulated/history';


        $form = new SimulatedSeachForm();
        $data['simulated'] =  Simulated::query();
        $data['simulated']->leftJoin('App\Models\UserHasSimulated', 'App\Models\UserHasSimulated.simulated_idSimulated = App\Models\Simulated.idSimulated');
        if ($this->request->get('filter') != '') {
            $data['simulated']->where('App\Models\Simulated.question != :question: AND App\Models\Simulated.areaOperation_idAreaOperation = :areaOperation_idAreaOperation: AND App\Models\UserHasSimulated.simulated_idSimulated IS NOT NUll', array("question" => "", 'areaOperation_idAreaOperation' => $this->request->get('filter')));
        } else {
            $data['simulated']->where('App\Models\Simulated.question != :question: AND App\Models\UserHasSimulated.simulated_idSimulated IS NOT NUll', array("question" => ""));
        }
        $data['simulated']->orderBy('App\Models\UserHasSimulated.created desc');
        $data['simulated'] = $data['simulated']->execute();

        $data['forms'] = $form->forms();
        echo $this->output('static/base', $data);
    }

    public function computingAction()
    {
        $name = $this->request->getPost('name');
        $selected = $this->request->getPost('selected');
        $id = trim(str_ireplace('radio_', '', $name));
        $data['simulated'] =  Simulated::findFirstByIdSimulated($selected);
        $session = $this->session->get('auth-identity');
        if (!empty($session['id'])) {
            $UserHasSimulated = new UserHasSimulated();
            $UserHasSimulated->setUserIduser($session['id']);
            $UserHasSimulated->setSimulatedIdsimulated($data['simulated']->getSimulatedIdsimulated());
            $UserHasSimulated->setAnswer($selected);
            $UserHasSimulated->setHit($data['simulated']->getRightanswer());
            $UserHasSimulated->save();
        }
        if ($data['simulated']->getRightanswer() == 0) {
            $data['simulated'] = Simulated::findFirst(
                array(
                    "conditions" => 'rightAnswer = :rightAnswer: and simulated_idSimulated = :simulated_idSimulated:',
                    "bind" => array('rightAnswer' => 1,
                                    'simulated_idSimulated' => $id
                                    )
                )
            );
        }
        $data['return']['status'] = 1;
        $data['return']['answer'] = $data['simulated']->getIdSimulated();
        echo json_encode($data['return']);
    }
}
