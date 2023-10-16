<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ParametrosController;
use App\Http\Controllers\EmailController;

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

// ruta publica de la UCC
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('home', [App\Http\Controllers\BlogController::class, 'admin'])->name('admin');
Route::post('/contact', [App\Http\Controllers\EmailController::class, 'contact'])->name('contact');
Route::resource('blog', BlogController::class);
Route::resource('parametros', ParametrosController::class);
Auth::routes();
// 