<?php

use Illuminate\Support\Facades\Route;

Route::bind('lcd', function ($id) {
    return app(Modules\Lcds\Repositories\LcdInterface::class)->byId($id);
});

Route::group(['prefix' => 'lcds'], function () {
    Route::get('/', [
        'as' => 'admin.lcds.index',
        'uses' => 'LcdsController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.lcds.create',
        'uses' => 'LcdsController@create'
    ]);
    Route::get('{lcd}/edit', [
        'as' => 'admin.lcds.edit',
        'uses' => 'LcdsController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.lcds.store',
        'uses' => 'LcdsController@store'
    ]);
    Route::put('{lcd}', [
        'as' => 'admin.lcds.update',
        'uses' => 'LcdsController@update'
    ]);
    Route::get('data/table', [
        'as' => 'admin.lcds.datatable',
        'uses' => 'LcdsController@dataTable'
    ]);
    Route::delete('{lcd}', [
        'as' => 'admin.lcds.destroy',
        'uses' => 'LcdsController@destroy'
    ]);
});
