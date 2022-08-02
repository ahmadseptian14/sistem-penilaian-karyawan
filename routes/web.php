<?php

// use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
Route::middleware(['auth'])->group(function() {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    // Karyawan
    Route::get('/karyawan', 'KaryawanController@index')->name('karyawan.index');
    Route::get('/karyawan-create', 'KaryawanController@create')->name('karyawan.create');
    Route::post('/karyawan-store', 'KaryawanController@store')->name('karyawan.store');
    Route::get('/karyawan-edit/{id}', 'KaryawanController@edit')->name('karyawan.edit');
    Route::put('/karyawan-update/{id}', 'KaryawanController@update')->name('karyawan.update');
    Route::delete('/karyawan-destroy/{id}', 'KaryawanController@destroy')->name('karyawan.destroy');


    // Kriteria
    Route::get('/kriteria', 'KriteriaController@index')->name('kriteria.index');
    Route::get('/kriteria-create', 'KriteriaController@create')->name('kriteria.create');
    Route::post('/kriteria-store', 'KriteriaController@store')->name('kriteria.store');
    Route::get('/kriteria-edit/{id}', 'KriteriaController@edit')->name('kriteria.edit');
    Route::put('/kriteria-update/{id}', 'KriteriaController@update')->name('kriteria.update');
    Route::delete('/kriteria-destroy/{id}', 'KriteriaController@destroy')->name('kriteria.destroy');
    

    // Penilaian
    Route::get('/penilaian', 'PenilaianController@index')->name('penilaian.index');
    Route::get('/penialaian-create', 'PenilaianController@create')->name('penilaian.create');
    Route::get('/penilaian/{karyawans_id}', 'PenilaianController@show')->name('penilaian.show');
    Route::POST('/penilaian', 'PenilaianController@store')->name('penilaian.store');
    Route::get('/penilaian/edit/{id}', 'PenilaianController@edit')->name('penilaian.edit');
    Route::put('/penilaian/update/{id}', 'PenilaianController@update')->name('penilaian.update');
    Route::delete('penilaian/delete{id}', 'PenilaianController@destroy')->name('penilaian.destroy');


    // Laporan
     Route::get('/laporan', 'LaporanController@index')->name('laporan.index');
     Route::get('/laporan/cetak_pdf', 'LaporanController@cetak_pdf')->name('laporan.cetak');
     Route::get('/create', 'LaporanController@create')->name('laporan.create');
     Route::get('/laporan/{karyawans_id}', 'LaporanController@show')->name('laporan.show');
     Route::POST('/laporan', 'LaporanController@store')->name('laporan.store');
     Route::get('/laporan/edit/{id}', 'LaporanController@edit')->name('laporan.edit');
     Route::put('/laporan/update/{id}', 'LaporanController@update')->name('laporan.update');
     Route::delete('laporan/delete{id}', 'LaporanController@destroy')->name('laporan.destroy');
     Route::get('/laporan/cetak_pdf', 'LaporanController@cetak_pdf')->name('laporan.cetak');

});

Auth::routes();


