<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use App\Forms\BaseForm as BaseForm;

class ContactForm extends BaseForm
{

    private $form;
    private $count;

    public function initialize($object = null, $count = 0)
    {
        if ($object) {
            $this->setEntity($object);
        }
        $this->count = $count;
        $id = new Hidden('idContact', array(
           'name' => 'contact['.$this->count.'][idContact]',
           'id' => 'idContact_'.uniqid(),
           ));
        $this->add($id);


        $phone = new Text('phone', array(
            'name' => 'contact['.$this->count.'][phone]',
            'id' => 'phone_'.uniqid(),
            'class' => 'form-control phone',
            'rel' => 'phone',
            ));
        $phone->setLabel('Telefone');
        $phone->addFilter('trim');
        $this->add($phone);

        $type = new Select(
            'type',
            array(
                '' => 'Escolha uma opção',
                'Celular' => 'Celular',
                'Telefone residencial' => 'Telefone residencial',
                'Telefone comercial' => 'Telefone comercial',
                ),
            array(
                'name' => 'contact['.$this->count.'][type]',
                'id' => 'type_'.uniqid(),
                'class' => 'form-control ',
                )
        );
        $type->setLabel('Tipo de contato');
        $this->add($type);
    }


    public function forms()
    {
        $this->form['idContact'] = $this->render('idContact');
        $this->form['phone'] = $this->renderDecorated('phone');
        $this->form['type'] = $this->renderDecorated('type');
        return $this->form;
    }
}
