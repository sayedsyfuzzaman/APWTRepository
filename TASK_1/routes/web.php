<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;
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


Route::get('/',[PagesController::class, 'home'])->name('home');
Route::get('/services',[ServicesController::class, 'services'])->name('services');
Route::get('/teams',[PagesController::class, 'teams'])->name('teams');
Route::get('/contact',[PagesController::class, 'contact'])->name('contact');
Route::get('/about',[PagesController::class, 'about'])->name('about');
