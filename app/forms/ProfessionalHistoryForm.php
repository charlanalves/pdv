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

class ProfessionalHistoryForm extends BaseForm
{

    private $form;
    private $count;

    public function initialize($object = null, $count = 0)
    {
        if ($object) {
            $this->setEntity($object);
        }
        $this->count = $count;
        $id = new Hidden('idProfessionalHistory', array(
           'id' => 'idProfessionalHistory',
           'name' => 'professionalHistory['.$this->count.'][idProfessionalHistory]',
           'id' => 'idProfessionalHistory_'.uniqid(),
           ));
        $this->add($id);


        $init = new Text('init', array(
            'required' => 'required',
            'name' => 'professionalHistory['.$this->count.'][init]',
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
            'name' => 'professionalHistory['.$this->count.'][end]',
            'class' => 'form-control date',
            'id' => 'end_'.uniqid(),
            ));
        $end->setLabel('Data conclusão');
        $end->addFilter('trim');
        $this->add($end);

        $business = new Text('business', array(
            'name' => 'professionalHistory['.$this->count.'][business]',
            'class' => 'form-control',
            'id' => 'business_'.uniqid(),
            ));
        $business->setLabel('Empresa');
        $business->addFilter('trim');
        $this->add($business);

        $office = new Text('office', array(
            'name' => 'professionalHistory['.$this->count.'][office]',
            'class' => 'form-control',
            'id' => 'office_'.uniqid(),
            ));
        $office->setLabel('Cargo:');
        $office->addFilter('trim');
        $this->add($office);

        $activity = new TextArea('activity', array(
            'name' => 'professionalHistory['.$this->count.'][activity]',
            'class' => 'form-control',
            'id' => 'activity_'.uniqid(),
            ));
        $activity->setLabel('Descrição das atividades');
        $activity->addFilter('trim');
        $this->add($activity);

    }


    public function forms()
    {
        $this->form['idProfessionalHistory'] = $this->render('idProfessionalHistory');
        $this->form['init'] = $this->renderDate('init');
        $this->form['end'] = $this->renderDate('end');
        $this->form['business'] = $this->renderDecorated('business');
        $this->form['office'] = $this->renderDecorated('office');
        $this->form['activity'] = $this->renderDecorated('activity');
        return $this->form;
    }
}
