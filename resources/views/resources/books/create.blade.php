@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
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
							<h4 class="main-title">Add New Course or Book</h4>
							<h6 class="mb-4">Add new course and book for sale in the <b>Socimo</b> Market Place</h6>
							<div class="add-credits">
								<form>
									<fieldset class="row merged-10">
										<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
											<input class="uk-input" type="text" placeholder="Course Title">
										</div>
										<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
											<input class="uk-input" type="text" placeholder="Course Subtitle">
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<select class="uk-select">
												<option>Language</option>
												<option>English</option>
												<option>French</option>
												<option>Spanish</option>
											</select>
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<select class="uk-select">
												<option>Course Category</option>
												<option>IT & Software</option>
												<option>Business</option>
												<option>Finance</option>
												<option>Meidcal</option>
											</select>
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<select class="uk-select">
												<option>Course Subcategory</option>
												<option>React</option>
												<option>HTML5</option>
												<option>Css3</option>
												<option>Node.js</option>
											</select>
										</div>
										<div class="mb-4 col-lg-12">
											<textarea placeholder="Textarea" rows="4" class="uk-textarea"></textarea>
										</div>
										<div class="mb-4 uk-margin col-lg-4">
											<select class="uk-select">
												<option>Currency</option>
												<option>USD</option>
												<option>PKR</option>
												<option>INR</option>
												<option>Euro</option>
											</select>
										</div>
										<div class="mb-4 col-lg-4 col-md-6 col-sm-6">
											<input class="uk-input" type="text" placeholder="Price">
										</div>	
									</fieldset>
								</form>
								<div class="mt-2 col-lg-12">
									<form method="post" class="dropzone" action="http://wpkixx.com/upload-target">
										<div class="fallback">
											<input name="file" type="file" multiple />
										</div>
									</form>
								</div>	
								<div class="mt-3 col-lg-12">
									<button type="submit" class="button primary circle">Publish</button>
								</div>
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