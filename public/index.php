<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


defined('ROOT_PATH') || define("ROOT_PATH", realpath(dirname(__FILE__).'/../'));
defined("APP_PATH") || define("APP_PATH", realpath(dirname(__FILE__).'/../app/'));


require_once '../vendor/autoload.php';


$settings = require APP_PATH. 'settings.php';
$container = new \mhndev\ioc\Container($settings);



include APP_PATH."defaultServices.php";


/** @var \mhndev\http\Http $httpService */
$httpService = $container->get('http');

$request = $httpService->createRequestFromGlobals();


/** @var \mhndev\http_kernel\Kernel $kernel */
$kernel = $container->get('kernel');


/** @var \mhndev\http\Response $response */
$response = $kernel->run($request);

$response->send();
