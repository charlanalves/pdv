<?php
namespace App\Services;

use Phalcon\Mvc\User\Component;
use Phalcon\Acl\Adapter\Memory as AclMemory;
use Phalcon\Acl\Role as AclRole;
use Phalcon\Acl\Resource as AclResource;
use App\Models\Profiles;
use App\Models\User;
use App\Models\Modules;
use App\Models\Rotina;

/**
 * Vokuro\Acl\Acl
 */
class Acl extends Component
{

    /**
     * The ACL Object
     *
     * @var \Phalcon\Acl\Adapter\Memory
     */
    private $acl;

    /**
     * The filepath of the ACL cache file from APP_DIR
     *
     * @var string
     */
    private $filePath = '/cache/acl/data.txt';

    private $whiteList = array(
        'system' => array(
            'login',
        ),
        'curriculum' => array(
            'cv',
        ),
    );

    /**
     * Define the resources that are considered "private". These controller => actions require authentication.
     *
     * @var array
     */
    private $privateResources;
    private $addicionalPrivateResources = array (
            'system' => array(
                'logout',
                'listarUsuarioUnidadeNegocio',
                'alterarUsuario',
             ),
            'emailmarketing' => array(
                'index',
                'form',
                'list',
                'delete',
                'buscarCidadePorEstado',
                'enviarEmailMarketing',
                'buscarHistoricoEmailEnviado',
                'historico',
                'historicoGrid',
            ),
            'upload' => array(
                'uploadEditorAction',
            ),
            'index' => array(
                'index'
            ),
            'curriculum' => array(
                'addCourse',
                'addAcademic',
                'addHistory',
                'addContact',
                'addLanguage',
            ),
            'job' => array(
                'sendCv',
            ),
            'simulated' => array(
                'computing',
            ),
            'plan' => array(
                'addPlanTable'
            ),
            'pdv' => array(
                'index',
                'abrircaixa',
                'finalizarVenda',
                'buscarDadosCliente',
                'buscarCep'
            )
        );


        /**
     * Checks white list
     *
     * @param string $controllerName
     * @return boolean
     */
    public function isWhiteList($controllerName, $actionName)
    {
        if (isset($this->whiteList[$controllerName])) {
            return array_search($actionName, $this->whiteList[$controllerName]) !== false ;
        }
        return false;
    }

    /**
     * Checks if a controller is private or not
     *
     * @param string $controllerName
     * @return boolean
     */
    public function isPrivate($controllerName)
    {
        $permissions = new Rotina();
        $this->privateResources = $permissions->getPrivatePermissions($this->addicionalPrivateResources);
        return isset($this->privateResources[$controllerName]);
    }

    /**
     * Checks if the current profile is allowed to access a resource
     *
     * @param string $profile
     * @param string $controller
     * @param string $action
     * @return boolean
     */
    public function isAllowed($profile, $controller, $action)
    {
        return $this->getAcl()->isAllowed($profile, $controller, $action);
    }

    /**
     * Returns the ACL list
     *
     * @return Phalcon\Acl\Adapter\Memory
     */
    public function getAcl()
    {
        // Check if the ACL is already created
        if (is_object($this->acl)) {
            return $this->acl;
        }


        // Check if the ACL is in APC
        // if (function_exists('apc_fetch')) {
        //     $acl = apc_fetch('app-acl');
        //     if (is_object($acl)) {
        //         $this->acl = $acl;
        //         return $acl;
        //     }
        // }

        // Check if the ACL is already generated
        // if (!file_exists(APP_DIR . $this->filePath)) {
            $this->acl = $this->rebuild();
            return $this->acl;
        // }

        // Get the ACL from the data file
        $data = file_get_contents(APP_DIR . $this->filePath);
        $this->acl = unserialize($data);

        // Store the ACL in APC
        if (function_exists('apc_store')) {
            apc_store('app-acl', $this->acl, 3600);
        }

        return $this->acl;
    }

    /**
     * Returns the permissions assigned to a profile
     *
     * @param Profiles $profile
     * @return array
     */
    public function getPermissions(Profiles $profile)
    {
        $permissions = array();
        foreach ($profile->getPermissions() as $permission) {
            $permissions[$permission->resource . '.' . $permission->action] = true;
        }
        return $permissions;
    }

    /**
     * Returns all the resoruces and their actions available in the application
     *
     * @return array
     */
    public function getResources()
    {
        $permissions = new Rotina();
        $this->privateResources = $permissions->getPrivatePermissions($this->addicionalPrivateResources);
        return $this->privateResources;
    }


    /**
     * Rebuilds the access list into a file
     *
     * @return \Phalcon\Acl\Adapter\Memory
     */
    public function rebuild()
    {
        $permissions = new Rotina();
        $this->privateResources = $permissions->getPrivatePermissions($this->addicionalPrivateResources);
        var_dump($this->privateResources);
        $acl = new AclMemory();

        $acl->setDefaultAction(\Phalcon\Acl::DENY);

        // Register roles
        $profiles = Profiles::find('enabled = 1');

        foreach ($profiles as $profile) {
            $acl->addRole(new AclRole($profile->getName()));
        }

        foreach ($this->privateResources as $resource => $actions) {
            $acl->addResource(new AclResource($resource), $actions);
        }

        // Grant acess to private area to role Users
        foreach ($profiles as $profile) {
            // Grant permissions in "permissions" model
            foreach ($profile->getPermissions() as $permission) {
                $acl->allow($profile->getName(), $permission->getResource(), $permission->getAction());
            }

            // Garantir permissão a todos os grupos
            // $acl->allow($profile->name, 'user', 'changePassword');
            $acl->allow($profile->name, 'index', 'index');
            $acl->allow($profile->name, 'emailmarketing', 'index');
            $acl->allow($profile->name, 'system', 'logout');
            $acl->allow($profile->name, 'curriculum', 'addCourse');
            $acl->allow($profile->name, 'curriculum', 'addAcademic');
            $acl->allow($profile->name, 'curriculum', 'addHistory');
            $acl->allow($profile->name, 'curriculum', 'addContact');
            $acl->allow($profile->name, 'curriculum', 'addLanguage');
            $acl->allow($profile->name, 'simulated', 'computing');
            $acl->allow($profile->name, 'job', 'sendCv');
            $acl->allow($profile->name, 'plan', 'addPlanTable');
        }

        if (touch(APP_DIR . $this->filePath) && is_writable(APP_DIR . $this->filePath)) {
            file_put_contents(APP_DIR . $this->filePath, serialize($acl));

            // Store the ACL in APC
            if (function_exists('apc_store')) {
                apc_store('app-acl', $acl, 3600);
            }
        } else {
            $this->flash->error(
                'Ocorreu um erro de permissões, se o problema persistir, favor entrar em contato.'
            );
        }

        return $acl;
    }

    public function menuPermissions($id)
    {
        return $list;
        $user = User::findFirst(array('idUser' => $id));
        $i = 0;

        foreach ($user->Profiles->getPermissions(array(
                            'conditions' => 'menu != :menu: AND modules_idModules > :modules:',
                            'bind' => array(
                                        'menu' => '0',
                                        'modules' => '0'

                                    ),
                            'order'=>'ordem asc'
                            )) as $key) {
                    $list[$key->Modules->getOrdem()]['icon'] = $key->Modules->getIcon();
                    $list[$key->Modules->getOrdem()]['description'] =$key->Modules->getDescription();
                    $list[$key->Modules->getOrdem()]['itens'][$i]['description'] = $key->getDescription();
                    $list[$key->Modules->getOrdem()]['itens'][$i]['icon'] = $key->getIcon();
                    $list[$key->Modules->getOrdem()]['itens'][$i]['iconModule'] = $key->Modules->getIcon();
                    $list[$key->Modules->getOrdem()]['itens'][$i]['resource'] = $key->getResource();
                    $list[$key->Modules->getOrdem()]['itens'][$i]['action'] = $key->getAction();
                    $i++;
        }
        ksort($list);
        return $list;
    }
}
