<?php
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->group(['middleware'=>'api.auth','prefix' => 'business'], function($api)
{
    $api->get('/', 'BusinessesApiController@get');
    $api->patch('/', 'BusinessesApiController@update');
});
