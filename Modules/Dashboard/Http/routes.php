<?php

Route::group(['namespace' => 'Modules\Dashboard\Http\Controllers','middleware'=>['web']], function()
{
	Route::get('admin/dashboard', array('as' => 'admin.dashboard', 'uses' => 'DashboardController@index'));
    Route::get('account/dashboard', array('as' => 'account.dashboard', 'uses' => 'DashboardAccountController@index'));
});
