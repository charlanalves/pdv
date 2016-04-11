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
use App\Models\AreaOperation as AreaOperation;

class SimulatedSeachForm extends BaseForm
{

    private $form;

    public function initialize()
    {
        $ao = AreaOperation::query()
            ->columns(array('AO.idAreaOperation', 'concat(App\Models\AreaOperation.description, " ",AO.description) as description'))
            ->Join('App\Models\AreaOperation', 'AO.areaOperation_idAreaOperation = App\Models\AreaOperation.idAreaOperation', 'AO')
            ->orderBy('App\Models\AreaOperation.description ASC')
            ->execute();

        $aux[''] = 'Selecione uma materia';
        foreach ($ao->toArray() as $key) {
            $aux[$key['idAreaOperation']] = $key['description'];
        }

        $areaOperation = new Select(
            'areaOperation',
            $aux,
            array(
            'id' => 'filter',
            'name' => 'filter',
            'class' => 'form-control',
            'value' => $this->request->get('filter')
            )
        );

        $this->add($areaOperation);

    }


    public function forms()
    {
        // var_dump($this);
        $this->form['areaOperation'] = $this->render('areaOperation');
        return $this->form;
    }
}
