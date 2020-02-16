<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::prefix('roles')->group(function () {
//    Route::get('/', 'RoleController@index')->name('role.index');
//    Route::get('/search/{query}', 'RoleController@search')->name('role.search');
//    Route::post('/store', 'RoleController@store')->name('role.store');
//    Route::delete('/delete/{id}', 'RoleController@destroy')->name('role.delete');
//    Route::get('/{id}/edit', 'RoleController@edit')->name('role.edit');
//    Route::post('/update/{id}', 'RoleController@update')->name('role.update');
//    Route::get('/{id}/permissions', 'RoleController@showPermissionsByRole')->name('role.showPermissions');
//    Route::post('/{role}/setting/permissions/{permission}', 'RoleController@setPermissionsForRole')->name('role.setPermission');
//});
