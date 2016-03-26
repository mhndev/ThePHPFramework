<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/25/16
 * Time: 5:27 PM
 */

namespace mhndev\router;


use mhndev\http\Request;

class Router
{

    public function match(Request $request)
    {
        return new Route();
    }

}
