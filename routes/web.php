<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\OfficeEmployeeController;
use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\TransportController;
use Illuminate\Support\Facades\Route;



Route::get ('/', function () {
    return view('backend.master');
});


Route::get('/home', function()
{ 
   
    return view('backend.layouts.home');
});


Route::get('/contact', function()
{
    return view('backend.layouts.contact');
});

Route::get('/terms', function()
{
    return view('backend.layouts.terms');
});
Route::get('/', [HomeController::class, 'home']);

Route::get('/home', [HomeController::class, 'home']);

Route::get('/contact', [HomeController::class, 'contact']);

//category

Route::get('/all-categories', [CategoryController::class, 'list'])->name('category.list');

Route::get('/all-categories/create', [CategoryController::class, 'create'])->name('category.create');

Route::post('/all-categories/store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/all-categories/{id}/products',[CategoryController::class,'allProduct'])->name('category.product');

//products

Route::get('/all-products/create', [ProductController::class, 'create'])->name('product.create');

Route::get('/all-products', [ProductController::class, 'list'])->name('product.list');

Route::post('/all-produtcs/store', [ProductController::class, 'store'])->name('product.store');
//admins

Route::get('/admins/info', [AdminController::class, 'info'])->name('admin.info');
Route::get('/admins', [AdminController::class, 'add'])->name('admin.add');
Route::post('/admins/store', [AdminController::class, 'store'])->name('admin.store');
//office employee

Route::get('/all-office-employees/info', [OfficeEmployeeController::class, 'info'])->name('officeemployee.info');
Route::get('/all-office-employees', [OfficeEmployeeController::class, 'add'])->name('officeemployee.add');
Route::post('/all-office-employees/store', [OfficeEmployeeController::class, 'store'])->name('officeemployee.store');
//drivers

Route::get('/all-drivers/info', [DriverController::class, 'info'])->name('driver.info');
Route::get('/all-drivers', [DriverController::class, 'appoint'])->name('driver.appoint');
Route::post('/all-drivers/store', [DriverController::class, 'store'])->name('driver.store');

//transport

Route::get('/transports/info', [TransportController::class, 'info'])->name('transport.info');
Route::get('/transports', [TransportController::class, 'add'])->name('transport.add');
Route::post('/transports/store', [TransportController::class, 'store'])->name('transport.store');
