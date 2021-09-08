<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transport;
use App\Models\Driver;
use Illuminate\Mail\Transport\Transport as TransportTransport;

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

    public function delete($id)
    {

      $transports=Transport::find($id);
        if($transports)
        {
            $transports->delete();
            return redirect()->back()->with('message','Transport Deleted successfully.');
        }
        return redirect()->back()->with('message','No Transport found to delete.');
    }

    
    public function store(Request $request)
    {
        //  dd($request->all());
        $fileName='';
      if ($request->hasFile('transport_image')) 
      {
        $file=$request->file('transport_image');
        $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads', $fileName);
      } 
      

            Transport::create([
            'driver_id'=>$request->driver_id,
            'transport_type'=>$request->transport_type,
            'transport_number'=>$request->transport_number,
            'image'=>$fileName
                ]);
 
         return redirect()->route('transport.info');
                 
     }

     public function edit($id)
    {
      $transports= Transport::find($id);
      $drivers = Driver:: all();
        return view('backend.layouts.transport.edit',compact('drivers','transports'));
    }

    public function update(Request $request,$id)
    {
//        dd($request->all());
        $transports= Transport::find($id);
        $transports->update([
            'driver_id'=>$request->driver_id,
            'transport_type'=>$request->transport_type,
            'transport_number'=>$request->transport_number,
        ]);

        return redirect()->route('transport.info')->with('message','Transport updated successfully.');
    }
}
