@extends('backend.master')

@section('content')




<h1>Location Info</h1>



<a href="{{route('location.create')}}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
  <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
</svg>Fix Location</a>

<table class="table table-success table-striped">
        <thead class="table table-dark">

        <tr>
            <th scope="col">SL</th>
            <th scope="col">Location Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        
    <tbody>
  
    @foreach($locations as $key=>$location)
          
          <tr>
            <th scope="row">{{$key+1}}

            <td>{{$location->location}}</td>


            <td> 
                 <a href="{{route('location.edit', $location->id)}}" class="btn btn-warning">Edit</a>
                 <a onclick="return confirm('Are you sure you want to delete this location ?');" href="{{route('location.delete', $location->id)}}" class="btn btn-danger">Delete</a>
           </td>
           </th>
           </tr>
        
@endforeach
</tbody>
</table> 

@endsection