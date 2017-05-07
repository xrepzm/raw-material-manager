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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::name('admin.dashboard')
        ->get('/', 'AdminHomeController@index');

    Route::name('admin.login')
        ->get('/login', 'Auth\AdminLoginController@showLoginForm');
    Route::name('admin.login.submit')
        ->post('/login', 'Auth\AdminLoginController@login');

    Route::name('admin.logout')
        ->post('/logout', 'Auth\AdminLoginController@logout');
});
