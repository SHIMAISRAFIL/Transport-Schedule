<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Models\RegularTrip;
use App\Models\Location;
use App\Models\Transport;

class RegularTripController extends Controller
{
    public function list()

    {    
        $regulartrips = RegularTrip::with(['locationFrom','locationTo'])->get();
        $regulartrips = RegularTrip::with(['transport'])->get();
       // dd($regulartrips);
       $locations= Location::all();
       $transports = Transport::all();
        return view('backend.layouts.regulartrip.list', compact('regulartrips','transports', 'locations'));
    }

    public function create()
    {   $locations= Location::all();
        $drivers =Driver::all();
        $transports = Transport::all();
        // dd($locations->all());  
         return view('backend.layouts.regulartrip.create',compact('locations','drivers','transports'));
    }

    public function delete($id)
    {

        $regulartrips = RegularTrip::find($id);
        if( $regulartrips)
        {
            $regulartrips->delete();
            return redirect()->back()->with('message','Deleted successfully.');
        }
        return redirect()->back()->with('message','Nothing found to delete.');
    }

    public function store(Request $request)
     { 
//    dd($request->all());
            RegularTrip::create([
            'transport_id'=>$request->transport_id,
            'locationfrom'=>$request->locationfrom,
          
            'locationto'=>$request->locationto,
          
            
 
         ]);
 
         return redirect()->route('regulartrip.list');
                 
     }
}
