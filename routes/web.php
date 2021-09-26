<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;


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







Route::get('/', [postController::class, 'index']);
    




Route::get('/about', function () {
    return view('about',[
        "title" => "About"
    ]);
});




Route::get('/account', function () {
    return view('account',[
        "title" => "Account"
    ]);
});




Route::get('/signup', function () {
    return view('signup',[
        "title" => "signup"
    ]);
});



Route::get('home/{slug}', function($slug){
return view ('article',[
    "title" => "Single Article",
    "article" => post::find($slug)
]);
});




