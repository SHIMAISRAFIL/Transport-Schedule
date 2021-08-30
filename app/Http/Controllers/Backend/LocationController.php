<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function list()

    { 
        $locations= Location::all();

        return view('backend.layouts.location.list', compact('locations'));
    }

    public function create()
    {
         return view('backend.layouts.location.create');
    }
    public function store(Request $request)
     { 
    //dd($request->all());
            Location::create([
            
            'location'=>$request->location,
           
 
         ]);
 
         return redirect()->back();
                 
     }
}
