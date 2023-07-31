<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrainsController as TrainsController;
use App\Http\Controllers\StazionesController as StazionesController;

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

Route::get('/', [TrainsController::class, 'index'])->name('home');

Route::get('/stazione', [StazionesController::class, 'index'])->name('stazioni');