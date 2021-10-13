<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signup;
use App\Http\Controllers\signin;
use App\Http\Controllers\about;
use App\Http\Controllers\home;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PengurusController;



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







// Route::get('/', [postController::class, 'index']);
    



Route::get('/home', [home::class, 'home']);

Route::get('/signup', [signup::class, 'signup']);

Route::get('/signin', [signin::class, 'signin']);

Route::get('/about', [about::class, 'about']);

Route::get('/dashboard', [dashboard::class, 'dashboard']);

Route::get('/santri', [SantriController::class, 'santri']);

Route::get('/pengurus', [PengurusController::class, 'pengurus']);









