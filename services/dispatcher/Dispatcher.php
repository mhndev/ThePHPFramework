<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/25/16
 * Time: 5:28 PM
 */
namespace mhndev\dispatcher;

use mhndev\http\Request;
use mhndev\http\Response;
use mhndev\router\Route;

class Dispatcher
{

    protected $controllersPath;

    protected $viewsPath;


    public function bootstrap(array $data)
    {

    }


    public function dispatch(Request $request, Route $route)
    {
        return new Response();
    }
}
