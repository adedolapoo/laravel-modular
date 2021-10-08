<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('lovs')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'lovs', 'uses' => 'LovsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'lovs.slug', 'uses' => 'LovsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'lovs'], function()
{
    Route::get('/', 'LovsPublicController@index');
});*/
