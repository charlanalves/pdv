<?php

namespace App\Services;

ini_set('memory_limit', '-1');
set_time_limit(-1);

use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\User\Component;

class EmailMarketing extends Component
{

    /*
    * @param $modelo Object - Objeto do MktTemplate
    * @param $email String - um unico email por vez
    * @param $adicional Mixes Array('nome', 'unidade', 'enviadoPor', 'enviadoPorNome', 'responderPara', 'empresa')
    *
    */
    public function comporEmailMarketing($modelo, $email, $adicional)
    {
        $validar['email'] = $email;
        $validator = new \Phalcon\Validation;
        $validator->add('email', new \Phalcon\Validation\Validator\Email());
        $erros = $validator->validate($validar);
        $layout = $modelo->getConteudo();
        if (count($erros)) {
            return false;
        }

        if (!isset($adicional['nome'])) {
            $adicional['nome'] = '';
        }

        if (!isset($adicional['enviadoPor'])) {
            $adicional['enviadoPor'] = $modelo->getEnviadoPor();
        }

        if (!isset($adicional['enviadoPorNome'])) {
            $adicional['enviadoPorNome'] = $modelo->getEnviadoPorNome();
        }

        if (!isset($adicional['responderPara'])) {
            $adicional['responderPara'] = $modelo->getResponderPara();
        }

        if (isset($adicional['empresa'])) {
            $this->traduzirTags('empresa', $adicional['empresa'], $layout);
        }

        $mandrill = new \Mandrill(__MANDRILL_API__);
        try {
            $message = array(
                   'html' => $layout,
                   'subject' => $modelo->getAssunto(),
                   'from_email' =>  $adicional['enviadoPor'],
                   'from_name' => $adicional['enviadoPorNome'],
                   'to' => array(
                       array(
                           'email' => trim($email),
                           'name' => $adicional['nome'],
                           'type' => 'to'
                       )
                   ),
                   'headers' => array('Reply-To' => $adicional['responderPara']),
                   'important' => false,
                   'track_opens' => null,
                   'track_clicks' => null,
                   'auto_text' => null,
                   'auto_html' => null,
                   'inline_css' => true,
                   'url_strip_qs' => null,
                   'preserve_recipients' => null,
                   'view_content_link' => null,
                   'bcc_address' => null,
                   'tracking_domain' => null,
                   'signing_domain' => null,
                   'return_path_domain' => null,
                   'merge' => true,
                   'merge_language' => 'mailchimp',
                   'tags' => array('Marketing'),
                   'metadata' => array('website' => 'https://www.piscinafiber.com.br')
                   );
               $async = false;
               $ip_pool = '';
               $send_at = '';
               $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
               $this->salvarHistoricoEmails($modelo, $result, $adicional['unidade']);
            if ($result[0]['reject_reason']) {
                return false;
            }
               return true;
        } catch (mandrill_Error $e) {
            return false;
        }
    }

    public function salvarHistoricoEmails($modelo, $result, $unidade)
    {
        $historico = new \App\Models\MktHistorico();
        $historico->setCdTemplate($modelo->getCdTemplate());
        $historico->setCdUnidade($unidade);
        $historico->setEmail($result[0]['email']);
        $historico->setStatus($result[0]['status']);
        $historico->setCodigoMandrill($result[0]['_id']);
        $historico->setMotivoRejeicao($result[0]['reject_reason']);
        $historico->setLido(0);
        $historico->setClique(0);
        if ($historico->save() == false) {
            foreach ($historico->getMessages() as $message) {
                  echo $message, "\n";
            }
        } else {
            return true;
        }
    }

    public function buscarHistoricoEmailEnviado()
    {
        try {
            $mandrill = new \Mandrill(__MANDRILL_API__);
            $historico = \App\Models\MktHistorico::find(array(
                "conditions" => 'lido = :naoLido:',
                "bind" => array('naoLido' => 0)
                ));
            foreach ($historico as $key) {
                $result = $mandrill->messages->info($key->getCodigoMandrill());
                $key->setStatus($result['state']);
                $key->setLido($result['opens']);
                $key->setClique($result['clicks']);
                $key->save();
            }
        } catch (Mandrill_Error $e) {
            continue;
        }
    }

    private function traduzirTags($tabela, $dados, &$layout)
    {
        foreach ($dados as $key => $value) {
            $chaves[] = '{'.$tabela.'.'.$key.'}';
        }

        str_ireplace($chaves, $dados, $layout);
        return $layout;
    }
}
