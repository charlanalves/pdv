<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Validation\Validator\Confirmation;
use App\Models\Jobcontract as Jobcontract;

class JobForm extends BaseForm
{

    private $form;

    public function initialize($object = null)
    {
        if ($object) {
            $this->setEntity($object);
        }

        $id = new Hidden('idJob', array(
           'id' => 'idJob',
           'name' => 'job[idJob]'
           ));
        $this->add($id);


        $office = new Text('office', array(
            'required' => 'required',
            'id' => 'office',
            'name' => 'job[office]',
            'class' => 'form-control',
            'placeholder' => 'Digite o cargo'
            ));
        $office->setLabel('* Cargo');
        $office->addFilter('trim');
        $office->addValidator(new PresenceOf(array(
            'message' => 'O cargo é requerido'
            )));
        $this->add($office);


        $description = new TextArea('description', array(
            'required' => 'required',
            'id' => 'description',
            'name' => 'job[description]',
            'class' => 'summernote',
            ));
        $description->setLabel('* Descrição');
        $description->addFilter('trim');
        $description->addValidator(new PresenceOf(array(
            'message' => 'A descrição é obrigatoria'
            )));
        $this->add($description);

        $status = new Select(
            'status',
            array(
                '' => 'Escolha uma opção',
                'E' => 'Ativo',
                'D' => 'Finalizada',
                'S' => 'Suspenso',
                'N' => 'Novo',
                ),
            array(
                'required' => 'required',
                'id' => 'status',
                'name' => 'job[status]',
                'class' => 'form-control'
                )
        );
        $status->setLabel('* Status da vaga');
        $status->addValidator(new PresenceOf(array(
            'message' => 'O status é obrigatorio'
            )));
        $this->add($status);

        $salary = new text(
            'salary',
            array(
                'id' => 'salary',
                'name' => 'job[salary]',
                'class' => 'form-control decimal'
                )
        );
        $salary->setLabel('Salario');
        $this->add($salary);

        $schedule = new text(
            'schedule',
            array(
                'id' => 'schedule',
                'name' => 'job[schedule]',
                'class' => 'form-control',
                )
        );
        $schedule->setLabel('Horario de trabalho');
        $this->add($schedule);

        $email = new Email('email', array(
            'required' => 'required',
            'id' => 'email',
            'name' => 'job[email]',
            'class' => 'form-control',
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

        $mandatoryRequirements = new TextArea('mandatoryRequirements', array(
            'id' => 'mandatoryRequirements',
            'name' => 'job[mandatoryRequirements]',
            'class' => 'summernote'
            ));
        $mandatoryRequirements->setLabel('Requisitos obrigatorios');
        $mandatoryRequirements->addFilter('trim');
        $this->add($mandatoryRequirements);

        $desireableRequirements = new TextArea('desireableRequirements', array(
            'id' => 'desireableRequirements',
            'name' => 'job[desireableRequirements]',
            'class' => 'summernote',
            ));
        $desireableRequirements->setLabel('Requisitos desejaveis');
        $desireableRequirements->addFilter('trim');
        $this->add($desireableRequirements);

        $benefits = new TextArea('benefits', array(
            'id' => 'benefits',
            'name' => 'job[benefits]',
            'class' => 'summernote',
            ));
        $benefits->setLabel('Beneficios');
        $benefits->addFilter('trim');
        $this->add($benefits);

        $operationalArea = new Text('operationalArea', array(
            'id' => 'operationalArea',
            'name' => 'job[operationalArea]',
            'class' => 'form-control tm-input',
            'rel' => 'tags_'.uniqid(),
            ));
        $operationalArea->setLabel('Area de atuação');
        $operationalArea->addFilter('trim');
        $this->add($operationalArea);


        $jobContract_idJobContract = new Select(
            'jobContract_idJobContract',
            Jobcontract::find(),
            array(
                'using' => array('idJobContract', 'description'),
                'required' => 'required',
                'id' => 'jobContract_idJobContract',
                'name' => 'job[jobContract_idJobContract]',
                'class' => 'form-control',
                )
        );
        $jobContract_idJobContract->setLabel('* Tipo de vinculo');
        $jobContract_idJobContract->addValidator(new PresenceOf(array(
            'message' => 'Vinculo obrigatorio'
            )));
        $this->add($jobContract_idJobContract);

        $confidential = new Check('confidential', array(
            'id' => 'confidential',
            'name' => 'job[confidential]',
            'value' => '1',
            'class' => 'form-control',
            ));
        $confidential->setLabel('Vaga confidencial');
        $this->add($confidential);

        $expectedSalary = new Check('expectedSalary', array(
            'id' => 'expectedSalary',
            'name' => 'job[expectedSalary]',
            'value' => '1',
            'class' => 'form-control',
            ));
        $expectedSalary->setLabel('Pretensão salarial obrigatória');
        $this->add($expectedSalary);

    }


    public function forms()
    {
        // var_dump($this);
        $this->form['idJob'] = $this->render('idJob');
        $this->form['office'] = $this->renderDecorated('office');
        $this->form['description'] = $this->renderDecorated('description');
        $this->form['status'] = $this->renderDecorated('status');
        $this->form['salary'] = $this->renderDecorated('salary');
        $this->form['schedule'] = $this->renderDecorated('schedule');
        $this->form['email'] = $this->renderDecorated('email');
        $this->form['mandatoryRequirements'] = $this->renderDecorated('mandatoryRequirements');
        $this->form['desireableRequirements'] = $this->renderDecorated('desireableRequirements');
        $this->form['benefits'] = $this->renderDecorated('benefits');
        $this->form['operationalArea'] = $this->renderTags('operationalArea');
        $this->form['jobContract_idJobContract'] = $this->renderDecorated('jobContract_idJobContract');
        $this->form['confidential'] = $this->renderCheck('confidential', array('Sim', 'Não'));
        $this->form['expectedSalary'] = $this->renderCheck('expectedSalary', array('Sim', 'Não'));
        return $this->form;
    }
}
