<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use App\Forms\BaseForm as BaseForm;

class AddressForm extends BaseForm
{

    private $form;
    private $count;

    public function initialize($object = null, $count = 0)
    {
        if ($object) {
            $this->setEntity($object);
        }
        $this->count = $count;
        $id = new Hidden('idAddress', array(
           'name' => 'address['.$this->count.'][idAddress]',
           'id' => 'idAddress_'.uniqid(),
           ));
        $this->add($id);


        $zipcode = new Text('zipcode', array(
            'required' => 'required',
            'name' => 'address['.$this->count.'][zipcode]',
            'id' => 'zipcode_'.uniqid(),
            'class' => 'form-control'
            ));
        $zipcode->setLabel('* Cep');
        $zipcode->addFilter('trim');
        $zipcode->addValidator(new PresenceOf(array(
            'message' => 'Cep Obrigatorio'
            )));
        $this->add($zipcode);

        $state = new Select(
            'state',
            array(
            '' => 'Escolha um estado',
            'MG' => 'Minas Gerais',
            'SP' => 'São Paulo'
            ),
            array(
            'required' => 'required',
            'name' => 'address['.$this->count.'][state]',
            'id' => 'state_'.uniqid(),
            'class' => 'form-control'
            )
        );
        $state->setLabel('* Estado');
        $state->addFilter('trim');
        $state->addValidator(new PresenceOf(array(
            'message' => 'Estado Obrigatorio'
            )));
        $this->add($state);

        $city = new Text('city', array(
            'required' => 'required',
            'name' => 'address['.$this->count.'][city]',
            'id' => 'city_'.uniqid(),
            'class' => 'form-control'
            ));
        $city->setLabel('* Cidade');
        $city->addFilter('trim');
        $city->addValidator(new PresenceOf(array(
            'message' => 'Cidade Obrigatorio'
            )));
        $this->add($city);

        $neighborhood = new Text('neighborhood', array(
            'required' => 'required',
            'name' => 'address['.$this->count.'][neighborhood]',
            'id' => 'neighborhood_'.uniqid(),
            'class' => 'form-control'
            ));
        $neighborhood->setLabel('* Bairro');
        $neighborhood->addFilter('trim');
        $neighborhood->addValidator(new PresenceOf(array(
            'message' => 'Bairro Obrigatorio'
            )));
        $this->add($neighborhood);

        $street = new Text('street', array(
            'required' => 'required',
            'name' => 'address['.$this->count.'][street]',
            'id' => 'street_'.uniqid(),
            'class' => 'form-control'
            ));
        $street->setLabel('* Rua');
        $street->addFilter('trim');
        $street->addValidator(new PresenceOf(array(
            'message' => 'Rua Obrigatorio'
            )));
        $this->add($street);

        $number = new Text('number', array(
            'name' => 'address['.$this->count.'][number]',
            'id' => 'number_'.uniqid(),
            'class' => 'form-control'
            ));
        $number->setLabel('Numero');
        $number->addFilter('trim');
        $this->add($number);

        $complement = new Text('complement', array(
            'name' => 'address['.$this->count.'][complement]',
            'id' => 'complement_'.uniqid(),
            'class' => 'form-control'
            ));
        $complement->setLabel('Complemento');
        $complement->addFilter('trim');
        $this->add($complement);


    }


    public function forms()
    {
        // var_dump($this);
        $this->form['idAddress'] = $this->render('idAddress');
        $this->form['zipcode'] = $this->renderDecorated('zipcode');
        $this->form['state'] = $this->renderDecorated('state');
        $this->form['city'] = $this->renderDecorated('city');
        $this->form['neighborhood'] = $this->renderDecorated('neighborhood');
        $this->form['street'] = $this->renderDecorated('street');
        $this->form['number'] = $this->renderDecorated('number');
        $this->form['complement'] = $this->renderDecorated('complement');
        return $this->form;
    }
}
