<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\RegularTrip;

class LocationController extends Controller
{
    public function list()

    { 
       
        $locations = Location::all(); 
        // $regulartrips = RegularTrip::all();
        return view('backend.layouts.location.list', compact('locations'));
    }

    public function create()
    {
         return view('backend.layouts.location.create');
    }

   
   
    public function delete($id)
    {

        $locations = Location::find($id);
        if( $locations)
        {
            $locations->delete();
            return redirect()->back()->with('message','Location Deleted successfully.');
        }
        return redirect()->back()->with('message','Nothing found to delete.');
    }



    public function edit($id)
    {
      
        $locations = Location::find($id);
      
        return view('backend.layouts.location.edit',compact('locations'));
    }



    public function update(Request $request,$id)
    {
//        dd($request->all());
        $locations = Location::find($id);
        $locations->update([
         
            'location'=>$request->location,
        
        
        ]);

        return redirect()->route('location.list')->with('message','Location updated successfully.');
    }

    public function store(Request $request)
     { 
    //dd($request->all());
            Location::create([
            
            'location'=>$request->location,
           
 
         ]);
 
         return redirect()->route('location.list');
                 
     }
}
