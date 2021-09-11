@extends('backend.master')

@section('content')
      

<h1>Trip Under Schedules</h1>



<table class="table">
  <thead>
    <tr>
     
   
        
          
      
    </tr>
  </thead>
  <tbody>
   <hr>

            <tr>
            <th scope="col">Transport Number</th>
              <td>{{$regulartrips->transport->transport_number}}</td>
            </tr>

            <tr>
            <th scope="col">Location From</th>
                <td>{{$regulartrips->locationFrom->location}}</td>
             
            </tr>

            <tr>
            <th scope="col">Location To</th>
            <td>{{$regulartrips->locationTo->location}}</td>
             
            </tr>

          
      
        </tbody>
    </table>
@endsection