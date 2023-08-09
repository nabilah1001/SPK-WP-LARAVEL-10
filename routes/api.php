<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HasilController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Android used
Route::get('/hasil', [HasilController::class, 'all']);
Route::get('/pelatih/{id}', [AlternatifController::class, 'getDataById']);
