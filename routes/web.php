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

Route::get('/', function () { return view('welcome'); });

Auth::routes();
Route::group(['guard' => 'admin'], function() {
    Route::get('admin/dashboard','DashboardController@index');
    Route::get('admin/profile', 'Auth\ProfileController@index')->name('profile');
    Route::resource('admin/posts', 'PostController');
    Route::resource('admin/categories', 'CategoryController');
    Route::resource('admin/tags', 'TagController');
    Route::resource('admin/settings', 'SettingController');
    Route::resource('admin/users', 'UserController');
    Route::resource('admin/roles', 'RoleController');
    Route::resource('admin/permissions', 'PermissionController');
});

Route::resource('pages', 'PageController');
/**
 * Front Pages Routes
 */
Route::get('/{slug}', 'PageController@showFront');
