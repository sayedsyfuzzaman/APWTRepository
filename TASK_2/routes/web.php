<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
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
Route::get('/',[PagesController::class, 'index'])->name('index');

Route::get('/registration',[EmployeeController::class, 'registration'])->name('registration');
Route::post('/registration',[EmployeeController::class, 'registrationSubmitted'])->name('registration');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login',[LoginController::class, 'loginSubmitted'])->name('login');

Route::get('/dashboard',[LoginController::class, 'dashboard'])->name('dashboard');

Route::get('/contact',[PagesController::class, 'contact'])->name('contact');
Route::post('/contact',[PagesController::class, 'contactSubmitted'])->name('contact');

