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
            //user logged in
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('message','invalid user info.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function officeemployeelist()
    {   $user= User::where('role','=','officeemployee')->get();
        return view('backend.layouts.officeemployee', compact('user'));
    }

    public function userlist()
    {  $user= User::all();
        return view('backend.layouts.user', compact('user'));
    }
}
