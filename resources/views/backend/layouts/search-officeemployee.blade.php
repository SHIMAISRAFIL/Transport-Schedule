@extends('backend.master')

@section('content')
    
    <div class="text-dark">Search Result</div>

 
        <div class="container">
            <div class="row">
                @if($user->count()>0)
                    @foreach($user as $data)
                        <div class="col-sm-4">
                        <p class="best_text">{{$data->name}}</p>
                                <p class="best_text">{{$data->email}}</p>
                             
                                
                            
                        </div>
                    @endforeach

                @else
                    <div>
                        <h2>No Office Employee found</h2>
                    </div>
                @endif
            </div>

            
        
        </div>
    
   
@endsection
