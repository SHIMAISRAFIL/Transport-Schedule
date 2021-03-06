@extends('backend.master')

@section('content')




<h1>Driver</h1>

<a href="{{route('driver.create')}}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
</svg>Appoint New Drivers </a>

<table class="table table-success table-striped">

        <thead class="table table-dark">

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Driver Name</th>
      <th scope="col">Role</th>
      <th scope="col">Email Address</th>
      <th scope="col">Address</th>
      <th scope="col">Age</th>
      <th scope="col">License no.</th>
      <th scope="col">Experience years</th>
      <th scope="col">Phone no</th>
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  
  <tbody>
 @foreach($drivers as $key=>$driver)
    
     <tr>
      <th scope="row">{{$key+1}}
      
      <td>{{$driver->name}}</td>
      <td>{{$driver->role}}</td>
      <td>{{$driver->email}}</td>
      <td>{{$driver->address}}</td>
      <td>{{$driver->age}}</td>
      <td>{{$driver->license}}</td>
      <td>{{$driver->experience}}y</td>
      <td>{{$driver->phone}}</td>
  
      

      <td>
        
        <a href="{{route('driver.edit', $driver->id)}}" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this driver?');" href="{{route('driver.delete', $driver->id)}}" class="btn btn-danger">Delete</a>
      
      </td>
      </th>
      </tr>
@endforeach
</tbody>
</table>

@endsection

