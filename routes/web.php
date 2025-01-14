<?php

use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StringController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/find-character', [StringController::class, 'findCharacter']);
Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/kendaraanMostFrequent', [KendaraanController::class, 'MostFrequent']);
