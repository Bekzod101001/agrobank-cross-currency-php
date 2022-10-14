<?php

use app\controllers\CurrencyController;

use app\core\Application;

require_once __DIR__.'/vendor/autoload.php';


$app = Application::getInstance();

$app->commandRouter->add('currency:get-cross', CurrencyController::class, 'getCrossCurrency');
$app->commandRouter->add('currency:get', CurrencyController::class, 'getCurrency');

$app->run();