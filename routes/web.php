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
Route::redirect('/home', '/');

Route::get('/', function () {
    return view('auth.login');
});


Route::group(['middleware' => 'auth'], function() {
    Route::redirect('/home', '/dashboard');
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});

Route::get('/pengguna', 'PenggunaController@index')->name('pengguna');
Route::get('/hakakses', 'HakAksesController@index')->name('hakakses');


Auth::routes();
