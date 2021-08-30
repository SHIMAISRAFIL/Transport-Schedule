@extends('backend.master')

@section('content')
                          


<h1>Schedule</h1>
                            
<form action="{{route('schedule.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="date">Date </label>
    <input name='date' id='date' type="date" class="form-control" placeholder="Enter Date">
  </div>
  

  <div class="form-group">
  
    <label for="time">Time</label>

    <input class="form-control" type="time" name="time" id="time" placeholder="Enter Time">

  </div>

  <div class="form-group">
  
    <label for="location">Location</label>

    <input class="form-control" type="text" name="location" id="location" placeholder="Enter Location">

  </div>


  <div class="form-group">
  
    <label for="transport_number">Transport</label>

    <input class="form-control" type="text" name="transport_number" id="transport_number" placeholder="Enter Transport Number">

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
@endsection