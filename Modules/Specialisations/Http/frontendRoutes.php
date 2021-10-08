<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('specialisations')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'specialisations', 'uses' => 'SpecialisationsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'specialisations.slug', 'uses' => 'SpecialisationsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'specialisations'], function()
{
    Route::get('/', 'SpecialisationsPublicController@index');
});*/
