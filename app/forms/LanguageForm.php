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

class LanguageForm extends BaseForm
{

    private $form;
    private $count;

    public function initialize($object = null, $count = 0)
    {
        if ($object) {
            $this->setEntity($object);
        }
        $this->count = $count;
        $id = new Hidden('idLanguage', array(
           'name' => 'language['.$this->count.'][idLanguage]',
           'id' => 'idLanguage_'.uniqid(),
           ));
        $this->add($id);


        $description = new Text('description', array(
            'name' => 'language['.$this->count.'][description]',
            'id' => 'description_'.uniqid(),
            'class' => 'form-control description',
            'rel' => 'description',
            ));
        $description->setLabel('Idioma');
        $description->addFilter('trim');
        $this->add($description);

        $level = new Select(
            'level',
            array(
                '' => 'Escolha uma opção',
                'Básico' => 'Básico',
                'Intermediario' => 'Intermediario',
                'Avançado' => 'Avançado',
                'Fluente' => 'Fluente',
                'Nativo' => 'Nativo',
                ),
            array(
                'name' => 'language['.$this->count.'][level]',
                'id' => 'level_'.uniqid(),
                'class' => 'form-control ',
                )
        );
        $level->setLabel('Conhecimento');
        $this->add($level);
    }


    public function forms()
    {
        $this->form['idLanguage'] = $this->render('idLanguage');
        $this->form['description'] = $this->renderDecorated('description');
        $this->form['level'] = $this->renderDecorated('level');
        return $this->form;
    }
}
