<?php
use Illuminate\Support\Facades\Route;
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->post('auth/register', ['as' => 'api.user.register', 'uses' => 'AuthApiController@register']);
$api->post('auth/login', ['as' => 'api.user.login', 'uses' => 'AuthApiController@login']);
$api->post('auth/login/social/{type}', ['uses' => 'AuthApiController@socialLogin']);
$api->post('auth/linkedin/token', ['uses' => 'AuthApiController@getLinkedinAccessToken']);

$api->group(['middleware'=>'api.auth'], function ($api)
{
    $api->get('auth/me', ['as' => 'api.user.current_user', 'uses' => 'UsersApiController@currentUser']);
    $api->get('auth/roles', ['as' => 'api.user.roles', 'uses' => 'UsersApiController@currentUserRoles']);
});
