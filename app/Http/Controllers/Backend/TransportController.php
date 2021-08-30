<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transport;
use App\Models\Driver;

class TransportController extends Controller
{
    public function info()

    {
        $transports= Transport::with('driver')->paginate(3);
        //$transports = Transport::all();
        return view('backend.layouts.transport.info',compact('transports'));
    }

    public function add()
    {    $drivers = Driver:: all();
      
        
         return view('backend.layouts.transport.add', compact('drivers'));
    }
    public function store(Request $request)
     { 
   // dd($request->all());
            Transport::create([
            'driver_id'=>$request->driver_id,
            'transport_type'=>$request->transport_type,
            'transport_number'=>$request->transport_number,
            
            
 
         ]);
 
         return redirect()->back();
                 
     }
}
