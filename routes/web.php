<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/articles', [BlogController::class, 'list'])->name('articles.list');
Route::get('/article/{id}', [BlogController::class, 'show'])->name('article.show');
Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
Route::post('/contact', [BlogController::class, 'submitContact'])->name('contact.submit');
Route::get('/contact/result', [BlogController::class, 'contactResult'])->name('contact.result');