<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\DosenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|----------------------------------------------------------------------
| API Routes
|------------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', function(Request $request) {
        return auth()->user();
    });
    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/listmahasiswa/{nip_dosen}', [DosenController::class, 'listMahasiswaBimbingan']);
Route::get('/detailmahasiswa/{nim_mahasiswa}', [DosenController::class, 'detailMahasiswaPA']);

