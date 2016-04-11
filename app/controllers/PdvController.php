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

class PdvController extends BaseController
{


    public function indexAction()
    {
        $pdvService = new \App\Services\Pdv;

        if (!$pdvService->verificarCaixaAberto()) {
            $this->dispatcher->forward(array(
                'controller' => 'pdv',
                'action' => 'abrircaixa'
                ));
            return false;
            exit;
        }

        $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Dashboard');
        $data['bc'] = $this->breadCrumbs;

        $form = new \App\Forms\PdvForm();
        $formCliente = new \App\Forms\PdvEmpresaModalForm();

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('vendor/jquery.GlobalMoneyInput/jquery.glob.js')
                ->addJs('vendor/jquery.GlobalMoneyInput/jquery.GlobalMoneyInput.js')
                ->addJs('vendor/jquery.GlobalMoneyInput/globinfo/jQuery.glob.pt-BR.js')
                ->addJs('js/system/pdv/produtosPdv.js')
                ->addJs('js/system/pdv/abrirCaixaPdv.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='pdv/index';
        $data['busca'] = 1;
        $data['forms'] = $form->forms();
        $data['formsEmpresaModal'] = $formCliente->forms();

        $condPagto = \App\Models\CondPagto::find(array(
            "conditions" => "exibir_orcamento = :exibir: ",
            "bind" => array('exibir' => 1)
            ));


        foreach ($condPagto as $key) {
            $optionsPagto[] = $key->toArray();
        }

        $data['tipoPagto'] = $optionsPagto;

        echo $this->output('static/base', $data);

    }

    public function abrirCaixaAction()
    {
        $pdvService = new \App\Services\Pdv;
        if ($pdvService->verificarCaixaAberto()) {
            $this->dispatcher->forward(array(
                'controller' => 'pdv',
                'action' => 'index'
                ));
            return true;
            exit;
        }

        $this->breadCrumbs[] = array('link'=>'', 'text'=>'Dashboard');
        $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Pdv');
        $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Abrir caixa');
        $data['bc'] = $this->breadCrumbs;

        $form = new \App\Forms\PdvForm();

        if ($this->request->isPost() == true) {
            $sessao = $this->auth->getIdentity();
            $pdvCaixa = new \App\Models\PdvCaixa();
            $pdvCaixa->setSaldoTroco($this->request->getPost('caixa'));
            $pdvCaixa->setCdUsuario($sessao['id']);
            $pdvCaixa->setCdUnidade($sessao['unidade']);
            $pdvCaixa->setDataAbertura(date("Y-m-d H:i:s"));
            if ($pdvCaixa->save()) {
                $this->dispatcher->forward(array(
                    'controller' => 'pdv',
                    'action' => 'index'
                    ));
                return true;
                exit;
            } else {
                foreach ($pdvCaixa->getMessages() as $message) {
                    echo $message, "\n";
                }
            }
        }

        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/datatables/media/js/jquery.dataTables.js')
                ->addJs('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')
                ->addJs('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('vendor/jquery.GlobalMoneyInput/jquery.glob.js')
                ->addJs('vendor/jquery.GlobalMoneyInput/jquery.GlobalMoneyInput.js')
                ->addJs('vendor/jquery.GlobalMoneyInput/globinfo/jQuery.glob.pt-BR.js')
                ->addJs('js/system/pdv/produtosPdv.js')
                ->addJs('js/system/pdv/abrirCaixaPdv.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='pdv/abrirCaixa';
        $data['busca'] = 1;
        $data['forms'] = $form->forms();
        $data['dataAbertura'] = date('d-m-Y');
        $data['hideMenu'] = 1;
        $data['sessao'] = $this->auth->getIdentity();

        echo $this->output('static/base', $data);

    }

    public function buscarDadosClienteAction()
    {
        $cliente = \App\Models\Empresa::find(array(
            "conditions" => 'REPLACE( REPLACE( REPLACE( \App\Models\Empresa.cpfCnpj ,".",""),"-",""),"/","") = :cpfCnpj:',
            "bind" => array('cpfCnpj' => $this->request->getPost('cpf')),
            'limit' => 1
        ));

        if ($cliente->valid()) {
            $dados['status'] = true;
            $dados['data'] = $cliente[0]->toArray();
            if ($cliente[0]->Endereco->valid()) {
                $dados['end'] = $cliente[0]->Endereco[0]->toArray();
            }

        } else {
            $dados['status'] = false;
        }
        echo json_encode($dados);
    }

    public function buscarCepAction()
    {
        $inputCep = $this->request->getPost('cep');

        $cep = \App\Models\Logradouros::findFirstByCep($inputCep);

        if ($cep) {
            $pattern = '/(-000)/';
            preg_match($pattern, $inputCep, $matches);
            $cepUnico = (count($matches) > 0);
            $dados['cepUnico'] = $cepUnico;

            $dados['end']['rua'] = $cep->getLogradouro();
            if ($cep->Bairros) {
                $dados['end']['bairro'] = $cep->Bairros->getDescricao();

                if ($cep->Bairros->Cidades) {
                    $dados['end']['cidade'] = $cep->Bairros->Cidades->getDescricao();

                    if ($cep->Bairros->Cidades->Uf) {
                        $dados['end']['uf'] = $cep->Bairros->Cidades->Uf->getSigla();
                    }
                }
            }
            $dados['status'] = true;
        } else {
            $dados['status'] = false;
            $dados['msg'] = 'Cep não encontrado';
        }

        echo json_encode($dados);

    }

    public function finalizarVendaAction()
    {
        $venda = new \App\Services\Pdv();
        if ($venda->finalizarVenda($erro)) {
            $retorno['status'] = true;
            $retorno['nfe'] = 123;
        } else {
            $retorno['status'] = false;
            $retorno['erro'] = $erro;
        }
        echo json_encode($retorno);
        return true;
    }
}
