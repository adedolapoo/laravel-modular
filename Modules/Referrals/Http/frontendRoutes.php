<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('referrals')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'referrals', 'uses' => 'ReferralsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'referrals.slug', 'uses' => 'ReferralsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'referrals'], function()
{
    Route::get('/', 'ReferralsPublicController@index');
});*/
