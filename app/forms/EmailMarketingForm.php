<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Check;
use Phalcon\Forms\Element\Radio;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Validation\Validator\Confirmation;

class EmailMarketingForm extends BaseForm
{

    private $form;

    public function initialize($object = null)
    {
        if ($object) {
            $this->setEntity($object);
        }

        $id = new Hidden('cdTemplate', array(
           'id' => 'cdTemplate',
           'name' => 'cdTemplate'
           ));
        $this->add($id);

        $responderPara = new email('responderPara', array(
            'required' => 'required',
            'id' => 'responderPara',
            'name' => 'responderPara',
            'class' => 'form-control',
            'placeholder' => '{replay to}'
            ));
        $responderPara->setLabel('* Responder para:');
        $responderPara->addFilter('trim');
        $responderPara->addValidator(new PresenceOf(array(
            'message' => 'Campo requerido'
            )));
        $responderPara->addValidator(new EmailValidator(array(
            'message' => 'Email invalido'
            )));
        $this->add($responderPara);

        $enviadoPor = new email(
            'enviadoPor',
            array(
                'required' => 'required',
                'id' => 'enviadoPor',
                'name' => 'enviadoPor',
                'class' => 'form-control',
                'placeholder' => '{from}'
                )
        );
        $enviadoPor->setLabel('* Enviado por:');
        $enviadoPor->addValidator(new PresenceOf(array(
            'message' => 'Campo requerido'
            )));
        $enviadoPor->addValidator(new EmailValidator(array(
            'message' => 'Email invalido'
            )));
        $this->add($enviadoPor);

        $assunto = new text(
            'assunto',
            array(
                'required' => 'required',
                'id' => 'assunto',
                'name' => 'assunto',
                'class' => 'form-control',
                'placeholder' => 'Assunto'
                )
        );
        $assunto->setLabel('* Assunto:');
        $assunto->addValidator(new PresenceOf(array(
            'message' => 'Campo requerido'
            )));
        $this->add($assunto);

        $nome = new text(
            'nome',
            array(
                'required' => 'required',
                'id' => 'nome',
                'name' => 'nome',
                'class' => 'form-control',
                'placeholder' => 'nome'
                )
        );
        $nome->setLabel('* Nome do Modelo:');
        $nome->addValidator(new PresenceOf(array(
            'message' => 'Campo requerido'
            )));
        $this->add($nome);


        $conteudo = new TextArea('conteudo', array(
            'id' => 'conteudo',
            'name' => 'conteudo',
            'class' => 'summernote',
            ));
        $conteudo->addFilter('trim');
        $conteudo->addValidator(new PresenceOf(array(
            'message' => 'Conteudo obrigatorio'
            )));
        $this->add($conteudo);

        $uf = new Select(
            'uf',
            \App\Models\Orcamento::find(array(
                "columns" => 'end_uf, end_uf as uf',
                "conditions" => "email != :email: AND end_uf != :ufVazio:",
                "bind" => array('email' => '',
                                'ufVazio' => ''),
                "group" => 'end_uf'
            )),
            array(
                'useEmpty' => true,
                'emptyText' => 'Selecione um estado',
                'using' => array('end_uf', 'uf'),
                'id' => 'uf',
                'name' => 'uf',
                'class' => 'form-control'
                )
        );
        $uf->setLabel('Estado');
        $this->add($uf);

        $emailEnvio = new text(
            'emailEnvio',
            array(
                'id' => 'emailEnvio',
                'name' => 'emailEnvio',
                'class' => 'form-control',
                'placeholder' => 'Email; Email; Email;'
                )
        );
        $this->add($emailEnvio);

        $cidade = new Select(
            'cidade',
            array('' => 'Selecione uma cidade'),
            array(
                'id' => 'cidade',
                'name' => 'cidade',
                'multiple' => 'multiple',
                'class' => 'form-control hide'
                )
        );
        $this->add($cidade);

        $enviadoPorNome = new text(
            'enviadoPorNome',
            array(
                'required' => 'required',
                'id' => 'enviadoPorNome',
                'name' => 'enviadoPorNome',
                'class' => 'form-control',
                'placeholder' => 'Ex: Enviado por Fiber Franchising'
                )
        );
        $enviadoPorNome->setLabel('* Nome enviado por:');
        $enviadoPorNome->addValidator(new PresenceOf(array(
            'message' => 'Campo requerido'
            )));
        $this->add($enviadoPorNome);

        $privado = new Check('privado', array(
            'id' => 'privado',
            'name' => 'privado',
            'value' => '1',
            'class' => 'form-control',
            ));
        $privado->setLabel('Privado:');
        $this->add($privado);


    }

    public function forms()
    {
        $this->form['cdTemplate'] = $this->render('cdTemplate');
        $this->form['responderPara'] = $this->renderDecorated('responderPara');
        $this->form['enviadoPor'] = $this->renderDecorated('enviadoPor');
        $this->form['enviadoPorNome'] = $this->renderDecorated('enviadoPorNome');
        $this->form['assunto'] = $this->renderDecorated('assunto');
        $this->form['nome'] = $this->renderDecorated('nome');
        $this->form['conteudo'] = $this->renderDecorated('conteudo');
        $this->form['emailEnvio'] = $this->renderDecorated('emailEnvio');
        $this->form['uf'] = $this->renderDecorated('uf');
        $this->form['cidade'] = $this->renderDecorated('cidade');
        $this->form['privado'] = $this->renderCheck('privado', array('Privado', 'Publico'));
        return $this->form;
    }
}
