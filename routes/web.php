<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BackendUserController;
use App\Http\Controllers\Backend\OfficeEmployeeController;
use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\RegularTripController;
use App\Http\Controllers\Backend\ScheduleController;
use App\Http\Controllers\Backend\TransportController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\FuelCostController;


use App\Http\Controllers\Frontend\FrontHomeController;
use Database\Seeders\UsersTableSeeder;
use Illuminate\Support\Facades\Route;






Route::get('/', [FrontHomeController::class, 'fronthome'])->name('fronthome');
Route::get('/about', [FrontHomeController::class, 'about'])->name('about');
Route::get('/contact', [FrontHomeController::class, 'contact'])->name('contact');
Route::get('/signup', [UserController::class, 'signupform'])->name('user.signup');
Route::post('/signup/store', [UserController::class, 'signupstore'])->name('user.signup.store');


//admin panel routes
Route::get('admin/login', [BackendUserController::class, 'login'])->name('admin.login');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){
   

    Route::get ('/', function () {
        return view('backend.master');
    });
    
    
    Route::get('/home', function()
    { 
       
        return view('backend.layouts.home');
    });
    
    
    
   
 
    


    //user

    Route::get('/officeemployees', [BackendUserController::class, 'officeemployeelist'])->name('officeemployee.list');
    Route::get('/users', [BackendUserController::class, 'userlist'])->name('user.list');
    Route::get('/users/store', [BackendUserController::class, 'store'])->name('user.store');
    


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
    
    // office employee
    
    // Route::get('/all-office-employees/info', [OfficeEmployeeController::class, 'info'])->name('officeemployee.info');
    // Route::get('/all-office-employees', [OfficeEmployeeController::class, 'add'])->name('officeemployee.add');
    // Route::post('/all-office-employees/store', [OfficeEmployeeController::class, 'store'])->name('officeemployee.store');
    //drivers
    
    Route::get('/all-drivers/info', [DriverController::class, 'info'])->name('driver.info');
    Route::get('/all-drivers', [DriverController::class, 'appoint'])->name('driver.appoint');
    Route::post('/all-drivers/store', [DriverController::class, 'store'])->name('driver.store');
    Route::get('/all-drivers/{id}/transports',[DriverController::class,'allTransport'])->name('driver.transport');
    //transport
    
    Route::get('/transports/info', [TransportController::class, 'info'])->name('transport.info');
    Route::get('/transports', [TransportController::class, 'add'])->name('transport.add');
    Route::post('/transports/store', [TransportController::class, 'store'])->name('transport.store');
    
    //regulartrip
    Route::get('/regular-trips', [RegularTripController::class, 'list'])->name('regulartrip.list');
    Route::get('/regular-trips/create', [RegularTripController::class, 'create'])->name('regulartrip.create');
    Route::post('/regular-trips/store', [RegularTripController::class, 'store'])->name('regulartrip.store');
    
    //schedule
    Route::get('/schedules', [ScheduleController::class, 'list'])->name('schedule.list');
    Route::get('/schedules/create', [ScheduleController::class, 'create'])->name('schedule.create');
    Route::post('/schedules/store', [ScheduleController::class, 'store'])->name('schedule.store');
    
    
    //location
    Route::get('/locations', [LocationController::class, 'list'])->name('location.list');
    Route::get('/locations/create', [LocationController::class, 'create'])->name('location.create');
    Route::post('/locations/store', [LocationController::class, 'store'])->name('location.store');


//fuelcostcalculation
    Route::get('/fuelcosts', [FuelCostController::class, 'list'])->name('fuelcost.list');
    
    Route::get('/fuelcosts/create', [FuelCostController::class, 'create'])->name('fuelcost.create');
    Route::post('/fuelcosts/store', [FuelCostController::class, 'store'])->name('fuelcost.store');


   

});



