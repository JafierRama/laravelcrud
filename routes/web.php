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
    return view('index');
});

Route::resource('pegawai', 'PegawaiController');

// Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');
// Route::post('/pegawai/store', 'PegawaiController@store');


Route::resource('atasan1', 'AtasanController');

Route::get('/atasan2', 'Atasan2Controller@index')->name('atasan2');

Route::get('/datadiri', 'DiriController@index')->name('datadiri');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
