<?php

use App\Http\Controllers\HandphoneController;
use App\Http\Controllers\HeadsetController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\LaptopDuaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/laptop', [LaptopController::class,'index']);
Route::get('/headset', [HeadsetController::class,'index']);
Route::get('/handphone', [HandphoneController::class,'index']);

Route::get('/laptop/{id}', [LaptopController::class, 'show']);
Route::get('/headset/{id}', [HeadsetController::class, 'show']);
Route::get('/handphone/{id}', [HandphoneController::class, 'show']);