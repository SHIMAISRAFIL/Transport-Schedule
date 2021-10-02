<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\FuelCost;
use App\Models\Location;
use App\Models\Schedule;
use App\Models\Transport;
use App\Models\TripRequest;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    
    { 
        $title='Dashboard';
        $link='Dashboard / home';
        $user_count=User::all()->count();
        $employees_count=User::all()->count();
        $drivers_count=Driver::all()->count();
        $transports_count=Transport::all()->count();
        $schedules_count=Schedule::all()->count();
        $locations_count=Location::all()->count();
        $fuelcosts_count=FuelCost::all()->count();
        $triprequest_count=TripRequest::all()->count();
       
       
        return view('backend.layouts.home',compact('title','link', 'user_count', 'employees_count','drivers_count','transports_count','schedules_count','locations_count','fuelcosts_count','triprequest_count'));

        }

        public function contact()

        {
            return view(view:'backend.layouts.contacts');
        }

        public function report()

    {
        $fuelcosts=FuelCost::all();
      

        return view('backend.layouts.report-data',compact('fuelcosts'));

    }

    
}
