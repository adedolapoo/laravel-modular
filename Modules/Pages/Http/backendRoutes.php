<?php

use Illuminate\Support\Facades\Route;

Route::get('pages', ['as' => 'admin.pages.index', 'uses' => 'PagesController@index']);
Route::get('pages/data/table', ['as' => 'admin.pages.datatable', 'uses' => 'PagesController@dataTable']);
Route::get('pages/create', ['as' => 'admin.pages.create', 'uses' => 'PagesController@create']);
Route::get('pages/{page}/edit', ['as' => 'admin.pages.edit', 'uses' => 'PagesController@edit']);
Route::post('pages', ['as' => 'admin.pages.store', 'uses' => 'PagesController@store']);
Route::put('pages/{page}', ['as' => 'admin.pages.update', 'uses' => 'PagesController@update']);
Route::post('pages/sort', ['as' => 'admin.pages.sort', 'uses' => 'PagesController@sort']);
Route::post('contact-us', ['as' => 'contact.post', 'uses' => 'PagesPublicController@contactForm']);
Route::post('contact-us/appointment-form', ['as' => 'appointment.post', 'uses' => 'PagesPublicController@appointmentForm']);


/*
 * Ajax routes
 */
Route::get('ajax/pages', ['as' => 'ajax.pages.index', 'uses' => 'PagesAjaxController@index']);
Route::put('ajax/pages/{page}', ['as' => 'ajax.pages.update', 'uses' => 'PagesAjaxController@update']);
Route::delete('ajax/pages/{page}', ['as' => 'ajax.pages.destroy', 'uses' => 'PagesAjaxController@destroy']);

/*
 * Public routes
 */

//Route::get('/','PagesPublicController@homepage');
//Route::get('{uri}', 'PagesPublicController@uri')->where('uri', '(.*)')->middleware('bindings');
