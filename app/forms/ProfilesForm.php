<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Check;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;

class ProfilesForm extends BaseForm
{

    private $form;

    public function initialize()
    {

        $idProfiles = new Hidden('idProfiles', array(
            'id' => 'idProfiles',
            'name' => 'profiles[idProfiles]',
            ));
        $idProfiles->addFilter('trim');
        $this->add($idProfiles);

        $name = new Text('name', array(
            'required' => 'required',
            'id' => 'name',
            'name' => 'profiles[name]',
            'class' => 'form-control',
            'placeholder' => 'Digite a descrição do modulo'
            ));
        $name->setLabel('* Nome');
        $name->addFilter('trim');
        $name->addValidator(new PresenceOf(array(
            'message' => 'O nome do perfil é requerido'
            )));
        $this->add($name);

        $enabled = new Check('enabled', array(
            'id' => 'enabled',
            'name' => 'profiles[enabled]',
            'value' => '1',
            'class' => 'form-control',
            ));
        $enabled->setLabel('Ativo');
        $this->add($enabled);


    }


    public function forms()
    {
        $this->form['idProfiles'] = $this->render('idProfiles');
        $this->form['name'] = $this->renderDecorated('name');
        $this->form['enabled'] = $this->renderCheck('enabled', array('Ativo', 'Inativo'));
        return $this->form;
    }
}
