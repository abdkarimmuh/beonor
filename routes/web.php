<?php

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('backend.login');
})->name('login');

Route::get('/surat', function () {
    return view('backend.surat');
})->name('surat');

Route::get('/rapat', function () {
    return view('backend.rapat');
})->name('rapat');

Route::get('/organisasi', function () {
    return view('backend.organisasi');
})->name('organisasi');

Route::get('/anggota', function () {
    return view('backend.anggota');
})->name('anggota');

Route::get('/test', function () {
    return view('backend.layout.test');
});