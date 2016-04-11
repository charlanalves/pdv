<?php
namespace App\Controllers;

ini_set('memory_limit', '-1');

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

class EmailmarketingController extends BaseController
{

    public function indexAction($action = null, $id = null)
    {
        
        $this->breadCrumbs[] = array('link'=>'', 'text'=>'Dashboard');
        $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Email Marketing');
        $data['bc'] = $this->breadCrumbs;

        $form = new \App\Forms\EmailMarketingForm();

        $this->assets
                ->collection('system')
                ->addJs('vendor/DataTables/datatables.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('vendor/plugins/ladda/ladda.min.js')
                ->addJs('vendor/bootstrap-multiselect/dist/js/bootstrap-multiselect.js');

        if ($action == 'gerencia') {
            $this->assets
                ->collection('system')
                ->addJs('js/system/emailMarketing/grid.js');
                 $data['new'] = 1;
        } else {
            $this->assets
                ->collection('system')
                ->addJs('js/system/emailMarketing/gridVisualizacao.js');
                 $data['new'] = 0;
        }
                

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/DataTables/datatables.min.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css')
                ->addCss('vendor/plugins/ladda/ladda.min.css');

        $data['hideMenu'] = 1;

        $error = 0;
        $data['page'] ='emailMarketing/list';

        $data['forms'] = $form->forms();

        echo $this->output('static/base', $data);
    }

    public function formAction($id = null)
    {
        $this->breadCrumbs[] = array('link'=>'', 'text'=>'Dashboard');
        $this->breadCrumbs[] = array('link'=>'emailmarketing/index/gerencia', 'text'=>'Email Marketing');
        $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Criar Email Marketing');
        $data['bc'] = $this->breadCrumbs;

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('vendor/summernote/dist/summernote.js')
                ->addJs('js/system/emailMarketing/criarLayoutEmail.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('vendor/summernote/dist/summernote.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='emailMarketing/criarLayoutEmail';

        $data['save'] = 1;
        $data['back'] = 1;
        $data['hideMenu'] = 1;


        if (is_numeric($id)) {
            $emailMarketing = \App\Models\MktTemplates::find(array(
                      'conditions' => 'cd_template = :cd_template: AND deletado != :deletado:',
                      'bind' => array('deletado' => 1,
                                      'cd_template' => $id)
                      ));
            if ($emailMarketing->valid()) {
                $emailMarketing = $emailMarketing[0];
            } else {
                $emailMarketing = new \App\Models\MktTemplates();
            }
        } else {
            $emailMarketing = new \App\Models\MktTemplates();
        }
        $data['cdTemplate'] = $emailMarketing->getCdTemplate();

        $form = new \App\Forms\EmailMarketingForm($emailMarketing);

        if ($this->request->isPost() == true) {
            $sessao = $this->auth->getIdentity();
            $emailMarketing->setCdUnidade($sessao['unidade']);
            $dados = $this->request->getPost();
            if (!isset($dados['privado'])) {
                $dados['privado'] = 0;
            }
            $form->bind($dados, $emailMarketing);
            if ($form->isValid()) {
                if ($emailMarketing->save()) {
                    $this->flash->success("Salvo com sucesso!");
                } else {
                    foreach ($emailMarketing->getMessages() as $message) {
                        $error .=  "\n".$message. "\n";
                    }
                    $this->flash->error("Ocorreu erro ao salvar! ".$error);
                }
            }
        }
        $data['forms'] = $form->forms();
        echo $this->output('static/base', $data);

    }

    public function listAction($gerencia = null)
    {
        $sessao = $this->auth->getIdentity();

        $conditions = 'deletado != :deletado:';
        $bind['deletado'] = 1;

        if (is_null($gerencia)) {
            $conditions .= ' AND (privado != :privado: or cd_unidade = :unidade:)';
            $bind['privado'] = 1;
            $bind['unidade'] = $sessao['unidade'];
        }

        $data['emailMarketing'] = \App\Models\MktTemplates::find(array(
                  'conditions' => $conditions,
                  'bind' => $bind
                  ));
        $emails = array();
        foreach ($data['emailMarketing'] as $key) {
            $aux = $key->toArray();

            if (!empty($aux['criado'])) {
                $date = \DateTime::createFromFormat("Y-m-d H:i:s", $aux['criado']);
                $aux['criado'] = $date->format('d-m-Y H:i:s');
            }
            if (!empty($aux['modificado'])) {
                $date = \DateTime::createFromFormat("Y-m-d H:i:s", $aux['modificado']);
                $aux['modificado'] = $date->format('d-m-Y H:i:s');
            }
            $emails[] = $aux;
        }
        echo json_encode(array('data' => $emails));
    }

    public function deleteAction($id)
    {
        $email = \App\Models\MktTemplates::findByCdTemplate($id);
        $return = $email->delete();
        if ($return) {
            $msg = 'Deletado com sucesso';
        } else {
            $msg = 'Ocorreu um erro ao deletar o registro';
        }

        echo json_encode(array('data' => $return, 'msg' => $msg));
    }

    public function buscarCidadePorEstadoAction($uf = false)
    {
        $msg = '';
        if ($uf == false) {
            $msg = 'Nenhum Registro encontrado';
            echo json_encode(array('data' => false, 'msg' => $msg));
            exit;
        }
        $data = \App\Models\Orcamento::find(array(
                "conditions" => "email != :email: AND end_uf = :uf:",
                "bind" => array('email' => '',
                                'uf' => $uf),
                "group" => 'end_cidade',
                'order' => 'end_cidade asc'
            ));
        $aux = '';
        $data = $data->toArray();
        foreach ($data as $key) {
            if (!empty($key["end_cidade"])) {
                $aux .= "<option value='{$key["end_cidade"]}'>{$key["end_cidade"]}</option>";
            }
        }
        echo json_encode(array('data' => $aux, 'msg' => $msg, 'status' => true));
    }

    public function enviarEmailMarketingAction()
    {
        $emailsEnviado = 0;
        $email = $this->request->getPost('email');
        $cidades = $this->request->getPost('cidade');
        $template = $this->request->getPost('template');
        $sessao = $this->auth->getIdentity();
        $unidade = $sessao['unidade'];
        $adicional['unidade'] = $sessao['unidade'];

        $unidade = \App\Models\UnidadeNegocio::findFirstByCdUnidade($sessao['unidade']);

        if ($unidade != false) {
            $contatoEmail = $unidade->Empresa->getContatoEmpresa('tipo_contato_empresa = 1')->toArray();
            $adicional['enviadoPor'] = $contatoEmail[0]['email'];
            $adicional['responderPara']  = $contatoEmail[0]['email'];
        }

        if (empty($email) && empty($cidade) && empty($template)) {
            echo json_encode(array('data' => null, 'msg' => 'Nenhum email foi enviado.', 'status' => false));
            exit;
        }

        $emailMarketing = \App\Models\MktTemplates::find(array(
                  'conditions' => 'deletado != :deletado: and cd_template = :template:',
                  'bind' => array('deletado' => 1,
                                  'template' => $template
                                  )
                  ));

        if ($emailMarketing->valid()) {
            $emailMarketing = $emailMarketing[0];
        } else {
            echo json_encode(array('data' => null, 'msg' => 'Modelo de email invalido.', 'status' => false));
            exit;
        }

        $serviceEmailMarketing = new \App\Services\EmailMarketing();
        if (!empty($email)) {
            $emails = explode(';', $email);
            foreach ($emails as $email) {
                if ($serviceEmailMarketing->comporEmailMarketing($emailMarketing, $email, $adicional)) {
                    $emailsEnviado++;
                }
            }
        }
        if (is_array($cidades)) {
            foreach ($cidades as $cidade) {
                if (!empty($cidade)) {
                    $data = \App\Models\Orcamento::find(array(
                            "conditions" => "email != :email: AND end_cidade = :cidade:",
                            "bind" => array('email' => '',
                                            'cidade' => $cidade)
                        ));
                    foreach ($data as $key) {
                        if (!empty($key->getEmail())) {
                            $adicional['nome'] = $key->getNome();
                            if ($key->Empresa->valid()) {
                                $adicional['empresa'] = $key->Empresa->toArray();
                            }
                            if ($serviceEmailMarketing->comporEmailMarketing($emailMarketing, $key->getEmail(), $adicional)) {
                                $emailsEnviado++;
                            }
                        }
                    }
                }
            }
        }
        switch ($emailsEnviado) {
            case 0:
                $msg = 'Email invalido';
                echo json_encode(array('data' => $emailsEnviado, 'msg' => $msg, 'status' => false));
                exit;
                break;
            case 1:
                $msg = 'Foi enviado 1 email';
                break;
            default:
                $msg = 'Foram enviados '.$emailsEnviado.' emails';
                break;
        }
        echo json_encode(array('data' => $emailsEnviado, 'msg' => $msg, 'status' => true));
        return true;
    }

    public function buscarHistoricoEmailEnviadoAction()
    {
        $serviceEmailMarketing = new \App\Services\EmailMarketing();
        $serviceEmailMarketing->buscarHistoricoEmailEnviado();
    }

    public function historicoAction($id = null)
    {

        $this->breadCrumbs[] = array('link'=>'', 'text'=>'Dashboard');
        $this->breadCrumbs[] = array('link'=>'emailmarketing', 'text'=>'Email Marketing');
        $sessao = $this->auth->getIdentity();

        $conditions = "cd_template = :template: and deletado != :deletado: and (cd_unidade = :unidade: or privado != :privado:)";
        $bind['template'] = $id;
        $bind['deletado'] = 1;
        $bind['privado'] = 1;
        $bind['unidade'] = $sessao['unidade'];
        $data['back'] = 1;

        $template = \App\Models\MktTemplates::find(array(
                "conditions" => $conditions,
                "bind" => $bind
            ));

        $this->assets
                ->collection('system')
                ->addJs('vendor/DataTables/datatables.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('vendor/plugins/ladda/ladda.min.js')
                ->addJs('vendor/bootstrap-multiselect/dist/js/bootstrap-multiselect.js')
                ->addJs('js/system/emailMarketing/historico.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/DataTables/datatables.min.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css')
                ->addCss('vendor/plugins/ladda/ladda.min.css');

        $data['new'] = 0;
        $data['hideMenu'] = 1;
        if (!$template->valid()) {
            $template = new \App\Models\MktTemplates();
        } else {
            $template = $template[0];
        }

        $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Historico');
        $data['bc'] = $this->breadCrumbs;

        $data['modelo'] = $template->getNome();
        $data['id'] = $template->getCdTemplate();

        $error = 0;
        $data['page'] ='emailMarketing/historico';


        echo $this->output('static/base', $data);
    }

    public function historicoGridAction($id = null)
    {
        $sessao = $this->auth->getIdentity();
        $template = \App\Models\MktHistorico::find(array(
                "conditions" => "cd_template = :template: and cd_unidade = :unidade:",
                "bind" => array ('template' => $id,
                                 'unidade' => $sessao['unidade']),
                "order" => 'enviado desc, email desc'
            ));
        $historico = array();
        if ($template->valid()) {
            $historico = array();
            foreach ($template as $key) {
                $aux = $key->toArray();

                $aux['lido'] = ($aux['lido'] > 0) ? 'Sim' : 'Não';
                $aux['clique'] = ($aux['clique'] > 0) ? 'Sim' : 'Não';

                switch ($aux['status']) {
                    case 'sent':
                        $aux['status'] = 'Enviado';
                        $aux['class'] = 'enviado';
                        break;
                    case 'queued':
                        $aux['status'] = 'Aguardando envio';
                        $aux['class'] = 'aguardando';
                        break;
                    case 'scheduled':
                        $aux['status'] = 'Envio agendado';
                        $aux['class'] = 'aguardando';
                        break;
                    case 'rejected':
                        $aux['status'] = 'Email rejeitado';
                        $aux['class'] = 'invalido';
                        break;
                    case 'invalid':
                        $aux['status'] = 'Email invalido';
                        $aux['class'] = 'invalido';
                        break;
                    default:
                        $aux['status'] = 'Email rejeitado';
                        $aux['class'] = 'invalido';
                        break;
                }

                if (!empty($aux['enviado'])) {
                    $date = \DateTime::createFromFormat("Y-m-d H:i:s", $aux['enviado']);
                    $aux['enviado'] = $date->format('d-m-Y H:i:s');
                }
                if (!empty($aux['modificado'])) {
                    $date = \DateTime::createFromFormat("Y-m-d H:i:s", $aux['modificado']);
                    $aux['modificado'] = $date->format('d-m-Y H:i:s');
                }
                $aux['actions'] = null;

                $historico[] = $aux;
            }
        }

        echo json_encode(array('data' => $historico));
    }

    public function visualizarModeloAction($id = null)
    {
        $this->breadCrumbs[] = array('link'=>'', 'text'=>'Dashboard');
        $this->breadCrumbs[] = array('link'=>'emailmarketing', 'text'=>'Email Marketing');
        $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Visualizar Modelo');
        $data['bc'] = $this->breadCrumbs;
        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('vendor/bootstrap-multiselect/dist/js/bootstrap-multiselect.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $data['back'] = 1;
        $sessao = $this->auth->getIdentity();

        $conditions = 'deletado != :deletado:';
        $bind['deletado'] = 1;
        $conditions .= ' AND (privado != :privado: or cd_unidade = :unidade:)';
        $bind['privado'] = 1;
        $bind['unidade'] = $sessao['unidade'];

        $email = \App\Models\MktTemplates::find(array(
                  'conditions' => $conditions,
                  'bind' => $bind
                  ));
        if ($email->valid()) {
            $data['email'] = $email[0];
        }

        $data['page'] ='emailMarketing/visualizarModelo';
        $data['hideMenu'] = 1;

        echo $this->output('static/base', $data);
    }
}
