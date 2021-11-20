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
    return view('pages.dashboardAdmin.listpendaftar');
});

Route::get('/artikel', function () {
    return view('pages.dashboardAdmin.artikel');
});

Route::get('/prestasi', function () {
    return view('pages.dashboardAdmin.prestasi');
});

Route::get('/pengurus', function () {
    return view('pages.dashboardAdmin.pengurus');
});

// Detail Admin
Route::get('/detailartikel', function () {
    return view('pages.dashboardAdmin.detailartikel');
});

Route::get('/detailpendaftar', function () {
    return view('pages.dashboardAdmin.detailpendaftar');
});

Route::get('/detailprestasi', function () {
    return view('pages.dashboardAdmin.detailprestasi');
});

// Main Website
Route::get('/formpendaftaran', function () {
    return view('pages.mainWebsite.formpendaftaran');
});

// Route::get('/admin/artikel', [DetailController::class, 'index'])->name('artikel');

// Route::get('/admin/prestasi', [DetailController::class, 'index'])->name('prestasi');
// >>>>>>> Stashed changes
