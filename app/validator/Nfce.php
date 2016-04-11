<?php

/*
 * 
 * 
 * 
 */

namespace App\Validator;

use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use App\Validator\ValidarRegrasGeracaoDestinario;
use App\Services\Nfce as ServiceNfce;
/**
 * Description of NfceValidator
 *
 * @author infor
 */
class Nfce extends Validation {
    private $serviceNfce;
    private $retornarExceptionCasoErro;
    private $camposQueNaoSeraoObrigatorios;
    private $nomeGrupo;
    private $dadosVenda;
    
    /**
     * Executa a Validação do grupo Ide
     *
     * @param array $nomeGrupo     
     * @param array $retornarExceptionCasoErro     
     * @param array $camposQueNaoSeraoObrigatorios     
     * @return boolean
     */
    private function _validarGrupo()
    {   
        $this->camposQueNaoSeraoObrigatorios = array('cMunFG');
        $this->validarParametros(array('nomeGrupo' => $this->nomeGrupo), $this->retornarExceptionCasoErro);
        $this->adicionarValidacoesPorGrupo();
        
        $itensGrupoIde = $this->serviceNfce->obterTodosItensPorGrupo($this->nomeGrupo);
        $mensagens = $this->validate($itensGrupoIde);
        
        if (count($mensagens)) {
            if ($retornarExceptionCasoErro === TRUE) {
                throw new \Exception($this->errosToString($mensagens));                
            }
            else {                
                return $this->errosToString($mensagens);
            }
        }
        
        return true;
    }
    
    public function validar(ServiceNfce $serviceNfce, $retornarExceptionCasoErro = FALSE, $dadosVenda = '', $camposQueNaoSeraoObrigatorios = array())
    {
        $this->serviceNfce = $serviceNfce;
        $this->retornarExceptionCasoErro = $retornarExceptionCasoErro;
        $this->camposQueNaoSeraoObrigatorios = $camposQueNaoSeraoObrigatorios;
        $this->dadosVenda = $dadosVenda;
        
       return $this; 
    }
  
        
    public function __call($nomeGrupo, $parametros)
    {   
        $nomeGruposNfce = $this->serviceNfce->obterTodosGrupos();
        $grupoExiste = array_search($nomeGrupo, $nomeGruposNfce);
        if ($grupoExiste === FALSE) {
             throw new \Exception('Erro ao tentar validar o grupo '.$nomeGrupo.'. Ele não existe no mapeamento do serviço NFCE metodo: <b>obterTodosGrupos()</b>');
        }
        $this->nomeGrupo = $nomeGrupo;
        $this->_validarGrupo();
    }
    
     /**
     * Remove campos que não serão validados
     *
     * @param array $campos     
     * @param array $camposARemover     
     * @return array
     */
    private  function removerCamposQueNaoSeraoValidados(array $campos, array $camposARemover)
    {
        if(count($campos) != 0 && count($camposARemover) != 0) {
//           foreach ($camposARemover as $campoARemover) {
//               unset($serviceNfce->get$campoARemover);
//           }
            return array_diff($campos, $camposARemover);
        }
        
        return $campos;
    }
    
     /**
     * Regras para gerar o grupo destinatário
     *
     *     
     * @return boolean
     */
    public function regrasGerarDestinario()
    {   
        $dadosVenda = array(
            'valorTotal' => $this->dadosVenda->getValorTotal() ,
            'entregaDomicilio' => $this->dadosVenda->getEntregaDomicilio(), 
            'existeDadosCliente' => $this->dadosVenda->getExisteDadosCliente() );
     
        $validarRegrasGeracaoDestinario = new ValidarRegrasGeracaoDestinario($dadosVenda);
        $this->add('', $validarRegrasGeracaoDestinario);
        
        $erros = $this->validate();
       
         if ($validarRegrasGeracaoDestinario->validationHasFailed() == true) {
            return false;
        }
        
        return true;
    }
    
    /**
     * Remove campos que não serão validados
     *
     * @param array $campos     
     * @param array $camposARemover     
     * @return array
     */
    public  function errosToString($erros)
    {  
        $textoErros = '';
        foreach ($erros as $erro) {
            $textoErros .=  $erro. '<br>';
        }
        
        return $textoErros;
    }
    /**
     * Realiza validações nos parametros 
     *
     * @param array $nomeGrupo     
     * @param array $retornarExceptionCasoErro     
     * 
     * @return Exception ou boolean
     */
    private  function validarParametros(array $nomeGrupo, $retornarExceptionCasoErro)
    {  
        foreach ($nomeGrupo as $parametro => $valor) {
            if (empty($valor)) {
                $erros[] = " Erro na função ( ".debug_backtrace()[1]['function']." ). a variável .$parametro. esta vazia.";
             }
        }
        
        if (!empty($erros)) {
            if ($retornarExceptionCasoErro === TRUE) {
              throw new \Exception($this->errosToString($erros));                                
            }
            
            return false;
        }
        
        return true;
    }
    
    /**
     * Adiciona validações por cada grupo
     *
     * @param array $campos     
     * @param array $camposARemover     
     * @return array
     */
    private function adicionarValidacoesPorGrupo()
    {  
        switch ($this->nomeGrupo) {
            case 'ide':                
                $nomesItensGrupoIde = $this->serviceNfce->obterNomeItensXmlPorGrupo('ide');  
                $nomesItensGrupoIde = $this->removerCamposQueNaoSeraoValidados($nomesItensGrupoIde, $this->camposQueNaoSeraoObrigatorios);    
                
                $this->validarAtributosVazios($nomesItensGrupoIde);
                
            break;
        }
    }
    
    /**
     * Valida se o atributo esta vazio e adiciona no validate
     *
     * @param array $campos     
     * @param array $camposARemover     
     * @return void
     */
    public function validarAtributosVazios(array $nomesItensGrupo)
    {  
        foreach ($nomesItensGrupo as $nomeItem) {       
            $this->add($nomeItem, new PresenceOf( array('message' => 'O Atributo '.$nomeItem.' esta vazio.')));
        }
    }
    
                
}
