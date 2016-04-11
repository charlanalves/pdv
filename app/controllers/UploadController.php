<?php
namespace App\Controllers;

use Phalcon\Mvc\View;
use Phalcon\Http\Response;
//controllers
use App\Controllers\BaseController as BaseController;
use App\Models\Upload as Upload;

class UploadController extends BaseController
{

    private $typeAllow = array(
            'jpg',
            'jpeg',
            'gif',
            'png',
            'pdf',
            'image/jpg',
            'image/png',
            'image/gif',
            'image/jpeg',
        );

    public $error;
    public $success;

    public function uploadAction()
    {
        echo 'aaaa';
        if ($this->request->hasFiles() == true) {
            foreach ($this->request->getUploadedFiles() as $file) {
                echo $file->getName();
                $type = mb_strtolower($file->getRealType());
                if (array_search($type, $this->typeAllow) === false) {
                    $this->error[] = array(
                        'image' => $file->getName(),
                        'extension' => $file->getRealType(),
                        'size' => $file->getSize(),
                        'message' => 'Extensão invalida.'
                    );
                } else {
                    $upload = new Upload();
                    $upload->setOriginal($file->getName());
                    $serverName = md5(date('YmdHis').$file->getName()).'.'.$file->getRealType();
                    $upload->setServer($serverName);
                    $upload->setEnabled(1);
                    if ($file->moveTo(UPLOAD_DIR . $file->getName())) {
                        if ($upload->save()) {
                            $this->success[] = array(
                                'image' => $file->getName(),
                                'extension' => $file->getRealType(),
                                'size' => $file->getSize(),
                                'idUpload' => $upload->getIdUpload(),
                            );
                        }
                    }
                }
            }

            if ($this->request->isAjax()) {
                return json_encode(array('success' => $this->success, 'error' => $this->error));
            } else {
                return true;
            }
        }
        var_dump('aaaa');
    }

    public function uploadEditorAction()
    {
        if ($this->request->hasFiles() == true) {
            foreach ($this->request->getUploadedFiles() as $file) {
                $type = mb_strtolower($file->getRealType());
                if (array_search($type, $this->typeAllow) === false) {
                    $this->error[] = array(
                        'image' => $file->getName(),
                        'extension' => $file->getRealType(),
                        'size' => $file->getSize(),
                        'message' => 'Extensão invalida.'
                    );
                } else {
                    if ($file->moveTo(UPLOAD_DIR . $file->getName())) {
                        $this->success[] = array(
                            'image' => $file->getName(),
                            'size' => $file->getSize()
                        );
                    } else {
                        $this->error[] = 'Sem permissao para upload';
                    }
                }
            }

            if ($this->request->isAjax()) {
                echo json_encode(array('img' => BASE_UPLOAD_PDV.$this->success[0]['image'], 'error' => $this->error));
            } else {
                return true;
            }
        }
    }

    public function indexAction()
    {
        header('Location: '. $this->url->getBaseUri());
        exit;
    }
}
