<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\freshController;
use App\Http\Controllers\checkcontroller;
// use App\Http\Controllers\Annacontroller;
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

Route::get('/',function() {
    return view('welcome');
});


Route::get('/about',function() {
    return view('about');
});

Route::view('/login','login');

Route::put('/users',[UserController::class,'data']);
Route::get('/index',[UserController::class,'index']);

Route::group(['middleware'=>['protect']] ,function() {
    Route::view('/hello','hello');
});
Route::get('/fresh',[freshController::class,'show']);

Route::get('/check',[checkcontroller::class,'display']);
