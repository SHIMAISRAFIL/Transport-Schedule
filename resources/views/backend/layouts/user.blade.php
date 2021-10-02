@extends('backend.master')

@section('content')
<h2>User List</h2>

<table class="table table-success table-striped">
<thead class="table table-dark">
       

        <tr>
            <th scope="col">SL</th>
            <th scope="col">Type</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            
            <th scope="col">Staus</th>
        </tr>
        </thead>
        <tbody>

@foreach($user as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->role}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            
            <td>   <a href="">Succesfully Login</a></td>
        </tr>
@endforeach
</tbody>
</table>
@endsection