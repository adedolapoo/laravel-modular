<?php
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->group(['prefix' => 'posts'], function($api)
{
    $api->get('/', 'PostsApiController@getAll');
    $api->get('/{slug}', 'PostsApiController@show');
});
