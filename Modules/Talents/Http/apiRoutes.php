<?php
use Illuminate\Support\Facades\Route;
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->group(['middleware'=>'api.auth','prefix'=>'talent'], function ($api)
{
    $api->get('/', 'TalentsApiController@get');
    $api->patch('/', 'TalentsApiController@update');
    $api->post('/{relation}', 'TalentsApiController@storeRelation');
    $api->patch('/{relation}/{id}', 'TalentsApiController@updateRelation');
    $api->delete('/{relation}/{id}', 'TalentsApiController@deleteRelation');
});
