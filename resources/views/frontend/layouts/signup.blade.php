@extends('frontend.master')

@section('contents')

<form action="{{route('user.signup.store')}}" type="form" method="Post" style="border:1px solid #ccc">


@csrf 

<body>
<style type="text/css">body {
  background-image:url("Frontend/images/userLoginImage.jpg");
  background-position:center;
  background-size:cover;
  background-repeat: no-repeat;
  
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
  font-family: 'Dancing Script', cursive!important;
}

.container {
    padding: 110px;
}
::placeholder { 
    color: #ffffff!important;
    opacity: 1; /* Firefox */
    font-size:20px!important;
}
.form-login {
    background-color: rgba(0,0,0,0.55);
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    color:white;
    box-shadow:0 1px 0 #cfcfcf;
}
.form-control{
    background:transparent!important;
    color:white!important;
    font-size: 20px!important;
}
h1{
    color:white!important;
}
h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}
.text-white{
    color: white!important;
}
.wrapper {
    text-align: center;
}
.footer p{
    font-size: 25px;
}</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div style="background-color:#41aaa2; height:400px; width:400px; border-radius:30px; text-align:center;" class="col-md-offset-4">
<h1 style="text-align:center; padding-top:30px; color:#ffffff;">Sign Up</h1>

@if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

<form action="{{route('user.signup.store')}}" type="form" method="Post">
<p>Please fill in this form to create an account.</p>

@csrf


<div class="col-sm-12" style="padding-top:10px;">
<input required type="text" class="form-control" id="name" placeholder="Enter Name" name="name" style="border-radius:15px;">
</div>

<div class="col-sm-12" style="padding-top:10px;">
<input required type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="border-radius:15px;">
</div>

<div class="col-sm-12" style="padding-top:10px;">
<input required type="text" class="form-control" id="address" placeholder="Enter Address" name="address" style="border-radius:15px;">
</div>

<div class="col-sm-12" style="padding-top:10px;">
<input required type="text" class="form-control" id="phone" placeholder="Enter Mobile No." name="phone" style="border-radius:15px;">
</div>
<div class="col-sm-12" style="padding-top:10px;">
<input required type="password" class="form-control" id="password" placeholder="Password" name="password" style="border-radius:15px;">
</div>
<br></br>
<p>By creating an account you agree to our  <a href="{{route('term')}}" style="color:dodgerred">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>

</body>
</form>



@endsection