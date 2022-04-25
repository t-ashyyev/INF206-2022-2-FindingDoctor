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
    return view('LayarAwal');
});


Route::get('/loginPasien', function () {
    return view('loginPasien');
});

Route::get('/loginDokter', function () {
    return view('loginDokter');
});

Route::get('/Regis', function () {
    return view('Regis');
});

Route::get('/HomePasien', function () {
    return view('HomePasien');
});

Route::get('/HomeDokter', function () {
    return view('HomeDokter');
});
