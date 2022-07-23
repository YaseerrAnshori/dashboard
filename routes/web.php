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
    return view('contents.index');
})->name('index');

Route::get('/pasien', function () {
    return view('contents.patient');
})->name('patient');

Route::get('/pasiendetail', function () {
    return view('contents.patient-details');
})->name('patientdetail');
Route::get('/tagihan', function () {
    return view('contents.tagihan');
})->name('tagihan');
Route::get('/doctor', function () {
    return view('contents.doctor');
})->name('doctor');
Route::get('/doctordetail', function () {
    return view('contents.doctor-details');
})->name('doctordetail');
Route::get('/review', function () {
    return view('contents.review');
})->name('review');



Route::get('/listproduct', function () {
    return view('contents.ecom-product-list');
})->name('ecom-product-list');
Route::get('/persediaan', function () {
    return view('contents.persediaanP');
})->name('persediaan');
Route::get('/customer', function () {
    return view('contents.customers');
})->name('customers');
Route::get('/pembelian', function () {
    return view('contents.pembelian');
})->name('pembelian');
Route::get('/laporanproduct', function () {
    return view('contents.laporan-products');
})->name('laporanproduct');
