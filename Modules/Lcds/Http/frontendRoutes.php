<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('lcds')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'lcds', 'uses' => 'LcdsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'lcds.slug', 'uses' => 'LcdsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'lcds'], function()
{
    Route::get('/', 'LcdsPublicController@index');
});*/
