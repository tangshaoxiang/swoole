<?php
/**
 * Created by PhpStorm.
 * User: Ty_Ro
 * Date: 2018/6/28
 * Time: 18:26
 */
$http = new swoole_http_server("0.0.0.0", 8811);
$http->on('request', function ($request, $response) {
    $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>");
});
$http->start();