<?php

use Illuminate\Support\Facades\Route;

Route::bind('country', function ($id) {
    return app(Modules\Countries\Repositories\CountryInterface::class)->byId($id);
});

Route::group(['prefix' => 'countries'], function () {
    Route::get('/', [
        'as' => 'admin.countries.index',
        'uses' => 'CountriesController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.countries.create',
        'uses' => 'CountriesController@create'
    ]);
    Route::get('{country}/edit', [
        'as' => 'admin.countries.edit',
        'uses' => 'CountriesController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.countries.store',
        'uses' => 'CountriesController@store'
    ]);
    Route::put('{country}', [
        'as' => 'admin.countries.update',
        'uses' => 'CountriesController@update'
    ]);
    Route::get('data/table', [
        'as' => 'admin.countries.datatable',
        'uses' => 'CountriesController@dataTable'
    ]);
    Route::delete('{country}', [
        'as' => 'admin.countries.destroy',
        'uses' => 'CountriesController@destroy'
    ]);
});
