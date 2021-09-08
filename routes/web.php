<?php

use App\Http\Controllers\Backend\HomeController;

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
Route::get('/terms', [FrontHomeController::class, 'term'])->name('term');

//officeemployeelogin
Route::get('officeemployee/login', [UserController::class, 'login'])->name('officeemployee.login');
Route::post('officeemployee/login/store', [UserController::class, 'loginstore'])->name('officeemployee.login.store');

Route::group(['prefix'=>'officeemployee','middleware'=>'auth'],function (){
    Route::get('/logout',[UserController::class,'logout'])->name('officeemployee.logout');
});




//admin panel routes
Route::get('admin/login', [BackendUserController::class, 'login'])->name('admin.login');
Route::post('admin/login/store', [BackendUserController::class, 'loginstore'])->name('admin.login.store');


Route::group(['prefix'=>'admin','middleware'=>['auth','role']],function(){
    // 

    Route::get('/',[HomeController::class,'home'])->name('dashboard');
   
    Route::get('logout', [BackendUserController::class, 'logout'])->name('logout');
    
    


    //user

    Route::get('/officeemployees', [BackendUserController::class, 'officeemployeelist'])->name('officeemployee.list');
    Route::get('/users', [BackendUserController::class, 'userlist'])->name('user.list');
    Route::get('/users/store', [BackendUserController::class, 'store'])->name('user.store');
    


    
    
   
    
    
    // office employee
    
    // Route::get('/all-office-employees/info', [OfficeEmployeeController::class, 'info'])->name('officeemployee.info');
    // Route::get('/all-office-employees', [OfficeEmployeeController::class, 'add'])->name('officeemployee.add');
    // Route::post('/all-office-employees/store', [OfficeEmployeeController::class, 'store'])->name('officeemployee.store');
    //drivers
    
    Route::get('/all-drivers/info', [DriverController::class, 'info'])->name('driver.info');
    Route::get('/all-drivers', [DriverController::class, 'appoint'])->name('driver.appoint');
    Route::post('/all-drivers/store', [DriverController::class, 'store'])->name('driver.store');
    Route::get('/all-drivers/{id}/transports',[DriverController::class,'allTransport'])->name('driver.transport');
    Route::get('/all-drivers/delete/{id}', [DriverController::class, 'delete'])->name('driver.delete');
    Route::get('/all-drivers/edit/{id}',[DriverController::class,'edit'])->name('driver.edit');
    Route::put('/all-drivers/update/{id}',[DriverControllerr::class,'update'])->name('driver.update');
    
    //transport
    
    Route::get('/transports/info', [TransportController::class, 'info'])->name('transport.info');
    Route::get('/transports', [TransportController::class, 'add'])->name('transport.add');
    Route::post('/transports/store', [TransportController::class, 'store'])->name('transport.store');
    Route::get('/transports/delete/{id}', [TransportController::class, 'delete'])->name('transport.delete');
    Route::get('/transports/edit/{id}',[TransportController::class,'edit'])->name('transport.edit');
    Route::put('/transports/update/{id}',[TransportController::class,'update'])->name('transport.update');
    
    
    //regulartrip
    Route::get('/regular-trips', [RegularTripController::class, 'list'])->name('regulartrip.list');
    Route::get('/regular-trips/create', [RegularTripController::class, 'create'])->name('regulartrip.create');
    Route::post('/regular-trips/store', [RegularTripController::class, 'store'])->name('regulartrip.store');
    Route::get('/regular-trips/delete/{id}', [RegularTripController::class, 'delete'])->name('regulartrip.delete');
    Route::get('/regular-trips/edit/{id}',[RegularTripController::class,'edit'])->name('regulartrip.edit');
    Route::put('/regular-trips/update/{id}',[RegularTripController::class,'update'])->name('regulartrip.update');
   
   
    //schedule
    Route::get('/schedules', [ScheduleController::class, 'list'])->name('schedule.list');
    Route::get('/schedules/create', [ScheduleController::class, 'create'])->name('schedule.create');
    Route::post('/schedules/store', [ScheduleController::class, 'store'])->name('schedule.store');
    
    Route::get('/schedules/alltrips/{id}', [ScheduleController::class, 'alltrips'])->name('schedule.trip');
    Route::get('/schedules/delete/{id}', [ScheduleController::class, 'delete'])->name('schedule.delete');
    Route::get('/schedules/edit/{id}',[ScheduleController::class,'edit'])->name('schedule.edit');
    Route::put('/schedules/update/{id}',[ScheduleController::class,'update'])->name('schedule.update');
   
   
    //location
    Route::get('/locations', [LocationController::class, 'list'])->name('location.list');
    Route::get('/locations/create', [LocationController::class, 'create'])->name('location.create');
    Route::post('/locations/store', [LocationController::class, 'store'])->name('location.store');
    Route::get('/locations/delete/{id}', [LocationController::class, 'delete'])->name('location.delete');
    Route::get('locations/edit/{id}',[LocationController::class,'edit'])->name('location.edit');
    Route::put('/locations/update/{id}',[LocationController::class,'update'])->name('location.update');
//fuelcostcalculation
    Route::get('/fuelcosts', [FuelCostController::class, 'list'])->name('fuelcost.list');
    
    Route::get('/fuelcosts/create', [FuelCostController::class, 'create'])->name('fuelcost.create');
    Route::post('/fuelcosts/store', [FuelCostController::class, 'store'])->name('fuelcost.store');
    Route::get('/fuelcosts/delete/{id}', [FuelCostController::class, 'delete'])->name('fuelcost.delete');
    Route::get('/fuelcosts/edit/{id}',[FuelCostController::class,'edit'])->name('fuelcost.edit');
    Route::put('/fuelcosts/update/{id}',[FuelCostController::class,'update'])->name('fuelcost.update');
   

});



