@extends('backend.master')

@section('content')



<h1>Enter Info</h1>

<form action="{{route('admin.store')}}" method="post">
  @csrf
<div class="form-group">

    <label for="name">Name</label>

    <input name="name" type="text" class="form-control" id="name"  placeholder="Enter Name"></div>

  <div class="form-group">

    <label for="email">Email address</label>

    <input name="email" type="email" class="form-control" id="email"  placeholder="Enter Email"></div>

  <div class="form-group">

    <label for="address">Address</label>

    <input name="address" type="text" class="form-control" id="address"  placeholder="Enter Address"></div>

  <div class="form-group">

    <label for="phone">Phone</label>

    <input name="phone" type="number" class="form-control" id="phone"  placeholder="Enter Phone Number"> </div>


  <div class="form-group">
    
    <label for="Password">Password</label>

    <input name="password" type="password" class="form-control" id="Password" placeholder="Password"> </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection