<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/umkm', function () {
    return view('pages/umkm');
});
Route::get('/umkm-open', function () {
    return view('pages/umkm-open');
});



Route::get('/about', function () {
    return view('pages/about');
});



// Dashboard
Route::get('/login', function () {
    return view('dashboard/login');
});


Route::get('/dashboard/about', function () {
    return view('dashboard/about/index');
});
Route::get('/dashboard/about/edit', function () {
    return view('dashboard/about/edit');
});


Route::get('/dashboard/kecamatan', function () {
    return view('dashboard/kecamatan/index');
});
Route::get('/dashboard/kecamatan/create', function () {
    return view('dashboard/kecamatan/create');
});
Route::get('/dashboard/kecamatan/edit', function () {
    return view('dashboard/kecamatan/edit');
});
Route::get('/dashboard/kecamatan/fasilitas/create', function () {
    return view('dashboard/kecamatan/fasilitas/create');
});
Route::get('/dashboard/kecamatan/fasilitas/edit', function () {
    return view('dashboard/kecamatan/fasilitas/edit');
});


Route::get('/dashboard/umkm', function () {
    return view('dashboard/umkm/index');
});
Route::get('/dashboard/umkm/create', function () {
    return view('dashboard/umkm/create');
});
Route::get('/dashboard/umkm/edit', function () {
    return view('dashboard/umkm/edit');
});


Route::get('/dashboard/potensi', function () {
    return view('dashboard/potensi/index');
});
Route::get('/dashboard/potensi/create', function () {
    return view('dashboard/potensi/create');
});
Route::get('/dashboard/potensi/edit', function () {
    return view('dashboard/potensi/edit');
});


Route::get('/dashboard/desa', function () {
    return view('dashboard/desa/index');
});
Route::get('/dashboard/desa/create', function () {
    return view('dashboard/desa/create');
});
Route::get('/dashboard/desa/edit', function () {
    return view('dashboard/desa/edit');
});
Route::get('/dashboard/desa/potensi/create', function () {
    return view('dashboard/desa/potensi/create');
});
Route::get('/dashboard/desa/potensi/edit', function () {
    return view('dashboard/desa/potensi/edit');
});