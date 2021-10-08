<?php
use Illuminate\Support\Facades\Route;
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->get('pages', ['uses' => 'PagesApiController@getAll']);
