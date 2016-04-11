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

class DocumentsForm extends BaseForm
{

    private $form;

    public function initialize($object = null)
    {
        if ($object) {
            $this->setEntity($object);
        }

        $id = new Hidden('idDocuments', array(
         'id' => 'idDocuments',
         'name' => 'documents[idDocuments]'
         ));
        $this->add($id);

        $cpfCnpj = new Text('cpfCnpj', array(
            'required' => 'required',
            'id' => 'cpfCnpj',
            'name' => 'documents[cpfCnpj]',
            'class' => 'form-control',
            'placeholder' => 'Digite seu cpf'
            ));
        $cpfCnpj->setLabel('* CPF');
        $cpfCnpj->addFilter('trim');
        $cpfCnpj->addValidator(new PresenceOf(array(
            'message' => 'O cpf é requerido'
            )));
        $this->add($cpfCnpj);

        $rg = new Text('rg', array(
            'required' => 'required',
            'id' => 'rg',
            'name' => 'documents[rg]',
            'class' => 'form-control',
            'placeholder' => 'Digite seu rg'
            ));
        $rg->setLabel('* RG');
        $rg->addFilter('trim');
        $rg->addValidator(new PresenceOf(array(
            'message' => 'O rg é requerido'
            )));
        $this->add($rg);

        $cnh = new Text('cnh', array(
            'id' => 'cnh',
            'name' => 'documents[cnh]',
            'class' => 'form-control',
            'placeholder' => 'Digite seu cnh'
            ));
        $cnh->setLabel('CNH');
        $cnh->addFilter('trim');
        $this->add($cnh);

        $oab = new Text('oab', array(
            'id' => 'oab',
            'name' => 'documents[oab]',
            'class' => 'form-control',
            'placeholder' => 'Digite sua carteira da oab'
            ));
        $oab->setLabel('Numero OAB');
        $oab->addFilter('trim');
        $this->add($oab);

        $typeCnh = new Select(
            'typeCnh',
            array(
                '' => 'Não Possuo',
                'A' => 'A',
                'B' => 'B',
                'AB' => 'AB',
                'C' => 'C',
                'D' => 'D',
                'E' => 'E',
                ),
            array(
                'id' => 'typeCnh',
                'name' => 'documents[typeCnh]',
                'class' => 'form-control'
                )
        );
        $typeCnh->setLabel('Tipo CNH');
        $this->add($typeCnh);

        $typeOab = new Select(
            'typeOab',
            array(
                '' => 'Não Possuo',
                'E' => 'Estagiário',
                'P' => 'Profissional',
                ),
            array(
                'id' => 'typeOab',
                'name' => 'documents[typeOab]',
                'class' => 'form-control'
                )
        );
        $typeOab->setLabel('Carteira OAB');
        $this->add($typeOab);
    }

    public function forms()
    {
        $this->form['idDocuments'] = $this->render('idDocuments');
        $this->form['cpfCnpj'] = $this->renderDecorated('cpfCnpj');
        $this->form['rg'] = $this->renderDecorated('rg');
        $this->form['cnh'] = $this->renderDecorated('cnh');
        $this->form['typeCnh'] = $this->renderDecorated('typeCnh');
        $this->form['oab'] = $this->renderDecorated('oab');
        $this->form['typeOab'] = $this->renderDecorated('typeOab');
        return $this->form;
    }
}
