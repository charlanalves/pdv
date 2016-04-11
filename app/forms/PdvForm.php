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

class PdvForm extends BaseForm
{

    private $form;
    private $count;

    public function initialize($object = null, $count = 0)
    {
        if ($object) {
            $this->setEntity($object);
        }
        $this->count = $count;

        $ean13 = new Text('ean13', array(
            'name' => 'ean13',
            'id' => 'ean13',
            'class' => 'form-control date',
            'placeholder' => 'Informe o codigo do produto'
            ));
        $ean13->setLabel('Codigo:');
        $ean13->addFilter('trim');
        $this->add($ean13);

        $produto = new Text('produto', array(
            'name' => 'produto',
            'id' => 'produto',
            'disabled' => 'disabled',
            'class' => 'form-control date',
            'placeholder' => ''
            ));
        $produto->setLabel('Produto:');
        $this->add($produto);

        $quantidade = new Text('quantidade', array(
            'name' => 'quantidade',
            'class' => 'form-control date',
            'id' => 'quantidade',
            ));
        $quantidade->setLabel('Quantidade');
        $quantidade->addFilter('trim');
        $this->add($quantidade);

        $preco = new Text('preco', array(
            'required' => 'required',
            'name' => 'preco',
            'disabled' => 'disabled',
            'class' => 'form-control',
            'id' => 'preco',
            ));
        $preco->setLabel('Preço Unitario');
        $preco->addFilter('trim');
        $this->add($preco);

        $total = new Text('total', array(
            'required' => 'required',
            'name' => 'total',
            'disabled' => 'disabled',
            'class' => 'form-control',
            'id' => 'total',
            ));
        $total->setLabel('Valor total');
        $total->addFilter('trim');
        $this->add($total);

        $busca = new Text('busca', array(
            'required' => 'required',
            'name' => 'busca',
            'placeholder' => 'Buscar produto',
            'class' => 'form-control',
            'id' => 'busca',
            ));
        $busca->setLabel('');
        $this->add($busca);

        $caixa = new Text('caixa', array(
            'required' => 'required',
            'name' => 'caixa',
            'placeholder' => 'Valor inicial em caixa',
            'class' => 'form-control',
            'id' => 'caixa',
            ));
        $caixa->setLabel('Valor Inicial em caixa');
        $this->add($caixa);

    }


    public function forms()
    {
        $this->form['ean13'] = $this->renderDecorated('ean13');
        $this->form['produto'] = $this->renderDecorated('produto');
        $this->form['quantidade'] = $this->renderDecorated('quantidade');
        $this->form['preco'] = $this->renderDecorated('preco');
        $this->form['total'] = $this->renderDecorated('total');
        $this->form['busca'] = $this->renderDate('busca');
        $this->form['caixa'] = $this->renderDecorated('caixa');
        return $this->form;
    }
}
