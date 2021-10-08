<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('posts')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'posts', 'uses' => 'PostsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'posts.slug', 'uses' => 'PostsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'posts'], function()
{
    Route::get('/', 'PostsPublicController@index');
});*/
