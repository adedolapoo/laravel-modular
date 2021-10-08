<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('countries')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'countries', 'uses' => 'CountriesPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'countries.slug', 'uses' => 'CountriesPublicController@show']);
    }
}

/*Route::group(['prefix' => 'countries'], function()
{
    Route::get('/', 'CountriesPublicController@index');
});*/
