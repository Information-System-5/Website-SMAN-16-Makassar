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

// Admin
Route::get('/listpeserta', function () {
    return view('dashboardAdmin.listpendaftar');
});

Route::get('/detailpendaftar', function () {
    return view('dashboardAdmin.detailpendaftar');
});
Route::get('/pengurus', function () {
    return view('dashboardAdmin.pengurus');
});

Route::get('/artikel', function () {
    return view('dashboardAdmin.artikel');
});

Route::get('/prestasi', function () {
    return view('dashboardAdmin.prestasi');
});

// Main Website
Route::get('/formpendaftaran', function () {
    return view('mainWebsite.formpendaftaran');
});
