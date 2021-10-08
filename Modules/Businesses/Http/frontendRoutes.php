<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('businesses')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'businesses', 'uses' => 'BusinessesPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'businesses.slug', 'uses' => 'BusinessesPublicController@show']);
    }
}

/*Route::group(['prefix' => 'businesses'], function()
{
    Route::get('/', 'BusinessesPublicController@index');
});*/
