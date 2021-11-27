<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardPrestasiController;
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
Route::get('/admin/listpeserta', function () {
    return view('pages.dashboardAdmin.listpendaftar');
});

Route::resource('/admin/artikel', DashboardArtikelController::class);

Route::resource('/admin/prestasi', DashboardPrestasiController::class);

// Route::get('/admin/prestasi', function () {
//     return view('pages.dashboardAdmin.prestasi');
// });

Route::get('/admin/pengurus', function () {
    return view('pages.dashboardAdmin.pengurus');
});

Route::get('/detailpendaftar', function () {
    return view('pages.dashboardAdmin.detailpendaftar');
});

// Route::get('/prestasi/detail', function () {
//     return view('pages.dashboardAdmin.detailprestasi');
// });

// Main Website

Route::get('/home', function () {
    return view('pages.mainWebsite.index');
});

Route::get('/formpendaftaran', function () {
    return view('pages.mainWebsite.formpendaftaran');
});

Route::get('/artikel', function () {
    return view('pages.mainWebsite.artikel');
});

Route::get('/pengurus', function () {
    return view('pages.mainWebsite.pengurus');
});

Route::get('/prestasi', function () {
    return view('pages.mainWebsite.prestasi');
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
