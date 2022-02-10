<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>StudPort CM - Home</title>
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
	
	<div class="responsive-header">
		<div class="logo res"><img src="images/logo.png" alt=""><span>StudPort CM</span></div>
		<div class="right-compact">
			<div class="sidemenu">
				<i><svg id="side-menu2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
			</div>
			<div class="res-search">
				<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
			</div>
			
		</div>
		<div class="restop-search">
			<span class="hide-search"><i class="icofont-close-circled"></i></span>
			<form method="post">
				<input type="text" placeholder="Search...">
			</form>
		</div>
	</div><!-- responsive header -->
	
	<header class="transparent">
		<div class="topbar">
			<div class="logo"><img src="images/logo.png" alt=""><span>StudPort CM</span></div>
			<div class="searches">
				<form method="post">
					<input type="text" placeholder="Search...">
					<button type="submit"><i class="icofont-search"></i></button>
					<span class="cancel-search"><i class="icofont-close"></i></span>
					<div class="recent-search">
						<h4 class="recent-searches">Your's Recent Search</h4>
						<ul class="so-history">
							<li>
								<div class="searched-user">
									<span>Maria K</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>
							<li>
								<div class="searched-user">
									<span>Fawad Khan</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>
							<li>
								<div class="searched-user">
									<span>Jack Carter</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>
						</ul>
					</div>
				</form>
			</div>
			<ul>
				@if(Sentinel::guest())
				<li><a class="join-butn" href="{{route('login')}}" title="">Login</a></li>
				@else
				<li><a class="join-butn" href="{{route('my-account')}}" title="">My News Feed</a></li>
				@endif

				<li><a href="#" title="">help center</a></li>
				<li><a href="#" title=""><img src="images/flags/US.png" alt=""> English</a></li>
			</ul>
		</div>
	</header>
	
	<nav class="sidebar">
		<ul class="menu-slide">
			<li class="active menu-item-has-children">
				<a class="" href="#" title="">
					<i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></i> Home
				</a>
				<ul class="submenu">
					<li><a href="index-2.html" title="">Newsfeed</a></li>
					<li><a href="company-home.html" title="">Company Home</a></li>
					<li><a href="profile-page2.html" title="">User Profile</a></li>
					<li><a href="profile.html" title="">Student User Profile</a></li>
					<li><a href="groups.html" title="">Groups</a></li>
					<li><a href="group-detail.html" title="">Group Detail</a></li>
					<li><a href="post-detail.html" title="">Social Post Detail</a></li>
					<li><a href="messages.html" title="">Chat/Messages</a></li>
					<li><a href="notifications.html" title="">Notificatioins</a></li>
					<li><a href="search-result.html" title="">Search Result</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children">
				<a class="" href="#" title="">
					<i class=""><svg id="ab7" class="feather feather-zap" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></i> Features
				</a>
				<ul class="submenu">
					<li><a href="videos.html" title="">Videos</a></li>
					<li><a href="live-stream.html" title="">Live Stream</a></li>
					<li><a href="event-page.html" title="">Events Page</a></li>
					<li><a href="event-detail.html" title="">Event Detail</a></li>
					<li><a href="Q-A.html" title="">QA</a></li>
					<li><a href="Q-detail.html" title="">QA Detail</a></li>
					<li><a href="help-faq.html" title="">Support Help</a></li>
					<li><a href="help-faq-detail.html" title="">Support Detail</a></li>
				</ul>
			</li>
			
			<li class="menu-item-has-children">
				<a class="" href="#" title="">
					 <i class="">
<svg id="ab5" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></i> Market Place
				</a>
				<ul class="submenu">
					<li><a href="books.html" title="">Books</a></li>
					<li><a href="book-detail.html" title="">Books Detail</a></li>
					<li><a href="courses.html" title="">Course</a></li>
					<li><a href="course-detail.html" title="">course Detail</a></li>
					<li><a href="add-new-course.html" title="">Add New Course</a></li>
					<li><a href="product-cart.html" title="">Cart Page</a></li>
					<li><a href="product-checkout.html" title="">Checkout</a></li>
					<li><a href="add-credits.html" title="">Add Credit</a></li>
					<li><a href="pay-out.html" title="">Payouts</a></li>
					<li><a href="price-plan.html" title="">Pricing Plans</a></li>
					<li><a href="invoice.html" title="">Invoice</a></li>
					<li><a href="thank-you.html" title="">Thank you Page</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children">
				<a class="" href="#" title="">
					 <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
						</i> Blogs
				</a>
				<ul class="submenu">
					<li><a href="blog.html" title="">Blog</a></li>
					<li><a href="blog-detail.html" title="">Blog Detail</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children">
				<a class="" href="#" title="">
					<i><svg id="ab8" class="feather feather-file" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/></svg></i> Featured Pages
				</a>
				<ul class="submenu">
					<li><a href="404.html" title="">Error 404</a></li>
					<li><a href="coming-soon.html" title="">Coming Soon</a></li>
					<li><a href="send-feedback.html" title="">Send Feedback</a></li>
					<li><a href="badges.html" title="">Badges</a></li>
					<li><a href="thank-you.html" title="">Thank You</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children">
				<a class="" href="#" title="">
					<i class="">
					<svg id="ab9" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></i> Authentications
				</a>
				<ul class="submenu">
					<li><a href="sign-in.html" title="">Sign In</a></li>
					<li><a href="signup.html" title="">Sign Up</a></li>
					<li><a href="forgot-password.html" title="">Forgot Password</a></li>
				</ul>
			</li>
			<li class="">
				<a class="" href="about-university.html" title="">
					<i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i> University Profile
				</a>
			</li>
			<li class="">
				<a class="" href="messages.html" title="">
					<i class="">
<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg" id="ab2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" style="stroke-dasharray: 68, 88; stroke-dashoffset: 0;"/></svg></i> Live Chat
				</a>
			</li>
			<li class="">
				<a class="" href="privacy-n-policy.html" title=""><i class="">
<svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></i> Privacy Polices
				</a>
			</li>
			<li class="">
				<a class="" href="settings.html" title=""><i class="">

<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></i> Web Settings
				</a>
			</li>
			<li class="menu-item-has-children">
				<a class="#" href="#" title="">
					<i class="">
					<svg id="team" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg></i> Development Tools
				</a>
				<ul class="submenu">
					<li><a href="widgets.html" title="">Widgets Collection</a></li>
					<li><a href="development-component.html" title="">Web Component</a></li>
					<li><a href="development-elements.html" title="">Web Elements</a></li>
					<li><a href="loader-spiners.html" title="">Loader Spiners</a></li>
				</ul>
			</li>
			
		</ul>
	</nav><!-- nav sidebar -->
	
	<section>
		<div class="gap overlap nogap mate-black low-opacity">
			<div class="bg-image" style="background-image: url(images/resources/home.jpg)"></div>
			<div class="feature-meta">
				<h1>Building Digital <span>Communities</span> for academic excellence</h1>
				<h3>stay connected with <span></span></h3>
				<a href="{{route('register')}}" title="" class="main-btn" data-ripple="">Join Free</a>
			</div>
		</div>	
	</section>
	
	<section>
		<div class="gap no-bottom grey-bg nogap">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="info-sec">
							<i class="icofont-support-faq"></i>
							<div>
								<h6>Learn from experienced instructors</h6>
								<p>Ask questions and receive answers from professional experts and receive the support you need.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="info-sec">
							<i class="icofont-hard-disk"></i>
							<div>
								<h6>Find all resources you need</h6>
								<p>We have a collection of lecture notes, research papers, books, past examination questions and all that a student needs</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="info-sec">
							<i class="icofont-live-support"></i>
							<div>
								<h6>Support and Orientation</h6>
								<p>We provide real-time support to meet your urgent academic needs. We are available to assist you succeed, we're just a click away</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="gap no-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner-full">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="funfact-counter">
										<i class="icofont-teacher"></i>
										<span class="counter">599</span>
										<em>Instructors</em>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="funfact-counter">
										<i class="icofont-group-students"></i>
										<span class="counter">299</span>
										<em>Students</em>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="funfact-counter">
										<i class="icofont-users"></i>
										<span class="counter"></span>
										<em>Researchers</em>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="funfact-counter">
										<i class="icofont-university"></i>
										<span class="counter">12</span>
										<em>Institutions</em>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- funfacts -->
	
	<section>
		<div class="gap no-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7">
						<div class="verticle-center">
							<div class="measure">
								<h1>Access over 1000+ study resources</h1>
								<p class="pb-2">
									Explore our collection of <a href="#">books</a>, <a href="#">course handouts</a>, <a href="#">examination past questions</a> and much more.
								</p>
								<div class="mt-2 mb-5">
									<a href="#" class="button p-3 success">Explore resources <i class="icofont-arrow-right"></i></a>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-lg-5 col-md-5">
						<figure class="side-image">
							<img src="images/resources/research-avatar.jpg" alt="">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<figure class="side-image">
							<img src="images/resources/main-pic.png" alt="">
						</figure>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="verticle-center">
							<div class="measure right">
								<h1>Connect with what drives your passion</h1>
								<p class="pt-2">
									<a href="#" title="">Engineering</a>
									<a href="#" title="">mathamatics</a>
									<a href="#" title="">biology</a>
									<a href="#" title="">computer science</a>
									<a href="#" title="">climate</a>
									<a href="#" title="">medicine</a>
									<a href="#" title="">Physics</a>
									<a href="#" title="">sociology</a>
									<a href="#" title="">chemistry</a>
									<a href="#" title="">music</a>
                                    <a href="#" title="">anthropology</a>
									<a href="#" title="">linguistics</a>
									<a href="#" title="">finance</a>
									<a href="#" title="">management</a>
									<a href="#" title="">politics</a>
									<a href="#" title="">astrology</a>
									<a href="#" title="">telecommunications</a>
									<a href="#" title="">law</a>
									<a href="#" title="">culture</a>
									<a href="#" title="">business</a>
									<a href="#" title="">marketing</a>
									<a href="#" title="" class="bg-info text-light">explore more <span class="icofont-plus"></span></a>
								</p>

							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="gap mate-black high-opacity">
			<div class="bg-image" style="background-image: url(images/resources/post-detail.jpg)" data-velocity=".2"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="welcome-parallax">
							<h2 style="font-weight:700;">Prepare for your Tests and Exams</h2>
							<span>Get all the resources and help you need to succeed</span>
							<a href="#" title="" class="main-btn" data-ripple="">Get Started Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- parallax section -->
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row remove-ext30">
					<div class="col-lg-12">
						<div class="title">
							<h1>Find an instructor that meets your needs</h1>
							<p>Our highly qualified tutors are readily available to help to meet your academic goals</p>
						</div>
					</div>
					<div>
						<div class="row col-xs-6 merged-10">
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="members">
									<figure><img alt="" src="images/resources/speak-1.jpg"></figure>
									<span>Amy Watson</span>
									<ins>Department of Sociology</ins>
									<a data-ripple="" title="" href="#">view profile</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="members">
									<figure><img alt="" src="images/resources/speak-2.jpg"></figure>
									<span>Muhammad A.</span>
									<ins>Department of Astrlogy</ins>
									<a data-ripple="" title="" href="#">view profile</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="members">
									<figure><img alt="" src="images/resources/speak-3.jpg"></figure>
									<span>Sara Jean</span>
									<ins>Department of Sociology</ins>
									<a data-ripple="" title="" href="#">view profile</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="members">
									<figure><img alt="" src="images/resources/speak-4.jpg"></figure>
									<span>William Jhon</span>
									<ins>Department of Biology</ins>
									<a data-ripple="" title="" href="#">view profile</a>
								</div>
							</div>
						</div>
						<div class="sp sp-bars"></div>
					</div>
					<div class="main-wraper">
						<div class="user-post">
							<div class="friend-info">
								<figure>
									<i class="icofont-university"></i>
								</figure>
								<div class="friend-name">
									<ins><a title="" href="time-line.html">Partner Institutions</a></ins>
									<span><i class="icofont-runner-alt-1"></i> Trusted by state and private institutions</span>
								</div>
								<ul class="suggested-caro">
									<li>
										<figure><img src="images/resources/uni1.jpg" alt=""></figure>
										<span>University of Bamenda</span>
										<ins>13 Departments</ins>
										<a href="#" title="" data-ripple="">view all programs and courses</a>
									</li>
									<li>
										<figure><img src="images/resources/uni4.jpg" alt=""></figure>
										<span>University of Yaounde I</span>
										<ins>23 Departments</ins>
										<a href="#" title="" data-ripple="">view all programs and courses</a>
									</li>
									<li>
										<figure><img src="images/resources/uni3.jpg" alt=""></figure>
										<span>StudPort University Institute</span>
										<ins>43 Departments</ins>
										<a href="#" title="" data-ripple="">view all programs and courses</a>
									</li>
									<li>
										<figure><img src="images/resources/uni4.jpg" alt=""></figure>
										<span>University of Douala</span>
										<ins>42 Departments</ins>
										<a href="#" title="" data-ripple="">view all programs and courses</a>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- suggested groups -->
				</div>
			</div>
		</div>
	</section><!-- Tutors -->
	
	<section>
		<div class="gap no-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title">
							<h1>Our Impact Story!</h1>
							<p>What students and academic institutions have to say about us</p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="student-review">
							<div class="review-item">
								<figure><img src="images/resources/commenter-1.jpg" alt=""></figure>
								<h6>Emma Watson</h6>
								<span>Student of Botony</span>
								<p>
									"I am completely blown away. I have gotten at least 50 times the value from studentportal" 
								</p>
							</div>
							<div class="review-item">
								<figure><img src="images/resources/commenter-2.jpg" alt=""></figure>
								<h6>John Doe</h6>
								<span>Student of Chemistry</span>
								<p>
									"Studentportal is the most valuable business resource we have EVER purchased. Your company is truly upstanding and is behind its product 100%. You've saved our business!"	 
								</p>
							</div>
							<div class="review-item">
								<figure><img src="images/resources/commenter-3.jpg" alt=""></figure>
								<h6>Eric Watson</h6>
								<span>Student of Mathematics</span>
								<p>
									"This is simply unbelievable! Studentportal is awesome!" 
								</p>
							</div>
							<div class="review-item">
								<figure><img src="images/resources/commenter-1.jpg" alt=""></figure>
								<h6>Emma Watson</h6>
								<span>Student of Theatre Arts</span>
								<p>
									"I don't always clop, but when I do, it's because of studentportal. I am really satisfied with my studentportal. It's exactly what I've been looking for. This is simply unbelievable!" 
								</p>
							</div>
							<div class="review-item">
								<figure><img src="images/resources/commenter-2.jpg" alt=""></figure>
								<h6>Emma Watson</h6>
								<span>Student of Modern Letters</span>
								<p>
									"Studentportal has completely surpassed our expectations."	 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="gap no-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						@include('notifications')
						<div class="newsletter-sec">
							<figure><img src="images/news-icon.png" alt=""></figure>
							<div class="leter-meta">
								<span>Be the first to hear from us</span>
								<h3>subscribe now!</h3>
							</div>	
							<form action="{{ route('newsletter') }}" method="post">
								<input type="email" name="email"  placeholder="Email @">
								@csrf
								<button type="submit" class="main-btn" data-ripple=""><i class="icofont-paper-plane"></i></button>
								<div class="mt-2 rounded"><small class="text-danger text-center">{{ $errors->first('email', ':message') }}</small></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="gap">
			<div class="bg-image" style="background-image: url(images/resources/footer-bg.png)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="web-info">
							<div class="logo"><img src="images/logo.png" alt=""><span>StudPort CM</span></div>
							<p>Subscribe our newsletter for getting notifications and alerts</p>
							<div class="contact-little">
								<span><i class="icofont-phone-circle"></i> +237-672-0769-995</span>
								<span><i class="icofont-email"></i> <a href="mailto: contact@studentportal-cm.com" class="__cf_email__">contact@studentportal-cm.com</a></span>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Company</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title="">About Us</a></li>
								<li><a href="#" title="">Career</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Terms</a></li>
								<li><a href="#" title="">FAQ</a></li>
								<li><a href="#" title="">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Quick Links</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title="">Product</a></li>
								<li><a href="#" title="">Market</a></li>
								<li><a href="#" title="">Courses</a></li>
								<li><a href="#" title="">Services</a></li>
								<li><a href="#" title="">Enterprise</a></li>
								<li><a href="#" title="">Sitemap</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Follow Us</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title=""><i class="icofont-facebook"></i>facebook</a></li>
								<li><a href="#" title=""><i class="icofont-twitter"></i>twitter</a></li>
								<li><a href="#" title=""><i class="icofont-instagram"></i>instagram</a></li>
								<li><a href="#" title=""><i class="icofont-google-plus"></i>google +</a></li>
								<li><a href="#" title=""><i class="icofont-whatsapp"></i>whatsapp</a></li>
								<li><a href="#" title=""><i class="icofont-reddit"></i>reddit</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Newsletter</h4>
							</div>
							<div class="news-lettr">
								<form class="newsletter">
									<input type="text" placeholder="Email Address">
									<button type="submit"><i class="icofont-paper-plane"></i></button>
								</form>
								<p>
									it is a long established fact that a reader will be distracted by.
								</p>
								<h5>Download App</h5>
								<a href="#" title=""><img src="images/android.png" alt=""></a>
								<a href="#" title=""><img src="images/apple.png" alt=""></a>
								<a href="#" title=""><img src="images/windows.png" alt=""></a>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer -->
	
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="">&copy; copyright All rights reserved <script>document.write(new Date().getFullYear())</script> StudentPortal</span>
				</div>
			</div>
		</div>
	</div><!-- bottombar -->
	
</div>
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="js/counterup.min.js"></script>
	<script src="js/counterup-t-waypoint.js"></script>
	<script src="js/typed.js"></script>
	<script src="js/script.js"></script>
</body>	
</html>