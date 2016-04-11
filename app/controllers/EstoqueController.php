<?php
namespace App\Controllers;

use Phalcon\Mvc\View;
use Phalcon\Http\Response;
//controllers
use App\Controllers\BaseController as BaseController;
//models
use App\Models\User as User;
//views
use App\Services\Auth;
use App\Services\Estoque as estoqueService;
use Phalcon\Mvc\View\Simple as SimpleView;

class EstoqueController extends BaseController
{


    public function indexAction()
    {

        $dados = new estoqueService();
        $dados->arrumarEstoque();

        exit;
        $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Dashboard');
        $data['bc'] = $this->breadCrumbs;

        $form = new DashboardForm();

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

        $error = 0;
        $data['page'] ='dashboard/index';
        $data['forms'] = $form->forms();

        echo $this->output('static/base', $data);

    }

    public function recalcularEstoqueAction()
    {
        $dados = new estoqueService();
        $dados->recalcular();
    }
}
