<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\RegisterController;
use App\Models\Admin;
use App\Models\Surat;
use Illuminate\Support\Facades\Artisan;
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
})->middleware(['guest', 'guest:doctor']);

Route::get('/loginPasien', [PasienController::class, 'login'])->name('login')->middleware(['guest', 'guest:doctor']);
Route::post('/loginPasien', [PasienController::class, 'authenticate']);

Route::get('/Regis', [RegisterController::class, 'index'])->middleware(['guest', 'guest:doctor']);
Route::post('/Regis', [RegisterController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [PasienController::class, 'logout']);
    Route::get('/HomePasien', [PasienController::class, 'index'])->middleware('auth');
    Route::get('/find-doctor', [PasienController::class, 'find'])->middleware('auth');
    Route::post('/find-doctor', [PasienController::class, 'find_doctor'])->middleware('auth');
});

Route::get('/loginDokter', [DokterController::class, 'login'])->name('login_dokter')->middleware(['guest', 'guest:doctor']);
Route::post('/loginDokter', [DokterController::class, 'authenticate']);

Route::middleware(['auth:doctor'])->group(function () {
    Route::get('/HomeDokter/logout', [DokterController::class, 'logout']);
    Route::get('/HomeDokter', [DokterController::class, 'index'])->middleware('auth:doctor');
    Route::post('/HomeDokter/profile', [DokterController::class, 'store'])->middleware('auth:doctor');

});

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";
});

