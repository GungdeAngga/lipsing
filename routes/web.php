<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\Auth\LoginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//views public
Route::get('/', function () {
    return view('pages/home');
});

Route::resource('potensi', PotensiController::class);

Route::get('/jenis-investasi/{category}', [PotensiController::class, 'filter'])->name('jenis-investasi.filter');
route::get('/jenis-investasi-open/{id}', [PotensiController::class, 'show'])->name('jenis-investasi-open');
route::get('/umkm', [UmkmController::class, 'show'])->name('umkm.list');
route::get('/umkm-open/{umkm}', [UmkmController::class, 'showSingleUmkm'])->name('umkm-open');



Route::get('/jenis-investasi', function () {
    return view('pages/jenis-investasi');
});
Route::get('/jenis-investasi-open', function () {
    return view('pages/jenis-investasi-open');
});


Route::get('/peta-potensi', function () {
    return view('pages/peta-potensi');
});
Route::get('/desa-open', function () {
    return view('pages/desa-open');
});


// Route::get('/umkm', function () {
//     return view('pages/umkm');
// });
// Route::get('/umkm-open', function () {
//     return view('pages/umkm-open');
// });


Route::get('/about', [AboutUsController::class, 'show'])->name('about.show');



// Dashboard

Route::get('login', function () {
    return view('dashboard.auth.login');
})->name('login');

// Handle login
Route::post('login', [LoginController::class, 'login'])->name('login.post');

// Logout
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::resource('desa', DesaController::class);
    Route::resource('about', AboutUsController::class);
    Route::resource('kecamatan', KecamatanController::class);
    Route::resource('potensi', PotensiController::class);
    Route::resource('umkm', UmkmController::class);
});
