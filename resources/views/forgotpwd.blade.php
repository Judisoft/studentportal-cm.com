<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/socimo/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Nov 2021 04:14:46 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>StudentPortal CM | Forgot Password</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

</head>
<body>
<div class="page-loader" id="page-loader">
  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>
</div><!-- page loader -->
<div class="theme-layout gray-bg">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-8">
				<div class="forget-password">
					<figure class="logo"><img src="images/logo.png" alt=""><span>StudPort</span></figure>
					<div class="pass-form">
						<h4>Request a Password Reset</h4>
                        <div id="notific">@include('notifications')</div>
						<form action="{{ route('forgot-password') }}" method="post">
                            {!! Form::token() !!}
							<label><i class="icofont-envelope"></i></label>
							<input type="text" name="email" placeholder="Email Address">
							<button class="main-btn" type="submit">Reset Password</button>
						</form>
						<span>Go Back To <a href="{{route('login')}}">Sign In</a></span>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<figure class="bottom-mockup"><img alt="" src="images/footer.png"></figure>
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="">&copy; copyright All rights reserved by StudentPortal <script>document.write(new Date().getFullYear())</script></span>
				</div>
			</div>
		</div>
	</div>
	
</div>
	<script src="js/main.min.js"></script>
	<script src="js/sparkline.js"></script>
	<script src="js/chart.js"></script>
	<script src="js/script.js"></script>

</body>	
</html>