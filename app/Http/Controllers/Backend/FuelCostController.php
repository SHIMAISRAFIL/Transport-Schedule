<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FuelCost;
use App\Models\Transport;

class FuelCostController extends Controller
{
    public function list()

    {   $fuelcosts=FuelCost::with(['transport'])->get();
        $transports = Transport::all();
        return view('backend.layouts.fuelcost.list', compact('fuelcosts','transports'));
    }

   
    public function create()

    {
        $transports=Transport::all();
        
        return view('backend.layouts.fuelcost.create',compact('transports'));

    }
    public function delete($id)
    {

        $fuelcosts=FuelCost::find($id);
        if($fuelcosts)
        {
            $fuelcosts->delete();
            return redirect()->back()->with('message',' Deleted successfully.');
        }
        return redirect()->back()->with('message','Nothing found to delete.');
    }

    
    public function store(Request $request)
    { 
        //dd($request->all());
        FuelCost::create([
            
            'transport_id'=>$request->transport_id,
            'fueltype'=>$request->fueltype,
            'fuelprice'=>$request->fuelprice,
            'fuelquantity'=>$request->fuelquantity,
            'date'=>$request->date,
            'place'=>$request->place,
            'remarks'=>$request->remarks,
            
            
 
         ]);
 
         return redirect()->route('fuelcost.list');
                 
    }

     public function edit($id)
     {  $fuelcosts=FuelCost::find($id);
        //dd($fuelcosts);
        $transports=Transport::all();
        return view('backend.layouts.fuelcost.edit', compact('transports', 'fuelcosts'));
     }

     public function update(Request $request, $id)
     {
         $fuelcosts=FuelCost::find($id);
         $fuelcosts->update([
            'transport_id'=>$request->transport_id,
            'fueltype'=>$request->fueltype,
            'fuelprice'=>$request->fuelprice,
            'fuelquantity'=>$request->fuelquantity,
            'date'=>$request->date,
            'place'=>$request->place,
            'remarks'=>$request->remarks,

         ]);

         return redirect()->route('fuelcost.list')->with('message','Fuelcost updated successfully.');
     }

}
