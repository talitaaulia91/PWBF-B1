<?php

use App\Http\Controllers\home;
use App\Http\Controllers\about;
use App\Http\Controllers\signin;
use App\Http\Controllers\signup;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BabController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\KemajuanController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\DetailKemajuanController;
use App\Http\Controllers\DetailPeranController;



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
    


//home
Route::get('/', [home::class, 'home']);
Route::get('/about', [about::class, 'about']);




//signup
Route::get('/signup', [signup::class, 'signup']);
Route::post('/signup', [signup::class, 'store']);



//signin
Route::post('/signin', [signin::class, 'authenticate']);
Route::get('/signin', [signin::class, 'signin']);
Route::get('/logout', [signin::class, 'logout']);




//dashboard
Route::get('/dashboard', [dashboard::class, 'dashboard'])->middleware('auth');


//santri
Route::get('/santri', [SantriController::class, 'santri'])->middleware('auth');
Route::get('/form-edit-santri-{id}', [SantriController::class, 'edit'])->middleware('auth');
Route::put('/update-santri-{id}', [SantriController::class, 'update'])->middleware('auth');
Route::delete('/delete-santri-{id}', [SantriController::class, 'destroy'])->middleware('auth');




//kemajuan
Route::get('/kemajuan', [SantriController::class, 'kemajuan'])->middleware('auth');
Route::get('/show-kemajuan{id}', [KemajuanController::class, 'kemajuan'])->middleware('auth');
Route::get('/show-detail-kemajuan{id}', [DetailKemajuanController::class, 'index'])->middleware('auth');
Route::get('/form-create-kemajuan{id}', [KemajuanController::class, 'createKemajuan'])->middleware('auth');
Route::post('/create-kemajuan', [KemajuanController::class, 'store'])->middleware('auth');





//bab
Route::get('/form-create-bab{id}', [BabController::class, 'createBab'])->middleware('auth');
Route::post('/create-bab', [BabController::class, 'store'])->middleware('auth');
Route::delete('/delete-bab-{id}', [BabController::class, 'destroy'])->middleware('auth');
Route::get('/form-edit-bab-{id}', [BabController::class, 'edit'])->middleware('auth');
Route::put('/update-bab-{id}', [BabController::class, 'update'])->middleware('auth');





//pengurus
Route::get('/pengurus', [PengurusController::class, 'pengurus'])->middleware('auth');
Route::post('/create-pengurus', [PengurusController::class, 'store'])->middleware('auth');
Route::get('/form-create-pengurus', [PengurusController::class, 'createPengurus'])->middleware('auth');
Route::delete('/delete-pengurus-{id}', [PengurusController::class, 'destroy'])->middleware('auth');
Route::get('/form-edit-pengurus-{id}', [PengurusController::class, 'edit'])->middleware('auth');
Route::put('/update-pengurus-{id}', [PengurusController::class, 'update'])->middleware('auth');





//peran
Route::get('/peran', [PeranController::class, 'peran'])->middleware('auth');
Route::post('/create-peran', [PeranController::class, 'store'])->middleware('auth');
Route::get('/form-create-peran', [PeranController::class, 'createPeran'])->middleware('auth');
Route::delete('/delete-peran-{id}', [PeranController::class, 'destroy'])->middleware('auth');
Route::get('/form-edit-peran-{id}', [PeranController::class, 'edit'])->middleware('auth');
Route::put('/update-peran-{id}', [PeranController::class, 'update'])->middleware('auth');
Route::get('/show-pengurus{id}', [DetailPeranController::class, 'index'])->middleware('auth');



//buku
Route::get('/buku', [BukuController::class, 'buku'])->middleware('auth');
Route::get('/showbab{id}', [BabController::class, 'index'])->middleware('auth');
Route::post('/create-buku', [BukuController::class, 'store'])->middleware('auth');
Route::get('/form-create-buku', [BukuController::class, 'createBuku'])->middleware('auth');
Route::delete('/delete-buku-{id}', [BukuController::class, 'destroy'])->middleware('auth');
Route::get('/form-edit-buku-{id}', [BukuController::class, 'edit'])->middleware('auth');
Route::put('/update-buku-{id}', [BukuController::class, 'update'])->middleware('auth');



Route::get('/profile', [Profile::class, 'profile'])->middleware('auth');