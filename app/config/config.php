<?php

DEFINE('APP_DIR', __DIR__.'/../../app');
DEFINE('UPLOAD_DIR', __DIR__.'/../../public/upload/');
DEFINE('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/');

DEFINE('THUMBOR_SERVER', 'http://localhost:8888');
DEFINE('THUMBOR_SECRET', '');

define('__FACEBOOK_SHARE__', 'https://www.facebook.com/sharer/sharer.php?u=');
define('__TWITTER_SHARE__', 'https://twitter.com/home?status=');
define('__GOOGLE_SHARE__', 'https://plus.google.com/share?url=');
define('__LINKEDIN_SHARE__', 'https://www.linkedin.com/shareArticle?mini=true&url=');
define('__PINTEREST_SHARE__', 'https://pinterest.com/pin/create/bookmarklet/?url=');
define('__MANDRILL_API__', '8NpFzoCqpE3JAisu_beKNg');

define('NFE_TIPO_ENTRADA', '1');
define('NFE_TIPO_DEVOLUCAO', '4');
define('NFE_TIPO_DEVOLUCAOSIMBOLICA', '3');

/*
|--------------------------------------------------------------------------
| Constantes usadas no mÃ³dulo NFCe
|--------------------------------------------------------------------------
*/
define('NFCE_VERSAO_NOTA_FISCAL', '3.10');
define('NFCE_VER_PROC', '1.0.0');
define('NFCE_NATUREZA_OPERACAO_VENDA_AO_CONSUMIDOR', 'Venda ao consumidor');
define('NFCE_CODIGO_MODELO_NFCE', 65);
define('NFCE_CODIGO_MODELO_NFE', 55);
define('NFCE_SERIE', 1);
define('NFCE_TIPO_DE_OPERACAO_SAIDA', 1);
define('NFCE_FORMA_PGTO_APRAZO', 1);
define('NFCE_OPERACAO_INTERNA', 1);
define('NFCE_FORMATO_DE_IMPRESSAO', 4);
define('NFCE_TIPO_EMISSAO_NORMAL', 1);
define('NFCE_AMBIENTE_PRODUCAO', 1);
define('NFCE_AMBIENTE_HOMOLOGACAO', 2);
define('NFCE_FINALIDADE_DE_EMISSAO_NORMAL', 1);
define('NFCE_OPERACAO_COM_CONSUMIDOR_FINAL', 1);
define('NFCE_OPERACAO_PRESENCIAL', 1);
define('NFCE_OPERACAO_ENTREGA_DOMICILIO', 4);
define('NFCE_EMISSAO_COM_APP_CONTRIBUINTE', 0);
define('NFCE_VERSAO_APP_CONTRIBUINTE', '1.0.0');
define('NFCE_CODIGO_PAIS_PADRAO', 1058);
define('NFCE_NOME_PAIS_PADRAO', 'BRASIL');
define('NFCE_TIPO_CONTATO_ADM', 1);
define('NFCE_VALOR_LIMITE_PARA_GERAR_DESTINATARIO', 10000);
define('NFCE_NAO_POSSUI_IE', 9);
define('NFCE_CONTIBUINTE_ISENTO_IE', 2);
define('NFCE_CONTIBUINTE_COM_IE', 1);
define('NFCE_PESSOA_FISICA', 0);
define('NFCE_AMB_HOMOLOGACAO_TEXTO_XPROD', 'NOTA FISCAL EMITIDA EM AMBIENTE DE HOMOLOGACAO - SEM VALOR FISCAL');
define('NFCE_INDTOT_COMPOE_VALOR_TOTAL_NOTA', 1);
define('NFCE_SIMPLES_NACIONAL', 1);
define('NFCE_SIMPLES_NACIONAL_EXCESSO_RECEITA_BRUTA', 2);
define('NFCE_ORIGEM_DA_MERCADORIA_NACIONAL', 0);
define('NFCE_MODALIDADE_BC_VALOR_DA_OPERACAO', 3);
define('NFCE_VALOR_ICMS_DESONERADO', 0);
define('NFCE_VALOR_PADRAO_SEGURO', '0.00');
define('NFCE_MOD_FRETE_SEM_FRETE', 9);
 

define('NFE_LOTE_PROCESSADO', 104);
define('NFE_LOTE_RECEBIDO_COM_SUCESSO', 103);
define('NFE_AUTORIZADO_USO_NFE', 100);
define('NFE_OPERACAO_ENVIO_NOTA', 1);
define('NFE_OPERACAO_CONSULTA_NOTA', 2);


switch ($_SERVER['SERVER_NAME']) {
    case 'localhost':
    case '127.0.0.1':
        $config['baseUri'] = '/pdvsolinter/';
        $config['host'] = 'localhost';
        $config['username'] = 'root';
        $config['password'] = '';
        $config['dbname'] = 'piscinaf_erp';
        DEFINE('BASE_UPLOAD_PDV', 'http://'.$_SERVER['HTTP_HOST'].$config['baseUri'].'upload/');
        break;
    case 'pdvfiber':
        $config['baseUri'] = '/';
        $config['host'] = 'localhost';
        $config['username'] = 'root';
        $config['password'] = 'root';
        $config['dbname'] = 'solinter';
        DEFINE('BASE_UPLOAD_PDV', 'http://'.$_SERVER['HTTP_HOST'].$config['baseUri'].'upload/');
        break;
    case 'fiber':
        $config['baseUri'] = '/pdv/';
        $config['host'] = 'localhost';
        $config['username'] = 'root';
        $config['password'] = 'root';
        $config['dbname'] = 'solinter';
        DEFINE('BASE_UPLOAD_PDV', 'http://'.$_SERVER['HTTP_HOST'].$config['baseUri'].'upload/');
        break;
    default:
        $config['baseUri'] = '/pdv/';
        $config['host'] = '104.236.168.38';
        $config['username'] = 'solinter_erp';
        $config['password'] = '6SvG}xleRS!+';
        $config['dbname'] = 'solinter_erp';
        DEFINE('BASE_UPLOAD_PDV', 'https://'.$_SERVER['HTTP_HOST'].$config['baseUri'].'upload/');
        break;
}

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => $config['host'],
        'username'    => $config['username'],
        'password'    => $config['password'],
        'dbname'      => $config['dbname'],
        'charset'     => 'utf8',
    ),
    'application' => array(
        'controllersDir' => __DIR__ . '/../../app/controllers/',
        'modelsDir'      => __DIR__ . '/../../app/models/',
        'viewsDir'       => __DIR__ . '/../../app/views/layouts/admin/',
        'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        'servicesDir'    => __DIR__ . '/../../app/services/',
        'validatorDir'    => __DIR__ . '/../../app/validator/',
        'formsDir'       => __DIR__ . '/../../app/forms/',
        'libraryDir'     => __DIR__ . '/../../app/library/',
        'cacheDir'       => __DIR__ . '/../../app/cache/',
        'baseUri'        => $config['baseUri'],
    )
));
