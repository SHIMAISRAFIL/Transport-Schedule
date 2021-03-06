@extends('backend.master')

@section('content')





<h1>Trip Request</h1>


<a href="{{route('triprequest.create')}}" class="btn btn-info">
  
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>Enter Info</a>

<table class="table table-success table-striped">
        <thead class="table table-dark">

        <tr>
            <th scope="col">SL</th>
            <th scope="col">Location Name</th>
            <th scope="col">Time</th>
           
            <th scope="col">Status</th>
        </tr>
        </thead>
        
    <tbody>
  
    @foreach($triprequests as $key=>$triprequest)
          
          <tr>
            <th scope="row">{{$key+1}}

            <td>{{$triprequest->location}}</td>
            <td>{{$triprequest->time}}</td>
          
        <td> 
          @if($triprequest->status)
            {{$triprequest->status}}
         @else
         <a href="{{route('triprequest.edit', $triprequest->id)}}" class="btn btn-primary">Accept Request</a>
            <br></br>
            <a  message="return ('Sorry for inconvienence');" href="{{route('rejectrequest', $triprequest->id)}}" class="btn btn-danger">Reject Request</a>
         @endif
       </td>

      
       </th>
       </tr>
        
@endforeach
</tbody>
</table> 

@endsection