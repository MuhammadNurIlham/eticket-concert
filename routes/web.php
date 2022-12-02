<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\checkinController;
use App\Http\Controllers\OrderController;
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

Route::resource('/', OrderController::class);

// midleware
Route::group(['middleware'=> ['auth:sanctum', 'verified']], function (){


    Route::resource('admin', adminController::class);

  

    Route::resource('checkin', checkinController::class);

});
