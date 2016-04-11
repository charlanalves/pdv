<?php
namespace App\Controllers;

use Phalcon\Mvc\View;
use Phalcon\Http\Response;
//controllers
use App\Controllers\BaseController as BaseController;
//models
use App\Models\Job as Job;
use App\Models\JobHasUser as JobHasUser;
use App\Models\User as User;
use App\Models\Address as Address;
use App\Models\Jobcontract as Jobcontract;
//views
use App\Forms\JobForm as JobForm;
use App\Forms\JobSearchForm as JobSearchForm;
use App\Forms\AddressForm as AddressForm;
//paginator builder
use Phalcon\Paginator\Adapter\Model as PaginatorModel;
use Phalcon\Paginator\Adapter\NativeArray as PaginatorArray;
use Phalcon\Paginator\Adapter\QueryBuilder as PaginatorQueryBuilder;

class JobController extends BaseController
{

    public function initialize()
    {
        $this->breadCrumbs[] = array('link'=>'job', 'text'=>'Vagas');
    }

    public function indexAction()
    {
        $this->breadCrumbs[] = array('link'=>'job', 'text'=>'Listagem');
        $data['bc'] = $this->breadCrumbs;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/datatables/media/js/jquery.dataTables.js')
                ->addJs('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')
                ->addJs('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/system/job/job.js');


        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $data['new'] = 1;

        $error = 0;
        $data['page'] ='job/list';

        echo $this->output('static/base', $data);

    }

    public function listAction()
    {
        $data['job'] = Job::find(array(
                "conditions" => 'deleted = :deleted:',
                "bind" => array('deleted' => 0)
            ));

        foreach ($data['job'] as $key) {
            $aux = $key->toArray();
            switch (mb_strtoupper($aux['status'])) {
                case 'E':
                    $aux['status'] = 'Ativo';
                    break;
                case 'D':
                    $aux['status'] = 'Finalizada';
                    break;
                case 'S':
                    $aux['status'] = 'Suspenso';
                    break;
                default:
                    $aux['status'] = 'Novo';
                    break;
            }
            $aux['user_idUser'] = $key->User->getName();
            $aux['jobContract_idJobContract'] = $key->JobContract->getDescription();

            if (!empty($aux['created'])) {
                $date = \DateTime::createFromFormat("Y-m-d H:i:s", $aux['created']);
                $aux['created'] = $date->format('d-m-Y H:i:s');
            }
            if (!empty($aux['modified'])) {
                $date = \DateTime::createFromFormat("Y-m-d H:i:s", $aux['modified']);
                $aux['modified'] = $date->format('d-m-Y H:i:s');
            }
            $jobs[] = $aux;
        }
        echo json_encode(array('data' => $jobs));
    }

    public function deleteAction($id)
    {
        $job = Job::findByIdJob($id);
        $return = $job->delete();
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
                ->addJs('js/system/job/form.js')
                ->addJs('vendor/editors/summernote/summernote.min.js')
                ->addJs('vendor/plugins/tagmanager/tagmanager.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('fonts/icomoon/icomoon.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css')
                ->addCss('vendor/editors/summernote/summernote.css')
                ->addCss('vendor/editors/summernote/summernote-bs3.css')
                ->addCss('vendor/plugins/tagmanager/tagmanager.css');

        $error = 0;
        $data['page'] ='job/form';
        if (is_numeric($id)) {
            $job = Job::findFirstByIdJob($id);
        } else {
            $job = new Job();
        }
        $data['job'] = $job->getIdJob();
        $job->setPassword(null);
        $form = new JobForm($job);
        $countForm = 0;

        $data['save'] = 1;

        if (is_object($job->Address)) {
            $address = $job->Address;
        } else {
            $address = new Address();
        }

        $addressList = new AddressForm($address, $countForm);

        if ($this->request->isPost() == true) {
            $postJob = $this->request->getPost('job');
            $aux = $this->request->getPost('hidden-job');

            $postJob['operationalArea'] = $aux['operationalArea'];
            if (!isset($postJob['confidential'])) {
                $postJob['confidential'] = 0;
            }
            if (!isset($postJob['expectedSalary'])) {
                $postJob['expectedSalary'] = 0;
            }

            $form->bind($postJob, $job);
            if ($form->isValid()) {
                $formAux = $this->request->getPost('job');
                $countRequest = 0;
                $addressAux = $this->request->getPost('address');
                $AddressObj = new Address;
                $addressList = new AddressForm($AddressObj, $countRequest);
                $addressList->bind($addressAux[0], $AddressObj);

                if (!$addressList->isValid()) {
                    $error = 1;
                }

                if ($error === 0) {
                    if ($job->Address) {
                        $job->Address->delete();
                    }
                    $job->Address = $AddressObj;
                    $job->setDeleted(0);
                    $job->setUserIduser(1);
                    if ($job->save()) {
                        $this->flash->success("Vaga salva com sucesso!");
                    } else {
                        $this->flash->error("Ocorreu erro ao salvar!");
                    }
                }
            }
        }
        $data['forms'] = $form->forms();
        $data['address'][] = $addressList->forms();

        echo $this->output('static/base', $data);
    }

    public function searchJobAction()
    {
        $this->assets
            ->collection('css_before')
            ->addCss('vendor/plugins/magnific/magnific-popup.css')
            ->addCss('admin-tools/admin-forms/css/admin-forms.css')
            ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
            ->addCss('fonts/icomoon/icomoon.css')
            ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $this->assets
            ->collection('system')
            ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
            ->addJs('js/jquery.meio.mask.js')
            ->addJs('js/system/job/details.js');


        $this->breadCrumbs[0] = array('link'=>'', 'text'=>'Dashboard');
        $this->breadCrumbs[1] = array('link'=>'job/searchJob', 'text'=>'Buscar Vagas');
        $data['bc'] = $this->breadCrumbs;
        $data['page'] ='job/searchJob';

        $aFilter = array(
        'conditions' => 'App\Models\Job.deleted = :deleted:
                         AND ( App\Models\Job.status = :status:
                         OR App\Models\Job.status = :status2: )',
        'bind' => array(
                'deleted' => 0,
                'status' => 'E',
                'status2' => 'D'
            ),
        'order' => ' App\Models\Job.status asc, App\Models\Job.created DESC',
        );

        $defaults = array();
        $office = $this->request->getQuery("office", "string");
        if (!empty($office)) {
            $defaults['office'] = $office;
            $aFilter['conditions'] .= ' AND ( App\Models\Job.office like :office:
                                       OR App\Models\Job.description like :office:
                                       OR App\Models\User.name like :office: ) ';
            $aFilter['bind']['office'] = '%'.$office.'%';
        }

        $location = $this->request->getQuery("location", "string");
        if (!empty($location)) {
            $defaults['location'] = $location;
            $aFilter['conditions'] .= ' AND ( App\Models\Address.state like :location:
                                       OR App\Models\Address.city like :location: ) ';
            $aFilter['bind']['location'] = '%'.$location.'%';
        }

        $area = $this->request->getQuery("area", "string");
        if (!empty($area)) {
            $defaults['area'] = $area;
            $aFilter['conditions'] .= ' AND App\Models\Job.operationalArea like :area: ';
            $aFilter['bind']['area'] = '%'.$area.'%';
        }

        $contract = $this->request->getQuery("contract", "int");
        if (!empty($contract)) {
            $defaults['contract'] = $contract;
            $aFilter['conditions'] .= ' AND App\Models\Job.jobContract_idJobContract = :contract: ';
            $aFilter['bind']['contract'] = $contract;
        }


        $this->tag->setDefaults($defaults);
        $data['job'] = Job::search($aFilter);

        $page = $this->request->getQuery("page", "int");
        if ($page == 0) {
            $page = 1;
        }


        $paginator = new PaginatorModel(
            array(
                "data"  => $data['job'],
                "limit" => 10,
                "page"  => $page
                )
        );

        $data['job'] = $paginator->getPaginate();
        foreach ($data['job']->items as $key) {
            $key->setDescription($this->textLimit($key->getDescription(), 300, '<br><br/><p><ul><li><ol><bold><strong>'));
            $item[] = $key;
        }

        $data['job']->items = $item;

        $form = new JobSearchForm();
        $data['forms'] = $form->forms();

        $data['urlQuery'] = $defaults;

        $data['__FACEBOOK_SHARE__']  = __FACEBOOK_SHARE__;
        $data['__TWITTER_SHARE__']   = __TWITTER_SHARE__;
        $data['__GOOGLE_SHARE__']    = __GOOGLE_SHARE__;
        $data['__LINKEDIN_SHARE__']  = __LINKEDIN_SHARE__;
        $data['__PINTEREST_SHARE__'] = __PINTEREST_SHARE__;
        $data['host'] = $_SERVER['HTTP_HOST'];

        echo $this->output('static/base', $data);
    }

    public function textLimit($text, $limit, $strip = '')
    {
        if ($strip) {
            $text = strip_tags($text, $strip);
        }

        if (strlen($text) >= $limit) {
            $text = substr($text, 0, strrpos(substr($text, 0, $limit), ' ')) . '...';
        }

        return $text;
    }

    public function detailsJobAction($title = '')
    {
        if (!empty($title)) {
            $id = explode('-', $title);
            $id = end($id);
        }

        $data['job'] = Job::findFirst(array(
            "conditions" => 'deleted = :deleted: and idJob = :idJob:',
            "bind" => array('deleted' => 0, 'idJob' => $id)
        ));

        $data['save'] = 0;

        $this->breadCrumbs[0] = array('link'=>'', 'text'=>'Dashboard');
        $this->breadCrumbs[1] = array('link'=>'job/searchJob', 'text'=>'Buscar Vagas');
        $this->breadCrumbs[2] = array('link'=>'job/searchJob/'.$data['job']->getOffice().'-'.$data['job']->getIdJob(), 'text'=> $data['job']->getOffice());
        $data['bc'] = $this->breadCrumbs;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/jquery.meio.mask.js')
                ->addJs('js/system/job/details.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $defaults = array();
        $office = $this->request->getQuery("office", "string");
        $defaults['office'] = $office;
        $location = $this->request->getQuery("location", "string");
        $defaults['location'] = $location;
        $area = $this->request->getQuery("area", "string");
        $defaults['area'] = $area;
        $contract = $this->request->getQuery("contract", "int");
        $defaults['contract'] = $contract;

        $error = 0;
        $aux = $data['job']->toArray();
        switch (mb_strtoupper($aux['status'])) {
            case 'E':
                $aux['status2'] = 'Ativo';
                break;
            case 'D':
                $aux['status2'] = 'Finalizada';
                break;
            case 'S':
                $aux['status2'] = 'Suspenso';
                break;
            default:
                $aux['status2'] = 'Novo';
                break;
        }
        $aux['user_idUser'] = $data['job']->User->getName();
        $aux['jobContract_idJobContract'] = $data['job']->JobContract->getDescription();

        if (!empty($aux['created'])) {
            $date = \DateTime::createFromFormat("Y-m-d H:i:s", $aux['created']);
            $aux['created'] = $date->format('d-m-Y H:i:s');
        }
        if (!empty($aux['modified'])) {
            $date = \DateTime::createFromFormat("Y-m-d H:i:s", $aux['modified']);
            $aux['modified'] = $date->format('d-m-Y H:i:s');
        }

        $aux['address'] = $data['job']->Address->toArray();
        $aux['JobHasUser'] = $data['job']->JobHasUser->toArray();
        $data['job'] = $aux;

        $form = new JobSearchForm();
        $data['forms'] = $form->forms();

        $data['page'] ='job/detailsJob';

        $data['__FACEBOOK_SHARE__']  = __FACEBOOK_SHARE__;
        $data['__TWITTER_SHARE__']   = __TWITTER_SHARE__;
        $data['__GOOGLE_SHARE__']    = __GOOGLE_SHARE__;
        $data['__LINKEDIN_SHARE__']  = __LINKEDIN_SHARE__;
        $data['__PINTEREST_SHARE__'] = __PINTEREST_SHARE__;
        $data['host'] = $_SERVER['HTTP_HOST'];

        echo $this->output('static/base', $data);
    }

    public function sendCvAction()
    {
        $id = $this->request->getPost('id');

        if (empty($id)) {
            $data['status'] = 0;
            $data['msg'] = 'Vaga não informada, caso ocorra novamente entre em contato com suporte.';
            echo json_encode($data);
            exit;
        }
        $session = $this->session->get('auth-identity');
        if (empty($session['id'])) {
            $data['status'] = 0;
            $data['msg'] = 'Usuário não identificado, caso ocorra novamente entre em contato com suporte.';
            echo json_encode($data);
            exit;
        }
        $job = Job::findFirstByIdJob($id);
        $expected = $job->getExpectedSalary();
        if ($expected) {
            $salary = $this->request->getPost('expectedSalary');
            if ((empty($salary)) || ($salary == '0,00')) {
                $data['status'] = 0;
                $data['msg'] = 'Obrigatorio o preenchimento da pretenção salarial.';
                echo json_encode($data);
                exit;
            }
        }

        $curriculum = User::findFirstByIdUser($session['id']);
        $percentual = 0;
        $total = 0;
        $address = $curriculum->Address->toArray();
        foreach ($address as $key) {
            foreach ($key as $k) {
                if (!empty($key)) {
                    $percentual++;
                }
                $total++;
            }
        }
        $Documents = $curriculum->Documents->toArray();
        foreach ($Documents as $key) {
            foreach ($key as $k) {
                if (!empty($key)) {
                    $percentual++;
                }
                $total++;
            }
        }
        $Additional = $curriculum->Additional->toArray();
        foreach ($Additional as $key) {
            foreach ($key as $k) {
                if (!empty($key)) {
                    $percentual++;
                }
                $total++;
            }
        }
        $Course = $curriculum->Course->toArray();
        foreach ($Course as $key) {
            foreach ($key as $k) {
                if (!empty($key)) {
                    $percentual++;
                }
                $total++;
            }
        }
        $Academic = $curriculum->Academic->toArray();
        foreach ($Academic as $key) {
            foreach ($key as $k) {
                if (!empty($key)) {
                    $percentual++;
                }
                $total++;
            }
        }
        $Professionalhistory = $curriculum->Professionalhistory->toArray();
        foreach ($Professionalhistory as $key) {
            foreach ($key as $k) {
                if (!empty($key)) {
                    $percentual++;
                }
                $total++;
            }
        }
        $Contact = $curriculum->Contact->toArray();
        foreach ($Contact as $key) {
            foreach ($key as $k) {
                if (!empty($key)) {
                    $percentual++;
                }
                $total++;
            }
        }

        $percent = ($percentual*100)/$total;

        if ($percent < 60) {
            $data['status'] = 0;
            $data['msg'] = 'Favor preencher seu curriculo.';
            $data['btn'] = '<div style="text-align:center">
                                </br />
                                <a href="/curriculum/" class="btn btn-system">Preencher Currículo</a>
                            </div>';
            echo json_encode($data);
            exit;
        }

        if ($session['plan'] < 2) {
            $today = date('Y-m-d 23:59:59');
            $lastWeek = date('Y-m-d 00:00:00', strtotime("-7 days"));

            $JobHasUser = JobHasUser::find(array(
                                "conditions" => 'created between :lastWeek:  and :today:',
                                "bind" => array('lastWeek' => $lastWeek, 'today' => $today)
                            ));

            if (count($JobHasUser)) {
                $data['status'] = 0;
                $data['msg'] = 'O limite de envios de currículo no plano Grátis é de 1 envio por semana.
                                Assine um de nossos planos Premium e tenha envios ilimitados durante a vigência do plano.';
                    $data['btn'] = '<div style="text-align:center">
                                </br />
                                <a href="/plan/" class="btn btn-system">Assinar premium</a>
                            </div>';
                echo json_encode($data);
                exit;
            }
        }

        $job = new JobHasUser;
        $job->setJobidjob($id);
        $job->setUserIduser($session['id']);
        if (($this->request->getPost('expectedSalary')) && ($this->request->getPost('expectedSalary') != '0,00')) {
            $salary = $this->request->getPost('expectedSalary');
            $salary = str_replace('.', '', $salary);
            $salary = str_replace(',', '.', $salary);
            $job->setExpectedSalary($salary);
        }
        if ($job->save()) {
            $data['status'] = 1;
            $data['msg'] = 'Cadastrado com sucesso.';
            echo json_encode($data);
            exit;
        }

        $data['status'] = 0;
        $data['msg'] = 'Erro ao enviar curriculo.';
        echo json_encode($data);
        exit;
    }
}
