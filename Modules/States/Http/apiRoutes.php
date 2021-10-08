<?php
use Illuminate\Support\Facades\Route;
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->group(['prefix'=>'states'], function ($api)
{
    $api->get('/', 'StatesApiController@getAll');
});
