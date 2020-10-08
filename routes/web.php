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

// Route::get('/', function () {
//     return view('/home');
// });

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

// Route Siswa
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/create', 'SiswaController@create');
Route::post('/siswa/store', 'SiswaController@store');
Route::get('/siswa/{nis}', 'SiswaController@show');
Route::get('/siswa/{nis}/edit', 'SiswaController@edit');
Route::delete('/siswa/{nis}', 'SiswaController@destroy');
Route::patch('/siswa/{nis}', 'SiswaController@update');

// Route Guru;
Route::get('/guru', 'GuruController@index');
Route::get('/guru/create', 'GuruController@create');
Route::post('/guru/store', 'GuruController@store');
Route::get('/guru/{nis}', 'GuruController@show');
Route::get('/guru/{nis}/edit', 'GuruController@edit');
Route::delete('/guru/{nis}', 'GuruController@destroy');
Route::patch('/guru/{nis}', 'GuruController@update');

//
Route::get('/menu/create', 'MenuController@create');
Route::post('/menu/store', 'MenuController@store');
