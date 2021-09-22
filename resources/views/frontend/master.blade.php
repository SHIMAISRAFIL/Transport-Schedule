<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Transport Scheduling</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link href="{{url('backend/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="shortcut icon" href="{{url('frontend/images/favicon.ico')}}" />
		<link rel="stylesheet" href="{{url('frontend/booking/css/booking.css')}}">
		<link rel="stylesheet" href="{{url('frontend/css/camera.css')}}">
		<link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
		<script src="frontend/js/jquery.js"></script>
		<script src="frontend/js/jquery-migrate-1.2.1.js"></script>
		<script src="frontend/js/script.js"></script>
		<script src="frontend/js/superfish.js"></script>
		<script src="frontend/js/jquery.ui.totop.js"></script>
		<script src="frontend/js/jquery.equalheights.js"></script>
		<script src="frontend/js/jquery.mobilemenu.js"></script>
		<script src="frontend/js/jquery.easing.1.3.js"></script>
		<script src="frontend/js/owl.carousel.js"></script>
		<script src="frontend/js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="frontend/js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="frontend/booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '28.28125%',
					caption: true,
					navigation: true,
					fx: 'mosaic'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
			<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			

@include('frontend.partials.header')


@yield('contents')


		@include('frontend.partials.footer')


		