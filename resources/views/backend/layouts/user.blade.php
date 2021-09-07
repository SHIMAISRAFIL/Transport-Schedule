@extends('backend.master')

@section('content')
<h2>User List</h2>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Type</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
@foreach($user as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->role}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            
            <td>   <a href="" class="btn btn-success">View</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection