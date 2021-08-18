@extends('backend.master')

@section('content')
      

<h1>Products Under Categories</h1>



<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      
    </tr>
  </thead>
  <tbody>
   
  @foreach($products as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->price}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection