<?php

use Illuminate\Support\Facades\Route;

Route::bind('referral', function ($id) {
    return app(Modules\Referrals\Repositories\ReferralInterface::class)->byId($id);
});

Route::group(['prefix' => 'referrals'], function () {
    Route::get('/', [
        'as' => 'admin.referrals.index',
        'uses' => 'ReferralsController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.referrals.create',
        'uses' => 'ReferralsController@create'
    ]);
    Route::get('{referral}/edit', [
        'as' => 'admin.referrals.edit',
        'uses' => 'ReferralsController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.referrals.store',
        'uses' => 'ReferralsController@store'
    ]);
    Route::put('{referral}', [
        'as' => 'admin.referrals.update',
        'uses' => 'ReferralsController@update'
    ]);
    Route::get('data/table', [
        'as' => 'admin.referrals.datatable',
        'uses' => 'ReferralsController@dataTable'
    ]);
    Route::delete('{referral}', [
        'as' => 'admin.referrals.destroy',
        'uses' => 'ReferralsController@destroy'
    ]);
});
