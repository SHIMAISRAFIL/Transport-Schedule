@extends('backend.master')

@section('content')




<h1>Fuel Cost Calculation</h1>




<a href="{{route('fuelcost.create')}}" class="btn btn-info">Calculate Fuel  </a>


<table class="table">
        <thead>
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