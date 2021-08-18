@extends('backend.master')

@section('content')

<h1>Create Products</h1>
<form action="{{route('product.store')}}" method="post">
<!-- work for association -->
@csrf
<div class="form-group">
          <label for="name">Select Category </label>
         <select name="category_id" class="form-control" id="" ></div>


 @foreach($categories as $cat)

  <option value="{{$cat->id}}">{{$cat->name}} </option>
 
@endforeach
</select>
</div>

<div class="form-group">
          <label for="name">Name</label>
         <input name="name" type="text" class="form-control" id="name"  placeholder="Enter Product name"></div>
           
         <div class="form-group">
       <label for="price">Product Price</label>
        <input name="price" type="number" class="form-control" id="price"  placeholder="Enter Product Price"></div>
        <div class="form-group">
                <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" placeholder="Enter product description" ></textarea>
             </div>
                    
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Submit</button>
            </div>

 
@endsection