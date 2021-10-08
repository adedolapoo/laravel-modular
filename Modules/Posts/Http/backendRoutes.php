<?php

use Illuminate\Support\Facades\Route;

Route::bind('post', function ($id) {
    return app(Modules\Posts\Repositories\PostInterface::class)->byId($id);
});

Route::group(['prefix' => 'posts'], function () {
    Route::get('/', [
        'as' => 'admin.posts.index',
        'uses' => 'PostsController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.posts.create',
        'uses' => 'PostsController@create'
    ]);
    Route::get('{post}/edit', [
        'as' => 'admin.posts.edit',
        'uses' => 'PostsController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.posts.store',
        'uses' => 'PostsController@store'
    ]);
    Route::put('{post}', [
        'as' => 'admin.posts.update',
        'uses' => 'PostsController@update'
    ]);
    Route::get('data/table', [
        'as' => 'admin.posts.datatable',
        'uses' => 'PostsController@dataTable'
    ]);
    Route::delete('{post}', [
        'as' => 'admin.posts.destroy',
        'uses' => 'PostsController@destroy'
    ]);
    Route::group(['prefix' => 'categories'], function () {
        Route::get('', ['as' => 'admin.post.categories.index', 'uses' => 'PostCategoriesController@index']);
        Route::get('create', ['as' => 'admin.post.categories.create', 'uses' => 'PostCategoriesController@create']);
        Route::get('{category}/edit', ['as' => 'admin.post.categories.edit', 'uses' => 'PostCategoriesController@edit']);
        Route::post('', ['as' => 'admin.post.categories.store', 'uses' => 'PostCategoriesController@store']);
        Route::put('{category}', ['as' => 'admin.post.categories.update', 'uses' => 'PostCategoriesController@update']);
        Route::post('sort', ['as' => 'admin.post.categories.sort', 'uses' => 'PostCategoriesController@sort']);
    });
});
