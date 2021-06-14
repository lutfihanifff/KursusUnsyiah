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
    return view('auth.login');
})->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Backend Route
Route::group(['middleware' => 'auth'], function () {


	Route::group(['prefix' => 'q','middleware' => 'role:admin,instruktur'], function () {

		Route::get('/dash', 'DashboardController@index')->name('dash.index');
		Route::get('/profil', 'DashboardController@profil')->name('dash.profil');

		Route::post('/user/{user}/update', 'UserController@update')->name('user.update');

	});

	Route::group(['prefix' => 'q','middleware' => 'role:admin'], function () {

		Route::resource('/program', 'ProgramController');
		Route::resource('/materi', 'MateriController');

		Route::get('/user', 'UserController@index')->name('user.index');
		Route::get('/user/create', 'UserController@create')->name('user.create');
		Route::post('/user/store', 'UserController@store')->name('user.store');
		Route::get('/user/{user}', 'UserController@show')->name('user.show');
		Route::get('/user/{user}/edit', 'UserController@edit')->name('user.edit');
		Route::delete('/user/{user}', 'UserController@destroy')->name('user.delete');

		Route::get('/instruktur/create', 'InstrukturController@create')->name('instruktur.create'); 
		Route::get('/instruktur/{instruktur}/edit', 'InstrukturController@edit')->name('instruktur.edit');
		Route::post('/instruktur/{instruktur}/update', 'InstrukturController@update')->name('instruktur.update'); 
		Route::post('/instruktur/store', 'InstrukturController@store')->name('instruktur.store'); 

		Route::get('/peserta', 'PesertaController@index')->name('peserta.index');
		Route::get('/peserta/create', 'PesertaController@create')->name('peserta.create');
		Route::post('/peserta/store', 'PesertaController@store')->name('peserta.store');
		Route::get('/peserta/{peserta}/edit', 'PesertaController@edit')->name('peserta.edit');
		Route::post('/peserta/{peserta}/update', 'PesertaController@update')->name('peserta.update');
		Route::delete('/peserta/{peserta}', 'PesertaController@destroy')->name('peserta.delete');
		Route::get('/peserta/{peserta}', 'PesertaController@show')->name('peserta.show');

		Route::get('/kursus', 'KursusController@index')->name('kursus.index');
		Route::get('/kursus/{peserta}/create', 'KursusController@create')->name('kursus.create');
		Route::post('/kursus/store', 'KursusController@store')->name('kursus.store');
		Route::get('/kursus/{kursus}/edit', 'KursusController@edit')->name('kursus.edit');
		Route::post('/kursus/{kursus}/update', 'KursusController@update')->name('kursus.update');
		Route::delete('/kursus/{kursus}', 'KursusController@destroy')->name('kursus.delete');

		Route::get('/absensi', 'AbsensiController@index')->name('absensi.index');
		Route::get('/absensi/{kursus}/create', 'AbsensiController@create')->name('absensi.create');
		Route::get('/absensi/{kursus}/show', 'AbsensiController@show')->name('absensi.show');
		Route::post('/absensi/store', 'AbsensiController@store')->name('absensi.store');
		Route::post('/absensi/{absensi}/update', 'AbsensiController@update')->name('absensi.update');
		Route::get('/absensi/{absensi}/edit', 'AbsensiController@edit')->name('absensi.edit');
		Route::delete('/absensi/{absensi}', 'AbsensiController@destroy')->name('absensi.delete');

		Route::get('/sertifikat', 'SertifikatController@index')->name('sertifikat.index');
		Route::get('/sertifikat/create', 'SertifikatController@create')->name('sertifikat.create');
		Route::get('/sertifikat/{sertifikat}/show', 'SertifikatController@show')->name('sertifikat.show');
		Route::post('/sertifikat/store', 'SertifikatController@store')->name('sertifikat.store');
		Route::delete('/sertifikat/{sertifikat}', 'SertifikatController@destroy')->name('sertifikat.delete');

		Route::get('/laporan/instruktur', 'LaporanController@instruktur')->name('laporan.instruktur');
		Route::post('/laporan/instruktur/export', 'LaporanController@exInstruktur')->name('laporan.exins');
		Route::get('/laporan/peserta', 'LaporanController@peserta')->name('laporan.peserta');
		Route::post('/laporan/peserta/export', 'LaporanController@exPeserta')->name('laporan.exper');


	});



	Route::group(['prefix' => 'q','middleware' => 'role:instruktur'], function () {

		Route::get('/nilai/teori', 'NilatController@index')->name('nilat.index');
		Route::get('/nilai/teori/{kursus}/create', 'NilatController@create')->name('nilat.create');
		Route::post('/nilai/teori/{kursus}/update', 'NilatController@update')->name('nilat.update');

		Route::get('/nilai/praktik', 'NilaiController@index')->name('nilai.index');
		Route::get('/nilai/praktik/{kursus}/create', 'NilaiController@create')->name('nilai.create');
		Route::post('/nilai/praktik/{nilai}/update', 'NilaiController@update')->name('nilai.update');
		
	});
		
	Route::group(['middleware' => 'role:peserta'], function () {

		Route::get('/home', 'HomeController@index')->name('home');
		Route::get('/datadiri', 'HomeController@profil')->name('profil');
		Route::get('/kursus', 'HomeController@kursus')->name('kursus');
		Route::get('/kursus/{sertifikat}', 'HomeController@sertifikat')->name('sertifikat');

	});

});


