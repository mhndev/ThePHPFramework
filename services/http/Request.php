<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/25/16
 * Time: 5:02 PM
 */
namespace mhndev\ioc;

class Request
{

    /**
     * @var
     */
    protected $method;

    /**
     * @var
     */
    protected $uri;

    /**
     * @var
     */
    protected $queryParams;

    /**
     * @var
     */
    protected $requestTarget;

    /**
     * @var
     */
    protected $cookies;

    /**
     * @var
     */
    protected $serverParams;

    /**
     * @var
     */
    protected $bodyParsed;

    /**
     * @var
     */
    protected $bodyParsers;

    /**
     * @var
     */
    protected $files;


    /**
     * @var array
     */
    protected $validMethods = [
        'CONNECT' => 1,
        'DELETE' => 1,
        'GET' => 1,
        'HEAD' => 1,
        'OPTIONS' => 1,
        'PATCH' => 1,
        'POST' => 1,
        'PUT' => 1,
        'TRACE' => 1,
    ];


    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @return mixed
     */
    public function getRequestTarget()
    {
        return $this->requestTarget;
    }

    /**
     * @return mixed
     */
    public function getServerParams()
    {
        return $this->serverParams;
    }

    /**
     * @return mixed
     */
    public function getCookies()
    {
        return $this->cookies;
    }

    /**
     * @return mixed
     */
    public function getBodyParsed()
    {
        return $this->bodyParsed;
    }

    /**
     * @return mixed
     */
    public function getBodyParsers()
    {
        return $this->bodyParsers;
    }

    /**
     * @return mixed
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @return array
     */
    public function getValidMethods()
    {
        return $this->validMethods;
    }


    /**
     * Request constructor.
     * @param array $params
     */
    public function __construct(array $params)
    {
        foreach($params as $k => $v){
            $this->{$k} = $v;
        }
    }

}
