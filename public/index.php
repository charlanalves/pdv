<?php

//error_reporting(0);

try {
    /**
     * Read the configuration
     */
    $config = include __DIR__ . "/../app/config/config.php";

    /**
     * Read auto-loader
     */
    include __DIR__ . "/../app/config/loader.php";

    /**
     * Read services
     */
    include __DIR__ . "/../app/config/services.php";

    /**
     * Read composer
     */
    include __DIR__ . "/../vendor/autoload.php";


    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    $application->useImplicitView(false);
    $di['app'] = $application;

    switch ($_SERVER['SERVER_NAME']) {
        case 'localhost':
        case '127.0.0.1':
        case 'pdvfiber':
        case 'fiber':
            (new Snowair\Debugbar\ServiceProvider())->start();
            break;
    }

   


    echo $application->handle()->getContent();

} catch (\Exception $e) {           
    echo $e->getMessage();
}
