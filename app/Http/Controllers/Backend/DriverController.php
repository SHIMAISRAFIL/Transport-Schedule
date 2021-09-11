<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Transport;


class DriverController extends Controller
{
    public function list()

    { 
    
        $drivers =Driver::all();
       
        return view('backend.layouts.driver.list',compact('drivers'));
        
    }

    public function create()
    {   
        
        $drivers =Driver::all();
         return view('backend.layouts.driver.create',compact('drivers') );

    }
    public function delete($id)
    {

      $drivers=Driver::find($id);
        if($drivers)
        {
            $drivers->delete();
            return redirect()->back()->with('message','Driver Deleted successfully.');
        }
        return redirect()->back()->with('message','No Driver found to delete.');
     }

    public function edit($id)
    {
       $drivers= Driver::find($id);
      
        return view('backend.layouts.driver.edit',compact('drivers'));
    }


    public function update(Request $request,$id)
    {
//        dd($request->all());
        $drivers= Driver::find($id);
        $drivers->update([
            
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age,
            'address'=>$request->address,
            'license'=>$request->license,
            'experience'=>$request->experience,
            'phone'=>$request->phone,
            'password'=>$request->password,
        
        ]);

        return redirect()->route('driver.list')->with('message','Driver Info updated successfully.');
    }

    public function store(Request $request)
    { 
        //dd($request->all());
        Driver::create([
        
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age,
            
            'address'=>$request->address,
            'license'=>$request->license,
            'experience'=>$request->experience,
            'phone'=>$request->phone,
            'password'=>$request->password,
            
 
         ]);
 
         return redirect()->route('driver.list');
                 
    }


    public function allTransport($id)
    {
          $transports=Transport::where('driver_id',$id)->get();
          return view('backend.layouts.driver.transport-list', compact('transports'));
    }
}
