<?php

use Illuminate\Support\Facades\Route;

Route::bind('business', function ($id) {
    return app(Modules\Businesses\Repositories\BusinessInterface::class)->byId($id);
});

Route::group(['prefix' => 'businesses'], function () {
    Route::get('/', [
        'as' => 'admin.businesses.index',
        'uses' => 'BusinessesController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.businesses.create',
        'uses' => 'BusinessesController@create'
    ]);
    Route::get('{business}/edit', [
        'as' => 'admin.businesses.edit',
        'uses' => 'BusinessesController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.businesses.store',
        'uses' => 'BusinessesController@store'
    ]);
    Route::put('{business}', [
        'as' => 'admin.businesses.update',
        'uses' => 'BusinessesController@update'
    ]);
    Route::get('data/table', [
        'as' => 'admin.businesses.datatable',
        'uses' => 'BusinessesController@dataTable'
    ]);
    Route::delete('{business}', [
        'as' => 'admin.businesses.destroy',
        'uses' => 'BusinessesController@destroy'
    ]);
});
