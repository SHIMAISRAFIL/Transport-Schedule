<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function info()

    { 
        $admins = Admin::all();

        return view('backend.layouts.admin.info', compact('admins'));
    }

    public function add()
    {
         return view('backend.layouts.admin.add');
    }
    public function store(Request $request)
     { 
    //dd($request->all());
            Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'password'=>$request->password,
            
 
         ]);
 
         return redirect()->back();
                 
     }
}
