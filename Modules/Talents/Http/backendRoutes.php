<?php

use Illuminate\Support\Facades\Route;

Route::bind('talent', function ($id) {
    return app(Modules\Talents\Repositories\TalentInterface::class)->byId($id);
});

Route::group(['prefix' => 'talents'], function () {
    Route::get('/', [
        'as' => 'admin.talents.index',
        'uses' => 'TalentsController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.talents.create',
        'uses' => 'TalentsController@create'
    ]);
    Route::get('{talent}/edit', [
        'as' => 'admin.talents.edit',
        'uses' => 'TalentsController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.talents.store',
        'uses' => 'TalentsController@store'
    ]);
    Route::put('{talent}', [
        'as' => 'admin.talents.update',
        'uses' => 'TalentsController@update'
    ]);
    Route::get('data/table', [
        'as' => 'admin.talents.datatable',
        'uses' => 'TalentsController@dataTable'
    ]);
    Route::delete('{talent}', [
        'as' => 'admin.talents.destroy',
        'uses' => 'TalentsController@destroy'
    ]);
});
