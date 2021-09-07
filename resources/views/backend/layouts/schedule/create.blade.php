@extends('backend.master')

@section('content')
                          


<h1>Schedule</h1>
                            
<form action="{{route('schedule.store')}}" method="post">
@csrf
<div class="form-group">
  
  <label for="regulartrip_id">Trip Id</label>

  <select class="form-control" id="regulartrip_id" name="regulartrip_id">
  @foreach($regulartrips as $regulartrip)
      <option value="{{$regulartrip->id}}">{{$regulartrip->id}}</option>
      @endforeach
  </select>

</div>

<div class="form-group">
    <label for="date">Date </label>
    <input name='date' id='date' type="date" class="form-control" placeholder="Enter Date">
  </div>
  

  <div class="form-group">
  
    <label for="time">Time</label>

    <input class="form-control" type="time" name="time" id="time" placeholder="Enter Time">

  </div>




  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
@endsection