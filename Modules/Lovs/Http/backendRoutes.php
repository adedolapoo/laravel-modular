<?php

use Illuminate\Support\Facades\Route;

Route::bind('lov', function ($id) {
    return app(Modules\Lovs\Repositories\LovInterface::class)->byId($id);
});

Route::group(['prefix' => 'lovs'], function () {
    Route::get('/', [
        'as' => 'admin.lovs.index',
        'uses' => 'LovsController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.lovs.create',
        'uses' => 'LovsController@create'
    ]);
    Route::get('{lov}/edit', [
        'as' => 'admin.lovs.edit',
        'uses' => 'LovsController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.lovs.store',
        'uses' => 'LovsController@store'
    ]);
    Route::put('{lov}', [
        'as' => 'admin.lovs.update',
        'uses' => 'LovsController@update'
    ]);
    Route::get('data/table', [
        'as' => 'admin.lovs.datatable',
        'uses' => 'LovsController@dataTable'
    ]);
    Route::delete('{lov}', [
        'as' => 'admin.lovs.destroy',
        'uses' => 'LovsController@destroy'
    ]);
});
