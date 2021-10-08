<?php
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->group(['middleware'=>'api.auth','prefix' => 'lovs'], function($api)
{
    $api->get('/{type}', 'LovsApiController@getAllType');
});
