<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use App\Models\Profiles as Profiles;
use App\Models\Modules as Modules;

class PermissionsForm extends BaseForm
{

    private $form;

    public function initialize()
    {

        $idPermissions = new Hidden('idPermissions', array(
            'id' => 'idPermissions',
            'name' => 'permissions[idPermissions]',
            ));
        $idPermissions->addFilter('trim');
        $this->add($idPermissions);

        $description = new Text('description', array(
            'required' => 'required',
            'id' => 'description',
            'name' => 'permissions[description]',
            'class' => 'form-control',
            'placeholder' => 'Digite a descrição do modulo'
            ));
        $description->setLabel('* Descrição');
        $description->addFilter('trim');
        $description->addValidator(new PresenceOf(array(
            'message' => 'A descrição é requerida'
            )));
        $this->add($description);

        $resource = new Text('resource', array(
            'required' => 'required',
            'id' => 'resource',
            'name' => 'permissions[resource]',
            'class' => 'form-control',
            'placeholder' => 'Digite o nome do recurso'
            ));
        $resource->setLabel('* Recurso');
        $resource->addFilter('trim');
        $resource->addValidator(new PresenceOf(array(
            'message' => 'O recurso é obrigatorio'
            )));
        $this->add($resource);

        $action = new Text('action', array(
            'required' => 'required',
            'id' => 'action',
            'name' => 'permissions[action]',
            'class' => 'form-control',
            'placeholder' => 'Digite o nome da ação'
            ));
        $action->setLabel('* Ação');
        $action->addFilter('trim');
        $action->addValidator(new PresenceOf(array(
            'message' => 'A ação é obrigatorio'
            )));
        $this->add($action);

        $icon = new Text('icon', array(
            'id' => 'icon',
            'name' => 'permissions[icon]',
            'class' => 'form-control',
            'placeholder' => 'Digite as classes do icone'
            ));
        $icon->setLabel('Icone');
        $icon->addFilter('trim');
        $this->add($icon);

        $ordem = new Text('ordem', array(
            'id' => 'ordem',
            'name' => 'permissions[ordem]',
            'class' => 'form-control',
            'placeholder' => 'Digite a posição da permissão'
            ));
        $ordem->setLabel('Ordem');
        $ordem->addFilter('trim');
        $this->add($ordem);

        $menu = new Check('menu', array(
            'id' => 'menu',
            'name' => 'permissions[menu]',
            'value' => '1',
            'class' => 'form-control',
            ));
        $menu->setLabel('Menu');
        $this->add($menu);

        $profiles_idProfiles = new Select(
            'profiles_idProfiles',
            Profiles::find(),
            array(
                'using' => array('idProfiles', 'name'),
                'required' => 'required',
                'id' => 'profiles_idProfiles',
                'name' => 'permissions[profiles_idProfiles]',
                'class' => 'form-control'
                )
        );
        $profiles_idProfiles->setLabel('* Perfil');
        $profiles_idProfiles->addValidator(new PresenceOf(array(
            'message' => 'Profiles Obrigatorio'
            )));
        $this->add($profiles_idProfiles);

        $modules_idModules = new Select(
            'modules_idModules',
            Modules::find(),
            array(
                'using' => array('idModules', 'description'),
                'required' => 'required',
                'id' => 'modules_idModules',
                'name' => 'permissions[modules_idModules]',
                'class' => 'form-control'
                )
        );
        $modules_idModules->setLabel('* Modulo');
        $modules_idModules->addValidator(new PresenceOf(array(
            'message' => 'Modulo Obrigatorio'
            )));
        $this->add($modules_idModules);

    }


    public function forms()
    {
        $this->form['idPermissions'] = $this->render('idPermissions');
        $this->form['description'] = $this->renderDecorated('description');
        $this->form['resource'] = $this->renderDecorated('resource');
        $this->form['action'] = $this->renderDecorated('action');
        $this->form['profiles_idProfiles'] = $this->renderDecorated('profiles_idProfiles');
        $this->form['modules_idModules'] = $this->renderDecorated('modules_idModules');
        $this->form['icon'] = $this->renderDecorated('icon');
        $this->form['ordem'] = $this->renderDecorated('ordem');
        $this->form['menu'] = $this->renderCheck('menu', array('Sim', 'Não'));
        return $this->form;
    }
}
