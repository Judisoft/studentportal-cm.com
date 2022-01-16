<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>StudentPortal CM</title>
    <link rel="icon" href="{{asset('images/fav.png')}}" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js'></script>
	 <script src="https://widget.northeurope.cloudapp.azure.com:9443/v0.1.0/mobile-money-widget-mtn.js"></script>
    @yield('header_styles')
</head>
<body>
<div class="page-loader" id="page-loader">
  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>
</div><!-- page loader -->
<div class="theme-layout">
	<div class="responsive-header">
		<div class="logo res"><img src="{{asset('images/logo.png')}}" alt=""><span>StudPort</span></div>
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
	<header class="">
		<div class="topbar stick">
			<div class="logo"><img src="{{asset('images/logo.png')}}" alt=""><span>StudPort</span></div>
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
									<figure><img src="{{asset('images/resources/user1.jpg')}}" alt=""></figure>
									<span>Danial Carabal</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>
							<li>
								<div class="searched-user">
									<figure><img src="{{asset('images/resources/user2.jpg')}}" alt=""></figure>
									<span>Maria K</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>
							<li>
								<div class="searched-user">
									<figure><img src="{{asset('images/resources/user3.jpg')}}" alt=""></figure>
									<span>Fawad Khan</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>
							<li>
								<div class="searched-user">
									<figure><img src="{{asset('images/resources/user4.jpg')}}" alt=""></figure>
									<span>Danial Sandos</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>
							<li>
								<div class="searched-user">
									<figure><img src="{{asset('images/resources/user5.jpg')}}" alt=""></figure>
									<span>Jack Carter</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>
						</ul>
					</div>
				</form>
			</div>
			
			<ul class="web-elements">
				<li>
					<div class="user-dp">
						<a href="{{route('my-account')}}" title="">
                            @if(Sentinel::getUser()->pic)
							    <img alt="" src="{{Sentinel::getUser()->pic}}">
                            @else
                                <img alt="" src="{{asset('images/no_avatar.png')}}">
                            @endif
							<div class="name">
								<h4>{{Sentinel::getUser()->full_name}}</h4>
							</div>
						</a>	
					</div>
				</li>
				<li class="go-live">
					<a href="{{route('live-stream')}}" title="Go Live" data-toggle="tooltip">
						<i><svg fill="#f00" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 32 32" width="18px" height="18px"><path d="M 6.1015625 6.1015625 C 3.5675625 8.6345625 2 12.134 2 16 C 2 19.866 3.5675625 23.365437 6.1015625 25.898438 L 7.5195312 24.480469 C 5.3465312 22.307469 4 19.308 4 16 C 4 12.692 5.3465312 9.6925313 7.5195312 7.5195312 L 6.1015625 6.1015625 z M 25.898438 6.1015625 L 24.480469 7.5195312 C 26.653469 9.6925312 28 12.692 28 16 C 28 19.308 26.653469 22.307469 24.480469 24.480469 L 25.898438 25.898438 C 28.432437 23.365437 30 19.866 30 16 C 30 12.134 28.432437 8.6345625 25.898438 6.1015625 z M 9.6367188 9.6367188 C 8.0077188 11.265719 7 13.515 7 16 C 7 18.485 8.0077187 20.734281 9.6367188 22.363281 L 11.052734 20.947266 C 9.7847344 19.680266 9 17.93 9 16 C 9 14.07 9.7847344 12.319734 11.052734 11.052734 L 9.6367188 9.6367188 z M 22.363281 9.6367188 L 20.947266 11.052734 C 22.215266 12.319734 23 14.07 23 16 C 23 17.93 22.215266 19.680266 20.947266 20.947266 L 22.363281 22.363281 C 23.992281 20.734281 25 18.485 25 16 C 25 13.515 23.992281 11.265719 22.363281 9.6367188 z M 16 12 A 4 4 0 0 0 16 20 A 4 4 0 0 0 16 12 z"/></svg></i>
					</a>
				</li>
				<li>
					<a href="{{route('home')}}" title="Home" data-toggle="tooltip">
						<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></i>
					</a>
				</li>
				<li>
					<a class="mesg-notif" href="#" title="Messages" data-toggle="tooltip">
						<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></i>
					</a>
					<span></span>
				</li>
				<li>
					<a class="mesg-notif" href="{{URL::to('user/notifications')}}" title="Notifications" data-toggle="tooltip">
						<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></i>
					</a>
					<span></span>
				</li>
				<li>
					<a href="#" title="">
						<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
						</i>
					</a>
					<ul class="dropdown">
						<li><a href="{{route('my-account')}}" title=""><i class="icofont-user-alt-3"></i> Your Profile</a></li>
						<li><a href="{{URL::to('resources/courses/create')}}" title=""><i class="icofont-plus"></i> New Course</a></li>
						<li><a href="{{URL::to('invitations/index')}}" title=""><i class="icofont-brand-slideshare"></i> Invite Friends</a></li>
						<li><a href="{{URL::to('marketplace/payout')}}" title=""><i class="icofont-price"></i> Payout</a></li>
						<li><a href="{{URL::to('marketplace/pricing-plan')}}" title=""><i class="icofont-flash"></i> Upgrade</a></li>
						<li><a href="{{URL::to('help')}}" title=""><i class="icofont-question-circle"></i> Help</a></li>
						<li><a href="{{URL::to('user/settings')}}" title=""><i class="icofont-gear"></i> Setting</a></li>
						<li><a href="{{URL::to('privacy')}}" title=""><i class="icofont-notepad"></i> Privacy</a></li>
						<li><a class="dark-mod" href="#" title=""><i class="icofont-moon"></i> Dark Mode</a></li>
						<li class="logout"><a href="{{route('logout')}}" title=""><i class="icofont-power"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div id="notific">@include('notifications')</div>
	</header><!-- header -->
	
	@extends('layouts/left-menu')
    <section>
		<div style="background-color: rgba(8, 141, 205, 0.09);">
			<div class="container-fluid">
				<div class="menu-caro">
					<div class="row">
						<div class="col-lg-2">
							<div class="sidemenu">
								<i><svg id="side-menu" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="page-caro">
								<div class="link-item">
									<a class="active" href="{{route('news')}}" title="">
										<i class="">
											<svg class="feather feather-zap" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
										</i>
										<p>Newsfeed</p>
									</a>
								</div>
								<div class="link-item">
									<a href="{{URL::to('questions')}}" title="">
										<i class="">
											<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" id="ab2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" style="stroke-dasharray: 68, 88; stroke-dashoffset: 0;"/></svg>										</i>
										<p>Q&A Portal</p>
									</a>
								</div>
								<div class="link-item">
									<a href="{{URL::to('resources/courses')}}" title="">
										<i class="">
											<svg class="feather feather-airplay" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"/><polygon points="12 15 17 21 7 21 12 15"/></svg></i>
										<p>Courses</p>
									</a>
								</div>
								<div class="link-item">
									<a href="{{URL::to('resources/books')}}" title="">
										<i class="">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg></i>
										<p>Books</p>
									</a>
								</div>
								<div class="link-item">
									<a href="{{URL::to('examinations')}}" title="">
										<i class=""><svg class="feather feather-layout" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><rect ry="2" rx="2" height="18" width="18" y="3" x="3"/><line y2="9" x2="21" y1="9" x1="3"/><line y2="9" x2="9" y1="21" x1="9"/></svg></i>
										<p>Examinations</p>
									</a>
								</div>
								<div class="link-item">
									<a href="{{URL::to('collaboration/groups')}}" title="">
										<i class="">
											<svg class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
										</i>
										<p>Groups</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="user-inf">
								<div class="folowerz"><i class="icofont-help"></i>Need Help?</div>
							</div>	
						</div>
					</div>
				</div>	
			</div>
		</div>	
	</section><!-- carousel menu -->
    @yield('content')

    <footer>
		<div class="gap">
			<div class="bg-image" style="background-image: url(images/resources/footer-bg.png)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="web-info">
							<a href="#" title=""><img src="images/logo.png" alt=""></a>
							<p>Subscribe our newsletter for getting notifications and alerts</p>
							<div class="contact-little">
								<span><i class="icofont-phone-circle"></i> (+237)-672-076-995</span>
								<span><i class="icofont-email"></i> <a href="mailto:contact@studentportal-cm.com">contact@studentportal-cm.com</a></span>
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
									Subscribe to our newsletter and be the first to know about new services and discounts!
								</p>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer -->
	
	<div class="wraper-invite">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></i> Invite Colleagues</h5>
				</div>
				<div class="invitation-meta">
					<p>
						Enter an email address to invite a colleague or co-author to join you on socimo. They will receive an email and, in some cases, up to two reminders.
					</p>
					<form method="post" class="c-form">
						<input type="text" placeholder="Enter Email">
						<button type="submit" class="main-btn">Invite</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- invite colleague popup -->
	
	<div class="popup-wraper">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i><svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i> Send Message</h5>
				</div>
				<div class="send-message">
					<form method="post" class="c-form">
						<input type="text" placeholder="Enter Name..">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Write Message"></textarea>
						<div class="uploadimage">
							<i class="icofont-file-jpg"></i>
							<label class="fileContainer">
								<input type="file">Attach file
							</label>
						</div>
						<button type="submit" class="main-btn">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- send message popup -->
	<div class="new-question-popup">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>`
			<div class="popup-meta">
				<div class="popup-head">
					<h5> Create New Group</h5>
				</div>
				<div class="post-new">
					<form action="{{action('GroupsController@store')}}" method="post" class="c-form">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />
						<small class="text-danger">{{ $errors->first('title', ':message') }}</small>
						<input type="text" name="title" placeholder="Group name">
						<small class="text-danger">{{ $errors->first('description', ':message') }}</small>
						<textarea type="text" name="description" placeholder="Add a brief description of the group"></textarea>
						<button type="submit" class="main-btn">Create Group</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- ask question -->
	<div class="side-slide">
		<span class="popup-closed"><i class="icofont-close"></i></span>
		<div class="slide-meta">
			<ul class="nav nav-tabs slide-btns">
				 <li class="nav-item"><a class="active" href="#messages" data-toggle="tab">Messages</a></li>
				 <li class="nav-item"><a class="" href="#notifications" data-toggle="tab">Notifications</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active fade show" id="messages" >
					<h4><i class="icofont-envelope"></i> messages</h4>
					<a href="#" class="send-mesg" title="New Message" data-toggle="tooltip"><i class="icofont-edit"></i></a>
					<ul class="new-messages">
						<li>
							<figure><img src="{{asset('images/resources/user1.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Ibrahim Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('images/resources/user2.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Fatima J.</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('images/resources/user3.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Fawad Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('images/resources/user4.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Saim Turan</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('images/resources/user5.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
					</ul>
					<a href="{{URL::to('user/messages')}}" title="" class="main-btn" data-ripple="">view all</a>
				</div>
				<div class="tab-pane fade" id="notifications">
					<h4><i class="icofont-bell-alt"></i> notifications</h4>
					<ul class="notificationz">
						<li>
							<figure><img src="{{asset('images/resources/user5.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('images/resources/user4.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('images/resources/user2.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('images/resources/user1.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('images/resources/user3.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
					</ul>
					<a href="{{URL::to('user/notifications')}}" title="" class="main-btn" data-ripple="">view all</a>
				</div>
			</div>
		</div>
	</div><!-- side slide message & popup -->

	<div class="share-wraper">
		<div class="share-options">
			<span class="close-btn"><i class="icofont-close-circled"></i></span>
			<h5><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg></i>Share To!</h5>
			<form method="post">
				<textarea placeholder="Write Something"></textarea>
			</form>
			<ul>
				<li><a title="" href="#">Your Timeline</a></li>
				<li class="friends"><a title="" href="#">To Friends</a></li>
				<li class="socialz"><a class="active" title="" href="#">Social Media</a></li>
			</ul>
			<div style="display: block;" class="social-media">
				<ul>
					<li><a title="" href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
					<li><a title="" href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
					<li><a title="" href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
					<li><a title="" href="#" class="pinterest"><i class="icofont-pinterest"></i></a></li>
					<li><a title="" href="#" class="youtube"><i class="icofont-youtube"></i></a></li>
					<li><a title="" href="#" class="dribble"><i class="icofont-dribbble"></i></a></li>
					<li><a title="" href="#" class="behance"><i class="icofont-behance-original"></i></a></li>
				</ul>
			</div>
			<div style="display: none;" class="friends-to">
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="{{asset('images/resources/user1.jpg')}}" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Jack Carter</a></h5>
						<span>family member</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="{{asset('images/resources/user2.jpg')}}" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Xang Ching</a></h5>
						<span>Close Friend</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="{{asset('images/resources/user3.jpg')}}" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Emma Watson</a></h5>
						<span>Matul Friend</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
			</div>
			<button type="submit" class="main-btn">Publish</button>
		</div>
	</div><!-- share post -->
	
	
	<div class="cart-product">
		<a href="product-cart.html" title="View Cart" data-toggle="tooltip"><i class="icofont-cart-alt"></i></a>
		<span>03</span>
	</div><!-- view cart button -->
	
	<div class="chat-live">
		<a class="chat-btn" href="#" title="Start Live Chat" data-toggle="tooltip"><i class="icofont-facebook-messenger"></i></a>
		<span>07</span>
	</div><!-- chat button -->
	
	<div class="chat-box">
		<div class="chat-head">
			<h4>New Messages</h4>
			<span class="clozed"><i class="icofont-close-circled"></i></span>
			<form Method="post">
				<input type="text" placeholder="To..">
			</form>
		</div>
		<div class="user-tabs">
			<ul class="nav nav-tabs">
			<li class="nav-item"><a class="active" href="#link1" data-toggle="tab">All Friends</a></li>
			<li class="nav-item"><a class="" href="#link2" data-toggle="tab">Active</a><em>3</em></li>
			<li class="nav-item"><a class="" href="#link3" data-toggle="tab">Groups</a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active fade show " id="link1" >
				<div class="friend">
					<a href="#" title="">
						<figure>
							<img src="{{asset('images/resources/user1.jpg')}}" alt="">
							<span class="status online"></span>
						</figure>
						<span>Oliver</span>
						<i class=""><img src="{{asset('images/resources/user1.jpg')}}" alt=""></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="{{asset('images/resources/user2.jpg')}}" alt="">
							<span class="status away"></span>
						</figure>
						<span>Amelia</span>
						<i class="icofont-check-circled"></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="{{asset('images/resources/user3.jpg')}}" alt="">
							<span class="status offline"></span>
						</figure>
						<span>George</span>
						<i class=""><img src="{{asset('images/resources/user3.jpg')}}" alt=""></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="{{asset('images/resources/user4.jpg')}}" alt="">
							<span class="status online"></span>
						</figure>
						<span>Jacob</span>
						<i class="icofont-check-circled"></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="{{asset('images/resources/user5.jpg')}}" alt="">
							<span class="status away"></span>
						</figure>
						<span>Poppy</span>
						<i class="icofont-check-circled"></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="{{asset('images/resources/user6.jpg')}}" alt="">
							<span class="status online"></span>
						</figure>
						<span>Sophia</span>
						<i class=""><img src="{{asset('images/resources/user6.jpg')}}" alt=""></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="images/resources/user7.jpg')}}" alt="">
							<span class="status away"></span>
						</figure>
						<span>Leo king</span>
						<i class=""><img src="{{asset('images/resources/user7.jpg')}}" alt=""></i>
					</a>
				</div>
			</div>
			<div class="tab-pane fade" id="link2" >
				<div class="friend">
					<a href="#" title="">
						<figure>
							<img src="{{asset('images/resources/user1.jpg')}}" alt="">
							<span class="status online"></span>
						</figure>
						<span>Samu Jane</span>
						<i class=""><img src="{{asset('images/resources/user1.jpg')}}" alt=""></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="{{asset('images/resources/user6.jpg')}}" alt="">
							<span class="status online"></span>
						</figure>
						<span>Tina Mark</span>
						<i class=""><img src="{{asset('images/resources/user6.jpg')}}" alt=""></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="{{asset('images/resources/user7.jpg')}}" alt="">
							<span class="status online"></span>
						</figure>
						<span>Ak William</span>
						<i class=""><img src="{{asset('images/resources/user7.jpg')}}" alt=""></i>
					</a>
				</div>
			</div>
			<div class="tab-pane fade" id="link3">
				<div class="friend">
					<a href="#" title="">
						<figure class="group-chat">
							<img src="{{asset('images/resources/user5.jpg')}}" alt="">
							<img class="two" src="{{asset('images/resources/user3.jpg')}}" alt="">
							<span class="status online"></span>
						</figure>
						<span>Boys World</span>
						<i class="icofont-check-circled"></i>
					</a>
					<a href="#" title="">
						<figure class="group-chat">
							<img src="{{asset('images/resources/user2.jpg')}}" alt="">
							<img class="two" src="{{asset('images/resources/user3.jpg')}}" alt="">
							<span class="status online"></span>
						</figure>
						<span>KK university Fellows</span>
						<i class="icofont-check-circled"></i>
					</a>
					<a href="#" title="">
						<figure class="group-chat">
							<img src="{{asset('images/resources/user3.jpg')}}" alt="">
							<img class="two" src="{{asset('images/resources/user2.jpg')}}" alt="">
							<span class="status away"></span>
						</figure>
						<span>Education World</span>
						<i class="icofont-check-circled"></i>
					</a>
				</div>
			</div>
		</div>
		</div>
		<div class="chat-card">
			<div class="chat-card-head">
				<img src="{{asset('images/resources/user13.jpg')}}" alt="">
				<h6>George Floyd</h6>
				<div class="frnd-opt">
					<div class="more">
						<div class="more-post-optns">
							<i class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
							<ul>
								<li>
									<i class="icofont-pen-alt-1"></i>Edit Post
									<span>Edit This Post within a Hour</span>
								</li>
								<li>
									<i class="icofont-ban"></i>Hide Chat
									<span>Hide This Post</span>
								</li>
								<li>
									<i class="icofont-ui-delete"></i>Delete Chat
									<span>If inappropriate Post By Mistake</span>
								</li>
								<li>
									<i class="icofont-flag"></i>Report
									<span>Inappropriate Chat</span>
								</li>
							</ul>
						</div>
					</div>
					<span class="close-mesage"><i class="icofont-close"></i></span>
				</div>
			</div>
			<div class="chat-list">
				<ul>
					<li class="me">
						<div class="chat-thumb"><img src="{{asset('images/resources/chatlist1.jpg')}}" alt=""></div>
						<div class="notification-event">
							<div class="chat-message-item">
								<figure><img src="{{asset('images/resources/album5.jpg')}}" alt=""></figure>
								<div class="caption">4.5kb <i class="icofont-download" title="Download"></i></div>
							</div>
							<span class="notification-date">
								<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
								<i><img src="{{asset('images/d-tick.png')}}" alt=""></i>
							</span>
						</div>
					</li>
					<li class="me">
						<div class="chat-thumb"><img src="{{asset('images/resources/chatlist1.jpg')}}" alt=""></div>
						<div class="notification-event">
							<span class="chat-message-item">
								Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
							</span>
							<span class="notification-date">
								<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
								<i><img src="{{asset('images/d-tick.png')}}" alt=""></i>
							</span>
						</div>
					</li>
					<li class="you">
						<div class="chat-thumb"><img src="{{asset('images/resources/chatlist2.jpg')}}" alt=""></div>
						<div class="notification-event">
							<span class="chat-message-item">
								Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
							</span>
							<span class="notification-date">
								<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
								<i><img src="{{asset('images/d-tick.png')}}" alt=""></i>
							</span>
						</div>
					</li>
					<li class="me">
						<div class="chat-thumb"><img src="{{asset('images/resources/chatlist1.jpg')}}" alt=""></div>
						<div class="notification-event">
							<span class="chat-message-item">
								Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
							</span>
							<span class="notification-date">
								<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
								<i><img src="{{asset('images/d-tick.png')}}" alt=""></i>
							</span>
						</div>
					</li>
					
				</ul>
				<form class="text-box">
					<textarea placeholder="Write Mesage..."></textarea>
					<div class="add-smiles">
						<span><img src="{{asset('images/smiles/happy-3.png')}}" alt=""></span>
					</div>
					<div class="smiles-bunch">
						<i><img src="{{asset('images/smiles/thumb.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/angry-1.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/angry.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/bored-1.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/confused-1.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/wink.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/weep.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/tongue-out.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/suspicious.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/crying-1.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/crying.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/embarrassed.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/emoticons.png')}}" alt=""></i>
						<i><img src="{{asset('images/smiles/happy-2.png')}}" alt=""></i>
					</div>
					<button type="submit"><i class="icofont-paper-plane"></i></button>
				</form>
			</div>
		</div>
	</div><!-- chat box -->
	
	<div class="createroom-popup">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head text-center">
					<h5 class="only-icon"><i class="icofont-video-cam"></i></h5>
				</div>
				<div class="room-meta">
					<h4>Create Your Room</h4>
					<ul>
						<li>
							<i class="icofont-hand"></i>
							<div>
								<h6>Room Activity</h6>
								<span>Jack's Room</span>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="checkbox3">
								<label for="checkbox3"></label>
							</div>
						</li>
						<li>
							<i class="icofont-clock-time"></i>
							<div>
								<h6>Start Time</h6>
								<span>Now</span>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="checkbox4">
								<label for="checkbox4"></label>
							</div>
						</li>
						<li>
							<i class="icofont-users-alt-4"></i>
							<div>
								<h6>Invite to All Friends</h6>
								<span>Allow All friends to see this room</span>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="checkbox5">
								<label for="checkbox5"></label>
							</div>
						</li>
					</ul>
					<span>Your room isn't visible until you invite people after you've created it.</span>
					<a href="#" title="" class="main-btn full-width">Create Room</a>
				</div>
			</div>
		</div>
	</div><!-- create new room -->
	
	<div class="modal fade" id="img-comt">
		<div class="modal-dialog">
		  <div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">×</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div class="row merged">
					<div class="col-lg-9">
						<div class="pop-image">
							<div class="pop-item">
								<div class="action-block">
                                    <a class="action-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                                    </a>
                                    <a class="action-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                    </a>
                                    <a class="action-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"/><polyline points="19 12 12 19 5 12"/></svg>
                                    </a>
                                    <a class="action-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                                    </a>
                                </div>
								<figure><img src="{{asset('images/resources/blog-detail.jpg')}}" alt=""></figure>
								<div class="stat-tools">
									<div class="box">
									  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
										<div class="Emojis">
										  <div class="Emoji Emoji--like">
											<div class="icon icon--like"></div>
										  </div>
										  <div class="Emoji Emoji--love">
											<div class="icon icon--heart"></div>
										  </div>
										  <div class="Emoji Emoji--haha">
											<div class="icon icon--haha"></div>
										  </div>
										  <div class="Emoji Emoji--wow">
											<div class="icon icon--wow"></div>
										  </div>
										  <div class="Emoji Emoji--sad">
											<div class="icon icon--sad"></div>
										  </div>
										  <div class="Emoji Emoji--angry">
											<div class="icon icon--angry"></div>
										  </div>
										</div>
									  </div>
									</div>
									<div class="box">
										<div class="Emojis">
										  <div class="Emoji Emoji--like">
											<div class="icon icon--like"></div>
										  </div>
										  <div class="Emoji Emoji--love">
											<div class="icon icon--heart"></div>
										  </div>
										  <div class="Emoji Emoji--haha">
											<div class="icon icon--haha"></div>
										  </div>
										  <div class="Emoji Emoji--wow">
											<div class="icon icon--wow"></div>
										  </div>
										  <div class="Emoji Emoji--sad">
											<div class="icon icon--sad"></div>
										  </div>
										  <div class="Emoji Emoji--angry">
											<div class="icon icon--angry"></div>
										  </div>
										</div>
									  </div>
									<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
									<div class="emoji-state">
										<div class="popover_wrapper">
											<a class="popover_title" href="#" title=""><img alt="" src="{{asset('images/smiles/thumb.png')}}"></a>
											<div class="popover_content">
												<span><img alt="" src="{{asset('images/smiles/thumb.png')}}"> Likes</span>
												<ul class="namelist">
													<li>Jhon Doe</li>
													<li>Amara Sin</li>
													<li>Sarah K.</li>
													<li><span>20+ more</span></li>
												</ul>
											</div>
										</div>
										<div class="popover_wrapper">
											<a class="popover_title" href="#" title=""><img alt="" src="{{asset('images/smiles/heart.png')}}"></a>
											<div class="popover_content">
												<span><img alt="" src="{{asset('images/smiles/heart.png')}}"> Love</span>
												<ul class="namelist">
													<li>Amara Sin</li>
													<li>Jhon Doe</li>
													<li><span>10+ more</span></li>
												</ul>
											</div>
										</div>
										<div class="popover_wrapper">
											<a class="popover_title" href="#" title=""><img alt="" src="{{asset('images/smiles/smile.png')}}"></a>
											<div class="popover_content">
												<span><img alt="" src="{{asset('images/smiles/smile.png')}}"> Happy</span>
												<ul class="namelist">
													<li>Sarah K.</li>
													<li>Jhon Doe</li>
													<li>Amara Sin</li>
													<li><span>100+ more</span></li>
												</ul>
											</div>
										</div>
										<div class="popover_wrapper">
											<a class="popover_title" href="#" title=""><img alt="" src="{{asset('images/smiles/weep.png')}}"></a>
											<div class="popover_content">
												<span><img alt="" src="{{asset('images/smiles/weep.png')}}"> Dislike</span>
												<ul class="namelist">
													<li>Danial Carbal</li>
													<li>Amara Sin</li>
													<li>Sarah K.</li>
													<li><span>15+ more</span></li>
												</ul>
											</div>
										</div>
										<p>10+</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="commentbar">
							<div class="user">
								<figure><img src="{{asset('images/resources/user1.jpg')}}" alt=""></figure>
								<div class="user-information">
									<h4><a href="#" title="">Danile Walker</a></h4>
									<span>2 hours ago</span>
								</div>
								<a href="#" title="Follow" data-ripple="">Follow</a>
							</div>
							<div class="we-video-info">
								<ul>
									<li>
										<span title="Comments" class="liked">
											<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg></i>
											<ins>52</ins>
										</span>
									</li>
									<li>
										<span title="Comments" class="comment">
											<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></i>
											<ins>52</ins>
										</span>
									</li>

									<li>
										<span>
											<a title="Share" href="#" class="">
												<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
											</a>
											<ins>20</ins>
										</span>	
									</li>
								</ul>
								<div class="users-thumb-list">
									<a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
										<img src="{{asset('images/resources/userlist-1.jpg')}}" alt="">  
									</a>
									<a href="#" title="" data-toggle="tooltip" data-original-title="frank">
										<img src="{{asset('images/resources/userlist-2.jpg')}}" alt="">  
									</a>
									<a href="#" title="" data-toggle="tooltip" data-original-title="Sara">
										<img src="{{asset('images/resources/userlist-1.jpg')}}" alt="">  
									</a>
									<a href="#" title="" data-toggle="tooltip" data-original-title="Amy">
										<img src="{{asset('images/resources/userlist-2.jpg')}}" alt="">  
									</a>
									<span><strong>You</strong>, <b>Sarah</b> and <a title="" href="#">24+ more</a> liked</span>
								</div>
							</div>
							<div class="new-comment" style="display: block;">
								<form method="post">
									<input type="text" placeholder="write comment">
									<button type="submit"><i class="icofont-paper-plane"></i></button>
								</form>
								<div class="comments-area">
									<ul>
										<li>
											<figure><img alt="" src="{{asset('images/resources/user1.jpg')}}"></figure>
											<div class="commenter">
												<h5><a title="" href="#">Jack Carter</a></h5>
												<span>2 hours ago</span>
												<p>
													i think that some how, we learn who we really are and then live with that decision, great post!
												</p>
												<span>you can view the more detail via link</span>
												<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
											</div>
											<a title="Like" href="#"><i class="icofont-heart"></i></a>
											<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
										</li>
										<li>
											<figure><img alt="" src="{{asset('images/resources/user2.jpg')}}"></figure>
											<div class="commenter">
												<h5><a title="" href="#">Ching xang</a></h5>
												<span>2 hours ago</span>
												<p>
													i think that some how, we learn who we really are and then live with that decision, great post!
												</p>
											</div>
											<a title="Like" href="#"><i class="icofont-heart"></i></a>
											<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
										</li>
										<li>
											<figure><img alt="" src="{{asset('images/resources/user3.jpg')}}"></figure>
											<div class="commenter">
												<h5><a title="" href="#">Danial Comb</a></h5>
												<span>2 hours ago</span>
												<p>
													i think that some how, we learn who we really are and then live with that decision, great post!
												</p>
											</div>
											<a title="Like" href="#"><i class="icofont-heart"></i></a>
											<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
										</li>
										<li>
											<figure><img alt="" src="{{asset('images/resources/user4.jpg')}}"></figure>
											<div class="commenter">
												<h5><a title="" href="#">Jack Carter</a></h5>
												<span>2 hours ago</span>
												<p>
													i think that some how, we learn who we really are and then live with that decision, great post!
												</p>
											</div>
											<a title="Like" href="#"><i class="icofont-heart"></i></a>
											<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		  </div>
		</div>
    </div><!-- The Scrolling Modal image with comment -->
</div>
<script src="{{asset('js/main.min.js')}}"></script><!-- vendors merged files -->
<script src="{{asset('js/date-time.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script><!-- custom scripts -->
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
<script src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
@yield('footer_scripts')
</body>	
</html>