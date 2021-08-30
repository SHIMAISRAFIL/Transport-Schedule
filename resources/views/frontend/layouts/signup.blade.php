@extends('frontend.master')

@section('contents')

<form action="{{route('user.signup.store')}}" type="form" method="Post" style="border:1px solid #ccc">


@csrf 
<div class="container">
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
</form>
@if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif 



@endsection