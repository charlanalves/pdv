<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use App\Forms\BaseForm as BaseForm;

class AdditionalForm extends BaseForm
{

    private $form;
    private $count;

    public function initialize($object = null, $count = 0)
    {
        if ($object) {
            $this->setEntity($object);
        }
        $this->count = $count;
        $id = new Hidden('idAdditional', array(
           'id' => 'idAdditional',
           'name' => 'additional[idAdditional]',
           ));
        $this->add($id);


        $nationality = new Text('nationality', array(
            'id' => 'nationality',
            'name' => 'additional[nationality]',
            'class' => 'form-control'
            ));
        $nationality->setLabel('Nacionalidade');
        $nationality->addFilter('trim');
        $this->add($nationality);

        $maritalStatus = new Select(
            'maritalStatus',
            array(
            '' => 'Escolha uma opção',
            'Solteiro' => 'Solteiro',
            'Casado' => 'Casado',
            'Divorciado' => 'Divorciado',
            'União estavel' => 'União estavel',
            'Viúvo' => 'Viúvo',
            ),
            array(
            'id' => 'maritalStatus',
            'name' => 'additional[maritalStatus]',
            'class' => 'form-control'
            )
        );
        $maritalStatus->setLabel('Estado Civil');
        $maritalStatus->addFilter('trim');
        $this->add($maritalStatus);

        $birth = new Text('birth', array(
            'id' => 'birth',
            'name' => 'additional[birth]',
            'class' => 'gui-input'
            ));
        $birth->setLabel('Data de nascimento');
        $birth->addFilter('trim');
        $this->add($birth);

        $aboutMe = new TextArea('aboutMe', array(
            'required' => 'required',
            'id' => 'aboutMe',
            'name' => 'additional[aboutMe]',
            'class' => 'summernote'
            ));
        $aboutMe->setLabel('Carta de apresentação');
        $aboutMe->addFilter('trim');
        $this->add($aboutMe);

        $careerGoal = new TextArea('careerGoal', array(
            'required' => 'required',
            'id' => 'careerGoal',
            'name' => 'additional[careerGoal]',
            'class' => 'summernote'
            ));
        $careerGoal->setLabel('Objetivos profissionais');
        $careerGoal->addFilter('trim');
        $this->add($careerGoal);

        $additionalInformation = new TextArea('additionalInformation', array(
            'required' => 'required',
            'id' => 'additionalInformation',
            'name' => 'additional[additionalInformation]',
            'class' => 'summernote'
            ));
        $additionalInformation->setLabel('Informações adicionais');
        $additionalInformation->addFilter('trim');
        $this->add($additionalInformation);

        $salaryInterest = new Text('salaryInterest', array(
            'required' => 'required',
            'id' => 'salaryInterest',
            'name' => 'additional[salaryInterest]',
            'class' => 'form-control',
            'alt' => 'decimal'
            ));
        $salaryInterest->setLabel('Pretenção salárial');
        $salaryInterest->addFilter('trim');
        $this->add($salaryInterest);

        $areaOfWork = new Text('areaOfWork', array(
            'id' => 'areaOfWork',
            'name' => 'additional[areaOfWork]',
            'class' => 'form-control tm-input',
            'rel' => 'tags_'.uniqid(),
            'placeHolder' => 'Após inserir pressione enter ou , para inserir uma área de atuação'
            ));
        $areaOfWork->setLabel('Área de atuação');
        $areaOfWork->addFilter('trim');
        $this->add($areaOfWork);

    }


    public function forms()
    {
        $this->form['idAdditional'] = $this->render('idAdditional');
        $this->form['nationality'] = $this->renderDecorated('nationality');
        $this->form['maritalStatus'] = $this->renderDecorated('maritalStatus');
        $this->form['birth'] = $this->renderDate('birth');
        $this->form['aboutMe'] = $this->renderDecorated('aboutMe');
        $this->form['careerGoal'] = $this->renderDecorated('careerGoal');
        $this->form['additionalInformation'] = $this->renderDecorated('additionalInformation');
        $this->form['salaryInterest'] = $this->renderDecorated('salaryInterest');
        $this->form['areaOfWork'] = $this->renderTags('areaOfWork');
        return $this->form;
    }
}
