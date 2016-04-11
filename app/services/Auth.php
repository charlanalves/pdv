<?php
namespace App\Services;

// use Vokuro\Models\RememberTokens;
// use Vokuro\Models\FailedLogins;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\User\Component;
use App\Models\Usuario as Usuario;
use App\Models\Accesslog as Accesslog;

/**
 * Vokuro\Auth\Auth
 * Manages Authentication/Identity Management in Vokuro
 */
class Auth extends Component
{

    /**
     * Checks the user credentials
     *
     * @param array $credentials
     * @return boolan
     */
    public function check($credentials)
    {

        // Check if the user exist
        $user = Usuario::findFirstByLogin($credentials['email']);
        if ($user == false) {
            // $this->registerUserThrottling(0);
            $this->flash->error('Login ou senha invalido');
            return false;
            // throw new \Exception('Wrong email/password combination');
        }

        // Check the password
        if (!$this->checkHash($credentials['password'], $user->senha)) {
            // $this->registerUserThrottling($user->id);
            // throw new \Exception('Wrong email/password combination');
            $this->flash->error('Login ou senha invalido');
            return false;
        }

        // Check if the user was flagged
        //$this->checkUserFlags($user);

        // Register the successful login
        //$this->saveSuccessLogin($user);

        // Check if the remember me was selected
        // if (isset($credentials['remember'])) {
        //     $this->createRememberEnviroment($user);
        // }
        $profilePicture = 'img/avatars/1.jpg';
        //foreach ($user->UserHasUpload as $img) {
        //    if ($img->Upload->getServer()) {
        //        $profilePicture = '/upload/'.$img->Upload->getServer();
        //    }
        //}
        $dadosUn = $user->UnidadeNegocioHasUsuario[0]->UnidadeNegocio->toArray();

        if ($user->UnidadeNegocioHasUsuario[0]->UnidadeNegocio->Empresa->getAtivo() == 0) {
            $this->flash->error('Empresa Inativa');
            return false;
        }

        $this->montarSessao($user, $dadosUn, $profilePicture);

        return true;
    }

  

    public function alterarSessao($unidade, $usuario)
    {
        $user = Usuario::find(array(
            "conditions" => 'cd_usuario = :usuario:',
            'bind' => array('usuario' => $usuario)
            ));

        if ($user->valid() == false) {
            $this->flash->error('Login ou senha invalido');
            return false;
        }

        $user = $user[0];
        $dadosUn = $user->getUnidadeNegocioHasUsuario('unidade_negocio_cd_unidade = '.$unidade)[0]->UnidadeNegocio->toArray();
        $profilePicture = 'img/avatars/1.jpg';

        if ($user->UnidadeNegocioHasUsuario[0]->UnidadeNegocio->Empresa->getAtivo() == 0) {
            $this->flash->error('Empresa Inativa');
            return false;
        }

        $this->montarSessao($user, $dadosUn, $profilePicture);
        return true;

    }

    private function checkHash($password, $passVerify)
    {
        return md5(md5($password).'F1BER') == $passVerify;
    }

    /**
     * Creates the remember me environment settings the related cookies and generating tokens
     *
     * @param Vokuro\Models\Users $user
     */
    public function saveSuccessLogin($user)
    {
        $successLogin = new Accesslog();
        $successLogin->setUserIduser($user->getIdUser());
        $successLogin->setIp($this->request->getClientAddress());
        $successLogin->setUserAgent($this->request->getUserAgent());
        if (!$successLogin->save()) {
            $messages = $successLogin->getMessages();
            throw new Exception($messages[0]);
        }
    }

    /**
     * Implements login throttling
     * Reduces the efectiveness of brute force attacks
     *
     * @param int $userId
     */
    public function registerUserThrottling($userId)
    {
        $failedLogin = new FailedLogins();
        $failedLogin->usersId = $userId;
        $failedLogin->ipAddress = $this->request->getClientAddress();
        $failedLogin->attempted = time();
        $failedLogin->save();

        $attempts = FailedLogins::count(array(
            'ipAddress = ?0 AND attempted >= ?1',
            'bind' => array(
                $this->request->getClientAddress(),
                time() - 3600 * 6
            )
        ));

        switch ($attempts) {
            case 1:
            case 2:
                // no delay
                break;
            case 3:
            case 4:
                sleep(2);
                break;
            default:
                sleep(4);
                break;
        }
    }

    /**
     * Creates the remember me environment settings the related cookies and generating tokens
     *
     * @param Vokuro\Models\Users $user
     */
    public function createRememberEnviroment(Usuario $user)
    {
        $userAgent = $this->request->getUserAgent();
        $token = md5($user->email . $user->password . $userAgent);

        $remember = new RememberTokens();
        $remember->usersId = $user->id;
        $remember->token = $token;
        $remember->userAgent = $userAgent;

        if ($remember->save() != false) {
            $expire = time() + 86400 * 8;
            $this->cookies->set('RMU', $user->id, $expire);
            $this->cookies->set('RMT', $token, $expire);
        }
    }

    /**
     * Check if the session has a remember me cookie
     *
     * @return boolean
     */
    public function hasRememberMe()
    {
        return $this->cookies->has('RMU');
    }

    /**
     * Logs on using the information in the coookies
     *
     * @return Phalcon\Http\Response
     */
    public function loginWithRememberMe()
    {
        $userId = $this->cookies->get('RMU')->getValue();
        $cookieToken = $this->cookies->get('RMT')->getValue();

        $user = Usuario::findFirstById($userId);
        if ($user) {
            $userAgent = $this->request->getUserAgent();
            $token = md5($user->email . $user->password . $userAgent);

            if ($cookieToken == $token) {
                $remember = RememberTokens::findFirst(array(
                    'usersId = ?0 AND token = ?1',
                    'bind' => array(
                        $user->id,
                        $token
                    )
                ));
                if ($remember) {
                    // Check if the cookie has not expired
                    if ((time() - (86400 * 8)) < $remember->createdAt) {
                        // Check if the user was flagged
                        $this->checkUserFlags($user);

                        // Register identity
                        $this->session->set('auth-identity', array(
                            'id' => $user->id,
                            'name' => $user->name,
                            'profile' => $user->profile->name
                        ));

                        // Register the successful login
                        $this->saveSuccessLogin($user);

                        return $this->response->redirect('users');
                    }
                }
            }
        }

        $this->cookies->get('RMU')->delete();
        $this->cookies->get('RMT')->delete();

        return $this->response->redirect('session/login');
    }

    /**
     * Checks if the user is banned/inactive/suspended
     *
     * @param Vokuro\Models\Users $user
     */
    public function checkUserFlags(Usuario $user)
    {
        if ($user->getActive() == 'S') {
            throw new \Exception('Usuário suspenso');
        }

        if ($user->getDeleted() != 0) {
            throw new \Exception('Usuário inexistente');
        }

    }

    /**
     * Returns the current identity
     *
     * @return array
     */
    public function getIdentity()
    {
        return $this->session->get('auth-identity');
    }

    /**
     * Returns the current identity
     *
     * @return string
     */
    public function getName()
    {
        $identity = $this->session->get('auth-identity');
        return $identity['name'];
    }

    /**
     * Removes the user identity information from session
     */
    public function remove()
    {
        if ($this->cookies->has('RMU')) {
            $this->cookies->get('RMU')->delete();
        }
        if ($this->cookies->has('RMT')) {
            $this->cookies->get('RMT')->delete();
        }

        $this->session->remove('auth-identity');
    }

    /**
     * Auths the user by his/her id
     *
     * @param int $id
     */
    public function authUserById($id)
    {
        $user = Usuario::findFirstByIdUser($id);
        if ($user == false) {
            throw new Exception('The user does not exist');
        }

        $this->checkUserFlags($user);

        $this->session->set('auth-identity', array(
            'id' => $user->id,
            'name' => $user->name,
            'profile' => $user->profile->name
        ));
    }

    /**
     * Get the entity related to user in the active identity
     *
     * @return \Vokuro\Models\Users
     */
    public function getUser()
    {
        $identity = $this->session->get('auth-identity');
        if (isset($identity['id'])) {
            $user = Usuario::findFirstByIdUser($identity['id']);
            if ($user == false) {
                throw new Exception('The user does not exist');
            }

            return $user;
        }

        return false;
    }

    public function usuarioUnidadeNegocio($usuario, $tipo, $unidade, $validarUser = false)
    {
        $conditions = 'App\Models\UnidadeNegocioHasUsuario.unidade_negocio_cd_unidade = :unidade:';
        $bind['unidade'] = $unidade;

        if ($validarUser) {
            $conditions .= 'AND App\Models\UnidadeNegocioHasUsuario.usuario_cd_usuario = :validarUser:';
            $bind['validarUser'] = $validarUser;
        }

        if ($tipo == 5) {
            $conditions .= ' AND ( App\Models\Usuario.parent = :usuario: or App\Models\Usuario.cd_usuario = :usuario:)';
            $bind['usuario'] = $usuario;
        }

        if ($tipo == 4) {
            $conditions .= ' AND ( App\Models\Usuario.cd_usuario = :usuario:)';
            $bind['usuario'] = $usuario;
        }


        $aFilter['conditions'] = $conditions;
        $aFilter['bind'] = $bind;
        $aFilter['order'] = 'App\Models\Usuario.cd_usuario asc';

        $data = \App\Models\UnidadeNegocioHasUsuario::search($aFilter);
        return $data;
    }

    private function montarSessao($user, $dadosUn, $profilePicture = '')
    {
        $this->session->set('auth-identity', array(
            'id' => $user->getCdusuario(),
            'name' => $user->getNome(),
            'unidade' => $dadosUn['cd_unidade'],
            'unidadeNome' => $dadosUn['descricao'],
            'unidadeArea' => $dadosUn['area_cd_area'],
            'unidadeEmpresa' => $dadosUn['empresa_cd_empresa'],
            'tipo' => $user->getTipo(),
            'picture' => $profilePicture,
            'email' => $user->getEmail(),
        ));
    }

    public function loginTransparente()
    {
        $ciSession = $this->cookies->get('ci_session');
        $valor     = $ciSession->getValue();
        $valor     = unserialize($valor);
        $sessao = \App\Models\CiSessions::find(array(
            "conditions" => 'session_id = :sessionId:',
            "bind" => array('sessionId' => $valor['session_id'])
            ));
        if ($sessao->valid()) {
            $sessao = $sessao[0];
            $dadosSessao = unserialize($sessao->getUserData());
            $user = Usuario::find(array(
                "conditions" => 'cd_usuario = :usuario:',
                'bind' => array('usuario' => $dadosSessao['cd_usuario'])
            ));
            if ($user->valid() == false) {
                return false;
            }

            $profilePicture = 'img/avatars/1.jpg';
            $dadosUn['cd_unidade'] = $dadosSessao['unidade'];
            $dadosUn['descricao'] = $dadosSessao['unidade_nome'];
            $dadosUn['area_cd_area'] = $dadosSessao['area'];
            $dadosUn['empresa_cd_empresa'] = $dadosSessao['empresa'];

            $this->montarSessao($user[0], $dadosUn, $profilePicture);
            return true;
        } else {
            return false;
        }
        return false;
    }
}
