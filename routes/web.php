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

// Route::get('/', function () {
//     return view('velcome');
// });

// Страница отправки формы
Route::match(['GET','POST'], '/', [\App\Http\Controllers\InformController::class, 'inform'])->name('index');

Route::get('/', [\App\Http\Controllers\InformController::class, 'index'])->name('index');
Route::post('/', [\App\Http\Controllers\InformController::class, 'indexSend'])->name('indexSend');

Route::get('/krasyar', [\App\Http\Controllers\InformController::class, 'krasyar'])->name('krasyar');
Route::post('/krasyar', [\App\Http\Controllers\InformController::class, 'krasyarSend'])->name('krasyarSend');

Route::get('/baget', [\App\Http\Controllers\InformController::class, 'baget'])->name('baget');
Route::post('/baget', [\App\Http\Controllers\InformController::class, 'bagetSend'])->name('bagetSend');

Route::get('/office', [\App\Http\Controllers\InformController::class, 'office'])->name('office');
Route::post('/office', [\App\Http\Controllers\InformController::class, 'officeSend'])->name('officeSend');

Route::get('/improve', [\App\Http\Controllers\InformController::class, 'improve'])->name('improve');
Route::post('/improve', [\App\Http\Controllers\InformController::class, 'improveSend'])->name('improveSend');

// TODO: переписать имена всех методов главного контроллера для гет и пост.