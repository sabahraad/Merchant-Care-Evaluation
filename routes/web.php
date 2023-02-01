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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/form_data', [App\Http\Controllers\HomeController::class, 'form_data'])->name('form_data');
Route::get('/form', [App\Http\Controllers\HomeController::class, 'form'])->name('form');
Route::post('/from_data', [App\Http\Controllers\HomeController::class, 'data'])->name('data');


