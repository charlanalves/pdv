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
use Phalcon\Mvc\View\Simple as SimpleView;

use App\Forms\DashboardForm as DashboardForm;

use App\Services\Nfce as ServiceNfce;


class IndexController extends BaseController
{


    public function indexAction()
    {

        $this->dispatcher->forward(array(
                'controller' => 'emailmarketing',
                'action' => 'index'
                ));
        return false;
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
                ->addJs('js/system/dashboard/produtosDashboard.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')
                ->addCss('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css');

        $error = 0;
        $data['page'] ='dashboard/index';
        $data['busca'] = 1;
        $data['forms'] = $form->forms();

        echo $this->output('static/base', $data);
    }


        public function testeAction()
        {

            //include_once '../../bootstrap.php';

                    $arq = 'c:\exemploNFCe.xml';
            if (is_file($arq)) {
                    $docxml = file_get_contents($arq);
                            $danfe = new \NFePHP\Extras\Danfce($docxml, '../../images/logo.jpg', 0);
                    $id = $danfe->montaDANFE(false);
                            echo '<div style="width:300px">';
                    $teste = $danfe->printDANFE('html', $id.'.pdf', 'I');
                            echo '</div>';
            }
            exit();
        }
	
        public function gerarXmlAction($cdVenda)
        {  
           $nfce = new ServiceNfce();
           $retorno = $nfce->geraEnviarXml($cdVenda);
          $a = 1;
        }
        
   
        
        public function sefazEnviaLoteAction()
        {  
//           $nfce = new \Nfce();
//           $nfce->sefazEnviaLote();
            error_reporting(E_ALL);
            ini_set('display_errors', 'On');
    //        include_once '../../bootstrap.php';

            $nfe = new \NFePHP\NFe\ToolsNFe('c:\config.json');
            $nfe->setModelo('65');
           // $nfe->enableSVCAN = true;

            $aResposta = array();
           // $chave = '35150258716523000119550010000000091000000090';
            $tpAmb = '2';
            $aXml = file_get_contents("C:\assinadas\chave-nfe12.xml");
            $idLote = '';
            $indSinc = '0';
            $flagZip = false;
            $retorno = $nfe->sefazEnviaLote($aXml, $tpAmb, $idLote, $aResposta, $indSinc, $flagZip);
            echo '<br><br><PRE>';
            echo htmlspecialchars($nfe->soapDebug);
            echo '</PRE><BR>';
            print_r($aResposta);
            echo "<br>";
        }
        public function sefazConsultaLoteAction($recibo)
        {  
//           error_reporting(E_ALL);
            ini_set('display_errors', 'On');
            //include_once '../../bootstrap.php';

            

            $nfe = new \NFePHP\NFe\ToolsNFe('c:\config.json');
            $nfe->setModelo('65');

            $aResposta = array();
            $tpAmb = '2';
//            $recibo = '510000008035226';
            $retorno = $nfe->sefazConsultaRecibo($recibo, $tpAmb, $aResposta);
            echo '<br><br><PRE>';
            echo htmlspecialchars($nfe->soapDebug);
            echo '</PRE><BR>';
            print_r($aResposta);
            echo "<br>";
        }
        
        public function getImpostosIBPTAction() {
       
            $nfe = new \NFePHP\NFe\ToolsNFe('c:\config.json');
            $nfe->setModelo('55');
            $ncm = '60063100';
            $exTarif = '0';
            $siglaUF = 'MG';
            $resp = $nfe->getImpostosIBPT($ncm, $exTarif, $siglaUF);
            print '<pre>';
            print_r($resp);
            die;
         }

	public function gerarXmlNfceAction()
	{

        error_reporting(0);

        $nfe = new \NFePHP\NFe\MakeNFe;
        $tools = new \NFePHP\NFe\ToolsNFe('c:\config.json');

        //ide
        $cUF = '35';
        $cNF = '00000175';
        $natOp = 'Venda ao consumidor';
        $indPag = '0';
        $mod  = '65';
        $serie = '1';
        $nNF = '175';
        $dhEmi = str_replace(' ', 'T', date('Y-m-d H:i:sP'));
        $tpNF = '1';
        $idDest = '1';
        $cMunFG = '4314902';
        $tpImp = '4';
        $tpEmis = '2';
        $tpAmb = '2';
        $finNFe = '1';
        $indFinal = '1';
        $indPres = '1';
        $procEmi = '0';
        $verProc = '1.0.0';

        $cnpj = '58716523000119';
        $ano = date('Y');
        $mes = date('m');

        $chave = $nfe->montaChave($cUF, $ano, $mes, $cnpj, $mod, $serie, $nNF, $tpEmis, $cNF);
        //digito verificador
        $cDV = substr($chave, -1);

        $dhSaiEnt = str_replace(' ', 'T', date('Y-m-d H:i:sP'));
        $dhCont = '';
        $xJust = '';


        //tag infNFe
        $resp = $nfe->taginfNFe($chave, VERSAO_NOTA_FISCAL);
        //tag IDE
        $resp = $nfe->tagide(
            $cUF,
            $cNF,
            $natOp,
            $indPag,
            $mod,
            $serie,
            $nNF,
            $dhEmi,
            $dhSaiEnt,
            $tpNF,
            $idDest,
            $cMunFG,
            $tpImp,
            $tpEmis,
            $cDV,
            $tpAmb,
            $finNFe,
            $indFinal,
            $indPres,
            $procEmi,
            $verProc,
            $dhCont,
            $xJust
        );

        //Dados do emitente
        $CNPJ = '58716523000119';
        $CPF = '';
        $xNome = 'FIMATEC TEXTIL LTDA';
        $xFant = 'FIMATEC';
        $IE = '112006603110';
        $IEST = '';
        $IM = '95095870';
        $CNAE = '0131380';
        $CRT = '3';
        //tag emit
        $resp = $nfe->tagemit($CNPJ, $CPF, $xNome, $xFant, $IE, $IEST, $IM, $CNAE, $CRT);

        //endereÃ§o do emitente
        $xLgr = 'RUA DOS PATRIOTAS';
        $nro = '897';
        $xCpl = 'ARMAZEM 42';
        $xBairro = 'IPIRANGA';
        $cMun = '3550308';
        $xMun = 'Sao Paulo';
        $UF = 'SP';
        $CEP = '04207040';
        $cPais = '1058';
        $xPais = 'BRASIL';
        $fone = '1120677300';
        //tag enderEmit
        $resp = $nfe->tagenderEmit($xLgr, $nro, $xCpl, $xBairro, $cMun, $xMun, $UF, $CEP, $cPais, $xPais, $fone);

        //destinatÃ¡rio
        $CNPJ = '';
        $CPF = '60362219591';
        $idEstrangeiro = '';
        $xNome = 'Fulano de tal';
        $indIEDest = '9';
        $IE = '';
        $ISUF = '';
        $IM = '';
        $email = 'silvio@teixeira.com.br';
        //tag dest
        $resp = $nfe->tagdest($CNPJ, $CPF, $idEstrangeiro, $xNome, $indIEDest, $IE, $ISUF, $IM, $email);

        //EndereÃ§o do destinatÃ¡rio
        $xLgr = 'R. Tobias da Silva';
        $nro = '287';
        $xCpl = '';
        $xBairro = 'CENTRO';
        $cMun = '4314902';
        $xMun = 'Porto Alegre';
        $UF = 'RS';
        $CEP = '90570020';
        $cPais = '1058';
        $xPais = 'BRASIL';
        $fone = '4199007993';
        //tag enderDest
        $resp = $nfe->tagenderDest($xLgr, $nro, $xCpl, $xBairro, $cMun, $xMun, $UF, $CEP, $cPais, $xPais, $fone);

        $nItem = 1;
        $cProd = 'YOMA7LIRIO';
        $cEAN = '';
        $xProd = 'YOMA';
        $NCM = '90328911';
        $EXTIPI = '';
        $CFOP = '5102';
        $uCom = 'Kg';
        $qCom = '1.0000';
        $vUnCom = '10.0000000000';
        $vProd = '10.00';
        $cEANTrib = '';
        $uTrib = 'Kg';
        $qTrib = '1.0000';
        $vUnTrib = '10.0000000000';
        $vFrete = '';
        $vSeg = '';
        $vDesc = '';
        $vOutro = '';
        $indTot = '1';
        $xPed = '506';
        $nItemPed = '1';
        $nFCI = '';
        $resp = $nfe->tagprod($nItem, $cProd, $cEAN, $xProd, $NCM, $EXTIPI, $CFOP, $uCom, $qCom, $vUnCom, $vProd, $cEANTrib, $uTrib, $qTrib, $vUnTrib, $vFrete, $vSeg, $vDesc, $vOutro, $indTot, $xPed, $nItemPed, $nFCI);

        //imposto
        $nItem = 1;
        $vTotTrib = '3.29';
        //tag imposto
        $resp = $nfe->tagimposto($nItem, $vTotTrib);

        //ICMS
        $nItem = 1;
        $orig = '1';
        $cst = '00';
        $modBC = '3';
        $pRedBC = '';
        $vBC = '10.00';
        $pICMS = '18.00';
        $vICMS = '1.80';
        $vICMSDeson = '';
        $motDesICMS = '';
        $modBCST = '';
        $pMVAST = '';
        $pRedBCST = '';
        $vBCST = '';
        $pICMSST = '';
        $vICMSST = '';
        $pDif = '';
        $vICMSDif = '';
        $vICMSOp = '';
        $vBCSTRet = '';
        $vICMSSTRet = '';
        //tag ICMS
        $resp = $nfe->tagICMS($nItem, $orig, $cst, $modBC, $pRedBC, $vBC, $pICMS, $vICMS, $vICMSDeson, $motDesICMS, $modBCST, $pMVAST, $pRedBCST, $vBCST, $pICMSST, $vICMSST, $pDif, $vICMSDif, $vICMSOp, $vBCSTRet, $vICMSSTRet);

        //PIS
        $nItem = 1;
        $cst = '01';
        $vBC = '10.00';
        $pPIS = '1.65';
        $vPIS = '0.07';
        $qBCProd = '';
        $vAliqProd = '';
        $resp = $nfe->tagPIS($nItem, $cst, $vBC, $pPIS, $vPIS, $qBCProd, $vAliqProd);

        //COFINS
        $nItem = 1;
        $cst = '01';
        $vBC = '10.00';
        $pCOFINS = '3.00';
        $vCOFINS = '0.30';
        $qBCProd = '';
        $vAliqProd = '';
        $resp = $nfe->tagCOFINS($nItem, $cst, $vBC, $pCOFINS, $vCOFINS, $qBCProd, $vAliqProd);

        //total
        $vBC = '10.00';
        $vICMS = '1.80';
        $vICMSDeson = '0.00';
        $vBCST = '0.00';
        $vST = '0.00';
        $vProd = '10.00';
        $vFrete = '0.00';
        $vSeg = '0.00';
        $vDesc = '0.00';
        $vII = '0.00';
        $vIPI = '0.00';
        $vPIS = '0.07';
        $vCOFINS = '0.30';
        $vOutro = '0.00';
        $vNF = '10.00';
        $vTotTrib = '3.29';
        //tag total
        $resp = $nfe->tagICMSTot($vBC, $vICMS, $vICMSDeson, $vBCST, $vST, $vProd, $vFrete, $vSeg, $vDesc, $vII, $vIPI, $vPIS, $vCOFINS, $vOutro, $vNF, $vTotTrib);

        //frete
        $modFrete = '9';
        //tag transp
        $resp = $nfe->tagtransp($modFrete);

        //pagamento
        $tPag = '01';
        $vPag = '10.00';
        //tag pag
        $rest = $nfe->tagpag($tPag, $vPag);

        //informaÃ§Ãµes Adicionais
        $infAdFisco = '';
        $infCpl = 'Trib aprox R$: 2,09 Federal e R$: 1,20 Estadual Fonte: IBPT 5oi7eW 15.2.A.';
        //tag infAdic
        $resp = $nfe->taginfAdic($infAdFisco, $infCpl);

        //monta a NFe e retorna na tela
        $resp = $nfe->montaNFe();
        if ($resp) {
            $xml = $nfe->getXML();
            $filename = "c:/entradas/chave-nfe.xml";

            $a =  file_put_contents($filename, $xml);
            chmod($filename, 0777);
            //assina
            $xml = $tools->assina($xml);
            $filename = "c:/assinadas/chave-nfe.xml";
            file_put_contents($filename, $xml);
            chmod($filename, 0777);
            if (! $tools->validarXml($xml)) {
                echo 'Eita !?! Tem bicho na linha .... <br>';
                foreach ($tools->errors as $erro) {
                    foreach ($erro as $err) {
                        echo "$err <br>";
                    }
                }
            } else {
                header('Content-type: text/xml; charset=UTF-8');

                echo $xml;


            }
        } else {
            header('Content-type: text/html; charset=UTF-8');
            foreach ($nfe->erros as $err) {
                echo 'tag: &lt;'.$err['tag'].'&gt; ---- '.$err['desc'].'<br>';
            }
        }

	}
}
