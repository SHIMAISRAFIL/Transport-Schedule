@extends('backend.master')

@section('content')




<h1>Location Info</h1>

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>

<a href="{{route('location.create')}}" class="btn btn-info">Fix Location</a>

<table class="table">
        <thead>
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