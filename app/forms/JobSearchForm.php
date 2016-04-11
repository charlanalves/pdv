<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\password;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Validation\Validator\Confirmation;
use App\Models\Jobcontract as Jobcontract;

class JobSearchForm extends BaseForm
{

    private $form;

    public function initialize()
    {

        $office = new Text('office', array(
            'id' => 'office',
            'name' => 'office',
            'class' => 'event-name gui-input',
            'placeholder' => 'Cargo, titulo ou descrição'
            ));
        $office->addFilter('trim');
        $this->add($office);

        $location = new Text('location', array(
            'id' => 'location',
            'name' => 'location',
            'class' => 'event-name gui-input',
            'placeholder' => 'Cidade ou estado (SP, RJ, MG ...)'
            ));
        $location->addFilter('trim');
        $this->add($location);

        $area = new Text('area', array(
            'id' => 'area',
            'name' => 'area',
            'class' => 'event-name gui-input',
            'placeholder' => 'Área de atuação'
            ));
        $area->addFilter('trim');
        $this->add($area);


        $contract = new Select(
            'contract',
            Jobcontract::find(),
            array(
                'using' => array('idJobContract', 'description'),
                'id' => 'contract',
                 'useEmpty'   => true,
                 'emptyText'  => 'Escolha um opção',
                 'emptyValue' => ''
                )
        );
        $this->add($contract);

    }


    public function forms()
    {
        // var_dump($this);
        $this->form['office'] = $this->render('office');
        $this->form['location'] = $this->render('location');
        $this->form['area'] = $this->render('area');
        $this->form['contract'] = $this->render('contract');
        return $this->form;
    }
}
