<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    public function info()

    { $drivers= driver::paginate(3);
        //$driver =driver::all();
        return view('backend.layouts.driver.info',compact('drivers'));
        
    }

    public function appoint()
    {
         return view('backend.layouts.driver.appoint');

    }

    public function store(Request $request)
    { 
        //dd($request->all());
        Driver::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'email'=>$request->email,
            'address'=>$request->address,
            'license'=>$request->license,
            'experience'=>$request->experience,
            'phone'=>$request->phone,
            'password'=>$request->password,
            
 
         ]);
 
         return redirect()->back();
                 
    }
}
