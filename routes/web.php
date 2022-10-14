<?php

use Illuminate\Support\Facades\Route;
use App\Models\user;
use App\Models\Country;
use App\Http\Controllers\Auth\updateController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserallController;
use App\Http\Controllers\Auth\Countrycontroller;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('allusers',[UserallController::class,'alluser'])->middleware('auth');


Route::get('allusers/{user}',[UserallController::class,'find'])->middleware('auth');

Route::patch('allusers/{user}/update',[updateController::class,'update'])->middleware('auth');




