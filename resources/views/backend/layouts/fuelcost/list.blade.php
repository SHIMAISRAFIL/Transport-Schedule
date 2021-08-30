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
         
            <th scope="col">Status</th>
            
        </tr>
        </thead>
        
    <tbody>

    @foreach($fuelcosts as $fuelcost)
        <tr>
            <th scope="row">{{$fuelcost->id}}</th>
            <th scope="row">{{$fuelcost->transportid}}</th>
            <th scope="row">{{$fuelcost->fueltype}}</th>
            <th scope="row">{{$fuelcost->fuelprice}}</th>
            <th scope="row">{{$fuelcost->fuelquantity}}</th>
            <th scope="row">{{$fuelcost->date}}</th>
            <th scope="row">{{$fuelcost->place}}</th>
          
            <td>{{$fuelcost->remarks}}</td>

            <td>{{$fuelcost->status}}</td>
            <td>
                <a href="" class="btn btn-success">View</a>
            </td>
        </tr>
        @endforeach
        </tbody>
</table> 

@endsection