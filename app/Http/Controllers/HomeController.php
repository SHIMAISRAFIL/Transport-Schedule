<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()

    { 
        return view (view:'backend.layouts.home');
    }


        public function contact()
        {
            return view(view:'backend.layouts.contacts');
        }
    
}
