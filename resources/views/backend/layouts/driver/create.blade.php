@extends('backend.master')

@section('content')



<h1> Driver Info</h1>
<form action="{{route('driver.store')}}" method="post">
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
    <div class="form-group">

<label for="age">Age</label>

<input name="age" type="number" class="form-control" id="age"  placeholder="Enter age"></div>


    <label for="license">License</label>

    <input name="license" type="number" class="form-control" id="license"  placeholder="Enter License"></div>
    <div class="form-group">

<label for="experience">Experience Years</label>

<input name="experience" type="number" class="form-control" id="experience"  placeholder="Enter Expeirince Years"></div>
  <div class="form-group">

    <label for="phone">Phone</label>

    <input name="phone" type="number" class="form-control" id="phone"  placeholder="Enter Phone Number"> </div>


  <div class="form-group">
    
    <label for="Password">Password</label>

    <input name="password" type="password" class="form-control" id="Password" placeholder="Password"> </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection