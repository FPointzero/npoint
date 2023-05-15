<?php

use core\http\Http;

global $http;
$http = [];
/**
 * @param $router_name string
 * @param $fun Closure
 * @return void
 */
function get($router_name, $fun)
{
    $GLOBALS["http"][$router_name] = new Http($router_name, "GET", $fun);
}

/**
 * @param $router_name string
 * @param $fun Closure
 * @return void
 * 加入一个post路由
 */
function post($router_name, $fun)
{
    $GLOBALS["http"][$router_name] = new Http($router_name, "POST", $fun);
}

/**
 * @param $http array
 * @param $request_uri string
 * @return void
 * 处理http 如果模式错误则返回405，未设置路由则返回404
 */
function handler_http($request_uri)
{
    if (isset($GLOBALS["http"][$request_uri])) {
        if ($GLOBALS["http"][$request_uri]->method == $_SERVER["REQUEST_METHOD"]) {
            $GLOBALS["http"][$request_uri]->execute();
        } else {
            header('HTTP/1.1 405 Not ALLOWED');
            require_once PUBLIC_DIR . '/error/405.html';
        }
    } else {
        header('HTTP/1.1 404 Not Found');
        require_once PUBLIC_DIR . '/error/404.html';
    }
}