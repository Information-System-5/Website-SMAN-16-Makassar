<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardPengurusController;
use App\Http\Controllers\DashboardPrestasiController;
use App\Http\Controllers\DashboardPendaftarController;
use App\Http\Controllers\PagesController;
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
Route::delete('/deleteAllPendaftar', [DashboardPendaftarController::class, 'deleteAll'])->name('pendaftar.deleteSelected');
Route::get('/pendaftar/cetak_pdf', [DashboardPendaftarController::class, 'cetak_pdf']);

//Artikel
Route::resource('/admin/artikel', DashboardArtikelController::class);

//Prestasi
Route::resource('/admin/prestasi', DashboardPrestasiController::class);

//Pengurus
Route::get('/admin/editPengurus/{pengurus}', [DashboardPengurusController::class, 'edit']);
Route::put('/admin/pengurus/{pengurus}', [DashboardPengurusController::class, 'update']);
Route::get('/admin/pengurus', [DashboardPengurusController::class, 'index'])->name('admin.pengurus.index');

// Main Website

Route::get('/home', function () {
    return view('pages.mainWebsite.index');
});

Route::post('/formpendaftaran', [DashboardPendaftarController::class, 'store']);

Route::get('/artikel', function () {
    return view('pages.mainWebsite.artikel');
});

//pengurus
Route::get('/pengurus', [PagesController::class, 'pengurusMainWebsite']);

Route::get('/prestasi', function () {
    return view('pages.mainWebsite.prestasi');
});

Route::get('/previewartikel', function () {
    return view('pages.mainWebsite.previewartikel');
});

Route::get('/visi-misi', function () {
    return view('pages.mainWebsite.visimisi');
});
