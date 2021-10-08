<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('gigs')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'gigs', 'uses' => 'GigsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'gigs.slug', 'uses' => 'GigsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'gigs'], function()
{
    Route::get('/', 'GigsPublicController@index');
});*/
