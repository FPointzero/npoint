<?php

namespace core\http;

class Http
{
    private $route_controller;
    public $method;
    private $fun;
    public function __construct($route_controller, $method,$fun)
    {
        $this->route_controller = $route_controller;
        $this->method = $method;
        $this->fun = $fun;
    }
    public function execute() {
        call_user_func($this->fun);
    }
}