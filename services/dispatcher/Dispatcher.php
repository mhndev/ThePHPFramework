<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/25/16
 * Time: 5:28 PM
 */
namespace mhndev\dispatcher;

use mhndev\ioc\Request;
use mhndev\ioc\Response;
use mhndev\router\Route;

class Dispatcher
{

    public function dispatch(Request $request, Route $route)
    {
        return new Response();
    }
}
