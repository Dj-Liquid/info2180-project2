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
    return view('login');
})->name('login');

Route::post('/', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('login.custom');

Route::get('/adduser', [\App\Http\Controllers\IndexController::class, 'adduser'])->middleware('auth')->name('adduser');
Route::post('/adduser', [\App\Http\Controllers\IndexController::class, 'storeuser'])->name('storeuser');

Route::get('/users', [\App\Http\Controllers\IndexController::class, 'users'])->middleware('auth')->name('users');

Route::get('/contact', [\App\Http\Controllers\IndexController::class, 'contact'])->middleware('auth')->name('contact');
Route::post('/contact', [\App\Http\Controllers\IndexController::class, 'storecontact'])->name('storecontact');
Route::get('/contact/{id}', [\App\Http\Controllers\IndexController::class, 'contactview'])->middleware('auth')->name('contactview');

Route::post('/contact', [\App\Http\Controllers\IndexController::class, 'addnote'])->name('addnote');

Route::get('/home', [\App\Http\Controllers\IndexController::class, 'home'])->middleware('auth')->name('home');
