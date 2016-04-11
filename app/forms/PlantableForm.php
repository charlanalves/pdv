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
use App\Models\Plantable as Plantable;

class PlantableForm extends BaseForm
{

    private $form;
    private $count;

    public function initialize($object = null, $count = 0)
    {
        if ($object) {
            $this->setEntity($object);
        }
        $this->count = $count;
        $id = new Hidden('idPlantable', array(
           'id' => 'idPlantable',
           'name' => 'plantable['.$this->count.'][idPlantable]',
           'id' => 'idPlantable_'.uniqid(),
           ));
        $this->add($id);

        $description = new Text('description', array(
            'name' => 'plantable['.$this->count.'][description]',
            'class' => 'form-control',
            'id' => 'description_'.uniqid(),
            ));
        $description->setLabel('Descrição');
        $description->addFilter('trim');
        $this->add($description);

        $planTable_idPlanTable = new Select(
            'planTable_idPlanTable',
            Plantable::find('planTable_idPlanTable is null'),
            array(
                'using' => array('idPlanTable', 'description'),
                'required' => 'required',
                'id' => 'planTable_idPlanTable'.uniqid(),
                'name' => 'plantable['.$this->count.'][planTable_idPlanTable]',
                'class' => 'form-control'
                )
        );
        $planTable_idPlanTable->setLabel('* Linha');
        $planTable_idPlanTable->addValidator(new PresenceOf(array(
            'message' => 'Opção obrigatoria'
            )));
        $this->add($planTable_idPlanTable);

    }


    public function forms()
    {
        $this->form['idPlantable'] = $this->render('idPlantable');
        $this->form['description'] = $this->renderDecorated('description');
        $this->form['planTable_idPlanTable'] = $this->renderDecorated('planTable_idPlanTable');
        return $this->form;
    }
}
