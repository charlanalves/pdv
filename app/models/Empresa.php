<?php

namespace App\Models;

class Empresa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_empresa;
    /**
     *
     * @var integer
     */
    protected $cnae;

    /**
     *
     * @var integer
     */
    protected $franquia;

    /**
     *
     * @var integer
     */
    protected $licenciada;

    /**
     *
     * @var integer
     */
    protected $divisao_cd_divisao;

    /**
     *
     * @var integer
     */
    protected $cd_cargo;

    /**
     *
     * @var integer
     */
    protected $cd_tipo_funcionario;

    /**
     *
     * @var integer
     */
    protected $id_ocupacao;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $cpfCnpj;

    /**
     *
     * @var string
     */
    protected $rg;

    /**
     *
     * @var integer
     */
    protected $pfpjpr;

    /**
     *
     * @var string
     */
    protected $inscricao_estadual;

    /**
     *
     * @var string
     */
    protected $fantasia;

    /**
     *
     * @var integer
     */
    protected $inscrito;

    /**
     *
     * @var string
     */
    protected $inscricao_municipal;

    /**
     *
     * @var string
     */
    protected $suframa;

    /**
     *
     * @var double
     */
    protected $limite_credito;

    /**
     *
     * @var double
     */
    protected $limite_mensal;

    /**
     *
     * @var string
     */
    protected $obs;

    /**
     *
     * @var double
     */
    protected $comissao_padrao;

    /**
     *
     * @var double
     */
    protected $desconto1;

    /**
     *
     * @var double
     */
    protected $desconto2;

    /**
     *
     * @var double
     */
    protected $desconto3;

    /**
     *
     * @var double
     */
    protected $desconto4;

    /**
     *
     * @var integer
     */
    protected $ativo;

    /**
     *
     * @var string
     */
    protected $tipofrete;

    /**
     *
     * @var double
     */
    protected $pedido_minimo;

    /**
     *
     * @var integer
     */
    protected $logo;

    /**
     *
     * @var string
     */
    protected $criado;

    /**
     *
     * @var string
     */
    protected $modificado;

    /**
     *
     * @var integer
     */
    protected $desligado;

    /**
     *
     * @var string
     */
    protected $ingresso;

    /**
     *
     * @var string
     */
    protected $desligamento;

    /**
     *
     * @var integer
     */
    protected $cadastrado_por;

    /**
     *
     * @var integer
     */
    protected $foto;

    /**
     *
     * @var integer
     */
    protected $tributacao;

    /**
     *
     * @var string
     */
    protected $carga_horaria;

    /**
     *
     * @var double
     */
    protected $custo_hora;

    /**
     *
     * @var double
     */
    protected $salario;

    /**
     *
     * @var double
     */
    protected $beneficios;

    /**
     *
     * @var double
     */
    protected $encargos;

    /**
     *
     * @var integer
     */
    protected $utiliza_controle_producao;

    /**
     *
     * @var integer
     */
    protected $nacionalidade;

    /**
     *
     * @var integer
     */
    protected $profissao;

    /**
     *
     * @var integer
     */
    protected $estado_civil;

    /**
     *
     * @var integer
     */
    protected $atv_prep;

    /**
     *
     * @var integer
     */
    protected $movestoque;

    /**
     *
     * @var integer
     */
    protected $optante_debito_credito_icms;

    /**
     *
     * @var integer
     */
    protected $fatura_cond_pagto;

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
     * Method to set the value of field $cnae
     *
     * @param integer $cnae
     * @return $this
     */
    public function setCnae($cnae) {
        $this->cnae = $cnae;
    }

        /**
     * Method to set the value of field franquia
     *
     * @param integer $franquia
     * @return $this
     */
    public function setFranquia($franquia)
    {
        $this->franquia = $franquia;

        return $this;
    }

    /**
     * Method to set the value of field licenciada
     *
     * @param integer $licenciada
     * @return $this
     */
    public function setLicenciada($licenciada)
    {
        $this->licenciada = $licenciada;

        return $this;
    }

    /**
     * Method to set the value of field divisao_cd_divisao
     *
     * @param integer $divisao_cd_divisao
     * @return $this
     */
    public function setDivisaoCdDivisao($divisao_cd_divisao)
    {
        $this->divisao_cd_divisao = $divisao_cd_divisao;

        return $this;
    }

    /**
     * Method to set the value of field cd_cargo
     *
     * @param integer $cd_cargo
     * @return $this
     */
    public function setCdCargo($cd_cargo)
    {
        $this->cd_cargo = $cd_cargo;

        return $this;
    }

    /**
     * Method to set the value of field cd_tipo_funcionario
     *
     * @param integer $cd_tipo_funcionario
     * @return $this
     */
    public function setCdTipoFuncionario($cd_tipo_funcionario)
    {
        $this->cd_tipo_funcionario = $cd_tipo_funcionario;

        return $this;
    }

    /**
     * Method to set the value of field id_ocupacao
     *
     * @param integer $id_ocupacao
     * @return $this
     */
    public function setIdOcupacao($id_ocupacao)
    {
        $this->id_ocupacao = $id_ocupacao;

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
     * Method to set the value of field cpfCnpj
     *
     * @param string $cpfCnpj
     * @return $this
     */
    public function setCpfCnpj($cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;

        return $this;
    }

    /**
     * Method to set the value of field rg
     *
     * @param string $rg
     * @return $this
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Method to set the value of field pfpjpr
     *
     * @param integer $pfpjpr
     * @return $this
     */
    public function setPfpjpr($pfpjpr)
    {
        $this->pfpjpr = $pfpjpr;

        return $this;
    }

    /**
     * Method to set the value of field inscricao_estadual
     *
     * @param string $inscricao_estadual
     * @return $this
     */
    public function setInscricaoEstadual($inscricao_estadual)
    {
        $this->inscricao_estadual = $inscricao_estadual;

        return $this;
    }

    /**
     * Method to set the value of field fantasia
     *
     * @param string $fantasia
     * @return $this
     */
    public function setFantasia($fantasia)
    {
        $this->fantasia = $fantasia;

        return $this;
    }

    /**
     * Method to set the value of field inscrito
     *
     * @param integer $inscrito
     * @return $this
     */
    public function setInscrito($inscrito)
    {
        $this->inscrito = $inscrito;

        return $this;
    }

    /**
     * Method to set the value of field inscricao_municipal
     *
     * @param string $inscricao_municipal
     * @return $this
     */
    public function setInscricaoMunicipal($inscricao_municipal)
    {
        $this->inscricao_municipal = $inscricao_municipal;

        return $this;
    }

    /**
     * Method to set the value of field suframa
     *
     * @param string $suframa
     * @return $this
     */
    public function setSuframa($suframa)
    {
        $this->suframa = $suframa;

        return $this;
    }

    /**
     * Method to set the value of field limite_credito
     *
     * @param double $limite_credito
     * @return $this
     */
    public function setLimiteCredito($limite_credito)
    {
        $this->limite_credito = $limite_credito;

        return $this;
    }

    /**
     * Method to set the value of field limite_mensal
     *
     * @param double $limite_mensal
     * @return $this
     */
    public function setLimiteMensal($limite_mensal)
    {
        $this->limite_mensal = $limite_mensal;

        return $this;
    }

    /**
     * Method to set the value of field obs
     *
     * @param string $obs
     * @return $this
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Method to set the value of field comissao_padrao
     *
     * @param double $comissao_padrao
     * @return $this
     */
    public function setComissaoPadrao($comissao_padrao)
    {
        $this->comissao_padrao = $comissao_padrao;

        return $this;
    }

    /**
     * Method to set the value of field desconto1
     *
     * @param double $desconto1
     * @return $this
     */
    public function setDesconto1($desconto1)
    {
        $this->desconto1 = $desconto1;

        return $this;
    }

    /**
     * Method to set the value of field desconto2
     *
     * @param double $desconto2
     * @return $this
     */
    public function setDesconto2($desconto2)
    {
        $this->desconto2 = $desconto2;

        return $this;
    }

    /**
     * Method to set the value of field desconto3
     *
     * @param double $desconto3
     * @return $this
     */
    public function setDesconto3($desconto3)
    {
        $this->desconto3 = $desconto3;

        return $this;
    }

    /**
     * Method to set the value of field desconto4
     *
     * @param double $desconto4
     * @return $this
     */
    public function setDesconto4($desconto4)
    {
        $this->desconto4 = $desconto4;

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
     * Method to set the value of field tipofrete
     *
     * @param string $tipofrete
     * @return $this
     */
    public function setTipofrete($tipofrete)
    {
        $this->tipofrete = $tipofrete;

        return $this;
    }

    /**
     * Method to set the value of field pedido_minimo
     *
     * @param double $pedido_minimo
     * @return $this
     */
    public function setPedidoMinimo($pedido_minimo)
    {
        $this->pedido_minimo = $pedido_minimo;

        return $this;
    }

    /**
     * Method to set the value of field logo
     *
     * @param integer $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Method to set the value of field criado
     *
     * @param string $criado
     * @return $this
     */
    public function setCriado($criado)
    {
        $this->criado = $criado;

        return $this;
    }

    /**
     * Method to set the value of field modificado
     *
     * @param string $modificado
     * @return $this
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;

        return $this;
    }

    /**
     * Method to set the value of field desligado
     *
     * @param integer $desligado
     * @return $this
     */
    public function setDesligado($desligado)
    {
        $this->desligado = $desligado;

        return $this;
    }

    /**
     * Method to set the value of field ingresso
     *
     * @param string $ingresso
     * @return $this
     */
    public function setIngresso($ingresso)
    {
        $this->ingresso = $ingresso;

        return $this;
    }

    /**
     * Method to set the value of field desligamento
     *
     * @param string $desligamento
     * @return $this
     */
    public function setDesligamento($desligamento)
    {
        $this->desligamento = $desligamento;

        return $this;
    }

    /**
     * Method to set the value of field cadastrado_por
     *
     * @param integer $cadastrado_por
     * @return $this
     */
    public function setCadastradoPor($cadastrado_por)
    {
        $this->cadastrado_por = $cadastrado_por;

        return $this;
    }

    /**
     * Method to set the value of field foto
     *
     * @param integer $foto
     * @return $this
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Method to set the value of field tributacao
     *
     * @param integer $tributacao
     * @return $this
     */
    public function setTributacao($tributacao)
    {
        $this->tributacao = $tributacao;

        return $this;
    }

    /**
     * Method to set the value of field carga_horaria
     *
     * @param string $carga_horaria
     * @return $this
     */
    public function setCargaHoraria($carga_horaria)
    {
        $this->carga_horaria = $carga_horaria;

        return $this;
    }

    /**
     * Method to set the value of field custo_hora
     *
     * @param double $custo_hora
     * @return $this
     */
    public function setCustoHora($custo_hora)
    {
        $this->custo_hora = $custo_hora;

        return $this;
    }

    /**
     * Method to set the value of field salario
     *
     * @param double $salario
     * @return $this
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Method to set the value of field beneficios
     *
     * @param double $beneficios
     * @return $this
     */
    public function setBeneficios($beneficios)
    {
        $this->beneficios = $beneficios;

        return $this;
    }

    /**
     * Method to set the value of field encargos
     *
     * @param double $encargos
     * @return $this
     */
    public function setEncargos($encargos)
    {
        $this->encargos = $encargos;

        return $this;
    }

    /**
     * Method to set the value of field utiliza_controle_producao
     *
     * @param integer $utiliza_controle_producao
     * @return $this
     */
    public function setUtilizaControleProducao($utiliza_controle_producao)
    {
        $this->utiliza_controle_producao = $utiliza_controle_producao;

        return $this;
    }

    /**
     * Method to set the value of field nacionalidade
     *
     * @param integer $nacionalidade
     * @return $this
     */
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    /**
     * Method to set the value of field profissao
     *
     * @param integer $profissao
     * @return $this
     */
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;

        return $this;
    }

    /**
     * Method to set the value of field estado_civil
     *
     * @param integer $estado_civil
     * @return $this
     */
    public function setEstadoCivil($estado_civil)
    {
        $this->estado_civil = $estado_civil;

        return $this;
    }

    /**
     * Method to set the value of field atv_prep
     *
     * @param integer $atv_prep
     * @return $this
     */
    public function setAtvPrep($atv_prep)
    {
        $this->atv_prep = $atv_prep;

        return $this;
    }

    /**
     * Method to set the value of field movestoque
     *
     * @param integer $movestoque
     * @return $this
     */
    public function setMovestoque($movestoque)
    {
        $this->movestoque = $movestoque;

        return $this;
    }

    /**
     * Method to set the value of field optante_debito_credito_icms
     *
     * @param integer $optante_debito_credito_icms
     * @return $this
     */
    public function setOptanteDebitoCreditoIcms($optante_debito_credito_icms)
    {
        $this->optante_debito_credito_icms = $optante_debito_credito_icms;

        return $this;
    }

    /**
     * Method to set the value of field fatura_cond_pagto
     *
     * @param integer $fatura_cond_pagto
     * @return $this
     */
    public function setFaturaCondPagto($fatura_cond_pagto)
    {
        $this->fatura_cond_pagto = $fatura_cond_pagto;

        return $this;
    }
    
    /**
     * Returns the value of field cnae
     *
     * @return integer
     */
    public function getCnae() {
        return $this->cnae;
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
     * Returns the value of field franquia
     *
     * @return integer
     */
    public function getFranquia()
    {
        return $this->franquia;
    }

    /**
     * Returns the value of field licenciada
     *
     * @return integer
     */
    public function getLicenciada()
    {
        return $this->licenciada;
    }

    /**
     * Returns the value of field divisao_cd_divisao
     *
     * @return integer
     */
    public function getDivisaoCdDivisao()
    {
        return $this->divisao_cd_divisao;
    }

    /**
     * Returns the value of field cd_cargo
     *
     * @return integer
     */
    public function getCdCargo()
    {
        return $this->cd_cargo;
    }

    /**
     * Returns the value of field cd_tipo_funcionario
     *
     * @return integer
     */
    public function getCdTipoFuncionario()
    {
        return $this->cd_tipo_funcionario;
    }

    /**
     * Returns the value of field id_ocupacao
     *
     * @return integer
     */
    public function getIdOcupacao()
    {
        return $this->id_ocupacao;
    }

 

    /**
     * Returns the value of field cpfCnpj
     *
     * @return string
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }
    
    /**
     * Retorna cpfCnpj no formato somente números
     *
     * @return string
     */
    public function getCpfCnpjSomenteNumeros()
    {   
        return str_replace(array('.','-','/'), array('','',''), $this->cpfCnpj);
    }

    /**
     * Returns the value of field rg
     *
     * @return string
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Returns the value of field pfpjpr
     *
     * @return integer
     */
    public function getPfpjpr()
    {
        return $this->pfpjpr;
    }

    /**
     * Returns the value of field inscricao_estadual
     *
     * @return string
     */
    public function getInscricaoEstadual()
    {
        return $this->inscricao_estadual;
    }
    
    /**
     * Retorna inscricao_estadual no formato somente números
     *
     * @return string
     */
    public function getInscricaoEstadualSomenteNumeros()
    {   
        return str_replace(array('.','-','/'), array('','',''), $this->inscricao_estadual);
    }
    

    /**
     * Returns the value of field fantasia
     *
     * @return string
     */
    public function getFantasia()
    {
        return $this->fantasia;
    }

    /**
     * Returns the value of field inscrito
     *
     * @return integer
     */
    public function getInscrito()
    {
        return $this->inscrito;
    }

    /**
     * Returns the value of field inscricao_municipal
     *
     * @return string
     */
    public function getInscricaoMunicipal()
    {
        return $this->inscricao_municipal;
    }

    /**
     * Returns the value of field suframa
     *
     * @return string
     */
    public function getSuframa()
    {
        return $this->suframa;
    }

    /**
     * Returns the value of field limite_credito
     *
     * @return double
     */
    public function getLimiteCredito()
    {
        return $this->limite_credito;
    }

    /**
     * Returns the value of field limite_mensal
     *
     * @return double
     */
    public function getLimiteMensal()
    {
        return $this->limite_mensal;
    }

    /**
     * Returns the value of field obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Returns the value of field comissao_padrao
     *
     * @return double
     */
    public function getComissaoPadrao()
    {
        return $this->comissao_padrao;
    }

    /**
     * Returns the value of field desconto1
     *
     * @return double
     */
    public function getDesconto1()
    {
        return $this->desconto1;
    }

    /**
     * Returns the value of field desconto2
     *
     * @return double
     */
    public function getDesconto2()
    {
        return $this->desconto2;
    }

    /**
     * Returns the value of field desconto3
     *
     * @return double
     */
    public function getDesconto3()
    {
        return $this->desconto3;
    }

    /**
     * Returns the value of field desconto4
     *
     * @return double
     */
    public function getDesconto4()
    {
        return $this->desconto4;
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
     * Returns the value of field tipofrete
     *
     * @return string
     */
    public function getTipofrete()
    {
        return $this->tipofrete;
    }

    /**
     * Returns the value of field pedido_minimo
     *
     * @return double
     */
    public function getPedidoMinimo()
    {
        return $this->pedido_minimo;
    }

    /**
     * Returns the value of field logo
     *
     * @return integer
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Returns the value of field criado
     *
     * @return string
     */
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * Returns the value of field modificado
     *
     * @return string
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * Returns the value of field desligado
     *
     * @return integer
     */
    public function getDesligado()
    {
        return $this->desligado;
    }

    /**
     * Returns the value of field ingresso
     *
     * @return string
     */
    public function getIngresso()
    {
        return $this->ingresso;
    }

    /**
     * Returns the value of field desligamento
     *
     * @return string
     */
    public function getDesligamento()
    {
        return $this->desligamento;
    }

    /**
     * Returns the value of field cadastrado_por
     *
     * @return integer
     */
    public function getCadastradoPor()
    {
        return $this->cadastrado_por;
    }

    /**
     * Returns the value of field foto
     *
     * @return integer
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Returns the value of field tributacao
     *
     * @return integer
     */
    public function getTributacao()
    {
        return $this->tributacao;
    }

    /**
     * Returns the value of field carga_horaria
     *
     * @return string
     */
    public function getCargaHoraria()
    {
        return $this->carga_horaria;
    }

    /**
     * Returns the value of field custo_hora
     *
     * @return double
     */
    public function getCustoHora()
    {
        return $this->custo_hora;
    }

    /**
     * Returns the value of field salario
     *
     * @return double
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Returns the value of field beneficios
     *
     * @return double
     */
    public function getBeneficios()
    {
        return $this->beneficios;
    }

    /**
     * Returns the value of field encargos
     *
     * @return double
     */
    public function getEncargos()
    {
        return $this->encargos;
    }

    /**
     * Returns the value of field utiliza_controle_producao
     *
     * @return integer
     */
    public function getUtilizaControleProducao()
    {
        return $this->utiliza_controle_producao;
    }

     /**
     * Returns the value of field nome
     *
     * @return integer
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field nacionalidade
     *
     * @return integer
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Returns the value of field profissao
     *
     * @return integer
     */
    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * Returns the value of field estado_civil
     *
     * @return integer
     */
    public function getEstadoCivil()
    {
        return $this->estado_civil;
    }

    /**
     * Returns the value of field atv_prep
     *
     * @return integer
     */
    public function getAtvPrep()
    {
        return $this->atv_prep;
    }

    /**
     * Returns the value of field movestoque
     *
     * @return integer
     */
    public function getMovestoque()
    {
        return $this->movestoque;
    }

    /**
     * Returns the value of field optante_debito_credito_icms
     *
     * @return integer
     */
    public function getOptanteDebitoCreditoIcms()
    {
        return $this->optante_debito_credito_icms;
    }

    /**
     * Returns the value of field fatura_cond_pagto
     *
     * @return integer
     */
    public function getFaturaCondPagto()
    {
        return $this->fatura_cond_pagto;
    }

     /**
     * Returns inscrição municipal somente com números
     *
     * @return string
     */
     public function getInscricaoMunicipalSomenteNumeros()
    {   
        return str_replace(array('/'), array(''), $this->inscricao_municipal);
    }
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('cd_empresa', 'App\Models\Caminhao', 'empresa_cd_empresa', array('alias' => 'Caminhao'));
        $this->hasMany('cd_empresa', 'App\Models\Carga', 'transportador', array('alias' => 'Carga'));
        $this->hasMany('cd_empresa', 'App\Models\Carga', 'motorista', array('alias' => 'Carga'));
        $this->hasMany('cd_empresa', 'App\Models\Cargo', 'cd_empresa', array('alias' => 'Cargo'));
        $this->hasMany('cd_empresa', 'App\Models\CentroProducao', 'cd_empresa', array('alias' => 'CentroProducao'));
        $this->hasMany('cd_empresa', 'App\Models\CompartilhamentoEmpresa', 'licenciada', array('alias' => 'CompartilhamentoEmpresa'));
        $this->hasMany('cd_empresa', 'App\Models\CompartilhamentoEmpresa', 'fornecdor', array('alias' => 'CompartilhamentoEmpresa'));
        $this->hasMany('cd_empresa', 'App\Models\CompartilhamentoEmpresa', 'representante', array('alias' => 'CompartilhamentoEmpresa'));
        $this->hasMany('cd_empresa', 'App\Models\CompartilhamentoEmpresa', 'cliente', array('alias' => 'CompartilhamentoEmpresa'));
        $this->hasMany('cd_empresa', 'App\Models\CompartilhamentoEmpresa', 'franquia', array('alias' => 'CompartilhamentoEmpresa'));
        $this->hasMany('cd_empresa', 'App\Models\CompartilhamentoEmpresa', 'funcionario', array('alias' => 'CompartilhamentoEmpresa'));
        $this->hasMany('cd_empresa', 'App\Models\CompartilhamentoUnidade', 'cd_empresa', array('alias' => 'CompartilhamentoUnidade'));
        $this->hasMany('cd_empresa', 'App\Models\ConfiguracoesFaturamentoServicos', 'cd_empresa', array('alias' => 'ConfiguracoesFaturamentoServicos'));
        $this->hasMany('cd_empresa', 'App\Models\ConhecimentoTransporte', 'cd_empresa', array('alias' => 'ConhecimentoTransporte'));
        $this->hasMany('cd_empresa', 'App\Models\Contabilistas', 'empresa_cd_empresa', array('alias' => 'Contabilistas'));
        $this->hasMany('cd_empresa', 'App\Models\ContatoEmpresa', 'empresa_cd_empresa', array('alias' => 'ContatoEmpresa'));
        $this->hasMany('cd_empresa', 'App\Models\ContratosModelos', 'cd_empresa', array('alias' => 'ContratosModelos'));
        $this->hasMany('cd_empresa', 'App\Models\CotacaoSugestaoEnvio', 'franquia', array('alias' => 'CotacaoSugestaoEnvio'));
        $this->hasMany('cd_empresa', 'App\Models\Empresa', 'licenciada', array('alias' => 'Empresa'));
        $this->hasMany('cd_empresa', 'App\Models\Empresa', 'franquia', array('alias' => 'Empresa'));
        $this->hasMany('cd_empresa', 'App\Models\EmpresaHasArquivos', 'cd_empresa', array('alias' => 'EmpresaHasArquivos'));
        $this->hasMany('cd_empresa', 'App\Models\EmpresaHasCondPagtoForServico', 'cd_empresa', array('alias' => 'EmpresaHasCondPagtoForServico'));
        $this->hasMany('cd_empresa', 'App\Models\EmpresaHasLinkCentralcompras', 'cd_empresa', array('alias' => 'EmpresaHasLinkCentralcompras'));
        $this->hasMany('cd_empresa', 'App\Models\Endereco', 'empresa_cd_empresa', array('alias' => 'Endereco'));
        $this->hasMany('cd_empresa', 'App\Models\Engenharia', 'cd_empresa', array('alias' => 'Engenharia'));
        $this->hasMany('cd_empresa', 'App\Models\EquipesHasFuncionario', 'empresa_cd_empresa', array('alias' => 'EquipesHasFuncionario'));
        $this->hasMany('cd_empresa', 'App\Models\FaturamentoServicos', 'cd_empresa', array('alias' => 'FaturamentoServicos'));
        $this->hasMany('cd_empresa', 'App\Models\FaturamentoServicos', 'cobranca', array('alias' => 'FaturamentoServicos'));
        $this->hasMany('cd_empresa', 'App\Models\FechamentoPeriodo', 'cd_empresa', array('alias' => 'FechamentoPeriodo'));
        $this->hasMany('cd_empresa', 'App\Models\FranquiaHasFranqueado', 'franquia', array('alias' => 'FranquiaHasFranqueado'));
        $this->hasMany('cd_empresa', 'App\Models\FranquiaHasFranqueado', 'franqueado', array('alias' => 'FranquiaHasFranqueado'));
        $this->hasMany('cd_empresa', 'App\Models\Informacoesccompra', 'cd_empresa', array('alias' => 'Informacoesccompra'));
        $this->hasMany('cd_empresa', 'App\Models\Informativo', 'empresa_franquia', array('alias' => 'Informativo'));
        $this->hasMany('cd_empresa', 'App\Models\InterrupcaoLinhaProducao', 'cd_empresa', array('alias' => 'InterrupcaoLinhaProducao'));
        $this->hasMany('cd_empresa', 'App\Models\InterrupcoesProducao', 'cd_empresa', array('alias' => 'InterrupcoesProducao'));
        $this->hasMany('cd_empresa', 'App\Models\Lancamento', 'empresa', array('alias' => 'Lancamento'));
        $this->hasMany('cd_empresa', 'App\Models\Lancamento', 'cobranca', array('alias' => 'Lancamento'));
        $this->hasMany('cd_empresa', 'App\Models\LancamentoRateio', 'cd_empresa', array('alias' => 'LancamentoRateio'));
        $this->hasMany('cd_empresa', 'App\Models\LiberacaoPedido', 'cd_empresa', array('alias' => 'LiberacaoPedido'));
        $this->hasMany('cd_empresa', 'App\Models\Mensagem', 'empresa_franquia', array('alias' => 'Mensagem'));
        $this->hasMany('cd_empresa', 'App\Models\MovEstoque', 'funcionario_responsavel', array('alias' => 'MovEstoque'));
        $this->hasMany('cd_empresa', 'App\Models\MovimentacaoManualEstoque', 'requerente', array('alias' => 'MovimentacaoManualEstoque'));
        $this->hasMany('cd_empresa', 'App\Models\Nfentrada', 'cd_empresa', array('alias' => 'Nfentrada'));
        $this->hasMany('cd_empresa', 'App\Models\ObservacaoPadraoOrcamento', 'cd_empresa', array('alias' => 'ObservacaoPadraoOrcamento'));
        $this->hasMany('cd_empresa', 'App\Models\Op', 'cd_empresa', array('alias' => 'Op'));
        $this->hasMany('cd_empresa', 'App\Models\Opetapa', 'responsavel', array('alias' => 'Opetapa'));
        $this->hasMany('cd_empresa', 'App\Models\OpetapaHasFuncionario', 'cd_funcionario', array('alias' => 'OpetapaHasFuncionario'));
        $this->hasMany('cd_empresa', 'App\Models\Orcamento', 'empresa_franquia', array('alias' => 'Orcamento'));
        $this->hasMany('cd_empresa', 'App\Models\OrdemCompra', 'fornecedor', array('alias' => 'OrdemCompra'));
        $this->hasMany('cd_empresa', 'App\Models\OrdemServico', 'franquia', array('alias' => 'OrdemServico'));
        $this->hasMany('cd_empresa', 'App\Models\OrdemServico', 'atendimento', array('alias' => 'OrdemServico'));
        $this->hasMany('cd_empresa', 'App\Models\OrdemServicoReparo', 'cd_empresa', array('alias' => 'OrdemServicoReparo'));
        $this->hasMany('cd_empresa', 'App\Models\OrdemServicoReparoHasFuncionario', 'cd_funcionario', array('alias' => 'OrdemServicoReparoHasFuncionario'));
        $this->hasMany('cd_empresa', 'App\Models\Pedido', 'transportadora', array('alias' => 'Pedido'));
        $this->hasMany('cd_empresa', 'App\Models\Pedido', 'empresa_cliente', array('alias' => 'Pedido'));
        $this->hasMany('cd_empresa', 'App\Models\Pedido', 'representante', array('alias' => 'Pedido'));
        $this->hasMany('cd_empresa', 'App\Models\PedidoHasCertificadoProduto', 'empresa_Cd_empresa', array('alias' => 'PedidoHasCertificadoProduto'));
        $this->hasMany('cd_empresa', 'App\Models\ProdutoHasDados', 'cd_empresa', array('alias' => 'ProdutoHasDados'));
        $this->hasMany('cd_empresa', 'App\Models\ProdutoHasEngenharia', 'empresa_cd_empresa', array('alias' => 'ProdutoHasEngenharia'));
        $this->hasMany('cd_empresa', 'App\Models\PromocaoFornHomologado', 'cd_empresa', array('alias' => 'PromocaoFornHomologado'));
        $this->hasMany('cd_empresa', 'App\Models\Referencia', 'empresa_cd_empresa', array('alias' => 'Referencia'));
        $this->hasMany('cd_empresa', 'App\Models\RequisicaoItem', 'cd_empresa', array('alias' => 'RequisicaoItem'));
        $this->hasMany('cd_empresa', 'App\Models\RequisicaoMat', 'cd_empresa', array('alias' => 'RequisicaoMat'));
        $this->hasMany('cd_empresa', 'App\Models\SacChamado', 'cod_cliente', array('alias' => 'SacChamado'));
        $this->hasMany('cd_empresa', 'App\Models\SacChamado', 'cod_reclamante', array('alias' => 'SacChamado'));
        $this->hasMany('cd_empresa', 'App\Models\SecaoProdutos', 'cd_empresa', array('alias' => 'SecaoProdutos'));
        $this->hasMany('cd_empresa', 'App\Models\ServicosOrcamento', 'cd_empresa', array('alias' => 'ServicosOrcamento'));
        $this->hasMany('cd_empresa', 'App\Models\SiteDadosEmpresa', 'cd_empresa', array('alias' => 'SiteDadosEmpresa'));
        $this->hasMany('cd_empresa', 'App\Models\SiteLandingpageFranquias', 'cd_empresa', array('alias' => 'SiteLandingpageFranquias'));
        $this->hasMany('cd_empresa', 'App\Models\TipoEtapa', 'empresa_cd_empresa', array('alias' => 'TipoEtapa'));
        $this->hasOne('cd_empresa', 'App\Models\UnidadeNegocio', 'empresa_cd_empresa', array('alias' => 'UnidadeNegocio'));
        $this->hasMany('cd_empresa', 'App\Models\Usuario', 'cd_empresa', array('alias' => 'Usuario'));
        $this->belongsTo('id_ocupacao', 'App\Models\Cbo', 'id_ocupacao', array('alias' => 'Cbo'));
        $this->belongsTo('logo', 'App\Models\Upload', 'cd_upload', array('alias' => 'Upload'));
        $this->belongsTo('cd_cargo', 'App\Models\Cargo', 'cd_cargo', array('alias' => 'Cargo'));
        $this->belongsTo('cd_tipo_funcionario', 'App\Models\TipoFuncionario', 'cd_tipo_funcionario', array('alias' => 'TipoFuncionario'));
        $this->belongsTo('licenciada', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('franquia', 'App\Models\Empresa', 'cd_empresa', array('alias' => 'Empresa'));
        $this->belongsTo('divisao_cd_divisao', 'App\Models\Divisao', 'cd_divisao', array('alias' => 'Divisao'));
        }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'empresa';
    }
    
    

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Empresa[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Empresa
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    
    /**
     * Retorna se o tipo de documento é um cpf.
     * Caso o retorno seja false o documento é um cnpj.
     * 
     * @return boolean
     */
    public function isCpf()
    {
        $numeroDocumento = $this->getCpfCnpjSomenteNumeros();
        if (strlen($numeroDocumento) == 11) {
           return true; 
        }
        
        return false; 
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
            'cd_empresa' => 'cd_empresa',
            'franquia' => 'franquia',
            'licenciada' => 'licenciada',
            'divisao_cd_divisao' => 'divisao_cd_divisao',
            'cd_cargo' => 'cd_cargo',
            'cd_tipo_funcionario' => 'cd_tipo_funcionario',
            'id_ocupacao' => 'id_ocupacao',
            'nome' => 'nome',
            'cpfCnpj' => 'cpfCnpj',
            'rg' => 'rg',
            'pfpjpr' => 'pfpjpr',
            'inscricao_estadual' => 'inscricao_estadual',
            'fantasia' => 'fantasia',
            'inscrito' => 'inscrito',
            'inscricao_municipal' => 'inscricao_municipal',
            'suframa' => 'suframa',
            'limite_credito' => 'limite_credito',
            'limite_mensal' => 'limite_mensal',
            'obs' => 'obs',
            'comissao_padrao' => 'comissao_padrao',
            'desconto1' => 'desconto1',
            'desconto2' => 'desconto2',
            'desconto3' => 'desconto3',
            'desconto4' => 'desconto4',
            'ativo' => 'ativo',
            'tipofrete' => 'tipofrete',
            'pedido_minimo' => 'pedido_minimo',
            'logo' => 'logo',
            'criado' => 'criado',
            'modificado' => 'modificado',
            'desligado' => 'desligado',
            'ingresso' => 'ingresso',
            'desligamento' => 'desligamento',
            'cadastrado_por' => 'cadastrado_por',
            'foto' => 'foto',
            'tributacao' => 'tributacao',
            'carga_horaria' => 'carga_horaria',
            'custo_hora' => 'custo_hora',
            'salario' => 'salario',
            'beneficios' => 'beneficios',
            'encargos' => 'encargos',
            'utiliza_controle_producao' => 'utiliza_controle_producao',
            'nacionalidade' => 'nacionalidade',
            'profissao' => 'profissao',
            'estado_civil' => 'estado_civil',
            'atv_prep' => 'atv_prep',
            'movestoque' => 'movestoque',
            'optante_debito_credito_icms' => 'optante_debito_credito_icms',
            'cnae' => 'cnae',
            'fatura_cond_pagto' => 'fatura_cond_pagto'
        );
    }
}
