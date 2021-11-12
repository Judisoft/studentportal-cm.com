<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>StudentPortal CM | SignUp</title>
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
<div class="theme-layout">
	
	<div class="authtication bluesh high-opacity">
		<div class="verticle-center">
			<div class="welcome-note">
				<div class="logo"><img src="images/logo.png" alt=""><span>StudPort</span></div>
				<h1>Welcome to StudentPortal</h1>
				<p>
					StudentPortal is a one and only plateform for students, teachers and Acdamic institutions. Every one can join this plateform free and share his/her ideas and research with everyone. 
				</p>
			</div>
			<div class="bg-image" style="background-image: url(images/resources/login-bg.png)"></div>
		</div>
	</div>
	<div class="auth-login">
		<div class="verticle-center">
			<div class="signup-form">
				<h4><i class="icofont-lock"></i> Singup</h4>
                <div id="notific">@include('notifications')</div>
				<form action="{{ route('register') }}" method="post" class="c-form">
                    <!-- CSRF Token -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<div class="row merged-10">
						<div class="col-lg-12"><h4>What type of user are you?</h4></div>
						<div class="col-lg-6 col-sm-6 col-md-6">
                            <small class="text-danger" id="first_name_error">{{ $errors->first('first_name', ':message') }}</small>
							<input type="text" name="first_name" placeholder="First Name">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
                            <small class="text-danger" id="last_name_error">{{ $errors->first('last_name', ':message') }}</small>
							<input type="text" name="last_name" placeholder="Last Name">
						</div>
						<div class="col-lg-12">
                            <small class="text-danger" id="email_error">{{ $errors->first('email', ':message') }}</small>
							<input type="text" name="email" placeholder="Email">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
                            <small class="text-danger" id="password_error">{{ $errors->first('password', ':message') }}</small>
							<input type="password" name="password" placeholder="Password">
						</div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <small class="text-danger" id="password_error">{{ $errors->first('password_confirm', ':message') }}</small>
							<input type="password" name="password_confirm" placeholder="Confirm Password">
						</div>
                        <div class="col-lg-12">
                            <small class="text-danger" id="user_type_error">{{ $errors->first('user_type', 'You must choose a user type') }}</small>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="radio" id="student" name="user_type" value="student">
							<label for="student">Student</label>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="radio" name="user_type" id="ngo" value="ngo">
							<label for="ngo">Corporate, non-academic</label>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="radio" name="user_type" id="medical" value="medical">
							<label for="medical">Teacher</label>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="radio" name="user_type" id="other"  value="other">
							<label for="other">Not a Researcher</label>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
                            <small class="text-danger" id="institution_error">{{ $errors->first('institution', ':message') }}</small>
							<input type="text" name="institution" placeholder="Institution or Company">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
                            <small class="text-danger" id="department_error">{{ $errors->first('department', ':message') }}</small>
							<input type="text" name="department" placeholder="Department">
						</div>
						<div class="col-lg-12">
							<input type="text" name="designation" placeholder="Designation: e.g Dr, Prof, Eng, etc">
						</div>
						<div class="col-lg-12">
							<div class="gender">
                                <small class="text-danger" id="gender_error">{{ $errors->first('gender', ':message') }}</small>
							  <input type="radio" id="male" name="gender" value="male">
							  <label for="male">Male</label>
							  <input type="radio" id="female" name="gender" value="female">
							  <label for="female">Female</label>
							</div>	
						</div>
						<div class="col-lg-12">
							<div class="checkbox">
								<input type="checkbox" id="checkbox" checked>
								<label for="checkbox"><span>I agree the terms of Services and acknowledge the privacy policy</span></label>
							</div>
							<button class="main-btn" type="submit"><i class="icofont-key"></i> Signup</button>
						</div>
                        <div class="col-lg-6">
							<div class="mt-3">
								<label><span>Already have an account? <a href="{{route('login')}}" class="text-primary">Login</a></span></label>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</div>
	
	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>
	

</body>	
</html>