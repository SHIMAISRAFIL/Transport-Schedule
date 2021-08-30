@extends('backend.master')

@section('content')
                          


<h1>Create Category</h1>
                            
<form action="{{route('location.store')}}" method="post">
@csrf
  

  <div class="form-group">
  
    <label for="location">Location name</label>

    <input class="form-control" type="text" name="location" id="location" placeholder="Enter Location name">

  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
@endsection