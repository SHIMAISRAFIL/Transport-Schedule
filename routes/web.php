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
use App\Http\Controllers\Backend\TripRequestController;
use App\Http\Controllers\Frontend\FrontHomeController;

use App\Http\Controllers\Frontend\TransportViewController;
use App\Models\UrgentTrip;
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

Route::get('Driver/login', [UserController::class, 'Driverlogin'])->name('driver.login');
Route::post('Driver/login/store', [UserController::class, 'Driverloginstore'])->name('driver.login.store');



Route::group(['prefix'=>'officeemployee','middleware'=>'auth'],function (){
    Route::get('/logout',[UserController::class,'logout'])->name('officeemployee.logout');




});

Route::group(['prefix'=>'driver','middleware'=>'auth:driver'],function (){
    Route::get('driver/logout',[UserController::class,'Driverlogout'])->name('driver.logout');

    
});


//admin panel routes

Route::get('admin/login', [BackendUserController::class, 'login'])->name('admin.login');
Route::post('admin/login/store', [BackendUserController::class, 'loginstore'])->name('admin.login.store');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

Route::group(['middleware'=>'role'],function (){


    //user

    Route::get('/officeemployees', [BackendUserController::class, 'officeemployeelist'])->name('admin.officeemployee.list');
    Route::get('/officeemployees/search', [BackendUserController::class, 'officeemployeesearch'])->name('officeemployee.search');
    Route::get('/users', [BackendUserController::class, 'userlist'])->name('user.list');
    Route::get('/users/store', [BackendUserController::class, 'store'])->name('user.store');
   
   //report
    Route::get('/report',[HomeController::class,'report'])->name('report.generation');
    
    
    //triprequest

    Route::get('/triprequest', [TripRequestController::class, 'list'])->name('admin.triprequest.list');

    Route::get('/triprequest/edit/{id}',[TripRequestController::class,'edit'])->name('triprequest.edit');

    Route::put('/triprequest/update/{id}',[TripRequestController::class,'acceptRequest'])->name('acceptrequest');

    Route::get('/triprequest/reject/{id}',[TripRequestController::class,'rejectRequest'])->name('rejectrequest');

    //drivers

    Route::get('/all-drivers', [DriverController::class, 'list'])->name('admin.driver.list');

    Route::get('/all-drivers/create', [DriverController::class, 'create'])->name('driver.create');

    Route::post('/all-drivers/store', [DriverController::class, 'store'])->name('driver.store');

    Route::get('/all-drivers/{id}/transports',[DriverController::class,'allTransport'])->name('driver.transport');
    Route::get('/all-drivers/delete/{id}', [DriverController::class, 'delete'])->name('driver.delete');
    Route::get('/all-drivers/edit/{id}',[DriverController::class,'edit'])->name('driver.edit');
    Route::put('/all-drivers/update/{id}',[DriverController::class,'update'])->name('driver.update');
    
    //transport
    
    Route::get('/transports', [TransportController::class, 'list'])->name('admin.transport.list');

    Route::get('/transports/create', [TransportController::class, 'create'])->name('transport.create');

    Route::post('/transports/store', [TransportController::class, 'store'])->name('transport.store');
    
    Route::get('/transports/delete/{id}', [TransportController::class, 'delete'])->name('transport.delete');

    Route::get('/transports/edit/{id}',[TransportController::class,'edit'])->name('transport.edit');

    Route::put('/transports/update/{id}',[TransportController::class,'update'])->name('transport.update');
    
    
    //schedule

    Route::get('/schedules', [ScheduleController::class, 'list'])->name('admin.schedule.list');

    Route::get('/schedules/create', [ScheduleController::class, 'create'])->name('schedule.create');

    Route::post('/schedules/store', [ScheduleController::class, 'store'])->name('schedule.store');

    Route::get('/schedules/delete/{id}', [ScheduleController::class, 'delete'])->name('schedule.delete');

    Route::get('/schedules/edit/{id}',[ScheduleController::class,'edit'])->name('schedule.edit');

    Route::put('/schedules/update/{id}',[ScheduleController::class,'update'])->name('schedule.update');
  
    Route::get('/schedule/search', [ScheduleController::class, 'schedulesearch'])->name('schedule.search');

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
    

Route::group(['prefix'=>'officeemployee','middleware'=>'officeemployee'],function ()
    
    {   //the activities office employees

        Route::get('/schedules', [ScheduleController::class, 'list'])->name('officeemployee.schedule.list');

        Route::get('/schedule/search', [ScheduleController::class, 'schedulesearch'])->name('schedule.search');

        Route::get('/officeemployees', [BackendUserController::class, 'officeemployeelist'])->name('officeemployee.list');

        Route::get('/triprequest/create', [TripRequestController::class, 'create'])->name('triprequest.create');

        Route::post('/triprequest/store', [TripRequestController::class, 'store'])->name('triprequest.store');

    });
   
    
    Route::get('/',[HomeController::class,'home'])->name('dashboard');
   
    Route::get('logout', [BackendUserController::class, 'logout'])->name('admin.logout');

});

Route::group(['prefix'=>'driver','middleware'=>'auth:driver'],function ()

{
   //the activities of driver 

    Route::get('/schedules', [ScheduleController::class, 'list'])->name('schedule.list');

    Route::get('/schedule/search', [ScheduleController::class, 'schedulesearch'])->name('schedule.search');
   
    Route::get('/all-drivers', [DriverController::class, 'list'])->name('driver.list');

    Route::get('/transports', [TransportController::class, 'list'])->name('transport.list');

    Route::get('/triprequest', [TripRequestController::class, 'list'])->name('driver.triprequest.list');
    
    Route::get('/driver-dashboard',[HomeController::class,'home'])->name('driver.dashboard');
    
});


