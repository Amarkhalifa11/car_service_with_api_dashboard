<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // return view('welcome');
    return view('frontend.index');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        // return view('dashboard');
        return view('backend_pages.admin');
    })->name('dashboard');
});


// ________________________________________________________________________

use App\Http\Controllers\backendController;

Route::get('/logout', [backendController::class, 'logout'])->name('logout');
    
// ________________________________________________________________________

// ________________________________________________________________________

use App\Http\Controllers\UserController;

Route::get('/dashboard/all_admin', [UserController::class, 'all_admin'])->name('dashboard.all_admin');
Route::get('/dashboard/all_users', [UserController::class, 'all_users'])->name('dashboard.all_users');
Route::get('/dashboard/Maintenance', [UserController::class, 'Maintenance'])->name('dashboard.Maintenance');
Route::get('/dashboard/Laundry', [UserController::class, 'Laundry'])->name('dashboard.Laundry');
Route::get('/dashboard/user/delete/{id}', [UserController::class, 'delete'])->name('dashboard.user.delete');
    
// ________________________________________________________________________


// ________________________________________________________________________

use App\Http\Controllers\CarController;

Route::get('/dashboard/all_car_show', [CarController::class, 'all_car_show'])->name('dashboard.all_car_show');
Route::get('/dashboard/add_car', [CarController::class, 'add_car'])->name('dashboard.add_car');
Route::post('/dashboard/store_car', [CarController::class, 'store_car'])->name('dashboard.store_car');
Route::get('/dashboard/edit_car/{id}', [CarController::class, 'edit_car'])->name('dashboard.edit_car');
Route::post('/dashboard/update_car/{id}', [CarController::class, 'update_car'])->name('dashboard.update_car');
Route::get('/dashboard/car/destroy/{id}', [CarController::class, 'destroy'])->name('dashboard.car.destroy');
    
// ________________________________________________________________________

// ________________________________________________________________________

use App\Http\Controllers\ContactController;

Route::get('/dashboard/all_contact', [ContactController::class, 'all_contact'])->name('dashboard.all_contact');
Route::get('/dashboard/contact/destroy/{id}', [ContactController::class, 'destroy'])->name('dashboard.contact.destroy');
    
// ________________________________________________________________________


// ________________________________________________________________________

use App\Http\Controllers\ServiceController;

Route::get('/dashboard/all_service', [ServiceController::class, 'all_service'])->name('dashboard.all_service');
Route::get('/dashboard/all_service/destroy/{id}', [ServiceController::class, 'destroy'])->name('dashboard.all_service.destroy');
Route::get('/dashboard/all_service/edit_service/{id}', [ServiceController::class, 'edit_service'])->name('dashboard.all_service.edit_service');
Route::post('/dashboard/all_service/update_service/{id}', [ServiceController::class, 'update_service'])->name('dashboard.all_service.update_service');

// ________________________________________________________________________

// ________________________________________________________________________

use App\Http\Controllers\OrderController;

Route::get('/dashboard/all_order', [OrderController::class, 'all_order'])->name('dashboard.all_order');
Route::get('/dashboard/all_order/destroy/{id}', [OrderController::class, 'destroy'])->name('dashboard.all_order.destroy');
    
// ________________________________________________________________________