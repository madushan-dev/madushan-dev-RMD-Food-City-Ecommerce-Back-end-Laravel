<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\EmployeesController;
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
// Login Page Routes
Route::get('/',function(){
    return view('dashboard');
})->middleware(['auth']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Orders Routes
Route::controller(OrdersController::class)->group(function () {
    Route::get('/orders', 'index')->name('orders');
    Route::get('/orders/{order}', 'show');
    Route::post('/orders/{order}', 'update');
    Route::delete('/orders/{order}', 'destroy');
});

// Products Routes
Route::controller(ProductsController::class)->group(function () {
    Route::get('/products', 'index')->name('products');
    Route::delete('/products/{product}', 'destroy');
});

// Customers routes
Route::controller(CustomersController::class)->group(function () {
    Route::get('/customers', 'index')->name('customers');
    Route::get('/customers/new', 'new');
    Route::post('/customers/new', 'store');
    Route::get('/customers/{customer}', 'show');
    Route::post('/customers/{customer}', 'update');
    Route::delete('/customers/{customer}', 'destroy');
});

// employees routes
Route::controller(EmployeesController::class)->group(function () {
    Route::get('/employees', 'index')->name('employees');
    Route::get('/employees/new', 'new');
    Route::post('/employees/new', 'store');
    Route::get('/employees/{employee}', 'show');
    Route::post('/employees/{employee}', 'update');
    Route::delete('/employees/{employee}', 'destroy');
});