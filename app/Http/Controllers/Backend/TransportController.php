<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transport;

class TransportController extends Controller
{
    public function info()

    {
        $transports= transport::paginate(3);
        //$transports = transport::all();
        return view('backend.layouts.transport.info',compact('transports'));
    }

    public function add()
    {
         return view('backend.layouts.transport.add');
    }
    public function store(Request $request)
     { 
    //dd($request->all());
            Transport::create([
            'transport_type'=>$request->transport_type,
            'transport_number'=>$request->transport_number,
            
            
 
         ]);
 
         return redirect()->back();
                 
     }
}
