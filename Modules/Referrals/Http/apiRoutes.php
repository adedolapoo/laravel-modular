<?php
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->group(['middleware'=>'api.auth','prefix' => 'referrals'], function($api)
{
    $api->get('/', 'ReferralsApiController@getAll');
    $api->post('/', 'ReferralsApiController@store');
});
