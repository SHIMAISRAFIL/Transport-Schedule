@extends('backend.master')
@section('content')


    <div>
    
<button class="btn btn-primary hidden-print" onclick="printDiv('printableArea')">
    <i class="bi bi-printer"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg> Print
</button>
    </div>
        <div id="printableArea">
            <h1>Fuel Calculation Information</h1>
    @if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif

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
        </tr>
        @endforeach
        </tbody>

    </table>
    </div>


    <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>


@endsection
