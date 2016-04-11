<?php
namespace App\Controllers;

use Phalcon\Mvc\View;
use Phalcon\Http\Response;
use Phalcon\Mvc\Dispatcher;
//controllers
use App\Services\ControlUpload as ControlUpload;
use App\Controllers\BaseController as BaseController;
//models
use App\Models\User as User;
use App\Models\Address as Address;
use App\Models\Documents as Documents;
use App\Models\Additional as Additional;
use App\Models\Course as Course;
use App\Models\Academic as Academic;
use App\Models\Professionalhistory as Professionalhistory;
use App\Models\Contact as Contact;
use App\Models\Language as Language;
use App\Models\UserHasUpload as UserHasUpload;
//views
use App\Forms\UserForm as UserForm;
use App\Forms\AddressForm as AddressForm;
use App\Forms\DocumentsForm as DocumentsForm;
use App\Forms\AdditionalForm as AdditionalForm;
use App\Forms\CourseForm as CourseForm;
use App\Forms\AcademicForm as AcademicForm;
use App\Forms\ProfessionalHistoryForm as ProfessionalHistoryForm;
use App\Forms\ContactForm as ContactForm;
use App\Forms\LanguageForm as LanguageForm;

class CurriculumController extends BaseController
{

    public function initialize()
    {
        $this->breadCrumbs[] = array('link'=>'curriculum', 'text'=>'Curriculo');
    }

    public function indexAction()
    {
        $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Meu curriculo');
        $data['bc'] = $this->breadCrumbs;
        $data['save'] = 1;
        $this->assets
                ->collection('system')
                ->addJs('vendor/plugins/magnific/jquery.magnific-popup.js')
                ->addJs('js/jquery.meio.mask.js')
                ->addJs('js/system/curriculum/form.js')
                ->addJs('vendor/editors/summernote/summernote.min.js')
                ->addJs('vendor/plugins/tagmanager/tagmanager.js');

        $this->assets
                ->collection('css_before')
                ->addCss('vendor/plugins/magnific/magnific-popup.css')
                ->addCss('admin-tools/admin-plugins/admin-panels/adminpanels.css')
                ->addCss('fonts/icomoon/icomoon.css')
                ->addCss('admin-tools/admin-plugins/admin-modal/adminmodal.css')
                ->addCss('vendor/editors/summernote/summernote.css')
                ->addCss('vendor/editors/summernote/summernote-bs3.css')
                ->addCss('vendor/plugins/tagmanager/tagmanager.css');

        $error = 0;
        $data['page'] ='curriculum/form';

        $session = $this->session->get('auth-identity');
        $curriculum = User::findFirstByIdUser($session['id']);

        $data['curriculum'] = $curriculum->getIdUser();
        $curriculum->setPassword(null);

        $form = new UserForm($curriculum);

        $countForm = 0;
        if ($curriculum->Address->valid()) {
            foreach ($curriculum->Address as $address) {
                $addressList[$countForm] = new AddressForm($address, $countForm);
                $countForm++;
            }
        } else {
            $address = new Address();
            $addressList[$countForm] = new AddressForm($address, $countForm);
        }

        if ($curriculum->Documents->valid()) {
            foreach ($curriculum->Documents as $documents) {
                $formDoc = new DocumentsForm($documents);
            }
        } else {
            $documents = new Documents();
            $formDoc = new DocumentsForm($documents);
        }

        if ($curriculum->Additional->valid()) {
            foreach ($curriculum->Additional as $additional) {
                $formAdditional = new AdditionalForm($additional);
            }
        } else {
            $additional = new Additional();
            $formAdditional = new AdditionalForm($additional);
        }

        $countForm = 0;
        if ($curriculum->Course->valid()) {
            foreach ($curriculum->Course as $course) {
                $courseList[$countForm] = new CourseForm($course, $countForm);
                $countForm++;
            }
        } else {
            $course = new Course();
            $courseList[$countForm] = new CourseForm($course, $countForm);
        }

        $countForm = 0;
        if ($curriculum->Academic->valid()) {
            foreach ($curriculum->Academic as $academic) {
                $academicList[$countForm] = new AcademicForm($academic, $countForm);
                $countForm++;
            }
        } else {
            $academic = new Academic();
            $academicList[$countForm] = new AcademicForm($academic, $countForm);
        }

        $countForm = 0;
        if ($curriculum->Professionalhistory->valid()) {
            foreach ($curriculum->ProfessionalHistory as $history) {
                $historyList[$countForm] = new ProfessionalHistoryForm($history, $countForm);
                $countForm++;
            }
        } else {
            $history = new Professionalhistory();
            $historyList[$countForm] = new ProfessionalHistoryForm($history, $countForm);
        }

        $countForm = 0;
        if ($curriculum->Contact->valid()) {
            foreach ($curriculum->Contact as $contact) {
                $contactList[$countForm] = new ContactForm($contact, $countForm);
                $countForm++;
            }
        } else {
            $contact = new Contact();
            $contactList[$countForm] = new ContactForm($contact, $countForm);
        }

        $countForm = 0;
        if ($curriculum->Language->valid()) {
            foreach ($curriculum->Language as $language) {
                $languageList[$countForm] = new LanguageForm($language, $countForm);
                $countForm++;
            }
        } else {
            $language = new Language();
            $languageList[$countForm] = new LanguageForm($language, $countForm);
        }

        if ($this->request->isPost() == true) {
            $auxUser = $this->request->getPost('user');
            $auxUser2 = $curriculum->toArray();
            $user['idUser'] = $auxUser['idUser'];
            $user['name'] = $auxUser['name'];
            $user['email'] = $auxUser['email'];
            $user['type'] = $auxUser2['type'];
            $user['urlfy'] = $auxUser2['urlfy'];
            $user['status'] = $auxUser2['status'];
            $user['plan_idPlan'] = $auxUser2['plan_idPlan'];
            $user['profiles_idProfiles'] = $auxUser2['profiles_idProfiles'];
            $form->bind($user, $curriculum);
            if ($form->isValid()) {
                $countRequest = 0;
                $addressObj = array();
                $addressList = array();
                foreach ($this->request->getPost('address') as $addressForm) {
                    $addressObj[$countRequest] = new Address;
                    $addressList[$countRequest] = new AddressForm($addressObj[$countRequest], $countRequest);
                    $addressList[$countRequest]->bind($addressForm, $addressObj[$countRequest]);

                    if ($addressList[$countRequest]->isValid()) {
                        $countRequest++;
                    } else {
                        $error = 1;
                    }
                }
                $documents = new Documents;
                $formDoc = new DocumentsForm($documents);
                $formDoc->bind($this->request->getPost('documents'), $documents);

                if (!$formDoc->isValid()) {
                    $error = 1;
                }

                $additional = new Additional;
                $formAdditional = new AdditionalForm($additional);
                $additionalAux = $this->request->getPost('additional');
                $additionalTags = $this->request->getPost('hidden-additional');
                $additionalAux['areaOfWork'] = $additionalTags['areaOfWork'];
                $formAdditional->bind($additionalAux, $additional);

                if (!$formAdditional->isValid()) {
                    $error = 1;
                }

                $countRequest = 0;
                $courseList = array();
                $courseObj = array();
                foreach ($this->request->getPost('course') as $courseForm) {
                    $courseObj[$countRequest] = new Course;
                    $courseList[$countRequest] = new CourseForm($courseObj[$countRequest], $countRequest);
                    $courseList[$countRequest]->bind($courseForm, $courseObj[$countRequest]);

                    if ($courseList[$countRequest]->isValid()) {
                        $countRequest++;
                    } else {
                        $error = 1;
                    }
                }

                $countRequest = 0;
                $academicList = array();
                $academicObj = array();
                foreach ($this->request->getPost('academic') as $academicForm) {
                    $academicObj[$countRequest] = new Academic;
                    $academicList[$countRequest] = new AcademicForm($academicObj[$countRequest], $countRequest);
                    $academicList[$countRequest]->bind($academicForm, $academicObj[$countRequest]);

                    if ($academicList[$countRequest]->isValid()) {
                        $countRequest++;
                    } else {
                        $error = 1;
                    }
                }

                $countRequest = 0;
                $historyList = array();
                $historyObj = array();
                foreach ($this->request->getPost('professionalHistory') as $academicForm) {
                    $historyObj[$countRequest] = new Professionalhistory;
                    $historyList[$countRequest] = new ProfessionalHistoryForm($historyObj[$countRequest], $countRequest);
                    $historyList[$countRequest]->bind($academicForm, $historyObj[$countRequest]);

                    if ($historyList[$countRequest]->isValid()) {
                        $countRequest++;
                    } else {
                        $error = 1;
                    }
                }

                $countRequest = 0;
                $contactList = array();
                $contactObj = array();
                foreach ($this->request->getPost('contact') as $contactForm) {
                    $contactObj[$countRequest] = new Contact;
                    $contactList[$countRequest] = new ContactForm($contactObj[$countRequest], $countRequest);
                    $contactList[$countRequest]->bind($contactForm, $contactObj[$countRequest]);

                    if ($contactList[$countRequest]->isValid()) {
                        $countRequest++;
                    } else {
                        $error = 1;
                    }
                }

                $countRequest = 0;
                $languageList = array();
                $languageObj = array();
                foreach ($this->request->getPost('language') as $languageForm) {
                    $languageObj[$countRequest] = new Language;
                    $languageList[$countRequest] = new LanguageForm($languageObj[$countRequest], $countRequest);
                    $languageList[$countRequest]->bind($languageForm, $languageObj[$countRequest]);

                    if ($languageList[$countRequest]->isValid()) {
                        $countRequest++;
                    } else {
                        $error = 1;
                    }
                }

                if ($error === 0) {
                    $curriculum->Address->delete();
                    $curriculum->Address = $addressObj;

                    $curriculum->Documents->delete();
                    $curriculum->Documents = $documents;

                    $curriculum->Additional->delete();
                    $curriculum->Additional = $additional;

                    $curriculum->Course->delete();
                    $curriculum->Course = $courseObj;

                    $curriculum->Academic->delete();
                    $curriculum->Academic = $academicObj;

                    $curriculum->Professionalhistory->delete();
                    $curriculum->Professionalhistory = $historyObj;

                    $curriculum->Contact->delete();
                    $curriculum->Contact = $contactObj;

                    $curriculum->Language->delete();
                    $curriculum->Language = $languageObj;

                    $upload = new ControlUpload();
                    if ($upload->uploadAction()) {
                        foreach ($curriculum->UserHasUpload as $key) {
                            $upload->delete($key->Upload);
                        }
                        foreach ($upload->success as $key) {
                            $userHasUpload = new UserHasUpload();
                            $userHasUpload->setUserIdUser($curriculum->getIdUser());
                            $userHasUpload->setUploadIdUpload($key['idUpload']);
                            $userUpload[] = $userHasUpload;
                        }
                        $curriculum->UserHasUpload = $userUpload;
                    }

                    $curriculum->setDeleted(0);
                    if ($curriculum->save()) {
                        $this->flash->success("Curriculo salvo com sucesso!");
                    } else {
                        $this->flash->error("Ocorreu erro ao salvar!");
                    }
                } else {
                    $this->flash->error("Favor verificar os campos do curriculo!");
                }
            } else {
                $this->flash->error("Favor verificar os campos do curriculo!");
            }
        }
        $data['forms'] = $form->forms();
        foreach ($addressList as $key) {
            $data['address'][] = $key->forms();
        }
        foreach ($courseList as $key) {
            $data['course'][] = $key->forms();
        }

        foreach ($academicList as $key) {
            $data['academic'][] = $key->forms();
        }

        foreach ($historyList as $key) {
            $data['history'][] = $key->forms();
        }

        foreach ($contactList as $key) {
            $data['contact'][] = $key->forms();
        }

        foreach ($languageList as $key) {
            $data['language'][] = $key->forms();
        }

        $data['documents'] = $formDoc->forms();
        $data['additional'] = $formAdditional->forms();

        $data['img'] = false;
        foreach ($curriculum->UserHasUpload as $key) {
            $data['img']['server'] = '/upload/'.$key->Upload->getServer();
        }

        $data['ajax'] = false;
        echo $this->output('static/base', $data);

    }

    public function addCourseAction($position)
    {
        $course = new Course();
        $courseForm = new CourseForm($course, $position);
        $data['ajax'] = true;
        $data['course'][] = $courseForm->forms();
        echo $this->output('user/course', $data);
    }

    public function addAcademicAction($position)
    {
        $academic = new Academic();
        $academicForm = new AcademicForm($academic, $position);
        $data['ajax'] = true;
        $data['academic'][] = $academicForm->forms();
        echo $this->output('user/academic', $data);
    }

    public function addHistoryAction($position)
    {
        $history = new Professionalhistory();
        $historyForm = new ProfessionalhistoryForm($history, $position);
        $data['ajax'] = true;
        $data['history'][] = $historyForm->forms();
        echo $this->output('user/professionalHistory', $data);
    }

    public function addContactAction($position)
    {
        $contact = new Contact();
        $contactForm = new ContactForm($contact, $position);
        $data['ajax'] = true;
        $data['contact'][] = $contactForm->forms();
        echo $this->output('user/contact', $data);
    }
    public function addLanguageAction($position)
    {
        $language = new Language();
        $languageForm = new LanguageForm($language, $position);
        $data['ajax'] = true;
        $data['language'][] = $languageForm->forms();
        echo $this->output('user/language', $data);
    }

    public function cvAction($id = null, $pdf = false)
    {
        $data['pdf'] = false;

        $this->assets
            ->collection('css_before')
            ->addCss('css/curriculum/cv.css');
        if ($id != null) {
            $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Marcus Paulo Mazzon Dias');
            $curriculum = User::findFirstByIdUser($id);
        } else {
            $session = $this->session->get('auth-identity');
            $curriculum = User::findFirstByIdUser($session['id']);
            $this->breadCrumbs[] = array('link'=>'#', 'text'=>'Meu curriculo');
        }

        $data['img'] = false;
        foreach ($curriculum->UserHasUpload as $key) {
            $data['img']['server'] = $key->Upload->getThumborResize(
                130,
                130,
                'upload/'.$key->Upload->getServer()
            );
        }

        $data['bc'] = $this->breadCrumbs;
        $data['page'] ='curriculum/cv';
        $data['curriculum'] = $curriculum;

        foreach ($curriculum->Additional as $key) {
            $data['additional'] = $key->toArray();
        }

        foreach ($curriculum->getProfessionalhistory(array('order'=>'init desc')) as $key) {
            $data['professionalHistory'][] = $key;
        }

        foreach ($curriculum->getCourse(array('order'=>'init desc')) as $key) {
            $data['course'][] = $key;
        }

        foreach ($curriculum->getAcademic(array('order'=>'init desc')) as $key) {
            $data['academic'][] = $key;
        }


        $data['additional']['birth'] = $this->getIdade($data['additional']['birth']);
        $data['additional']['areaOfWork'] = explode(',', $data['additional']['areaOfWork']);

        if ($pdf !== false) {
            $data['pdf'] = true;
            $mpdf = new \mPDF('', '', 0, '', 0, 0, 0, 0, 0, 0);
            $mpdf->WriteHTML($this->output('curriculum/cv', $data));
            $mpdf->SetDisplayMode('fullpage');
            header('Content-Type: application/pdf; name="Curriculo_'.$curriculum->getName().'.pdf"');
            header('Content-Disposition: attachment; filename="Curriculo_'.$curriculum->getName().'.pdf');
            echo $mpdf->Output('', 'S');
            exit;
        } else {
            echo $this->output('static/base', $data);
        }
    }

    public function getIdade($date)
    {
        list($year, $month, $day) = explode('-', $date);
        $today = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        $birth = mktime(0, 0, 0, $month, $day, $year);

        $idade = floor((((($today - $birth) / 60) / 60) / 24) / 365.25);

        return $idade;
    }
}
