@extends('frontend.master')

@section('contents')

<form action="{{route('user.signup.store')}}" type="form" method="Post" style="border:1px solid #ccc">


@csrf 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div style="background-color:#41aaa2; height:400px; width:400px; border-radius:30px; text-align:center;" class="col-md-offset-4">
<h1 style="text-align:center; padding-top:30px; color:#ffffff;">Sign Up</h1>
<p>Please fill in this form to create an account.</p>


<div class="col-sm-12" style="padding-top:10px;">
<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" style="border-radius:15px;">
</div>

<div class="col-sm-12" style="padding-top:10px;">
<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="border-radius:15px;">
</div>

<div class="col-sm-12" style="padding-top:10px;">
<input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" style="border-radius:15px;">
</div>

<div class="col-sm-12" style="padding-top:10px;">
<input type="text" class="form-control" id="phone" placeholder="Enter Mobile No." name="phone" style="border-radius:15px;">
</div>
<div class="col-sm-12" style="padding-top:10px;">
<input type="password" class="form-control" id="password" placeholder="Type your Password" name="password" style="border-radius:15px;">
</div>
<p>By creating an account you agree to our  <a href="#" style="color:dodgerred">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>

<!-- <button class="col-md-4 col-md-offset-4 btn" style="background-color:#ffffff; color:#626a69; font-size:20px; margin-top:10px;" type="button"> Submit
</button>
</div> -->
<!-- <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label><br>
    <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
   
    <label for="email"><b>Email</b></label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email" required>

    <label for="address"><b>Address</b></label>
    <input type="text" class="form-control" placeholder="Enter Address" name="address" required>

    <label for="phone"><b>Phone</b></label>
    <input type="number" class="form-control" placeholder="Enter Phone no." name="phone" required>

    <label for="password"><b> Password</b></label>
    <input type="password" class="form-control"  placeholder="Enter Password"  name="password" required>

   

    <p>By creating an account you agree to our  <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form> -->
@if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif 



@endsection