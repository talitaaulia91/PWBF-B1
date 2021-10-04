<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\signup;
use App\Http\Controllers\signin;



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
    



Route::get('/', [SantriController::class, 'index']);

Route::get('/signup', [signup::class, 'signup']);

Route::get('/signin', [signin::class, 'signin']);





