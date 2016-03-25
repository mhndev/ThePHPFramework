<?php



$container = new \mhndev\ioc\Container();


/** @var \mhndev\http\Http $httpService */
$httpService = $container->get('http');
$request = $httpService->createRequestFromGlobals();

/** @var \mhndev\http_kernel\Kernel $kernel */
$kernel = $container->get('http-kernel');


/** @var \mhndev\ioc\Response $response */
$response = $kernel->run($request);


$response->send();
