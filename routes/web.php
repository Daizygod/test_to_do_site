<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;
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

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todomain', [App\Http\Controllers\TodolistController::class, 'index'])->name('home');
Route::post('/todomain', [App\Http\Controllers\TodolistController::class, 'store'])->name('store');
Route::delete('/todomain{todolist:id}', [App\Http\Controllers\TodolistController::class, 'destroy'])->name('destroy');

