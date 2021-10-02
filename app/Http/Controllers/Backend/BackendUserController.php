<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendUserController extends Controller
{

    public function login()
    {  
        return view('backend.layouts.login');
    }
   
    public function loginstore(Request $request )
    {  
        $credentials=$request->except('_token');
       
        if(Auth::attempt( $credentials))
        {
             if(auth()->user()->role=='admin' || auth()->user()->role=='officeemployee' || auth()->user()->role=='driver' )
           
             {
                return redirect()->route('dashboard');
            }
            
            else
            
            {
                Auth::logout();
                return redirect()->route('user.signup');
            }
        }

        return redirect()->back()->with('message','invalid user info.');
  
}
    public function logout()
    {
        Auth::logout();
        return redirect()->route('fronthome');
    }

    public function officeemployeelist()

    {   $user= User::where('role','=','officeemployee')->get();
        return view('backend.layouts.officeemployee', compact('user'));
    }

    public function userlist()
    {  $user= User::all();
        return view('backend.layouts.user', compact('user'));
    }

    public function officeemployeesearch()
    {
        // $_GET['key']
        // request()->key
        $key=request()->search;
        $user=User::where('name','LIKE',"%{$key}%")->get();


        return view('backend.layouts.search-officeemployee', compact('user'));
    }
}
