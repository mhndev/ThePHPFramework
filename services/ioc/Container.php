<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/25/16
 * Time: 5:05 PM
 */
namespace mhndev\ioc;

class Container
{

    /**
     * @var array
     */
    protected $services;


    public function get($service)
    {
        return $this->services[$service];
    }

    public function set($service, Callable $callable)
    {
        $this->services[$service] = call_user_func($callable, $this);
    }

}
