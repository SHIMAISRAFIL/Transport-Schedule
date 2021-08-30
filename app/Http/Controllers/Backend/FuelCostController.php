<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FuelCost;

class FuelCostController extends Controller
{
    public function list()

    {   $fuelcosts=FuelCost::all();
        return view('backend.layouts.fuelcost.list', compact('fuelcosts'));
    }

   
    public function create()

    {
        return view('backend.layouts.fuelcost.create');
    }
    public function store(Request $request)
    { 
        //dd($request->all());
        FuelCost::create([
            
            'transportid'=>$request->transportid,
            'fueltype'=>$request->fueltype,
            'fuelprice'=>$request->fuelprice,
            'fuelquantity'=>$request->fuelquantity,
            'date'=>$request->date,
            'place'=>$request->place,
            'remarks'=>$request->remarks,
            
            
 
         ]);
 
         return redirect()->back();
                 
    }

}
