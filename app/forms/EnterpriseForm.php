<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\password;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Confirmation;
use Phalcon\Validation\Validator\InclusionIn;

use App\Forms\BaseForm as BaseForm;

class EnterpriseForm extends BaseForm
{

    private $form;

    public function initialize($object = null)
    {
        if ($object) {
            $this->setEntity($object);
        }

        $id = new Hidden('idEnterprise', array(
                               'id' => 'idEnterprise',
                               'name' => 'user[idEnterprise]'
                                ));
        $this->add($id);


        $description = new Text('description', array(
                                        'required' => 'required',
                                        'id' => 'description',
                                        'name' => 'enterprise[description]',
                                        'class' => 'form-control',
                                        'placeholder' => 'Digite seu nome'
                                        ));
        $description->setLabel('* Descrição');
        $description->addFilter('trim');
        $description->addValidator(new PresenceOf(array(
            'message' => 'O nome é requerido'
        )));
        $this->add($description);

        $enabled = new Select(
            'enabled',
            array(
                '1' => 'Ativo',
                '0' => 'Inativo'
                ),
            array(
                    'required' => 'required',
                    'id' => 'enabled',
                    'name' => 'enterprise[enabled]',
                    'class' => 'form-control'
                )
        );
            $enabled->setLabel('* Status');
            $enabled->setDefault('1');
            $enabled->addValidator(new InclusionIn(array(
            'message' => 'Obrigatorio a escolha de um status',
            'domain' => array(0, 1)
            )));
            $this->add($enabled);



    }


    public function forms()
    {
        // var_dump($this);
        $this->form['idEnterprise'] = $this->render('idEnterprise');
        $this->form['description'] = $this->renderDecorated('description');
        $this->form['enabled'] = $this->renderDecorated('enabled');
        return $this->form;
    }
}
