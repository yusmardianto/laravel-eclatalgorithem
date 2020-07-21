<?php

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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//pembelian
Route::get('pembelian', 'PembelianController@index');
Route::any('pembelian/ajax-list', 'PembelianController@ajaxList');
Route::post('pembelian/delete/{id}', 'PembelianController@destroy');
Route::post('pembelian/upload', 'PembelianController@uploadExcel');

//penjualan
Route::get('penjualan', 'PenjualanController@index');
Route::post('penjualan/upload', 'PenjualanController@uploadExcel');

//prediksi
