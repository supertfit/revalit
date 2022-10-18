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

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('main.home');
Route::get('/production-process', [MainController::class, 'productionProcess'])->name('main.production-process');
Route::get('/news', [MainController::class, 'news'])->name('main.news');
Route::get('/about-us', [MainController::class, 'aboutUs'])->name('main.about-us');
Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');
