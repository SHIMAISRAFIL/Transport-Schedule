@extends('backend.master')

@section('content')



<h2> Update Transport Info</h2>

<form action="{{route('transport.update', $transports->id)}}" method="post" enctype="multipart/form-data">
 @method('PUT')
@csrf
  <div class="form-group">
          <label for="name">Select Driver </label>
         <select name="driver_id" class="form-control" id="driver_id" ></div>


 @foreach($drivers as $driver)

  <option 
  @if($transports->driver_id==$driver->id)
  selected
  @endif
  value="{{$driver->id}}">{{$driver->name}} </option>
 
@endforeach

</select>
</div>
<div class="form-group">

    <label for="transport_type">Transport Type</label>

    <input value="{{$transports->transport_type}}"name="transport_type" type="text" class="form-control" id="transport_type"  placeholder="Enter Transport Type"></div>

  <div class="form-group">

    <label for="transport_number">Transport No.</label>

    <input value="{{$transports->transport_number}}" name="transport_number" type="text" class="form-control" id="transport_number"  placeholder="Enter Transport No."></div>

    <div class="form-group">
                            <label for="description">Upload Product Image</label>
                            <input type="file" class="form-control" name="transport_image">
                          </div>

    
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection