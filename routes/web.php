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

Route::redirect('/', '/home');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/specialties', [\App\Http\Controllers\HomeController::class, 'specialties'])->name('specialties');
Route::get('/reservation', [\App\Http\Controllers\HomeController::class, 'reservation'])->name('reservation');
Route::get('/stories', [\App\Http\Controllers\HomeController::class, 'stories'])->name('stories');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::post('/handleform', [\App\Http\Controllers\FormController::class, 'handle'])->name('handleform');
Route::get('/success', [\App\Http\Controllers\FormController::class, 'success'])->name('success');