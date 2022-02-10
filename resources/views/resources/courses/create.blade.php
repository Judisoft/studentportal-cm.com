@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
<section>
	<div class="gap no-gap bluesh high-opacity">
		<div style="background-image: url(/../images/resources/top-bg.jpg)" class="bg-image"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="post-subject">
					<h1>Add Course</h1>
					<p>Add new course for sale on the StudentPortal Market Place</p>
					</div>
				</div>
			</div>
		</div>
	</div>
    </section>
    <section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<aside class="sidebar">
							<div class="widget">
								<h4 class="widget-title">Recent Media</h4>
								<div class="recent-media">
									<figure>
										<img src="{{asset('images/resources/course-6.jpg')}}" alt="">
										<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
										<span>Vu.Js Free Tutorial</span>
									</figure>
									<figure>
										<img src="{{asset('images/resources/course-1.jpg')}}" alt="">
										<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
										<span>Css3 2020 Tutorial</span>
									</figure>
								</div>
							</div><!-- recent media -->
							<div class="widget">
								<h4 class="widget-title">Post Analytics</h4>
								<ul class="widget-analytics">
									<li>Reads <span>56</span></li>
									<li>Recommendations <span>3</span></li>
									<li>Shares <span>22</span></li>
									<li>References <span>17</span></li>
								</ul>
							</div><!-- post analytics -->
							
							<div class="widget">
								<h4 class="widget-title">Add Credits</h4>
								<div class="set-card">
									<img src="{{asset('images/paypal.png')}}" alt="">
									<p>
										Add credits to your account
									</p>
									<a class="main-btn" href="#" title="">Set Card</a>
									<div class="added-complete">
										<h6>Added: <span>25 Mar 2020</span></h6>
									</div>
								</div>
							</div>
						</aside>
						
					</div>
					<div class="col-lg-8">
						<div class="main-wraper">
							<h4 class="main-title">Add New Course</h4>
							<h6 class="mb-4">Add new course and book for sale in the <b>StudPort Market Place</b> Market Place</h6>
							<div class="add-credits">
								<div id="notific">@include('notifications')</div>
								<form action="{{action('CoursesController@store')}}" method="post">
									<!-- CSRF Token -->
                    				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
									<fieldset class="row merged-10">
										<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
											<input class="uk-input" type="text" name="title" placeholder="Course Title">
											<small class="text-danger">{{ $errors->first('title', ':message') }}</small>
										</div>
										<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
											<input class="uk-input" type="text" name="sub_title" placeholder="Course Subtitle">
											<small class="text-danger">{{ $errors->first('sub_title', ':message') }}</small>
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<select class="uk-select" name="language">
												<option value="">Language</option>
												<option value="en">English</option>
												<option value="fr">French</option>
											</select>
											<small class="text-danger">{{ $errors->first('language', ':message') }}</small>
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<select class="uk-select" name="course_category">
												<option value="">Course Category</option>
												<option value="IT">IT & Software</option>
												<option value="business">Business</option>
												<option value="finance">Finance</option>
												<option value="medical">Medical</option>
											</select>
											<small class="text-danger">{{ $errors->first('course_category', ':message') }}</small>
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<select class="uk-select" name="sub_category">
												<option value="">Course Subcategory</option>
												<option value="react">React</option>
												<option value="html5">HTML5</option>
												<option value="css3">Css3</option>
												<option value="nodejs">Node.js</option>
											</select>
											<small class="text-danger">{{ $errors->first('sub_category', ':message') }}</small>
										</div>
										<div class="mb-4 col-lg-12">
											<textarea name="description" placeholder="Course description" rows="4" class="uk-textarea"></textarea>
											<small class="text-danger">{{ $errors->first('description', ':message') }}</small>
										</div>
										<div class="mb-4 uk-margin col-lg-4">
											<select class="uk-select" name="currency">
												<option value="">Currency</option>
												<option value="usd">USD</option>
												<option value="pkr">PKR</option>
												<option value="inr">INR</option>
												<option value="euro">Euro</option>
											</select>
											<small class="text-danger">{{ $errors->first('currency', ':message') }}</small>
										</div>
										<div class="mb-4 col-lg-4 col-md-6 col-sm-6">
											<input class="uk-input" name="price" type="text" placeholder="Price">
											<small class="text-danger">{{ $errors->first('price', ':message') }}</small>
										</div>	
										<div class="mt-2 col-lg-12">
											<div class="fallback">
												<input name="cover_image" type="file" />
											</div>
										</div>	
										<div class="mt-3 col-lg-12">
											<button type="submit" class="button primary circle">Publish</button>
										</div>
									</fieldset>
								</form>
								<p>
									<b>Special Note:</b>
									"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system,
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('footer_scripts')
@stop