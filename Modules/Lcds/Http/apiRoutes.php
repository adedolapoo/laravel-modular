<?php
use Illuminate\Support\Facades\Route;
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->group(['prefix'=>'lcds'], function ($api)
{
    $api->get('/', 'LcdsApiController@getAll');
});
