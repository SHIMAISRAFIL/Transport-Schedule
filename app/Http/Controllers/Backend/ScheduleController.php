<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\RegularTrip;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Transport;

class ScheduleController extends Controller
{
    public function list()

    {     //variable=Model::relation name
        
        $schedules = Schedule ::with(['regulartrip'])->get();
        $regulartrips = RegularTrip:: all();

        return view('backend.layouts.schedule.list', compact('schedules','regulartrips'));
    }

    public function create()

    { 
        $regulartrips = RegularTrip:: all();
         return view('backend.layouts.schedule.create', compact('regulartrips'));
    }

    public function delete($id)
    {

        $schedules = Schedule::find($id);
        if( $schedules)
        {
            $schedules->delete();
            return redirect()->back()->with('message','Deleted successfully.');
        }
        return redirect()->back()->with('message','Nothing found to delete.');
    }
    
    public function edit($id)
    {
        $schedules = Schedule::find($id);
        $regulartrips = RegularTrip:: all();
        return view('backend.layouts.schedule.edit',compact('regulartrips','schedules'));
    }

    public function update(Request $request,$id)
    {
//        dd($request->all());
       $schedules = Schedule::find($id);
       $schedules->update([
        'regulartrip_id'=>$request->regulartrip_id,
        'date'=>$request->date,
        'time'=>$request->time,
        
        
        ]);

        return redirect()->route('schedule.list')->with('message','Schedule updated successfully.');
    }
    
    
    public function store(Request $request)
     { 
    //dd($request->all());
       Schedule::create([
            'regulartrip_id'=>$request->regulartrip_id,
            'date'=>$request->date,
            'time'=>$request->time,
          
            
 
         ]);
 
         return redirect()->route('schedule.list');
                 
     }
     public function alltrips($id)
     {
        $regulartrips = RegularTrip::with(['locationFrom','locationTo','transport'])->find($id);
           return view('backend.layouts.schedule.trip-view', compact('regulartrips'));
     }
}
