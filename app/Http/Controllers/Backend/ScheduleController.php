<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
       
       $locations= Location::all();
       $transports = Transport::all();
       //dd($transports );
      return view('backend.layouts.schedule.list', compact('schedules','transports', 'locations'));
    }

    public function create()

    {   $schedules=Schedule::all();
        $locations= Location::all();
        $transports = Transport::all();
        //dd($transports );
       return view('backend.layouts.schedule.create', compact('schedules','transports', 'locations'));
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
        
        return view('backend.layouts.schedule.edit',compact('regulartrips','schedules'));
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
     

     
}
