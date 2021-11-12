@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
    <div class="gap no-gap">
		<div class="top-area mate-black low-opacity">
			<div class="bg-image" style="background-image: url(/images/resources/top-bg2.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="post-subject">
							<div class="university-tag">
								<figure><img src="{{asset('images/resources/uni4.jpg')}}" alt=""></figure>
								<div class="uni-name">
									<h4>Akdeniz University</h4>
									<span>Antalya, Turky</span>
								</div>
								<ul class="sharing-options">
									<li><a title="Invite Colleagues" href="#" data-toggle="tooltip"><i class="icofont-id-card"></i></a> </li>
									<li><a title="Follow" href="#" data-toggle="tooltip"><i class="icofont-star"></i></a> </li>
									<li><a title="Share" href="#" data-toggle="tooltip"><i class="icofont-share-alt"></i></a> </li>
								</ul>
								<a class="invite" href="#" title="" data-ripple="">Invite Colleagues</a>
							</div>

							<ul class="nav nav-tabs post-detail-btn">
								 <li class="nav-item"><a class="active" href="#link11" data-toggle="tab">Overview</a></li>
								 <li class="nav-item"><a class="" href="#link12" data-toggle="tab">Departments</a></li>
								 <li class="nav-item"><a class="" href="#link13" data-toggle="tab">Members</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- top Head -->
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-8">
								<div class="tab-content">
								    <div class="tab-pane fade show active" id="link11" >
										<div class="main-wraper">
											<h4 class="main-title">Information</h4>
											<div class="uni-info">
												<ul>
													<li>
														<span>Address</span>
														<p>Dumlupınar Bulvarı, 07058, Antalya, Turkey</p>
													</li>
													<li>
														<span>Head Of Institute</span>
														<p>Prof. Dr. Mustafa ÜNAL</p>
													</li>
													<li>
														<span>Website</span>
														<p> http://www.akdeniz.edu.tr</p>
													</li>
													<li>
														<span>Phone</span>
														<p>90 242 2274400</p>
													</li>
													<li>
														<span>Fax</span>
														<p>90 242 2275540</p>
													</li>
												</ul>
											</div>
										</div>
										<div class="main-wraper">
											<h4 class="main-title">Departments <a href="#" title="">view all</a></h4>
											<div class="dept-info">
												<ul>
													<li>
														<h6>Department of Electrical and Electronics Engineering</h6>
														<span>Members <i>65</i></span>
													</li>
													<li>
														<h6>Department of Food Engineering</h6>
														<span>Members <i>55</i></span>
													</li>
													<li>
														<h6>Faculty of Nursing</h6>
														<span>Members <i>38</i></span>
													</li>
												</ul>
											</div>
										</div>
										<div class="main-wraper">
											<h4 class="main-title">Members <span>(254)</span> <a href="#" title="">view all</a></h4>
											<div class="row col-xs-6 merged-10">
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-1.jpg')}}"></figure>
														<span>Amy Watson</span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-2.jpg')}}"></figure>
														<span>Muhammad A.</span>
														<ins>Department of zovology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-3.jpg')}}"></figure>
														<span>Sara Jean</span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-4.jpg')}}"></figure>
														<span>William Jhon</span>
														<ins>Department of Biologye</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
											</div>
										</div>
								    </div>
								  	<div class="tab-pane fade" id="link12" >
								  		<div class="main-wraper">
											<h4 class="main-title">Departments</h4>
											<div class="dept-info">
												<ul>
													<li>
														<h6>Department of Electrical and Electronics Engineering</h6>
														<span>Members <i>65</i></span>
													</li>
													<li>
														<h6>Department of Food Engineering</h6>
														<span>Members <i>55</i></span>
													</li>
													<li>
														<h6>Faculty of Nursing</h6>
														<span>Members <i>38</i></span>
													</li>
													<li>
														<h6>Department of Electrical and Electronics Engineering</h6>
														<span>Members <i>65</i></span>
													</li>
													<li>
														<h6>Department of Food Engineering</h6>
														<span>Members <i>55</i></span>
													</li>
													<li>
														<h6>Faculty of Nursing</h6>
														<span>Members <i>38</i></span>
													</li>
													<li>
														<h6>Department of Electrical and Electronics Engineering</h6>
														<span>Members <i>65</i></span>
													</li>
													<li>
														<h6>Department of Food Engineering</h6>
														<span>Members <i>55</i></span>
													</li>
													<li>
														<h6>Faculty of Nursing</h6>
														<span>Members <i>38</i></span>
													</li>
													<li>
														<h6>Department of Electrical and Electronics Engineering</h6>
														<span>Members <i>65</i></span>
													</li>
													<li>
														<h6>Department of Food Engineering</h6>
														<span>Members <i>55</i></span>
													</li>
													<li>
														<h6>Faculty of Nursing</h6>
														<span>Members <i>38</i></span>
													</li>
												</ul>
											</div>
											<div class="sp sp-bars"></div>
										</div>
									</div>
								  	<div class="tab-pane fade" id="link13">
										
										<div class="main-wraper">
											<h4 class="main-title">Members (254)</h4>
											<div class="row col-xs-6 merged-10">
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-1.jpg')}}"></figure>
														<span>Amy Watson</span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-2.jpg')}}"></figure>
														<span>Muhammad A.</span>
														<ins>Department of zovology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-3.jpg')}}"></figure>
														<span>Sara Jean</span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-4.jpg')}}"></figure>
														<span>William Jhon</span>
														<ins>Department of Biologye</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-5.jpg')}}"></figure>
														<span>Amy Watson</span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-6.jpg')}}"></figure>
														<span>Maria K.</span>
														<ins>Department of zovology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-7.jpg')}}"></figure>
														<span>Zing Zang</span>
														<ins>Department of Sociology</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-8.jpg')}}"></figure>
														<span>William Jhon</span>
														<ins>Department of Biologye</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-9.jpg')}}"></figure>
														<span>Sara Will</span>
														<ins>Department of Biologye</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-10.jpg')}}"></figure>
														<span>Emily Jane</span>
														<ins>Department of Biologye</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-11.jpg')}}"></figure>
														<span>Bunny Bill</span>
														<ins>Department of Biologye</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6">
													<div class="members">
														<figure><img alt="" src="{{asset('images/resources/speak-12.jpg')}}"></figure>
														<span>William Sam</span>
														<ins>Department of Biologye</ins>
														<a data-ripple="" title="" href="#"><i class="icofont-star"></i> Follow</a>
													</div>
												</div>
											</div>
											<div class="sp sp-bars"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<aside class="sidebar static right">
									<div class="widget">
										<h4 class="widget-title">Post Analytics</h4>
										<ul class="widget-analytics">
											<li>Reads <span>56</span></li>
											<li>Recommendations <span>3</span></li>
											<li>Shares <span>22</span></li>
											<li>References <span>17</span></li>
										</ul>
									</div>
									<div class="widget">
										<h4 class="widget-title">Ask Research Question?</h4>
										<div class="ask-question">
											<i class="icofont-question-circle"></i>
											<h6>Ask questions in Q&A to get help from experts in your field.</h6>
											<a class="ask-qst" href="#" title="">Ask a question</a>
										</div>
									</div>
									<div class="widget">
										<h4 class="widget-title">Explor Events <a class="see-all" href="#" title="">See All</a></h4>
										<div class="rec-events bg-purple">
											<i class="icofont-gift"></i>
											<h6><a title="" href="#">BZ University good night event in columbia</a></h6>
											<img alt="" src="{{asset('images/clock.png')}}">
										</div>
										<div class="rec-events bg-blue">
											<i class="icofont-microphone"></i>
											<h6><a title="" href="#">The 3rd International Conference 2020</a></h6>
											<img alt="" src="{{asset('images/clock.png')}}">
										</div>
									</div>
									<div class="widget stick-widget">
										<h4 class="widget-title">Who's follownig</h4>
										<ul class="followers" >
											<li>
												<figure><img alt="" src="{{asset('images/resources/friend-avatar.jpg')}}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Kelly Bill</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{asset('images/resources/friend-avatar2.jpg')}}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Issabel</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{asset('images/resources/friend-avatar3.jpg')}}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Andrew</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{asset('images/resources/friend-avatar4.jpg')}}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Sophia</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{asset('images/resources/friend-avatar5.jpg')}}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Allen</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
										</ul>	
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('foooter_styles')
@stop