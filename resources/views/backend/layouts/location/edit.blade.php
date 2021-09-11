@extends('backend.master')

@section('content')
                          


<h1>Update Location</h1>
                            
<form action="{{route('location.update', $locations->id)}}" method="post">
@method('put')
@csrf
  


  
<div class="form-group">
  
  <label for="location">Location name</label>

  <input value="{{ $locations->location}}" class="form-control" type="text" name="location" id="location" placeholder="Enter Location name">

</div>



<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection