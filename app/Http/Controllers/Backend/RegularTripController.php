<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegularTrip;


class RegularTripController extends Controller
{
    public function list()

    { 
        $regulartrips = RegularTrip::all();

        return view('backend.layouts.regulartrip.list', compact('regulartrips'));
    }

    public function create()
    {
         return view('backend.layouts.regulartrip.create');
    }
    public function store(Request $request)
     { 
    //dd($request->all());
            RegularTrip::create([
            'date'=>$request->date,
            'time'=>$request->time,
            'location'=>$request->location,
            'driver_name'=>$request->driver_name,
            'transport_number'=>$request->transport_number,
            
 
         ]);
 
         return redirect()->back();
                 
     }
}
