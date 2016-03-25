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
    public function get($service)
    {

        return $service;
    }
}
