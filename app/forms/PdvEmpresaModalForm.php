<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Numeric;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use App\Forms\BaseForm as BaseForm;
use App\Models\Uf as Uf;

class PdvEmpresaModalForm extends BaseForm
{

    private $form;
    private $count;

    public function initialize($object = null, $count = 0)
    {
        if ($object) {
            $this->setEntity($object);
        }
        $this->count = $count;
        $cdEmpresa = new Hidden('cdEmpresa', array(
           'id' => 'cdEmpresa',
           'name' => 'cdEmpresa',
           'id' => 'cdEmpresa',
           ));
        $this->add($cdEmpresa);


        $nome = new Text('nome', array(
            'required' => 'required',
            "disabled" => "disabled",
            'name' => 'nome',
            'id' => 'nome',
            'class' => 'form-control date',
            ));
        $nome->setLabel('* Nome');
        $nome->addFilter('trim');
        $nome->addValidator(new PresenceOf(array(
            'message' => 'Nome obrigatório'
            )));
        $this->add($nome);

        $cpf = new Numeric('cpf', array(
            'required' => 'required',
            'name' => 'cpf',
            'placeholder' => 'Somente numeros',
            'id' => 'cpf',
            'class' => 'form-control date',
            ));
        $cpf->setLabel('* Cpf / Cnpj');
        $cpf->addFilter('trim');
        $cpf->addValidator(new PresenceOf(array(
            'message' => 'Cpf/Cnpj obrigatório'
            )));
        $this->add($cpf);

        $cep = new Text('cep', array(
            'name' => 'cep',
            'disabled' => 'disabled',
            'required' => 'required',
            'class' => 'form-control date',
            'id' => 'cep',
            ));
        $cep->setLabel('* Cep');
        $cep->addFilter('trim');
        $this->add($cep);

        $cidade = new Text('cidade', array(
            'required' => 'required',
            "disabled" => "disabled",
            'class' => 'form-control',
            'id' => 'cidade',
            ));
        $cidade->setLabel('* Cidade');
        $cidade->addFilter('trim');
        $cidade->addValidator(new PresenceOf(array(
            'message' => 'Cidade obrigatório'
            )));
        $this->add($cidade);

        $bairro = new Text('bairro', array(
            'required' => 'required',
            "disabled" => "disabled",
            'class' => 'form-control',
            'id' => 'bairro',
            ));
        $bairro->setLabel('* Bairro');
        $bairro->addFilter('trim');
        $bairro->addValidator(new PresenceOf(array(
            'message' => 'Bairro obrigatório'
            )));
        $this->add($bairro);

        $rua = new Text('rua', array(
            'required' => 'required',
            "disabled" => "disabled",
            'class' => 'form-control',
            'id' => 'rua',
            ));
        $rua->setLabel('* Rua');
        $rua->addFilter('trim');
        $rua->addValidator(new PresenceOf(array(
            'message' => 'Rua obrigatório'
            )));
        $this->add($rua);

        $numero = new Text('numero', array(
            'required' => 'required',
            "disabled" => "disabled",
            'class' => 'form-control',
            'id' => 'numero',
            ));
        $numero->setLabel('* Numero');
        $numero->addFilter('trim');
        $numero->addValidator(new PresenceOf(array(
            'message' => 'Numero obrigatório'
            )));
        $this->add($numero);

        $complemento = new Text('complemento', array(
            "disabled" => "disabled",
            'class' => 'form-control',
            'id' => 'complemento',
            ));
        $complemento->setLabel('Complemento');
        $complemento->addFilter('trim');
        $complemento->addValidator(new PresenceOf(array(
            'message' => 'Complemento obrigatório'
            )));
        $this->add($complemento);

        $uf = new Select(
            'uf',
            Uf::find(array("order"=>"sigla asc")),
            array(
                'using' => array('sigla', 'sigla'),
                'required' => 'required',
                "disabled" => "disabled",
                'id' => 'uf',
                'name' => 'uf',
                'class' => 'form-control'
                )
        );
        $uf->setLabel('* UF');
        $uf->addValidator(new PresenceOf(array(
            'message' => 'Estado obrigatório'
            )));
        $this->add($uf);

    }


    public function forms()
    {
        $this->form['cdEmpresa'] = $this->render('cdEmpresa');
        $this->form['cpf'] = $this->renderDecorated('cpf');
        $this->form['nome'] = $this->renderDecorated('nome');
        $this->form['cep'] = $this->renderDecorated('cep');
        $this->form['cidade'] = $this->renderDecorated('cidade');
        $this->form['uf'] = $this->renderDecorated('uf');
        $this->form['bairro'] = $this->renderDecorated('bairro');
        $this->form['rua'] = $this->renderDecorated('rua');
        $this->form['numero'] = $this->renderDecorated('numero');
        $this->form['complemento'] = $this->renderDecorated('complemento');
        return $this->form;
    }
}
