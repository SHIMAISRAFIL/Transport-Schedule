


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="">
    <meta name="author" content="leamug">
    <title> Login Form </title>
    <link href="css/style.css" rel="stylesheet" id="style">
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    
<style type="text/css">body {
  background-image:url("Frontend/images/userLoginImage.jpg");
  background-position:center;
  background-size:cover;
  
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

<!-- Page Content -->



<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-4 text-center">

        <h1 class='text-white'> Signup Form</h1>
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
@csrf
<p>Please fill in this form to create an account.</p>
            <div class="form-login"></br>
                <h4>Give Required Information</h4>
                </br>

                <input required type="text" class="form-control" id="name" placeholder="Enter Name" name="name" style="border-radius:15px;">
                </br></br>
                <input required type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="border-radius:15px;">
                </br></br>
                <input required type="text" class="form-control" id="address" placeholder="Enter Address" name="address" style="border-radius:15px;">
                </br></br>
                <input required type="text" class="form-control" id="phone" placeholder="Enter Mobile No." name="phone" style="border-radius:15px;">
                </br></br>
                <input required type="password" class="form-control" id="password" placeholder="Password" name="password" style="border-radius:15px;">
                </br></br>
                
                            <p>By creating an account you agree to our  <a href="{{route('term')}}" style="color:red">Terms & Privacy</a>.</p>

<div class="clearfix">
  <button type="button" class="btn btn-primary btn-md">Cancel</button>
  <button type="submit" class="btn btn-primary btn-md">Sign Up</button>
</div>

        </form>
        </div>
    </div>
    </br></br></br>
    <!--footer-->
    <div class="footer text-white text-center">
     
    </div>
   


