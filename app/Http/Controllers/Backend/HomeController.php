<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
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
