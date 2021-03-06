@extends('backend.master')

@section('content')




<h1>Schedule info</h1>



<div>

<div style="display: flex; justify-content:space-between;  padding: 8px;">
<a href="{{route('schedule.create')}}" class="btn btn-info" style="height: 55px; margin: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>Arrange Schedule</a>
<br></br>





<form action="{{route('schedule.search')}}" method="get">
<div style="display: flex; justify-content: space-between">

<input style="width: 155px;" type="date" placeholder="Search" name="search" class="form-control">
<button type="submit" class="btn btn-primary">
   <i class="fa fa-search"></i>Search Schedule</button>
</div>
</form>
</div>
</div>


<table class="table table-success table-striped">

        <thead class="table table-dark">

        <tr>
            <th scope="col">SL</th>
            <th scope="col">Transport Number</th>
            <th scope="col">Date</th>
            <th scope="col">Location From</th>
            <th scope="col">Location To</th>
            <th scope="col">PickupTime</th>
            <th scope="col">DropTime</th>
           
            <th scope="col">Action</th>
        </tr>
        </thead>
        
    <tbody>

@foreach($schedules as $key=>$schedule)
        
           <tr>
            <th scope="row">{{$key+1}}

      
            <th scope="row">{{$schedule->transport->transport_number}}
            <td>{{$schedule->date}}</td>
            <td>{{$schedule->locationFrom->location}}</td>
            <td>{{$schedule->locationTo->location}}</td>
            <td>{{$schedule->pickuptime}}</td>
            <td>{{$schedule->droptime}}</td>

            <td> 
            <!-- <a href="{{route('driver.transport', $schedule->id)}}" class="btn btn-primary">View</a> -->
              <a href="{{route('schedule.edit', $schedule->id)}}" class="btn btn-warning">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this ?');" href="{{route('schedule.delete', $schedule->id)}}" class="btn btn-danger">Delete</a>
            
            </td>
            </th>
            </tr>
@endforeach
 </tbody>
 </table> 


@endsection