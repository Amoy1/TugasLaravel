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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Windi Dwi Fajar",
        "kelas" => "XII RPL 1",
        "alamat" => "Desa Tambak Mekar",
        "gambar" => "windi.jpeg",
    ]);

});

Route::get('/tiga', function () {
    return view('tiga', [
        "title" => "Tiga"
    ]);
});

Route::get('/empat', function () {
    return view('empat', [
        "title" => "Empat"
    ]);
});

