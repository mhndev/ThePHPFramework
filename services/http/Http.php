<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/25/16
 * Time: 5:15 PM
 */
namespace mhndev\http;

use mhndev\ioc\Request;

class Http
{

    public function createRequestFromGlobals()
    {
        return new Request();
    }

}
