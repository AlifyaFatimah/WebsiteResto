<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\c_menu;
use App\Http\Controllers\Registrasi3Controller;
use App\Http\Controllers\transaksi_controller;
use App\Http\Controllers\dashboard_controller;
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
Route::get('/signup',[RegistrasiController::class, 'create']);
Route::post('/signup',[RegistrasiController::class, 'store']);
Route::post('/signIn',[RegistrasiController::class, 'signin']);
Route::get('/', [RegistrasiController::class, 'create']);
Route::get('/signin', function () {
    return view('SignIn');
});
Route::get('/out', [RegistrasiController::class, 'signout']);
Route::get('/profilbaru',[RegistrasiController::class, 'tampilprofil']);
Route::put('/updateprofil',[RegistrasiController::class, 'updateprofilebaru']);
Route::get('auth/google', [RegistrasiController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [RegistrasiController::class, 'handleGoogleCallback']);
Route::get('auth/facebook', [RegistrasiController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [RegistrasiController::class, 'handleFacebookCallback']);

Route::get('/regis',[RegistrasiController::class, 'regiss']);
Route::post('/regis',[RegistrasiController::class, 'saveregis1']);

Route::get('forget-password', [RegistrasiController::class, 'showForgetPasswordForm']);
Route::post('forget-password', [RegistrasiController::class, 'submitForgetPasswordForm']); 
Route::get('/regis-Menu', [c_menu::class, 'Registrasi2']);
Route::post('/simpanMenu', [c_menu::class, 'simpan']);
//Route::get('/fetch-Menu', [c_menu::class, 'fetchMenu']);
Route::get('/showMenu', [c_menu::class, 'showMenu']);
Route::get('/halamanHapus', [c_menu::class, 'halamanHapus']);
Route::get('/menu/{id}/edit', [c_menu::class, 'halamanEdit']);
Route::put('/menu/{id}', [c_menu::class, 'editMenu']);
Route::post('/hapus', [c_menu::class, 'hapus']);

Route::get('/regis-profil', function () {
    return view('Registrasi1');
});
Route::get('/ds', function () {
    return view('DasboardMeja');
});
Route::get('/dasboar1', function () {
    return view('Dasboard');
});
// Route::get('/dasboar3', function () {
//     return view('DasboardMeja');
// });

Route::get('/d/', [c_menu::class, 'dsMenu']);
Route::post('/addMenu', [c_menu::class, 'tambahMenu']);
Route::get('/halamanDel', [c_menu::class, 'hlmDelete']);
Route::post('/delMenu', [c_menu::class, 'hapusMenu']);
Route::get('/menu/{id}/update', [c_menu::class, 'formUpdate']);
Route::put('/update/{id}', [c_menu::class, 'updateMenu']);

Route::get('/regis3', [Registrasi3Controller::class, 'show']);
Route::get('/simpan', [Registrasi3Controller::class, 'simpan'])->name('simpan');
Route::post('/simpan', [Registrasi3Controller::class, 'simpan'])->name('simpan');
Route::get('/tampil', [Registrasi3Controller::class, 'tampil'])->name('tampil');
Route::get('/hapus/{id}', [Registrasi3Controller::class, 'hapus'])->name('hapus');
Route::get('/dasboar3', [Registrasi3Controller::class, 'show_meja'])->name('show_meja');
Route::post('/simpanMeja', [Registrasi3Controller::class, 'simpan_db'])->name('simpan_db');
Route::get('/hapusMeja/{id}', [Registrasi3Controller::class, 'hapusMeja'])->name('hapusMeja');

Route::controller(transaksi_controller::class)->group(function(){
    Route::get('/Transaksi-masuk', 'show_masuk')->name('show_masuk');
    Route::get('/Transaksi-berlangsung', 'show_current')->name('show_current');
    Route::get('/Transaksi-riwayat', 'show_riwayat')->name('show_riwayat');
    Route::get('/Konfirmasi-masuk/{id}', 'konfirmasi_masuk')->name('konfirmasi-masuk');
    Route::get('/Batal-masuk/{id}', 'batal_masuk')->name('batal-masuk');
    Route::get('/Selesai/{id}', 'selesai')->name('selesai');
    Route::get('/dasboar1', 'show_dashboard')->name('show_dashboard');
    Route::get('/Konfirmasi-masuk-dash/{id}', 'konfirmasi_masuk_dash')->name('konfirmasi-masuk-dash');
    Route::get('/Batal-masuk-dash/{id}', 'batal_masuk_dash')->name('batal-masuk-dash');
});

Route::controller(dashboard_controller::class)->group(function(){
    Route::get('/dasboar1', 'show_dashboard')->name('show_dashboard');
    Route::get('/Konfirmasi-masuk-dash/{id}', 'konfirmasi_masuk_dash')->name('konfirmasi-masuk-dash');
    Route::get('/Batal-masuk-dash/{id}', 'batal_masuk_dash')->name('batal-masuk-dash');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


