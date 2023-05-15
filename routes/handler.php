<?php
$request_uri = $_SERVER['REQUEST_URI'];
$rm_name = $_SERVER["SCRIPT_NAME"];
$request_uri = preg_replace("#$rm_name#", "", $request_uri);
$request_uri = preg_replace("#\?.*#", "", $request_uri);

handler_http($request_uri);