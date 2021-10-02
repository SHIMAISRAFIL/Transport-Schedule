<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Location;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Transport;

class ScheduleController extends Controller
{
    public function list()

    {     //variable=Model::relation name
        
        $schedules=Schedule:: with(['locationFrom','locationTo'])->get();
        $schedules=Schedule::with(['transport'])->get();
        // $drivers=Driver::all();
       $locations= Location::all();
       $transports = Transport::all();
       //dd($transports );
      return view('backend.layouts.schedule.list', compact('schedules','transports', 'locations'));
    }

    public function create()

    {   $schedules=Schedule::all();
        $locations= Location::all();
        $transports = Transport::all();
        
       return view('backend.layouts.schedule.create', compact('schedules','transports', 'locations'));
    }

    public function store(Request $request)
    { 
   //dd($request->all());
      Schedule::create([
           
           'transport_id'=>$request->transport_id,
           'date'=>$request->date,
           'locationfrom'=>$request->locationfrom,
           'locationto'=>$request->locationto,
           'pickuptime'=>$request->pickuptime,
           'droptime'=>$request->droptime,  

        ]);

        return redirect()->route('schedule.list');
                
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
       
        $transports = Transport::all();
        $locations= Location::all();

        return view('backend.layouts.schedule.edit',compact('schedules','transports', 'locations'));
    }

    public function update(Request $request,$id)
    {
//        dd($request->all());
        $schedules = Schedule::find($id);
        $schedules->update([
        'transport_id'=>$request->transport_id,
        'date'=>$request->date,
        'locationfrom'=>$request->locationfrom,
        'locationto'=>$request->locationto,
        'pickuptime'=>$request->pickuptime,
        'droptime'=>$request->droptime,
        
        
        ]);

        return redirect()->route('schedule.list')->with('message','Schedule updated successfully.');
    }
        
public function schedulesearch()
    {
        // $_GET['key']
        // request()->key
        $key=request()->search;
        
        $schedules=Schedule::where('date','LIKE',"%{$key}%")->get();


        return view('backend.layouts.schedule.search-schedule', compact('schedules'));
    }
}
  
     

