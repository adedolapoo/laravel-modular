<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('states')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'states', 'uses' => 'StatesPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'states.slug', 'uses' => 'StatesPublicController@show']);
    }
}

/*Route::group(['prefix' => 'states'], function()
{
    Route::get('/', 'StatesPublicController@index');
});*/
