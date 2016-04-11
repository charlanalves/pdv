<?php

namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Submit;
use Phalcon\Forms\Element\Check;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\Identical;

use App\Forms\BaseForm as BaseForm;

class LoginForm extends BaseForm
{

    private $form;

    public function initialize()
    {
        $email = new Text('email', array(
            'placeholder' => 'Login',
            'class' => 'gui-input',
            'required' => 'required'
            ));

        $email->addValidators(array(
            new PresenceOf(array(
                'message' => 'Email Requerido'
                )),
            ));
        $this->add($email);

        $password = new Password('password', array(
            'placeholder' => 'Password',
            'class' => 'gui-input',
            'required' => 'required'
            ));
        $password->addValidator(new PresenceOf(array(
            'message' => 'Password Requerido'
            )));
        $this->add($password);

        $remember = new Check('remember', array(
            'value' => 'yes'
            ));
        $remember->setLabel('Remember me');
        $this->add($remember);

        $csrf = new Hidden('csrf');
        $csrf->addValidator(new Identical(array(
            'value' => $this->security->getSessionToken(),
            'message' => 'CSRF validation failed'
            )));
        $this->add($csrf);

        $this->add(new Submit('go', array(
            'class' => 'btn btn-success'
        )));
    }

    public function forms()
    {
        $this->form['email'] = $this->renderMessage('email');
        $this->form['password'] = $this->renderMessage('password');
        $this->form['csrf'] = $this->render('csrf');
        $this->form['remember'] = $this->render('remember');
        $this->form['go'] = $this->render('go');
        return $this->form;
    }
}
