<?php

use Illuminate\Support\Facades\Route;

Route::get('menus', ['as' => 'admin.menus.index', 'uses' => 'MenusController@index']);
Route::get('menus/create', ['as' => 'admin.menus.create', 'uses' => 'MenusController@create']);
Route::get('menus/{page}/edit', ['as' => 'admin.menus.edit', 'uses' => 'MenusController@edit']);
Route::post('menus', ['as' => 'admin.menus.store', 'uses' => 'MenusController@store']);
Route::put('menus/{page}', ['as' => 'admin.menus.update', 'uses' => 'MenusController@update']);
Route::get('menus/datatable', ['as' => 'admin.menus.datatable', 'uses' => 'MenusController@dataTable']);
Route::delete('menus/{menu}', ['as' => 'admin.menus.destroy', 'uses' => 'MenusController@destroy']);

Route::get('menus/{menu}/menu-links', ['as' => 'admin.menus.menu_links.index', 'uses' => 'MenuLinksController@index']);
Route::get('menus/{menu}/menu-links/create', ['as' => 'admin.menus.menu_links.create', 'uses' => 'MenuLinksController@create']);
Route::get('menus/{menu}/menu-links/{menu_link}/edit', ['as' => 'admin.menus.menu_links.edit', 'uses' => 'MenuLinksController@edit']);
Route::post('menus/{menu}/menu-links', ['as' => 'admin.menus.menu_links.store', 'uses' => 'MenuLinksController@store']);
Route::put('menus/{menu}/menu-links/{menu_link}', ['as' => 'admin.menus.menu_links.update', 'uses' => 'MenuLinksController@update']);

Route::get('ajax/menus/{menu}/menu-links', ['as' => 'ajax.menus.menu_links.index', 'uses' => 'MenuLinksAjaxController@index']);
Route::post('ajax/menus/{menu}/menu-links', ['as' => 'ajax.menus.menu_links.sort', 'uses' => 'MenuLinksAjaxController@sort']);
Route::delete('ajax/menu-links/{menu_link}', ['as' => 'ajax.menu_links.destroy', 'uses' => 'MenuLinksAjaxController@destroy']);

