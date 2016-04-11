<?php
namespace App\Services;

// use Vokuro\Models\RememberTokens;
// use Vokuro\Models\FailedLogins;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\User\Component;
use App\Models\Upload as Upload;

/**
 * Vokuro\Auth\Auth
 * Manages Authentication/Identity Management in Vokuro
 */
class ControlUpload extends Component
{

    private $typeAllow = array(
            'jpg' => 'image/jpg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'png' => 'image/png',
            'pdf' =>'application/pdf',
        );

    public $error;
    public $success;

    public function uploadAction()
    {
        var_dump(count($this->request->getUploadedFiles()));
        if ($this->request->hasFiles() == true) {
            foreach ($this->request->getUploadedFiles() as $file) {
                if (empty($file->getName())) {
                    return false;
                }
                $type = mb_strtolower($file->getRealType());
                $mimetype = array_search($type, $this->typeAllow);
                if ($mimetype === false) {
                    $this->error[] = array(
                        'image' => $file->getName(),
                        'extension' => $file->getRealType(),
                        'size' => $file->getSize(),
                        'message' => 'Extensão invalida.'
                    );
                } else {
                    $upload = new Upload();
                    $upload->setOriginal($file->getName());
                    $serverName = md5(date('YmdHis').$file->getName()).'.'.$mimetype;
                    $upload->setServer($serverName);
                    $upload->setEnabled(1);
                    if ($file->moveTo(UPLOAD_DIR . $serverName)) {
                        if ($upload->save()) {
                            $this->success[] = array(
                                'image' => $file->getName(),
                                'extension' => $type,
                                'size' => $file->getSize(),
                                'idUpload' => $upload->getIdUpload(),
                                'object' => $upload,
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
        return false;
    }

    public function delete(Upload $object)
    {
        if (is_file(UPLOAD_DIR.$object->getServer())) {
            unlink(UPLOAD_DIR.$object->getServer());
        }
        $object->delete();
    }
}
