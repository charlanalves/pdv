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
use App\Models\Literacy as Literacy;

class AcademicForm extends BaseForm
{

    private $form;
    private $count;

    public function initialize($object = null, $count = 0)
    {
        if ($object) {
            $this->setEntity($object);
        }
        $this->count = $count;
        $id = new Hidden('idAcademic', array(
           'id' => 'idAcademic',
           'name' => 'academic['.$this->count.'][idAcademic]',
           'id' => 'idAcademic_'.uniqid(),
           ));
        $this->add($id);


        $init = new Text('init', array(
            'required' => 'required',
            'name' => 'academic['.$this->count.'][init]',
            'id' => 'init_'.uniqid(),
            'class' => 'form-control date',
            ));
        $init->setLabel('* Data de início');
        $init->addFilter('trim');
        $init->addValidator(new PresenceOf(array(
            'message' => 'Data de início obrigatório'
            )));
        $this->add($init);

        $end = new Text('end', array(
            'name' => 'academic['.$this->count.'][end]',
            'class' => 'form-control date',
            'id' => 'end_'.uniqid(),
            ));
        $end->setLabel('Data conclusão');
        $end->addFilter('trim');
        $this->add($end);

        $course = new Text('course', array(
            'required' => 'required',
            'name' => 'academic['.$this->count.'][course]',
            'class' => 'form-control',
            'id' => 'course_'.uniqid(),
            ));
        $course->setLabel('* Curso');
        $course->addFilter('trim');
        $course->addValidator(new PresenceOf(array(
            'message' => 'Curso obrigatório'
            )));
        $this->add($course);

        $institution = new Text('institution', array(
            'name' => 'academic['.$this->count.'][institution]',
            'class' => 'form-control',
            'id' => 'institution_'.uniqid(),
            ));
        $institution->setLabel('Instituição');
        $institution->addFilter('trim');
        $this->add($institution);

        $obs = new TextArea('obs', array(
            'name' => 'academic['.$this->count.'][obs]',
            'class' => 'form-control',
            'id' => 'obs_'.uniqid(),
            ));
        $obs->setLabel('Observação');
        $obs->addFilter('trim');
        $this->add($obs);

        $literacy_idLiteracy = new Select(
            'literacy_idLiteracy',
            Literacy::find(),
            array(
                'using' => array('idLiteracy', 'description'),
                'required' => 'required',
                'id' => 'literacy_idLiteracy',
                'name' => 'academic['.$this->count.'][literacy_idLiteracy]',
                'class' => 'form-control'
                )
        );
        $literacy_idLiteracy->setLabel('* Grau');
        $literacy_idLiteracy->addValidator(new PresenceOf(array(
            'message' => 'Grau obrigatorio'
            )));
        $this->add($literacy_idLiteracy);

    }


    public function forms()
    {
        $this->form['idAcademic'] = $this->render('idAcademic');
        $this->form['init'] = $this->renderDate('init');
        $this->form['end'] = $this->renderDate('end');
        $this->form['course'] = $this->renderDecorated('course');
        $this->form['institution'] = $this->renderDecorated('institution');
        $this->form['obs'] = $this->renderDecorated('obs');
        $this->form['literacy_idLiteracy'] = $this->renderDecorated('literacy_idLiteracy');
        return $this->form;
    }
}
