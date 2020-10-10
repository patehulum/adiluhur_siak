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
Route::get('/guru/{id_guru}', 'GuruController@show');
Route::get('/guru/{id_guru}/edit', 'GuruController@edit');
Route::delete('/guru/{id_guru}', 'GuruController@destroy');
Route::patch('/guru/{id_guru}', 'GuruController@update');

// Route Mapel;
Route::get('/mapel', 'MapelController@index');
Route::get('/mapel/create', 'MapelController@create');
Route::post('/mapel/store', 'MapelController@store');
Route::get('/mapel/{kd_mapel}', 'MapelController@show');
Route::get('/mapel/{kd_mapel}/edit', 'MapelController@edit');
Route::delete('/mapel/{kd_mapel}', 'MapelController@destroy');
Route::patch('/mapel/{kd_mapel}', 'MapelController@update');

// Route Ruangan;
Route::get('/ruangan', 'RuanganController@index');
Route::get('/ruangan/create', 'RuanganController@create');
Route::post('/ruangan/store', 'RuanganController@store');
Route::get('/ruangan/{kd_ruangan}', 'RuanganController@show');
Route::get('/ruangan/{kd_ruangan}/edit', 'RuanganController@edit');
Route::delete('/ruangan/{kd_ruangan}', 'RuanganController@destroy');
Route::patch('/ruangan/{kd_ruangan}', 'RuanganController@update');

// Route Tingkat Kelas;
Route::get('/tingkatan', 'TingkatanController@index');
Route::get('/tingkatan/create', 'TingkatanController@create');
Route::post('/tingkatan/store', 'TingkatanController@store');
Route::get('/tingkatan/{kd_tingkatan}', 'TingkatanController@show');
Route::get('/tingkatan/{kd_tingkatan}/edit', 'TingkatanController@edit');
Route::delete('/tingkatan/{kd_tingkatan}', 'TingkatanController@destroy');
Route::patch('/tingkatan/{kd_tingkatan}', 'TingkatanController@update');

// Route Jurusan;
Route::get('jurusan', 'JurusanController@index');
Route::get('jurusan/create', 'JurusanController@create');
Route::post('jurusan/store', 'JurusanController@store');
Route::get('jurusan/{kd_jurusan}', 'JurusanController@show');
Route::get('jurusan/{kd_jurusan}/edit', 'JurusanController@edit');
Route::delete('jurusan/{kd_jurusan}', 'JurusanController@destroy');
Route::patch('jurusan/{kd_jurusan}', 'JurusanController@update');
