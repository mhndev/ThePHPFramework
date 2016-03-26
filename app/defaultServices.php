<?php

$container->set('http', function($c){
    return new \mhndev\http\Http();
});


$container->set('router', function($c){
    return new mhndev\router\Router();
});

$container->set('dispatcher', function($c){
    return new \mhndev\dispatcher\Dispatcher(include APP_PATH.'routes.php');
});


$container->set('kernel', function($c){
    return new \mhndev\http_kernel\Kernel($c->get('router'), $c->get('dispatcher'));
});
