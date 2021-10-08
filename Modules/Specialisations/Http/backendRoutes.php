<?php

use Illuminate\Support\Facades\Route;

Route::bind('specialisation', function ($id) {
    return app(Modules\Specialisations\Repositories\SpecialisationInterface::class)->byId($id);
});

Route::group(['prefix' => 'specialisations'], function () {
    Route::get('/', [
        'as' => 'admin.specialisations.index',
        'uses' => 'SpecialisationsController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.specialisations.create',
        'uses' => 'SpecialisationsController@create'
    ]);
    Route::get('{specialisation}/edit', [
        'as' => 'admin.specialisations.edit',
        'uses' => 'SpecialisationsController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.specialisations.store',
        'uses' => 'SpecialisationsController@store'
    ]);
    Route::put('{specialisation}', [
        'as' => 'admin.specialisations.update',
        'uses' => 'SpecialisationsController@update'
    ]);
    Route::get('data/table', [
        'as' => 'admin.specialisations.datatable',
        'uses' => 'SpecialisationsController@dataTable'
    ]);
    Route::delete('{specialisation}', [
        'as' => 'admin.specialisations.destroy',
        'uses' => 'SpecialisationsController@destroy'
    ]);
});
