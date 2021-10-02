<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\TripRequestController as BackendTripRequestController;
use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\TripRequest;
use App\Models\Transport;

class TripRequestController extends Controller
{   
    public function list()

    {
        $triprequests=TripRequest::all();
        //dd( $triprequests);
        return view('backend.layouts.triprequest.list', compact('triprequests'));
    }
    
    public function create()

    {   
        $triprequests=TripRequest::all();
        $drivers = Driver:: all();
        $transports = Transport::all();
       return view('backend.layouts.triprequest.create',compact('triprequests','drivers','transports'));
    }

    public function store(Request $request)
    { 
        //dd($request->all());
        TripRequest::create([
            
            'driver_id'=>$request->driver_id,
            'transport_id'=>$request->transport_id,
            'location'=>$request->location,
            'time'=>$request->time,
            
 
         ]);
 
         return redirect()->route('triprequest.list');
        }

        
        public function edit($id)
        {  
            $triprequests=TripRequest::find($id);

            $transports=Schedule::select('transport_id')->whereTime('pickuptime', '=', $triprequests->time)->get();

           $t_ids=$transports->collect()->pluck('transport_id');

           $transports=Transport::whereNotIn('id',$t_ids)->get();
        

           return view('backend.layouts.triprequest.requestaccepted', compact('transports','triprequests'));
        }
            
            public function acceptRequest(Request $request,$id)
            {
               $triprequests=TripRequest::find($id);
               $triprequests->update([
                    
                    'transport_id'=>$request->transport_id3,
                    'status' => 'Approved'
                ]);
        
                return redirect()->back();
            }


            public function rejectRequest($id)

            {
                $triprequests=TripRequest::find($id);
                $triprequests->update([
                       'status' => 'Reject'
                   ]);
                return redirect()->back()->with('message','Sorry for inconvienience');
            }
            
            
                 
}


