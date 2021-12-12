<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardPrestasiController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\DashboardPendaftarController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//Pendaftar
Route::get('/admin/listpendaftar', [DashboardPendaftarController::class, 'index']);
Route::get('/admin/detailpendaftar/{pendaftar}', [DashboardPendaftarController::class, 'show']);
Route::delete('/admin/listpendaftar/{pendaftar}', [DashboardPendaftarController::class, 'destroy']);

//Artikel
Route::resource('/admin/artikel', DashboardArtikelController::class);

//Prestasi
Route::resource('/admin/prestasi', DashboardPrestasiController::class);

Route::resource('/prestasi', PrestasiController::class);

Route::get('/admin/pengurus', function () {
    return view('pages.dashboardAdmin.pengurus.pengurus');
});

Route::get('/detailpendaftar', function () {
    return view('pages.dashboardAdmin.detailpendaftar');
});

// Main Website

Route::get('/home', function () {
    return view('pages.mainWebsite.index');
});

Route::get('/formpendaftaran', function () {
    return view('pages.mainWebsite.formpendaftaran');
});
Route::post('/formpendaftaran', [DashboardPendaftarController::class, 'store']);

Route::resource('/artikel', ArtikelController::class);
// Route::get('/artikel', function () {
//     return view('pages.mainWebsite.artikel');
// });

// Route::get('/artikel', [ArtikelController::class, 'index']);

Route::get('/pengurus', function () {
    return view('pages.mainWebsite.pengurus');
});

Route::get('/previewartikel', function () {
    return view('pages.mainWebsite.previewartikel');
});

Route::get('/visi-misi', function () {
    return view('pages.mainWebsite.visimisi');
});

// Route::get('/admin/artikel', [DetailController::class, 'index'])->name('artikel');

// Route::get('/admin/prestasi', [DetailController::class, 'index'])->name('prestasi');
// >>>>>>> Stashed changes
