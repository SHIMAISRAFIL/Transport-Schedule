<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OfficeEmployee;

class OfficeEmployeeController extends Controller
{
    public function info()

    {   $officeemployees= OfficeEmployee::paginate(3);
        //$officeemployees = OfficeEmployee::all();
        return view('backend.layouts.officeemployee.info',compact('officeemployees'));
    }

    public function add()
    {
         return view('backend.layouts.officeemployee.add');
    }
    public function store(Request $request)
    { 
        //dd($request->all());
        OfficeEmployee::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'password'=>$request->password,
            
 
         ]);
 
         return redirect()->back();
                 
    }
}
