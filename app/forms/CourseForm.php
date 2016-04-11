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

class CourseForm extends BaseForm
{

    private $form;
    private $count;

    public function initialize($object = null, $count = 0)
    {
        if ($object) {
            $this->setEntity($object);
        }
        $this->count = $count;
        $id = new Hidden('idCourse', array(
           'id' => 'idCourse',
           'name' => 'course['.$this->count.'][idCourse]',
           'id' => 'idCourse_'.uniqid(),
           ));
        $this->add($id);


        $init = new Text('init', array(
            'name' => 'course['.$this->count.'][init]',
            'id' => 'init_'.uniqid(),
            'class' => 'form-control date',
            ));
        $init->setLabel('* Data de início');
        $init->addFilter('trim');
        $this->add($init);

        $end = new Text('end', array(
            'name' => 'course['.$this->count.'][end]',
            'class' => 'form-control date',
            'id' => 'end_'.uniqid(),
            ));
        $end->setLabel('Data conclusão');
        $end->addFilter('trim');
        $this->add($end);

        $name = new Text('name', array(
            'name' => 'course['.$this->count.'][name]',
            'class' => 'form-control',
            'id' => 'name_'.uniqid(),
            ));
        $name->setLabel('* Curso');
        $name->addFilter('trim');
        $this->add($name);

        $institution = new Text('institution', array(
            'name' => 'course['.$this->count.'][institution]',
            'class' => 'form-control',
            'id' => 'institution_'.uniqid(),
            ));
        $institution->setLabel('Instituição');
        $institution->addFilter('trim');
        $this->add($institution);

        $description = new TextArea('description', array(
            'name' => 'course['.$this->count.'][description]',
            'class' => 'form-control',
            'id' => 'description_'.uniqid(),
            ));
        $description->setLabel('Descrição');
        $description->addFilter('trim');
        $this->add($description);

    }


    public function forms()
    {
        $this->form['idCourse'] = $this->render('idCourse');
        $this->form['init'] = $this->renderDate('init');
        $this->form['end'] = $this->renderDate('end');
        $this->form['name'] = $this->renderDecorated('name');
        $this->form['institution'] = $this->renderDecorated('institution');
        $this->form['description'] = $this->renderDecorated('description');
        return $this->form;
    }
}
