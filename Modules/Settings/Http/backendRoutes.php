<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'settings'], function () {
    Route::get('/', [
        'as' => 'admin.settings.index',
        'uses' => 'SettingsController@index'
    ]);
    Route::post('/', [
        'as' => 'admin.settings.store',
        'uses' => 'SettingsController@store'
    ]);
});
