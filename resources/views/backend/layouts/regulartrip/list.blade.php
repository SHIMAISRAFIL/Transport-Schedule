@extends('backend.master')

@section('content')




<h1> Trip info</h1>

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>

<a href="{{route('regulartrip.create')}}" class="btn btn-info">Manage  Trip</a>


<table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Transport Number</th>
            <th scope="col">Location From</th>
            <th scope="col">Location To</th>
        
            <th scope="col">Action</th>
            
        </tr>
        </thead>
        
    <tbody>
     

    @foreach($regulartrips as $regulartrip)
        <tr>
            <th scope="row">{{$regulartrip->id}}</th>

            <th scope="row">{{$regulartrip->transport->transport_number}}</th>
            <td>{{$regulartrip->locationFrom->location}}</td>
            <td>{{$regulartrip->locationTo->location}}</td>
          
            <td> <a href="" class="btn btn-success">View</a></td>
            <td><a href="" class="btn btn-warning">Edit</a></td>
      <td><a onclick="return confirm('Are you sure you want to delete this ?');" href="{{route('regulartrip.delete', $regulartrip->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
        </tbody>
</table> 


@endsection