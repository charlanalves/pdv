<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use App\Models\Jobcontract as Jobcontract;

class ModulesForm extends BaseForm
{

    private $form;

    public function initialize()
    {

        $idModules = new Hidden('idModules', array(
            'id' => 'idModules',
            'name' => 'modules[idModules]',
            ));
        $idModules->addFilter('trim');
        $this->add($idModules);

        $description = new Text('description', array(
            'required' => 'required',
            'id' => 'description',
            'name' => 'modules[description]',
            'class' => 'form-control',
            'placeholder' => 'Digite a descrição do modulo'
            ));
        $description->setLabel('* Modulo');
        $description->addFilter('trim');
        $description->addValidator(new PresenceOf(array(
            'message' => 'O nome do modulo é requerido'
            )));
        $this->add($description);

        $icon = new Text('icon', array(
            'id' => 'icon',
            'name' => 'modules[icon]',
            'class' => 'form-control',
            'placeholder' => 'Digite as classes do icone'
            ));
        $icon->setLabel('Icone');
        $icon->addFilter('trim');
        $this->add($icon);

        $ordem = new Text('ordem', array(
            'required' => 'required',
            'id' => 'ordem',
            'name' => 'modules[ordem]',
            'class' => 'form-control',
            'placeholder' => 'Digite a posição do modulo'
            ));
        $ordem->setLabel('* Ordem');
        $ordem->addFilter('trim');
        $ordem->addValidator(new PresenceOf(array(
            'message' => 'Posição obrigatoria'
            )));
        $this->add($ordem);

    }


    public function forms()
    {
        $this->form['idModules'] = $this->render('idModules');
        $this->form['description'] = $this->renderDecorated('description');
        $this->form['icon'] = $this->renderDecorated('icon');
        $this->form['ordem'] = $this->renderDecorated('ordem');
        return $this->form;
    }
}
