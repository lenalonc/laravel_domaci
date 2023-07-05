<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmartphoneController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\SmartphoneTestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/smartphones', [SmartphoneTestController::class, 'index']);
// Route::get('/smartphones/{id}', [SmartphoneTestController::class, 'show']);

//Route::resource('smartphones',SmartphoneTestController::class);
Route::resource('smartphones',SmartphoneController::class);


//Route::get('/users',[UserController::class,'index']);
//Route::get('/users/{id}',[UserController::class,'show']);

// Route::get('/manufacturers',[ManufacturerController::class,'index']);
// Route::get('/manufacturers/{id}',[ManufacturerController::class,'show']);

Route::resource('manufacturers',ManufacturerController::class);
Route::resource('users',UserController::class);
