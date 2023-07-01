<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgetPassController;
use App\Http\Controllers\Auth\ResetPassController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
 
Route::post('Register1', [RegisterController::class, 'Register1']);
Route::post('Register2', [RegisterController::class, 'Register2']);
Route::post('login', [LoginController::class, 'login']);

Route::post('password/forgetPassword', [ForgetPassController::class, 'forgetPassword']);
Route::post('password/reset', [ResetPassController::class, 'reset']);

Route::middleware('auth:sanctum')->group(function () {
    
    Route::post('logout', [LoginController::class, 'logout']);
    
    Route::get('/profile', function (Request $request) {
        return $request->user();
    });

    Route::put('update/data/{id}', [UserController::class, 'update']);
    Route::put('update_pass', [UserController::class, 'update_pass']);

    
});

Route::post('send_ask', [ContactController::class, 'send_ask']);

//get all garage
Route::get('all_garage', [UserController::class, 'all_garage']);


//add image
Route::put('add_image/{id}', [UserController::class, 'add_image']);
Route::put('profile_image/{id}', [UserController::class, 'profile_image']);


//get all washing
Route::get('all_washing', [UserController::class, 'all_washing']);

//get all car
Route::get('all_car', [CarController::class, 'all_car']);

//add new service
Route::post('add_service', [ServiceController::class, 'add_service']);

Route::get('all_data_user/{id}', [ServiceController::class, 'all_data_user']);
Route::get('all_data_service/{id}', [ServiceController::class, 'all_data_service']);


//add new order
Route::post('add_order', [OrderController::class, 'add_order']);

//get all orders about user
Route::get('all_order_user/{id}', [OrderController::class, 'all_order_user']);

//get all orders about vendor
Route::get('all_order_vendor/{id}', [OrderController::class, 'all_order_vendor']);

//update the status
Route::put('update_status/{id}', [OrderController::class, 'update_status']);
