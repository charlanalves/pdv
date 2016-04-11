<?php

namespace App\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class Usuario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_usuario;

    /**
     *
     * @var string
     */
    protected $login;

    /**
     *
     * @var integer
     */
    protected $cd_empresa;

    /**
     *
     * @var string
     */
    protected $senha;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var integer
     */
    protected $parent;

    /**
     *
     * @var integer
     */
    protected $tipo;

    /**
     *
     * @var string
     */
    protected $hora_acesso_entrada;

    /**
     *
     * @var string
     */
    protected $hora_acesso_saida;

    /**
     *
     * @var string
     */
    protected $dias_acesso;

    /**
     *
     * @var integer
     */
    protected $acesso_externo;

    /**
     *
     * @var integer
     */
    protected $termo_uso;

    /**
     *
     * @var string
     */
    protected $ip_termo_uso;

    /**
     *
     * @var string
     */
    protected $datahora_termo_uso;

    /**
     *
     * @var string
     */
    protected $email_webmail;

    /**
     *
     * @var string
     */
    protected $senha_webmail;

    /**
     *
     * @var integer
     */
    protected $classe_usuario;

    /**
     *
     * @var string
     */
    protected $autonomia_financeira;

    /**
     *
     * @var integer
     */
    protected $valida_horario;

    /**
     * Method to set the value of field cd_usuario
     *
     * @param integer $cd_usuario
     * @return $this
     */
    public function setCdUsuario($cd_usuario)
    {
        $this->cd_usuario = $cd_usuario;

        return $this;
    }

    /**
     * Method to set the value of field login
     *
     * @param string $login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Method to set the value of field cd_empresa
     *
     * @param integer $cd_empresa
     * @return $this
     */
    public function setCdEmpresa($cd_empresa)
    {
        $this->cd_empresa = $cd_empresa;

        return $this;
    }

    /**
     * Method to set the value of field senha
     *
     * @param string $senha
     * @return $this
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field ativo
     *
     * @param integer $ativo
     * @return $this
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Method to set the value of field parent
     *
     * @param integer $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Method to set the value of field tipo
     *
     * @param integer $tipo
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Method to set the value of field hora_acesso_entrada
     *
     * @param string $hora_acesso_entrada
     * @return $this
     */
    public function setHoraAcessoEntrada($hora_acesso_entrada)
    {
        $this->hora_acesso_entrada = $hora_acesso_entrada;

        return $this;
    }

    /**
     * Method to set the value of field hora_acesso_saida
     *
     * @param string $hora_acesso_saida
     * @return $this
     */
    public function setHoraAcessoSaida($hora_acesso_saida)
    {
        $this->hora_acesso_saida = $hora_acesso_saida;

        return $this;
    }

    /**
     * Method to set the value of field dias_acesso
     *
     * @param string $dias_acesso
     * @return $this
     */
    public function setDiasAcesso($dias_acesso)
    {
        $this->dias_acesso = $dias_acesso;

        return $this;
    }

    /**
     * Method to set the value of field acesso_externo
     *
     * @param integer $acesso_externo
     * @return $this
     */
    public function setAcessoExterno($acesso_externo)
    {
        $this->acesso_externo = $acesso_externo;

        return $this;
    }

    /**
     * Method to set the value of field termo_uso
     *
     * @param integer $termo_uso
     * @return $this
     */
    public function setTermoUso($termo_uso)
    {
        $this->termo_uso = $termo_uso;

        return $this;
    }

    /**
     * Method to set the value of field ip_termo_uso
     *
     * @param string $ip_termo_uso
     * @return $this
     */
    public function setIpTermoUso($ip_termo_uso)
    {
        $this->ip_termo_uso = $ip_termo_uso;

        return $this;
    }

    /**
     * Method to set the value of field datahora_termo_uso
     *
     * @param string $datahora_termo_uso
     * @return $this
     */
    public function setDatahoraTermoUso($datahora_termo_uso)
    {
        $this->datahora_termo_uso = $datahora_termo_uso;

        return $this;
    }

    /**
     * Method to set the value of field email_webmail
     *
     * @param string $email_webmail
     * @return $this
     */
    public function setEmailWebmail($email_webmail)
    {
        $this->email_webmail = $email_webmail;

        return $this;
    }

    /**
     * Method to set the value of field senha_webmail
     *
     * @param string $senha_webmail
     * @return $this
     */
    public function setSenhaWebmail($senha_webmail)
    {
        $this->senha_webmail = $senha_webmail;

        return $this;
    }

    /**
     * Method to set the value of field classe_usuario
     *
     * @param integer $classe_usuario
     * @return $this
     */
    public function setClasseUsuario($classe_usuario)
    {
        $this->classe_usuario = $classe_usuario;

        return $this;
    }

    /**
     * Method to set the value of field autonomia_financeira
     *
     * @param string $autonomia_financeira
     * @return $this
     */
    public function setAutonomiaFinanceira($autonomia_financeira)
    {
        $this->autonomia_financeira = $autonomia_financeira;

        return $this;
    }

    /**
     * Method to set the value of field valida_horario
     *
     * @param integer $valida_horario
     * @return $this
     */
    public function setValidaHorario($valida_horario)
    {
        $this->valida_horario = $valida_horario;

        return $this;
    }

    /**
     * Returns the value of field cd_usuario
     *
     * @return integer
     */
    public function getCdUsuario()
    {
        return $this->cd_usuario;
    }

    /**
     * Returns the value of field login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Returns the value of field cd_empresa
     *
     * @return integer
     */
    public function getCdEmpresa()
    {
        return $this->cd_empresa;
    }

    /**
     * Returns the value of field senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Returns the value of field parent
     *
     * @return integer
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Returns the value of field tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Returns the value of field hora_acesso_entrada
     *
     * @return string
     */
    public function getHoraAcessoEntrada()
    {
        return $this->hora_acesso_entrada;
    }

    /**
     * Returns the value of field hora_acesso_saida
     *
     * @return string
     */
    public function getHoraAcessoSaida()
    {
        return $this->hora_acesso_saida;
    }

    /**
     * Returns the value of field dias_acesso
     *
     * @return string
     */
    public function getDiasAcesso()
    {
        return $this->dias_acesso;
    }

    /**
     * Returns the value of field acesso_externo
     *
     * @return integer
     */
    public function getAcessoExterno()
    {
        return $this->acesso_externo;
    }

    /**
     * Returns the value of field termo_uso
     *
     * @return integer
     */
    public function getTermoUso()
    {
        return $this->termo_uso;
    }

    /**
     * Returns the value of field ip_termo_uso
     *
     * @return string
     */
    public function getIpTermoUso()
    {
        return $this->ip_termo_uso;
    }

    /**
     * Returns the value of field datahora_termo_uso
     *
     * @return string
     */
    public function getDatahoraTermoUso()
    {
        return $this->datahora_termo_uso;
    }

    /**
     * Returns the value of field email_webmail
     *
     * @return string
     */
    public function getEmailWebmail()
    {
        return $this->email_webmail;
    }

    /**
     * Returns the value of field senha_webmail
     *
     * @return string
     */
    public function getSenhaWebmail()
    {
        return $this->senha_webmail;
    }

    /**
     * Returns the value of field classe_usuario
     *
     * @return integer
     */
    public function getClasseUsuario()
    {
        return $this->classe_usuario;
    }

    /**
     * Returns the value of field autonomia_financeira
     *
     * @return string
     */
    public function getAutonomiaFinanceira()
    {
        return $this->autonomia_financeira;
    }

    /**
     * Returns the value of field valida_horario
     *
     * @return integer
     */
    public function getValidaHorario()
    {
        return $this->valida_horario;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_usuario', 'App\Models\Acesso', 'usuario_cd_usuario', array('alias' => 'Acesso'));
        $this->hasMany('cd_usuario', 'App\Models\CentroProducao', 'usuario_responsavel', array('alias' => 'CentroProducao'));
        $this->hasMany('cd_usuario', 'App\Models\Contato', 'usuario_responsavel', array('alias' => 'Contato'));
        $this->hasMany('cd_usuario', 'App\Models\EmpresaHasArquivos', 'usuario_responsavel', array('alias' => 'EmpresaHasArquivos'));
        $this->hasMany('cd_usuario', 'App\Models\FechamentoPeriodo', 'responsavel', array('alias' => 'FechamentoPeriodo'));
        $this->hasMany('cd_usuario', 'App\Models\GlobalHistoricoProcessos', 'cd_usuario', array('alias' => 'GlobalHistoricoProcessos'));
        $this->hasMany('cd_usuario', 'App\Models\Helpdesk', 'usuario_responsavel', array('alias' => 'Helpdesk'));
        $this->hasMany('cd_usuario', 'App\Models\Informativo', 'usuario_cd_usuario', array('alias' => 'Informativo'));
        $this->hasMany('cd_usuario', 'App\Models\InformativoHasUsuario', 'usuario_cd_usuario', array('alias' => 'InformativoHasUsuario'));
        $this->hasMany('cd_usuario', 'App\Models\InterrupcaoLinhaProducao', 'usuario_gerador', array('alias' => 'InterrupcaoLinhaProducao'));
        $this->hasMany('cd_usuario', 'App\Models\LancamentoNotificacaoEmail', 'cd_usuario', array('alias' => 'LancamentoNotificacaoEmail'));
        $this->hasMany('cd_usuario', 'App\Models\LiberacaoPedido', 'cd_usuario', array('alias' => 'LiberacaoPedido'));
        $this->hasMany('cd_usuario', 'App\Models\LogSystem', 'usuario', array('alias' => 'LogSystem'));
        $this->hasMany('cd_usuario', 'App\Models\Mensagem', 'usuario_cd_usuario', array('alias' => 'Mensagem'));
        $this->hasMany('cd_usuario', 'App\Models\MensagemHasUsuario', 'usuario_cd_usuario', array('alias' => 'MensagemHasUsuario'));
        $this->hasMany('cd_usuario', 'App\Models\MovimentacaoManualEstoque', 'usuario_responsavel', array('alias' => 'MovimentacaoManualEstoque'));
        $this->hasMany('cd_usuario', 'App\Models\Orcamento', 'usuario_responsavel', array('alias' => 'Orcamento'));
        $this->hasMany('cd_usuario', 'App\Models\PedidoHasMotivorecusado', 'cd_usuario', array('alias' => 'PedidoHasMotivorecusado'));
        $this->hasMany('cd_usuario', 'App\Models\PermissaoMesclagem', 'cd_usuario', array('alias' => 'PermissaoMesclagem'));
        $this->hasMany('cd_usuario', 'App\Models\RequisicaoMat', 'usuario_responsavel', array('alias' => 'RequisicaoMat'));
        $this->hasMany('cd_usuario', 'App\Models\SacChamado', 'cod_usuario_criacao', array('alias' => 'SacChamado'));
        $this->hasMany('cd_usuario', 'App\Models\SacChamadoHasComentarios', 'cod_usuario', array('alias' => 'SacChamadoHasComentarios'));
        $this->hasMany('cd_usuario', 'App\Models\SacChamadoHasHistorico', 'cod_usuario_acao', array('alias' => 'SacChamadoHasHistorico'));
        $this->hasMany('cd_usuario', 'App\Models\SacChamadoHasProblemas', 'cod_usuario_modificacao', array('alias' => 'SacChamadoHasProblemas'));
        $this->hasMany('cd_usuario', 'App\Models\SacChamadoHasProblemas', 'cod_usuario_responsavel', array('alias' => 'SacChamadoHasProblemas'));
        $this->hasMany('cd_usuario', 'App\Models\UnidadeNegocioHasUsuario', 'usuario_cd_usuario', array('alias' => 'UnidadeNegocioHasUsuario'));
        $this->hasMany('cd_usuario', 'App\Models\Usuario', 'parent', array('alias' => 'Usuario'));
        $this->hasMany('cd_usuario', 'App\Models\UsuarioHasPerfil', 'cd_usuario', array('alias' => 'UsuarioHasPerfil'));
        $this->belongsTo('parent', 'App\Models\Usuario', 'cd_usuario', array('alias' => 'Usuario'));
        $this->belongsTo('cd_empresa', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'usuario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Usuario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Usuario
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'cd_usuario' => 'cd_usuario',
            'login' => 'login',
            'cd_empresa' => 'cd_empresa',
            'senha' => 'senha',
            'nome' => 'nome',
            'email' => 'email',
            'ativo' => 'ativo',
            'parent' => 'parent',
            'tipo' => 'tipo',
            'hora_acesso_entrada' => 'hora_acesso_entrada',
            'hora_acesso_saida' => 'hora_acesso_saida',
            'dias_acesso' => 'dias_acesso',
            'acesso_externo' => 'acesso_externo',
            'termo_uso' => 'termo_uso',
            'ip_termo_uso' => 'ip_termo_uso',
            'datahora_termo_uso' => 'datahora_termo_uso',
            'email_webmail' => 'email_webmail',
            'senha_webmail' => 'senha_webmail',
            'classe_usuario' => 'classe_usuario',
            'autonomia_financeira' => 'autonomia_financeira',
            'valida_horario' => 'valida_horario'
        );
    }

}
