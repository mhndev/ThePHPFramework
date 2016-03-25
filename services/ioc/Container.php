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
        if($this->services[$service]['type'] == 'normal'){
            return new $this->services[$service];
        }else{
            return $this->services[$service]['object'];
        }
    }

    public function set($serviceName, $service, $serviceType='normal', $class = null)
    {
        $this->services[$serviceName]['object'] = $service;
        $this->services[$serviceName]['type'] = $serviceType;

        if($serviceType == 'normal'){
            $this->services[$serviceName]['class'] = $class;
        }
    }

}
