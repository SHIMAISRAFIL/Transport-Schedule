<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signupform()

    { 

        return view('frontend.layouts.signup');
    }
  
    public function signupstore(Request $request)
     { 
       //server side validation
       
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
           
            'phone'=>'required',
             'password'=>'required|min:6',

        ]);
       User::create([
            'role'=>'officeemployee',
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->password),
        
            
 
         ]);
 
         return redirect()->back()->with('success','User Registration Successful.');;
                 
     }
     public function login()

     { 
 
         return view('frontend.layouts.login');
     }
 
     public function loginstore(Request $request)
       {
        //    dd($request->all());
             $credentials=$request->except('_token');
    // dd(Auth::attempt($credentials));
             if(Auth::attempt($credentials))
             {
                 return redirect()->route('fronthome');
                
             }
             return redirect()->back()->with('message','invalid user info.');
         }
     
         public function logout()
         {
             Auth::logout();
             return redirect()->route('officeemployee.login');
         }
         
     }



