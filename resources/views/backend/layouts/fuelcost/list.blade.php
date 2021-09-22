@extends('backend.master')

@section('content')




<h1>Fuel Info</h1>




<a href="{{route('fuelcost.create')}}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator" viewBox="0 0 16 16">
  <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
</svg>Calculate Fuel Cost  </a>


<table class="table table-success table-striped">

        <thead class="table table-dark">
        
        <tr>
            <th scope="col">SL</th>
            
            <th scope="col">Transport Number</th>
            <th scope="col">Fuel Type</th>
            <th scope="col">Fuel Price</th>
            <th scope="col">Fuel Quantity</th>
            <th scope="col">Date</th>
            <th scope="col">Place</th>
            <th scope="col">Remarks</th>
            <th scope="col">Total</th>
    
            <th scope="col">Action</th>
        </tr>
        </thead>
@foreach($fuelcosts as $key=> $fuelcost)

    @php
       $Total=$fuelcost->fuelprice*$fuelcost->fuelquantity;

    @endphp  
    <tbody>

     <tr>
            <th scope="row">{{$key+1}}

            <th scope="row">{{$fuelcost->transport->transport_number}}</th>
            <th scope="row">{{$fuelcost->fueltype}}</th>
            <th scope="row">{{$fuelcost->fuelprice}} .BDT Per liter</th>
            <th scope="row">{{$fuelcost->fuelquantity}} Liter</th>
            <th scope="row">{{$fuelcost->date}}</th>
            <th scope="row">{{$fuelcost->place}}</th>
          
            <td>{{$fuelcost->remarks}}</td>
            <td>{{$Total}}.BDT</td>
            
           
           
      <td>
          <a href="{{route ('fuelcost.edit', $fuelcost->id)}}" class="btn btn-warning">Edit</a>
          <a onclick="return confirm('Are you sure you want to delete this ?');" href="{{route('fuelcost.delete', $fuelcost->id)}}" class="btn btn-danger">Delete</a>
      </td>
      </th>  
      </tr>

@endforeach
</tbody>
</table> 

@endsection