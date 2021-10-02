@extends('backend.master')

@section('content')
    
    <div class="text-dark">Search Result</div>

 
        <div class="container">
            <div class="row">
                @if($schedules->count()>0)
                    @foreach($schedules as $data)
                        <div class="col-sm-4">

                        <p class="best_text">{{$data->transport->transport_number}}</p>
                        <p class="best_text">{{$data->date}}</p>
                        
                        <p class="best_text">{{$data->locationFrom->location}}</p>
                        <p class="best_text">{{$data->locationTo->location}}</p>   
                        <p class="best_text">{{$data->pickuptime}}</p>   
                        <p class="best_text">{{$data->droptime}}</p>       
                            
                        </div>
                    @endforeach

                @else
                    <div>
                        <h2>No trip is here</h2>
                    </div>
                @endif
            </div>

            
        
        </div>
    
   
@endsection