<?php
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->group(['middleware'=>'api.auth','prefix' => 'gigs'], function($api)
{
    $api->get('/', 'GigsApiController@getAll');
    $api->get('/{slug}', 'GigsApiController@show');
    $api->get('/{slug}/talents/{talent_id?}', 'GigsApiController@talents');
    $api->post('/{slug}/talents/{talent_id?}', 'GigsApiController@talentsUpdate');
    $api->post('/{slug}/talents', 'GigsApiController@talentsUpdate');
    $api->post('/', 'GigsApiController@store');
    $api->patch('/{gig_id}', 'GigsApiController@update');
});
