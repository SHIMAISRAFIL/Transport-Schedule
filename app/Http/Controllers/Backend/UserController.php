<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function signupform()

    { 

        return view('frontend.layouts.signup');
    }

   
    public function signupstore(Request $request)
     { 
    //dd($request->all());
       User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->email),
        
            
 
         ]);
 
         return redirect()->back()->with('success','User Registration Successful.');;
                 
     }
}


