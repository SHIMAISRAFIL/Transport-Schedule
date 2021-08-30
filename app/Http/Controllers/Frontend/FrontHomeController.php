<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class FrontHomeController extends Controller
{
    public function fronthome()
    {
      return view('frontend.layouts.home');
    }

    public function about()
    {
      return view('frontend.layouts.about');
    }

    public function contact()

    {
      return view('frontend.layouts.contact');
    }
}
