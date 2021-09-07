@extends('backend.master')

@section('content')
                          


<h1> Trip</h1>
                            
<form action="{{route('regulartrip.store')}}" method="post">
@csrf
  


                            <div class="form-group">
  
    <label for="transport_number">Select Transport No.</label>

    <select class="form-control" id="transport_number" name="transport_id">
    @foreach($transports as $transport)
				<option value="{{$transport->id}}">{{$transport->transport_number}}</option>
				@endforeach
    </select>

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

  
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
@endsection