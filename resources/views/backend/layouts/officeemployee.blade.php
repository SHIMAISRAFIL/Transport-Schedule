@extends('backend.master')

@section('content')




<h1>Office Employee List</h1>  <form action="{{route('search')}}" method="get">
                  
                        <input style="width: 100px;" type="text" placeholder="Search" name="search" class="form-control">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i></button>
                        </form>

@csrf
<table class="table table-success table-striped">
<thead class="table table-dark">
        
         <tr>
            <th scope="col">SL</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            
@foreach($user as $data)
             <tr>
             <th scope="row">{{$data->id}}</th></th>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->role}}</td>
                <td>   <a href="" class="btn btn-success">View</a></td>
             </tr>
@endforeach
</tbody>
</table>
@endsection