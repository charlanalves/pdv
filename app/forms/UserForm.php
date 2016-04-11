<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\password;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Validation\Validator\Confirmation;
use App\Models\Plan as Plan;
use App\Models\Profiles as Profiles;

class UserForm extends BaseForm
{

    private $form;
    private $documents;

    public function initialize($object = null)
    {
        if ($object) {
            $this->setEntity($object);
        }

        $id = new Hidden('idUser', array(
         'id' => 'idUser',
         'name' => 'user[idUser]'
         ));
        $this->add($id);


        $name = new Text('name', array(
            'required' => 'required',
            'id' => 'name',
            'name' => 'user[name]',
            'class' => 'form-control',
            'placeholder' => 'Digite seu nome'
            ));
        $name->setLabel('* Nome');
        $name->addFilter('trim');
        $name->addValidator(new PresenceOf(array(
            'message' => 'O nome é requerido'
            )));
        $this->add($name);


        $email = new Email('email', array(
            'required' => 'required',
            'id' => 'email',
            'name' => 'user[email]',
            'class' => 'form-control'
            ));
        $email->setLabel('* Email');
        $email->addFilter('trim');
        $email->addValidator(new PresenceOf(array(
            'message' => 'O email é requerido'
            )));
        $email->addValidator(new EmailValidator(array(
            'message' => 'Email invalido'
            )));
        $this->add($email);

        $password = new password('password', array(
            'id' => 'password',
            'name' => 'user[password]',
            'class' => 'form-control'
            ));
        $password->setLabel('Password');
        $password->addValidator(new Confirmation(array(
            'message' => 'Confirmação de password invalido.',
            'with' => 'rePassword'
            )));

        $this->add($password);

        $rePassword = new password('rePassword', array(
            'id' => 'rePassword',
            'name' => 'user[rePassword]',
            'class' => 'form-control'
            ));
        $rePassword->setLabel('Re-password');

        $this->add($rePassword);

        $type = new Select(
            'type',
            array(
                '' => 'Escolha uma opção',
                'P' => 'Profissional',
                'B' => 'Empresa',
                'A' => 'Administrador',
                ),
            array(
                'required' => 'required',
                'id' => 'type',
                'name' => 'user[type]',
                'class' => 'form-control'
                )
        );
        $type->setLabel('* Tipo de usuario');
        $type->addValidator(new PresenceOf(array(
            'message' => 'Opção obrigatoria'
            )));
        $this->add($type);

        $status = new Select(
            'status',
            array(
                '' => 'Escolha uma opção',
                'E' => 'Ativo',
                'N' => 'Novo Cadastro',
                'S' => 'Suspenso',
                ),
            array(
                'required' => 'required',
                'id' => 'status',
                'name' => 'user[status]',
                'class' => 'form-control'
                )
        );
        $status->setLabel('* Tipo de usuario');
        $status->addValidator(new PresenceOf(array(
            'message' => 'Opção obrigatoria'
            )));
        $this->add($status);

        $plan_idPlan = new Select(
            'plan_idPlan',
            Plan::find(),
            array(
                'using' => array('idPlan', 'description'),
                'required' => 'required',
                'id' => 'plan_idPlan',
                'name' => 'user[plan_idPlan]',
                'class' => 'form-control'
                )
        );
        $plan_idPlan->setLabel('* Plano do usuario');
        $plan_idPlan->addValidator(new PresenceOf(array(
            'message' => 'Opção obrigatoria'
            )));
        $this->add($plan_idPlan);

        $urlfy = new Text('urlfy', array(
            'required' => 'required',
            'id' => 'urlfy',
            'name' => 'user[urlfy]',
            'class' => 'form-control',
            'placeholder' => ''
            ));
        $urlfy->setLabel('* Url amigavel');
        $urlfy->addFilter('trim');
        $urlfy->addValidator(new PresenceOf(array(
            'message' => 'A url amigavel é requerida'
            )));
        $this->add($urlfy);

        $viewDays = new Text('viewDays', array(
            'id' => 'viewDays',
            'name' => 'view[viewDays]',
            'class' => 'form-control',
            'disabled' => 'disabled'
            ));
        $viewDays->setLabel('View dias restantes');
        $this->add($viewDays);

        $curriculumView = new Text('curriculumView', array(
            'id' => 'curriculumView',
            'name' => 'view[curriculumView]',
            'class' => 'form-control',
            'disabled' => 'disabled'
            ));
        $curriculumView->setLabel('Curriculo visualizado');
        $this->add($curriculumView);

        $profiles_idProfiles = new Select(
            'profiles_idProfiles',
            Profiles::find('enabled = 1'),
            array(
                'using' => array('idProfiles', 'name'),
                'required' => 'required',
                'id' => 'profiles_idProfiles',
                'name' => 'user[profiles_idProfiles]',
                'class' => 'form-control'
                )
        );
        $profiles_idProfiles->setLabel('* Perfil de permissões');
        $profiles_idProfiles->addValidator(new PresenceOf(array(
            'message' => 'Opção obrigatoria'
            )));
        $this->add($profiles_idProfiles);

    }


    public function forms()
    {
        $this->form['idUser'] = $this->render('idUser');
        $this->form['name'] = $this->renderDecorated('name');
        $this->form['email'] = $this->renderDecorated('email');
        $this->form['password'] = $this->renderDecorated('password');
        $this->form['rePassword'] = $this->renderDecorated('rePassword');
        $this->form['type'] = $this->renderDecorated('type');
        $this->form['status'] = $this->renderDecorated('status');
        $this->form['plan_idPlan'] = $this->renderDecorated('plan_idPlan');
        $this->form['profiles_idProfiles'] = $this->renderDecorated('profiles_idProfiles');
        $this->form['urlfy'] = $this->renderDecorated('urlfy');
        $this->form['viewDays'] = $this->renderDecorated('viewDays');
        $this->form['curriculumView'] = $this->renderDecorated('curriculumView');
        return $this->form;
    }
}
