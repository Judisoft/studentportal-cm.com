<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>StudentPortal CM | Login</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">
	
	<div class="authtication bluesh high-opacity">
		<div class="bg-image" style="background-image: url(images/resources/login-bg3.jpg)"></div>
		<ul class="welcome-caro">
			<li class="welcome-box">
				<figure><img src="images/resources/login-1.png" alt=""></figure>
				<h4>Ask questions</h4>
				<p>
					Ask questions and get answers from teachers and other professionals.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="images/resources/login-2.png" alt=""></figure>
				<h4>Find study groups or Friends</h4>
				<p>
					Join Socimo and make your network of university or college fellows.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="images/resources/login-3.png" alt=""></figure>
				<h4>Sell Your Online paid Content</h4>
				<p>
					Sell your online lectures, videos, books and many more with StudentPortal .
				</p>
			</li>
			
		</ul>
	</div>
	<div class="auth-login">
		<div class="logo"><img src="images/logo.png" alt=""><span>StudPort CM</span></div>
		<div class="mockup left-bottom"><img src="images/mockup.png" alt=""></div>
		<div class="verticle-center">
			<div class="login-form">
				<h4><i class="icofont-key-hole"></i> Login</h4>
                <span class="float-right"><a href="{{route('forgot-password')}}" class="text-danger">Forgot Password?</a></span>
                <div id="notific">@include('notifications')</div>
                <form action="{{ route('login') }}" class="c-form" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <small class="text-danger" id="email_error">{{ $errors->first('email', ':message') }}</small>
					<input type="text" name="email" placeholder="Email" id="email" onchange="checkEmail()">
                    <small class="text-danger" id="password_error">{{ $errors->first('password', ':message') }}</small>
					<input type="password" name="password" placeholder="Password" id="password" onchange="checkPassword()">
					<div class="checkbox">
						<input type="checkbox" id="checkbox" checked>
						<label for="checkbox"><span>Remember Me</span></label>
					</div>
					<button class="main-btn" type="submit"><i class="icofont-key"></i> Login</button>
				</form>
                <span>Don't have an account? <a href="{{route('register')}}" class="text-danger">Sign Up</a></span>
			</div>
		</div>
		<div class="mockup right"><img src="images/star-shape.png" alt=""></div>
	</div>
	
</div>
	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>
    <script>
        function checkEmail() {
            var email = document.getElementById('email');
            if(email.value == ''){
                document.getElementById('email_error').innerHTML = 'Email cannot be empty';
            }
        }
        function checkPassword() {
            var password = document.getElementById('password');
            if(password.value == ''){
                document.getElementById('password_error').innerHTML = 'Password cannot be empty';
            } 
        }
    </script>
</body>	
</html>