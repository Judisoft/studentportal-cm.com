<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Socimo | Social Media Network Template</title>
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
	<div class="error-page">
		<div class="logo top-left"><img src="{{asset('images/logo.png')}}" alt=""><span>StudPort CM</span></div>
		<div id="container-inside">
		  <div id="circle-small"></div>
		  <div id="circle-medium"></div>
		  <div id="circle-large"></div>
		  <div id="circle-xlarge"></div>
		  <div id="circle-xxlarge"></div>
	  	</div>
		<div class="error-data">
			<figure><img src="images/resources/error.png" alt=""></figure>
			<h1>Page Not Found</h1>
			<a class="main-btn" href="{{route('home')}}" title="">Go Back to Home</a>
		</div>
	</div>	
</div>
	
	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>
	

</body>	

</html>