<?php

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

Route::get('/', [\App\Http\Controllers\GeneralController::class, 'index'])->name('index');

Route::get('/krasyar', [\App\Http\Controllers\GeneralController::class, 'krasyar'])->name('krasyar');
Route::post('/krasyar', [\App\Http\Controllers\GeneralController::class, 'krasyarSend'])->name('krasyarSend');

Route::get('/discounter', [\App\Http\Controllers\GeneralController::class, 'discounter'])->name('discounter');
Route::post('/discounter', [\App\Http\Controllers\GeneralController::class, 'discounterSend'])->name('discounterSend');

Route::get('/office', [\App\Http\Controllers\GeneralController::class, 'office'])->name('office');
Route::post('/office', [\App\Http\Controllers\GeneralController::class, 'officeSend'])->name('officeSend');

Route::get('/improve', [\App\Http\Controllers\GeneralController::class, 'improve'])->name('improve');
Route::post('/improve', [\App\Http\Controllers\GeneralController::class, 'improveSend'])->name('improveSend');

// TODO: Маршрутизировать и валидировать данные
// TODO: Проверить валидацию для офиса и условий труда