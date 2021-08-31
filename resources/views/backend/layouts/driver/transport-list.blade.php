@extends('backend.master')

@section('content')
      

<h1>Transports Under Driver</h1>



<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Transport Number</th>
      <th scope="col">Transport Type</th>
      
    </tr>
  </thead>
  <tbody>
   
  @foreach($transports as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->transport_number}}</td>
                <td>{{$data->transport_type}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection