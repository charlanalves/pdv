<?php

/*
 * 
 * 
 */

namespace App\Validator;

use Phalcon\Validation;
use Phalcon\Validation\Message;
use Phalcon\Validation\Validator;


/**
 * 
 *
 * @author infor
 */
class ValidarRegrasGeracaoDestinario extends Validator {
    private  $erro = false;
    
    public function validationHasFailed()
    {
        return $this->erro;
    }
   
    public function validate(Validation $validator, $attribute = '') {
        
        $entregaDomicilio = $this->getOption('entregaDomicilio');
        $existeDadosCliente = $this->getOption('existeDadosCliente');
        $valorTotal = $this->getOption('valorTotal');
        
        if ($entregaDomicilio == TRUE)
        {
            $this->erro = false;
            return true;
        }
        
        if ($existeDadosCliente == FALSE && $valorTotal > NFCE_VALOR_LIMITE_PARA_GERAR_DESTINATARIO) {
            $mensagem = "Erro na função ".__FUNCTION__." O cliente deve ter o entereço cadastradado para preenchimento dos dados do destinatário no documento fiscal";
            $validator->appendMessage(new Message($mensagem));
            $this->erro = true; 
        }
        
        if ($existeDadosCliente == FALSE && $valorTotal < NFCE_VALOR_LIMITE_PARA_GERAR_DESTINATARIO) {         
            $this->erro = true; 
            return false;
        }
        
        return true;
    }    
}
