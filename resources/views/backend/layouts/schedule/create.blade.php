@extends('backend.master')

@section('content')
                          


<h1>Schedule</h1>
                            
<form action="{{route('schedule.store')}}" method="post">
@csrf
<div class="form-group">
  
    <label for="transport_number">Select Transport No.</label>

    <select class="form-control" id="transport_number" name="transport_id">
    @foreach($transports as $transport)
				<option value="{{$transport->id}}">{{$transport->transport_number}}</option>
				@endforeach
    </select>
    <div class="form-group">
    <label for="date">Date </label>
    <input name='date' id='date' type="date" class="form-control" placeholder="Enter Date">
  </div>

  <div class="form-group">
    <label for="locationfrom">Location From</label>
    <select class="form-control" name ="locationfrom" id="locationfrom">
    
    @foreach($locations as $location)
				<option value="{{$location->id}}">{{$location-> location}}</option>
				@endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="locationto">Location To</label>
    <select class="form-control" name="locationto" id="locationto">
    
    @foreach($locations as $location)
				<option value="{{$location->id}}">{{$location->location}}</option>
				@endforeach
    </select>
  </div>



  

  <div class="form-group">
  
    <label for="pickuptime">PickUpTime</label>

    <input class="form-control" type="time" name="pickuptime" id="pickuptime" placeholder="Enter PickUp Time">

  </div>

  <div class="form-group">
  
  <label for="droptime">DropTime</label>

  <input class="form-control" type="time" name="time" id="time" placeholder="Enter Time">

</div>


  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
@endsection