<?php
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->group(['prefix' => 'settings'], function($api)
{
    $api->get('/', 'SettingsApiController@getAll');

    $api->post('/send-test-mail', 'SettingsApiController@sendTestMail')->name('api.settings.send_test_message');
});
