<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UrgentTrip;
use Illuminate\Http\Request;

class UrgenttripController extends Controller
{
   
    // public function list()

    // {
        
    //     //$transports = Transport::all();
    //     return view('backend.layouts.urgenttrip.list');
    // }
    public function create()
   
    {
       return view('backend.layouts.urgenttrip.create');
    }

    public function store(Request $request)
    { 
        //dd($request->all());
        UrgentTrip::create([
            
           
            'location'=>$request->location,
            'time'=>$request->time,
            
 
         ]);
 
         return redirect()->back();
                 
}
}