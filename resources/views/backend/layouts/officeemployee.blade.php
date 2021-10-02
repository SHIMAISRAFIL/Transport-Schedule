@extends('backend.master')

@section('content')




<h1>Office Employee List</h1>  
<form action="{{route('officeemployee.search')}}" method="get">
   <div style="width: 356px; margin:10px;">
<div style="display: flex; justify-content:space-between;">
                        <input style="width: 140px;" type="text" placeholder="Search" name="search" class="form-control">
                        <button type="submit" class="btn btn-primary">
                           <i class="fa fa-search"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></i>Search Officeemployee</button>
</div>
   </div>
 </form>

@csrf
<table class="table table-success table-striped">
<thead class="table table-dark">
        
         <tr>
            <th scope="col">SL</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            <th scope="col">Staus</th>
        </tr>
        </thead>
        <tbody>
            
@foreach($user as $data)
             <tr>
             <th scope="row">{{$data->id}}</th></th>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->role}}</td>

                <td>   <a href="" >View</a></td>
             </tr>
@endforeach
</tbody>
</table>
@endsection