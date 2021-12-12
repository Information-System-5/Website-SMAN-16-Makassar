<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardPengurusController;
use App\Http\Controllers\DashboardPrestasiController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\DashboardPendaftarController;
use App\Http\Controllers\HomepageController;
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

Route::resource('/prestasi', PrestasiController::class);

//Pengurus
Route::get('/admin/editPengurus/{pengurus}', [DashboardPengurusController::class, 'edit']);
Route::put('/admin/pengurus/{pengurus}', [DashboardPengurusController::class, 'update']);
Route::get('/admin/pengurus', [DashboardPengurusController::class, 'index'])->name('admin.pengurus.index');

// Main Website
Route::resource('/', HomepageController::class);
// Route::get('/', function () {
//     return view('pages.mainWebsite.index');
// });

Route::get('/formpendaftaran', function () {
    return view('pages.mainWebsite.formpendaftaran');
});
Route::post('/formpendaftaran', [DashboardPendaftarController::class, 'store']);

Route::resource('/artikel', ArtikelController::class);

//pengurus
Route::get('/pengurus', [DashboardPengurusController::class, 'index']);

Route::get('/previewartikel', function () {
    return view('pages.mainWebsite.previewartikel');
});

Route::get('/visi-misi', function () {
    return view('pages.mainWebsite.visimisi');
});
Route::get('/loginAdmin', function () {
    return view('pages.dashboardAdmin.login');
});
