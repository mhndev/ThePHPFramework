<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/25/16
 * Time: 5:20 PM
 */
namespace mhndev\http_kernel;

use mhndev\dispatcher\Dispatcher;
use mhndev\ioc\Request;
use mhndev\router\Router;

class Kernel
{


    protected $matchedRoute;


    protected $request;


    protected $response;


    /**
     * @var Router
     */
    protected $router;

    /**
     * @var Dispatcher
     */
    protected $dispatcher;

    /**
     * @var array
     *
     * [
     *      'before'=>[
     *
     *      ],
     *
     *      'after'=>[
     *
     *      ]
     *
     * ]
     */

    protected $middlewares;


    public function __construct($router, $dispatcher)
    {
        $this->router = $router;

        $this->dispatcher = $dispatcher;
    }

    public function run(Request $request)
    {
        $this->request = $request;

        $this->matchedRoute = $this->router->match($request);

        $request = $this->runThroughBeforeMiddleWares($this->middlewares['before']);

        $this->response = $this->dispatcher->dispatch($request, $this->matchedRoute);

        $this->response = $this->runThroughAfterMiddleWares($this->middlewares['after']);

        return $this->response;
    }


    public function runThroughBeforeMiddleWares(array $middlewares)
    {

        $request = $this->request;

        foreach($middlewares as $middleware){
            $request = call_user_func([new $middleware, 'run'], $request);
        }

        return $request;
    }



    public function runThroughAfterMiddleWares(array $middlewares)
    {
        $response = $this->response;

        foreach($middlewares as $middleware){
            $response = call_user_func([new $middleware, 'run'], $response);
        }

        return $response;
    }


}
