<?php

$loader = new \Phalcon\Loader();


/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->servicesDir,
        $config->application->formsDir,
        $config->application->validatorDir
    )
)->register();

$loader->registerNamespaces(
    array(
        'App\Models' => $config->application->modelsDir,
        'App\Controllers' => $config->application->controllersDir,
        'App\Forms' => $config->application->formsDir,
        'App\Services' => $config->application->servicesDir,
        'App\Validator' => $config->application->validatorDir,
    )
);

$loader->register();

require_once __DIR__ . '/../../vendor/autoload.php';
