<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once 'vendor/autoload.php';

$container = new \mhndev\ioc\Container();

include "defaultServices.php";


/** @var \mhndev\http\Http $httpService */
$httpService = $container->get('http');

$request = $httpService->createRequestFromGlobals();


/** @var \mhndev\http_kernel\Kernel $kernel */
$kernel = $container->get('kernel');


include "routes.php";


/** @var \mhndev\http\Response $response */
$response = $kernel->run($request);

$response->send();
