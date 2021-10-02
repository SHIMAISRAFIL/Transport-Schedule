@extends('frontend.master')

@section('contents')
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
  background-image:url('https://taxreply.com/images/taxreply-181.jpg');
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

            <h1 class='text-white'> Login Form</h1>
            @if(session()->has('message'))
                <span class="alert alert-danger">{{session()->get('message')}}</span>
            @endif
            
        <form action="{{route('officeemployee.login.store')}}" method="post">    
            @csrf
            <div class="form-login"></br>
                <h4>Secure Login</h4>
                </br>

                <input type="email" name="email" id="email" class="form-control input-sm chat-input" placeholder="email"/>
                </br></br>
                <input type="password" name="password" id="password" class="form-control input-sm chat-input" placeholder="password"/>
                </br></br>
                <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me
                    </div>
                <div class="wrapper">
                        <span class="group-btn">
                            <input type="submit" value="Login" class="btn btn-danger btn-md"> <i class="fa fa-sign-in"></i></a>
                        </span>
                </div>
                <a href="{{route('user.signup')}}" class="btn btn-primary">Create New Account</a>
            </div>
        </form>
        </div>
    </div>
    </br></br></br>
    <!--footer-->
    <div class="footer text-white text-center">
     
    </div>
    <!--//footer-->
</div>




@endsection