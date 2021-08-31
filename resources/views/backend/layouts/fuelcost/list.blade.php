@extends('backend.master')

@section('content')




<h1>Fuel Cost Calculation</h1>




<a href="{{route('fuelcost.create')}}" class="btn btn-info">Calculate Fuel  </a>


<table class="table">
        <thead>
        <tr>
            <th scope="col"> ID</th>
            
            <th scope="col">Transport Id</th>
            <th scope="col">Fuel Type</th>
            <th scope="col">Fuel Price</th>
            <th scope="col">Fuel Quantity</th>
            <th scope="col">Date</th>
            <th scope="col">Place</th>
            <th scope="col">Remarks</th>
            <th scope="col">Total</th>
            <th scope="col">Status</th>
            
        </tr>
        </thead>
        @foreach($fuelcosts as $fuelcost)

    @php
       $Total=$fuelcost->fuelprice*$fuelcost->fuelquantity;

    @endphp  
    <tbody>

   

   
        <tr>
            <th scope="row">{{$fuelcost->id}}</th>
            <th scope="row">{{$fuelcost->transportid}}</th>
            <th scope="row">{{$fuelcost->fueltype}}</th>
            <th scope="row">{{$fuelcost->fuelprice}} .BDT Per liter</th>
            <th scope="row">{{$fuelcost->fuelquantity}} Liter</th>
            <th scope="row">{{$fuelcost->date}}</th>
            <th scope="row">{{$fuelcost->place}}</th>
          
            <td>{{$fuelcost->remarks}}</td>
            <td>{{$Total}}.BDT</td>
            <td>{{$fuelcost->status}}</td>
            <td>
                <a href="" class="btn btn-success">View</a>
            </td>
        </tr>
        @endforeach
        </tbody>
</table> 

@endsection