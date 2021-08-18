@extends('backend.master')

@section('content')



<h1>Transport Info</h1>

<form action="{{route('transport.store')}}" method="post">
  @csrf
<div class="form-group">

    <label for="transport_type">Transport Type</label>

    <input name="transport_type" type="text" class="form-control" id="transport_type"  placeholder="Enter Transport Type"></div>

  <div class="form-group">

    <label for="transport_number">Transport No.</label>

    <input name="transport_number" type="number" class="form-control" id="transport_number"  placeholder="Enter Transport No."></div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection