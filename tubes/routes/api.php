<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login',[APIController::class, 'login']);
Route::get('/transaksi_berlangsung',[APIController::class, 'getPesanan']);
Route::get('/riwayat',[APIController::class, 'getRiwayat']);
Route::get('/detail/{id}',[APIController::class, 'getDetail']);
Route::get('/resto',[APIController::class, 'getResto']);
Route::get('/menu/{id}',[APIController::class, 'getMenu']);
Route::get('/akun/{usr}',[APIController::class, 'getAkun']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
