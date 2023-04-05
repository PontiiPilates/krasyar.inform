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
Route::match(['GET','POST'], '/', [\App\Http\Controllers\InformController::class, 'inform'])->name('inform');