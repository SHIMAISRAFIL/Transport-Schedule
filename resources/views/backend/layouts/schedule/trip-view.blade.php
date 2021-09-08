@extends('backend.master')

@section('content')
      

<h1>Trip Under Schedules</h1>



<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Transport Number</th>
            <th scope="col">Location From</th>
            <th scope="col">Location To</th>
      
    </tr>
  </thead>
  <tbody>
   
  @foreach($regulartrips as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->transport_number}}</td>
                <td>{{$data->locationfrom"}}</td>
                <td>{{$data->locationto"}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection