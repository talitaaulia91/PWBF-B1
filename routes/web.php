<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signup;
use App\Http\Controllers\signin;
use App\Http\Controllers\about;
use App\Http\Controllers\home;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\KemajuanController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\BabController;
use App\Http\Controllers\PeranController;

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

//hone
Route::get('/', [home::class, 'home']);
Route::get('/about', [about::class, 'about']);

//signup
Route::get('/signup', [signup::class, 'signup']);
Route::post('/signup', [signup::class, 'store']);

//signin
Route::post('/signin', [signin::class, 'authenticate']);
Route::get('/signin', [signin::class, 'signin']);

//dashboard
Route::get('/dashboard', [dashboard::class, 'dashboard']);

//kemajuan
Route::get('/kemajuan', [KemajuanController::class, 'kemajuan']);

//bab
Route::get('/bab', [BabController::class, 'bab']);

//santri
Route::get('/santri', [SantriController::class, 'santri']);
Route::delete('/delete-santri-{id}', [SantriController::class, 'destroy']);

//pengurus
Route::get('/pengurus', [PengurusController::class, 'pengurus']);
Route::post('/createPengurus', [PengurusController::class, 'store']);
Route::get('/createPengurus', [PengurusController::class, 'createPengurus']);
Route::delete('/delete-pengurus-{id}', [PengurusController::class, 'destroy']);
Route::get('/form-edit-pengurus-{id}', [PengurusController::class, 'edit']);
Route::put('/update-pengurus-{id}', [PengurusController::class, 'update']);

//peran
Route::get('/peran', [PeranController::class, 'peran']);
Route::post('/createPeran', [PeranController::class, 'store']);
Route::get('/createPeran', [PeranController::class, 'createPeran']);
Route::delete('/delete-peran-{id}', [PeranController::class, 'destroy']);
Route::get('/form-edit-peran-{id}', [PeranController::class, 'edit']);
Route::put('/update-peran-{id}', [PeranController::class, 'update']);

//buku
Route::get('/buku', [BukuController::class, 'buku']);
Route::get('/showbab', [BabController::class, 'bab']);
Route::post('/createBuku', [BukuController::class, 'store']);
Route::get('/createBuku', [BukuController::class, 'createBuku']);
Route::delete('/delete-buku-{id}', [BukuController::class, 'destroy']);
Route::get('/form-edit-buku-{id}', [BukuController::class, 'edit']);
Route::put('/update-buku-{id}', [BukuController::class, 'update']);