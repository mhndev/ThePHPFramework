<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/25/16
 * Time: 5:20 PM
 */
namespace mhndev\http_kernel;

use mhndev\dispatcher\Dispatcher;
use mhndev\http\Request;
use mhndev\router\Router;

class Kernel
{


    /**
     * @var
     */
    protected $matchedRoute;


    /**
     * @var
     */
    protected $request;


    /**
     * @var
     */
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

    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $this->request = $request;

        $this->matchedRoute = $this->router->match($request);

        if(!empty($this->middlewares['before']))
            $request = $this->runThroughBeforeMiddleWares($this->middlewares['before']);

        $this->response = $this->dispatcher->dispatch($request, $this->matchedRoute);

        if(!empty($this->middlewares['after']))
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


    /**
     * Proxy call to router get method
     * @param $pattern
     * @param $callable
     */
    public function get($pattern, $callable)
    {

    }

    public function post($pattern, $callable)
    {

    }


    public function put($pattern, $callable)
    {

    }


    public function delete($pattern, $callable)
    {

    }



    public function patch($pattern, $callable)
    {

    }


    public function options($pattern, $callable)
    {

    }


    public function any($pattern, $callable)
    {

    }



}
