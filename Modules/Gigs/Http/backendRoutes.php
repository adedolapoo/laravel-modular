<?php

use Illuminate\Support\Facades\Route;

Route::bind('gig', function ($id) {
    return app(Modules\Gigs\Repositories\GigInterface::class)->byId($id);
});

Route::group(['prefix' => 'gigs'], function () {
    Route::get('/', [
        'as' => 'admin.gigs.index',
        'uses' => 'GigsController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.gigs.create',
        'uses' => 'GigsController@create'
    ]);
    Route::get('{gig}/edit', [
        'as' => 'admin.gigs.edit',
        'uses' => 'GigsController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.gigs.store',
        'uses' => 'GigsController@store'
    ]);
    Route::put('{gig}', [
        'as' => 'admin.gigs.update',
        'uses' => 'GigsController@update'
    ]);
    Route::get('data/table', [
        'as' => 'admin.gigs.datatable',
        'uses' => 'GigsController@dataTable'
    ]);
    Route::delete('{gig}', [
        'as' => 'admin.gigs.destroy',
        'uses' => 'GigsController@destroy'
    ]);
});
