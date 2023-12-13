<?php

use App\Http\Controllers\RektorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\RektorControllerController;



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

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/prodi', [ProdiController::class, 'index']);
Route::get('/akademik', [AkademikController::class, 'index']);
Route::get('/rektor', [RektorController::class, 'index']);
