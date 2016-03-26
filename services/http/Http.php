<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/25/16
 * Time: 5:15 PM
 */
namespace mhndev\http;

class Http
{

    public function createRequestFromGlobals()
    {
        return new Request([
            'method'         => $_SERVER['REQUEST_METHOD'],
            'uri'            => $_SERVER['REQUEST_URI'],
            'cookies'        => $_COOKIE,
            'serverParams'   => $_SERVER,
            'files'          => $_FILES
        ]);
    }

}
