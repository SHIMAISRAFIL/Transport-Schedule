@extends('backend.master')

@section('content')
                          


<h1>Create Category</h1>
                            
<form action="{{route('category.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="name">Enter Category Name </label>
    <input name='name' id='name' type="text" class="form-control" placeholder="Category Name">
  </div>
  

  <div class="form-group">
  
    <label for="description">Description</label>

    <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>

  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
@endsection