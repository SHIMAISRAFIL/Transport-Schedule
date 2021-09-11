@extends('backend.master')

@section('content')
                          


<h1>update Trip Info</h1>
                            
<form action="{{route('regulartrip.update', $regulartrips->id)}}" method="post">
@method('put')
@csrf
  


    <div class="form-group">
  
    <label for="transport_number">Select Transport No.</label>

    <select value="{{ $regulartrips->transport_number}}" class="form-control" id="transport_number" name="transport_id">
    @foreach($transports as $transport)
				<option value="{{$transport->id}}">{{$transport->transport_number}}</option>
				@endforeach
    </select>

  <div class="form-group">
    <label for="locationfrom">Location From</label>
    <select class="form-control" name ="locationfrom" id="locationfrom">
    
    @foreach($locations as $location)
				<option value="{{ $regulartrips->locationfrom}}"  value="{{$location->id}}">{{$location-> location}}</option>
				@endforeach
    </select>
  </div>

  
  <div class="form-group">
    <label for="locationto">Location To</label>
    <select value="{{ $regulartrips->locationto}}"  class="form-control" name="locationto" id="locationto">
    
    @foreach($locations as $location)
				<option value="{{$location->id}}">{{$location->location}}</option>
				@endforeach
    </select>
  </div>

  
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
@endsection