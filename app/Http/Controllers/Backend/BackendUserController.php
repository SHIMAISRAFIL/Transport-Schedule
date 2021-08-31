<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BackendUserController extends Controller
{

    public function login()
    {  
        return view('backend.layouts.login');
    }

    public function officeemployeelist()
    {$user= User::where('role','=','officeemployee')->get();
        return view('backend.layouts.officeemployee', compact('user'));
    }

    public function userlist()
    {  $user= User::all();
        return view('backend.layouts.user', compact('user'));
    }
}
