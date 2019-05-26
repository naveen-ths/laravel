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
    return view('welcome');
});

Auth::routes();

Route::get('/', 'PostController@index')->name('home');
Route::get('/profile', 'Auth\ProfileController@index')->name('profile');

Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController');
Route::resource('tags', 'TagController');
Route::resource('settings', 'SettingController');
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');
Route::resource('pages', 'PageController');

/**
 * Front Pages Routes
 */
Route::get('/{slug}', 'PageController@showFront');
