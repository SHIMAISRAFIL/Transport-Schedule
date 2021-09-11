@extends('backend.master')

@section('content')



<h1>Update Driver Info</h1>
<form action="{{route('driver.update', $drivers->id)}}" method="post">
  @method('PUT')
  @csrf
<div class="form-group">

    <label for="name">Name</label>

    <input value="{{$drivers->name}}"  name="name" type="text" class="form-control" id="name"  placeholder="Enter Name"></div>
    
    <div class="form-group">

    <label for="email">Email address</label>

    <input value="{{$drivers->email}}"  name="email" type="email" class="form-control" id="email"  placeholder="Enter Email"></div>
   
  

  <div class="form-group">

    <label for="address">Address</label>

    <input value="{{$drivers->address}}"  name="address" type="text" class="form-control" id="address"  placeholder="Enter Address"></div>

    <div class="form-group">
    <div class="form-group">

<label for="age">Age</label>

<input value="{{$drivers->age}}"  name="age" type="number" class="form-control" id="age"  placeholder="Enter age"></div>


    <label for="license">License</label>

    <input value="{{$drivers->license}}"  name="license" type="number" class="form-control" id="license"  placeholder="Enter License"></div>
    <div class="form-group">

<label for="experience">Experience Years</label>

<input value="{{$drivers->experience}}"  name="experience" type="number" class="form-control" id="experience"  placeholder="Enter Expeirince Years"></div>
  <div class="form-group">

    <label for="phone">Phone</label>

    <input value="{{$drivers->phone}}"  name="phone" type="number" class="form-control" id="phone"  placeholder="Enter Phone Number"> </div>


  <div class="form-group">
    
    <label for="Password">Password</label>

    <input value="{{$drivers->password}}"  name="password" type="password" class="form-control" id="Password" placeholder="Password"> </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection