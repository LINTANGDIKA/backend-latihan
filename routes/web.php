<?php

use App\Http\Controllers\AnakController;
use App\Http\Controllers\Api\AuthController;
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

Route::get('/anak', [AnakController::class, 'index']);
Route::get('/anak/{anak:inisialNama}', [AnakController::class, 'show']);
Route::post('/anak', [AnakController::class, 'store']);
Route::post('/anak/edit/{anak:inisialNama}', [AnakController::class, 'update']);
Route::post('/anak/delete/{id}', [AnakController::class, 'destroy']);
