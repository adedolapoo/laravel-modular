<?php

use Illuminate\Support\Facades\Route;

Route::bind('state', function ($id) {
    return app(Modules\States\Repositories\StateInterface::class)->byId($id);
});

Route::group(['prefix' => 'states'], function () {
    Route::get('/', [
        'as' => 'admin.states.index',
        'uses' => 'StatesController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.states.create',
        'uses' => 'StatesController@create'
    ]);
    Route::get('{state}/edit', [
        'as' => 'admin.states.edit',
        'uses' => 'StatesController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.states.store',
        'uses' => 'StatesController@store'
    ]);
    Route::put('{state}', [
        'as' => 'admin.states.update',
        'uses' => 'StatesController@update'
    ]);
    Route::get('data/table', [
        'as' => 'admin.states.datatable',
        'uses' => 'StatesController@dataTable'
    ]);
    Route::delete('{state}', [
        'as' => 'admin.states.destroy',
        'uses' => 'StatesController@destroy'
    ]);
});
