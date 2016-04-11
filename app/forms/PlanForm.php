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
use App\Models\Profiles as Profiles;

class PlanForm extends BaseForm
{

    private $form;
    private $count;

    public function initialize($object = null, $count = 0)
    {
        if ($object) {
            $this->setEntity($object);
        }
        $this->count = $count;
        $id = new Hidden('idPlan', array(
           'name' => 'plan[idPlan]',
           'id' => 'idPlan_'.uniqid(),
           ));
        $this->add($id);


        $description = new Text('description', array(
            'name' => 'plan[description]',
            'id' => 'description_'.uniqid(),
            'class' => 'form-control description',
            'rel' => 'description',
            ));
        $description->setLabel('* Plano');
        $description->addFilter('trim');
        $description->addValidator(new PresenceOf(array(
         'message' => 'O plano é requerido'
        )));
        $this->add($description);

        $value = new Text('value', array(
            'name' => 'plan[value]',
            'id' => 'value_'.uniqid(),
            'class' => 'form-control value',
            'rel' => 'value',
            ));
        $value->setLabel('* Valor');
        $value->addFilter('trim');
        $value->addValidator(new PresenceOf(array(
         'message' => 'O valor é requerido'
        )));
        $this->add($value);

        $days = new Text('days', array(
            'name' => 'plan[days]',
            'id' => 'days_'.uniqid(),
            'class' => 'form-control days',
            'rel' => 'days',
            ));
        $days->setLabel('* Dias a adicionar');
        $days->addFilter('trim');
        $days->addValidator(new PresenceOf(array(
         'message' => 'O numero de dias é requerido'
        )));
        $this->add($days);

        $profiles_idProfiles = new Select(
            'profiles_idProfiles',
            Profiles::find('enabled = 1'),
            array(
                'using' => array('idProfiles', 'name'),
                'required' => 'required',
                'id' => 'profiles_idProfiles',
                'name' => 'plan[profiles_idProfiles]',
                'class' => 'form-control'
                )
        );
        $profiles_idProfiles->setLabel('* Perfil de permissões');
        $profiles_idProfiles->addValidator(new PresenceOf(array(
            'message' => 'Opção obrigatoria'
            )));
        $this->add($profiles_idProfiles);

    }


    public function forms()
    {
        $this->form['idPlan'] = $this->render('idPlan');
        $this->form['description'] = $this->renderDecorated('description');
        $this->form['value'] = $this->renderDecorated('value');
        $this->form['days'] = $this->renderDecorated('days');
        $this->form['profiles_idProfiles'] = $this->renderDecorated('profiles_idProfiles');
        return $this->form;
    }
}
