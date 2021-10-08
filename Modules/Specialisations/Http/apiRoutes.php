<?php
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->group(['middleware'=>'api.auth','prefix' => 'specialisations'], function($api)
{
    $api->get('/', 'SpecialisationsApiController@getAll');
});
