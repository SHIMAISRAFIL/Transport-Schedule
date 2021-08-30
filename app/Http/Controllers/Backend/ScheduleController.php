<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function list()

    { 
        $schedules = Schedule ::all();

        return view('backend.layouts.schedule.list', compact('schedules'));
    }

    public function create()
    {
         return view('backend.layouts.schedule.create');
    }
    public function store(Request $request)
     { 
    //dd($request->all());
       Schedule::create([
            'date'=>$request->date,
            'time'=>$request->time,
            'location'=>$request->location,
            
            'transport_number'=>$request->transport_number,
            
 
         ]);
 
         return redirect()->back();
                 
     }
}
