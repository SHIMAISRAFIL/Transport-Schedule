@extends('backend.master')

@section('content')




<h1>Transport</h1>

<a href="{{route('transport.create')}}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>Add Transport </a>

<table class="table table-success table-striped">
 <thead class="table table-dark">
    
   <tr>
      <th scope="col">SL </th>
      <th scope="col">Transport image</th>
      <th scope="col">Driver Name</th>
      <th scope="col">Transport Type</th>
      <th scope="col">Transport No.</th>
      <th scope="col">Action</th>
  </tr>
  </thead>
  <tbody>

@foreach($transports as $key=>$transport)

    
      <tr>
      <th scope="row">{{$key+1}}</th>
     
      <td>
            <img src="{{'http://localhost/transport-schedule//storage/app/uploads/'.$transport->image}}" style="height: 60px;" width="80" alt="transport image">
      </td>

      <td>{{$transport->driver->name}}</td>
      <td>{{$transport->transport_type}}</td>
      <td>{{$transport->transport_number}}</td>
      
      <td>
      
         <a href="{{route('transport.edit', $transport->id)}}" class="btn btn-warning">Edit</a>
         <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('transport.delete', $transport->id)}}" class="btn btn-danger">Delete</a>
      
      </td>
      </th>
      </tr>
      
 @endforeach
</tbody>
</table>
{{$transports->links('pagination::bootstrap-4')}}
@endsection



