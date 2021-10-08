<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('talents')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'talents', 'uses' => 'TalentsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'talents.slug', 'uses' => 'TalentsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'talents'], function()
{
    Route::get('/', 'TalentsPublicController@index');
});*/
